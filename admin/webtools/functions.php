<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author TMS Holdings <contact@thuongmaiso.vn>
 * @copyright (C) 2009-2021 TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://thuongmaiso.vn
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN')) {
    exit('Stop!!!');
}

$allow_func = [
    'main',
    'statistics',
    'clearsystem'
];
if (empty($global_config['idsite'])) {
    $allow_func[] = 'checkupdate';
    $allow_func[] = 'config';
}

$menu_top = [
    'title' => $module_name,
    'module_file' => '',
    'custom_title' => $lang_global['mod_webtools']
];

if (defined('NV_IS_GODADMIN')) {
    $allow_func[] = 'deleteupdate';
    $allow_func[] = 'getupdate';
}

define('NV_IS_FILE_WEBTOOLS', true);

//Document
$array_url_instruction['clearsystem'] = 'https://thuongmaiso.vn/traning/admin:webtools';
$array_url_instruction['statistics'] = 'https://thuongmaiso.vn/traning/admin:webtools#cấu_hinh_thống_ke';
$array_url_instruction['checkupdate'] = 'https://thuongmaiso.vn/traning/admin:webtools#kiểm_tra_phien_bản';
$array_url_instruction['config'] = 'https://thuongmaiso.vn/traning/admin:webtools';
