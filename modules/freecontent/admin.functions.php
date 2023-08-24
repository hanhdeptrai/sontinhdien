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
    'list',
    'manager'
];

define('NV_IS_FILE_ADMIN', true);

//Document
$array_url_instruction['main'] = 'https://thuongmaiso.vn/traning/admin:freecontent';
$array_url_instruction['list'] = 'https://thuongmaiso.vn/traning/admin:freecontent#list';
