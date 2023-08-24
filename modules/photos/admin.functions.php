<?php

/**
 * @Project PHOTOS 4.x
 * @Author KENNY NGUYEN (nguyentiendat713@gmail.com)
 * @Copyright (C) 2015 tradacongnghe.com. All rights reserved
 * @Based on NukeViet CMS
 * @License GNU/GPL version 2 or any later version
 * @Createdate  Fri, 18 Sep 2015 11:52:59 GMT
 */

if( !defined( 'NV_ADMIN' ) or !defined( 'NV_MAINFILE' ) or !defined( 'NV_IS_MODADMIN' ) )
	die( 'Stop!!!' );

$allow_func = array(
	'main',
	'alias',
	'album',
	'view',
	'setting'
);

define( 'NV_IS_FILE_ADMIN', true );

define( 'TABLE_PHOTO_NAME', NV_PREFIXLANG . '_' . $module_data );

define( 'ACTION_METHOD', $nv_Request->get_string( 'action', 'get, post', '' ) );

require_once NV_ROOTDIR . '/modules/' . $module_file . '/global.functions.php';

$array_status = array(
	'0' => $lang_module['disabled'],
	'1' => $lang_module['enable']
);


$array_home_view = array(
	'home_view_grid_by_album' => $lang_module['home_view_grid_by_album'],
	'home_view_one_album' => $lang_module['home_view_one_album']
);

$array_album_view = array(
	'album_view_slider' => $lang_module['album_view_slider'],
	'album_view_grid' => $lang_module['album_view_grid']
);
