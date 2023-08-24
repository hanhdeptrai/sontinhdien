<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author TMS Holdings <contact@thuongmaiso.vn>
 * @copyright (C) 2009-2021 TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://thuongmaiso.vn
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$sql = 'SELECT id, title, alias FROM ' . NV_PREFIXLANG . '_' . $mod_data . ' WHERE status=1 ORDER BY weight ASC';
$result = $db->query($sql);
while ($row = $result->fetch()) {
    $array_item[$row['id']] = [
        'key' => $row['id'],
        'title' => $row['title'],
        'alias' => $row['alias'] . $global_config['rewrite_exturl']
    ];
}
