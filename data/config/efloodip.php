<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author TMS Holdings <contact@thuongmaiso.vn>
 * @copyright (C) 2009-2021 TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://thuongmaiso.vn
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$array_except_flood_site = [];
$array_except_flood_site['127.0.0.1'] = ['ip6' => 0, 'mask' => "//", 'begintime' => 1634609572, 'endtime' => 0];

$array_except_flood_admin = [];
