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
    'main'
];
if (defined('NV_IS_GODADMIN')) {
    $allow_func[] = 'pagetitle';
    $allow_func[] = 'metatags';
    $allow_func[] = 'linktags';
    $allow_func[] = 'sitemapPing';
    $allow_func[] = 'robots';
    if (empty($global_config['idsite'])) {
        $allow_func[] = 'rpc';
    }
} elseif (defined('NV_IS_SPADMIN') and $global_config['idsite']) {
    $allow_func[] = 'metatags';
    $allow_func[] = 'linktags';
}

$menu_top = [
    'title' => $module_name,
    'module_file' => '',
    'custom_title' => $lang_global['mod_seotools']
];

define('NV_IS_FILE_SEOTOOLS', true);

// Document
$array_url_instruction['pagetitle'] = 'https://thuongmaiso.vn/traning/admin:seotools:pagetitle';
$array_url_instruction['sitemapPing'] = 'https://thuongmaiso.vn/traning/admin:seotools:sitemapPing';
$array_url_instruction['metatags'] = 'https://thuongmaiso.vn/traning/admin:seotools';
$array_url_instruction['robots'] = 'https://thuongmaiso.vn/traning/admin:seotools:robots';
$array_url_instruction['rpc'] = 'https://thuongmaiso.vn/traning/admin:seotools:rpc';
