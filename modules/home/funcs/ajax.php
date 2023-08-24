<?php

/**
 * @Project NUKEVIET 4.x
 * @Author TMS Holdings (contact@thuongmaiso.vn)
 * @Copyright (C) 2014 TMS Holdings. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Wed, 13 Aug 2014 00:24:32 GMT
 */
if (!defined('NV_IS_MOD_HOME')) die('Stop!!!');
$mod2 = $nv_Request->get_title('mod', 'get', '');

if($mod2=="block_category"){
	$catid = $nv_Request->get_title('catid', 'get', '');
	$limit = $nv_Request->get_title('limit', 'get', '');
	$title_length = $nv_Request->get_title('title_length', 'get', '');
	$list=list_news_limit_block($catid,$limit);
	$array=array();
	foreach($list as $value){
		$array[]=nv_data_show($value);
	}
	$contents=home_block_cat_list($array,$title_length);
	echo $contents;
	die;
}


function list_news_limit_block($catid,$limit)
{
    global $db,$db_config,$module_data;
    
	$list=$db->query("SELECT t1.* FROM " . $db_config['dbsystem']. '.' . NV_PREFIXLANG . "_bds t1 INNER JOIN " . $db_config['dbsystem']. '.' . NV_PREFIXLANG . "_bds_categories t2 on t1.catid = t2.id where t1.catid=".$catid." OR parentid=".$catid." ORDER BY t1.addtime DESC limit ".$limit)->fetchAll();
	
    return $list;
}

function home_block_cat_list($list,$title_length){
	 global $global_config, $module_name, $module_file, $lang_module, $module_config, $module_info, $array_config, $array_cat;
    
    $xtpl = new XTemplate('global.bds_category.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/bds');
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
    $xtpl->assign('TEMPLATE', $module_info['template']);
	foreach($list as $value){
		$value['title0'] = nv_clean60($value['title'], $title_length);
		$value['hometext0']= nv_clean60($value['hometext'], $title_length);
		$xtpl->assign('ROW', $value);
		$xtpl->parse('ajax.loop');
	}
	$xtpl->parse('ajax');
    return $xtpl->text('ajax');
}