<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author TMS Holdings <contact@thuongmaiso.vn>
 * @copyright (C) 2009-2021 TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://thuongmaiso.vn
 */
if (! defined('NV_MAINFILE'))
    die('Stop!!!');

define('TMS_BDS', $db_config['dbsystem']. '.' .NV_PREFIXLANG. '_bds');
define('TMS_LOCAL', $db_config['dbsystem']. '.' .$db_config['prefix'] . '_location');
require_once NV_ROOTDIR . '/modules/location/location.class.php';





$sql = 'SELECT * FROM ' . TMS_LOCAL . '_province ORDER BY provinceid, weight ASC';
$array_province = $nv_Cache->db($sql, 'provinceid', $module_name);

$sql = 'SELECT * FROM ' . TMS_LOCAL . '_district ORDER BY districtid, weight ASC';
$array_district = $nv_Cache->db($sql, 'districtid', $module_name);

$sql = 'SELECT * FROM ' . TMS_LOCAL . '_ward ORDER BY wardid, wardid ASC';
$array_ward = $nv_Cache->db($sql, 'wardid', $module_name);



$sql = 'SELECT * FROM ' . TMS_BDS . '_categories ORDER BY parentid, weight ASC';
$array_cat = $nv_Cache->db($sql, 'id', $module_name);


$sql = 'SELECT * FROM ' . TMS_BDS . '_block_cat ORDER BY weight ASC';
$array_groups = $nv_Cache->db($sql, 'bid', $module_name);


$sql = 'SELECT * FROM ' . TMS_BDS . '_pricetype ORDER BY weight ASC';
$array_pricetype = $nv_Cache->db($sql, 'id', $module_name);

$array_config = array();
$sql = "SELECT config_name, config_value FROM " . NV_PREFIXLANG . "_" . $module_data . "_config";
$list = $nv_Cache->db($sql, '', $module_name);
foreach ($list as $ls) {
    $array_config[$ls['config_name']] = $ls['config_value'];
}

// Danh sach huong
$sql = 'SELECT * FROM ' . TMS_BDS . '_way WHERE status=1';
$array_way = $nv_Cache->db($sql, 'id', $module_name);

// Danh sach loai phap ly
$sql = 'SELECT * FROM ' . TMS_BDS . '_legal WHERE status=1';
$array_legal = $nv_Cache->db($sql, 'id', $module_name);

$sql = 'SELECT * FROM ' . TMS_BDS . '_block_cat ORDER BY weight ASC';
$array_block_cat = $nv_Cache->db($sql, 'bid', $module_name);

$array_money_unit = array(
    'vnd' => 'VND',
    'usd' => 'USD'
);

/**
 * nv_number_format()
 *
 * @param mixed $number            
 * @param integer $decimals            
 * @return
 *
 */
function nv_number_format($number, $decimals = 0)
{
    global $array_config;
    
    $str = number_format($number, $decimals, $array_config['dec_point'], $array_config['thousands_sep']);
    
    return $str;
}


/**
 * nv_number_format()
 *
 * @param mixed $number            
 * @param integer $decimals            
 * @return
 *
 */




function count_news_category($catid)
{
    global $db,$db_config,$module_data;
    
	$list=$db->query("SELECT count(*) FROM " . $db_config['dbsystem']. '.' . NV_PREFIXLANG . "_" . $module_data . " t1 INNER JOIN " . $db_config['dbsystem']. '.' . NV_PREFIXLANG . "_" . $module_data . "_categories t2 on t1.catid = t2.id where t1.catid=".$catid." OR parentid=".$catid)->fetchColumn();
	
    return $list;
}

/**
 * nv_setcats()
 *
 * @param mixed $list2            
 * @param mixed $id            
 * @param mixed $list            
 * @param integer $m            
 * @param integer $num            
 * @return
 *
 */
function nv_setcats($list2, $id, $list, $m = 0, $num = 0)
{
    ++ $num;
    $defis = '';
    for ($i = 0; $i < $num; ++ $i) {
        $defis .= '--';
    }
    
    if (isset($list[$id])) {
        $list2[$id]['subcat'] = array();
        foreach ($list[$id] as $value) {
            if ($value['id'] != $m) {
                $list2[$value['id']] = $value;
                $list2[$value['id']]['name'] = '|' . $defis . '&gt; ' . $list2[$value['id']]['name'];
                if ($value['parentid']) {
                    $list2[$id]['subcat'][] = $value['id'];
                }
                if (isset($list[$value['id']])) {
                    $list2 = nv_setcats($list2, $value['id'], $list, $m, $num);
                }
            }
        }
    }
    return $list2;
}

/**
 * nv_listcats()
 *
 * @param mixed $parentid            
 * @param integer $m            
 * @return
 *
 */
function nv_listcats($parentid = 0, $m = 0, $inarray = array())
{
    global $db, $module_data;
    
    $sql = 'SELECT * FROM ' . TMS_BDS . '_categories ORDER BY parentid, weight ASC';
    $result = $db->query($sql);
    $list = array();
    while ($row = $result->fetch()) {
        
        if (! empty($inarray) and ! in_array($row['id'], $inarray)) {
            continue;
        }
        
        $list[$row['parentid']][] = array(
            'id' => (int) $row['id'],
            'parentid' => (int) $row['parentid'],
            'title' => $row['title'],
            'alias' => $row['alias'],
            'description' => $row['description'],
            'groups_view' => ! empty($row['groups_view']) ? explode(',', $row['groups_view']) : array(
                6
            ),
            'weight' => (int) $row['weight'],
            'status' => $row['status'],
            'name' => $row['title'],
            'selected' => $parentid == $row['id'] ? ' selected="selected"' : ''
        );
    }
    
    if (empty($list)) {
        return $list;
    }
    
    $list2 = array();
    foreach ($list[0] as $value) {
        if ($value['id'] != $m) {
            $list2[$value['id']] = $value;
            if (isset($list[$value['id']])) {
                $list2 = nv_setcats($list2, $value['id'], $list, $m);
            }
        }
    }
    return $list2;
}


function nv_projects_categories($catids = 0, $m = 0, $inarray = array())
{
    global $db, $module_data;
    
    $sql = 'SELECT * FROM ' . TMS_BDS . '_projects_categories ORDER BY  weight ASC';
    $result = $db->query($sql);
    $list = array();
    while ($row = $result->fetch()) {
        
        if (! empty($inarray) and ! in_array($row['catid'], $inarray)) {
            continue;
        }
        
        $list[$row['catid']][] = array(
          
            'title' => $row['title'],
            'alias' => $row['alias'],
            'description' => $row['description'],

            'weight' => (int) $row['weight'],
            'status' => $row['status'],
            'title' => $row['title'],
            'selected' => $catids == $row['catid'] ? ' selected="selected"' : ''
        );
    }
    
   return $list;
}



function nv_delete_other_images_tmp($path, $thumb)
{
    if (file_exists($thumb)) {
        @nv_deletefile($thumb);
    }
    
    if (file_exists($path)) {
        $deleted = @nv_deletefile($path);
        $result = $deleted[0] ? true : false;
        
        return $result;
    }
}

function nv_del_items($id, $homeimgfile)
{
    global $db, $module_data, $module_name, $module_upload;
    
    // Xoa doi tuong
    $sql = 'DELETE FROM ' . TMS_BDS . ' WHERE id = ' . $id;
    if ($db->exec($sql)) {
        // Xóa bình luận
        $db->query('DELETE FROM ' . NV_PREFIXLANG . '_comment WHERE module=' . $db->quote($module_name) . ' AND id = ' . $id);
        
        $array_homeimgfile = array();
        
        // Xóa ảnh đại diện
        if (! empty($homeimgfile) and file_exists(NV_ROOTDIR . '/' . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $homeimgfile)) {
            $array_homeimgfile[] = $homeimgfile;
        }
        
        // Xóa ảnh khác
        $result = $db->query('SELECT * FROM ' . TMS_BDS . '_images WHERE rows_id=' . $id);
        while ($row = $result->fetch()) {
            if ($db->query('DELETE FROM ' . TMS_BDS . '_images WHERE id=' . $row['id'])) {
                if (file_exists(NV_ROOTDIR . '/' . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['homeimgfile'])) {
                    $array_homeimgfile[] = $row['homeimgfile'];
                }
            }
        }
        
        if (! empty($array_homeimgfile)) {
            @nv_deletefile(NV_ROOTDIR . '/' . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['homeimgfile']);
            @nv_deletefile(NV_ROOTDIR . '/' . NV_ASSETS_DIR . '/' . $module_upload . '/' . $row['homeimgfile']);
        }
        
        // Xóa thông báo
        nv_delete_notification(NV_LANG_DATA, $module_name, 'items_new', $id);
        
        // Xóa lịch sử kiểm duyệt
        $db->query('DELETE FROM ' . TMS_BDS . '_queue_logs WHERE itemid=' . $id);
        
        return true;
    }
    return false;
}

function nv_item_group($bid, $itemid, $is_del = 0, $exptime = 0)
{
    global $db, $module_name, $module_data;
    
    if ($is_del) {
        $result = $db->exec('DELETE FROM ' . TMS_BDS . '_block WHERE bid=' . $bid . ' AND id=' . $itemid);
    } else {
        $result = $db->query('INSERT INTO ' . TMS_BDS . '_block (bid, id, exptime, weight) VALUES (' . $bid . ', ' . $itemid . ', ' . $exptime . ', 0)');
    }
    
    if ($result) {
        $group_config = array();
        $result = $db->query('SELECT bid, exptime FROM ' . TMS_BDS . '_block WHERE id=' . $itemid);
        while (list ($bid, $exptime) = $result->fetch(3)) {
            $group_config[$bid] = $exptime;
        }
        
        $group_config = ! empty($group_config) ? serialize($group_config) : '';
        
        $db->query('UPDATE ' . TMS_BDS . ' SET group_config=' . $db->quote($group_config) . ' WHERE id=' . $itemid)
            ->fetchColumn();
        
        return true;
    }
    return false;
}

/**
 * nv_GetCatidInParent()
 *
 * @param mixed $catid            
 * @return
 *
 */
function nv_GetCatidInParent($catid)
{
    global $array_cat;
    
    $_array_cat = array();
    $_array_cat[] = $catid;
    $subcatid = explode(',', $array_cat[$catid]['subid']);
    
    if (! empty($subcatid)) {
        foreach ($subcatid as $id) {
            if ($id > 0) {
                if ($array_cat[$id]['numsub'] == 0) {
                    $_array_cat[] = $id;
                } else {
                    //$array_cat_temp = GetCatidInParent($id);
                    foreach ($array_cat_temp as $catid_i) {
                        $_array_cat[] = $catid_i;
                    }
                }
            }
        }
    }
    return array_unique($_array_cat);
}

function nv_GetCatidpro($catid)
{
    global $array_projects_cat;
    
    $_array_cat = array();
	 $catids = explode(',', $array_projects_cat[$catid]['catid']);
    $_array_cat[] = $catid;
   

	
    return array_unique($_array_cat);
}

/**
 * nv_bookhouse_viewImage()
 *
 * @param mixed $fileName            
 * @return
 *
 */
function nv_bookhouse_viewImage($fileName)
{
    global $db;
    
    $array_thumb_config = array();
    $sql = 'SELECT * FROM ' . NV_UPLOAD_GLOBALTABLE . '_dir ORDER BY dirname ASC';
    $result = $db->query($sql);
    while ($row = $result->fetch()) {
        $array_dirname[$row['dirname']] = $row['did'];
        if ($row['thumb_type']) {
            $array_thumb_config[$row['dirname']] = $row;
        }
    }
    unset($array_dirname['']);
    
    if (preg_match('/^' . nv_preg_quote(NV_UPLOADS_DIR) . '\/(([a-z0-9\-\_\/]+\/)*([a-z0-9\-\_\.]+)(\.(gif|jpg|jpeg|png|bmp|ico)))$/i', $fileName, $m)) {
        $viewFile = NV_FILES_DIR . '/' . $m[1];
        if (file_exists(NV_ROOTDIR . '/' . $viewFile)) {
            $size = @getimagesize(NV_ROOTDIR . '/' . $viewFile);
            return array(
                $viewFile,
                $size[0],
                $size[1]
            );
        } else {
            $m[2] = rtrim($m[2], '/');
            if (isset($array_thumb_config[NV_UPLOADS_DIR . '/' . $m[2]])) {
                $thumb_config = $array_thumb_config[NV_UPLOADS_DIR . '/' . $m[2]];
            } else {
                $thumb_config = $array_thumb_config[''];
                $_arr_path = explode('/', NV_UPLOADS_DIR . '/' . $m[2]);
                while (sizeof($_arr_path) > 1) {
                    array_pop($_arr_path);
                    $_path = implode('/', $_arr_path);
                    if (isset($array_thumb_config[$_path])) {
                        $thumb_config = $array_thumb_config[$_path];
                        break;
                    }
                }
            }
            $viewDir = NV_FILES_DIR;
            if (! empty($m[2])) {
                if (! is_dir(NV_ROOTDIR . '/' . $m[2])) {
                    $e = explode('/', $m[2]);
                    $cp = NV_FILES_DIR;
                    foreach ($e as $p) {
                        if (is_dir(NV_ROOTDIR . '/' . $cp . '/' . $p)) {
                            $viewDir .= '/' . $p;
                        } else {
                            $mk = nv_mkdir(NV_ROOTDIR . '/' . $cp, $p);
                            if ($mk[0] > 0) {
                                $viewDir .= '/' . $p;
                            }
                        }
                        $cp .= '/' . $p;
                    }
                }
            }
            
            $image = new NukeViet\Files\Image(NV_ROOTDIR . '/' . $fileName, NV_MAX_WIDTH, NV_MAX_HEIGHT);
            if ($thumb_config['thumb_type'] == 4) {
                $thumb_width = $thumb_config['thumb_width'];
                $thumb_height = $thumb_config['thumb_height'];
                $maxwh = max($thumb_width, $thumb_height);
                if ($image->fileinfo['width'] > $image->fileinfo['height']) {
                    $thumb_config['thumb_width'] = 0;
                    $thumb_config['thumb_height'] = $maxwh;
                } else {
                    $thumb_config['thumb_width'] = $maxwh;
                    $thumb_config['thumb_height'] = 0;
                }
            }
            
            if ($image->fileinfo['width'] > $thumb_config['thumb_width'] or $image->fileinfo['height'] > $thumb_config['thumb_height']) {
                $image->resizeXY($thumb_config['thumb_width'], $thumb_config['thumb_height']);
                if ($thumb_config['thumb_type'] == 4) {
                    $image->cropFromCenter($thumb_width, $thumb_height);
                }
                $image->save(NV_ROOTDIR . '/' . $viewDir, $m[3] . $m[4], $thumb_config['thumb_quality']);
                $create_Image_info = $image->create_Image_info;
                $error = $image->error;
                $image->close();
                if (empty($error)) {
                    return array(
                        $viewDir . '/' . basename($create_Image_info['src']),
                        $create_Image_info['width'],
                        $create_Image_info['height']
                    );
                }
            } elseif (copy(NV_ROOTDIR . '/' . $fileName, NV_ROOTDIR . '/' . $viewDir . '/' . $m[3] . $m[4])) {
                $return = array(
                    $viewDir . '/' . $m[3] . $m[4],
                    $image->fileinfo['width'],
                    $image->fileinfo['height']
                );
                $image->close();
                return $return;
            } else {
                return false;
            }
        }
    } else {
        $size = @getimagesize(NV_ROOTDIR . '/' . $fileName);
        return array(
            $fileName,
            $size[0],
            $size[1]
        );
    }
    return false;
}

function nv_check_similar_content($content)
{
    global $db_slave, $array_config, $module_data;
    
    $similar_time = ! empty($array_config['similar_time']) ? 86400 * $array_config['similar_time'] : 0;
    $result = $db_slave->query('SELECT id, bodytext FROM ' . TMS_BDS . ' WHERE addtime >= ' . $similar_time . ' ORDER BY addtime DESC');
    while (list ($id, $_content) = $result->fetch(3)) {
        similar_text(strip_tags($content), strip_tags($_content), $percent);
        if ($percent >= $array_config['similar_content']) {
            return false;
        }
    }
    return true;
}

function nv_add_mail_queue($tomail, $subject, $message)
{
    global $db, $module_data;
    
    if (empty($tomail) or nv_check_valid_email($tomail) != '' or empty($subject) or empty($message)) {
        return false;
    }
    
    try {
        $stmt = $db->prepare('INSERT INTO ' . TMS_BDS . '_mail_queue(tomail, subject, message) VALUES(:tomail, :subject, :message)');
        $stmt->bindParam(':tomail', $tomail, PDO::PARAM_STR);
        $stmt->bindParam(':subject', $subject, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        $stmt->execute();
    } catch (Exception $e) {
        trigger_error($e->getMessage());
    }
}

function nv_sendmail_queue($queue_info)
{
    global $global_config, $module_file;
    
    $xtpl = new XTemplate('template_queue_' . NV_LANG_DATA . '.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
    $xtpl->assign('DATA', $queue_info);
    
    if ($queue_info['queue'] == 1) {
        // dong y
        $xtpl->parse('main.link');
    } elseif ($queue_info['queue'] == 0) {
        // tu choi
        if (! empty($queue_info['reason'])) {
            $xtpl->parse('main.reason');
        }
        
        if (! empty($queue_info['reason_note'])) {
            $xtpl->parse('main.reason_note');
        }
        
        $xtpl->parse('main.reason_con');
    }
    
    $xtpl->parse('main');
    return $xtpl->text('main');
}

function nv_get_pricetype()
{
    global $db, $module_data;
    
    $array_pricetype = array();
    $result = $db->query('SELECT * FROM ' . TMS_BDS . '_pricetype t1 INNER JOIN ' . TMS_BDS . '_pricetype_typeid t2 ON t1.id=t2.pricetypeid ');
    while ($row = $result->fetch()) {
        $array_pricetype[$row['id']] = $row;
    }
    
    return $array_pricetype;
}

function nv_get_projetcs($provinceid, $districtid, $wardid)
{
    global $db, $module_data, $array_config, $site_mods;
    
    $where = '';
    $array_projects = array();
    
    if ($array_config['project_type'] == 0) {
        if (! empty($provinceid)) {
            $where .= ' AND provinceid=' . $provinceid;
        }
        
        if (! empty($districtid)) {
            $where .= ' AND districtid=' . $districtid;
        }
        
        if (! empty($wardid)) {
            $where .= ' AND wardid=' . $wardid;
        }
        
        $result = $db->query('SELECT id, title FROM ' . TMS_BDS . '_projects WHERE 1=1' . $where);
        while ($row = $result->fetch()) {
            $array_projects[$row['id']] = $row;
        }
    } elseif ($array_config['project_type'] == 1 and ! empty($array_config['project_table']) and ! empty($array_config['project_id_field']) and ! empty($array_config['project_title_field']) and ! empty($array_config['project_provinceid_field']) and ! empty($array_config['project_districtid_field']) and ! empty($array_config['project_wardid_field'])) {
        if (! empty($provinceid)) {
            $where .= ' AND ' . $array_config['project_provinceid_field'] . '=' . $provinceid;
        }
        
        if (! empty($districtid)) {
            $where .= ' AND ' . $array_config['project_districtid_field'] . '=' . $districtid;
        }
        
        if (! empty($wardid)) {
            $where .= ' AND ' . $array_config['project_wardid_field'] . '=' . $wardid;
        }
        
        $result = $db->query('SELECT ' . $array_config['project_id_field'] . ', ' . $array_config['project_title_field'] . ' FROM ' . $array_config['project_table'] . ' WHERE 1=1' . $where);
        while ($row = $result->fetch()) {
            $row['title'] = $row[$array_config['project_title_field']];
            $array_projects[$row[$array_config['project_id_field']]] = $row;
        }
    }
    
    return $array_projects;
}

function nv_get_project($projectid)
{
    global $db, $array_config, $module_data;
    
    if ($array_config['project_type'] == 0) {
        $rows = $db->query('SELECT id, title FROM ' . TMS_BDS . '_projects WHERE id=' . $projectid)->fetch();
    } elseif ($array_config['project_type'] == 1 and ! empty($array_config['project_table']) and ! empty($array_config['project_id_field']) and ! empty($array_config['project_title_field']) and ! empty($array_config['project_provinceid_field']) and ! empty($array_config['project_districtid_field']) and ! empty($array_config['project_wardid_field'])) {
        $rows = $db->query('SELECT ' . $array_config['project_id_field'] . ', ' . $array_config['project_title_field'] . ' FROM ' . $array_config['project_table'] . ' WHERE ' . $array_config['project_id_field'] . '=' . $projectid)->fetch();
        $rows['title'] = $rows[$array_config['project_title_field']];
    }
    return $rows;
}
