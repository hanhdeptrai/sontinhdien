<?php

/**
 * @Project TMS HOLDINGS
 * @Author TMS HOLDINGS <contact@tms.vn>
 * @Copyright (C) 2021 TMS HOLDINGS. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Tue, 24 Aug 2021 05:47:50 GMT
 */

if (!defined('NV_ADMIN'))
    die('Stop!!!');

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_album (album_id, name, alias, description, meta_title, meta_description, meta_keyword, folder, layout, num_photo, viewed, weight, sort, allow_rating, total_rating, click_rating, status, hot, groups_view, author, author_modify, allow_comment, hitscm, date_added, date_modified) VALUES('1', 'Test', 'test', '', '', '', '', '2021/08/test', '', '8', '1', '0', '0', '1', '0', '0', '1', '1', '6', '1', '1', '6', '0', '1629783175', '1629783175')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_album (album_id, name, alias, description, meta_title, meta_description, meta_keyword, folder, layout, num_photo, viewed, weight, sort, allow_rating, total_rating, click_rating, status, hot, groups_view, author, author_modify, allow_comment, hitscm, date_added, date_modified) VALUES('2', 'fgfdg', 'fgfdg', '', '', '', '', '2021/08/fgfdg', '', '1', '1', '0', '0', '1', '0', '0', '1', '0', '6', '1', '1', '6', '0', '1629783732', '1629783732')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
