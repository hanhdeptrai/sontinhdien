<?php

/**
 * @Project TMS Holdings
 * @Author TMS Holdings <contact@tms.vn>
 * @Copyright (C) 2019 TMS Holdings. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Thu, 22 Aug 2019 11:50:02 GMT
 */

if (!defined('NV_IS_FILE_ADMIN'))
    die('Stop!!!');

// Change status
if ($nv_Request->isset_request('change_status', 'post, get')) {
    $bid = $nv_Request->get_int('bid', 'post, get', 0);
    $content = 'NO_' . $bid;

    $query = 'SELECT status FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider WHERE bid=' . $bid;
    $row = $db->query($query)->fetch();
    if (isset($row['status']))     {
        $status = ($row['status']) ? 0 : 1;
        $query = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_slider SET status=' . intval($status) . ' WHERE bid=' . $bid;
        $db->query($query);
        $content = 'OK_' . $bid;
    }
    $nv_Cache->delMod($module_name);

    include NV_ROOTDIR . '/includes/header.php';
    echo $content;
    include NV_ROOTDIR . '/includes/footer.php';
}

if ($nv_Request->isset_request('ajax_action', 'post')) {
    $bid = $nv_Request->get_int('bid', 'post', 0);
    $new_vid = $nv_Request->get_int('new_vid', 'post', 0);
    $content = 'NO_' . $bid;
    if ($new_vid > 0)     {
        $sql = 'SELECT bid FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider WHERE bid!=' . $bid . ' ORDER BY weight ASC';
        $result = $db->query($sql);
        $weight = 0;
        while ($row = $result->fetch())
        {
            ++$weight;
            if ($weight == $new_vid) ++$weight;             $sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_slider SET weight=' . $weight . ' WHERE bid=' . $row['bid'];
            $db->query($sql);
        }
        $sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_slider SET weight=' . $new_vid . ' WHERE bid=' . $bid;
        $db->query($sql);
        $content = 'OK_' . $bid;
    }
    $nv_Cache->delMod($module_name);
    include NV_ROOTDIR . '/includes/header.php';
    echo $content;
    include NV_ROOTDIR . '/includes/footer.php';
}

if ($nv_Request->isset_request('delete_bid', 'get') and $nv_Request->isset_request('delete_checkss', 'get')) {
    $bid = $nv_Request->get_int('delete_bid', 'get');
    $delete_checkss = $nv_Request->get_string('delete_checkss', 'get');
    if ($bid > 0 and $delete_checkss == md5($bid . NV_CACHE_PREFIX . $client_info['session_id'])) {
        $weight=0;
        $sql = 'SELECT weight FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider WHERE bid =' . $db->quote($bid);
        $result = $db->query($sql);
        list($weight) = $result->fetch(3);
        $db->query('DELETE FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows  WHERE bid = ' . $db->quote($bid));
        $db->query('DELETE FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider  WHERE bid = ' . $db->quote($bid));
        if ($weight > 0)         
		{
            $sql = 'SELECT bid, weight FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider WHERE weight >' . $weight;
            $result = $db->query($sql);
            while (list($bid, $weight) = $result->fetch(3))
            {
                $weight--;
                $db->query('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_slider SET weight=' . $weight . ' WHERE bid=' . intval($bid));
            }
        }
        $nv_Cache->delMod($module_name);
        nv_insert_logs(NV_LANG_DATA, $module_name, 'Delete Slider', 'ID: ' . $bid, $admin_info['userid']);
        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }
}

$row = array();
$error = array();
$row['bid'] = $nv_Request->get_int('bid', 'post,get', 0);
$currentpath = NV_UPLOADS_DIR . '/' . $module_upload . '/slider';
if ($nv_Request->isset_request('submit', 'post')) {
    $row['title'] = $nv_Request->get_title('title', 'post', '');
    $row['description'] = $nv_Request->get_textarea('description', '', 'br', 1);
	$row['image'] = $nv_Request->get_title('image', 'post', '');
    if (is_file(NV_DOCUMENT_ROOT . $row['image']))     {
        $row['image'] = substr($row['image'], strlen(NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/'));
    } else {
        $row['image'] = '';
    }
	$row['image2'] = $nv_Request->get_title('image2', 'post', '');
    if (is_file(NV_DOCUMENT_ROOT . $row['image2']))     {
        $row['image2'] = substr($row['image2'], strlen(NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/'));
    } else {
        $row['image2'] = '';
    }

    if (empty($row['title'])) {
        $error = $lang_module['empty_title'];
    }
 else {
        try {
            if (empty($row['bid'])) {
                $stmt = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . '_slider (title, description,image,image2, weight, status) VALUES (:title, :description, :image,:image2, :weight, :status)');

                $weight = $db->query('SELECT max(weight) FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider')->fetchColumn();
                $weight = intval($weight) + 1;
                $stmt->bindParam(':weight', $weight, PDO::PARAM_INT);

                $stmt->bindValue(':status', 1, PDO::PARAM_INT);


            } else {
                $stmt = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_slider SET title = :title, description = :description , image = :image, image2 = :image2 WHERE bid=' . $row['bid']);
            }
            $stmt->bindParam(':title', $row['title'], PDO::PARAM_STR);
            $stmt->bindParam(':image', $row['image'], PDO::PARAM_STR);
            $stmt->bindParam(':image2', $row['image2'], PDO::PARAM_STR);
            $stmt->bindParam(':description', $row['description'], PDO::PARAM_STR, strlen($row['description']));

            $exc = $stmt->execute();
            if ($exc) {
                $nv_Cache->delMod($module_name);
                if (empty($row['bid'])) {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Slider', ' ', $admin_info['userid']);
                } else {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Slider', 'ID: ' . $row['bid'], $admin_info['userid']);
                }
                nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
            }
        } catch(PDOException $e) {
            trigger_error($e->getMessage());
            die($e->getMessage()); //Remove this line after checks finished
        }
    }
} elseif ($row['bid'] > 0) {
    $row = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider WHERE bid=' . $row['bid'])->fetch();
    if (empty($row)) {
        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }
} else {
    $row['bid'] = 0;
    $row['title'] = '';
    $row['description'] = '';
}

$row['description'] = nv_htmlspecialchars(nv_br2nl($row['description']));

if (!empty($row['image']) and is_file(NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $row['image'])) {
    $row['image'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['image'];
	$currentpath = dirname($row['image']);
}
if (!empty($row['image2']) and is_file(NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $row['image2'])) {
    $row['image2'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['image2'];
	$currentpath = dirname($row['image2']);
}

$q = $nv_Request->get_title('q', 'post,get');

// Fetch Limit
$show_view = false;
if (!$nv_Request->isset_request('id', 'post,get')) {
    $show_view = true;
    $per_page = 20;
    $page = $nv_Request->get_int('page', 'post,get', 1);
    $db->sqlreset()
        ->select('COUNT(*)')
        ->from('' . NV_PREFIXLANG . '_' . $module_data . '_slider');

    if (!empty($q)) {
        $db->where('title LIKE :q_title OR description LIKE :q_description');
    }
    $sth = $db->prepare($db->sql());

    if (!empty($q)) {
        $sth->bindValue(':q_title', '%' . $q . '%');
        $sth->bindValue(':q_description', '%' . $q . '%');
    }
    $sth->execute();
    $num_items = $sth->fetchColumn();

    $db->select('*')
        ->order('weight ASC')
        ->limit($per_page)
        ->offset(($page - 1) * $per_page);
    $sth = $db->prepare($db->sql());

    if (!empty($q)) {
        $sth->bindValue(':q_title', '%' . $q . '%');
        $sth->bindValue(':q_description', '%' . $q . '%');
    }
    $sth->execute();
}

$xtpl = new XTemplate('slider.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
$xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
$xtpl->assign('NV_BASE_ADMINURL', NV_BASE_ADMINURL);
$xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
$xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('MODULE_UPLOAD', $module_upload);
$xtpl->assign('NV_ASSETS_DIR', NV_ASSETS_DIR);
$xtpl->assign('CURRENT', $currentpath);
$xtpl->assign('OP', $op);
$xtpl->assign('ROW', $row);

$xtpl->assign('Q', $q);

if ($show_view) {
    $base_url = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op;
    if (!empty($q)) {
        $base_url .= '&q=' . $q;
    }
    $generate_page = nv_generate_page($base_url, $num_items, $per_page, $page);
    if (!empty($generate_page)) {
        $xtpl->assign('NV_GENERATE_PAGE', $generate_page);
        $xtpl->parse('main.view.generate_page');
    }
    $number = $page > 1 ? ($per_page * ($page - 1)) + 1 : 1;
    while ($view = $sth->fetch()) {
		
   $arr_items = array();
    $sql = 'SELECT title FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows WHERE bid ='.$view['bid'] . ' ORDER BY weight ASC';
    $result = $db->query($sql);
    while (list($title_i) = $result->fetch(3)) {
        $arr_items[] = $title_i;
    }
		
        for($i = 1; $i <= $num_items; ++$i) {
            $xtpl->assign('WEIGHT', array(
                'key' => $i,
                'title' => $i,
                'selected' => ($i == $view['weight']) ? ' selected="selected"' : ''));
            $xtpl->parse('main.view.loop.weight_loop');
        }
		$view['item'] = implode('&nbsp;&nbsp; ', $arr_items);
        $xtpl->assign('CHECK', $view['status'] == 1 ? 'checked' : '');
        $view['add_content'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=slider_content&amp;bid=' . $view['bid'];
		$view['link_edit'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&amp;bid=' . $view['bid'];
        $view['link_delete'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&amp;delete_bid=' . $view['bid'] . '&amp;delete_checkss=' . md5($view['bid'] . NV_CACHE_PREFIX . $client_info['session_id']);
        $xtpl->assign('VIEW', $view);
        $xtpl->parse('main.view.loop');
    }
    $xtpl->parse('main.view');
}


if ($error) {
    $xtpl->assign('ERROR', $error);
    $xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['slider'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
