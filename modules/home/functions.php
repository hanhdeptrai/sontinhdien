<?php
/**
 * TMS Content Management System
 * @version 4.x
 * @author TMS Holdings <contact@thuongmaiso.vn>
 * @copyright (C) 2009-2021 TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://thuongmaiso.vn
 */

if (!defined('NV_SYSTEM')) {
    die('Stop!!!');
}

define('NV_IS_MOD_HOME', true);

// Get Config Module
$sql = 'SELECT config_name, config_value FROM ' . NV_PREFIXLANG . '_' . $module_data . '_config';
$list = $nv_Cache->db($sql, '', $module_name);
$page_config = array();
foreach ($list as $values) {
    $page_config[$values['config_name']] = $values['config_value'];
}

