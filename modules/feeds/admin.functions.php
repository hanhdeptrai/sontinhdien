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

define('NV_IS_RSS_ADMIN', true);

// Document
$array_url_instruction['main'] = 'https://thuongmaiso.vn/traning/admin:feeds';

$allow_func = [
    'main'
];
