<?php

/**
 * @Project TMS Holdings
 * @Author TMS Holdings <contact@tms.vn>
 * @Copyright (C) 2019 TMS Holdings. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Wed, 25 Dec 2019 17:29:14 GMT
 */

if (!defined('NV_IS_FILE_ADMIN'))
    die('Stop!!!');

// Change status
if ($nv_Request->isset_request('change_status', 'post, get')) {
    $id = $nv_Request->get_int('id', 'post, get', 0);
    $content = 'NO_' . $id;
    $query = 'SELECT status FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows WHERE id=' . $id;
    $row = $db->query($query)->fetch();
    if (isset($row['status']))     {
        $status = ($row['status']) ? 0 : 1;
        $query = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows SET status=' . intval($status) . ' WHERE id=' . $id;
        $db->query($query);
        $content = 'OK_' . $id;
    }
    $nv_Cache->delMod($module_name);
    include NV_ROOTDIR . '/includes/header.php';
    echo $content;
    include NV_ROOTDIR . '/includes/footer.php';
}

if ($nv_Request->isset_request('ajax_action', 'post')) {
    $id = $nv_Request->get_int('id', 'post', 0);
	$bid = $nv_Request->get_int('bid', 'post', 0);
	
    $new_vid = $nv_Request->get_int('new_vid', 'post', 0);
    $content = 'NO_' . $id;
    if ($new_vid > 0)     {
        $sql = 'SELECT bid,id FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows WHERE  bid='.$bid.' AND id!=' . $id . ' ORDER BY weight ASC';
        $result = $db->query($sql);
        $weight = 0;
        while ($row = $result->fetch())
        {
            ++$weight;
            if ($weight == $new_vid) ++$weight;             
			$sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows SET weight=' . $weight . ' WHERE bid='.$bid.' AND id=' . $row['id'];
            $db->query($sql);
        }
        $sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows SET weight=' . $new_vid . ' WHERE bid='.$bid.' AND id=' . $id;
        $db->query($sql);
        $content = 'OK_' . $id;
    }
    $nv_Cache->delMod($module_name);
    include NV_ROOTDIR . '/includes/header.php';
    echo $content;
    include NV_ROOTDIR . '/includes/footer.php';
}

if ($nv_Request->isset_request('delete_id', 'get') and  $nv_Request->isset_request('delete_checkss', 'get')) {
    $id = $nv_Request->get_int('delete_id', 'get'); 
	$bid = $nv_Request->get_int('bid', 'get');
	
    $delete_checkss = $nv_Request->get_string('delete_checkss', 'get');
    if ($id > 0 and $delete_checkss == md5($id . NV_CACHE_PREFIX . $client_info['session_id'])) {
        $weight=0;
        $sql = 'SELECT weight FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows WHERE id =' . $db->quote($id);
        $result = $db->query($sql);
        list($weight) = $result->fetch(3);
        
        $db->query('DELETE FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows  WHERE id = ' . $db->quote($id));
        if ($weight > 0)         {
            $sql = 'SELECT id, weight FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows WHERE bid='.$bid.' AND weight >' . $weight;
            $result = $db->query($sql);
            while (list($id, $weight) = $result->fetch(3))
            {
                $weight--;
                $db->query('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows SET weight=' . $weight . ' WHERE bid='.$bid.' AND id=' . intval($id));
            }
        }
        $nv_Cache->delMod($module_name);
        nv_insert_logs(NV_LANG_DATA, $module_name, 'Delete Slider_content', 'ID: ' . $id, $admin_info['userid']);
       nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op.'&bid='.$bid);
        }
}

$row = array();
$error = '';
$row['id'] = $nv_Request->get_int('id', 'post,get', 0);
$row['bid'] = $nv_Request->get_int('bid', 'post,get', 0);
$currentpath = NV_UPLOADS_DIR . '/' . $module_upload . '/slider';
if (!file_exists($currentpath)) {
    nv_mkdir(NV_UPLOADS_REAL_DIR . '/' . $module_upload, 'slider', true);
}

if ($nv_Request->isset_request('submit', 'post')) {
    $row['title'] = $nv_Request->get_title('title', 'post', '');
    $row['title_extra'] = $nv_Request->get_title('title_extra', 'post', '');
    $row['title_link'] = $nv_Request->get_title('title_link', 'post', '');
    $row['description'] = $nv_Request->get_editor('description', '', NV_ALLOWED_HTML_TAGS);
    $row['link'] = $nv_Request->get_title('link', 'post', '');
    $row['image'] = $nv_Request->get_title('image', 'post', '');
    if (is_file(NV_DOCUMENT_ROOT . $row['image']))     {
        $row['image'] = substr($row['image'], strlen(NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/'));
    } else {
        $row['image'] = '';
    }
    $row['image_mobile'] = $nv_Request->get_title('image_mobile', 'post', '');
    if (is_file(NV_DOCUMENT_ROOT . $row['image_mobile']))     {
        $row['image_mobile'] = substr($row['image_mobile'], strlen(NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/'));
    } else {
        $row['image_mobile'] = '';
    }
	
	if (empty($row['title'])) {
        $error = $lang_module['empty_title'];
    }
 else {
		
  
	
        try {
            if (empty($row['id'])) {
                $row['addtime'] = 0;
				$weight = $db->query('SELECT max(weight) FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows WHERE bid=' . $row['bid'])->fetchColumn();
                $weight = intval($weight) + 1;
                $stmt = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows (bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES ('.$row['bid'].', :title, :title_extra, :title_link, :description, :link, :image, :image_mobile, '.NV_CURRENTTIME.', '.$weight.', :status)');
                $stmt->bindValue(':status', 1, PDO::PARAM_INT);
            } else {
                $stmt = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows SET title = :title, title_extra = :title_extra, title_link = :title_link, description = :description, link = :link, image = :image, image_mobile = :image_mobile WHERE id=' . $row['id']);
            }
            $stmt->bindParam(':title', $row['title'], PDO::PARAM_STR);
            $stmt->bindParam(':title_extra', $row['title_extra'], PDO::PARAM_STR);
            $stmt->bindParam(':title_link', $row['title_link'], PDO::PARAM_STR);
            $stmt->bindParam(':description', $row['description'], PDO::PARAM_STR, strlen($row['description']));
            $stmt->bindParam(':link', $row['link'], PDO::PARAM_STR);
            $stmt->bindParam(':image', $row['image'], PDO::PARAM_STR);
            $stmt->bindParam(':image_mobile', $row['image_mobile'], PDO::PARAM_STR);

            $exc = $stmt->execute();
            if ($exc) {
                $nv_Cache->delMod($module_name);
                if (empty($row['id'])) {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Slider_content', ' ', $admin_info['userid']);
                } else {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Slider_content', 'ID: ' . $row['id'], $admin_info['userid']);
                }
               nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op.'&bid='.$row['bid']);
            }
			 else {
                $error = $lang_module['errorsave'];
            }
			
        } catch (PDOException $e) {
            trigger_error(print_r($e, true));
            $error = $lang_module['errorsave'];
        }
    }  
	
} elseif ($row['id'] > 0) {
    $row = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows WHERE id=' . $row['id'])->fetch();
    if (empty($row)) {
        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }
} else {
    $row['id'] = 0;
    $row['title'] = '';
    $row['title_extra'] = '';
    $row['title_link'] = '';
    $row['description'] = '';
    $row['link'] = '';
    $row['image'] = '';
    $row['image_mobile'] = '';
}
if (!empty($row['image']) and is_file(NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $row['image'])) {
    $row['image'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['image'];
	$currentpath = dirname($row['image']);
}
if (!empty($row['image_mobile']) and is_file(NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $row['image_mobile'])) {
    $row['image_mobile'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['image_mobile'];
	$currentpath = dirname($row['image_mobile']);
}
if (defined('NV_EDITOR'))
    require_once NV_ROOTDIR . '/' . NV_EDITORSDIR . '/' . NV_EDITOR . '/nv.php';

$row['description'] = nv_htmlspecialchars(nv_editor_br2nl($row['description']));
if (defined('NV_EDITOR') and nv_function_exists('nv_aleditor')) {
    $row['description'] = nv_aleditor('description', '100%', '300px', $row['description']);
} else {
    $row['description'] = '<textarea style="width:100%;height:300px" name="description">' . $row['description'] . '</textarea>';
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
		 ->where('bid ='.$row['bid'])
        ->from('' . NV_PREFIXLANG . '_' . $module_data . '_slider_rows');

    if (!empty($q)) {
        $db->where('title LIKE :q_title OR image LIKE :q_image OR image_mobile LIKE :q_image_mobile OR status LIKE :q_status');
    }
    $sth = $db->prepare($db->sql());

    if (!empty($q)) {
        $sth->bindValue(':q_title', '%' . $q . '%');
        $sth->bindValue(':q_image', '%' . $q . '%');
        $sth->bindValue(':q_image_mobile', '%' . $q . '%');
        $sth->bindValue(':q_status', '%' . $q . '%');
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
        $sth->bindValue(':q_image', '%' . $q . '%');
        $sth->bindValue(':q_image_mobile', '%' . $q . '%');
        $sth->bindValue(':q_status', '%' . $q . '%');
    }
    $sth->execute();
}

$xtpl = new XTemplate('slider_content.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
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
        for($i = 1; $i <= $num_items; ++$i) {
            $xtpl->assign('WEIGHT', array(
                'key' => $i,
                'title' => $i,
                'selected' => ($i == $view['weight']) ? ' selected="selected"' : ''));
            $xtpl->parse('main.view.loop.weight_loop');
        }
	
		$view['image'] = (empty($view['image'])) ? NV_BASE_SITEURL.'themes/' . $global_config['module_theme'] . '/images/' . $module_file.'/no_photo.png' : NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $view['image'];
        $view['image_mobile'] = (empty($view['image_mobile'])) ? NV_BASE_SITEURL.'themes/' . $global_config['module_theme'] . '/images/' . $module_file.'/no_photo.png' : NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $view['image_mobile'];
       
		$xtpl->assign('BID', $view['bid']); 
		$xtpl->assign('CHECK', $view['status'] == 1 ? 'checked' : '');


        $view['link_edit'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&amp;id=' . $view['id'];
        $view['link_delete'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&amp;delete_id=' . $view['id']. '&amp;bid=' . $view['bid'] . '&amp;delete_checkss=' . md5($view['id'] . NV_CACHE_PREFIX . $client_info['session_id']);
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

$page_title = $lang_module['slider_content'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
