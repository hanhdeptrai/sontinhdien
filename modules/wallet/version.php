<?php

/**
 * @Project WALLET 4.x
 * @Author TMS Holdings <contact@thuongmaiso.vn>
 * @Copyright (C) 2018 TMS Holdings. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Friday, March 9, 2018 6:24:54 AM
 */

if (!defined('NV_MAINFILE'))
    die('Stop!!!');

$module_version = array(
    "name" => "Wallet",
    "modfuncs" => "main,pay,complete,money,exchange,historyexchange,recharge",
    "submenu" => "main,money,exchange,historyexchange",
    "is_sysmod" => 1,
    "virtual" => 1,
    'version' => '4.6.00',
    'date' => 'Monday, August 16, 2021 15:00:00 GMT+07:00',
    "author" => "VINADES (contact@thuongmaiso.vn)",
    "uploads_dir" => array($module_name),
    "note" => "Quản lý tiền thành viên"
);
