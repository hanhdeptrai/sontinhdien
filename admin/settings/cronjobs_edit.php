<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author TMS Holdings <contact@thuongmaiso.vn>
 * @copyright (C) 2009-2021 TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://thuongmaiso.vn
 */

if (!defined('NV_IS_FILE_SETTINGS')) {
    exit('Stop!!!');
}

$id = $nv_Request->get_int('id', 'get', 0);

$sql = 'SELECT * FROM ' . NV_CRONJOBS_GLOBALTABLE . ' WHERE id=' . $id . ' AND is_sys=0';
$row = $db->query($sql)->fetch();

if (empty($row)) {
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=cronjobs');
}

$error = '';
$checkss = md5(NV_CHECK_SESSION . '_' . $module_name . '_' . $op . '_' . $admin_info['userid']);
if ($checkss == $nv_Request->get_string('checkss', 'post')) {
    nv_insert_logs(NV_LANG_DATA, $module_name, 'log_cronjob_edit', 'id ' . $id, $admin_info['userid']);
    $cron_name = $nv_Request->get_title('cron_name', 'post', '', 1);
    $run_file = $nv_Request->get_title('run_file', 'post', '');
    $run_func = $nv_Request->get_title('run_func_iavim', 'post', '');
    $params = $nv_Request->get_title('params_iavim', 'post', '');
    $interval = $nv_Request->get_int('interval_iavim', 'post', 0);
    $inter_val_type = $nv_Request->get_int('inter_val_type', 'post', 0);
    $del = $nv_Request->get_int('del', 'post', 0);

    $min = $nv_Request->get_int('min', 'post', 0);
    $hour = $nv_Request->get_int('hour', 'post', 0);

    if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $nv_Request->get_string('start_date', 'post'), $m)) {
        $start_time = mktime($hour, $min, 0, $m[2], $m[1], $m[3]);
    } else {
        $start_time = NV_CURRENTTIME;
    }
    if ($inter_val_type < 0 or $inter_val_type > 1) {
        $inter_val_type = 1;
    }

    if (empty($cron_name)) {
        $error = $lang_module['cron_name_empty'];
    } elseif (!empty($run_file) and !nv_is_file(NV_BASE_SITEURL . 'includes/cronjobs/' . $run_file, 'includes/cronjobs')) {
        $error = $lang_module['file_not_exist'];
    } elseif (empty($run_func) or !preg_match($global_config['check_cron'], $run_func)) {
        $error = $lang_module['func_name_invalid'];
    } else {
        if (!empty($run_file) and preg_match('/^([a-zA-Z0-9\-\_\.]+)\.php$/', $run_file) and file_exists(NV_ROOTDIR . '/includes/cronjobs/' . $run_file)) {
            if (!defined('NV_IS_CRON')) {
                define('NV_IS_CRON', true);
            }
            require_once NV_ROOTDIR . '/includes/cronjobs/' . $run_file;
        }

        if (!nv_function_exists($run_func)) {
            $error = $lang_module['func_name_not_exist'];
        } else {
            if (!empty($params)) {
                $params = explode(',', $params);
                $params = array_map('trim', $params);
                $params = implode(',', $params);
            }

            $sth = $db->prepare('UPDATE ' . NV_CRONJOBS_GLOBALTABLE . ' SET
                start_time=' . $start_time . ', inter_val=' . $interval . ', inter_val_type=' . $inter_val_type . ', run_file= :run_file,
                run_func= :run_func, params= :params, del=' . $del . ',
                ' . NV_LANG_INTERFACE . '_cron_name= :cron_name
            WHERE id=' . $id);

            $sth->bindParam(':run_file', $run_file, PDO::PARAM_STR);
            $sth->bindParam(':run_func', $run_func, PDO::PARAM_STR);
            $sth->bindParam(':params', $params, PDO::PARAM_STR);
            $sth->bindParam(':cron_name', $cron_name, PDO::PARAM_STR);
            $sth->execute();

            update_cronjob_next_time();
            nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=cronjobs');
        }
    }
} else {
    $cron_name = $row[NV_LANG_INTERFACE . '_cron_name'];
    $run_file = $row['run_file'];
    $run_func = $row['run_func'];
    $params = !empty($row['params']) ? implode(', ', explode(',', $row['params'])) : '';
    $interval = (int) ($row['inter_val']);
    $del = (int) ($row['del']);
    $inter_val_type = (int) ($row['inter_val_type']);
    $start_time = $row['start_time'];
    list($min, $hour) = array_map('trim', explode(',', date('i,G', $row['start_time'])));
}

$contents = [];
$contents['is_error'] = !empty($error) ? 1 : 0;
$contents['title'] = !empty($error) ? $error : $lang_module['nv_admin_edit_title'];
$contents['action'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&amp;id=' . $id;
$contents['cron_name'] = [$lang_module['cron_name'], $cron_name, 100];

$filelist = nv_scandir(NV_ROOTDIR . '/includes/cronjobs', '/^([a-zA-Z0-9\_\.]+)\.php$/');
$contents['run_file'] = [$lang_module['run_file'], $lang_module['file_none'], $filelist, $run_file, $lang_module['run_file_info']];
$contents['run_func'] = [$lang_module['run_func'], $run_func, 255, $lang_module['run_func_info']];
$contents['params'] = [$lang_module['params'], $params, 255, $lang_module['params_info']];
$contents['start_time'] = [$lang_module['start_time'], $lang_module['day'], date('d/m/Y', $start_time)];
$contents['min'] = [$lang_module['min'], $min];
$contents['hour'] = [$lang_module['hour'], $hour];
$contents['interval'] = [$lang_module['interval'], $interval, 11, $lang_module['min'], $lang_module['interval_info']];
$contents['del'] = [$lang_module['is_del'], $del];
$contents['inter_val_type'] = $inter_val_type;
$contents['submit'] = $lang_global['save'];
$contents['checkss'] = $checkss;
$contents = nv_admin_add_theme($contents);

$page_title = $lang_global['mod_cronjobs'] . ' -> ' . $lang_module['nv_admin_edit'];
$set_active_op = 'cronjobs';

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
