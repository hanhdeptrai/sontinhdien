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

/*
 * Note:
 * 	- Module var is: $lang, $module_file, $module_data, $module_upload, $module_theme, $module_name
 * 	- Accept global var: $db, $db_config, $global_config
 */

$db->query('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_blocks (bid, title, description) VALUES(1, 'Sản phẩm', 'Sản phẩm của công ty cổ phần phát triển nguồn mở Việt Nam - TMS Holdings')");
$db->query('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_rows (id, bid, title, description, link, target, image, start_time, end_time, status) VALUES (1, 1, 'Hệ quản trị nội dung NukeViet', '<ul>\n	<li>Giải thưởng Nhân tài đất Việt 2011, 10.000+ website đang sử dụng</li>\n	<li>Được Bộ GD&amp;ĐT khuyến khích sử dụng trong các cơ sở giáo dục</li>\n	<li>Bộ TT&amp;TT quy định ưu tiên sử dụng trong cơ quan nhà nước</li>\n</ul>', 'http://thuongmaiso.vn/vi/san-pham/nukeviet/', '_blank', 'nukeviet.jpg', " . NV_CURRENTTIME . ', 0, 1)');
$db->query('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_rows (id, bid, title, description, link, target, image, start_time, end_time, status) VALUES (2, 1, 'Cổng thông tin doanh nghiệp', '<ul>\n	<li>Tích hợp bán hàng trực tuyến</li>\n	<li>Tích hợp các nghiệp vụ quản lý (quản lý khách hàng, quản lý nhân sự, quản lý tài liệu)</li>\n</ul>', 'http://thuongmaiso.vn/vi/san-pham/Cong-thong-tin-doanh-nghiep-NukeViet-portal/', '_blank', 'nukeviet-portal.jpg', " . NV_CURRENTTIME . ', 0, 1)');
$db->query('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_rows (id, bid, title, description, link, target, image, start_time, end_time, status) VALUES (3, 1, 'Cổng thông tin Phòng giáo dục, Sở giáo dục', '<ul>\n	<li>Tích hợp chung website hàng trăm trường</li>\n	<li>Tích hợp các ứng dụng trực tuyến (Tra điểm SMS, Tra cứu văn bằng, Học bạ điện tử ...)</li>\n</ul>', 'http://thuongmaiso.vn/vi/san-pham/Cong-thong-tin-giao-duc-NukeViet-Edugate/', '_blank', 'nukeviet-edu.jpg', " . NV_CURRENTTIME . ', 0, 1)');
$db->query('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_rows (id, bid, title, description, link, target, image, start_time, end_time, status) VALUES (4, 1, 'Tòa soạn báo điện tử chuyên nghiệp', '<ul>\n	<li>Bảo mật đa tầng, phân quyền linh hoạt</li>\n	<li>Hệ thống bóc tin tự động, đăng bài tự động, cùng nhiều chức năng tiên tiến khác...</li>\n</ul>', 'http://thuongmaiso.vn/vi/san-pham/Toa-soan-bao-dien-tu/', '_blank', 'nukeviet-toasoan.jpg', " . NV_CURRENTTIME . ', 0, 1)');
