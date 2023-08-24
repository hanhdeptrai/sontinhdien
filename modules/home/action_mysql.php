<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author TMS Holdings <contact@thuongmaiso.vn>
 * @copyright (C) 2009-2021 TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://thuongmaiso.vn
 */

if (!defined('NV_IS_FILE_MODULES'))
    die('Stop!!!');

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_support";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_support_rows";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config(
  config_name varchar(30) NOT NULL,
  config_value varchar(250) NOT NULL,
  UNIQUE KEY config_name (config_name)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider(
  bid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(250) NOT NULL DEFAULT '',
  image varchar(250) NOT NULL,
  image2 varchar(250) NOT NULL,
  description mediumtext NOT NULL,
  weight smallint(4) NOT NULL DEFAULT 0,
  status tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (bid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows(
  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  bid mediumint(8) unsigned NOT NULL DEFAULT 0,
  title varchar(250) NOT NULL DEFAULT '',
  title_extra varchar(250) NOT NULL,
  title_link varchar(250) NOT NULL,
  description mediumtext NOT NULL,
  link varchar(250) NOT NULL DEFAULT '',
  image varchar(250) NOT NULL DEFAULT '',
  image_mobile varchar(250) NOT NULL,
  addtime int(11) NOT NULL DEFAULT 0,
  weight smallint(4) NOT NULL DEFAULT 0,
  status tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_support(
  bid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(250) NOT NULL DEFAULT '',
  description mediumtext NOT NULL,
  weight smallint(4) NOT NULL DEFAULT 0,
  status tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (bid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_support_rows(
  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  bid mediumint(8) unsigned NOT NULL DEFAULT 0,
  title varchar(250) NOT NULL DEFAULT '',
  link varchar(250) NOT NULL DEFAULT '',
  phone varchar(250) NOT NULL,
  facebook varchar(250) NOT NULL,
  zalo varchar(250) NOT NULL,
  skyper varchar(250) NOT NULL,
  email varchar(250) NOT NULL,
  image varchar(250) NOT NULL DEFAULT '',
  addtime int(11) NOT NULL DEFAULT 0,
  weight smallint(4) NOT NULL DEFAULT 0,
  status tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('slider_title_extra', '1')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('slider_image_mobile', '1')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_email', 'support@beyondincorp.com')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_hotline', '0813405565')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_fax', '')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_responsibility', '')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_address', 'Tầng 3, Tòa Nhà An Phú Plaza, 117-119 Lý Chính Thắng, Phường Võ Thị Sáu, Quận 3, TP.Hồ Chí Minh')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_map', '')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_regplace', '')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_name', 'CÔNG TY TNHH BEYOND INCORPORATION SERVICES')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_sortname', '')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_regcode', '')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('facebook', 'https://www.facebook.com/BeyondIncorporationServices/')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('youtube', '')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('instagram', '')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('twitter', '')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('coppyright', '© Bản quyền thuộc về beyondincorp')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_website', 'https://beyondincorp.com')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_hometext', 'Chúng tôi  là nhà cung cấp dịch vụ tư vấn  hàng đầu  trong lĩnh vực thành lập doanh nghiệp ở nước ngoài, cung cấp các dịch vụ báo cáo tài chính và các dịch vụ liên quan đến hoạt động doanh nghiệp')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('company_phone', '0813405565')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('logofooter', '/uploads/home/be.png')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('bocongthuong', 'http://tms.vn/')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('logobocongthuong', '/uploads/home/bo-cong-thuong.png')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('messenger', 'https://m.me/BeyondIncorporationServices/')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('zalo', 'https://chat.zalo.me/?phone=0813405565')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('whatsapp', 'whatsapp:+84 813 405 565?call')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('skyper', 'skype:+84 813 405 565?call')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('tb1', 'Cảm ơn Anh/Chị đã ghé thăm BeyondIncorp')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('tb2', 'Vui lòng click vào đây để nhận thêm tư vấn!')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('tb3', 'Kết nối cùng chúng tôi qua')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('tb0', 'BeyondIncorp xin chào Anh/Chị!')";

$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'next_execute', '0')";

