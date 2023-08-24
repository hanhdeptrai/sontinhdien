<?php

/**
 * @Project TMS HOLDINGS
 * @Author TMS Holdings <contact@tms.vn>
 * @Copyright (C) 2021 TMS Holdings. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Wed, 12 May 2021 01:19:49 GMT
 */

if( !defined( 'NV_MAINFILE' ) )
	die( 'Stop!!!' );

$module_version = array(
	'name' => 'Photos',
	'modfuncs' => 'main, viewcat, detail_album, detail, detail_viewer, search, upload',
	'submenu' => 'rss,search',
	'is_sysmod' => 0,
	'virtual' => 1,
	'version' => '4.5.0',
	'date' => 'Wed, 07 June 2021 08:00:00 GMT',
	'author' => 'TMS Holidngs (contact@tms.vn)',
	'uploads_dir' => array(
		$module_upload,
		$module_upload . '/images',
		$module_upload . '/thumbs',
		$module_upload . '/temp'
	),
	'note' => ''
);
