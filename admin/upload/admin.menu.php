<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author TMS Holdings <contact@thuongmaiso.vn>
 * @copyright (C) 2009-2021 TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://thuongmaiso.vn
 */

if (!defined('NV_ADMIN')) {
    exit('Stop!!!');
}

if (defined('NV_IS_SPADMIN')) {
    $submenu['thumbconfig'] = $lang_module['thumbconfig'];
    $submenu['config'] = $lang_module['configlogo'];

    if (defined('NV_IS_GODADMIN')) {
        $submenu['uploadconfig'] = $lang_module['uploadconfig'];
    }
}
