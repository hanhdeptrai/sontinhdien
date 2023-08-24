-- NUKEVIET 4.0
-- Module: Database
-- http://www.nukeviet.vn
--
-- Host: 127.0.0.1
-- Generation Time: April 12, 2022, 08:06 AM GMT
-- Server version: 5.5.5-10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET SESSION `character_set_client`='utf8mb4';
SET SESSION `character_set_results`='utf8mb4';
SET SESSION `character_set_connection`='utf8mb4';
SET SESSION `collation_connection`='utf8mb4_unicode_ci';
SET NAMES 'utf8mb4';
ALTER DATABASE DEFAULT CHARACTER SET `utf8mb4` COLLATE `utf8mb4_unicode_ci`;

--
-- Database: `tmso_banhdanem`
--


-- ---------------------------------------


--
-- Table structure for table `tms_authors`
--

DROP TABLE IF EXISTS `tms_authors`;
CREATE TABLE `tms_authors` (
  `admin_id` int(11) unsigned NOT NULL,
  `editor` varchar(100)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `lev` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `files_level` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `position` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_module` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'siteinfo',
  `admin_theme` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `addtime` int(11) NOT NULL DEFAULT 0,
  `edittime` int(11) NOT NULL DEFAULT 0,
  `is_suspend` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `susp_reason` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_check_num` varchar(40)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `pre_last_login` int(11) unsigned NOT NULL DEFAULT 0,
  `pre_last_ip` varchar(45)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `pre_last_agent` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `check_num` varchar(40)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `last_login` int(11) unsigned NOT NULL DEFAULT 0,
  `last_ip` varchar(45)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `last_agent` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_authors`
--

INSERT INTO `tms_authors` VALUES
(1, 'ckeditor', 1, 'adobe,archives,audio,documents,flash,images,real,video|1|1|1', 'Administrator', 'siteinfo', '', 0, 0, 0, '', '', 0, '', '', 'aeefd44f12228298c80e5e365f7e58a0', 1649750056, '171.252.189.60', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36');


-- ---------------------------------------


--
-- Table structure for table `tms_authors_api_credential`
--

DROP TABLE IF EXISTS `tms_authors_api_credential`;
CREATE TABLE `tms_authors_api_credential` (
  `admin_id` int(11) unsigned NOT NULL,
  `credential_title` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `credential_ident` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `credential_secret` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `credential_ips` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `api_roles` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `addtime` int(11) NOT NULL DEFAULT 0,
  `edittime` int(11) NOT NULL DEFAULT 0,
  `last_access` int(11) NOT NULL DEFAULT 0,
  UNIQUE KEY `credential_ident` (`credential_ident`),
  UNIQUE KEY `credential_secret` (`credential_secret`),
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci COMMENT='Bảng lưu key API của quản trị';


-- ---------------------------------------


--
-- Table structure for table `tms_authors_api_role`
--

DROP TABLE IF EXISTS `tms_authors_api_role`;
CREATE TABLE `tms_authors_api_role` (
  `role_id` smallint(4) NOT NULL AUTO_INCREMENT,
  `role_title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `role_description` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_data` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT 0,
  `edittime` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci COMMENT='Bảng lưu quyền truy cập API';


-- ---------------------------------------


--
-- Table structure for table `tms_authors_config`
--

DROP TABLE IF EXISTS `tms_authors_config`;
CREATE TABLE `tms_authors_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `keyname` varchar(39)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `mask` tinyint(4) unsigned NOT NULL DEFAULT 0,
  `begintime` int(11) unsigned NOT NULL DEFAULT 0,
  `endtime` int(11) unsigned NOT NULL DEFAULT 0,
  `notice` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `keyname` (`keyname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_authors_module`
--

DROP TABLE IF EXISTS `tms_authors_module`;
CREATE TABLE `tms_authors_module` (
  `mid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `module` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_key` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `weight` mediumint(8) NOT NULL DEFAULT 0,
  `act_1` tinyint(4) NOT NULL DEFAULT 0,
  `act_2` tinyint(4) NOT NULL DEFAULT 1,
  `act_3` tinyint(4) NOT NULL DEFAULT 1,
  `checksum` varchar(32)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`mid`),
  UNIQUE KEY `module` (`module`)
) ENGINE=MyISAM  AUTO_INCREMENT=12  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_authors_module`
--

INSERT INTO `tms_authors_module` VALUES
(1, 'siteinfo', 'mod_siteinfo', 1, 1, 1, 1, '60497faae17a478530d5ccb8dd5f653d'), 
(2, 'authors', 'mod_authors', 2, 1, 1, 1, '7b22fec413716cd59ec06ab24ee89003'), 
(3, 'settings', 'mod_settings', 3, 1, 1, 0, 'e7ade67251f94482f68be663396e2610'), 
(4, 'database', 'mod_database', 4, 1, 0, 0, '6b735678b284eb20c97fc68af0bb81db'), 
(5, 'webtools', 'mod_webtools', 5, 1, 1, 0, '92c27de0aac8b01bfb56031eec187ba1'), 
(6, 'seotools', 'mod_seotools', 6, 1, 1, 0, 'c2a00c666b94cc3e3249648d8195934e'), 
(7, 'language', 'mod_language', 7, 1, 1, 0, 'a85f2685edc2b03df23e1f7e427bc6bc'), 
(8, 'modules', 'mod_modules', 8, 1, 1, 0, '38b7a10cfb97ac8ddc77c21e48ceaff8'), 
(9, 'themes', 'mod_themes', 9, 1, 1, 0, '343dca7022299cfe1a894e046e631446'), 
(10, 'extensions', 'mod_extensions', 10, 1, 0, 0, '38ed3c24c72b45c3378633b23d4b8cdf'), 
(11, 'upload', 'mod_upload', 11, 1, 1, 1, 'c2d79efb0b8f24be022c84e891676d52');


-- ---------------------------------------


--
-- Table structure for table `tms_authors_oauth`
--

DROP TABLE IF EXISTS `tms_authors_oauth`;
CREATE TABLE `tms_authors_oauth` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) unsigned NOT NULL COMMENT 'ID của quản trị',
  `oauth_server` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Eg: facebook, google...',
  `oauth_uid` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ID duy nhất ứng với server',
  `oauth_email` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email',
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_id` (`admin_id`,`oauth_server`,`oauth_uid`),
  KEY `oauth_email` (`oauth_email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci COMMENT='Bảng lưu xác thực 2 bước từ oauth của admin';


-- ---------------------------------------


--
-- Table structure for table `tms_config`
--

DROP TABLE IF EXISTS `tms_config`;
CREATE TABLE `tms_config` (
  `lang` varchar(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sys',
  `module` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'global',
  `config_name` varchar(30)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `config_value` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  UNIQUE KEY `lang` (`lang`,`module`,`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_config`
--

INSERT INTO `tms_config` VALUES
('sys', 'site', 'admin_theme', 'admin_default'), 
('sys', 'site', 'date_pattern', 'l, d/m/Y'), 
('sys', 'site', 'time_pattern', 'H:i'), 
('sys', 'site', 'online_upd', '1'), 
('sys', 'site', 'statistic', '1'), 
('sys', 'site', 'site_phone', '0967247007'), 
('sys', 'site', 'mailer_mode', 'mail'), 
('sys', 'site', 'smtp_host', 'smtp.gmail.com'), 
('sys', 'site', 'smtp_ssl', '1'), 
('sys', 'site', 'smtp_port', '465'), 
('sys', 'site', 'verify_peer_ssl', '1'), 
('sys', 'site', 'verify_peer_name_ssl', '1'), 
('sys', 'site', 'smtp_username', 'user@gmail.com'), 
('sys', 'site', 'smtp_password', ''), 
('sys', 'site', 'sender_name', ''), 
('sys', 'site', 'sender_email', ''), 
('sys', 'site', 'reply_name', ''), 
('sys', 'site', 'reply_email', ''), 
('sys', 'site', 'force_sender', '0'), 
('sys', 'site', 'force_reply', '0'), 
('sys', 'site', 'notify_email_error', '0'), 
('sys', 'site', 'googleAnalyticsID', ''), 
('sys', 'site', 'googleAnalyticsSetDomainName', '0'), 
('sys', 'site', 'googleAnalyticsMethod', 'classic'), 
('sys', 'site', 'googleAnalytics4ID', ''), 
('sys', 'site', 'searchEngineUniqueID', ''), 
('sys', 'site', 'zaloOfficialAccountID', ''), 
('sys', 'site', 'metaTagsOgp', '1'), 
('sys', 'site', 'pageTitleMode', 'pagetitle'), 
('sys', 'site', 'description_length', '170'), 
('sys', 'site', 'nv_unickmin', '4'), 
('sys', 'site', 'nv_unickmax', '20'), 
('sys', 'site', 'nv_upassmin', '5'), 
('sys', 'site', 'nv_upassmax', '32'), 
('sys', 'site', 'dir_forum', ''), 
('sys', 'site', 'nv_unick_type', '4'), 
('sys', 'site', 'nv_upass_type', '0'), 
('sys', 'site', 'allowmailchange', '1'), 
('sys', 'site', 'allowuserpublic', '1'), 
('sys', 'site', 'allowquestion', '0'), 
('sys', 'site', 'allowloginchange', '0'), 
('sys', 'site', 'allowuserlogin', '1'), 
('sys', 'site', 'allowuserloginmulti', '0'), 
('sys', 'site', 'allowuserreg', '1'), 
('sys', 'site', 'is_user_forum', '0'), 
('sys', 'site', 'openid_servers', ''), 
('sys', 'site', 'openid_processing', '0'), 
('sys', 'site', 'user_check_pass_time', '1800'), 
('sys', 'site', 'auto_login_after_reg', '1'), 
('sys', 'site', 'whoviewuser', '2'), 
('sys', 'site', 'ssl_https', '1'), 
('sys', 'site', 'facebook_client_id', ''), 
('sys', 'site', 'facebook_client_secret', ''), 
('sys', 'site', 'google_client_id', ''), 
('sys', 'site', 'google_client_secret', ''), 
('sys', 'site', 'referer_blocker', '1'), 
('sys', 'site', 'private_site', '0'), 
('sys', 'site', 'max_user_admin', '0'), 
('sys', 'site', 'max_user_number', '0'), 
('sys', 'site', 'captcha_area', 'r,m,p'), 
('sys', 'site', 'captcha_type', 'captcha'), 
('sys', 'site', 'dkim_included', 'sendmail,mail'), 
('sys', 'site', 'smime_included', 'sendmail,mail'), 
('sys', 'site', 'nv_csp', 'script-src &#039;self&#039; *.google.com *.google-analytics.com *.googletagmanager.com *.gstatic.com *.facebook.com *.facebook.net *.twitter.com *.zalo.me *.zaloapp.com *.tawk.to &#039;unsafe-inline&#039; &#039;unsafe-hashes&#039; &#039;unsafe-eval&#039;;object-src &#039;self&#039;;style-src &#039;self&#039; *.google.com *.googleapis.com *.tawk.to &#039;unsafe-inline&#039;;img-src &#039;self&#039; data: *.twitter.com *.google.com *.googleapis.com *.gstatic.com *.facebook.com tawk.link *.tawk.to static.nukeviet.vn;media-src &#039;self&#039; *.tawk.to;frame-src &#039;self&#039; *.google.com *.youtube.com *.facebook.com *.facebook.net *.twitter.com *.zalo.me;font-src &#039;self&#039; *.googleapis.com *.gstatic.com *.tawk.to;connect-src &#039;self&#039; *.zalo.me *.tawk.to wss://*.tawk.to;form-action &#039;self&#039; *.google.com;base-uri &#039;self&#039;;'), 
('sys', 'site', 'nv_csp_act', '0'), 
('sys', 'site', 'nv_rp', 'no-referrer-when-downgrade, strict-origin-when-cross-origin'), 
('sys', 'site', 'nv_rp_act', '1'), 
('sys', 'site', 'ogp_image', ''), 
('sys', 'define', 'nv_gfx_num', '6'), 
('sys', 'global', 'closed_site', '0'), 
('sys', 'global', 'site_reopening_time', '0'), 
('sys', 'global', 'notification_active', '1'), 
('sys', 'global', 'notification_autodel', '15'), 
('sys', 'global', 'site_keywords', 'NukeViet, portal, mysql, php'), 
('sys', 'global', 'block_admin_ip', '0'), 
('sys', 'global', 'admfirewall', '0'), 
('sys', 'global', 'dump_autobackup', '1'), 
('sys', 'global', 'dump_backup_ext', 'gz'), 
('sys', 'global', 'dump_backup_day', '30'), 
('sys', 'global', 'file_allowed_ext', 'adobe,archives,audio,documents,flash,images,real,video'), 
('sys', 'global', 'forbid_extensions', 'htm,html,htmls,js,php,php3,php4,php5,phtml,inc'), 
('sys', 'global', 'forbid_mimes', 'application/ecmascript,application/javascript,application/x-javascript,text/ecmascript,text/html,text/javascript,application/x-httpd-php,application/x-httpd-php-source,application/php,application/x-php,text/php,text/x-php'), 
('sys', 'global', 'nv_max_size', '11658067968'), 
('sys', 'global', 'nv_overflow_size', '0'), 
('sys', 'global', 'upload_checking_mode', 'strong'), 
('sys', 'global', 'upload_alt_require', '1'), 
('sys', 'global', 'upload_auto_alt', '1'), 
('sys', 'global', 'upload_chunk_size', '0'), 
('sys', 'global', 'useactivate', '2'), 
('sys', 'global', 'allow_sitelangs', 'vi'), 
('sys', 'global', 'read_type', '0'), 
('sys', 'global', 'rewrite_enable', '1'), 
('sys', 'global', 'rewrite_optional', '1'), 
('sys', 'global', 'rewrite_endurl', '/'), 
('sys', 'global', 'rewrite_exturl', '.html'), 
('sys', 'global', 'rewrite_op_mod', 'shops'), 
('sys', 'global', 'autocheckupdate', '0'), 
('sys', 'global', 'autoupdatetime', '24'), 
('sys', 'global', 'gzip_method', '1'), 
('sys', 'global', 'authors_detail_main', '0'), 
('sys', 'global', 'spadmin_add_admin', '1'), 
('sys', 'global', 'timestamp', '1649750738'), 
('sys', 'global', 'version', '4.5.00'), 
('sys', 'global', 'cookie_httponly', '1'), 
('sys', 'global', 'admin_check_pass_time', '1800'), 
('sys', 'global', 'cookie_secure', '0'), 
('sys', 'global', 'cookie_SameSite', 'Lax'), 
('sys', 'global', 'is_flood_blocker', '1'), 
('sys', 'global', 'max_requests_60', '40'), 
('sys', 'global', 'max_requests_300', '150'), 
('sys', 'global', 'is_login_blocker', '1'), 
('sys', 'global', 'login_number_tracking', '5'), 
('sys', 'global', 'login_time_tracking', '5'), 
('sys', 'global', 'login_time_ban', '30'), 
('sys', 'global', 'nv_display_errors_list', '1'), 
('sys', 'global', 'display_errors_list', '1'), 
('sys', 'global', 'nv_auto_resize', '1'), 
('sys', 'global', 'dump_interval', '1'), 
('sys', 'global', 'nv_static_url', ''), 
('sys', 'global', 'cdn_url', ''), 
('sys', 'global', 'two_step_verification', '0'), 
('sys', 'global', 'admin_2step_opt', 'code'), 
('sys', 'global', 'admin_2step_default', 'code'), 
('sys', 'global', 'recaptcha_sitekey', ''), 
('sys', 'global', 'recaptcha_secretkey', ''), 
('sys', 'global', 'recaptcha_type', 'image'), 
('sys', 'global', 'recaptcha_ver', '2'), 
('sys', 'global', 'users_special', '0'), 
('sys', 'global', 'crosssite_restrict', '1'), 
('sys', 'global', 'crosssite_valid_domains', ''), 
('sys', 'global', 'crosssite_valid_ips', ''), 
('sys', 'global', 'crossadmin_restrict', '1'), 
('sys', 'global', 'crossadmin_valid_domains', ''), 
('sys', 'global', 'crossadmin_valid_ips', ''), 
('sys', 'global', 'domains_whitelist', '[\"youtube.com\",\"www.youtube.com\",\"google.com\",\"www.google.com\",\"drive.google.com\",\"docs.google.com\"]'), 
('sys', 'global', 'domains_restrict', '1'), 
('sys', 'global', 'remote_api_access', '0'), 
('sys', 'global', 'remote_api_log', '1'), 
('sys', 'global', 'allow_null_origin', '0'), 
('sys', 'global', 'ip_allow_null_origin', ''), 
('sys', 'global', 'cookie_notice_popup', '0'), 
('sys', 'define', 'nv_gfx_width', '150'), 
('sys', 'define', 'nv_gfx_height', '40'), 
('sys', 'define', 'nv_max_width', '1900'), 
('sys', 'define', 'nv_max_height', '1900'), 
('sys', 'define', 'nv_mobile_mode_img', '480'), 
('sys', 'define', 'nv_live_cookie_time', '31104000'), 
('sys', 'define', 'nv_live_session_time', '0'), 
('sys', 'define', 'nv_anti_iframe', '1'), 
('sys', 'define', 'nv_anti_agent', '0'), 
('sys', 'define', 'nv_allowed_html_tags', 'embed, object, param, a, b, blockquote, br, caption, col, colgroup, div, em, h1, h2, h3, h4, h5, h6, hr, i, img, li, p, span, strong, s, sub, sup, table, tbody, td, th, tr, u, ul, ol, iframe, figure, figcaption, video, audio, source, track, code, pre'), 
('sys', 'define', 'nv_debug', '0'), 
('vi', 'global', 'site_domain', ''), 
('vi', 'global', 'site_name', 'Bánh Da Nem Nam Chi - Đặc Sản Hà Tĩnh'), 
('vi', 'global', 'site_logo', ''), 
('vi', 'global', 'site_banner', ''), 
('vi', 'global', 'site_favicon', 'uploads/icon.png'), 
('vi', 'global', 'site_description', 'Bánh Da Nem Nam Chi - Đặc Sản Hà Tĩnh'), 
('vi', 'global', 'site_keywords', ''), 
('vi', 'global', 'theme_type', 'r'), 
('vi', 'global', 'site_theme', 'default'), 
('vi', 'global', 'preview_theme', ''), 
('vi', 'global', 'user_allowed_theme', ''), 
('vi', 'global', 'mobile_theme', ''), 
('vi', 'global', 'site_home_module', 'home'), 
('vi', 'global', 'switch_mobi_des', '0'), 
('vi', 'global', 'upload_logo', ''), 
('vi', 'global', 'upload_logo_pos', 'bottomRight'), 
('vi', 'global', 'autologosize1', '50'), 
('vi', 'global', 'autologosize2', '40'), 
('vi', 'global', 'autologosize3', '30'), 
('vi', 'global', 'autologomod', ''), 
('vi', 'global', 'name_show', '0'), 
('vi', 'global', 'cronjobs_next_time', '1649750871'), 
('vi', 'global', 'disable_site_content', 'Vì lý do kỹ thuật website tạm ngưng hoạt động. Thành thật xin lỗi các bạn vì sự bất tiện này!'), 
('vi', 'seotools', 'prcservice', ''), 
('vi', 'about', 'emailcomm', '0'), 
('vi', 'about', 'adminscomm', ''), 
('vi', 'about', 'auto_postcomm', '1'), 
('vi', 'about', 'allowed_comm', '-1'), 
('vi', 'about', 'view_comm', '6'), 
('vi', 'tuyen-dung', 'allowed_comm', '-1'), 
('vi', 'tuyen-dung', 'view_comm', '6'), 
('vi', 'tuyen-dung', 'setcomm', '4'), 
('vi', 'tuyen-dung', 'activecomm', '1'), 
('vi', 'tuyen-dung', 'emailcomm', '0'), 
('vi', 'tuyen-dung', 'adminscomm', ''), 
('vi', 'tuyen-dung', 'sortcomm', '0'), 
('vi', 'tuyen-dung', 'captcha_area_comm', '1'), 
('vi', 'tuyen-dung', 'perpagecomm', '5'), 
('vi', 'tuyen-dung', 'timeoutcomm', '360'), 
('vi', 'tuyen-dung', 'allowattachcomm', '0'), 
('vi', 'tuyen-dung', 'alloweditorcomm', '0'), 
('vi', 'contact', 'bodytext', 'Để không ngừng nâng cao chất lượng dịch vụ và đáp ứng tốt hơn nữa các yêu cầu của Quý khách, chúng tôi mong muốn nhận được các thông tin phản hồi. Nếu Quý khách có bất kỳ thắc mắc hoặc đóng góp nào, xin vui lòng liên hệ với chúng tôi theo thông tin dưới đây. Chúng tôi sẽ phản hồi lại Quý khách trong thời gian sớm nhất.<br />&nbsp;<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1282.0715857240696!2d105.89045401611803!3d18.33678760961461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31384e1140820ba3%3A0xd81e05e8577e9248!2zMTE4IEzDqiBEdeG6qW4sIFRy4bqnbiBQaMO6LCBIw6AgVMSpbmgsIFZpZXRuYW0!5e1!3m2!1sen!2s!4v1635240781099!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>'), 
('vi', 'contact', 'sendcopymode', '0'), 
('vi', 'contact', 'captcha_type', 'captcha'), 
('vi', 'about', 'activecomm', '1'), 
('vi', 'about', 'setcomm', '4'), 
('sys', 'banners', 'captcha_type', 'captcha'), 
('vi', 'page', 'auto_postcomm', '1'), 
('vi', 'page', 'allowed_comm', '-1'), 
('vi', 'page', 'view_comm', '6'), 
('vi', 'page', 'setcomm', '4'), 
('vi', 'page', 'activecomm', '0'), 
('vi', 'page', 'emailcomm', '0'), 
('vi', 'page', 'adminscomm', ''), 
('vi', 'page', 'sortcomm', '0'), 
('vi', 'page', 'captcha_area_comm', '1'), 
('vi', 'page', 'perpagecomm', '5'), 
('vi', 'page', 'timeoutcomm', '360'), 
('vi', 'page', 'allowattachcomm', '0'), 
('vi', 'page', 'alloweditorcomm', '0'), 
('vi', 'comment', 'captcha_type', 'captcha'), 
('vi', 'about', 'captcha_area_comm', '1'), 
('vi', 'about', 'sortcomm', '0'), 
('vi', 'tuyen-dung', 'auto_postcomm', '1'), 
('sys', 'site', 'statistics_timezone', 'Asia/Bangkok'), 
('sys', 'site', 'site_email', 'info@nuke.vn'), 
('sys', 'global', 'error_set_logs', '1'), 
('sys', 'global', 'error_send_email', 'info@nuke.vn'), 
('sys', 'global', 'site_lang', 'vi'), 
('sys', 'global', 'my_domains', 'banhdanem.thuongmaiso.net'), 
('sys', 'global', 'cookie_prefix', 'nv4'), 
('sys', 'global', 'session_prefix', 'nv4s_a0SKd1'), 
('sys', 'global', 'site_timezone', 'byCountry'), 
('sys', 'global', 'proxy_blocker', '0'), 
('sys', 'global', 'str_referer_blocker', '0'), 
('sys', 'global', 'lang_multi', '0'), 
('sys', 'global', 'lang_geo', '0'), 
('sys', 'global', 'ftp_server', 'localhost'), 
('sys', 'global', 'ftp_port', '21'), 
('sys', 'global', 'ftp_user_name', ''), 
('sys', 'global', 'ftp_user_pass', 'hrL5UVHzUGQrxCr2ayTCLA,,'), 
('sys', 'global', 'ftp_path', '/'), 
('sys', 'global', 'ftp_check_login', '0'), 
('vi', 'wallet', 'allow_smsNap', '0'), 
('vi', 'wallet', 'smsConfigNap_keyword', ''), 
('vi', 'wallet', 'smsConfigNap_port', ''), 
('vi', 'wallet', 'smsConfigNap_prefix', ''), 
('vi', 'wallet', 'smsConfigNap', ''), 
('vi', 'wallet', 'minimum_amount', 'a:2:{s:3:\"VND\";s:46:\"10000,20000,50000,100000,200000,500000,1000000\";s:3:\"USD\";s:22:\"5,10,20,50,100,200,500\";}'), 
('vi', 'wallet', 'payport_content', ''), 
('vi', 'wallet', 'recharge_rate', ''), 
('vi', 'wallet', 'allow_exchange_pay', '1'), 
('vi', 'wallet', 'transaction_expiration_time', '0'), 
('vi', 'wallet', 'next_update_transaction_time', '0'), 
('vi', 'wallet', 'accountants_emails', ''), 
('vi', 'wallet', 'captcha_type', 'captcha'), 
('vi', 'shops', 'image_size', '100x100'), 
('vi', 'shops', 'home_data', 'all'), 
('vi', 'shops', 'home_view', 'viewgrid'), 
('vi', 'shops', 'per_page', '20'), 
('vi', 'shops', 'per_row', '3'), 
('vi', 'shops', 'money_unit', 'VND'), 
('vi', 'shops', 'weight_unit', 'g'), 
('vi', 'shops', 'post_auto_member', '0'), 
('vi', 'shops', 'auto_check_order', '1'), 
('vi', 'shops', 'format_order_id', 'S%06s'), 
('vi', 'shops', 'format_code_id', 'S%06s'), 
('vi', 'shops', 'facebookappid', ''), 
('vi', 'shops', 'active_guest_order', '1'), 
('vi', 'shops', 'active_showhomtext', '1'), 
('vi', 'shops', 'active_order', '1'), 
('vi', 'shops', 'active_order_popup', '1'), 
('vi', 'shops', 'active_order_non_detail', '1'), 
('vi', 'shops', 'active_price', '1'), 
('vi', 'shops', 'active_order_number', '0'), 
('vi', 'shops', 'order_day', '0'), 
('vi', 'shops', 'order_nexttime', '0'), 
('vi', 'shops', 'active_payment', '1'), 
('vi', 'shops', 'groups_price', '3'), 
('vi', 'shops', 'active_tooltip', '1'), 
('vi', 'shops', 'timecheckstatus', '0'), 
('vi', 'shops', 'show_product_code', '1'), 
('vi', 'shops', 'show_compare', '0'), 
('vi', 'shops', 'show_displays', '0'), 
('vi', 'shops', 'use_shipping', '0'), 
('vi', 'shops', 'use_coupons', '0'), 
('vi', 'shops', 'active_wishlist', '1'), 
('vi', 'shops', 'active_gift', '1'), 
('vi', 'shops', 'active_warehouse', '0'), 
('vi', 'shops', 'tags_alias', '0'), 
('vi', 'shops', 'auto_tags', '1'), 
('vi', 'shops', 'tags_remind', '0'), 
('vi', 'shops', 'point_active', '0'), 
('vi', 'shops', 'point_conversion', '0'), 
('vi', 'shops', 'point_new_order', '0'), 
('vi', 'shops', 'money_to_point', '0'), 
('vi', 'shops', 'review_active', '1'), 
('vi', 'shops', 'review_check', '1'), 
('vi', 'shops', 'review_captcha', '1'), 
('vi', 'shops', 'group_price', ''), 
('vi', 'shops', 'groups_notify', '3'), 
('vi', 'shops', 'template_active', '0'), 
('vi', 'shops', 'download_active', '0'), 
('vi', 'shops', 'download_groups', '6'), 
('vi', 'shops', 'saleprice_active', '0'), 
('vi', 'shops', 'sortdefault', '0'), 
('vi', 'shops', 'alias_lower', '1'), 
('vi', 'shops', 'auto_postcomm', '1'), 
('vi', 'shops', 'allowed_comm', '-1'), 
('vi', 'shops', 'view_comm', '6'), 
('vi', 'shops', 'setcomm', '4'), 
('vi', 'shops', 'activecomm', '1'), 
('vi', 'shops', 'emailcomm', '0'), 
('vi', 'shops', 'adminscomm', ''), 
('vi', 'shops', 'sortcomm', '0'), 
('vi', 'shops', 'captcha', '1'), 
('vi', 'shops', 'allowattachcomm', '0'), 
('vi', 'shops', 'alloweditorcomm', '0'), 
('vi', 'home', 'next_execute', '0'), 
('vi', 'photos', 'autologosize2', '40'), 
('vi', 'photos', 'autologosize3', '30'), 
('vi', 'photos', 'module_logo', 'uploads/logo_edu.png'), 
('vi', 'photos', 'logo_position', 'bottom_right'), 
('vi', 'photos', 'structure_upload', 'Y_m'), 
('vi', 'photos', 'maxupload', '2684354'), 
('vi', 'photos', 'active_logo', '1'), 
('vi', 'photos', 'autologosize1', '50'), 
('vi', 'photos', 'fbappid', '0'), 
('vi', 'photos', 'social_tool', '1'), 
('vi', 'photos', 'per_page_photo', '30'), 
('vi', 'photos', 'per_line', '3'), 
('vi', 'photos', 'home_view', 'home_view_grid_by_album'), 
('vi', 'photos', 'home_layout', ''), 
('vi', 'photos', 'album_view', 'album_view_grid'), 
('vi', 'photos', 'home_title_cut', '60'), 
('vi', 'photos', 'per_page_album', '30'), 
('vi', 'photos', 'origin_size_width', '1500'), 
('vi', 'photos', 'origin_size_height', '1500'), 
('vi', 'photos', 'cr_thumb_width', '270'), 
('vi', 'photos', 'cr_thumb_height', '210'), 
('vi', 'photos', 'cr_thumb_quality', '90'), 
('vi', 'photos', 'auto_postcomm', '1'), 
('vi', 'photos', 'allowed_comm', '-1'), 
('vi', 'photos', 'view_comm', '6'), 
('vi', 'photos', 'setcomm', '4'), 
('vi', 'photos', 'activecomm', '1'), 
('vi', 'photos', 'emailcomm', '0'), 
('vi', 'photos', 'adminscomm', ''), 
('vi', 'photos', 'sortcomm', '0'), 
('vi', 'photos', 'captcha', '1'), 
('vi', 'photos', 'perpagecomm', '5'), 
('vi', 'photos', 'timeoutcomm', '360'), 
('vi', 'tin-tuc', 'auto_postcomm', '1'), 
('vi', 'tin-tuc', 'allowed_comm', '-1'), 
('vi', 'tin-tuc', 'view_comm', '6'), 
('vi', 'tin-tuc', 'setcomm', '4'), 
('vi', 'tin-tuc', 'activecomm', '1'), 
('vi', 'tin-tuc', 'emailcomm', '0'), 
('vi', 'tin-tuc', 'adminscomm', ''), 
('vi', 'tin-tuc', 'sortcomm', '0'), 
('vi', 'tin-tuc', 'captcha_area_comm', '1'), 
('vi', 'tin-tuc', 'perpagecomm', '5'), 
('vi', 'tin-tuc', 'timeoutcomm', '360'), 
('vi', 'tin-tuc', 'allowattachcomm', '0'), 
('vi', 'tin-tuc', 'alloweditorcomm', '0'), 
('vi', 'about', 'perpagecomm', '5'), 
('vi', 'about', 'timeoutcomm', '360'), 
('vi', 'about', 'allowattachcomm', '0'), 
('vi', 'about', 'alloweditorcomm', '0');


-- ---------------------------------------


--
-- Table structure for table `tms_cookies`
--

DROP TABLE IF EXISTS `tms_cookies`;
CREATE TABLE `tms_cookies` (
  `name` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `value` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `domain` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int(11) NOT NULL DEFAULT 0,
  `secure` tinyint(1) NOT NULL DEFAULT 0,
  UNIQUE KEY `cookiename` (`name`,`domain`,`path`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_cookies`
--

INSERT INTO `tms_cookies` VALUES
('nv4c_b1Sp_ctr', 'MTAzXzE5OV82OV8yMDIuVk4=', '.api.nukeviet.vn', '/', 1666149712, 0), 
('nv4c_b1Sp_u_lang', 'YpTSHDtzEZZlnKC1-4-mDQ,,', '.api.nukeviet.vn', '/', 1665717712, 0), 
('nv4c_b1Sp_statistic_vi', 'ik3t3-9Egj_yu23tZLuzAg,,', '.api.nukeviet.vn', '/', 1634615512, 0), 
('nv4c_b1Sp_nvvithemever', 'y6z0B4S1YKW4aqQyD0bnVQ,,', '.api.nukeviet.vn', '/', 1665717712, 0);


-- ---------------------------------------


--
-- Table structure for table `tms_counter`
--

DROP TABLE IF EXISTS `tms_counter`;
CREATE TABLE `tms_counter` (
  `c_type` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_val` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_update` int(11) NOT NULL DEFAULT 0,
  `c_count` int(11) unsigned NOT NULL DEFAULT 0,
  `vi_count` int(11) unsigned NOT NULL DEFAULT 0,
  UNIQUE KEY `c_type` (`c_type`,`c_val`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_counter`
--

INSERT INTO `tms_counter` VALUES
('c_time', 'start', 0, 0, 0), 
('c_time', 'last', 0, 1649750110, 0), 
('total', 'hits', 1649750110, 4146, 4146), 
('year', '2021', 1640958223, 1685, 1685), 
('year', '2022', 1649750110, 2461, 2461), 
('year', '2023', 0, 0, 0), 
('year', '2024', 0, 0, 0), 
('year', '2025', 0, 0, 0), 
('year', '2026', 0, 0, 0), 
('year', '2027', 0, 0, 0), 
('year', '2028', 0, 0, 0), 
('year', '2029', 0, 0, 0), 
('month', 'Jan', 1643642652, 783, 783), 
('month', 'Feb', 1646066497, 719, 719), 
('month', 'Mar', 1648743930, 689, 689), 
('month', 'Apr', 1649750110, 270, 270), 
('month', 'May', 0, 0, 0), 
('month', 'Jun', 0, 0, 0), 
('month', 'Jul', 0, 0, 0), 
('month', 'Aug', 0, 0, 0), 
('month', 'Sep', 0, 0, 0), 
('month', 'Oct', 1635692400, 0, 0), 
('month', 'Nov', 1638289001, 0, 0), 
('month', 'Dec', 1640958223, 0, 0), 
('day', '01', 1648820542, 18, 18), 
('day', '02', 1648917457, 30, 30), 
('day', '03', 1649001050, 23, 23), 
('day', '04', 1649081355, 13, 13), 
('day', '05', 1649173093, 20, 20), 
('day', '06', 1649261694, 23, 23), 
('day', '07', 1649334110, 54, 54), 
('day', '08', 1649434788, 16, 16), 
('day', '09', 1649521128, 25, 25), 
('day', '10', 1649593237, 15, 15), 
('day', '11', 1649695764, 20, 20), 
('day', '12', 1649750110, 13, 13), 
('day', '13', 1647187740, 0, 0), 
('day', '14', 1647266325, 0, 0), 
('day', '15', 1647357084, 0, 0), 
('day', '16', 1647446614, 0, 0), 
('day', '17', 1647535154, 0, 0), 
('day', '18', 1647614854, 0, 0), 
('day', '19', 1647705089, 0, 0), 
('day', '20', 1647789876, 0, 0), 
('day', '21', 1647876732, 0, 0), 
('day', '22', 1647961511, 0, 0), 
('day', '23', 1648050340, 0, 0), 
('day', '24', 1648133718, 0, 0), 
('day', '25', 1648225553, 0, 0), 
('day', '26', 1648312733, 0, 0), 
('day', '27', 1648395360, 0, 0), 
('day', '28', 1648486218, 0, 0), 
('day', '29', 1648566361, 0, 0), 
('day', '30', 1648656994, 0, 0), 
('day', '31', 1648743930, 0, 0), 
('dayofweek', 'Sunday', 1649593237, 534, 534), 
('dayofweek', 'Monday', 1649695764, 621, 621), 
('dayofweek', 'Tuesday', 1649750110, 591, 591), 
('dayofweek', 'Wednesday', 1649261694, 621, 621), 
('dayofweek', 'Thursday', 1649334110, 728, 728), 
('dayofweek', 'Friday', 1649434788, 497, 497), 
('dayofweek', 'Saturday', 1649521128, 554, 554), 
('hour', '00', 1649696841, 1, 1), 
('hour', '01', 1649701978, 3, 3), 
('hour', '02', 1649531218, 0, 0), 
('hour', '03', 1649710319, 1, 1), 
('hour', '04', 1649538574, 0, 0), 
('hour', '05', 1649715859, 1, 1), 
('hour', '06', 1649635002, 0, 0), 
('hour', '07', 1649724957, 1, 1), 
('hour', '08', 1649725341, 1, 1), 
('hour', '09', 1649643188, 0, 0), 
('hour', '10', 1649733920, 1, 1), 
('hour', '11', 1649391305, 0, 0), 
('hour', '12', 1649741088, 1, 1), 
('hour', '13', 1649487499, 0, 0), 
('hour', '14', 1649750110, 3, 3), 
('hour', '15', 1649664861, 0, 0), 
('hour', '16', 1649581200, 0, 0), 
('hour', '17', 1649414771, 0, 0), 
('hour', '18', 1649677906, 0, 0), 
('hour', '19', 1649681473, 0, 0), 
('hour', '20', 1649511619, 0, 0), 
('hour', '21', 1649685713, 0, 0), 
('hour', '22', 1649518187, 0, 0), 
('hour', '23', 1649695764, 0, 0), 
('bot', 'googlebot', 1649613767, 134, 134), 
('bot', 'msnbot', 0, 0, 0), 
('bot', 'bingbot', 0, 0, 0), 
('bot', 'yahooslurp', 0, 0, 0), 
('bot', 'w3cvalidator', 0, 0, 0), 
('browser', 'opera', 1649676582, 5, 5), 
('browser', 'operamini', 0, 0, 0), 
('browser', 'webtv', 0, 0, 0), 
('browser', 'explorer', 1648532451, 62, 62), 
('browser', 'edge', 1649535770, 36, 36), 
('browser', 'pocket', 0, 0, 0), 
('browser', 'konqueror', 0, 0, 0), 
('browser', 'icab', 0, 0, 0), 
('browser', 'omniweb', 0, 0, 0), 
('browser', 'firebird', 0, 0, 0), 
('browser', 'firefox', 1649244649, 255, 255), 
('browser', 'iceweasel', 0, 0, 0), 
('browser', 'shiretoko', 0, 0, 0), 
('browser', 'mozilla', 1649710319, 470, 470), 
('browser', 'amaya', 0, 0, 0), 
('browser', 'lynx', 1636039975, 1, 1), 
('browser', 'safari', 1647433636, 14, 14), 
('browser', 'iphone', 1649685713, 34, 34), 
('browser', 'ipod', 0, 0, 0), 
('browser', 'ipad', 1634695067, 1, 1), 
('browser', 'chrome', 1649750110, 1976, 1976), 
('browser', 'cococ', 0, 0, 0), 
('browser', 'android', 1646853321, 13, 13), 
('browser', 'googlebot', 1649613767, 134, 134), 
('browser', 'yahooslurp', 0, 0, 0), 
('browser', 'w3cvalidator', 0, 0, 0), 
('browser', 'blackberry', 0, 0, 0), 
('browser', 'icecat', 0, 0, 0), 
('browser', 'nokias60', 0, 0, 0), 
('browser', 'nokia', 0, 0, 0), 
('browser', 'msn', 0, 0, 0), 
('browser', 'msnbot', 0, 0, 0), 
('browser', 'bingbot', 1649715859, 856, 856), 
('browser', 'netscape', 0, 0, 0), 
('browser', 'galeon', 1648724484, 1, 1), 
('browser', 'netpositive', 0, 0, 0), 
('browser', 'phoenix', 0, 0, 0), 
('browser', 'Mobile', 0, 0, 0), 
('browser', 'bots', 0, 0, 0), 
('browser', 'Unknown', 1649725341, 272, 272), 
('os', 'unknown', 1649725341, 1662, 1662), 
('os', 'win', 1649314869, 20, 20), 
('os', 'win10', 1649750110, 1168, 1168), 
('os', 'win8', 1649676583, 26, 26), 
('os', 'win7', 1649647925, 185, 185), 
('os', 'win2003', 0, 0, 0), 
('os', 'winvista', 1644643493, 22, 22), 
('os', 'wince', 0, 0, 0), 
('os', 'winxp', 1649408036, 42, 42), 
('os', 'win2000', 0, 0, 0), 
('os', 'apple', 1649640247, 182, 182), 
('os', 'linux', 1649701394, 556, 556), 
('os', 'os2', 0, 0, 0), 
('os', 'beos', 0, 0, 0), 
('os', 'iphone', 1649685713, 55, 55), 
('os', 'ipod', 0, 0, 0), 
('os', 'ipad', 1637203899, 2, 2), 
('os', 'blackberry', 0, 0, 0), 
('os', 'nokia', 0, 0, 0), 
('os', 'freebsd', 0, 0, 0), 
('os', 'openbsd', 1649314866, 1, 1), 
('os', 'netbsd', 0, 0, 0), 
('os', 'sunos', 0, 0, 0), 
('os', 'opensolaris', 0, 0, 0), 
('os', 'android', 1649741088, 180, 180), 
('os', 'irix', 0, 0, 0), 
('os', 'palm', 0, 0, 0), 
('country', 'AD', 0, 0, 0), 
('country', 'AE', 0, 0, 0), 
('country', 'AF', 0, 0, 0), 
('country', 'AG', 0, 0, 0), 
('country', 'AI', 0, 0, 0), 
('country', 'AL', 0, 0, 0), 
('country', 'AM', 0, 0, 0), 
('country', 'AN', 0, 0, 0), 
('country', 'AO', 0, 0, 0), 
('country', 'AQ', 0, 0, 0), 
('country', 'AR', 1644640763, 2, 2), 
('country', 'AS', 0, 0, 0), 
('country', 'AT', 1644904297, 3, 3), 
('country', 'AU', 1638766469, 12, 12), 
('country', 'AW', 0, 0, 0), 
('country', 'AZ', 0, 0, 0), 
('country', 'BA', 0, 0, 0), 
('country', 'BB', 0, 0, 0), 
('country', 'BD', 0, 0, 0), 
('country', 'BE', 1639008437, 3, 3), 
('country', 'BF', 0, 0, 0), 
('country', 'BG', 0, 0, 0), 
('country', 'BH', 0, 0, 0), 
('country', 'BI', 0, 0, 0), 
('country', 'BJ', 0, 0, 0), 
('country', 'BM', 0, 0, 0), 
('country', 'BN', 0, 0, 0), 
('country', 'BO', 0, 0, 0), 
('country', 'BR', 1635269748, 2, 2), 
('country', 'BS', 0, 0, 0), 
('country', 'BT', 0, 0, 0), 
('country', 'BW', 0, 0, 0), 
('country', 'BY', 0, 0, 0), 
('country', 'BZ', 0, 0, 0), 
('country', 'CA', 1648912126, 48, 48), 
('country', 'CD', 0, 0, 0), 
('country', 'CF', 0, 0, 0), 
('country', 'CG', 0, 0, 0), 
('country', 'CH', 1641663297, 8, 8), 
('country', 'CI', 0, 0, 0), 
('country', 'CK', 0, 0, 0), 
('country', 'CL', 0, 0, 0), 
('country', 'CM', 0, 0, 0), 
('country', 'CN', 1649535770, 213, 213), 
('country', 'CO', 0, 0, 0), 
('country', 'CR', 0, 0, 0), 
('country', 'CS', 0, 0, 0), 
('country', 'CU', 0, 0, 0), 
('country', 'CV', 0, 0, 0), 
('country', 'CY', 0, 0, 0), 
('country', 'CZ', 0, 0, 0), 
('country', 'DE', 1649725341, 80, 80), 
('country', 'DJ', 0, 0, 0), 
('country', 'DK', 1639008265, 1, 1), 
('country', 'DM', 0, 0, 0), 
('country', 'DO', 0, 0, 0), 
('country', 'DZ', 0, 0, 0), 
('country', 'EC', 0, 0, 0), 
('country', 'EE', 1647915553, 1, 1), 
('country', 'EG', 0, 0, 0), 
('country', 'ER', 0, 0, 0), 
('country', 'ES', 1647886793, 6, 6), 
('country', 'ET', 0, 0, 0), 
('country', 'EU', 0, 0, 0), 
('country', 'FI', 1634736124, 1, 1), 
('country', 'FJ', 0, 0, 0), 
('country', 'FK', 0, 0, 0), 
('country', 'FM', 0, 0, 0), 
('country', 'FO', 0, 0, 0), 
('country', 'FR', 1649710319, 261, 261), 
('country', 'GA', 0, 0, 0), 
('country', 'GB', 1649553326, 44, 44), 
('country', 'GD', 0, 0, 0), 
('country', 'GE', 0, 0, 0), 
('country', 'GF', 0, 0, 0), 
('country', 'GH', 0, 0, 0), 
('country', 'GI', 0, 0, 0), 
('country', 'GL', 0, 0, 0), 
('country', 'GM', 0, 0, 0), 
('country', 'GN', 0, 0, 0), 
('country', 'GP', 0, 0, 0), 
('country', 'GQ', 0, 0, 0), 
('country', 'GR', 1649695764, 83, 83), 
('country', 'GS', 0, 0, 0), 
('country', 'GT', 0, 0, 0), 
('country', 'GU', 0, 0, 0), 
('country', 'GW', 0, 0, 0), 
('country', 'GY', 0, 0, 0), 
('country', 'HK', 1649314869, 35, 35), 
('country', 'HN', 1636078778, 1, 1), 
('country', 'HR', 0, 0, 0), 
('country', 'HT', 0, 0, 0), 
('country', 'HU', 0, 0, 0), 
('country', 'ID', 1647433636, 2, 2), 
('country', 'IE', 1647608055, 24, 24), 
('country', 'IL', 1648791209, 52, 52), 
('country', 'IN', 1649286830, 5, 5), 
('country', 'IO', 0, 0, 0), 
('country', 'IQ', 0, 0, 0), 
('country', 'IR', 1640918756, 2, 2), 
('country', 'IS', 0, 0, 0), 
('country', 'IT', 1645917669, 11, 11), 
('country', 'JM', 0, 0, 0), 
('country', 'JO', 0, 0, 0), 
('country', 'JP', 1646853321, 8, 8), 
('country', 'KE', 0, 0, 0), 
('country', 'KG', 0, 0, 0), 
('country', 'KH', 0, 0, 0), 
('country', 'KI', 0, 0, 0), 
('country', 'KM', 0, 0, 0), 
('country', 'KN', 0, 0, 0), 
('country', 'KR', 1646470060, 18, 18), 
('country', 'KW', 0, 0, 0), 
('country', 'KY', 0, 0, 0), 
('country', 'KZ', 1636731654, 1, 1), 
('country', 'LA', 0, 0, 0), 
('country', 'LB', 0, 0, 0), 
('country', 'LC', 0, 0, 0), 
('country', 'LI', 0, 0, 0), 
('country', 'LK', 0, 0, 0), 
('country', 'LR', 0, 0, 0), 
('country', 'LS', 0, 0, 0), 
('country', 'LT', 0, 0, 0), 
('country', 'LU', 0, 0, 0), 
('country', 'LV', 0, 0, 0), 
('country', 'LY', 0, 0, 0), 
('country', 'MA', 0, 0, 0), 
('country', 'MC', 0, 0, 0), 
('country', 'MD', 1649696841, 157, 157), 
('country', 'MG', 0, 0, 0), 
('country', 'MH', 0, 0, 0), 
('country', 'MK', 0, 0, 0), 
('country', 'ML', 0, 0, 0), 
('country', 'MM', 0, 0, 0), 
('country', 'MN', 0, 0, 0), 
('country', 'MO', 0, 0, 0), 
('country', 'MP', 0, 0, 0), 
('country', 'MQ', 0, 0, 0), 
('country', 'MR', 0, 0, 0), 
('country', 'MT', 0, 0, 0), 
('country', 'MU', 0, 0, 0), 
('country', 'MV', 0, 0, 0), 
('country', 'MW', 0, 0, 0), 
('country', 'MX', 1642645825, 1, 1), 
('country', 'MY', 0, 0, 0), 
('country', 'MZ', 0, 0, 0), 
('country', 'NA', 0, 0, 0), 
('country', 'NC', 0, 0, 0), 
('country', 'NE', 0, 0, 0), 
('country', 'NF', 0, 0, 0), 
('country', 'NG', 0, 0, 0), 
('country', 'NI', 0, 0, 0), 
('country', 'NL', 1646827618, 6, 6), 
('country', 'NO', 1648262155, 6, 6), 
('country', 'NP', 0, 0, 0), 
('country', 'NR', 0, 0, 0), 
('country', 'NU', 0, 0, 0), 
('country', 'NZ', 0, 0, 0), 
('country', 'OM', 0, 0, 0), 
('country', 'PA', 0, 0, 0), 
('country', 'PE', 1635269367, 2, 2), 
('country', 'PF', 0, 0, 0), 
('country', 'PG', 0, 0, 0), 
('country', 'PH', 0, 0, 0), 
('country', 'PK', 0, 0, 0), 
('country', 'PL', 1649676587, 4, 4), 
('country', 'PR', 0, 0, 0), 
('country', 'PS', 0, 0, 0), 
('country', 'PT', 0, 0, 0), 
('country', 'PW', 0, 0, 0), 
('country', 'PY', 0, 0, 0), 
('country', 'QA', 0, 0, 0), 
('country', 'RE', 0, 0, 0), 
('country', 'RO', 1648486218, 3, 3), 
('country', 'RU', 1649493756, 45, 45), 
('country', 'RW', 0, 0, 0), 
('country', 'SA', 0, 0, 0), 
('country', 'SB', 0, 0, 0), 
('country', 'SC', 0, 0, 0), 
('country', 'SD', 0, 0, 0), 
('country', 'SE', 1649640247, 63, 63), 
('country', 'SG', 1649173093, 48, 48), 
('country', 'SI', 0, 0, 0), 
('country', 'SK', 0, 0, 0), 
('country', 'SL', 0, 0, 0), 
('country', 'SM', 0, 0, 0), 
('country', 'SN', 0, 0, 0), 
('country', 'SO', 0, 0, 0), 
('country', 'SR', 0, 0, 0), 
('country', 'ST', 0, 0, 0), 
('country', 'SV', 0, 0, 0), 
('country', 'SY', 0, 0, 0), 
('country', 'SZ', 0, 0, 0), 
('country', 'TD', 0, 0, 0), 
('country', 'TF', 0, 0, 0), 
('country', 'TG', 0, 0, 0), 
('country', 'TH', 1635268878, 1, 1), 
('country', 'TJ', 0, 0, 0), 
('country', 'TK', 0, 0, 0), 
('country', 'TL', 0, 0, 0), 
('country', 'TM', 0, 0, 0), 
('country', 'TN', 0, 0, 0), 
('country', 'TO', 0, 0, 0), 
('country', 'TR', 1646379558, 299, 299), 
('country', 'TT', 0, 0, 0), 
('country', 'TV', 0, 0, 0), 
('country', 'TW', 0, 0, 0), 
('country', 'TZ', 0, 0, 0), 
('country', 'UA', 1648532451, 7, 7), 
('country', 'UG', 0, 0, 0), 
('country', 'US', 1649749163, 2302, 2302), 
('country', 'UY', 0, 0, 0), 
('country', 'UZ', 0, 0, 0), 
('country', 'VA', 0, 0, 0), 
('country', 'VC', 0, 0, 0), 
('country', 'VE', 0, 0, 0), 
('country', 'VG', 0, 0, 0), 
('country', 'VI', 0, 0, 0), 
('country', 'VN', 1649750110, 148, 148), 
('country', 'VU', 0, 0, 0), 
('country', 'WS', 0, 0, 0), 
('country', 'YE', 0, 0, 0), 
('country', 'YT', 0, 0, 0), 
('country', 'YU', 0, 0, 0), 
('country', 'ZA', 1647016849, 3, 3), 
('country', 'ZM', 0, 0, 0), 
('country', 'ZW', 0, 0, 0), 
('country', 'ZZ', 1649647925, 122, 122), 
('country', 'unkown', 0, 0, 0);


-- ---------------------------------------


--
-- Table structure for table `tms_cronjobs`
--

DROP TABLE IF EXISTS `tms_cronjobs`;
CREATE TABLE `tms_cronjobs` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `start_time` int(11) unsigned NOT NULL DEFAULT 0,
  `inter_val` int(11) unsigned NOT NULL DEFAULT 0,
  `inter_val_type` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: Lặp lại sau thời điểm bắt đầu thực tế, 1:lặp lại sau thời điểm bắt đầu trong CSDL',
  `run_file` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `run_func` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `params` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `del` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `is_sys` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `act` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `last_time` int(11) unsigned NOT NULL DEFAULT 0,
  `last_result` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `vi_cron_name` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `is_sys` (`is_sys`)
) ENGINE=MyISAM  AUTO_INCREMENT=10  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_cronjobs`
--

INSERT INTO `tms_cronjobs` VALUES
(1, 1634609551, 5, 0, 'online_expired_del.php', 'cron_online_expired_del', '', 0, 1, 1, 1649750571, 1, 'Xóa các dòng ghi trạng thái online đã cũ trong CSDL'), 
(2, 1634609551, 1440, 0, 'dump_autobackup.php', 'cron_dump_autobackup', '', 0, 1, 1, 1649733925, 1, 'Tự động lưu CSDL'), 
(3, 1634609551, 60, 0, 'temp_download_destroy.php', 'cron_auto_del_temp_download', '', 0, 1, 1, 1649747784, 1, 'Xóa các file tạm trong thư mục tmp'), 
(4, 1634609551, 30, 0, 'ip_logs_destroy.php', 'cron_del_ip_logs', '', 0, 1, 1, 1649749637, 1, 'Xóa IP log files, Xóa các file nhật ký truy cập'), 
(5, 1634609551, 1440, 0, 'error_log_destroy.php', 'cron_auto_del_error_log', '', 0, 1, 1, 1649733925, 1, 'Xóa các file error_log quá hạn'), 
(6, 1634609551, 360, 0, 'error_log_sendmail.php', 'cron_auto_sendmail_error_log', '', 0, 1, 0, 0, 0, 'Gửi email các thông báo lỗi cho admin'), 
(7, 1634609551, 60, 0, 'ref_expired_del.php', 'cron_ref_expired_del', '', 0, 1, 1, 1649747784, 1, 'Xóa các referer quá hạn'), 
(8, 1634609551, 60, 0, 'check_version.php', 'cron_auto_check_version', '', 0, 1, 1, 1649747784, 1, 'Kiểm tra phiên bản NukeViet'), 
(9, 1634609551, 1440, 0, 'notification_autodel.php', 'cron_notification_autodel', '', 0, 1, 1, 1649733925, 1, 'Xóa thông báo cũ');


-- ---------------------------------------


--
-- Table structure for table `tms_extension_files`
--

DROP TABLE IF EXISTS `tms_extension_files`;
CREATE TABLE `tms_extension_files` (
  `idfile` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'other',
  `title` varchar(55)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lastmodified` int(11) unsigned NOT NULL DEFAULT 0,
  `duplicate` smallint(4) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`idfile`)
) ENGINE=MyISAM  AUTO_INCREMENT=53  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_extension_files`
--

INSERT INTO `tms_extension_files` VALUES
(1, 'module', 'about', 'modules/about/admin/alias.php', 1634786996, 0), 
(2, 'module', 'about', 'modules/about/admin/change_status.php', 1634786996, 0), 
(3, 'module', 'about', 'modules/about/admin/change_weight.php', 1634786996, 0), 
(4, 'module', 'about', 'modules/about/admin/config.php', 1634786996, 0), 
(5, 'module', 'about', 'modules/about/admin/content.php', 1634786996, 0), 
(6, 'module', 'about', 'modules/about/admin/del.php', 1634786996, 0), 
(7, 'module', 'about', 'modules/about/admin/index.html', 1634786996, 0), 
(8, 'module', 'about', 'modules/about/admin/main.php', 1634786996, 0), 
(9, 'module', 'about', 'modules/about/admin/view.php', 1634786996, 0), 
(10, 'module', 'about', 'modules/about/blocks/global.about.php', 1634786996, 0), 
(11, 'module', 'about', 'modules/about/blocks/global.html.ini', 1634786996, 0), 
(12, 'module', 'about', 'modules/about/blocks/global.html.php', 1634786996, 0), 
(13, 'module', 'about', 'modules/about/blocks/global.page_list.ini', 1634786996, 0), 
(14, 'module', 'about', 'modules/about/blocks/global.page_list.php', 1634786996, 0), 
(15, 'module', 'about', 'modules/about/blocks/index.html', 1634786996, 0), 
(16, 'module', 'about', 'modules/about/funcs/index.html', 1634786996, 0), 
(17, 'module', 'about', 'modules/about/funcs/main.php', 1634786996, 0), 
(18, 'module', 'about', 'modules/about/funcs/rss.php', 1634786996, 0), 
(19, 'module', 'about', 'modules/about/funcs/sitemap.php', 1634786996, 0), 
(20, 'module', 'about', 'modules/about/language/admin_en.php', 1634786996, 0), 
(21, 'module', 'about', 'modules/about/language/admin_fr.php', 1634786996, 0), 
(22, 'module', 'about', 'modules/about/language/admin_vi.php', 1634786996, 0), 
(23, 'module', 'about', 'modules/about/language/block.global.html_en.php', 1634786996, 0), 
(24, 'module', 'about', 'modules/about/language/block.global.html_fr.php', 1634786996, 0), 
(25, 'module', 'about', 'modules/about/language/block.global.html_vi.php', 1634786996, 0), 
(26, 'module', 'about', 'modules/about/language/data_en.php', 1634786996, 0), 
(27, 'module', 'about', 'modules/about/language/data_fr.php', 1634786996, 0), 
(28, 'module', 'about', 'modules/about/language/data_vi.php', 1634786996, 0), 
(29, 'module', 'about', 'modules/about/language/en.php', 1634786996, 0), 
(30, 'module', 'about', 'modules/about/language/fr.php', 1634786996, 0), 
(31, 'module', 'about', 'modules/about/language/index.html', 1634786996, 0), 
(32, 'module', 'about', 'modules/about/language/vi.php', 1634786996, 0), 
(33, 'module', 'about', 'modules/about/action_mysql.php', 1634786996, 0), 
(34, 'module', 'about', 'modules/about/admin.functions.php', 1634786996, 0), 
(35, 'module', 'about', 'modules/about/admin.menu.php', 1634786996, 0), 
(36, 'module', 'about', 'modules/about/functions.php', 1634786996, 0), 
(37, 'module', 'about', 'modules/about/index.html', 1634786996, 0), 
(38, 'module', 'about', 'modules/about/menu.php', 1634786996, 0), 
(39, 'module', 'about', 'modules/about/search.php', 1634786996, 0), 
(40, 'module', 'about', 'modules/about/theme.php', 1634786996, 0), 
(41, 'module', 'about', 'modules/about/version.php', 1634786996, 0), 
(42, 'module', 'about', 'themes/default/modules/about/block.about.tpl', 1634786996, 0), 
(43, 'module', 'about', 'themes/default/modules/about/block.page_list.tpl', 1634786996, 0), 
(44, 'module', 'about', 'themes/default/modules/about/index.html', 1634786996, 0), 
(45, 'module', 'about', 'themes/default/modules/about/main.tpl', 1634786996, 0), 
(46, 'module', 'about', 'themes/default/modules/about/main_list.tpl', 1634786996, 0), 
(47, 'module', 'about', 'themes/default/js/about.js', 1634786996, 0), 
(48, 'module', 'about', 'themes/admin_default/js/about.js', 1634786996, 0), 
(49, 'module', 'about', 'themes/admin_default/modules/about/config.tpl', 1634786996, 0), 
(50, 'module', 'about', 'themes/admin_default/modules/about/content.tpl', 1634786996, 0), 
(51, 'module', 'about', 'themes/admin_default/modules/about/index.html', 1634786996, 0), 
(52, 'module', 'about', 'themes/admin_default/modules/about/main.tpl', 1634786996, 0);


-- ---------------------------------------


--
-- Table structure for table `tms_ips`
--

DROP TABLE IF EXISTS `tms_ips`;
CREATE TABLE `tms_ips` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) unsigned NOT NULL DEFAULT 0,
  `ip` varchar(32)  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mask` tinyint(4) unsigned NOT NULL DEFAULT 0,
  `area` tinyint(3) NOT NULL,
  `begintime` int(11) DEFAULT NULL,
  `endtime` int(11) DEFAULT NULL,
  `notice` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`,`type`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_ips`
--

INSERT INTO `tms_ips` VALUES
(1, 1, '127.0.0.1', 0, 1, 1634609572, 0, '');


-- ---------------------------------------


--
-- Table structure for table `tms_language`
--

DROP TABLE IF EXISTS `tms_language`;
CREATE TABLE `tms_language` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `idfile` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `langtype` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'lang_module',
  `lang_key` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `filelang` (`idfile`,`lang_key`,`langtype`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_language_file`
--

DROP TABLE IF EXISTS `tms_language_file`;
CREATE TABLE `tms_language_file` (
  `idfile` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_file` varchar(200)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `langtype` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'lang_module',
  PRIMARY KEY (`idfile`),
  UNIQUE KEY `module` (`module`,`admin_file`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_logs`
--

DROP TABLE IF EXISTS `tms_logs`;
CREATE TABLE `tms_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang` varchar(10)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `module_name` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_key` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_action` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_acess` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL,
  `log_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=13  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_logs`
--

INSERT INTO `tms_logs` VALUES
(1, 'vi', 'siteinfo', 'Xóa toàn bộ nhật kí hệ thống', 'All', '', 1, 1649747882), 
(2, 'vi', 'login', '[admin] Đăng nhập', ' Client IP:171.252.189.60', '', 0, 1649750056), 
(3, 'vi', 'webtools', 'Dọn dẹp hệ thống', 'clearcache, clearfiletemp, clearerrorlogs, clearip_logs', '', 1, 1649750086), 
(4, 'vi', 'users', 'log_edit_user', 'userid 2', '', 1, 1649750098), 
(5, 'vi', 'themes', 'Thiết lập layout theme: \"default\"', '', '', 1, 1649750590), 
(6, 'vi', 'menu', 'Edit row menu', 'Row menu id: 26', '', 1, 1649750617), 
(7, 'vi', 'menu', 'Del row menu', 'Row menu id: 43 of Menu id: 1', '', 1, 1649750623), 
(8, 'vi', 'shops', 'log_edit_catalog', 'id 3', '', 1, 1649750713), 
(9, 'vi', 'webtools', 'Dọn dẹp hệ thống', 'clearcache, clearfiletemp, clearerrorlogs, clearip_logs', '', 1, 1649750738), 
(10, 'vi', 'database', 'Xuất dữ liệu mẫu', 'Delete: caidat', '', 1, 1649750742), 
(11, 'vi', 'database', 'Xuất dữ liệu mẫu', 'Name: caidat', '', 1, 1649750746), 
(12, 'vi', 'users', 'log_edit_user', 'userid 1', '', 1, 1649750770);


-- ---------------------------------------


--
-- Table structure for table `tms_notification`
--

DROP TABLE IF EXISTS `tms_notification`;
CREATE TABLE `tms_notification` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_view_allowed` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT 'Cấp quản trị được xem: 0,1,2',
  `logic_mode` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: Cấp trên xem được cấp dưới, 1: chỉ cấp hoặc người được chỉ định',
  `send_to` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Danh sách id người nhận, phân cách bởi dấu phảy',
  `send_from` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `area` tinyint(1) unsigned NOT NULL,
  `language` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `obid` int(11) unsigned NOT NULL DEFAULT 0,
  `type` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_time` int(11) unsigned NOT NULL,
  `view` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `send_to` (`send_to`),
  KEY `admin_view_allowed` (`admin_view_allowed`),
  KEY `logic_mode` (`logic_mode`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_plugin`
--

DROP TABLE IF EXISTS `tms_plugin`;
CREATE TABLE `tms_plugin` (
  `pid` tinyint(4) NOT NULL AUTO_INCREMENT,
  `plugin_file` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `plugin_area` tinyint(4) NOT NULL,
  `weight` tinyint(4) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `plugin_file` (`plugin_file`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_plugin`
--

INSERT INTO `tms_plugin` VALUES
(1, 'qrcode.php', 1, 1), 
(2, 'cdn_js_css_image.php', 3, 1);


-- ---------------------------------------


--
-- Table structure for table `tms_sessions`
--

DROP TABLE IF EXISTS `tms_sessions`;
CREATE TABLE `tms_sessions` (
  `session_id` varchar(50)  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `username` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `onl_time` int(11) unsigned NOT NULL DEFAULT 0,
  UNIQUE KEY `session_id` (`session_id`),
  KEY `onl_time` (`onl_time`)
) ENGINE=MEMORY  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_sessions`
--

INSERT INTO `tms_sessions` VALUES
('c69579fc69a3e0ef72b4dd8b9372ac4f', 1, 'admin', 1649750723);


-- ---------------------------------------


--
-- Table structure for table `tms_setup_extensions`
--

DROP TABLE IF EXISTS `tms_setup_extensions`;
CREATE TABLE `tms_setup_extensions` (
  `id` int(11) NOT NULL DEFAULT 0,
  `type` varchar(10)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'other',
  `title` varchar(55)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_sys` tinyint(1) NOT NULL DEFAULT 0,
  `is_virtual` tinyint(1) NOT NULL DEFAULT 0,
  `basename` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `table_prefix` varchar(55)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `version` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT 0,
  `author` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  UNIQUE KEY `title` (`type`,`title`),
  KEY `id` (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_setup_extensions`
--

INSERT INTO `tms_setup_extensions` VALUES
(282, 'module', 'about', 1, 1, 'about', 'about', '4.5.00 1634786996', 1634786996, 'TMS Holdings (contact@thuongmaiso.vn)', ''), 
(19, 'module', 'banners', 1, 0, 'banners', 'banners', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(20, 'module', 'contact', 0, 1, 'contact', 'contact', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(1, 'module', 'news', 0, 1, 'news', 'news', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(0, 'module', 'home', 1, 0, 'home', 'home', '4.3.06 1627344000', 1634609952, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(284, 'module', 'seek', 1, 0, 'seek', 'seek', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(24, 'module', 'users', 1, 1, 'users', 'users', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(27, 'module', 'statistics', 0, 0, 'statistics', 'statistics', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(29, 'module', 'menu', 0, 0, 'menu', 'menu', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(283, 'module', 'feeds', 1, 0, 'feeds', 'feeds', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(282, 'module', 'page', 1, 1, 'page', 'page', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(281, 'module', 'comment', 1, 0, 'comment', 'comment', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(312, 'module', 'freecontent', 0, 1, 'freecontent', 'freecontent', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(327, 'module', 'two-step-verification', 1, 0, 'two-step-verification', 'two_step_verification', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(307, 'theme', 'default', 0, 0, 'default', 'default', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(311, 'theme', 'mobile_default', 0, 0, 'mobile_default', 'mobile_default', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(0, 'module', 'photos', 0, 1, 'photos', 'photos', '4.5.0 1623225600', 1634609952, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(0, 'module', 'shops', 0, 1, 'shops', 'shops', '4.3.00 1492476600', 1634609952, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(0, 'module', 'wallet', 1, 1, 'wallet', 'wallet', '4.6.00 1629100800', 1634609952, 'TMS Holdings <contact@thuongmaiso.vn>', 'Quản lý tiền thành viên'), 
(0, 'module', 'tin-tuc', 1, 1, 'tin-tuc', 'tin_tuc', '4.5.00 1626512400', 1634627981, 'TMS Holdings <contact@thuongmaiso.vn>', ''), 
(0, 'module', 'tuyen-dung', 0, 0, 'page', 'tuyen_dung', '', 1634652830, '', '');


-- ---------------------------------------


--
-- Table structure for table `tms_setup_language`
--

DROP TABLE IF EXISTS `tms_setup_language`;
CREATE TABLE `tms_setup_language` (
  `lang` char(2)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `setup` tinyint(1) NOT NULL DEFAULT 0,
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_setup_language`
--

INSERT INTO `tms_setup_language` VALUES
('vi', 1, 1);


-- ---------------------------------------


--
-- Table structure for table `tms_shops_block`
--

DROP TABLE IF EXISTS `tms_shops_block`;
CREATE TABLE `tms_shops_block` (
  `bid` int(11) unsigned NOT NULL,
  `id` int(11) unsigned NOT NULL,
  `weight` int(11) unsigned NOT NULL,
  UNIQUE KEY `bid` (`bid`,`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_block`
--

INSERT INTO `tms_shops_block` VALUES
(2, 24, 0), 
(2, 22, 0), 
(2, 21, 0), 
(2, 23, 0);


-- ---------------------------------------


--
-- Table structure for table `tms_shops_block_cat`
--

DROP TABLE IF EXISTS `tms_shops_block_cat`;
CREATE TABLE `tms_shops_block_cat` (
  `bid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `adddefault` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `edit_time` int(11) NOT NULL DEFAULT 0,
  `vi_title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_description` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_bodytext` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vi_keywords` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_tag_title` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_tag_description` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`bid`),
  UNIQUE KEY `vi_alias` (`vi_alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_block_cat`
--

INSERT INTO `tms_shops_block_cat` VALUES
(1, 0, '', 1, 1433298294, 1433298294, 'Sản phẩm bán chạy', 'San-pham-ban-chay', '', '', '', '', ''), 
(2, 0, '', 2, 1433298325, 1433298325, 'Sản phẩm hot', 'San-pham-hot', '', '', '', '', '');


-- ---------------------------------------


--
-- Table structure for table `tms_shops_carrier`
--

DROP TABLE IF EXISTS `tms_shops_carrier`;
CREATE TABLE `tms_shops_carrier` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` tinyint(3) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_carrier_config`
--

DROP TABLE IF EXISTS `tms_shops_carrier_config`;
CREATE TABLE `tms_shops_carrier_config` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` tinyint(3) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_carrier_config_items`
--

DROP TABLE IF EXISTS `tms_shops_carrier_config_items`;
CREATE TABLE `tms_shops_carrier_config_items` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `cid` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` smallint(4) unsigned NOT NULL,
  `add_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_carrier_config_location`
--

DROP TABLE IF EXISTS `tms_shops_carrier_config_location`;
CREATE TABLE `tms_shops_carrier_config_location` (
  `cid` tinyint(3) unsigned NOT NULL,
  `iid` smallint(4) unsigned NOT NULL,
  `lid` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `cid` (`cid`,`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_carrier_config_weight`
--

DROP TABLE IF EXISTS `tms_shops_carrier_config_weight`;
CREATE TABLE `tms_shops_carrier_config_weight` (
  `iid` smallint(4) unsigned NOT NULL,
  `weight` double unsigned NOT NULL,
  `weight_unit` varchar(20)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_price` double NOT NULL,
  `carrier_price_unit` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_catalogs`
--

DROP TABLE IF EXISTS `tms_shops_catalogs`;
CREATE TABLE `tms_shops_catalogs` (
  `catid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `image` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  `sort` mediumint(8) NOT NULL DEFAULT 0,
  `lev` smallint(4) NOT NULL DEFAULT 0,
  `viewcat` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'viewcat_page_new',
  `numsubcat` int(11) NOT NULL DEFAULT 0,
  `subcatid` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `numlinks` tinyint(2) unsigned NOT NULL DEFAULT 3,
  `newday` tinyint(4) NOT NULL DEFAULT 3,
  `typeprice` tinyint(4) NOT NULL DEFAULT 2,
  `form` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `group_price` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewdescriptionhtml` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `admins` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_time` int(11) unsigned NOT NULL DEFAULT 0,
  `edit_time` int(11) unsigned NOT NULL DEFAULT 0,
  `groups_view` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cat_allow_point` tinyint(1) NOT NULL DEFAULT 0,
  `cat_number_point` tinyint(4) NOT NULL DEFAULT 0,
  `cat_number_product` tinyint(4) NOT NULL DEFAULT 0,
  `vi_title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_title_custom` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_description` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_descriptionhtml` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_keywords` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_tag_description` mediumtext  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`catid`),
  UNIQUE KEY `vi_alias` (`vi_alias`),
  KEY `parentid` (`parentid`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_catalogs`
--

INSERT INTO `tms_shops_catalogs` VALUES
(3, 0, '', 1, 1, 0, 'viewgrid', 0, '', 1, 4, 7, 1, '', '', 0, '', 1636359881, 1649750713, '6', 0, 0, 0, 'Bánh đa nem Nam Chi', '', 'banh-da-nem-nam-chi', '', '', '', '');


-- ---------------------------------------


--
-- Table structure for table `tms_shops_coupons`
--

DROP TABLE IF EXISTS `tms_shops_coupons`;
CREATE TABLE `tms_shops_coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `code` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `type` varchar(1)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'p',
  `discount` double NOT NULL DEFAULT 0,
  `total_amount` double NOT NULL DEFAULT 0,
  `date_start` int(11) unsigned NOT NULL DEFAULT 0,
  `date_end` int(11) unsigned NOT NULL DEFAULT 0,
  `uses_per_coupon` int(11) unsigned NOT NULL DEFAULT 0,
  `uses_per_coupon_count` int(11) NOT NULL DEFAULT 0,
  `date_added` int(11) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_coupons_history`
--

DROP TABLE IF EXISTS `tms_shops_coupons_history`;
CREATE TABLE `tms_shops_coupons_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `date_added` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_coupons_product`
--

DROP TABLE IF EXISTS `tms_shops_coupons_product`;
CREATE TABLE `tms_shops_coupons_product` (
  `cid` int(11) unsigned NOT NULL,
  `pid` int(11) unsigned NOT NULL,
  UNIQUE KEY `cid` (`cid`,`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_discounts`
--

DROP TABLE IF EXISTS `tms_shops_discounts`;
CREATE TABLE `tms_shops_discounts` (
  `did` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `weight` smallint(6) NOT NULL DEFAULT 0,
  `add_time` int(11) unsigned NOT NULL DEFAULT 0,
  `edit_time` int(11) unsigned NOT NULL DEFAULT 0,
  `begin_time` int(11) unsigned NOT NULL DEFAULT 0,
  `end_time` int(11) unsigned NOT NULL DEFAULT 0,
  `config` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`did`),
  KEY `begin_time` (`begin_time`,`end_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_field`
--

DROP TABLE IF EXISTS `tms_shops_field`;
CREATE TABLE `tms_shops_field` (
  `fid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `field` varchar(25)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `listtemplate` varchar(25)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `weight` int(10) unsigned NOT NULL DEFAULT 1,
  `field_type` enum('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect')  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'textbox',
  `field_choices` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `sql_choices` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `match_type` enum('none','alphanumeric','email','url','regex','callback')  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `match_regex` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `func_callback` varchar(75)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `min_length` int(11) NOT NULL DEFAULT 0,
  `max_length` bigint(20) unsigned NOT NULL DEFAULT 0,
  `class` varchar(25)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `language` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_value` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`),
  UNIQUE KEY `field` (`field`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_field_value_vi`
--

DROP TABLE IF EXISTS `tms_shops_field_value_vi`;
CREATE TABLE `tms_shops_field_value_vi` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `rows_id` int(11) unsigned NOT NULL,
  `field_id` mediumint(8) NOT NULL,
  `field_value` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rows_id` (`rows_id`,`field_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_files`
--

DROP TABLE IF EXISTS `tms_shops_files`;
CREATE TABLE `tms_shops_files` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `filesize` int(11) unsigned NOT NULL DEFAULT 0,
  `extension` varchar(10)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  `download_groups` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-1',
  `status` tinyint(1) unsigned DEFAULT 1,
  `vi_title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_description` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_files_rows`
--

DROP TABLE IF EXISTS `tms_shops_files_rows`;
CREATE TABLE `tms_shops_files_rows` (
  `id_rows` int(11) unsigned NOT NULL,
  `id_files` mediumint(8) unsigned NOT NULL,
  `download_hits` mediumint(8) unsigned NOT NULL DEFAULT 0,
  UNIQUE KEY `id_files` (`id_files`,`id_rows`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_group`
--

DROP TABLE IF EXISTS `tms_shops_group`;
CREATE TABLE `tms_shops_group` (
  `groupid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `image` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  `sort` mediumint(8) NOT NULL DEFAULT 0,
  `lev` smallint(4) NOT NULL DEFAULT 0,
  `viewgroup` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'viewgrid',
  `numsubgroup` int(11) NOT NULL DEFAULT 0,
  `subgroupid` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `indetail` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) unsigned NOT NULL DEFAULT 0,
  `edit_time` int(11) unsigned NOT NULL DEFAULT 0,
  `numpro` int(11) unsigned NOT NULL DEFAULT 0,
  `in_order` tinyint(2) NOT NULL DEFAULT 0,
  `is_require` tinyint(1) NOT NULL DEFAULT 0,
  `vi_title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_description` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_keywords` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`groupid`),
  UNIQUE KEY `vi_alias` (`vi_alias`),
  KEY `parentid` (`parentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_group_cateid`
--

DROP TABLE IF EXISTS `tms_shops_group_cateid`;
CREATE TABLE `tms_shops_group_cateid` (
  `groupid` mediumint(8) unsigned NOT NULL,
  `cateid` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `groupid` (`groupid`,`cateid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_group_items`
--

DROP TABLE IF EXISTS `tms_shops_group_items`;
CREATE TABLE `tms_shops_group_items` (
  `pro_id` int(11) unsigned NOT NULL DEFAULT 0,
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`pro_id`,`group_id`),
  KEY `pro_id` (`pro_id`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_group_quantity`
--

DROP TABLE IF EXISTS `tms_shops_group_quantity`;
CREATE TABLE `tms_shops_group_quantity` (
  `pro_id` int(11) unsigned NOT NULL DEFAULT 0,
  `listgroup` varchar(247)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) unsigned NOT NULL,
  UNIQUE KEY `pro_id` (`pro_id`,`listgroup`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_location`
--

DROP TABLE IF EXISTS `tms_shops_location`;
CREATE TABLE `tms_shops_location` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  `sort` mediumint(8) NOT NULL DEFAULT 0,
  `lev` smallint(4) NOT NULL DEFAULT 0,
  `numsub` int(11) NOT NULL DEFAULT 0,
  `subid` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_money_vi`
--

DROP TABLE IF EXISTS `tms_shops_money_vi`;
CREATE TABLE `tms_shops_money_vi` (
  `id` mediumint(11) NOT NULL,
  `code` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `exchange` double NOT NULL DEFAULT 0,
  `round` varchar(10)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_format` varchar(5)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ',||.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_money_vi`
--

INSERT INTO `tms_shops_money_vi` VALUES
(840, 'USD', 'US Dollar', '$', '21000', '0.01', ',||.'), 
(704, 'VND', 'Vietnam Dong', 'đ', '1', '100', ',||.');


-- ---------------------------------------


--
-- Table structure for table `tms_shops_orders`
--

DROP TABLE IF EXISTS `tms_shops_orders`;
CREATE TABLE `tms_shops_orders` (
  `order_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_code` varchar(30)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lang` char(2)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `order_name` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_email` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_phone` varchar(20)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_address` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_note` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  `admin_id` int(11) unsigned NOT NULL DEFAULT 0,
  `shop_id` int(11) unsigned NOT NULL DEFAULT 0,
  `who_is` int(2) unsigned NOT NULL DEFAULT 0,
  `unit_total` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_total` double unsigned NOT NULL DEFAULT 0,
  `order_time` int(11) unsigned NOT NULL DEFAULT 0,
  `edit_time` int(11) unsigned NOT NULL DEFAULT 0,
  `postip` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_view` tinyint(2) NOT NULL DEFAULT 0,
  `transaction_status` tinyint(4) NOT NULL,
  `transaction_id` int(11) NOT NULL DEFAULT 0,
  `transaction_count` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_code` (`order_code`),
  KEY `user_id` (`user_id`),
  KEY `order_time` (`order_time`),
  KEY `shop_id` (`shop_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_orders_id`
--

DROP TABLE IF EXISTS `tms_shops_orders_id`;
CREATE TABLE `tms_shops_orders_id` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `listgroupid` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `proid` mediumint(9) NOT NULL,
  `num` mediumint(9) NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `discount_id` smallint(6) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderid` (`order_id`,`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_orders_id_group`
--

DROP TABLE IF EXISTS `tms_shops_orders_id_group`;
CREATE TABLE `tms_shops_orders_id_group` (
  `order_i` int(11) NOT NULL,
  `group_id` mediumint(8) NOT NULL,
  UNIQUE KEY `orderid` (`order_i`,`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_orders_shipping`
--

DROP TABLE IF EXISTS `tms_shops_orders_shipping`;
CREATE TABLE `tms_shops_orders_shipping` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) unsigned NOT NULL,
  `ship_name` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_phone` varchar(25)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_location_id` mediumint(8) unsigned NOT NULL,
  `ship_address_extend` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_shops_id` tinyint(3) unsigned NOT NULL,
  `ship_carrier_id` tinyint(3) unsigned NOT NULL,
  `weight` double NOT NULL DEFAULT 0,
  `weight_unit` char(20)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ship_price` double NOT NULL DEFAULT 0,
  `ship_price_unit` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `add_time` int(11) unsigned NOT NULL,
  `edit_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `add_time` (`add_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_point`
--

DROP TABLE IF EXISTS `tms_shops_point`;
CREATE TABLE `tms_shops_point` (
  `userid` int(11) NOT NULL DEFAULT 0,
  `point_total` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_point_history`
--

DROP TABLE IF EXISTS `tms_shops_point_history`;
CREATE TABLE `tms_shops_point_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT 0,
  `order_id` int(11) NOT NULL,
  `point` int(11) NOT NULL DEFAULT 0,
  `time` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_point_queue`
--

DROP TABLE IF EXISTS `tms_shops_point_queue`;
CREATE TABLE `tms_shops_point_queue` (
  `order_id` int(11) NOT NULL,
  `point` mediumint(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_review`
--

DROP TABLE IF EXISTS `tms_shops_review`;
CREATE TABLE `tms_shops_review` (
  `review_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `userid` int(11) NOT NULL DEFAULT 0,
  `sender` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(1) NOT NULL,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `edit_time` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`review_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_rows`
--

DROP TABLE IF EXISTS `tms_shops_rows`;
CREATE TABLE `tms_shops_rows` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `listcatid` int(11) NOT NULL DEFAULT 0,
  `user_id` mediumint(8) NOT NULL DEFAULT 0,
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  `edittime` int(11) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `publtime` int(11) unsigned NOT NULL DEFAULT 0,
  `exptime` int(11) unsigned NOT NULL DEFAULT 0,
  `archive` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `product_code` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `product_number` int(11) NOT NULL DEFAULT 0,
  `product_price` double NOT NULL DEFAULT 0,
  `price_config` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `saleprice` double NOT NULL DEFAULT 0,
  `money_unit` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_unit` smallint(4) NOT NULL,
  `product_weight` double NOT NULL DEFAULT 0,
  `weight_unit` char(20)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `discount_id` smallint(6) NOT NULL DEFAULT 0,
  `homeimgfile` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `homeimgthumb` tinyint(4) NOT NULL DEFAULT 0,
  `homeimgalt` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `otherimage` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgposition` tinyint(1) NOT NULL DEFAULT 1,
  `copyright` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `gift_from` int(11) unsigned NOT NULL DEFAULT 0,
  `gift_to` int(11) unsigned NOT NULL DEFAULT 0,
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_comm` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_rating` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `ratingdetail` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `allowed_send` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_print` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `allowed_save` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hitslm` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `num_sell` mediumint(8) NOT NULL DEFAULT 0,
  `showprice` tinyint(2) NOT NULL DEFAULT 0,
  `vi_title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_hometext` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_bodytext` mediumtext  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vi_gift_content` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_address` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_tag_title` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_tag_description` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vi_alias` (`vi_alias`),
  KEY `listcatid` (`listcatid`),
  KEY `user_id` (`user_id`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`)
) ENGINE=MyISAM  AUTO_INCREMENT=25  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_rows`
--

INSERT INTO `tms_shops_rows` VALUES
(21, 3, 2, 1636444145, 1636444420, 1, 1636444145, 0, 2, 'S000021', 123113, '0', '', '0', 'VND', 4, '50', 'g', 0, '2021_10/12.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 62, 0, 0, 0, 0, 'Bánh đa nem Nam Chi -Tệp 50 g', 'banh-da-nem-nam-chi', '<strong>Công ty Cổ phần sản xuất thực phẩm Hồ Cầm</strong><br />Địa chỉ: Thôn Đồng Thanh, xã Đồng Môn, thành phố Hà Tĩnh, tỉnh Hà Tĩnh<br />Đại diện theo pháp luật: Ông Hồ Sỹ Cầm<br />Điện thoại: 0914.360.810<br />Email:&nbsp;<a href=\"mailto:banhdanem.tpht@gmail.com\">banhdanem.tpht@gmail.com</a><br />&nbsp;', 'Quy trình Sản xuất:<div class=\"image-center\"><img alt=\"sx\" height=\"603\" src=\"/uploads/shops/2021_10/sx.jpg\" width=\"556\" /></div>&nbsp;', '', '', '', ''), 
(22, 3, 2, 1636444364, 1636444364, 1, 1636444364, 0, 2, 'S000022', 1, '0', '', '0', 'VND', 4, '100', 'g', 0, '2021_10/2_1.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 61, 0, 0, 0, 0, 'Bánh đa nem Nam Chi - Tệp 100g', 'banh-da-nem-nam-chi-tep-100g', '<strong>Công ty Cổ phần sản xuất thực phẩm Hồ Cầm</strong><br />Địa chỉ: Thôn Đồng Thanh, xã Đồng Môn, thành phố Hà Tĩnh, tỉnh Hà Tĩnh<br />Đại diện theo pháp luật: Ông Hồ Sỹ Cầm<br />Điện thoại: 0914.360.810<br />Email:&nbsp;<a href=\"mailto:banhdanem.tpht@gmail.com\">banhdanem.tpht@gmail.com</a>', '<div style=\"text-align: justify;\">Cơ sở sản xuất và Bánh đa nem Nam Chi chúng tôi sản xuất theo quy trình khép kín. Với quy mô khu sản xuất rộng (1.321 m2), thiết kế phù hợp gồm: Kho bảo quản nguyên liệu khô, khu sơ chế nguyên liệu đầu vào, khu chế biến, sân phơi, khu hoàn thiện sản phẩm, kho bảo quản sản phẩm, lối nhập hàng. Cơ sở chúng tôi đóng gần trung tâm thành phố Hà Tĩnh, có điều kiện giao thông thuận tiện, có khả năng quản lý và điều hành tốt trong sản xuất kinh doanh. Thay thế từ sản xuất thủ công, sang sản xuất bán tự động, làm tăng năng suất, giảm bớt chi phí, giá cả cạnh tranh, chất lượng luôn ổn định và đảm bảo vệ sinh an toàn thực phẩm.<br />Bên cạnh đó, chúng tôi còn nhận được lợi thế từ nguồn nguyên liệu dồi dào, giá cả hợp lý tại địa phương; lao động tại địa phương là những con người cần cù, chăm chỉ, có ý thức trách nhiệm cao với công việc là yếu tố quan trọng giúp cơ sở phát triễn bền vững.</div>', '', '', '', ''), 
(23, 3, 2, 1636444633, 1636444633, 1, 1636444633, 0, 2, 'S000023', 1, '0', '', '0', 'VND', 3, '150', 'g', 0, '2021_10/44.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 61, 0, 0, 0, 0, 'Bánh đa nem Nam Chi -Tệp 150 g', 'banh-da-nem-nam-chi-tep-150-g', '<strong>Công ty Cổ phần sản xuất thực phẩm Hồ Cầm</strong><br />Địa chỉ: Thôn Đồng Thanh, xã Đồng Môn, thành phố Hà Tĩnh, tỉnh Hà Tĩnh<br />Đại diện theo pháp luật: Ông Hồ Sỹ Cầm<br />Điện thoại: 0914.360.810<br />Email:&nbsp;<a href=\"mailto:banhdanem.tpht@gmail.com\">banhdanem.tpht@gmail.com</a>', 'Cơ sở sản xuất và Bánh đa nem Nam Chi chúng tôi sản xuất theo quy trình khép kín. Với quy mô khu sản xuất rộng (1.321 m2), thiết kế phù hợp gồm: Kho bảo quản nguyên liệu khô, khu sơ chế nguyên liệu đầu vào, khu chế biến, sân phơi, khu hoàn thiện sản phẩm, kho bảo quản sản phẩm, lối nhập hàng. Cơ sở chúng tôi đóng gần trung tâm thành phố Hà Tĩnh, có điều kiện giao thông thuận tiện, có khả năng quản lý và điều hành tốt trong sản xuất kinh doanh. Thay thế từ sản xuất thủ công, sang sản xuất bán tự động, làm tăng năng suất, giảm bớt chi phí, giá cả cạnh tranh, chất lượng luôn ổn định và đảm bảo vệ sinh an toàn thực phẩm.<br />Bên cạnh đó, chúng tôi còn nhận được lợi thế từ nguồn nguyên liệu dồi dào, giá cả hợp lý tại địa phương; lao động tại địa phương là những con người cần cù, chăm chỉ, có ý thức trách nhiệm cao với công việc là yếu tố quan trọng giúp cơ sở phát triễn bền vững.', '', '', '', ''), 
(24, 3, 2, 1636444719, 1636444719, 1, 1636444719, 0, 2, 'S000024', 13523, '0', '', '0', 'VND', 4, '200', 'g', 0, '2021_10/4_1.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 68, 0, 0, 0, 0, 'Bánh đa nem Nam Chi - Tệp 200g', 'banh-da-nem-nam-chi-tep-200g', '<ul>	<li>	<p itemprop=\"description\"><strong>Công ty Cổ phần sản xuất thực phẩm Hồ Cầm</strong><br />	Địa chỉ: Thôn Đồng Thanh, xã Đồng Môn, thành phố Hà Tĩnh, tỉnh Hà Tĩnh<br />	Đại diện theo pháp luật: Ông Hồ Sỹ Cầm<br />	Điện thoại: 0914.360.810<br />	Email:&nbsp;<a href=\"mailto:banhdanem.tpht@gmail.com\">banhdanem.tpht@gmail.com</a></p>	</li></ul>', '<div style=\"text-align: justify;\">Cơ sở sản xuất và Bánh đa nem Nam Chi chúng tôi sản xuất theo quy trình khép kín. Với quy mô khu sản xuất rộng (1.321 m2), thiết kế phù hợp gồm: Kho bảo quản nguyên liệu khô, khu sơ chế nguyên liệu đầu vào, khu chế biến, sân phơi, khu hoàn thiện sản phẩm, kho bảo quản sản phẩm, lối nhập hàng. Cơ sở chúng tôi đóng gần trung tâm thành phố Hà Tĩnh, có điều kiện giao thông thuận tiện, có khả năng quản lý và điều hành tốt trong sản xuất kinh doanh. Thay thế từ sản xuất thủ công, sang sản xuất bán tự động, làm tăng năng suất, giảm bớt chi phí, giá cả cạnh tranh, chất lượng luôn ổn định và đảm bảo vệ sinh an toàn thực phẩm.<br />Bên cạnh đó, chúng tôi còn nhận được lợi thế từ nguồn nguyên liệu dồi dào, giá cả hợp lý tại địa phương; lao động tại địa phương là những con người cần cù, chăm chỉ, có ý thức trách nhiệm cao với công việc là yếu tố quan trọng giúp cơ sở phát triễn bền vững.</div>', '', '', '', '');


-- ---------------------------------------


--
-- Table structure for table `tms_shops_shops`
--

DROP TABLE IF EXISTS `tms_shops_shops`;
CREATE TABLE `tms_shops_shops` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `address` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` tinyint(3) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_shops_carrier`
--

DROP TABLE IF EXISTS `tms_shops_shops_carrier`;
CREATE TABLE `tms_shops_shops_carrier` (
  `shops_id` tinyint(3) unsigned NOT NULL,
  `carrier_id` tinyint(3) unsigned NOT NULL,
  `config_id` tinyint(3) unsigned NOT NULL,
  UNIQUE KEY `shops_id` (`shops_id`,`carrier_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_tabs`
--

DROP TABLE IF EXISTS `tms_shops_tabs`;
CREATE TABLE `tms_shops_tabs` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `weight` int(10) unsigned NOT NULL DEFAULT 1,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `vi_title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_tabs`
--

INSERT INTO `tms_shops_tabs` VALUES
(1, '', 'content_detail', 1, 1, 'Chi tiết sản phẩm'), 
(2, '', 'content_comments', 2, 1, 'Bình luận'), 
(3, '', 'content_rate', 3, 1, 'Đánh giá');


-- ---------------------------------------


--
-- Table structure for table `tms_shops_tags_id_vi`
--

DROP TABLE IF EXISTS `tms_shops_tags_id_vi`;
CREATE TABLE `tms_shops_tags_id_vi` (
  `id` int(11) NOT NULL,
  `tid` mediumint(9) NOT NULL,
  `keyword` varchar(65)  COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `sid` (`id`,`tid`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_tags_id_vi`
--

INSERT INTO `tms_shops_tags_id_vi` VALUES
(1, 1, 'thời trang'), 
(1, 2, 'sang trọng'), 
(1, 3, 'phù hợp'), 
(1, 4, 'đi chơi'), 
(6, 5, 'áo sơ mi'), 
(10, 6, 'mũi nhọn'), 
(11, 7, 'búp bê'), 
(1, 8, 'sản phẩm'), 
(1, 9, 'cao cấp'), 
(1, 10, 'thiết kế'), 
(1, 11, 'đẳng cấp'), 
(1, 12, 'quý phái'), 
(1, 13, 'hương vị'), 
(1, 14, 'êm dịu'), 
(1, 15, 'phảng phất'), 
(1, 16, 'hương thơm'), 
(1, 17, 'thảo mộc'), 
(1, 18, 'sức khoẻ'), 
(1, 19, 'phục hưng'), 
(1, 20, 'sinh lực'), 
(2, 9, 'cao cấp'), 
(2, 11, 'đẳng cấp'), 
(2, 4, 'đi chơi'), 
(2, 14, 'êm dịu'), 
(2, 16, 'hương thơm'), 
(2, 13, 'hương vị'), 
(2, 15, 'phảng phất'), 
(2, 3, 'phù hợp'), 
(2, 19, 'phục hưng'), 
(2, 12, 'quý phái'), 
(2, 8, 'sản phẩm'), 
(2, 2, 'sang trọng'), 
(2, 20, 'sinh lực'), 
(2, 18, 'sức khoẻ'), 
(2, 17, 'thảo mộc'), 
(2, 10, 'thiết kế'), 
(2, 1, 'thời trang'), 
(3, 9, 'cao cấp'), 
(3, 11, 'đẳng cấp'), 
(3, 4, 'đi chơi'), 
(3, 14, 'êm dịu'), 
(3, 16, 'hương thơm'), 
(3, 13, 'hương vị'), 
(3, 15, 'phảng phất'), 
(3, 3, 'phù hợp'), 
(3, 19, 'phục hưng'), 
(3, 12, 'quý phái'), 
(3, 8, 'sản phẩm'), 
(3, 2, 'sang trọng'), 
(3, 20, 'sinh lực'), 
(3, 18, 'sức khoẻ'), 
(3, 17, 'thảo mộc'), 
(3, 10, 'thiết kế'), 
(3, 1, 'thời trang'), 
(4, 9, 'cao cấp'), 
(4, 11, 'đẳng cấp'), 
(4, 4, 'đi chơi'), 
(4, 14, 'êm dịu'), 
(4, 16, 'hương thơm'), 
(4, 13, 'hương vị'), 
(4, 15, 'phảng phất'), 
(4, 3, 'phù hợp'), 
(4, 19, 'phục hưng'), 
(4, 12, 'quý phái'), 
(4, 8, 'sản phẩm'), 
(4, 2, 'sang trọng'), 
(4, 20, 'sinh lực'), 
(4, 18, 'sức khoẻ'), 
(4, 17, 'thảo mộc'), 
(4, 10, 'thiết kế'), 
(4, 1, 'thời trang'), 
(5, 9, 'cao cấp'), 
(5, 11, 'đẳng cấp'), 
(5, 4, 'đi chơi'), 
(5, 14, 'êm dịu'), 
(5, 16, 'hương thơm'), 
(5, 13, 'hương vị'), 
(5, 15, 'phảng phất'), 
(5, 3, 'phù hợp'), 
(5, 19, 'phục hưng'), 
(5, 12, 'quý phái'), 
(5, 8, 'sản phẩm'), 
(5, 2, 'sang trọng'), 
(5, 20, 'sinh lực'), 
(5, 18, 'sức khoẻ'), 
(5, 17, 'thảo mộc'), 
(5, 10, 'thiết kế'), 
(5, 1, 'thời trang'), 
(6, 9, 'cao cấp'), 
(6, 11, 'đẳng cấp'), 
(6, 4, 'đi chơi'), 
(6, 14, 'êm dịu'), 
(6, 16, 'hương thơm'), 
(6, 13, 'hương vị'), 
(6, 15, 'phảng phất'), 
(6, 3, 'phù hợp'), 
(6, 19, 'phục hưng'), 
(6, 12, 'quý phái'), 
(6, 8, 'sản phẩm'), 
(6, 2, 'sang trọng'), 
(6, 20, 'sinh lực'), 
(6, 18, 'sức khoẻ'), 
(6, 17, 'thảo mộc'), 
(6, 10, 'thiết kế'), 
(6, 1, 'thời trang'), 
(7, 5, 'áo sơ mi'), 
(7, 9, 'cao cấp'), 
(7, 11, 'đẳng cấp'), 
(7, 4, 'đi chơi'), 
(7, 14, 'êm dịu'), 
(7, 16, 'hương thơm'), 
(7, 13, 'hương vị'), 
(7, 15, 'phảng phất'), 
(7, 3, 'phù hợp'), 
(7, 19, 'phục hưng'), 
(7, 12, 'quý phái'), 
(7, 8, 'sản phẩm'), 
(7, 2, 'sang trọng'), 
(7, 20, 'sinh lực'), 
(7, 18, 'sức khoẻ'), 
(7, 17, 'thảo mộc'), 
(7, 10, 'thiết kế'), 
(7, 1, 'thời trang'), 
(8, 5, 'áo sơ mi'), 
(8, 9, 'cao cấp'), 
(8, 11, 'đẳng cấp'), 
(8, 4, 'đi chơi'), 
(8, 14, 'êm dịu'), 
(8, 16, 'hương thơm'), 
(8, 13, 'hương vị'), 
(8, 15, 'phảng phất'), 
(8, 3, 'phù hợp'), 
(8, 19, 'phục hưng'), 
(8, 12, 'quý phái'), 
(8, 8, 'sản phẩm'), 
(8, 2, 'sang trọng'), 
(8, 20, 'sinh lực'), 
(8, 18, 'sức khoẻ'), 
(8, 17, 'thảo mộc'), 
(8, 10, 'thiết kế'), 
(8, 1, 'thời trang'), 
(16, 21, 'cơ sở'), 
(16, 22, 'sản xuất'), 
(16, 23, 'công ty'), 
(16, 24, 'tư vấn'), 
(16, 25, 'nông nghiệp'), 
(16, 26, 'trụ sở'), 
(16, 27, 'thạch đài'), 
(16, 28, 'thạch hà'), 
(16, 29, 'kinh doanh'), 
(16, 30, 'thống nhất'), 
(16, 31, 'pháp luật'), 
(16, 32, 'địa chỉ'), 
(15, 21, 'cơ sở'), 
(15, 22, 'sản xuất'), 
(15, 23, 'công ty'), 
(15, 24, 'tư vấn'), 
(15, 25, 'nông nghiệp'), 
(15, 26, 'trụ sở'), 
(15, 27, 'thạch đài'), 
(15, 28, 'thạch hà'), 
(15, 29, 'kinh doanh'), 
(15, 30, 'thống nhất'), 
(15, 31, 'pháp luật'), 
(15, 32, 'địa chỉ'), 
(14, 21, 'cơ sở'), 
(14, 22, 'sản xuất'), 
(14, 23, 'công ty'), 
(14, 24, 'tư vấn'), 
(14, 25, 'nông nghiệp'), 
(14, 26, 'trụ sở'), 
(14, 27, 'thạch đài'), 
(14, 28, 'thạch hà'), 
(14, 29, 'kinh doanh'), 
(14, 30, 'thống nhất'), 
(14, 31, 'pháp luật'), 
(14, 32, 'địa chỉ'), 
(13, 21, 'cơ sở'), 
(13, 22, 'sản xuất'), 
(13, 23, 'công ty'), 
(13, 24, 'tư vấn'), 
(13, 25, 'nông nghiệp'), 
(13, 26, 'trụ sở'), 
(13, 27, 'thạch đài'), 
(13, 28, 'thạch hà'), 
(13, 29, 'kinh doanh'), 
(13, 30, 'thống nhất'), 
(13, 31, 'pháp luật'), 
(13, 32, 'địa chỉ'), 
(12, 21, 'cơ sở'), 
(12, 22, 'sản xuất'), 
(12, 23, 'công ty'), 
(12, 24, 'tư vấn'), 
(12, 25, 'nông nghiệp'), 
(12, 26, 'trụ sở'), 
(12, 27, 'thạch đài'), 
(12, 28, 'thạch hà'), 
(12, 29, 'kinh doanh'), 
(12, 30, 'thống nhất'), 
(12, 31, 'pháp luật'), 
(12, 32, 'địa chỉ'), 
(9, 21, 'cơ sở'), 
(9, 22, 'sản xuất'), 
(9, 23, 'công ty'), 
(9, 24, 'tư vấn'), 
(9, 25, 'nông nghiệp'), 
(9, 26, 'trụ sở'), 
(9, 27, 'thạch đài'), 
(9, 28, 'thạch hà'), 
(9, 29, 'kinh doanh'), 
(9, 30, 'thống nhất'), 
(9, 31, 'pháp luật'), 
(9, 32, 'địa chỉ'), 
(17, 33, 'hộ sản'), 
(17, 29, 'kinh doanh'), 
(17, 26, 'trụ sở'), 
(17, 34, 'thị trấn'), 
(17, 35, 'can lộc'), 
(17, 36, 'đại diện'), 
(17, 31, 'pháp luật'), 
(18, 33, 'hộ sản'), 
(18, 29, 'kinh doanh'), 
(18, 32, 'địa chỉ'), 
(18, 26, 'trụ sở'), 
(18, 34, 'thị trấn'), 
(18, 35, 'can lộc'), 
(18, 36, 'đại diện'), 
(18, 31, 'pháp luật'), 
(19, 33, 'hộ sản'), 
(19, 29, 'kinh doanh'), 
(19, 32, 'địa chỉ'), 
(19, 26, 'trụ sở'), 
(19, 34, 'thị trấn'), 
(19, 35, 'can lộc'), 
(19, 36, 'đại diện'), 
(19, 31, 'pháp luật'), 
(20, 33, 'hộ sản'), 
(20, 29, 'kinh doanh'), 
(20, 32, 'địa chỉ'), 
(20, 26, 'trụ sở'), 
(20, 34, 'thị trấn'), 
(20, 35, 'can lộc'), 
(20, 36, 'đại diện'), 
(20, 31, 'pháp luật'), 
(21, 23, 'công ty'), 
(21, 37, 'cổ phần'), 
(21, 22, 'sản xuất'), 
(21, 38, 'thực phẩm'), 
(21, 39, 'đồng môn'), 
(21, 40, 'thành phố'), 
(21, 31, 'pháp luật'), 
(22, 23, 'công ty'), 
(22, 37, 'cổ phần'), 
(22, 22, 'sản xuất'), 
(22, 38, 'thực phẩm'), 
(22, 39, 'đồng môn'), 
(22, 40, 'thành phố'), 
(22, 31, 'pháp luật'), 
(23, 23, 'công ty'), 
(23, 37, 'cổ phần'), 
(23, 22, 'sản xuất'), 
(23, 38, 'thực phẩm'), 
(23, 39, 'đồng môn'), 
(23, 40, 'thành phố'), 
(23, 31, 'pháp luật'), 
(24, 23, 'công ty'), 
(24, 37, 'cổ phần'), 
(24, 22, 'sản xuất'), 
(24, 38, 'thực phẩm'), 
(24, 41, 'hồ cầm'), 
(24, 32, 'địa chỉ'), 
(24, 39, 'đồng môn'), 
(24, 40, 'thành phố'), 
(24, 36, 'đại diện'), 
(24, 31, 'pháp luật');


-- ---------------------------------------


--
-- Table structure for table `tms_shops_tags_vi`
--

DROP TABLE IF EXISTS `tms_shops_tags_vi`;
CREATE TABLE `tms_shops_tags_vi` (
  `tid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `numpro` mediumint(8) NOT NULL DEFAULT 0,
  `alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(250)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bodytext` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(250)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`tid`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=42  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_tags_vi`
--

INSERT INTO `tms_shops_tags_vi` VALUES
(1, 8, 'thời-trang', '', '', '', 'thời trang'), 
(2, 9, 'sang-trọng', '', '', '', 'sang trọng'), 
(3, 8, 'phù-hợp', '', '', '', 'phù hợp'), 
(4, 8, 'đi-chơi', '', '', '', 'đi chơi'), 
(5, 3, 'áo-sơ-mi', '', '', '', 'áo sơ mi'), 
(6, 1, 'mũi-nhọn', '', '', '', 'mũi nhọn'), 
(7, 1, 'búp-bê', '', '', '', 'búp bê'), 
(8, 8, 'sản-phẩm', '', '', '', 'sản phẩm'), 
(9, 8, 'cao-cấp', '', '', '', 'cao cấp'), 
(10, 8, 'thiết-kế', '', '', '', 'thiết kế'), 
(11, 8, 'đẳng-cấp', '', '', '', 'đẳng cấp'), 
(12, 8, 'quý-phái', '', '', '', 'quý phái'), 
(13, 8, 'hương-vị', '', '', '', 'hương vị'), 
(14, 8, 'êm-dịu', '', '', '', 'êm dịu'), 
(15, 8, 'phảng-phất', '', '', '', 'phảng phất'), 
(16, 8, 'hương-thơm', '', '', '', 'hương thơm'), 
(17, 8, 'thảo-mộc', '', '', '', 'thảo mộc'), 
(18, 8, 'sức-khoẻ', '', '', '', 'sức khoẻ'), 
(19, 8, 'phục-hưng', '', '', '', 'phục hưng'), 
(20, 8, 'sinh-lực', '', '', '', 'sinh lực'), 
(21, 6, 'cơ-sở', '', '', '', 'cơ sở'), 
(22, 10, 'sản-xuất', '', '', '', 'sản xuất'), 
(23, 10, 'công-ty', '', '', '', 'công ty'), 
(24, 6, 'tư-vấn', '', '', '', 'tư vấn'), 
(25, 6, 'nông-nghiệp', '', '', '', 'nông nghiệp'), 
(26, 10, 'trụ-sở', '', '', '', 'trụ sở'), 
(27, 6, 'thạch-đài', '', '', '', 'thạch đài'), 
(28, 6, 'thạch-hà', '', '', '', 'thạch hà'), 
(29, 10, 'kinh-doanh', '', '', '', 'kinh doanh'), 
(30, 6, 'thống-nhất', '', '', '', 'thống nhất'), 
(31, 14, 'pháp-luật', '', '', '', 'pháp luật'), 
(32, 10, 'địa-chỉ', '', '', '', 'địa chỉ'), 
(33, 4, 'hộ-sản', '', '', '', 'hộ sản'), 
(34, 4, 'thị-trấn', '', '', '', 'thị trấn'), 
(35, 4, 'can-lộc', '', '', '', 'can lộc'), 
(36, 5, 'đại-diện', '', '', '', 'đại diện'), 
(37, 4, 'cổ-phần', '', '', '', 'cổ phần'), 
(38, 4, 'thực-phẩm', '', '', '', 'thực phẩm'), 
(39, 4, 'đồng-môn', '', '', '', 'đồng môn'), 
(40, 4, 'thành-phố', '', '', '', 'thành phố'), 
(41, 1, 'hồ-cầm', '', '', '', 'hồ cầm');


-- ---------------------------------------


--
-- Table structure for table `tms_shops_template`
--

DROP TABLE IF EXISTS `tms_shops_template`;
CREATE TABLE `tms_shops_template` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `weight` mediumint(8) unsigned NOT NULL DEFAULT 1,
  `vi_title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_transaction`
--

DROP TABLE IF EXISTS `tms_shops_transaction`;
CREATE TABLE `tms_shops_transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_time` int(11) NOT NULL DEFAULT 0,
  `transaction_status` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `userid` int(11) NOT NULL DEFAULT 0,
  `payment` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `payment_id` varchar(22)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `payment_time` int(11) NOT NULL DEFAULT 0,
  `payment_amount` double NOT NULL DEFAULT 0,
  `payment_data` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `order_id` (`order_id`),
  KEY `payment_id` (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_shops_units`
--

DROP TABLE IF EXISTS `tms_shops_units`;
CREATE TABLE `tms_shops_units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vi_title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `vi_note` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=5  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_units`
--

INSERT INTO `tms_shops_units` VALUES
(1, 'cái', ''), 
(2, 'đôi', ''), 
(3, 'Hộp', ''), 
(4, 'Tệp', '');


-- ---------------------------------------


--
-- Table structure for table `tms_shops_warehouse`
--

DROP TABLE IF EXISTS `tms_shops_warehouse`;
CREATE TABLE `tms_shops_warehouse` (
  `wid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` mediumint(8) NOT NULL DEFAULT 0,
  `addtime` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM  AUTO_INCREMENT=12  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_warehouse`
--

INSERT INTO `tms_shops_warehouse` VALUES
(1, 'Nhập kho ngày 23/05/2015', '', 1, 1432364016), 
(2, 'Nhập kho ngày 23/05/2015', '', 1, 1432365552), 
(3, 'Nhập kho ngày 23/05/2015', '', 1, 1432366753), 
(4, 'Nhập kho ngày 23/05/2015', '', 1, 1432367106), 
(5, 'Nhập kho ngày 23/05/2015', '', 1, 1432367387), 
(6, 'Nhập kho ngày 23/05/2015', '', 1, 1432367857), 
(7, 'Nhập kho ngày 23/05/2015', '', 1, 1432369139), 
(8, 'Nhập kho ngày 26/05/2015', '', 1, 1432608794), 
(9, 'Nhập kho ngày 26/05/2015', '', 1, 1432608805), 
(10, 'Nhập kho ngày 26/05/2015', '', 1, 1432608819), 
(11, 'Nhập kho ngày 26/05/2015', '', 1, 1432608835);


-- ---------------------------------------


--
-- Table structure for table `tms_shops_warehouse_logs`
--

DROP TABLE IF EXISTS `tms_shops_warehouse_logs`;
CREATE TABLE `tms_shops_warehouse_logs` (
  `logid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wid` int(11) unsigned NOT NULL DEFAULT 0,
  `pro_id` int(11) unsigned NOT NULL DEFAULT 0,
  `quantity` int(11) unsigned NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `money_unit` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`logid`),
  KEY `wid` (`wid`)
) ENGINE=MyISAM  AUTO_INCREMENT=12  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_warehouse_logs`
--

INSERT INTO `tms_shops_warehouse_logs` VALUES
(1, 1, 1, 20, '150000', 'VND'), 
(2, 2, 2, 50, '250000', 'VND'), 
(3, 3, 3, 15, '70000', 'VND'), 
(4, 4, 4, 20, '120000', 'VND'), 
(5, 5, 5, 30, '120000', 'VND'), 
(6, 6, 6, 15, '180000', 'VND'), 
(7, 7, 7, 50, '50000', 'VND'), 
(8, 8, 11, 20, '80000', 'VND'), 
(9, 9, 10, 10, '90000', 'VND'), 
(10, 10, 9, 10, '95000', 'VND'), 
(11, 11, 8, 15, '50000', 'VND');


-- ---------------------------------------


--
-- Table structure for table `tms_shops_warehouse_logs_group`
--

DROP TABLE IF EXISTS `tms_shops_warehouse_logs_group`;
CREATE TABLE `tms_shops_warehouse_logs_group` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `logid` int(11) unsigned NOT NULL DEFAULT 0,
  `listgroup` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) unsigned NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `money_unit` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `logid` (`logid`)
) ENGINE=MyISAM  AUTO_INCREMENT=11  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_warehouse_logs_group`
--

INSERT INTO `tms_shops_warehouse_logs_group` VALUES
(8, 8, '7,24,35', 20, '80000', 'VND'), 
(9, 9, '7,16,33,51', 10, '90000', 'VND'), 
(10, 10, '7,24,35,53', 10, '95000', 'VND');


-- ---------------------------------------


--
-- Table structure for table `tms_shops_weight_vi`
--

DROP TABLE IF EXISTS `tms_shops_weight_vi`;
CREATE TABLE `tms_shops_weight_vi` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `code` char(20)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange` double NOT NULL DEFAULT 0,
  `round` varchar(10)  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_weight_vi`
--

INSERT INTO `tms_shops_weight_vi` VALUES
(1, 'g', 'Gram', '1', '0.1'), 
(2, 'kg', 'Kilogam', '1000', '0.1');


-- ---------------------------------------


--
-- Table structure for table `tms_shops_wishlist`
--

DROP TABLE IF EXISTS `tms_shops_wishlist`;
CREATE TABLE `tms_shops_wishlist` (
  `wid` smallint(6) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  `listid` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_shops_wishlist`
--

INSERT INTO `tms_shops_wishlist` VALUES
(1, 1, '3');


-- ---------------------------------------


--
-- Table structure for table `tms_upload_dir`
--

DROP TABLE IF EXISTS `tms_upload_dir`;
CREATE TABLE `tms_upload_dir` (
  `did` mediumint(8) NOT NULL AUTO_INCREMENT,
  `dirname` varchar(250)  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` int(11) NOT NULL DEFAULT 0,
  `thumb_type` tinyint(4) NOT NULL DEFAULT 0,
  `thumb_width` smallint(6) NOT NULL DEFAULT 0,
  `thumb_height` smallint(6) NOT NULL DEFAULT 0,
  `thumb_quality` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`did`),
  UNIQUE KEY `name` (`dirname`)
) ENGINE=MyISAM  AUTO_INCREMENT=41  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_upload_dir`
--

INSERT INTO `tms_upload_dir` VALUES
(0, '', 0, 3, 400, 320, 90), 
(1, 'uploads', 1634612473, 0, 0, 0, 0), 
(35, 'uploads/about', 1634887772, 0, 0, 0, 0), 
(27, 'uploads/home/slider', 1634615956, 0, 0, 0, 0), 
(5, 'uploads/comment', 0, 0, 0, 0, 0), 
(6, 'uploads/contact', 0, 0, 0, 0, 0), 
(23, 'uploads/photos', 0, 0, 0, 0, 0), 
(8, 'uploads/menu', 0, 0, 0, 0, 0), 
(34, 'uploads/tuyen-dung', 0, 0, 0, 0, 0), 
(13, 'uploads/page', 0, 0, 0, 0, 0), 
(22, 'uploads/home', 1634636466, 0, 0, 0, 0), 
(15, 'uploads/users', 0, 0, 0, 0, 0), 
(16, 'uploads/users/groups', 0, 0, 0, 0, 0), 
(17, 'uploads/wallet', 0, 0, 0, 0, 0), 
(18, 'uploads/shops', 0, 0, 0, 0, 0), 
(19, 'uploads/shops/temp_pic', 0, 0, 0, 0, 0), 
(20, 'uploads/shops/2021_10', 1634617562, 0, 0, 0, 0), 
(21, 'uploads/shops/files', 0, 0, 0, 0, 0), 
(24, 'uploads/photos/images', 0, 0, 0, 0, 0), 
(25, 'uploads/photos/thumbs', 0, 0, 0, 0, 0), 
(26, 'uploads/photos/temp', 0, 0, 0, 0, 0), 
(28, 'uploads/photos/images/2021', 0, 0, 0, 0, 0), 
(29, 'uploads/photos/images/2021/10', 0, 0, 0, 0, 0), 
(30, 'uploads/photos/thumbs/2021', 0, 0, 0, 0, 0), 
(31, 'uploads/photos/thumbs/2021/10', 0, 0, 0, 0, 0), 
(32, 'uploads/photos/images/2021/10/dong-trung-ha-thao', 0, 0, 0, 0, 0), 
(33, 'uploads/tin-tuc', 1634628052, 0, 0, 0, 0), 
(36, 'uploads/photos/images/2021/10/yen-sao-sau-khoe', 0, 0, 0, 0, 0), 
(37, 'uploads/photos/images/2021/11', 0, 0, 0, 0, 0), 
(38, 'uploads/photos/thumbs/2021/11', 0, 0, 0, 0, 0), 
(39, 'uploads/photos/images/2021/11/long-dung-food', 0, 0, 0, 0, 0), 
(40, 'uploads/photos/images/2021/11/banh-da-nem-nam-chi', 0, 0, 0, 0, 0);


-- ---------------------------------------


--
-- Table structure for table `tms_upload_file`
--

DROP TABLE IF EXISTS `tms_upload_file`;
CREATE TABLE `tms_upload_file` (
  `name` varchar(245)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `ext` varchar(10)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `type` varchar(5)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `filesize` int(11) NOT NULL DEFAULT 0,
  `src` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `srcwidth` int(11) NOT NULL DEFAULT 0,
  `srcheight` int(11) NOT NULL DEFAULT 0,
  `sizes` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `mtime` int(11) NOT NULL DEFAULT 0,
  `did` int(11) NOT NULL DEFAULT 0,
  `title` varchar(245)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alt` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  UNIQUE KEY `did` (`did`,`title`),
  KEY `userid` (`userid`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_upload_file`
--

INSERT INTO `tms_upload_file` VALUES
('favicon.ico', 'ico', 'image', 1150, 'assets/favicon.ico', 16, 16, '16|16', 1, 1617652184, 1, 'favicon.ico', 'favicon'), 
('contact.jpg', 'jpg', 'image', 122074, 'assets/contact.jpg', 80, 26, '1900|594', 1, 1634615234, 1, 'contact.jpg', 'contact'), 
('about.jpg', 'jpg', 'image', 201817, 'assets/about.jpg', 80, 26, '1900|594', 1, 1634615547, 1, 'about.jpg', 'about'), 
('vmg6ah.jpg', 'jpg', 'image', 119184, 'assets/home/slider/vmg6ah.jpg', 80, 26, '1900|594', 1, 1634616019, 27, 'vmg6ah.jpg', 'vmg6AH'), 
('news.jpg', 'jpg', 'image', 390216, 'assets/news.jpg', 80, 26, '1900|594', 1, 1634615381, 1, 'news.jpg', 'news'), 
('2.jpg', 'jpg', 'image', 210595, 'assets/home/slider/2.jpg', 80, 26, '1900|594', 1, 1634616266, 27, '2.jpg', '2'), 
('hotel-1920...jpg', 'jpg', 'image', 155450, 'assets/home/slider/hotel-1920x600-1.jpg', 80, 26, '1900|600', 1, 1634616523, 27, 'hotel-1920x600-1.jpg', 'hotel 1920x600 1'), 
('slide-p2.jpg', 'jpg', 'image', 84388, 'assets/home/slider/slide-p2.jpg', 80, 26, '1500|483', 1, 1634616586, 27, 'slide-p2.jpg', 'slide p2'), 
('1_2.png', 'png', 'image', 21360, 'assets/home/slider/1_2.png', 80, 71, '133|118', 1, 1634616798, 27, '1_2.png', '1 2'), 
('2_1.png', 'png', 'image', 23236, 'assets/home/slider/2_1.png', 80, 66, '142|117', 1, 1634616809, 27, '2_1.png', '2 1'), 
('3_1.png', 'png', 'image', 24776, 'assets/home/slider/3_1.png', 80, 67, '140|117', 1, 1634616823, 27, '3_1.png', '3 1'), 
('ruou-dong-...jpg', 'jpg', 'image', 430253, 'assets/shops/2021_10/ruou-dong-trung-ha-thao-5g.jpg', 80, 70, '1900|1672', 1, 1634617613, 20, 'ruou-dong-trung-ha-thao-5g.jpg', 'Rượu Đông Trùng Hạ Thảo 5g'), 
('ruou-dong-...jpg', 'jpg', 'image', 448285, 'assets/shops/2021_10/ruou-dong-trung-ha-thao-10g.jpg', 80, 70, '1900|1672', 1, 1634617614, 20, 'ruou-dong-trung-ha-thao-10g.jpg', 'Rượu Đông Trùng Hạ Thảo 10g'), 
('ruou-dong-...jpg', 'jpg', 'image', 334861, 'assets/shops/2021_10/ruou-dong-trung-ha-thao-20g.jpg', 80, 58, '1900|1389', 1, 1634617615, 20, 'ruou-dong-trung-ha-thao-20g.jpg', 'Rượu Đông Trùng Hạ Thảo 20g'), 
('ruou-dong-...jpg', 'jpg', 'image', 334838, 'assets/shops/2021_10/ruou-dong-trung-ha-thao-25g.jpg', 80, 58, '1900|1389', 1, 1634617615, 20, 'ruou-dong-trung-ha-thao-25g.jpg', 'Rượu Đông Trùng Hạ Thảo 25g'), 
('ruou-dong-...jpg', 'jpg', 'image', 63935, 'assets/shops/2021_10/ruou-dong-trung-ha-thao-1.jpg', 80, 58, '730|521', 1, 1634617767, 20, 'ruou-dong-trung-ha-thao-1.jpg', 'ruou dong trung ha thao 1'), 
('dong-trung...jpg', 'jpg', 'image', 67773, 'assets/tin-tuc/dong-trung-ha-thao.jpg', 80, 54, '1000|668', 1, 1634628056, 33, 'dong-trung-ha-thao.jpg', 'dong trung ha thao'), 
('8-tac-dung...png', 'png', 'image', 151715, 'assets/tin-tuc/8-tac-dung-cua-dong-trung-ha-thao-khong-khac-gi-tien-duoc.png', 80, 52, '750|488', 1, 1634628109, 33, '8-tac-dung-cua-dong-trung-ha-thao-Khong-khac-gi-tien-duoc.png', '8 tac dung cua dong trung ha thao Khong khac gi tien duoc'), 
('8-tac-dung...jpg', 'jpg', 'image', 35556, 'assets/tin-tuc/8-tac-dung-cua-dong-trung-ha-thao-khong-khac-gi-tien-duoc.jpg', 80, 53, '1000|667', 1, 1634628111, 33, '8-tac-dung-cua-dong-trung-ha-thao-Khong-khac-gi-tien-duoc.jpg', '8 tac dung cua dong trung ha thao Khong khac gi tien duoc'), 
('giai-ma-ha...jpg', 'jpg', 'image', 22457, 'assets/tin-tuc/giai-ma-hau-bien-va-dong-trung-ha-thao-doi-voi-sinh-ly-nam-gioi-e1513158189647.jpg', 80, 54, '750|501', 1, 1634628272, 33, 'giai-ma-hau-bien-va-dong-trung-ha-thao-doi-voi-sinh-ly-nam-gioi-e1513158189647.jpg', 'giai ma hau bien va dong trung ha thao doi voi sinh ly nam gioi e1513158189647'), 
('giai-ma-ha...jpg', 'jpg', 'image', 50691, 'assets/tin-tuc/giai-ma-hau-bien-va-dong-trung-ha-thao-doi-voi-sinh-ly-nam-gioi-1-e15131582077801.jpg', 80, 53, '750|500', 1, 1634628332, 33, 'giai-ma-hau-bien-va-dong-trung-ha-thao-doi-voi-sinh-ly-nam-gioi-1-e15131582077801.jpg', 'giai ma hau bien va dong trung ha thao doi voi sinh ly nam gioi 1 e1513158207780&#91;1&#93;'), 
('giai-ma-ha...jpg', 'jpg', 'image', 31394, 'assets/tin-tuc/giai-ma-hau-bien-va-dong-trung-ha-thao-doi-voi-sinh-ly-nam-gioi-2-e1513158221860.jpg', 80, 60, '750|563', 1, 1634628346, 33, 'giai-ma-hau-bien-va-dong-trung-ha-thao-doi-voi-sinh-ly-nam-gioi-2-e1513158221860.jpg', 'giai ma hau bien va dong trung ha thao doi voi sinh ly nam gioi 2 e1513158221860'), 
('dong-trung...jpg', 'jpg', 'image', 96902, 'assets/tin-tuc/dong-trung-ha-thao-2.jpg', 80, 69, '768|663', 1, 1634628389, 33, 'dong-trung-ha-thao-2.jpg', 'dong trung ha thao 2'), 
('1_tzch.jpg', 'jpg', 'image', 114688, 'assets/tin-tuc/1_tzch.jpg', 80, 80, '700|700', 1, 1634628436, 33, '1_tzch.jpg', '1 tzch'), 
('3_vaxd.jpg', 'jpg', 'image', 190713, 'assets/tin-tuc/3_vaxd.jpg', 80, 45, '1200|676', 1, 1634628437, 33, '3_vaxd.jpg', '3 vaxd'), 
('2_nmvn.jpg', 'jpg', 'image', 187278, 'assets/tin-tuc/2_nmvn.jpg', 80, 36, '1900|841', 1, 1634628439, 33, '2_nmvn.jpg', '2 nmvn'), 
('5_drpk.jpg', 'jpg', 'image', 98304, 'assets/tin-tuc/5_drpk.jpg', 80, 80, '700|700', 1, 1634628440, 33, '5_drpk.jpg', '5 drpk'), 
('6_urev.jpg', 'jpg', 'image', 142523, 'assets/tin-tuc/6_urev.jpg', 80, 51, '1200|770', 1, 1634628442, 33, '6_urev.jpg', '6 urev'), 
('4_ggji.jpg', 'jpg', 'image', 70710, 'assets/tin-tuc/4_ggji.jpg', 80, 66, '700|577', 1, 1634628443, 33, '4_ggji.jpg', '4 ggji'), 
('7_oppq.jpg', 'jpg', 'image', 55728, 'assets/tin-tuc/7_oppq.jpg', 80, 80, '600|600', 1, 1634628444, 33, '7_oppq.jpg', '7 oppq'), 
('8_ngnv.jpg', 'jpg', 'image', 79177, 'assets/tin-tuc/8_ngnv.jpg', 80, 42, '630|330', 1, 1634628445, 33, '8_ngnv.jpg', '8 ngnv'), 
('9_ugdi.jpg', 'jpg', 'image', 89495, 'assets/tin-tuc/9_ugdi.jpg', 80, 80, '700|700', 1, 1634628446, 33, '9_ugdi.jpg', '9 ugdi'), 
('dtht21.jpg', 'jpg', 'image', 227157, 'assets/tin-tuc/dtht21.jpg', 80, 52, '1578|1024', 1, 1634628473, 33, 'dtht21.jpg', 'dtht21'), 
('ruou-dong-...jpg', 'jpg', 'image', 448285, 'assets/tin-tuc/ruou-dong-trung-ha-thao-10g.jpg', 80, 70, '1900|1672', 1, 1634628498, 33, 'ruou-dong-trung-ha-thao-10g.jpg', 'Rượu Đông Trùng Hạ Thảo 10g'), 
('dtht12.jpg', 'jpg', 'image', 207615, 'assets/tin-tuc/dtht12.jpg', 80, 56, '1600|1120', 1, 1634628715, 33, 'dtht12.jpg', 'dtht12'), 
('thu-hai-dt...jpg', 'jpg', 'image', 103411, 'assets/tin-tuc/thu-hai-dtht-o-bhutan-7574.jpg', 80, 60, '645|484', 1, 1634628788, 33, 'thu-hai-dtht-o-bhutan-7574.jpg', 'thu hai dtht o bhutan 7574'), 
('5e07ff9246...jpg', 'jpg', 'image', 122197, 'assets/tin-tuc/5e07ff92467e8f20d66f-2817.jpg', 80, 75, '645|605', 1, 1634628790, 33, '5e07ff92467e8f20d66f-2817.jpg', '5e07ff92467e8f20d66f 2817'), 
('dtht-bhuta...jpg', 'jpg', 'image', 69855, 'assets/tin-tuc/dtht-bhutan-vua-thu-hoach-9222.jpg', 45, 80, '540|960', 1, 1634628791, 33, 'dtht-bhutan-vua-thu-hoach-9222.jpg', 'dtht bhutan vua thu hoach 9222'), 
('phan-biet-...jpg', 'jpg', 'image', 104809, 'assets/tin-tuc/phan-biet-dtht-that-gia-6121.jpg', 60, 80, '645|860', 1, 1634628791, 33, 'phan-biet-dtht-that-gia-6121.jpg', 'phan biet dtht that gia 6121'), 
('5e07ff9246...jpg', 'jpg', 'image', 122197, 'assets/tin-tuc/5e07ff92467e8f20d66f-2817_1.jpg', 80, 75, '645|605', 1, 1634628816, 33, '5e07ff92467e8f20d66f-2817_1.jpg', '5e07ff92467e8f20d66f 2817 1'), 
('thu-hai-dt...jpg', 'jpg', 'image', 103411, 'assets/tin-tuc/thu-hai-dtht-o-bhutan-7574_1.jpg', 80, 60, '645|484', 1, 1634628817, 33, 'thu-hai-dtht-o-bhutan-7574_1.jpg', 'thu hai dtht o bhutan 7574 1'), 
('phan-biet-...jpg', 'jpg', 'image', 104809, 'assets/tin-tuc/phan-biet-dtht-that-gia-6121_1.jpg', 60, 80, '645|860', 1, 1634628817, 33, 'phan-biet-dtht-that-gia-6121_1.jpg', 'phan biet dtht that gia 6121 1'), 
('dtht-bhuta...jpg', 'jpg', 'image', 69855, 'assets/tin-tuc/dtht-bhutan-vua-thu-hoach-9222_1.jpg', 45, 80, '540|960', 1, 1634628822, 33, 'dtht-bhutan-vua-thu-hoach-9222_1.jpg', 'dtht bhutan vua thu hoach 9222 1'), 
('z283944180...jpg', 'jpg', 'image', 225437, 'assets/home/slider/z2839441801652_509110ed1ec8b1ccda684583b828aae8.jpg', 80, 32, '1900|753', 1, 1635920016, 27, 'z2839441801652_509110ed1ec8b1ccda684583b828aae8.jpg', 'z2839441801652 509110ed1ec8b1ccda684583b828aae8'), 
('footer.png', 'png', 'image', 12379, 'assets/home/footer.png', 80, 66, '241|200', 1, 1636432412, 22, 'footer.png', 'footer'), 
('logosalenoti.png', 'png', 'image', 40074, 'assets/home/logosalenoti.png', 80, 30, '600|227', 1, 1634637354, 22, 'logosalenoti.png', 'logosalenoti'), 
('sieuship.png', 'png', 'image', 11877, 'assets/home/slider/sieuship.png', 80, 53, '300|200', 1, 1634637428, 27, 'sieuship.png', 'sieuship'), 
('vnpost.png', 'png', 'image', 28097, 'assets/home/slider/vnpost.png', 80, 53, '300|200', 1, 1634637442, 27, 'vnpost.png', 'vnpost'), 
('viettelpost.png', 'png', 'image', 21189, 'assets/home/slider/viettelpost.png', 80, 53, '300|200', 1, 1634637453, 27, 'viettelpost.png', 'viettelpost'), 
('logo_mbbank.jpg', 'jpg', 'image', 30823, 'assets/home/slider/logo_mbbank.jpg', 80, 53, '210|140', 1, 1634637471, 27, 'logo_mbbank.jpg', 'logo mbbank'), 
('hd_09.png', 'png', 'image', 3327, 'assets/home/slider/hd_09.png', 80, 57, '202|143', 1, 1634637483, 27, 'hd_09.png', 'hd 09'), 
('hd_03.png', 'png', 'image', 3821, 'assets/home/slider/hd_03.png', 80, 57, '201|143', 1, 1634637508, 27, 'hd_03.png', 'hd 03'), 
('favicon_1.ico', 'ico', 'image', 1150, 'assets/favicon_1.ico', 16, 16, '16|16', 1, 1634657051, 1, 'favicon_1.ico', 'favicon'), 
('icon.png', 'png', 'image', 8305, 'assets/icon.png', 80, 80, '100|100', 1, 1636432399, 1, 'icon.png', 'icon'), 
('11.jpg', 'jpg', 'image', 140936, 'assets/tin-tuc/11.jpg', 80, 53, '1200|800', 2, 1634886935, 33, '11.jpg', '11'), 
('2.jpg', 'jpg', 'image', 713552, 'assets/tin-tuc/2.jpg', 67, 80, '1589|1900', 2, 1634887071, 33, '2.jpg', '2'), 
('8.jpg', 'jpg', 'image', 99132, 'assets/tin-tuc/8.jpg', 80, 60, '960|720', 2, 1634887183, 33, '8.jpg', '8'), 
('3.jpg', 'jpg', 'image', 83512, 'assets/tin-tuc/3.jpg', 80, 60, '960|720', 2, 1634887299, 33, '3.jpg', '3'), 
('2.jpg', 'jpg', 'image', 713552, 'assets/about/2.jpg', 67, 80, '1589|1900', 2, 1634887798, 35, '2.jpg', '2'), 
('3.jpg', 'jpg', 'image', 83512, 'assets/shops/2021_10/3.jpg', 80, 60, '960|720', 2, 1634888083, 20, '3.jpg', '3'), 
('5.jpg', 'jpg', 'image', 83420, 'assets/shops/2021_10/5.jpg', 80, 60, '960|720', 2, 1634888367, 20, '5.jpg', '5'), 
('1.jpg', 'jpg', 'image', 99795, 'assets/shops/2021_10/1.jpg', 60, 80, '720|960', 2, 1634888561, 20, '1.jpg', '1'), 
('8.jpg', 'jpg', 'image', 99132, 'assets/shops/2021_10/8.jpg', 80, 60, '960|720', 2, 1634888676, 20, '8.jpg', '8'), 
('11.jpg', 'jpg', 'image', 77708, 'assets/home/slider/11.jpg', 80, 27, '951|321', 2, 1636442346, 27, '11.jpg', '11'), 
('1_1.jpg', 'jpg', 'image', 63075, 'assets/shops/2021_10/1_1.jpg', 80, 71, '777|686', 2, 1636359958, 20, '1_1.jpg', '1'), 
('8_1.jpg', 'jpg', 'image', 51460, 'assets/shops/2021_10/8_1.jpg', 80, 60, '828|622', 2, 1636359958, 20, '8_1.jpg', '8'), 
('9.jpg', 'jpg', 'image', 117786, 'assets/shops/2021_10/9.jpg', 60, 80, '828|1104', 2, 1636359958, 20, '9.jpg', '9'), 
('2.jpg', 'jpg', 'image', 62861, 'assets/shops/2021_10/2.jpg', 80, 68, '791|677', 2, 1636360150, 20, '2.jpg', '2'), 
('3_1.jpg', 'jpg', 'image', 67425, 'assets/shops/2021_10/3_1.jpg', 80, 63, '886|698', 2, 1636360314, 20, '3_1.jpg', '3'), 
('4.jpg', 'jpg', 'image', 49693, 'assets/shops/2021_10/4.jpg', 80, 60, '828|622', 2, 1636360466, 20, '4.jpg', '4'), 
('8_1.jpg', 'jpg', 'image', 51460, 'assets/tin-tuc/8_1.jpg', 80, 60, '828|622', 2, 1636360900, 33, '8_1.jpg', '8'), 
('44.jpg', 'jpg', 'image', 755987, 'assets/tin-tuc/44.jpg', 80, 60, '1900|1425', 2, 1636361027, 33, '44.jpg', '44'), 
('kho-muc-xe-2.jpg', 'jpg', 'image', 85187, 'assets/tin-tuc/kho-muc-xe-2.jpg', 80, 50, '1000|625', 2, 1636361501, 33, 'kho-muc-xe-2.jpg', 'kho muc xe 2'), 
('sx.jpg', 'jpg', 'image', 45716, 'assets/shops/2021_10/sx.jpg', 74, 80, '356|386', 2, 1636444019, 20, 'sx.jpg', 'sx'), 
('12.jpg', 'jpg', 'image', 79674, 'assets/shops/2021_10/12.jpg', 80, 80, '600|600', 2, 1636444139, 20, '12.jpg', '12'), 
('2_1.jpg', 'jpg', 'image', 95377, 'assets/shops/2021_10/2_1.jpg', 80, 80, '700|700', 2, 1636444354, 20, '2_1.jpg', '2'), 
('44.jpg', 'jpg', 'image', 57061, 'assets/shops/2021_10/44.jpg', 80, 73, '600|550', 2, 1636444628, 20, '44.jpg', '44'), 
('4_1.jpg', 'jpg', 'image', 52742, 'assets/shops/2021_10/4_1.jpg', 80, 54, '603|406', 2, 1636444691, 20, '4_1.jpg', '4'), 
('2_1.jpg', 'jpg', 'image', 95377, 'assets/tin-tuc/2_1.jpg', 80, 80, '700|700', 2, 1636444945, 33, '2_1.jpg', '2'), 
('44_1.jpg', 'jpg', 'image', 57061, 'assets/tin-tuc/44_1.jpg', 80, 73, '600|550', 2, 1636445300, 33, '44_1.jpg', '44'), 
('117d411083...jpg', 'jpg', 'image', 245873, 'assets/tin-tuc/117d4110834t23248l0.jpg', 80, 53, '615|410', 2, 1636445400, 33, '117d4110834t23248l0.jpg', '117d4110834t23248l0');


-- ---------------------------------------


--
-- Table structure for table `tms_users`
--

DROP TABLE IF EXISTS `tms_users`;
CREATE TABLE `tms_users` (
  `userid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` smallint(5) unsigned NOT NULL DEFAULT 0,
  `username` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `md5username` char(32)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(150)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `first_name` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `last_name` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `gender` char(1)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `photo` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `birthday` int(11) NOT NULL,
  `sig` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regdate` int(11) NOT NULL DEFAULT 0,
  `question` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `passlostkey` varchar(50)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `view_mail` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `remember` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `in_groups` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `active` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `active2step` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `secretkey` varchar(20)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `checknum` varchar(40)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `last_login` int(11) unsigned NOT NULL DEFAULT 0,
  `last_ip` varchar(45)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `last_agent` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `last_openid` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `last_update` int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'Thời điểm cập nhật thông tin lần cuối',
  `idsite` int(11) NOT NULL DEFAULT 0,
  `safemode` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `safekey` varchar(40)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `email_verification_time` int(11) NOT NULL DEFAULT -1 COMMENT '-3: Tài khoản sys, -2: Admin kích hoạt, -1 không cần kích hoạt, 0: Chưa xác minh, > 0 thời gian xác minh',
  `active_obj` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'SYSTEM' COMMENT 'SYSTEM, EMAIL, OAUTH:xxxx, quản trị kích hoạt thì lưu userid',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `md5username` (`md5username`),
  UNIQUE KEY `email` (`email`),
  KEY `idsite` (`idsite`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_users`
--

INSERT INTO `tms_users` VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '{SSHA512}XHFsuxwtQN3J4aLWqub7jCsRP9ueVWgfHdcnL36FzkeM3/4Nkx+DRerQEUk+PgJIluQyvR9WPyxhJjHlc0jK8TA0NGU=', 'info@tms.vn', 'admin', '', 'M', '', 575830800, '', 1634609572, 'admin', 'admin', '', 0, 1, '1,4', 1, 0, '', '', 1634609572, '', '', '', 1649750770, 0, 0, '', -3, 'SYSTEM'), 
(2, 4, 'banhdanem', 'b665f41610ba1334d7eb43533ea402c3', '{SSHA512}+bwapFq6TGngTjOSIHkOtmMpoy8vcIKQSevRPYEnYjDehl8j5DrGHJKUz6+tG92OLlT7AMOb+vxAPSqAO85ODjhmN2Q=', 'banhdanem@gmail.com', 'banhdanem', '', 'M', '', 308422800, '', 1634652284, 'banhdanem', 'banhdanem', '', 0, 1, '4', 1, 0, '', '', 0, '', '', '', 1649750098, 0, 0, '', 0, 'SYSTEM');


-- ---------------------------------------


--
-- Table structure for table `tms_users_backupcodes`
--

DROP TABLE IF EXISTS `tms_users_backupcodes`;
CREATE TABLE `tms_users_backupcodes` (
  `userid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_used` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `time_used` int(11) unsigned NOT NULL DEFAULT 0,
  `time_creat` int(11) unsigned NOT NULL DEFAULT 0,
  UNIQUE KEY `userid` (`userid`,`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_users_config`
--

DROP TABLE IF EXISTS `tms_users_config`;
CREATE TABLE `tms_users_config` (
  `config` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edit_time` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`config`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_users_config`
--

INSERT INTO `tms_users_config` VALUES
('access_admin', 'a:8:{s:15:\"access_viewlist\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:12:\"access_addus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:14:\"access_waiting\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:17:\"access_editcensor\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_editus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:12:\"access_delus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_passus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_groups\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}}', 1634652282), 
('password_simple', '000000|1234|2000|12345|111111|123123|123456|654321|696969|1234567|1234569|11223344|12345678|12345679|23456789|66666666|66668888|68686868|87654321|88888888|99999999|123456789|999999999|1234567890|aaaaaa|abc123|abc123@|abc@123|admin123|admin123@|admin@123|adobe1|adobe123|azerty|baseball|dragon|football|harley|hoilamgi|iloveyou|jennifer|jordan|khongbiet|khongco|khongcopass|letmein|macromedia|master|michael|monkey|mustang|nuke123|nuke123@|nuke@123|password|photoshop|pussy|qwerty|shadow|superman', 1634652282), 
('deny_email', 'yoursite.com|mysite.com|localhost|xxx', 1634652282), 
('deny_name', 'anonimo|anonymous|god|linux|nobody|operator|root', 1634652282), 
('avatar_width', '80', 1634652282), 
('avatar_height', '80', 1634652282), 
('active_group_newusers', '0', 1634652282), 
('active_editinfo_censor', '0', 1634652282), 
('active_user_logs', '1', 1634652282), 
('min_old_user', '16', 1634652282), 
('register_active_time', '86400', 1634609551), 
('auto_assign_oauthuser', '0', 1634652282), 
('siteterms_vi', '<p> Để trở thành thành viên, bạn phải cam kết đồng ý với các điều khoản dưới đây. Chúng tôi có thể thay đổi lại những điều khoản này vào bất cứ lúc nào và chúng tôi sẽ cố gắng thông báo đến bạn kịp thời.<br /> <br /> Bạn cam kết không gửi bất cứ bài viết có nội dung lừa đảo, thô tục, thiếu văn hoá; vu khống, khiêu khích, đe doạ người khác; liên quan đến các vấn đề tình dục hay bất cứ nội dung nào vi phạm luật pháp của quốc gia mà bạn đang sống, luật pháp của quốc gia nơi đặt máy chủ của website này hay luật pháp quốc tế. Nếu vẫn cố tình vi phạm, ngay lập tức bạn sẽ bị cấm tham gia vào website. Địa chỉ IP của tất cả các bài viết đều được ghi nhận lại để bảo vệ các điều khoản cam kết này trong trường hợp bạn không tuân thủ.<br /> <br /> Bạn đồng ý rằng website có quyền gỡ bỏ, sửa, di chuyển hoặc khoá bất kỳ bài viết nào trong website vào bất cứ lúc nào tuỳ theo nhu cầu công việc.<br /> <br /> Đăng ký làm thành viên của chúng tôi, bạn cũng phải đồng ý rằng, bất kỳ thông tin cá nhân nào mà bạn cung cấp đều được lưu trữ trong cơ sở dữ liệu của hệ thống. Mặc dù những thông tin này sẽ không được cung cấp cho bất kỳ người thứ ba nào khác mà không được sự đồng ý của bạn, chúng tôi không chịu trách nhiệm về việc những thông tin cá nhân này của bạn bị lộ ra bên ngoài từ những kẻ phá hoại có ý đồ xấu tấn công vào cơ sở dữ liệu của hệ thống.</p>', 1274757129);


-- ---------------------------------------


--
-- Table structure for table `tms_users_edit`
--

DROP TABLE IF EXISTS `tms_users_edit`;
CREATE TABLE `tms_users_edit` (
  `userid` mediumint(8) unsigned NOT NULL,
  `lastedit` int(11) unsigned NOT NULL DEFAULT 0,
  `info_basic` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_custom` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_users_field`
--

DROP TABLE IF EXISTS `tms_users_field`;
CREATE TABLE `tms_users_field` (
  `fid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `field` varchar(25)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT 1,
  `field_type` enum('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect')  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'textbox',
  `field_choices` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `sql_choices` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `match_type` enum('none','alphanumeric','unicodename','email','url','regex','callback')  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `match_regex` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `func_callback` varchar(75)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `min_length` int(11) NOT NULL DEFAULT 0,
  `max_length` bigint(20) unsigned NOT NULL DEFAULT 0,
  `required` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `show_register` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `user_editable` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `show_profile` tinyint(4) NOT NULL DEFAULT 1,
  `class` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_value` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `is_system` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `field` (`field`)
) ENGINE=MyISAM  AUTO_INCREMENT=8  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_users_field`
--

INSERT INTO `tms_users_field` VALUES
(1, 'first_name', 1, 'textbox', '', '', 'none', '', '', 0, 100, 1, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:4:\"Tên\";i:1;s:0:\"\";}}', '', 1), 
(2, 'last_name', 2, 'textbox', '', '', 'none', '', '', 0, 100, 0, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:20:\"Họ và tên đệm\";i:1;s:0:\"\";}}', '', 1), 
(3, 'gender', 3, 'select', 'a:3:{s:1:\"N\";s:0:\"\";s:1:\"M\";s:0:\"\";s:1:\"F\";s:0:\"\";}', '', 'none', '', '', 0, 1, 0, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:12:\"Giới tính\";i:1;s:0:\"\";}}', '2', 1), 
(4, 'birthday', 4, 'date', 'a:1:{s:12:\"current_date\";i:0;}', '', 'none', '', '', 0, 0, 1, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Ngày tháng năm sinh\";i:1;s:0:\"\";}}', '0', 1), 
(5, 'sig', 5, 'textarea', '', '', 'none', '', '', 0, 1000, 0, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:9:\"Chữ ký\";i:1;s:0:\"\";}}', '', 1), 
(6, 'question', 6, 'textbox', '', '', 'none', '', '', 3, 255, 1, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Câu hỏi bảo mật\";i:1;s:0:\"\";}}', '', 1), 
(7, 'answer', 7, 'textbox', '', '', 'none', '', '', 3, 255, 1, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Trả lời câu hỏi\";i:1;s:0:\"\";}}', '', 1);


-- ---------------------------------------


--
-- Table structure for table `tms_users_groups`
--

DROP TABLE IF EXISTS `tms_users_groups`;
CREATE TABLE `tms_users_groups` (
  `group_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(240)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `group_type` tinyint(4) unsigned NOT NULL DEFAULT 0 COMMENT '0:Sys, 1:approval, 2:public',
  `group_color` varchar(10)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_avatar` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `require_2step_admin` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `require_2step_site` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `is_default` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) NOT NULL,
  `exp_time` int(11) NOT NULL,
  `weight` int(11) unsigned NOT NULL DEFAULT 0,
  `act` tinyint(1) unsigned NOT NULL,
  `idsite` int(11) unsigned NOT NULL DEFAULT 0,
  `numbers` mediumint(9) unsigned NOT NULL DEFAULT 0,
  `siteus` tinyint(4) unsigned NOT NULL DEFAULT 0,
  `config` varchar(250)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `kalias` (`alias`,`idsite`),
  KEY `exp_time` (`exp_time`)
) ENGINE=MyISAM  AUTO_INCREMENT=13  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_users_groups`
--

INSERT INTO `tms_users_groups` VALUES
(1, 'Super-Admin', '', 0, '', '', 0, 0, 0, 1634609551, 0, 1, 1, 0, 1, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}'), 
(2, 'General-Admin', '', 0, '', '', 0, 0, 0, 1634609551, 0, 2, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}'), 
(3, 'Module-Admin', '', 0, '', '', 0, 0, 0, 1634609551, 0, 3, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}'), 
(4, 'Users', '', 0, '', '', 0, 0, 0, 1634609551, 0, 4, 1, 0, 2, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}'), 
(7, 'New-Users', '', 0, '', '', 0, 0, 0, 1634609551, 0, 5, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}'), 
(5, 'Guest', '', 0, '', '', 0, 0, 0, 1634609551, 0, 6, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}'), 
(6, 'All', '', 0, '', '', 0, 0, 0, 1634609551, 0, 7, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}');


-- ---------------------------------------


--
-- Table structure for table `tms_users_groups_detail`
--

DROP TABLE IF EXISTS `tms_users_groups_detail`;
CREATE TABLE `tms_users_groups_detail` (
  `group_id` smallint(5) unsigned NOT NULL DEFAULT 0,
  `lang` char(2)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(240)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(240)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  UNIQUE KEY `group_id_lang` (`lang`,`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_users_groups_detail`
--

INSERT INTO `tms_users_groups_detail` VALUES
(1, 'vi', 'Super Admin', '', ''), 
(2, 'vi', 'General Admin', '', ''), 
(3, 'vi', 'Module Admin', '', ''), 
(4, 'vi', 'Users', '', ''), 
(7, 'vi', 'New Users', '', ''), 
(5, 'vi', 'Guest', '', ''), 
(6, 'vi', 'All', '', ''), 
(10, 'vi', 'Người hâm mộ', 'Nhóm những người hâm mộ hệ thống NukeViet', ''), 
(11, 'vi', 'Người quản lý', 'Nhóm những người quản lý website xây dựng bằng hệ thống NukeViet', ''), 
(12, 'vi', 'Lập trình viên', 'Nhóm Lập trình viên hệ thống NukeViet', '');


-- ---------------------------------------


--
-- Table structure for table `tms_users_groups_users`
--

DROP TABLE IF EXISTS `tms_users_groups_users`;
CREATE TABLE `tms_users_groups_users` (
  `group_id` smallint(5) unsigned NOT NULL DEFAULT 0,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `is_leader` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `approved` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `data` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_requested` int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'Thời gian yêu cầu tham gia',
  `time_approved` int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'Thời gian duyệt yêu cầu tham gia',
  PRIMARY KEY (`group_id`,`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_users_groups_users`
--

INSERT INTO `tms_users_groups_users` VALUES
(1, 1, 1, 1, '0', 1634609572, 1634609572);


-- ---------------------------------------


--
-- Table structure for table `tms_users_info`
--

DROP TABLE IF EXISTS `tms_users_info`;
CREATE TABLE `tms_users_info` (
  `userid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_users_info`
--

INSERT INTO `tms_users_info` VALUES
(1), 
(2);


-- ---------------------------------------


--
-- Table structure for table `tms_users_openid`
--

DROP TABLE IF EXISTS `tms_users_openid`;
CREATE TABLE `tms_users_openid` (
  `userid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `openid` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `opid` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`opid`),
  KEY `userid` (`userid`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_users_question`
--

DROP TABLE IF EXISTS `tms_users_question`;
CREATE TABLE `tms_users_question` (
  `qid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(240)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lang` char(2)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `weight` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) unsigned NOT NULL DEFAULT 0,
  `edit_time` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`qid`),
  UNIQUE KEY `title` (`title`,`lang`)
) ENGINE=MyISAM  AUTO_INCREMENT=8  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_users_question`
--

INSERT INTO `tms_users_question` VALUES
(1, 'Bạn thích môn thể thao nào nhất', 'vi', 1, 1274840238, 1274840238), 
(2, 'Món ăn mà bạn yêu thích', 'vi', 2, 1274840250, 1274840250), 
(3, 'Thần tượng điện ảnh của bạn', 'vi', 3, 1274840257, 1274840257), 
(4, 'Bạn thích nhạc sỹ nào nhất', 'vi', 4, 1274840264, 1274840264), 
(5, 'Quê ngoại của bạn ở đâu', 'vi', 5, 1274840270, 1274840270), 
(6, 'Tên cuốn sách &quot;gối đầu giường&quot;', 'vi', 6, 1274840278, 1274840278), 
(7, 'Ngày lễ mà bạn luôn mong đợi', 'vi', 7, 1274840285, 1274840285);


-- ---------------------------------------


--
-- Table structure for table `tms_users_reg`
--

DROP TABLE IF EXISTS `tms_users_reg`;
CREATE TABLE `tms_users_reg` (
  `userid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `md5username` char(32)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(150)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `first_name` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `last_name` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `gender` char(1)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `birthday` int(11) NOT NULL,
  `sig` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regdate` int(11) unsigned NOT NULL DEFAULT 0,
  `question` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `checknum` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `users_info` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `openid_info` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idsite` mediumint(8) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `login` (`username`),
  UNIQUE KEY `md5username` (`md5username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_vi_about`
--

DROP TABLE IF EXISTS `tms_vi_about`;
CREATE TABLE `tms_vi_about` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `imagealt` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `imageposition` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `description` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bodytext` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialbutton` tinyint(4) NOT NULL DEFAULT 0,
  `activecomm` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `layout_func` varchar(100)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `edit_time` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hot_post` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_about`
--

INSERT INTO `tms_vi_about` VALUES
(1, 'CÂU CHUYỆN SẢN PHẨM BÁNH ĐA NEM NAM CHI', 'cau-chuyen-san-pham', 'IaZJgVdwHhQ', '', '', 0, 'Điều gì đã làm nên nét độc đáo riêng của bánh đa nem Nam Chi? Chúng tôi luôn khắc cốt ghi tâm cái cốt yếu làm nên chất lượng sản phẩm đó là nguyên liệu, vẫn là gạo, mật mía và muối nhưng nguồn nguyên liệu sản xuất chọn ở chính địa phương và các vùng lân cận, nơi có chất đất phù hợp với các loại cây trồng và được chọn lưa rất kỹ lưỡng, nguyên liệu trước khi đưa vào sản xuất phải làm sạch 100%. Đi vào chi tiết thì có nhiều điều khác biệt, như thời gian ngâm gạo của bánh đa nem thường là khoảng 1 đêm nhưng theo kinh nghiệm lâu năm và quan tìm hiểu, nghiên cứu, sản xuất thì ngâm bột càng lâu thì bánh đa làm ra sẽ càng giòn và được bột hơn, đó cũng chính là bí quyết để tạo lên độ giòn của lớp vỏ ram.', '<div style=\"text-align: justify;\"> <p>Hà Tĩnh nổi tiếng là vùng địa linh, nhân kiệt, nơi đây không chỉ thu hút du khách bởi tình người đậm sâu mà còn bởi những món ăn dân giã, say đắm lòng người. Nếu chưa một lần được đặt chân tới vùng đất gió Lào, cát trắng này và chưa một lần được thưởng thức đặc sản Hà Tĩnh thì quả là tiếc nuối.<br /> Không phải cao lương mĩ vị - món ram cuốn (hay còn gọi là nem rán) và bánh mướt một món ăn chân chất, bình dị như người Hà Tĩnh lại khiến cho mỗi người con đi xa lại nhớ về, mỗi người du khách khi đặt chân đến lại không thể nào quên. Có gì mà đặc biệt đến thế? Nghe qua chắc hẳn nhiều người sẽ đặt ra câu hỏi đó.<br /> &nbsp;Để làm nên đặc sản ấy thì chiếc bánh đa nem mỏng mảnh, nguyên liệu chính không thể thiếu. Và sản phẩm bánh đa nem Nam Chi là sự kết hợp hài hòa giữa nghề làm bánh ram truyền thống và công nghệ hiện đại góp phần tạo nên hương vị riêng cho món ăn tưởng như rất bình thường mà lại gắn bó trong văn hóa ẩm thực, được xem là quốc hồn, quốc túy của người Việt Nam.<br /> Điều gì đã làm nên nét độc đáo riêng của bánh đa nem Nam Chi? Chúng tôi luôn khắc cốt ghi tâm cái cốt yếu làm nên chất lượng sản phẩm đó là nguyên liệu, vẫn là gạo, mật mía và muối nhưng nguồn nguyên liệu sản xuất chọn ở chính địa phương và các vùng lân cận, nơi có chất đất phù hợp với các loại cây trồng và được chọn lưa rất kỹ lưỡng, nguyên liệu trước khi đưa vào sản xuất phải làm sạch 100%. Đi vào chi tiết thì có nhiều điều khác biệt, như thời gian ngâm gạo của bánh đa nem thường là khoảng 1 đêm nhưng theo kinh nghiệm lâu năm và quan tìm hiểu, nghiên cứu, sản xuất thì ngâm bột càng lâu thì bánh đa làm ra sẽ càng giòn và được bột hơn, đó cũng chính là bí quyết để tạo lên độ giòn của lớp vỏ ram.<br /> Đặc biệt Công ty đã đầu tư dây chuyền sản xuất hiện đại, sử dụng trên 70% máy móc bán tự động. Sau khi đổ bột vào máy, người thợ chỉ việc đặt những phên lên phần băng tải dây chuyền của máy. Bột sẽ tự động được rải đều lên phên, hơi nước nhiệt độ cao sẽ làm chín bột, với hệ thống sấy bơm nhiệt hiện đại làm giảm 50% thời gian sấy so với các hệ thống sấy thông thường, tạo thành lớp bánh mỏng, độ khô đồng đều với năng suất, chất lượng cao, đảm bảo các yếu tố về an toàn thực phẩm và vệ sinh môi trường.<br /> Đặt cả tâm mình vào trong từng sản phẩm, chúng tôi hy vọng sẽ đem đến cho người tiêu dùng sản phẩm Bánh đa nem Nam Chi với chất lượng tốt nhất. Đồng hành cùng Chương trình OCOP, mang thương hiệu sản phẩm Hà Tĩnh vươn xa.</p> </div>', 'câu chuyện', 1, '4', '', 1, 1, 1634787308, 1637037583, 1, 118, 0);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_about_config`
--

DROP TABLE IF EXISTS `tms_vi_about_config`;
CREATE TABLE `tms_vi_about_config` (
  `config_name` varchar(30)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_about_config`
--

INSERT INTO `tms_vi_about_config` VALUES
('viewtype', '0'), 
('facebookapi', ''), 
('per_page', '20'), 
('news_first', '0'), 
('related_articles', '5'), 
('copy_page', '0'), 
('alias_lower', '1'), 
('socialbutton', 'facebook,twitter');


-- ---------------------------------------


--
-- Table structure for table `tms_vi_blocks_groups`
--

DROP TABLE IF EXISTS `tms_vi_blocks_groups`;
CREATE TABLE `tms_vi_blocks_groups` (
  `bid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(55)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(55)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(55)  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(55)  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(55)  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_time` int(11) DEFAULT 0,
  `active` varchar(10)  COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `act` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `groups_view` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `all_func` tinyint(4) NOT NULL DEFAULT 0,
  `weight` int(11) NOT NULL DEFAULT 0,
  `config` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`bid`),
  KEY `theme` (`theme`),
  KEY `module` (`module`),
  KEY `position` (`position`),
  KEY `exp_time` (`exp_time`)
) ENGINE=MyISAM  AUTO_INCREMENT=46  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_blocks_groups`
--

INSERT INTO `tms_vi_blocks_groups` VALUES
(11, 'default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, '1', 1, '6', 1, 1, 'a:5:{s:12:\"copyright_by\";s:0:\"\";s:13:\"copyright_url\";s:0:\"\";s:9:\"design_by\";s:12:\"VINADES.,JSC\";s:10:\"design_url\";s:18:\"http://vinades.vn/\";s:13:\"siteterms_url\";s:39:\"/index.php?language=vi&amp;nv=siteterms\";}'), 
(15, 'default', 'users', 'global.user_button.php', 'Đăng nhập thành viên', '', 'no_title', '[PERSONALAREA]', 0, '1', 1, '6', 1, 1, ''), 
(17, 'default', 'menu', 'global.bootstrap.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:1;s:12:\"title_length\";i:0;}'), 
(22, 'mobile_default', 'menu', 'global.metismenu.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:1;s:12:\"title_length\";i:0;}'), 
(23, 'mobile_default', 'users', 'global.user_button.php', 'Sign In', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 2, ''), 
(24, 'mobile_default', 'contact', 'global.contact_default.php', 'Contact Default', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 1, ''), 
(25, 'mobile_default', 'contact', 'global.contact_form.php', 'Feedback', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 2, ''), 
(26, 'mobile_default', 'theme', 'global.social.php', 'Social icon', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 3, 'a:3:{s:8:\"facebook\";s:32:\"http://www.facebook.com/nukeviet\";s:7:\"youtube\";s:37:\"https://www.youtube.com/user/nukeviet\";s:7:\"twitter\";s:28:\"https://twitter.com/nukeviet\";}'), 
(27, 'mobile_default', 'theme', 'global.QR_code.php', 'QR code', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 4, ''), 
(28, 'mobile_default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, '1', 1, '6', 1, 1, 'a:5:{s:12:\"copyright_by\";s:0:\"\";s:13:\"copyright_url\";s:0:\"\";s:9:\"design_by\";s:12:\"VINADES.,JSC\";s:10:\"design_url\";s:18:\"http://vinades.vn/\";s:13:\"siteterms_url\";s:39:\"/index.php?language=vi&amp;nv=siteterms\";}'), 
(29, 'mobile_default', 'theme', 'global.menu_footer.php', 'Các chuyên mục chính', '', 'primary', '[MENU_FOOTER]', 0, '1', 1, '6', 1, 1, 'a:1:{s:14:\"module_in_menu\";a:9:{i:0;s:5:\"about\";i:1;s:4:\"news\";i:2;s:5:\"users\";i:3;s:7:\"contact\";i:4;s:6:\"voting\";i:5;s:7:\"banners\";i:6;s:4:\"seek\";i:7;s:5:\"feeds\";i:8;s:9:\"siteterms\";}}'), 
(30, 'mobile_default', 'theme', 'global.company_info.php', 'Công ty chủ quản', '', 'primary', '[COMPANY_INFO]', 0, '1', 1, '6', 1, 1, 'a:13:{s:12:\"company_name\";s:58:\"Công ty cổ phần phát triển nguồn mở Việt Nam\";s:15:\"company_address\";s:72:\"Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội\";s:16:\"company_sortname\";s:12:\"VINADES.,JSC\";s:15:\"company_regcode\";s:0:\"\";s:16:\"company_regplace\";s:0:\"\";s:21:\"company_licensenumber\";s:0:\"\";s:22:\"company_responsibility\";s:0:\"\";s:15:\"company_showmap\";i:1;s:14:\"company_mapurl\";s:326:\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2634.116366996857!2d105.79399620326203!3d20.9844946314258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac93055e2f2f%3A0x91f4b423089193dd!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gUGjDoXQgdHJp4buDbiBOZ3Xhu5NuIG3hu58gVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1558315703646!5m2!1svi!2s\";s:13:\"company_phone\";s:58:\"+84-24-85872007[+842485872007]|+84-904762534[+84904762534]\";s:11:\"company_fax\";s:15:\"+84-24-35500914\";s:13:\"company_email\";s:18:\"contact@vinades.vn\";s:15:\"company_website\";s:17:\"http://vinades.vn\";}'), 
(31, 'default', 'home', 'global.banner_center.php', 'slider home', '', 'no_title', '[BANNER_HEADER]', 0, '1', 1, '6', 1, 1, 'a:3:{s:7:\"blockid\";i:1;s:11:\"number_item\";i:10;s:12:\"title_length\";i:0;}'), 
(32, 'default', 'about', 'global.about.php', 'Bánh Da Nem Nam Chi', '', 'home', '[GIOITHIEU]', 0, '1', 1, '6', 1, 1, ''), 
(33, 'default', 'shops', 'global.block_relates_product.php', 'Sản phẩm nổi bật', '', 'home', '[SANPHAM]', 0, '1', 1, '6', 1, 1, 'a:3:{s:7:\"blockid\";i:2;s:6:\"numrow\";i:8;s:7:\"cut_num\";i:60;}'), 
(34, 'default', 'photos', 'global.block_photos_new.php', 'Hình ảnh hoạt động', '', 'no_title', '[HINHANH]', 0, '1', 1, '6', 1, 1, 'a:4:{s:6:\"numrow\";i:9;s:12:\"title_length\";i:60;s:10:\"slide_mode\";i:0;s:8:\"hometext\";s:0:\"\";}'), 
(35, 'default', 'home', 'global.hotro.php', 'Hỗ trợ online', '', '', '[RIGHT]', 0, '1', 1, '6', 1, 2, 'a:3:{s:7:\"blockid\";i:1;s:11:\"number_item\";i:10;s:12:\"title_length\";i:0;}'), 
(36, 'default', 'shops', 'global.block_cart.php', 'Giỏ hàng', '', '', '[RIGHT]', 0, '1', 1, '6', 1, 1, ''), 
(37, 'default', 'statistics', 'global.counter.php', 'Thống kê', '', '', '[RIGHT]', 0, '1', 1, '6', 1, 4, ''), 
(38, 'default', 'tin-tuc', 'global.tin-tuc.php', 'Tin tức &amp; sự kiện', '', 'home', '[NEW]', 0, '1', 1, '6', 1, 1, 'a:2:{s:12:\"title_length\";i:0;s:6:\"numrow\";i:3;}'), 
(39, 'default', 'menu', 'global.footer.php', 'Thông tin', '', 'simple', '[MENU_FOOTER1]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:2;s:12:\"title_length\";i:0;}'), 
(40, 'default', 'menu', 'global.footer.php', 'Quy định', '', 'simple', '[MENU_FOOTER2]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:3;s:12:\"title_length\";i:0;}'), 
(41, 'default', 'home', 'global.company.php', 'Liên hệ', '', 'no_title', '[COMPANY_INFO]', 0, '1', 1, '6', 1, 1, ''), 
(42, 'default', 'home', 'global.bot.php', 'bot liên hệ', '', 'no_title', '[COMPANY_INFO]', 0, '1', 1, '6', 1, 2, ''), 
(43, 'default', 'home', 'global.doitac.php', 'Đối tác', '', 'no_title', '[DOITAC]', 0, '1', 0, '6', 1, 1, 'a:3:{s:7:\"blockid\";i:2;s:11:\"number_item\";i:10;s:12:\"title_length\";i:0;}'), 
(44, 'default', 'home', 'global.review.php', 'Khách hàng nói về chúng tôi', '', 'no_title', '[REVIEW]', 0, '1', 1, '6', 1, 1, 'a:3:{s:7:\"blockid\";i:3;s:11:\"number_item\";i:10;s:12:\"title_length\";i:0;}'), 
(45, 'default', 'tin-tuc', 'global.tintucright.php', 'Tin tức', '', '', '[RIGHT]', 0, '1', 1, '6', 0, 3, 'a:2:{s:12:\"title_length\";i:0;s:6:\"numrow\";i:5;}');


-- ---------------------------------------


--
-- Table structure for table `tms_vi_blocks_weight`
--

DROP TABLE IF EXISTS `tms_vi_blocks_weight`;
CREATE TABLE `tms_vi_blocks_weight` (
  `bid` mediumint(8) NOT NULL DEFAULT 0,
  `func_id` mediumint(8) NOT NULL DEFAULT 0,
  `weight` mediumint(8) NOT NULL DEFAULT 0,
  UNIQUE KEY `bid` (`bid`,`func_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_blocks_weight`
--

INSERT INTO `tms_vi_blocks_weight` VALUES
(15, 118, 1), 
(15, 115, 1), 
(15, 109, 1), 
(15, 107, 1), 
(15, 108, 1), 
(15, 119, 1), 
(15, 110, 1), 
(17, 118, 1), 
(17, 115, 1), 
(17, 109, 1), 
(17, 107, 1), 
(17, 108, 1), 
(17, 119, 1), 
(17, 110, 1), 
(11, 1, 1), 
(11, 2, 1), 
(11, 3, 1), 
(11, 4, 1), 
(11, 5, 1), 
(11, 6, 1), 
(11, 7, 1), 
(11, 8, 1), 
(11, 9, 1), 
(11, 10, 1), 
(11, 11, 1), 
(11, 12, 1), 
(11, 13, 1), 
(11, 14, 1), 
(11, 15, 1), 
(11, 16, 1), 
(11, 17, 1), 
(11, 18, 1), 
(11, 19, 1), 
(11, 20, 1), 
(11, 21, 1), 
(11, 22, 1), 
(11, 23, 1), 
(11, 24, 1), 
(11, 25, 1), 
(11, 26, 1), 
(11, 27, 1), 
(11, 28, 1), 
(11, 29, 1), 
(11, 30, 1), 
(11, 31, 1), 
(11, 32, 1), 
(11, 33, 1), 
(11, 34, 1), 
(11, 35, 1), 
(11, 36, 1), 
(11, 37, 1), 
(11, 38, 1), 
(11, 39, 1), 
(11, 40, 1), 
(11, 41, 1), 
(11, 42, 1), 
(11, 43, 1), 
(11, 44, 1), 
(11, 45, 1), 
(11, 46, 1), 
(11, 47, 1), 
(11, 48, 1), 
(11, 49, 1), 
(11, 50, 1), 
(11, 51, 1), 
(11, 52, 1), 
(11, 53, 1), 
(11, 54, 1), 
(11, 55, 1), 
(11, 56, 1), 
(11, 57, 1), 
(11, 58, 1), 
(11, 59, 1), 
(11, 60, 1), 
(11, 61, 1), 
(11, 62, 1), 
(11, 63, 1), 
(11, 64, 1), 
(11, 65, 1), 
(15, 1, 1), 
(15, 2, 1), 
(15, 3, 1), 
(15, 4, 1), 
(15, 5, 1), 
(15, 6, 1), 
(15, 7, 1), 
(15, 8, 1), 
(15, 9, 1), 
(15, 10, 1), 
(15, 11, 1), 
(15, 12, 1), 
(15, 13, 1), 
(15, 14, 1), 
(15, 15, 1), 
(15, 16, 1), 
(15, 17, 1), 
(15, 18, 1), 
(15, 19, 1), 
(15, 20, 1), 
(15, 21, 1), 
(15, 22, 1), 
(15, 23, 1), 
(15, 24, 1), 
(15, 25, 1), 
(15, 26, 1), 
(15, 27, 1), 
(15, 28, 1), 
(15, 29, 1), 
(15, 30, 1), 
(15, 31, 1), 
(15, 32, 1), 
(15, 33, 1), 
(15, 34, 1), 
(15, 35, 1), 
(15, 36, 1), 
(15, 37, 1), 
(15, 38, 1), 
(15, 39, 1), 
(15, 40, 1), 
(15, 41, 1), 
(15, 42, 1), 
(15, 43, 1), 
(15, 44, 1), 
(15, 45, 1), 
(15, 46, 1), 
(15, 47, 1), 
(15, 48, 1), 
(15, 49, 1), 
(15, 50, 1), 
(15, 51, 1), 
(15, 52, 1), 
(15, 53, 1), 
(15, 54, 1), 
(15, 55, 1), 
(15, 56, 1), 
(15, 57, 1), 
(15, 58, 1), 
(15, 59, 1), 
(15, 60, 1), 
(15, 61, 1), 
(15, 62, 1), 
(15, 63, 1), 
(15, 64, 1), 
(15, 65, 1), 
(17, 1, 1), 
(17, 3, 1), 
(17, 4, 1), 
(17, 5, 1), 
(17, 6, 1), 
(17, 7, 1), 
(17, 8, 1), 
(17, 9, 1), 
(17, 10, 1), 
(17, 11, 1), 
(17, 12, 1), 
(17, 13, 1), 
(17, 20, 1), 
(17, 21, 1), 
(17, 22, 1), 
(17, 23, 1), 
(17, 24, 1), 
(17, 25, 1), 
(17, 26, 1), 
(17, 27, 1), 
(17, 28, 1), 
(17, 29, 1), 
(17, 30, 1), 
(17, 32, 1), 
(17, 33, 1), 
(17, 34, 1), 
(17, 35, 1), 
(17, 36, 1), 
(17, 37, 1), 
(17, 38, 1), 
(17, 39, 1), 
(17, 41, 1), 
(17, 42, 1), 
(17, 43, 1), 
(17, 44, 1), 
(17, 50, 1), 
(17, 51, 1), 
(17, 52, 1), 
(17, 55, 1), 
(17, 56, 1), 
(17, 57, 1), 
(17, 58, 1), 
(17, 59, 1), 
(17, 106, 1), 
(17, 63, 1), 
(17, 64, 1), 
(17, 65, 1), 
(27, 118, 4), 
(27, 115, 4), 
(27, 109, 4), 
(27, 107, 4), 
(27, 108, 4), 
(27, 119, 4), 
(27, 110, 4), 
(26, 118, 3), 
(26, 115, 3), 
(26, 109, 3), 
(26, 107, 3), 
(26, 108, 3), 
(26, 119, 3), 
(26, 110, 3), 
(25, 118, 2), 
(25, 115, 2), 
(25, 109, 2), 
(25, 107, 2), 
(25, 108, 2), 
(25, 119, 2), 
(25, 110, 2), 
(24, 118, 1), 
(24, 115, 1), 
(24, 109, 1), 
(24, 107, 1), 
(24, 108, 1), 
(24, 119, 1), 
(24, 110, 1), 
(23, 118, 2), 
(23, 115, 2), 
(23, 109, 2), 
(23, 107, 2), 
(23, 108, 2), 
(23, 119, 2), 
(23, 110, 2), 
(22, 118, 1), 
(22, 115, 1), 
(22, 109, 1), 
(22, 107, 1), 
(22, 108, 1), 
(22, 119, 1), 
(22, 110, 1), 
(29, 118, 1), 
(29, 115, 1), 
(29, 109, 1), 
(29, 107, 1), 
(29, 108, 1), 
(29, 119, 1), 
(29, 110, 1), 
(28, 118, 1), 
(28, 115, 1), 
(28, 109, 1), 
(28, 107, 1), 
(22, 1, 1), 
(22, 2, 1), 
(22, 3, 1), 
(22, 4, 1), 
(22, 5, 1), 
(22, 6, 1), 
(22, 7, 1), 
(22, 8, 1), 
(22, 9, 1), 
(22, 10, 1), 
(22, 11, 1), 
(22, 12, 1), 
(22, 13, 1), 
(22, 14, 1), 
(22, 15, 1), 
(22, 16, 1), 
(22, 17, 1), 
(22, 18, 1), 
(22, 19, 1), 
(22, 20, 1), 
(22, 21, 1), 
(22, 22, 1), 
(22, 23, 1), 
(22, 24, 1), 
(22, 25, 1), 
(22, 26, 1), 
(22, 27, 1), 
(22, 28, 1), 
(22, 29, 1), 
(22, 30, 1), 
(22, 31, 1), 
(22, 32, 1), 
(22, 33, 1), 
(22, 34, 1), 
(22, 35, 1), 
(22, 36, 1), 
(22, 37, 1), 
(22, 38, 1), 
(22, 39, 1), 
(22, 40, 1), 
(22, 41, 1), 
(22, 42, 1), 
(22, 43, 1), 
(22, 44, 1), 
(22, 45, 1), 
(22, 46, 1), 
(22, 47, 1), 
(22, 48, 1), 
(22, 49, 1), 
(22, 50, 1), 
(22, 51, 1), 
(22, 52, 1), 
(22, 53, 1), 
(22, 54, 1), 
(22, 55, 1), 
(22, 56, 1), 
(22, 57, 1), 
(22, 58, 1), 
(22, 59, 1), 
(22, 60, 1), 
(22, 61, 1), 
(22, 62, 1), 
(22, 63, 1), 
(22, 64, 1), 
(22, 65, 1), 
(23, 1, 2), 
(23, 2, 2), 
(23, 3, 2), 
(23, 4, 2), 
(23, 5, 2), 
(23, 6, 2), 
(23, 7, 2), 
(23, 8, 2), 
(23, 9, 2), 
(23, 10, 2), 
(23, 11, 2), 
(23, 12, 2), 
(23, 13, 2), 
(23, 14, 2), 
(23, 15, 2), 
(23, 16, 2), 
(23, 17, 2), 
(23, 18, 2), 
(23, 19, 2), 
(23, 20, 2), 
(23, 21, 2), 
(23, 22, 2), 
(23, 23, 2), 
(23, 24, 2), 
(23, 25, 2), 
(23, 26, 2), 
(23, 27, 2), 
(23, 28, 2), 
(23, 29, 2), 
(23, 30, 2), 
(23, 31, 2), 
(23, 32, 2), 
(23, 33, 2), 
(23, 34, 2), 
(23, 35, 2), 
(23, 36, 2), 
(23, 37, 2), 
(23, 38, 2), 
(23, 39, 2), 
(23, 40, 2), 
(23, 41, 2), 
(23, 42, 2), 
(23, 43, 2), 
(23, 44, 2), 
(23, 45, 2), 
(23, 46, 2), 
(23, 47, 2), 
(23, 48, 2), 
(23, 49, 2), 
(23, 50, 2), 
(23, 51, 2), 
(23, 52, 2), 
(23, 53, 2), 
(23, 54, 2), 
(23, 55, 2), 
(23, 56, 2), 
(23, 57, 2), 
(23, 58, 2), 
(23, 59, 2), 
(23, 60, 2), 
(23, 61, 2), 
(23, 62, 2), 
(23, 63, 2), 
(23, 64, 2), 
(23, 65, 2), 
(24, 1, 1), 
(24, 2, 1), 
(24, 3, 1), 
(24, 4, 1), 
(24, 5, 1), 
(24, 6, 1), 
(24, 7, 1), 
(24, 8, 1), 
(24, 9, 1), 
(24, 10, 1), 
(24, 11, 1), 
(24, 12, 1), 
(24, 13, 1), 
(24, 14, 1), 
(24, 15, 1), 
(24, 16, 1), 
(24, 17, 1), 
(24, 18, 1), 
(24, 19, 1), 
(24, 20, 1), 
(24, 21, 1), 
(24, 22, 1), 
(24, 23, 1), 
(24, 24, 1), 
(24, 25, 1), 
(24, 26, 1), 
(24, 27, 1), 
(24, 28, 1), 
(24, 29, 1), 
(24, 30, 1), 
(24, 31, 1), 
(24, 32, 1), 
(24, 33, 1), 
(24, 34, 1), 
(24, 35, 1), 
(24, 36, 1), 
(24, 37, 1), 
(24, 38, 1), 
(24, 39, 1), 
(24, 40, 1), 
(24, 41, 1), 
(24, 42, 1), 
(24, 43, 1), 
(24, 44, 1), 
(24, 45, 1), 
(24, 46, 1), 
(24, 47, 1), 
(24, 48, 1), 
(24, 49, 1), 
(24, 50, 1), 
(24, 51, 1), 
(24, 52, 1), 
(24, 53, 1), 
(24, 54, 1), 
(24, 55, 1), 
(24, 56, 1), 
(24, 57, 1), 
(24, 58, 1), 
(24, 59, 1), 
(24, 60, 1), 
(24, 61, 1), 
(24, 62, 1), 
(24, 63, 1), 
(24, 64, 1), 
(24, 65, 1), 
(25, 1, 2), 
(25, 2, 2), 
(25, 3, 2), 
(25, 4, 2), 
(25, 5, 2), 
(25, 6, 2), 
(25, 7, 2), 
(25, 8, 2), 
(25, 9, 2), 
(25, 10, 2), 
(25, 11, 2), 
(25, 12, 2), 
(25, 13, 2), 
(25, 14, 2), 
(25, 15, 2), 
(25, 16, 2), 
(25, 17, 2), 
(25, 18, 2), 
(25, 19, 2), 
(25, 20, 2), 
(25, 21, 2), 
(25, 22, 2), 
(25, 23, 2), 
(25, 24, 2), 
(25, 25, 2), 
(25, 26, 2), 
(25, 27, 2), 
(25, 28, 2), 
(25, 29, 2), 
(25, 30, 2), 
(25, 31, 2), 
(25, 32, 2), 
(25, 33, 2), 
(25, 34, 2), 
(25, 35, 2), 
(25, 36, 2), 
(25, 37, 2), 
(25, 38, 2), 
(25, 39, 2), 
(25, 40, 2), 
(25, 41, 2), 
(25, 42, 2), 
(25, 43, 2), 
(25, 44, 2), 
(25, 45, 2), 
(25, 46, 2), 
(25, 47, 2), 
(25, 48, 2), 
(25, 49, 2), 
(25, 50, 2), 
(25, 51, 2), 
(25, 52, 2), 
(25, 53, 2), 
(25, 54, 2), 
(25, 55, 2), 
(25, 56, 2), 
(25, 57, 2), 
(25, 58, 2), 
(25, 59, 2), 
(25, 60, 2), 
(25, 61, 2), 
(25, 62, 2), 
(25, 63, 2), 
(25, 64, 2), 
(25, 65, 2), 
(26, 1, 3), 
(26, 2, 3), 
(26, 3, 3), 
(26, 4, 3), 
(26, 5, 3), 
(26, 6, 3), 
(26, 7, 3), 
(26, 8, 3), 
(26, 9, 3), 
(26, 10, 3), 
(26, 11, 3), 
(26, 12, 3), 
(26, 13, 3), 
(26, 14, 3), 
(26, 15, 3), 
(26, 16, 3), 
(26, 17, 3), 
(26, 18, 3), 
(26, 19, 3), 
(26, 20, 3), 
(26, 21, 3), 
(26, 22, 3), 
(26, 23, 3), 
(26, 24, 3), 
(26, 25, 3), 
(26, 26, 3), 
(26, 27, 3), 
(26, 28, 3), 
(26, 29, 3), 
(26, 30, 3), 
(26, 31, 3), 
(26, 32, 3), 
(26, 33, 3), 
(26, 34, 3), 
(26, 35, 3), 
(26, 36, 3), 
(26, 37, 3), 
(26, 38, 3), 
(26, 39, 3), 
(26, 40, 3), 
(26, 41, 3), 
(26, 42, 3), 
(26, 43, 3), 
(26, 44, 3), 
(26, 45, 3), 
(26, 46, 3), 
(26, 47, 3), 
(26, 48, 3), 
(26, 49, 3), 
(26, 50, 3), 
(26, 51, 3), 
(26, 52, 3), 
(26, 53, 3), 
(26, 54, 3), 
(26, 55, 3), 
(26, 56, 3), 
(26, 57, 3), 
(26, 58, 3), 
(26, 59, 3), 
(26, 60, 3), 
(26, 61, 3), 
(26, 62, 3), 
(26, 63, 3), 
(26, 64, 3), 
(26, 65, 3), 
(27, 1, 4), 
(27, 2, 4), 
(27, 3, 4), 
(27, 4, 4), 
(27, 5, 4), 
(27, 6, 4), 
(27, 7, 4), 
(27, 8, 4), 
(27, 9, 4), 
(27, 10, 4), 
(27, 11, 4), 
(27, 12, 4), 
(27, 13, 4), 
(27, 14, 4), 
(27, 15, 4), 
(27, 16, 4), 
(27, 17, 4), 
(27, 18, 4), 
(27, 19, 4), 
(27, 20, 4), 
(27, 21, 4), 
(27, 22, 4), 
(27, 23, 4), 
(27, 24, 4), 
(27, 25, 4), 
(27, 26, 4), 
(27, 27, 4), 
(27, 28, 4), 
(27, 29, 4), 
(27, 30, 4), 
(27, 31, 4), 
(27, 32, 4), 
(27, 33, 4), 
(27, 34, 4), 
(27, 35, 4), 
(27, 36, 4), 
(27, 37, 4), 
(27, 38, 4), 
(27, 39, 4), 
(27, 40, 4), 
(27, 41, 4), 
(27, 42, 4), 
(27, 43, 4), 
(27, 44, 4), 
(27, 45, 4), 
(27, 46, 4), 
(27, 47, 4), 
(27, 48, 4), 
(27, 49, 4), 
(27, 50, 4), 
(27, 51, 4), 
(27, 52, 4), 
(27, 53, 4), 
(27, 54, 4), 
(27, 55, 4), 
(27, 56, 4), 
(27, 57, 4), 
(27, 58, 4), 
(27, 59, 4), 
(27, 60, 4), 
(27, 61, 4), 
(27, 62, 4), 
(27, 63, 4), 
(27, 64, 4), 
(27, 65, 4), 
(28, 1, 1), 
(28, 2, 1), 
(28, 3, 1), 
(28, 4, 1), 
(28, 5, 1), 
(28, 6, 1), 
(28, 7, 1), 
(28, 8, 1), 
(28, 9, 1), 
(28, 10, 1), 
(28, 11, 1), 
(28, 12, 1), 
(28, 13, 1), 
(28, 14, 1), 
(28, 15, 1), 
(28, 16, 1), 
(28, 17, 1), 
(28, 18, 1), 
(28, 19, 1), 
(28, 20, 1), 
(28, 21, 1), 
(28, 22, 1), 
(28, 23, 1), 
(28, 24, 1), 
(28, 25, 1), 
(28, 26, 1), 
(28, 27, 1), 
(28, 28, 1), 
(28, 29, 1), 
(28, 30, 1), 
(28, 31, 1), 
(28, 32, 1), 
(28, 33, 1), 
(28, 34, 1), 
(28, 35, 1), 
(28, 36, 1), 
(28, 37, 1), 
(28, 38, 1), 
(28, 39, 1), 
(28, 40, 1), 
(28, 41, 1), 
(28, 42, 1), 
(28, 43, 1), 
(28, 44, 1), 
(28, 45, 1), 
(28, 46, 1), 
(28, 47, 1), 
(28, 48, 1), 
(28, 49, 1), 
(28, 50, 1), 
(28, 51, 1), 
(28, 52, 1), 
(28, 53, 1), 
(28, 54, 1), 
(28, 55, 1), 
(28, 56, 1), 
(28, 57, 1), 
(28, 58, 1), 
(28, 59, 1), 
(28, 60, 1), 
(28, 61, 1), 
(28, 62, 1), 
(28, 63, 1), 
(28, 64, 1), 
(28, 65, 1), 
(29, 1, 1), 
(29, 2, 1), 
(29, 3, 1), 
(29, 4, 1), 
(29, 5, 1), 
(29, 6, 1), 
(29, 7, 1), 
(29, 8, 1), 
(29, 9, 1), 
(29, 10, 1), 
(29, 11, 1), 
(29, 12, 1), 
(29, 13, 1), 
(29, 14, 1), 
(29, 15, 1), 
(29, 16, 1), 
(29, 17, 1), 
(29, 18, 1), 
(29, 19, 1), 
(29, 20, 1), 
(29, 21, 1), 
(29, 22, 1), 
(29, 23, 1), 
(29, 24, 1), 
(29, 25, 1), 
(29, 26, 1), 
(29, 27, 1), 
(29, 28, 1), 
(29, 29, 1), 
(29, 30, 1), 
(29, 31, 1), 
(29, 32, 1), 
(29, 33, 1), 
(29, 34, 1), 
(29, 35, 1), 
(29, 36, 1), 
(29, 37, 1), 
(29, 38, 1), 
(29, 39, 1), 
(29, 40, 1), 
(29, 41, 1), 
(29, 42, 1), 
(29, 43, 1), 
(29, 44, 1), 
(29, 45, 1), 
(29, 46, 1), 
(29, 47, 1), 
(29, 48, 1), 
(29, 49, 1), 
(29, 50, 1), 
(29, 51, 1), 
(29, 52, 1), 
(29, 53, 1), 
(29, 54, 1), 
(29, 55, 1), 
(29, 56, 1), 
(29, 57, 1), 
(29, 58, 1), 
(29, 59, 1), 
(29, 60, 1), 
(29, 61, 1), 
(29, 62, 1), 
(29, 63, 1), 
(29, 64, 1), 
(29, 65, 1), 
(30, 1, 1), 
(30, 2, 1), 
(30, 3, 1), 
(30, 4, 1), 
(30, 5, 1), 
(30, 6, 1), 
(30, 7, 1), 
(30, 8, 1), 
(30, 9, 1), 
(30, 10, 1), 
(30, 11, 1), 
(30, 12, 1), 
(30, 13, 1), 
(30, 14, 1), 
(30, 15, 1), 
(30, 16, 1), 
(30, 17, 1), 
(30, 18, 1), 
(30, 19, 1), 
(30, 20, 1), 
(30, 21, 1), 
(30, 22, 1), 
(30, 23, 1), 
(30, 24, 1), 
(30, 25, 1), 
(30, 26, 1), 
(30, 27, 1), 
(30, 28, 1), 
(30, 29, 1), 
(30, 30, 1), 
(30, 31, 1), 
(30, 32, 1), 
(30, 33, 1), 
(30, 34, 1), 
(30, 35, 1), 
(30, 36, 1), 
(30, 37, 1), 
(30, 38, 1), 
(30, 39, 1), 
(30, 40, 1), 
(30, 41, 1), 
(30, 42, 1), 
(30, 43, 1), 
(30, 44, 1), 
(30, 45, 1), 
(30, 46, 1), 
(30, 47, 1), 
(30, 48, 1), 
(30, 49, 1), 
(30, 50, 1), 
(30, 51, 1), 
(30, 52, 1), 
(30, 53, 1), 
(30, 54, 1), 
(30, 55, 1), 
(30, 56, 1), 
(30, 57, 1), 
(30, 58, 1), 
(30, 59, 1), 
(30, 60, 1), 
(30, 61, 1), 
(30, 62, 1), 
(30, 63, 1), 
(30, 64, 1), 
(30, 65, 1), 
(28, 108, 1), 
(28, 119, 1), 
(28, 110, 1), 
(30, 118, 1), 
(30, 115, 1), 
(30, 109, 1), 
(30, 107, 1), 
(11, 71, 1), 
(11, 73, 1), 
(11, 66, 1), 
(11, 72, 1), 
(11, 67, 1), 
(11, 68, 1), 
(11, 74, 1), 
(17, 71, 1), 
(17, 73, 1), 
(17, 66, 1), 
(17, 72, 1), 
(17, 67, 1), 
(17, 68, 1), 
(17, 74, 1), 
(15, 71, 1), 
(15, 73, 1), 
(15, 66, 1), 
(15, 72, 1), 
(15, 67, 1), 
(15, 68, 1), 
(15, 74, 1), 
(11, 118, 1), 
(11, 115, 1), 
(11, 109, 1), 
(30, 71, 1), 
(30, 73, 1), 
(30, 66, 1), 
(30, 72, 1), 
(30, 67, 1), 
(30, 68, 1), 
(30, 74, 1), 
(28, 71, 1), 
(28, 73, 1), 
(28, 66, 1), 
(28, 72, 1), 
(28, 67, 1), 
(28, 68, 1), 
(28, 74, 1), 
(29, 71, 1), 
(29, 73, 1), 
(29, 66, 1), 
(29, 72, 1), 
(29, 67, 1), 
(29, 68, 1), 
(29, 74, 1), 
(22, 71, 1), 
(22, 73, 1), 
(22, 66, 1), 
(22, 72, 1), 
(22, 67, 1), 
(22, 68, 1), 
(22, 74, 1), 
(23, 71, 2), 
(23, 73, 2), 
(23, 66, 2), 
(23, 72, 2), 
(23, 67, 2), 
(23, 68, 2), 
(23, 74, 2), 
(24, 71, 1), 
(24, 73, 1), 
(24, 66, 1), 
(24, 72, 1), 
(24, 67, 1), 
(24, 68, 1), 
(24, 74, 1), 
(25, 71, 2), 
(25, 73, 2), 
(25, 66, 2), 
(25, 72, 2), 
(25, 67, 2), 
(25, 68, 2), 
(25, 74, 2), 
(26, 71, 3), 
(26, 73, 3), 
(26, 66, 3), 
(26, 72, 3), 
(26, 67, 3), 
(26, 68, 3), 
(26, 74, 3), 
(27, 71, 4), 
(27, 73, 4), 
(27, 66, 4), 
(27, 72, 4), 
(27, 67, 4), 
(27, 68, 4), 
(27, 74, 4), 
(30, 108, 1), 
(30, 119, 1), 
(30, 110, 1), 
(11, 86, 1), 
(11, 102, 1), 
(11, 81, 1), 
(11, 95, 1), 
(11, 77, 1), 
(11, 87, 1), 
(11, 88, 1), 
(11, 84, 1), 
(11, 83, 1), 
(11, 96, 1), 
(11, 79, 1), 
(11, 103, 1), 
(11, 101, 1), 
(11, 89, 1), 
(11, 99, 1), 
(11, 82, 1), 
(11, 76, 1), 
(11, 75, 1), 
(17, 86, 1), 
(17, 102, 1), 
(17, 81, 1), 
(17, 95, 1), 
(17, 77, 1), 
(17, 87, 1), 
(17, 88, 1), 
(17, 84, 1), 
(17, 83, 1), 
(17, 96, 1), 
(17, 79, 1), 
(17, 103, 1), 
(17, 101, 1), 
(17, 89, 1), 
(17, 99, 1), 
(17, 82, 1), 
(17, 76, 1), 
(17, 75, 1), 
(15, 86, 1), 
(15, 102, 1), 
(15, 81, 1), 
(15, 95, 1), 
(15, 77, 1), 
(15, 87, 1), 
(15, 88, 1), 
(15, 84, 1), 
(15, 83, 1), 
(15, 96, 1), 
(15, 79, 1), 
(15, 103, 1), 
(15, 101, 1), 
(15, 89, 1), 
(15, 99, 1), 
(15, 82, 1), 
(15, 76, 1), 
(15, 75, 1), 
(11, 107, 1), 
(11, 108, 1), 
(11, 119, 1), 
(11, 110, 1), 
(30, 86, 1), 
(30, 102, 1), 
(30, 81, 1), 
(30, 95, 1), 
(30, 77, 1), 
(30, 87, 1), 
(30, 88, 1), 
(30, 84, 1), 
(30, 83, 1), 
(30, 96, 1), 
(30, 79, 1), 
(30, 103, 1), 
(30, 101, 1), 
(30, 89, 1), 
(30, 99, 1), 
(30, 82, 1), 
(30, 76, 1), 
(30, 75, 1), 
(28, 86, 1), 
(28, 102, 1), 
(28, 81, 1), 
(28, 95, 1), 
(28, 77, 1), 
(28, 87, 1), 
(28, 88, 1), 
(28, 84, 1), 
(28, 83, 1), 
(28, 96, 1), 
(28, 79, 1), 
(28, 103, 1), 
(28, 101, 1), 
(28, 89, 1), 
(28, 99, 1), 
(28, 82, 1), 
(28, 76, 1), 
(28, 75, 1), 
(29, 86, 1), 
(29, 102, 1), 
(29, 81, 1), 
(29, 95, 1), 
(29, 77, 1), 
(29, 87, 1), 
(29, 88, 1), 
(29, 84, 1), 
(29, 83, 1), 
(29, 96, 1), 
(29, 79, 1), 
(29, 103, 1), 
(29, 101, 1), 
(29, 89, 1), 
(29, 99, 1), 
(29, 82, 1), 
(29, 76, 1), 
(29, 75, 1), 
(22, 86, 1), 
(22, 102, 1), 
(22, 81, 1), 
(22, 95, 1), 
(22, 77, 1), 
(22, 87, 1), 
(22, 88, 1), 
(22, 84, 1), 
(22, 83, 1), 
(22, 96, 1), 
(22, 79, 1), 
(22, 103, 1), 
(22, 101, 1), 
(22, 89, 1), 
(22, 99, 1), 
(22, 82, 1), 
(22, 76, 1), 
(22, 75, 1), 
(23, 86, 2), 
(23, 102, 2), 
(23, 81, 2), 
(23, 95, 2), 
(23, 77, 2), 
(23, 87, 2), 
(23, 88, 2), 
(23, 84, 2), 
(23, 83, 2), 
(23, 96, 2), 
(23, 79, 2), 
(23, 103, 2), 
(23, 101, 2), 
(23, 89, 2), 
(23, 99, 2), 
(23, 82, 2), 
(23, 76, 2), 
(23, 75, 2), 
(24, 86, 1), 
(24, 102, 1), 
(24, 81, 1), 
(24, 95, 1), 
(24, 77, 1), 
(24, 87, 1), 
(24, 88, 1), 
(24, 84, 1), 
(24, 83, 1), 
(24, 96, 1), 
(24, 79, 1), 
(24, 103, 1), 
(24, 101, 1), 
(24, 89, 1), 
(24, 99, 1), 
(24, 82, 1), 
(24, 76, 1), 
(24, 75, 1), 
(25, 86, 2), 
(25, 102, 2), 
(25, 81, 2), 
(25, 95, 2), 
(25, 77, 2), 
(25, 87, 2), 
(25, 88, 2), 
(25, 84, 2), 
(25, 83, 2), 
(25, 96, 2), 
(25, 79, 2), 
(25, 103, 2), 
(25, 101, 2), 
(25, 89, 2), 
(25, 99, 2), 
(25, 82, 2), 
(25, 76, 2), 
(25, 75, 2), 
(26, 86, 3), 
(26, 102, 3), 
(26, 81, 3), 
(26, 95, 3), 
(26, 77, 3), 
(26, 87, 3), 
(26, 88, 3), 
(26, 84, 3), 
(26, 83, 3), 
(26, 96, 3), 
(26, 79, 3), 
(26, 103, 3), 
(26, 101, 3), 
(26, 89, 3), 
(26, 99, 3), 
(26, 82, 3), 
(26, 76, 3), 
(26, 75, 3), 
(27, 86, 4), 
(27, 102, 4), 
(27, 81, 4), 
(27, 95, 4), 
(27, 77, 4), 
(27, 87, 4), 
(27, 88, 4), 
(27, 84, 4), 
(27, 83, 4), 
(27, 96, 4), 
(27, 79, 4), 
(27, 103, 4), 
(27, 101, 4), 
(27, 89, 4), 
(27, 99, 4), 
(27, 82, 4), 
(27, 76, 4), 
(27, 75, 4), 
(31, 106, 1), 
(31, 86, 1), 
(31, 102, 1), 
(31, 81, 1), 
(31, 95, 1), 
(31, 77, 1), 
(31, 87, 1), 
(31, 88, 1), 
(31, 84, 1), 
(31, 83, 1), 
(31, 96, 1), 
(31, 79, 1), 
(31, 103, 1), 
(31, 101, 1), 
(31, 89, 1), 
(31, 99, 1), 
(31, 82, 1), 
(31, 76, 1), 
(31, 75, 1), 
(31, 1, 1), 
(31, 3, 1), 
(31, 110, 1), 
(31, 119, 1), 
(31, 108, 1), 
(31, 107, 1), 
(31, 109, 1), 
(31, 115, 1), 
(31, 118, 1), 
(31, 71, 1), 
(31, 73, 1), 
(31, 66, 1), 
(31, 72, 1), 
(31, 67, 1), 
(31, 68, 1), 
(31, 74, 1), 
(31, 4, 1), 
(31, 5, 1), 
(31, 6, 1), 
(31, 12, 1), 
(31, 13, 1), 
(31, 8, 1), 
(31, 11, 1), 
(31, 7, 1), 
(31, 9, 1), 
(31, 10, 1), 
(31, 20, 1), 
(31, 21, 1), 
(31, 22, 1), 
(31, 23, 1), 
(31, 24, 1), 
(31, 25, 1), 
(31, 26, 1), 
(31, 27, 1), 
(31, 28, 1), 
(31, 29, 1), 
(31, 30, 1), 
(31, 32, 1), 
(31, 33, 1), 
(31, 34, 1), 
(31, 35, 1), 
(31, 36, 1), 
(31, 37, 1), 
(31, 38, 1), 
(31, 39, 1), 
(31, 41, 1), 
(31, 42, 1), 
(31, 43, 1), 
(31, 44, 1), 
(31, 50, 1), 
(31, 51, 1), 
(31, 52, 1), 
(31, 55, 1), 
(31, 56, 1), 
(31, 57, 1), 
(31, 58, 1), 
(31, 59, 1), 
(31, 63, 1), 
(31, 64, 1), 
(31, 65, 1), 
(32, 106, 1), 
(32, 86, 1), 
(32, 102, 1), 
(32, 81, 1), 
(32, 95, 1), 
(32, 77, 1), 
(32, 87, 1), 
(32, 88, 1), 
(32, 84, 1), 
(32, 83, 1), 
(32, 96, 1), 
(32, 79, 1), 
(32, 103, 1), 
(32, 101, 1), 
(32, 89, 1), 
(32, 99, 1), 
(32, 82, 1), 
(32, 76, 1), 
(32, 75, 1), 
(32, 110, 1), 
(32, 119, 1), 
(32, 108, 1), 
(32, 107, 1), 
(32, 109, 1), 
(32, 115, 1), 
(32, 118, 1), 
(32, 71, 1), 
(32, 73, 1), 
(32, 66, 1), 
(32, 72, 1), 
(32, 67, 1), 
(32, 68, 1), 
(32, 74, 1), 
(32, 20, 1), 
(32, 21, 1), 
(32, 22, 1), 
(32, 23, 1), 
(32, 24, 1), 
(32, 25, 1), 
(32, 26, 1), 
(32, 27, 1), 
(32, 28, 1), 
(32, 29, 1), 
(32, 30, 1), 
(32, 32, 1), 
(32, 33, 1), 
(32, 34, 1), 
(32, 35, 1), 
(32, 36, 1), 
(32, 37, 1), 
(32, 38, 1), 
(32, 39, 1), 
(32, 41, 1), 
(32, 42, 1), 
(32, 43, 1), 
(32, 44, 1), 
(32, 50, 1), 
(32, 51, 1), 
(32, 52, 1), 
(32, 55, 1), 
(32, 56, 1), 
(32, 57, 1), 
(32, 58, 1), 
(32, 59, 1), 
(32, 63, 1), 
(32, 64, 1), 
(32, 65, 1), 
(33, 106, 1), 
(33, 86, 1), 
(33, 102, 1), 
(33, 81, 1), 
(33, 95, 1), 
(33, 77, 1), 
(33, 87, 1), 
(33, 88, 1), 
(33, 84, 1), 
(33, 83, 1), 
(33, 96, 1), 
(33, 79, 1), 
(33, 103, 1), 
(33, 101, 1), 
(33, 89, 1), 
(33, 99, 1), 
(33, 82, 1), 
(33, 76, 1), 
(33, 75, 1), 
(33, 1, 1), 
(33, 3, 1), 
(33, 110, 1), 
(33, 119, 1), 
(33, 108, 1), 
(33, 107, 1), 
(33, 109, 1), 
(33, 115, 1), 
(33, 118, 1), 
(33, 71, 1), 
(33, 73, 1), 
(33, 66, 1), 
(33, 72, 1), 
(33, 67, 1), 
(33, 68, 1), 
(33, 74, 1), 
(33, 4, 1), 
(33, 5, 1), 
(33, 6, 1), 
(33, 12, 1), 
(33, 13, 1), 
(33, 8, 1), 
(33, 11, 1), 
(33, 7, 1), 
(33, 9, 1), 
(33, 10, 1), 
(33, 20, 1), 
(33, 21, 1), 
(33, 22, 1), 
(33, 23, 1), 
(33, 24, 1), 
(33, 25, 1), 
(33, 26, 1), 
(33, 27, 1), 
(33, 28, 1), 
(33, 29, 1), 
(33, 30, 1), 
(33, 32, 1), 
(33, 33, 1), 
(33, 34, 1), 
(33, 35, 1), 
(33, 36, 1), 
(33, 37, 1), 
(33, 38, 1), 
(33, 39, 1), 
(33, 41, 1), 
(33, 42, 1), 
(33, 43, 1), 
(33, 44, 1), 
(33, 50, 1), 
(33, 51, 1), 
(33, 52, 1), 
(33, 55, 1), 
(33, 56, 1), 
(33, 57, 1), 
(33, 58, 1), 
(33, 59, 1), 
(33, 63, 1), 
(33, 64, 1), 
(33, 65, 1), 
(34, 106, 1), 
(34, 86, 1), 
(34, 102, 1), 
(34, 81, 1), 
(34, 95, 1), 
(34, 77, 1), 
(34, 87, 1), 
(34, 88, 1), 
(34, 84, 1), 
(34, 83, 1), 
(34, 96, 1), 
(34, 79, 1), 
(34, 103, 1), 
(34, 101, 1), 
(34, 89, 1), 
(34, 99, 1), 
(34, 82, 1), 
(34, 76, 1), 
(34, 75, 1), 
(34, 110, 1), 
(34, 119, 1), 
(34, 108, 1), 
(34, 107, 1), 
(34, 109, 1), 
(34, 115, 1), 
(34, 118, 1), 
(34, 71, 1), 
(34, 73, 1), 
(34, 66, 1), 
(34, 72, 1), 
(34, 67, 1), 
(34, 68, 1), 
(34, 74, 1), 
(34, 20, 1), 
(34, 21, 1), 
(34, 22, 1), 
(34, 23, 1), 
(34, 24, 1), 
(34, 25, 1), 
(34, 26, 1), 
(34, 27, 1), 
(34, 28, 1), 
(34, 29, 1), 
(34, 30, 1), 
(34, 32, 1), 
(34, 33, 1), 
(34, 34, 1), 
(34, 35, 1), 
(34, 36, 1), 
(34, 37, 1), 
(34, 38, 1), 
(34, 39, 1), 
(34, 41, 1), 
(34, 42, 1), 
(34, 43, 1), 
(34, 44, 1), 
(34, 50, 1), 
(34, 51, 1), 
(34, 52, 1), 
(34, 55, 1), 
(34, 56, 1), 
(34, 57, 1), 
(34, 58, 1), 
(34, 59, 1), 
(34, 63, 1), 
(34, 64, 1), 
(34, 65, 1), 
(35, 106, 2), 
(35, 86, 2), 
(35, 102, 2), 
(35, 81, 2), 
(35, 95, 2), 
(35, 77, 2), 
(35, 87, 2), 
(35, 88, 2), 
(35, 84, 2), 
(35, 83, 2), 
(35, 96, 2), 
(35, 79, 2), 
(35, 103, 2), 
(35, 101, 2), 
(35, 89, 2), 
(35, 99, 2), 
(35, 82, 2), 
(35, 76, 2), 
(35, 75, 2), 
(35, 1, 2), 
(35, 3, 2), 
(35, 110, 2), 
(35, 119, 2), 
(35, 108, 2), 
(35, 107, 2), 
(35, 109, 2), 
(35, 115, 2), 
(35, 118, 2), 
(35, 71, 2), 
(35, 73, 2), 
(35, 66, 2), 
(35, 72, 2), 
(35, 67, 2), 
(35, 68, 2), 
(35, 74, 2), 
(35, 4, 2), 
(35, 5, 2), 
(35, 6, 2), 
(35, 12, 2), 
(35, 13, 2), 
(35, 8, 2), 
(35, 11, 2), 
(35, 7, 2), 
(35, 9, 2), 
(35, 10, 2), 
(35, 20, 2), 
(35, 21, 2), 
(35, 22, 2), 
(35, 23, 2), 
(35, 24, 2), 
(35, 25, 2), 
(35, 26, 2), 
(35, 27, 2), 
(35, 28, 2), 
(35, 29, 2), 
(35, 30, 2), 
(35, 32, 2), 
(35, 33, 2), 
(35, 34, 2), 
(35, 35, 2), 
(35, 36, 2), 
(35, 37, 2), 
(35, 38, 2), 
(35, 39, 2), 
(35, 41, 2), 
(35, 42, 2), 
(35, 43, 2), 
(35, 44, 2), 
(35, 50, 2), 
(35, 51, 2), 
(35, 52, 2), 
(35, 55, 2), 
(35, 56, 2), 
(35, 57, 2), 
(35, 58, 2), 
(35, 59, 2), 
(35, 63, 2), 
(35, 64, 2), 
(35, 65, 2), 
(36, 106, 1), 
(36, 86, 1), 
(36, 102, 1), 
(36, 81, 1), 
(36, 95, 1), 
(36, 77, 1), 
(36, 87, 1), 
(36, 88, 1), 
(36, 84, 1), 
(36, 83, 1), 
(36, 96, 1), 
(36, 79, 1), 
(36, 103, 1), 
(36, 101, 1), 
(36, 89, 1), 
(36, 99, 1), 
(36, 82, 1), 
(36, 76, 1), 
(36, 75, 1), 
(36, 1, 1), 
(36, 3, 1), 
(36, 110, 1), 
(36, 119, 1), 
(36, 108, 1), 
(36, 107, 1), 
(36, 109, 1), 
(36, 115, 1), 
(36, 118, 1), 
(36, 71, 1), 
(36, 73, 1), 
(36, 66, 1), 
(36, 72, 1), 
(36, 67, 1), 
(36, 68, 1), 
(36, 74, 1), 
(36, 4, 1), 
(36, 5, 1), 
(36, 6, 1), 
(36, 12, 1), 
(36, 13, 1), 
(36, 8, 1), 
(36, 11, 1), 
(36, 7, 1), 
(36, 9, 1), 
(36, 10, 1), 
(36, 20, 1), 
(36, 21, 1), 
(36, 22, 1), 
(36, 23, 1), 
(36, 24, 1), 
(36, 25, 1), 
(36, 26, 1), 
(36, 27, 1), 
(36, 28, 1), 
(36, 29, 1), 
(36, 30, 1), 
(36, 32, 1), 
(36, 33, 1), 
(36, 34, 1), 
(36, 35, 1), 
(36, 36, 1), 
(36, 37, 1), 
(36, 38, 1), 
(36, 39, 1), 
(36, 41, 1), 
(36, 42, 1), 
(36, 43, 1), 
(36, 44, 1), 
(36, 50, 1), 
(36, 51, 1), 
(36, 52, 1), 
(36, 55, 1), 
(36, 56, 1), 
(36, 57, 1), 
(36, 58, 1), 
(36, 59, 1), 
(36, 63, 1), 
(36, 64, 1), 
(36, 65, 1), 
(37, 106, 4), 
(37, 86, 4), 
(37, 102, 4), 
(37, 81, 4), 
(37, 95, 4), 
(37, 77, 4), 
(37, 87, 4), 
(37, 88, 4), 
(37, 84, 4), 
(37, 83, 4), 
(37, 96, 4), 
(37, 79, 4), 
(37, 103, 4), 
(37, 101, 4), 
(37, 89, 4), 
(37, 99, 4), 
(37, 82, 4), 
(37, 76, 4), 
(37, 75, 4), 
(37, 1, 4), 
(37, 3, 4), 
(37, 110, 4), 
(37, 119, 4), 
(37, 108, 4), 
(37, 107, 4), 
(37, 109, 4), 
(37, 115, 4), 
(37, 118, 4), 
(37, 71, 4), 
(37, 73, 4), 
(37, 66, 4), 
(37, 72, 4), 
(37, 67, 4), 
(37, 68, 4), 
(37, 74, 4), 
(37, 4, 3), 
(37, 5, 3), 
(37, 6, 3), 
(37, 12, 3), 
(37, 13, 3), 
(37, 8, 3), 
(37, 11, 3), 
(37, 7, 3), 
(37, 9, 3), 
(37, 10, 3), 
(37, 20, 4), 
(37, 21, 4), 
(37, 22, 4), 
(37, 23, 4), 
(37, 24, 4), 
(37, 25, 4), 
(37, 26, 4), 
(37, 27, 4), 
(37, 28, 4), 
(37, 29, 4), 
(37, 30, 4), 
(37, 32, 4), 
(37, 33, 4), 
(37, 34, 4), 
(37, 35, 4), 
(37, 36, 4), 
(37, 37, 4), 
(37, 38, 4), 
(37, 39, 4), 
(37, 41, 4), 
(37, 42, 4), 
(37, 43, 4), 
(37, 44, 4), 
(37, 50, 4), 
(37, 51, 4), 
(37, 52, 4), 
(37, 55, 4), 
(37, 56, 4), 
(37, 57, 4), 
(37, 58, 4), 
(37, 59, 4), 
(37, 63, 4), 
(37, 64, 4), 
(37, 65, 4), 
(11, 106, 1), 
(15, 106, 1), 
(31, 120, 1), 
(31, 121, 1), 
(11, 120, 1), 
(11, 121, 1), 
(34, 120, 1), 
(34, 121, 1), 
(17, 120, 1), 
(17, 121, 1), 
(32, 120, 1), 
(32, 121, 1), 
(15, 120, 1), 
(15, 121, 1), 
(36, 120, 1), 
(36, 121, 1), 
(35, 120, 2), 
(35, 121, 2), 
(37, 120, 4), 
(37, 121, 4), 
(33, 120, 1), 
(33, 121, 1), 
(30, 120, 1), 
(30, 121, 1), 
(28, 120, 1), 
(28, 121, 1), 
(29, 120, 1), 
(29, 121, 1), 
(22, 120, 1), 
(22, 121, 1), 
(23, 120, 2), 
(23, 121, 2), 
(24, 120, 1), 
(24, 121, 1), 
(25, 120, 2), 
(25, 121, 2), 
(26, 120, 3), 
(26, 121, 3), 
(27, 120, 4), 
(27, 121, 4), 
(38, 106, 1), 
(38, 86, 1), 
(38, 102, 1), 
(38, 81, 1), 
(38, 95, 1), 
(38, 77, 1), 
(38, 87, 1), 
(38, 88, 1), 
(38, 84, 1), 
(38, 83, 1), 
(38, 96, 1), 
(38, 79, 1), 
(38, 103, 1), 
(38, 101, 1), 
(38, 89, 1), 
(38, 99, 1), 
(38, 82, 1), 
(38, 76, 1), 
(38, 75, 1), 
(38, 120, 1), 
(38, 121, 1), 
(38, 110, 1), 
(38, 119, 1), 
(38, 108, 1), 
(38, 107, 1), 
(38, 109, 1), 
(38, 115, 1), 
(38, 118, 1), 
(38, 71, 1), 
(38, 73, 1), 
(38, 66, 1), 
(38, 72, 1), 
(38, 67, 1), 
(38, 68, 1), 
(38, 74, 1), 
(38, 20, 1), 
(38, 21, 1), 
(38, 22, 1), 
(38, 23, 1), 
(38, 24, 1), 
(38, 25, 1), 
(38, 26, 1), 
(38, 27, 1), 
(38, 28, 1), 
(38, 29, 1), 
(38, 30, 1), 
(38, 32, 1), 
(38, 33, 1), 
(38, 34, 1), 
(38, 35, 1), 
(38, 36, 1), 
(38, 37, 1), 
(38, 38, 1), 
(38, 39, 1), 
(38, 41, 1), 
(38, 42, 1), 
(38, 43, 1), 
(38, 44, 1), 
(38, 50, 1), 
(38, 51, 1), 
(38, 52, 1), 
(38, 55, 1), 
(38, 56, 1), 
(38, 57, 1), 
(38, 58, 1), 
(38, 59, 1), 
(38, 63, 1), 
(38, 64, 1), 
(38, 65, 1), 
(39, 106, 1), 
(39, 86, 1), 
(39, 102, 1), 
(39, 81, 1), 
(39, 95, 1), 
(39, 77, 1), 
(39, 87, 1), 
(39, 88, 1), 
(39, 84, 1), 
(39, 83, 1), 
(39, 96, 1), 
(39, 79, 1), 
(39, 103, 1), 
(39, 101, 1), 
(39, 89, 1), 
(39, 99, 1), 
(39, 82, 1), 
(39, 76, 1), 
(39, 75, 1), 
(39, 120, 1), 
(39, 121, 1), 
(39, 1, 1), 
(39, 3, 1), 
(39, 110, 1), 
(39, 119, 1), 
(39, 108, 1), 
(39, 107, 1), 
(39, 109, 1), 
(39, 115, 1), 
(39, 118, 1), 
(39, 71, 1), 
(39, 73, 1), 
(39, 66, 1), 
(39, 72, 1), 
(39, 67, 1), 
(39, 68, 1), 
(39, 74, 1), 
(39, 20, 1), 
(39, 21, 1), 
(39, 22, 1), 
(39, 23, 1), 
(39, 24, 1), 
(39, 25, 1), 
(39, 26, 1), 
(39, 27, 1), 
(39, 28, 1), 
(39, 29, 1), 
(39, 30, 1), 
(39, 32, 1), 
(39, 33, 1), 
(39, 34, 1), 
(39, 35, 1), 
(39, 36, 1), 
(39, 37, 1), 
(39, 38, 1), 
(39, 39, 1), 
(39, 41, 1), 
(39, 42, 1), 
(39, 43, 1), 
(39, 44, 1), 
(39, 50, 1), 
(39, 51, 1), 
(39, 52, 1), 
(39, 55, 1), 
(39, 56, 1), 
(39, 57, 1), 
(39, 58, 1), 
(39, 59, 1), 
(39, 63, 1), 
(39, 64, 1), 
(39, 65, 1), 
(40, 106, 1), 
(40, 86, 1), 
(40, 102, 1), 
(40, 81, 1), 
(40, 95, 1), 
(40, 77, 1), 
(40, 87, 1), 
(40, 88, 1), 
(40, 84, 1), 
(40, 83, 1), 
(40, 96, 1), 
(40, 79, 1), 
(40, 103, 1), 
(40, 101, 1), 
(40, 89, 1), 
(40, 99, 1), 
(40, 82, 1), 
(40, 76, 1), 
(40, 75, 1), 
(40, 120, 1), 
(40, 121, 1), 
(40, 1, 1), 
(40, 3, 1), 
(40, 110, 1), 
(40, 119, 1), 
(40, 108, 1), 
(40, 107, 1), 
(40, 109, 1), 
(40, 115, 1), 
(40, 118, 1), 
(40, 71, 1), 
(40, 73, 1), 
(40, 66, 1), 
(40, 72, 1), 
(40, 67, 1), 
(40, 68, 1), 
(40, 74, 1), 
(40, 20, 1), 
(40, 21, 1), 
(40, 22, 1), 
(40, 23, 1), 
(40, 24, 1), 
(40, 25, 1), 
(40, 26, 1), 
(40, 27, 1), 
(40, 28, 1), 
(40, 29, 1), 
(40, 30, 1), 
(40, 32, 1), 
(40, 33, 1), 
(40, 34, 1), 
(40, 35, 1), 
(40, 36, 1), 
(40, 37, 1), 
(40, 38, 1), 
(40, 39, 1), 
(40, 41, 1), 
(40, 42, 1), 
(40, 43, 1), 
(40, 44, 1), 
(40, 50, 1), 
(40, 51, 1), 
(40, 52, 1), 
(40, 55, 1), 
(40, 56, 1), 
(40, 57, 1), 
(40, 58, 1), 
(40, 59, 1), 
(40, 63, 1), 
(40, 64, 1), 
(40, 65, 1), 
(41, 106, 1), 
(41, 86, 1), 
(41, 102, 1), 
(41, 81, 1), 
(41, 95, 1), 
(41, 77, 1), 
(41, 87, 1), 
(41, 88, 1), 
(41, 84, 1), 
(41, 83, 1), 
(41, 96, 1), 
(41, 79, 1), 
(41, 103, 1), 
(41, 101, 1), 
(41, 89, 1), 
(41, 99, 1), 
(41, 82, 1), 
(41, 76, 1), 
(41, 75, 1), 
(41, 120, 1), 
(41, 121, 1), 
(41, 1, 1), 
(41, 3, 1), 
(41, 110, 1), 
(41, 119, 1), 
(41, 108, 1), 
(41, 107, 1), 
(41, 109, 1), 
(41, 115, 1), 
(41, 118, 1), 
(41, 71, 1), 
(41, 73, 1), 
(41, 66, 1), 
(41, 72, 1), 
(41, 67, 1), 
(41, 68, 1), 
(41, 74, 1), 
(41, 20, 1), 
(41, 21, 1), 
(41, 22, 1), 
(41, 23, 1), 
(41, 24, 1), 
(41, 25, 1), 
(41, 26, 1), 
(41, 27, 1), 
(41, 28, 1), 
(41, 29, 1), 
(41, 30, 1), 
(41, 32, 1), 
(41, 33, 1), 
(41, 34, 1), 
(41, 35, 1), 
(41, 36, 1), 
(41, 37, 1), 
(41, 38, 1), 
(41, 39, 1), 
(41, 41, 1), 
(41, 42, 1), 
(41, 43, 1), 
(41, 44, 1), 
(41, 50, 1), 
(41, 51, 1), 
(41, 52, 1), 
(41, 55, 1), 
(41, 56, 1), 
(41, 57, 1), 
(41, 58, 1), 
(41, 59, 1), 
(41, 63, 1), 
(41, 64, 1), 
(41, 65, 1), 
(42, 106, 2), 
(42, 86, 2), 
(42, 102, 2), 
(42, 81, 2), 
(42, 95, 2), 
(42, 77, 2), 
(42, 87, 2), 
(42, 88, 2), 
(42, 84, 2), 
(42, 83, 2), 
(42, 96, 2), 
(42, 79, 2), 
(42, 103, 2), 
(42, 101, 2), 
(42, 89, 2), 
(42, 99, 2), 
(42, 82, 2), 
(42, 76, 2), 
(42, 75, 2), 
(42, 120, 2), 
(42, 121, 2), 
(42, 1, 2), 
(42, 3, 2), 
(42, 110, 2), 
(42, 119, 2), 
(42, 108, 2), 
(42, 107, 2), 
(42, 109, 2), 
(42, 115, 2), 
(42, 118, 2), 
(42, 71, 2), 
(42, 73, 2), 
(42, 66, 2), 
(42, 72, 2), 
(42, 67, 2), 
(42, 68, 2), 
(42, 74, 2), 
(42, 20, 2), 
(42, 21, 2), 
(42, 22, 2), 
(42, 23, 2), 
(42, 24, 2), 
(42, 25, 2), 
(42, 26, 2), 
(42, 27, 2), 
(42, 28, 2), 
(42, 29, 2), 
(42, 30, 2), 
(42, 32, 2), 
(42, 33, 2), 
(42, 34, 2), 
(42, 35, 2), 
(42, 36, 2), 
(42, 37, 2), 
(42, 38, 2), 
(42, 39, 2), 
(42, 41, 2), 
(42, 42, 2), 
(42, 43, 2), 
(42, 44, 2), 
(42, 50, 2), 
(42, 51, 2), 
(42, 52, 2), 
(42, 55, 2), 
(42, 56, 2), 
(42, 57, 2), 
(42, 58, 2), 
(42, 59, 2), 
(42, 63, 2), 
(42, 64, 2), 
(42, 65, 2), 
(43, 106, 1), 
(43, 86, 1), 
(43, 102, 1), 
(43, 81, 1), 
(43, 95, 1), 
(43, 77, 1), 
(43, 87, 1), 
(43, 88, 1), 
(43, 84, 1), 
(43, 83, 1), 
(43, 96, 1), 
(43, 79, 1), 
(43, 103, 1), 
(43, 101, 1), 
(43, 89, 1), 
(43, 99, 1), 
(43, 82, 1), 
(43, 76, 1), 
(43, 75, 1), 
(43, 120, 1), 
(43, 121, 1), 
(43, 1, 1), 
(43, 3, 1), 
(43, 110, 1), 
(43, 119, 1), 
(43, 108, 1), 
(43, 107, 1), 
(43, 109, 1), 
(43, 115, 1), 
(43, 118, 1), 
(43, 71, 1), 
(43, 73, 1), 
(43, 66, 1), 
(43, 72, 1), 
(43, 67, 1), 
(43, 68, 1), 
(43, 74, 1), 
(43, 20, 1), 
(43, 21, 1), 
(43, 22, 1), 
(43, 23, 1), 
(43, 24, 1), 
(43, 25, 1), 
(43, 26, 1), 
(43, 27, 1), 
(43, 28, 1), 
(43, 29, 1), 
(43, 30, 1), 
(43, 32, 1), 
(43, 33, 1), 
(43, 34, 1), 
(43, 35, 1), 
(43, 36, 1), 
(43, 37, 1), 
(43, 38, 1), 
(43, 39, 1), 
(43, 41, 1), 
(43, 42, 1), 
(43, 43, 1), 
(43, 44, 1), 
(43, 50, 1), 
(43, 51, 1), 
(43, 52, 1), 
(43, 55, 1), 
(43, 56, 1), 
(43, 57, 1), 
(43, 58, 1), 
(43, 59, 1), 
(43, 63, 1), 
(43, 64, 1), 
(43, 65, 1), 
(44, 106, 1), 
(44, 86, 1), 
(44, 102, 1), 
(44, 81, 1), 
(44, 95, 1), 
(44, 77, 1), 
(44, 87, 1), 
(44, 88, 1), 
(44, 84, 1), 
(44, 83, 1), 
(44, 96, 1), 
(44, 79, 1), 
(44, 103, 1), 
(44, 101, 1), 
(44, 89, 1), 
(44, 99, 1), 
(44, 82, 1), 
(44, 76, 1), 
(44, 75, 1), 
(44, 120, 1), 
(44, 121, 1), 
(44, 1, 1), 
(44, 3, 1), 
(44, 110, 1), 
(44, 119, 1), 
(44, 108, 1), 
(44, 107, 1), 
(44, 109, 1), 
(44, 115, 1), 
(44, 118, 1), 
(44, 71, 1), 
(44, 73, 1), 
(44, 66, 1), 
(44, 72, 1), 
(44, 67, 1), 
(44, 68, 1), 
(44, 74, 1), 
(44, 20, 1), 
(44, 21, 1), 
(44, 22, 1), 
(44, 23, 1), 
(44, 24, 1), 
(44, 25, 1), 
(44, 26, 1), 
(44, 27, 1), 
(44, 28, 1), 
(44, 29, 1), 
(44, 30, 1), 
(44, 32, 1), 
(44, 33, 1), 
(44, 34, 1), 
(44, 35, 1), 
(44, 36, 1), 
(44, 37, 1), 
(44, 38, 1), 
(44, 39, 1), 
(44, 41, 1), 
(44, 42, 1), 
(44, 43, 1), 
(44, 44, 1), 
(44, 50, 1), 
(44, 51, 1), 
(44, 52, 1), 
(44, 55, 1), 
(44, 56, 1), 
(44, 57, 1), 
(44, 58, 1), 
(44, 59, 1), 
(44, 63, 1), 
(44, 64, 1), 
(44, 65, 1), 
(31, 123, 1), 
(31, 124, 1), 
(41, 123, 1), 
(41, 124, 1), 
(42, 123, 2), 
(42, 124, 2), 
(43, 123, 1), 
(43, 124, 1), 
(11, 123, 1), 
(11, 124, 1), 
(32, 123, 1), 
(32, 124, 1), 
(34, 123, 1), 
(34, 124, 1), 
(39, 123, 1), 
(39, 124, 1), 
(40, 123, 1), 
(40, 124, 1), 
(17, 123, 1), 
(17, 124, 1), 
(38, 123, 1), 
(38, 124, 1), 
(15, 123, 1), 
(15, 124, 1), 
(44, 123, 1), 
(44, 124, 1), 
(36, 123, 1), 
(36, 124, 1), 
(35, 123, 2), 
(35, 124, 2), 
(37, 123, 4), 
(37, 124, 4), 
(33, 123, 1), 
(33, 124, 1), 
(30, 123, 1), 
(30, 124, 1), 
(28, 123, 1), 
(28, 124, 1), 
(29, 123, 1), 
(29, 124, 1), 
(22, 123, 1), 
(22, 124, 1), 
(23, 123, 2), 
(23, 124, 2), 
(24, 123, 1), 
(24, 124, 1), 
(25, 123, 2), 
(25, 124, 2), 
(26, 123, 3), 
(26, 124, 3), 
(27, 123, 4), 
(27, 124, 4), 
(32, 127, 1), 
(38, 126, 1), 
(45, 102, 3), 
(45, 81, 3), 
(40, 126, 1), 
(44, 127, 1), 
(17, 127, 1), 
(17, 126, 1), 
(38, 127, 1), 
(15, 126, 1), 
(39, 127, 1), 
(44, 126, 1), 
(34, 126, 1), 
(34, 127, 1), 
(40, 127, 1), 
(39, 126, 1), 
(15, 127, 1), 
(36, 126, 1), 
(36, 127, 1), 
(41, 127, 1), 
(41, 126, 1), 
(43, 127, 1), 
(42, 126, 2), 
(11, 127, 1), 
(32, 126, 1), 
(11, 126, 1), 
(43, 126, 1), 
(42, 127, 2), 
(37, 127, 3), 
(35, 127, 2), 
(30, 126, 1), 
(37, 126, 3), 
(33, 127, 1), 
(33, 126, 1), 
(35, 126, 2), 
(31, 127, 1), 
(31, 126, 1), 
(27, 127, 4), 
(27, 126, 4), 
(26, 127, 3), 
(26, 126, 3), 
(25, 127, 2), 
(25, 126, 2), 
(24, 127, 1), 
(24, 126, 1), 
(23, 127, 2), 
(23, 126, 2), 
(22, 127, 1), 
(22, 126, 1), 
(29, 127, 1), 
(29, 126, 1), 
(28, 127, 1), 
(28, 126, 1), 
(30, 127, 1), 
(31, 129, 1), 
(41, 129, 1), 
(42, 129, 2), 
(43, 129, 1), 
(11, 129, 1), 
(32, 129, 1), 
(34, 129, 1), 
(39, 129, 1), 
(40, 129, 1), 
(17, 129, 1), 
(38, 129, 1), 
(15, 129, 1), 
(44, 129, 1), 
(36, 129, 1), 
(35, 129, 2), 
(37, 129, 3), 
(33, 129, 1), 
(30, 129, 1), 
(28, 129, 1), 
(29, 129, 1), 
(22, 129, 1), 
(23, 129, 2), 
(24, 129, 1), 
(25, 129, 2), 
(26, 129, 3), 
(27, 129, 4);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_comment`
--

DROP TABLE IF EXISTS `tms_vi_comment`;
CREATE TABLE `tms_vi_comment` (
  `cid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(55)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` int(11) NOT NULL DEFAULT 0,
  `id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `pid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `content` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `attach` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_time` int(11) unsigned NOT NULL DEFAULT 0,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `post_name` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_email` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_ip` varchar(39)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `likes` mediumint(9) NOT NULL DEFAULT 0,
  `dislikes` mediumint(9) NOT NULL DEFAULT 0,
  PRIMARY KEY (`cid`),
  KEY `mod_id` (`module`,`area`,`id`),
  KEY `post_time` (`post_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_vi_contact_department`
--

DROP TABLE IF EXISTS `tms_vi_contact_department`;
CREATE TABLE `tms_vi_contact_department` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `phone` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `others` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `cats` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `admins` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `act` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `weight` smallint(5) NOT NULL,
  `is_default` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `full_name` (`full_name`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_contact_department`
--

INSERT INTO `tms_vi_contact_department` VALUES
(1, 'Phòng Chăm sóc khách hàng', 'Cham-soc-khach-hang', '', '(08) 38.000.000[+84838000000]', '08 38.000.001', 'customer@mysite.com', '', 'Bộ phận tiếp nhận và giải quyết các yêu cầu, đề nghị, ý kiến liên quan đến hoạt động chính của doanh nghiệp', '{\"viber\":\"myViber\",\"skype\":\"mySkype\",\"yahoo\":\"myYahoo\"}', 'Tư vấn|Khiếu nại, phản ánh|Đề nghị hợp tác', '1/1/1/0;', 1, 1, 1), 
(2, 'Phòng Kỹ thuật', 'Ky-thuat', '', '(08) 38.000.002[+84838000002]', '08 38.000.003', 'technical@mysite.com', '', 'Bộ phận tiếp nhận và giải quyết các câu hỏi liên quan đến kỹ thuật', '{\"viber\":\"myViber2\",\"skype\":\"mySkype2\",\"yahoo\":\"myYahoo2\"}', 'Thông báo lỗi|Góp ý cải tiến', '1/1/1/0;', 1, 2, 0);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_contact_reply`
--

DROP TABLE IF EXISTS `tms_vi_contact_reply`;
CREATE TABLE `tms_vi_contact_reply` (
  `rid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `reply_content` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply_time` int(11) unsigned NOT NULL DEFAULT 0,
  `reply_aid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`rid`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_vi_contact_send`
--

DROP TABLE IF EXISTS `tms_vi_contact_send`;
CREATE TABLE `tms_vi_contact_send` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cid` smallint(5) unsigned NOT NULL DEFAULT 0,
  `cat` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_time` int(11) unsigned NOT NULL DEFAULT 0,
  `sender_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `sender_name` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_address` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_email` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_phone` varchar(20)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `sender_ip` varchar(39)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `is_read` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `is_reply` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `is_processed` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `processed_by` int(11) unsigned NOT NULL DEFAULT 0,
  `processed_time` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `sender_name` (`sender_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_vi_contact_supporter`
--

DROP TABLE IF EXISTS `tms_vi_contact_supporter`;
CREATE TABLE `tms_vi_contact_supporter` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `departmentid` smallint(5) unsigned NOT NULL,
  `full_name` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `phone` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `others` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `act` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `weight` smallint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_vi_home_config`
--

DROP TABLE IF EXISTS `tms_vi_home_config`;
CREATE TABLE `tms_vi_home_config` (
  `config_name` varchar(30)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_home_config`
--

INSERT INTO `tms_vi_home_config` VALUES
('slider_title_extra', '1'), 
('slider_image_mobile', '1'), 
('company_email', 'info@nuke.vn'), 
('company_hotline', '0967247007'), 
('company_fax', ''), 
('company_responsibility', ''), 
('company_address', 'Số 17 Đường sô 7, KDC Cityland Park Hills, Phường 10, Gò Vấp, TP.Hồ Chí Minh'), 
('company_map', ''), 
('company_regplace', ''), 
('company_name', 'TẬP ĐOÀN TMS HOLDINGS'), 
('company_sortname', ''), 
('company_regcode', ''), 
('facebook', 'https://www.facebook.com/sieusandoitac'), 
('youtube', ''), 
('instagram', ''), 
('twitter', ''), 
('coppyright', '© Bản quyền thuộc Bánh Da Nem Nam Chi'), 
('company_website', 'https://nuke.vn/'), 
('company_hometext', 'Sản phẩm do Bánh Da Nem Nam Chi sản xuất đảm bảo chất lượng an toàn thực phẩm, có truy xuất nguồn gốc thông tin rõ ràng nên người tiêu dùng rất tin tưởng lựa chọn.'), 
('company_phone', '02877777676 - 02477777676'), 
('logofooter', '/uploads/home/footer.png'), 
('bocongthuong', ''), 
('logobocongthuong', '/uploads/home/logosalenoti.png'), 
('messenger', 'https://m.me/sieusandoitac'), 
('zalo', 'https://chat.zalo.me/?phone=0827959595'), 
('whatsapp', ''), 
('skyper', ''), 
('tb1', 'Cảm ơn Anh/Chị đã ghé thăm Bánh Da Nem Nam Chi'), 
('tb2', 'Vui lòng click vào đây để nhận thêm tư vấn!'), 
('tb3', 'Kết nối cùng chúng tôi qua'), 
('tb0', 'Bánh Da Nem Nam Chi  xin chào Anh/Chị!');


-- ---------------------------------------


--
-- Table structure for table `tms_vi_home_slider`
--

DROP TABLE IF EXISTS `tms_vi_home_slider`;
CREATE TABLE `tms_vi_home_slider` (
  `bid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM  AUTO_INCREMENT=9  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_home_slider`
--

INSERT INTO `tms_vi_home_slider` VALUES
(1, 'Slider trang chủ kích thước 1920x600px', '', '', '', 1, 1), 
(3, 'Khách hàng nói về chúng tôi', '', '', 'Chúng tôi trân trọng  những lời khen tặng cũng như đóng góp ý kiến từ những khách hàng đã sử dụng dịch vụ của chúng tôi. Đó chính là động lực để chúng tôi cố gắng hơn nữa,mang đến những  giá trị tốt nhất khi quý khách sử dụng dịch vụ tại Bánh Da Nem Nam Chi', 2, 1);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_home_slider_rows`
--

DROP TABLE IF EXISTS `tms_vi_home_slider_rows`;
CREATE TABLE `tms_vi_home_slider_rows` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `title_extra` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_link` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image_mobile` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT 0,
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=61  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_home_slider_rows`
--

INSERT INTO `tms_vi_home_slider_rows` VALUES
(1, 1, '1', '', '', '', '', 'slider/11.jpg', '', 1623383232, 1, 1), 
(28, 3, 'Quốc Hiệu', 'Nhà Nam Việt', '', 'Đội ngũ tư vấn viên nhiệt tình, tư vấn rõ ràng là điều tôi tâm đắc và hài lòng nhất.Chúc cho doanh nghiệp ngày càng phát triển và vươn xa', '', 'slider/quochieu.png', '', 1626373907, 4, 1), 
(29, 3, 'Anh Phan', 'Siêu Homes', '', '<p>Đội ngũ tư vấn viên nhiệt tình, tư vấn rõ ràng là điều tôi tâm đắc và hài lòng nhất.Chúc cho doanh nghiệp ngày càng phát triển và vươn xa</p>', '', 'slider/anhphan.png', '', 1626373947, 5, 1), 
(5, 3, 'Đình Tứ', 'CTY NAM LONG', '', 'Đội ngũ tư vấn viên nhiệt tình, tư vấn rõ ràng là điều tôi tâm đắc và hài lòng nhất.Chúc cho doanh nghiệp ngày càng phát triển và vươn xa', '', 'slider/dinhtu.png', '', 1623384338, 1, 1), 
(6, 3, 'Nhi Nguyễn', 'NV THU MUA', '', 'Đội ngũ tư vấn viên nhiệt tình, tư vấn rõ ràng là điều tôi tâm đắc và hài lòng nhất.Chúc cho doanh nghiệp ngày càng phát triển và vươn xa', '', 'slider/nhinguyen.png', '', 1623384370, 2, 1), 
(7, 3, 'Phú Lê', 'XNK Phú Lê', '', 'Đội ngũ tư vấn viên nhiệt tình, tư vấn rõ ràng là điều tôi tâm đắc và hài lòng nhất.Chúc cho doanh nghiệp ngày càng phát triển và vươn xa', '', 'slider/phule.png', '', 1623384396, 3, 1);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_home_support`
--

DROP TABLE IF EXISTS `tms_vi_home_support`;
CREATE TABLE `tms_vi_home_support` (
  `bid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_home_support`
--

INSERT INTO `tms_vi_home_support` VALUES
(1, 'Hỗ trợ online', '', 1, 1);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_home_support_rows`
--

DROP TABLE IF EXISTS `tms_vi_home_support_rows`;
CREATE TABLE `tms_vi_home_support_rows` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bid` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `phone` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `zalo` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `skyper` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `addtime` int(11) NOT NULL DEFAULT 0,
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_home_support_rows`
--

INSERT INTO `tms_vi_home_support_rows` VALUES
(1, 1, 'Tư vấn dịch vụ 24/7', '0914.360.810', '0914.360.810', 'https://www.facebook.com/', '0914360810', '0914360810', 'banhdanem.tpht@gmail.com', 'support/support_woman-512_150_150.png', 1615611586, 1, 1), 
(2, 1, 'Phản ánh chất lượng 24/7', '0914360810', '0914360810', 'https://www.facebook.com/', '0914360810', '0914360810', 'banhdanem.tpht@gmail.com', 'support/support_man-512_150_150.png', 1622533675, 2, 1);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_menu`
--

DROP TABLE IF EXISTS `tms_vi_menu`;
CREATE TABLE `tms_vi_menu` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_menu`
--

INSERT INTO `tms_vi_menu` VALUES
(1, 'Top Menu'), 
(2, 'THÔNG TIN'), 
(3, 'QUY ĐỊNH');


-- ---------------------------------------


--
-- Table structure for table `tms_vi_menu_rows`
--

DROP TABLE IF EXISTS `tms_vi_menu_rows`;
CREATE TABLE `tms_vi_menu_rows` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `parentid` mediumint(5) unsigned NOT NULL,
  `mid` smallint(5) NOT NULL DEFAULT 0,
  `title` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `note` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `weight` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `lev` int(11) NOT NULL DEFAULT 0,
  `subitem` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groups_view` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `module_name` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `op` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `target` tinyint(4) DEFAULT 0,
  `css` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `active_type` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`,`mid`)
) ENGINE=MyISAM  AUTO_INCREMENT=44  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_menu_rows`
--

INSERT INTO `tms_vi_menu_rows` VALUES
(1, 0, 1, 'Giới thiệu', '/index.php?language=vi&nv=about', '', '', '', 2, 2, 0, '', '6', 'about', '', 1, '', 0, 1), 
(33, 0, 2, 'Tuyển dụng', '', '', '', '', 5, 5, 0, '', '6', '0', '', 1, '', 0, 1), 
(34, 0, 2, 'Liên hệ', '', '', '', '', 6, 6, 0, '', '6', '0', '', 1, '', 0, 1), 
(35, 0, 3, 'Chính sách khiếu nại', '', '', '', '', 1, 1, 0, '', '6', '0', '', 1, '', 0, 1), 
(36, 0, 3, 'Chính sách bảo mật', '', '', '', '', 2, 2, 0, '', '6', '0', '', 1, '', 0, 1), 
(37, 0, 3, 'Chính sách thanh toán', '', '', '', '', 3, 3, 0, '', '6', '0', '', 1, '', 0, 1), 
(38, 0, 3, 'Điều khoản sử dụng', '', '', '', '', 4, 4, 0, '', '6', '0', '', 1, '', 0, 1), 
(39, 0, 3, 'Chính sách đổi trả', '', '', '', '', 5, 5, 0, '', '6', '0', '', 1, '', 0, 1), 
(7, 0, 1, 'Liên hệ', '/index.php?language=vi&nv=contact', '', '', '', 5, 5, 0, '', '6', 'contact', '', 1, '', 0, 1), 
(27, 0, 1, 'Trang chủ', '/', '', '', '', 1, 1, 0, '', '6', '0', '', 1, '', 0, 1), 
(26, 0, 1, 'Sản phẩm', '/index.php?language=vi&nv=shops&op=san-pham', '', '', '', 3, 3, 0, '', '6', 'shops', 'long-dung-food', 1, '', 0, 1), 
(28, 0, 1, 'Tin tức', '/index.php?language=vi&nv=tin-tuc', '', '', '', 4, 4, 0, '', '6', 'tin-tuc', '', 1, '', 0, 1), 
(29, 0, 2, 'Về chúng tôi', '', '', '', '', 1, 1, 0, '', '6', '0', '', 1, '', 0, 1), 
(30, 0, 2, 'Tin thị trường', '', '', '', '', 2, 2, 0, '', '6', '0', '', 1, '', 0, 1), 
(31, 0, 2, 'Tin chuyên ngành', '', '', '', '', 3, 3, 0, '', '6', '0', '', 1, '', 0, 1), 
(32, 0, 2, 'Yêu cầu tư vấn', '', '', '', '', 4, 4, 0, '', '6', '0', '', 1, '', 0, 1);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_modfuncs`
--

DROP TABLE IF EXISTS `tms_vi_modfuncs`;
CREATE TABLE `tms_vi_modfuncs` (
  `func_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `func_name` varchar(55)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(55)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `func_custom_name` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `func_site_title` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `in_module` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_func` tinyint(4) NOT NULL DEFAULT 0,
  `in_submenu` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `subweight` smallint(2) unsigned NOT NULL DEFAULT 1,
  `setting` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`func_id`),
  UNIQUE KEY `func_name` (`func_name`,`in_module`),
  UNIQUE KEY `alias` (`alias`,`in_module`)
) ENGINE=MyISAM  AUTO_INCREMENT=130  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_modfuncs`
--

INSERT INTO `tms_vi_modfuncs` VALUES
(128, 'sitemap', 'sitemap', 'Sitemap', '', 'about', 0, 0, 0, ''), 
(127, 'rss', 'rss', 'Rss', '', 'about', 1, 0, 2, ''), 
(126, 'main', 'main', 'Main', '', 'about', 1, 0, 1, ''), 
(125, 'sitemap', 'sitemap', 'Sitemap', '', 'tuyen-dung', 0, 0, 0, ''), 
(124, 'rss', 'rss', 'Rss', '', 'tuyen-dung', 1, 0, 2, ''), 
(123, 'main', 'main', 'Main', '', 'tuyen-dung', 1, 0, 1, ''), 
(20, 'main', 'main', 'Main', '', 'users', 1, 0, 1, ''), 
(21, 'login', 'login', 'Đăng nhập', '', 'users', 1, 1, 2, ''), 
(22, 'register', 'register', 'Đăng ký', '', 'users', 1, 1, 3, ''), 
(23, 'lostpass', 'lostpass', 'Khôi phục mật khẩu', '', 'users', 1, 1, 4, ''), 
(24, 'active', 'active', 'Kích hoạt tài khoản', '', 'users', 1, 0, 5, ''), 
(25, 'lostactivelink', 'lostactivelink', 'Lostactivelink', '', 'users', 1, 0, 6, ''), 
(26, 'editinfo', 'editinfo', 'Thiết lập tài khoản', '', 'users', 1, 1, 7, ''), 
(27, 'memberlist', 'memberlist', 'Danh sách thành viên', '', 'users', 1, 1, 8, ''), 
(28, 'groups', 'groups', 'Quản lý nhóm', '', 'users', 1, 1, 9, ''), 
(29, 'avatar', 'avatar', 'Avatar', '', 'users', 1, 0, 10, ''), 
(30, 'logout', 'logout', 'Thoát', '', 'users', 1, 1, 11, ''), 
(31, 'oauth', 'oauth', 'Oauth', '', 'users', 0, 0, 0, ''), 
(32, 'main', 'main', 'Main', '', 'contact', 1, 0, 1, ''), 
(33, 'main', 'main', 'Main', '', 'statistics', 1, 0, 1, ''), 
(34, 'allreferers', 'allreferers', 'Theo đường dẫn đến site', '', 'statistics', 1, 1, 2, ''), 
(35, 'allcountries', 'allcountries', 'Theo quốc gia', '', 'statistics', 1, 1, 3, ''), 
(36, 'allbrowsers', 'allbrowsers', 'Theo trình duyệt', '', 'statistics', 1, 1, 4, ''), 
(37, 'allos', 'allos', 'Theo hệ điều hành', '', 'statistics', 1, 1, 5, ''), 
(38, 'allbots', 'allbots', 'Theo máy chủ tìm kiếm', '', 'statistics', 1, 1, 6, ''), 
(39, 'referer', 'referer', 'Đường dẫn đến site theo tháng', '', 'statistics', 1, 0, 7, ''), 
(41, 'main', 'main', 'Main', '', 'banners', 1, 0, 1, ''), 
(42, 'addads', 'addads', 'Addads', '', 'banners', 1, 0, 2, ''), 
(43, 'clientinfo', 'clientinfo', 'Clientinfo', '', 'banners', 1, 0, 3, ''), 
(44, 'stats', 'stats', 'Stats', '', 'banners', 1, 0, 4, ''), 
(45, 'cledit', 'cledit', 'Cledit', '', 'banners', 0, 0, 0, ''), 
(46, 'click', 'click', 'Click', '', 'banners', 0, 0, 0, ''), 
(47, 'clinfo', 'clinfo', 'Clinfo', '', 'banners', 0, 0, 0, ''), 
(48, 'logininfo', 'logininfo', 'Logininfo', '', 'banners', 0, 0, 0, ''), 
(49, 'viewmap', 'viewmap', 'Viewmap', '', 'banners', 0, 0, 0, ''), 
(50, 'main', 'main', 'Main', '', 'seek', 1, 0, 1, ''), 
(51, 'main', 'main', 'Main', '', 'feeds', 1, 0, 1, ''), 
(52, 'main', 'main', 'Main', '', 'page', 1, 0, 1, ''), 
(53, 'sitemap', 'sitemap', 'Sitemap', '', 'page', 0, 0, 0, ''), 
(54, 'rss', 'rss', 'Rss', '', 'page', 0, 0, 0, ''), 
(55, 'main', 'main', 'Main', '', 'comment', 1, 0, 1, ''), 
(56, 'post', 'post', 'Post', '', 'comment', 1, 0, 2, ''), 
(57, 'like', 'like', 'Like', '', 'comment', 1, 0, 3, ''), 
(58, 'delete', 'delete', 'Delete', '', 'comment', 1, 0, 4, ''), 
(59, 'down', 'down', 'Down', '', 'comment', 1, 0, 5, ''), 
(107, 'detail', 'detail', 'Detail', '', 'photos', 1, 0, 4, ''), 
(106, 'main', 'main', 'Main', '', 'home', 1, 0, 1, ''), 
(105, 'ajax', 'ajax', 'Ajax', '', 'home', 0, 0, 0, ''), 
(63, 'main', 'main', 'Main', '', 'two-step-verification', 1, 0, 1, ''), 
(64, 'confirm', 'confirm', 'Confirm', '', 'two-step-verification', 1, 0, 2, ''), 
(65, 'setup', 'setup', 'Setup', '', 'two-step-verification', 1, 0, 3, ''), 
(66, 'complete', 'complete', 'Complete', '', 'wallet', 1, 0, 3, ''), 
(67, 'exchange', 'exchange', 'Exchange', '', 'wallet', 1, 1, 5, ''), 
(68, 'historyexchange', 'historyexchange', 'Historyexchange', '', 'wallet', 1, 1, 6, ''), 
(69, 'ipn', 'ipn', 'Ipn', '', 'wallet', 0, 0, 0, ''), 
(70, 'loadinfomoney', 'loadinfomoney', 'Loadinfomoney', '', 'wallet', 0, 0, 0, ''), 
(71, 'main', 'main', 'Main', '', 'wallet', 1, 1, 1, ''), 
(72, 'money', 'money', 'Money', '', 'wallet', 1, 1, 4, ''), 
(73, 'pay', 'pay', 'Pay', '', 'wallet', 1, 0, 2, ''), 
(74, 'recharge', 'recharge', 'Recharge', '', 'wallet', 1, 0, 7, ''), 
(75, 'ajax', 'ajax', 'Ajax', '', 'shops', 1, 0, 19, ''), 
(76, 'blockcat', 'blockcat', 'Blockcat', '', 'shops', 1, 0, 18, ''), 
(77, 'cart', 'cart', 'Cart', '', 'shops', 1, 0, 6, ''), 
(78, 'checkorder', 'checkorder', 'Checkorder', '', 'shops', 0, 0, 0, ''), 
(79, 'compare', 'compare', 'Compare', '', 'shops', 1, 0, 12, ''), 
(80, 'delhis', 'delhis', 'Delhis', '', 'shops', 0, 0, 0, ''), 
(81, 'detail', 'detail', 'Detail', '', 'shops', 1, 0, 4, ''), 
(82, 'download', 'download', 'Download', '', 'shops', 1, 0, 17, ''), 
(83, 'group', 'group', 'Group', '', 'shops', 1, 0, 10, ''), 
(84, 'history', 'history', 'History', '', 'shops', 1, 0, 9, ''), 
(85, 'loadcart', 'loadcart', 'Loadcart', '', 'shops', 0, 0, 0, ''), 
(86, 'main', 'main', 'Main', '', 'shops', 1, 0, 2, ''), 
(87, 'order', 'order', 'Order', '', 'shops', 1, 0, 7, ''), 
(88, 'payment', 'payment', 'Payment', '', 'shops', 1, 0, 8, ''), 
(89, 'point', 'point', 'Point', '', 'shops', 1, 0, 15, ''), 
(90, 'print', 'print', 'Print', '', 'shops', 0, 0, 0, ''), 
(91, 'print_pro', 'print_pro', 'Print_pro', '', 'shops', 0, 0, 0, ''), 
(92, 'remove', 'remove', 'Remove', '', 'shops', 0, 0, 0, ''), 
(93, 'review', 'review', 'Review', '', 'shops', 0, 0, 0, ''), 
(94, 'rss', 'rss', 'Rss', '', 'shops', 0, 0, 0, ''), 
(95, 'search', 'search', 'Search', '', 'shops', 1, 0, 5, ''), 
(96, 'search_result', 'search_result', 'Search_result', '', 'shops', 1, 0, 11, ''), 
(97, 'sendmail', 'sendmail', 'Sendmail', '', 'shops', 0, 0, 0, ''), 
(98, 'setcart', 'setcart', 'Setcart', '', 'shops', 0, 0, 0, ''), 
(99, 'shippingajax', 'shippingajax', 'Shippingajax', '', 'shops', 1, 0, 16, ''), 
(100, 'sitemap', 'sitemap', 'Sitemap', '', 'shops', 0, 0, 0, ''), 
(101, 'tag', 'tag', 'Tag', '', 'shops', 1, 0, 14, ''), 
(102, 'viewcat', 'viewcat', 'Viewcat', '', 'shops', 1, 0, 3, ''), 
(103, 'wishlist', 'wishlist', 'Wishlist', '', 'shops', 1, 0, 13, ''), 
(104, 'wishlist_update', 'wishlist_update', 'Wishlist_update', '', 'shops', 0, 0, 0, ''), 
(108, 'detail_album', 'detail_album', 'Detail_album', '', 'photos', 1, 0, 3, ''), 
(109, 'detail_viewer', 'detail_viewer', 'Detail_viewer', '', 'photos', 1, 0, 5, ''), 
(110, 'main', 'main', 'Main', '', 'photos', 1, 0, 1, ''), 
(111, 'pagemap', 'pagemap', 'Pagemap', '', 'photos', 0, 0, 0, ''), 
(112, 'process', 'process', 'Process', '', 'photos', 0, 0, 0, ''), 
(113, 'rating', 'rating', 'Rating', '', 'photos', 0, 0, 0, ''), 
(114, 'rss', 'rss', 'Rss', '', 'photos', 0, 1, 0, ''), 
(115, 'search', 'search', 'Search', '', 'photos', 1, 1, 6, ''), 
(116, 'sitemap-image', 'sitemap-image', 'Sitemap-image', '', 'photos', 0, 0, 0, ''), 
(117, 'sitemap', 'sitemap', 'Sitemap', '', 'photos', 0, 0, 0, ''), 
(118, 'upload', 'upload', 'Upload', '', 'photos', 1, 0, 7, ''), 
(119, 'viewcat', 'viewcat', 'Viewcat', '', 'photos', 1, 0, 2, ''), 
(120, 'main', 'main', 'Main', '', 'tin-tuc', 1, 0, 1, ''), 
(121, 'rss', 'rss', 'Rss', '', 'tin-tuc', 1, 0, 2, ''), 
(122, 'sitemap', 'sitemap', 'Sitemap', '', 'tin-tuc', 0, 0, 0, ''), 
(129, 'san-pham', 'san-pham', 'Danh sách sản phẩm', '', 'shops', 1, 0, 1, '');


-- ---------------------------------------


--
-- Table structure for table `tms_vi_modthemes`
--

DROP TABLE IF EXISTS `tms_vi_modthemes`;
CREATE TABLE `tms_vi_modthemes` (
  `func_id` mediumint(8) DEFAULT NULL,
  `layout` varchar(100)  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme` varchar(100)  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  UNIQUE KEY `func_id` (`func_id`,`layout`,`theme`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_modthemes`
--

INSERT INTO `tms_vi_modthemes` VALUES
(0, 'main', 'mobile_default'), 
(0, 'main-right', 'default'), 
(20, 'main', 'mobile_default'), 
(20, 'main-right', 'default'), 
(21, 'main', 'mobile_default'), 
(21, 'main-right', 'default'), 
(22, 'main', 'mobile_default'), 
(22, 'main-right', 'default'), 
(23, 'main', 'mobile_default'), 
(23, 'main-right', 'default'), 
(24, 'main', 'mobile_default'), 
(24, 'main-right', 'default'), 
(25, 'main', 'mobile_default'), 
(25, 'main-right', 'default'), 
(26, 'main', 'mobile_default'), 
(26, 'main-right', 'default'), 
(27, 'main', 'mobile_default'), 
(27, 'main-right', 'default'), 
(28, 'main', 'mobile_default'), 
(28, 'main-right', 'default'), 
(29, 'main-right', 'default'), 
(30, 'main', 'mobile_default'), 
(30, 'main-right', 'default'), 
(32, 'main', 'default'), 
(32, 'main', 'mobile_default'), 
(33, 'main', 'mobile_default'), 
(33, 'main-right', 'default'), 
(34, 'main', 'mobile_default'), 
(34, 'main-right', 'default'), 
(35, 'main', 'mobile_default'), 
(35, 'main-right', 'default'), 
(36, 'main', 'mobile_default'), 
(36, 'main-right', 'default'), 
(37, 'main', 'mobile_default'), 
(37, 'main-right', 'default'), 
(38, 'main', 'mobile_default'), 
(38, 'main-right', 'default'), 
(39, 'main', 'mobile_default'), 
(39, 'main-right', 'default'), 
(41, 'main', 'mobile_default'), 
(41, 'main-right', 'default'), 
(42, 'main', 'mobile_default'), 
(42, 'main-right', 'default'), 
(43, 'main', 'mobile_default'), 
(43, 'main-right', 'default'), 
(44, 'main', 'mobile_default'), 
(44, 'main-right', 'default'), 
(50, 'main', 'mobile_default'), 
(50, 'main-right', 'default'), 
(51, 'main', 'mobile_default'), 
(51, 'main-right', 'default'), 
(52, 'main', 'mobile_default'), 
(52, 'main-right', 'default'), 
(55, 'main', 'mobile_default'), 
(55, 'main-right', 'default'), 
(56, 'main', 'mobile_default'), 
(56, 'main-right', 'default'), 
(57, 'main', 'mobile_default'), 
(57, 'main-right', 'default'), 
(58, 'main', 'mobile_default'), 
(58, 'main-right', 'default'), 
(59, 'main-right', 'default'), 
(63, 'main', 'mobile_default'), 
(63, 'main-right', 'default'), 
(64, 'main', 'mobile_default'), 
(64, 'main-right', 'default'), 
(65, 'main', 'mobile_default'), 
(65, 'main-right', 'default'), 
(66, 'main', 'mobile_default'), 
(66, 'main-right', 'default'), 
(67, 'main', 'mobile_default'), 
(67, 'main-right', 'default'), 
(68, 'main', 'mobile_default'), 
(68, 'main-right', 'default'), 
(69, 'left-main-right', 'default'), 
(70, 'left-main-right', 'default'), 
(71, 'main', 'mobile_default'), 
(71, 'main-right', 'default'), 
(72, 'main', 'mobile_default'), 
(72, 'main-right', 'default'), 
(73, 'main', 'mobile_default'), 
(73, 'main-right', 'default'), 
(74, 'main', 'mobile_default'), 
(74, 'main-right', 'default'), 
(75, 'main', 'mobile_default'), 
(75, 'main-right', 'default'), 
(76, 'main', 'mobile_default'), 
(76, 'main-right', 'default'), 
(77, 'main', 'mobile_default'), 
(77, 'main-right', 'default'), 
(78, 'left-main-right', 'default'), 
(79, 'main', 'mobile_default'), 
(79, 'main-right', 'default'), 
(80, 'left-main-right', 'default'), 
(81, 'main', 'mobile_default'), 
(81, 'main-right', 'default'), 
(82, 'main', 'mobile_default'), 
(82, 'main-right', 'default'), 
(83, 'main', 'mobile_default'), 
(83, 'main-right', 'default'), 
(84, 'main', 'mobile_default'), 
(84, 'main-right', 'default'), 
(85, 'left-main-right', 'default'), 
(86, 'main', 'mobile_default'), 
(86, 'main-right', 'default'), 
(87, 'main', 'mobile_default'), 
(87, 'main-right', 'default'), 
(88, 'main', 'mobile_default'), 
(88, 'main-right', 'default'), 
(89, 'main', 'mobile_default'), 
(89, 'main-right', 'default'), 
(90, 'left-main-right', 'default'), 
(91, 'left-main-right', 'default'), 
(92, 'left-main-right', 'default'), 
(93, 'left-main-right', 'default'), 
(94, 'left-main-right', 'default'), 
(95, 'main', 'mobile_default'), 
(95, 'main-right', 'default'), 
(96, 'main', 'mobile_default'), 
(96, 'main-right', 'default'), 
(97, 'left-main-right', 'default'), 
(98, 'left-main-right', 'default'), 
(99, 'main', 'mobile_default'), 
(99, 'main-right', 'default'), 
(100, 'left-main-right', 'default'), 
(101, 'main', 'mobile_default'), 
(101, 'main-right', 'default'), 
(102, 'main', 'mobile_default'), 
(102, 'main-right', 'default'), 
(103, 'main', 'mobile_default'), 
(103, 'main-right', 'default'), 
(104, 'left-main-right', 'default'), 
(105, 'left-main-right', 'default'), 
(106, 'home', 'default'), 
(106, 'main', 'mobile_default'), 
(107, 'main', 'mobile_default'), 
(107, 'main-right', 'default'), 
(108, 'main', 'mobile_default'), 
(108, 'main-right', 'default'), 
(109, 'main', 'mobile_default'), 
(109, 'main-right', 'default'), 
(110, 'main', 'mobile_default'), 
(110, 'main-right', 'default'), 
(111, 'left-main-right', 'default'), 
(112, 'left-main-right', 'default'), 
(113, 'left-main-right', 'default'), 
(114, 'left-main-right', 'default'), 
(115, 'main', 'mobile_default'), 
(115, 'main-right', 'default'), 
(116, 'left-main-right', 'default'), 
(117, 'left-main-right', 'default'), 
(118, 'main', 'mobile_default'), 
(118, 'main-right', 'default'), 
(119, 'main', 'mobile_default'), 
(119, 'main-right', 'default'), 
(120, 'main', 'mobile_default'), 
(120, 'main-right', 'default'), 
(121, 'main', 'mobile_default'), 
(121, 'main-right', 'default'), 
(122, 'main-right', 'default'), 
(123, 'main', 'mobile_default'), 
(123, 'main-right', 'default'), 
(124, 'main', 'mobile_default'), 
(124, 'main-right', 'default'), 
(125, 'left-main-right', 'default'), 
(126, 'main', 'mobile_default'), 
(126, 'main-right', 'default'), 
(127, 'main', 'mobile_default'), 
(127, 'main-right', 'default'), 
(128, 'left-main-right', 'default'), 
(129, 'main-right', 'default');


-- ---------------------------------------


--
-- Table structure for table `tms_vi_modules`
--

DROP TABLE IF EXISTS `tms_vi_modules`;
CREATE TABLE `tms_vi_modules` (
  `title` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `module_file` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `module_data` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `module_upload` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `module_theme` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `custom_title` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_title` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `admin_title` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `set_time` int(11) unsigned NOT NULL DEFAULT 0,
  `main_file` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `admin_file` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `theme` varchar(100)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mobile` varchar(100)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `keywords` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groups_view` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `act` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `admins` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `rss` tinyint(4) NOT NULL DEFAULT 1,
  `sitemap` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_modules`
--

INSERT INTO `tms_vi_modules` VALUES
('about', 'about', 'about', 'about', 'about', 'Giới thiệu', '', '', 1634787000, 1, 1, '', '', '', '', '6', 1, 1, '', 1, 1), 
('tuyen-dung', 'page', 'tuyen_dung', 'tuyen-dung', 'page', 'Tuyển dụng', '', '', 1634652833, 1, 1, '', '', '', '', '6', 7, 1, '', 1, 1), 
('users', 'users', 'users', 'users', 'users', 'Thành viên', '', 'Tài khoản', 1634609551, 1, 1, '', '', '', '', '6', 8, 1, '', 0, 1), 
('contact', 'contact', 'contact', 'contact', 'contact', 'Liên hệ', '', '', 1634609551, 1, 1, '', '', '', '', '6', 9, 1, '', 0, 1), 
('statistics', 'statistics', 'statistics', 'statistics', 'statistics', 'Thống kê', '', '', 1634609551, 1, 1, '', '', '', 'online, statistics', '6', 10, 1, '', 0, 1), 
('home', 'home', 'home', 'home', 'home', 'Trang chủ', '', '', 1634610005, 1, 1, '', '', '', '', '6', 2, 1, '', 0, 0), 
('banners', 'banners', 'banners', 'banners', 'banners', 'Quảng cáo', '', '', 1634609551, 1, 1, '', '', '', '', '6', 11, 1, '', 0, 1), 
('seek', 'seek', 'seek', 'seek', 'seek', 'Tìm kiếm', '', '', 1634609551, 1, 0, '', '', '', '', '6', 12, 1, '', 0, 1), 
('menu', 'menu', 'menu', 'menu', 'menu', 'Menu Site', '', '', 1634609551, 0, 1, '', '', '', '', '6', 13, 1, '', 0, 1), 
('feeds', 'feeds', 'feeds', 'feeds', 'feeds', 'RSS-feeds', '', '', 1634609551, 1, 1, '', '', '', '', '6', 14, 1, '', 0, 1), 
('page', 'page', 'page', 'page', 'page', 'Page', '', '', 1634609551, 1, 1, '', '', '', '', '6', 15, 1, '', 1, 0), 
('comment', 'comment', 'comment', 'comment', 'comment', 'Bình luận', '', 'Quản lý bình luận', 1634609551, 0, 1, '', '', '', '', '6', 16, 1, '', 0, 1), 
('photos', 'photos', 'photos', 'photos', 'photos', 'Hình ảnh hoạt động', '', '', 1634610048, 1, 1, '', '', '', '', '6', 5, 1, '', 1, 1), 
('tin-tuc', 'tin-tuc', 'tin_tuc', 'tin-tuc', 'tin-tuc', 'Tin tức', '', '', 1634627984, 1, 1, '', '', '', '', '6', 4, 1, '', 1, 1), 
('two-step-verification', 'two-step-verification', 'two_step_verification', 'two_step_verification', 'two-step-verification', 'Xác thực hai bước', '', '', 1634609551, 1, 0, '', '', '', '', '6', 17, 1, '', 0, 1), 
('wallet', 'wallet', 'wallet', 'wallet', 'wallet', 'Ví tiền', '', '', 1634609955, 1, 1, '', '', '', '', '6', 6, 1, '', 0, 0), 
('shops', 'shops', 'shops', 'shops', 'shops', 'Sản phẩm', '', '', 1634609968, 1, 1, '', '', '', '', '6', 3, 1, '', 1, 1);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_page`
--

DROP TABLE IF EXISTS `tms_vi_page`;
CREATE TABLE `tms_vi_page` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `imagealt` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `imageposition` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `description` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bodytext` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialbutton` tinyint(4) NOT NULL DEFAULT 0,
  `activecomm` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `layout_func` varchar(100)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `edit_time` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hot_post` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_vi_page_config`
--

DROP TABLE IF EXISTS `tms_vi_page_config`;
CREATE TABLE `tms_vi_page_config` (
  `config_name` varchar(30)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_page_config`
--

INSERT INTO `tms_vi_page_config` VALUES
('viewtype', '0'), 
('facebookapi', ''), 
('per_page', '20'), 
('news_first', '0'), 
('related_articles', '5'), 
('copy_page', '0'), 
('alias_lower', '1'), 
('socialbutton', 'facebook,twitter');


-- ---------------------------------------


--
-- Table structure for table `tms_vi_photos_album`
--

DROP TABLE IF EXISTS `tms_vi_photos_album`;
CREATE TABLE `tms_vi_photos_album` (
  `album_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `layout` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `num_photo` mediumint(3) unsigned NOT NULL DEFAULT 0,
  `viewed` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `weight` smallint(4) unsigned NOT NULL DEFAULT 0,
  `sort` mediumint(8) NOT NULL DEFAULT 0,
  `allow_rating` int(11) unsigned NOT NULL DEFAULT 1,
  `total_rating` int(11) NOT NULL DEFAULT 0,
  `click_rating` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `hot` int(11) DEFAULT 0,
  `groups_view` varchar(250)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `author` int(11) unsigned NOT NULL DEFAULT 0,
  `author_modify` int(11) unsigned NOT NULL DEFAULT 0,
  `allow_comment` varchar(250)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `date_added` int(11) unsigned NOT NULL DEFAULT 0,
  `date_modified` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`album_id`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_photos_album`
--

INSERT INTO `tms_vi_photos_album` VALUES
(1, 'Bánh đa nem Nam Chi', 'banh-da-nem-nam-chi', '', '', '', '', '2021/11/banh-da-nem-nam-chi', '', 9, 0, 0, 0, 1, 0, 0, 1, 0, '6', 1, 2, '6', 0, 1634621198, 1634621198);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_photos_rows`
--

DROP TABLE IF EXISTS `tms_vi_photos_rows`;
CREATE TABLE `tms_vi_photos_rows` (
  `row_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `album_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `name` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `defaults` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `size` int(11) unsigned NOT NULL DEFAULT 0,
  `width` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `height` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `mime` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `file` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `favorite` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `viewed` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `date_added` int(11) unsigned NOT NULL DEFAULT 0,
  `date_modified` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`row_id`)
) ENGINE=MyISAM  AUTO_INCREMENT=41  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_photos_rows`
--

INSERT INTO `tms_vi_photos_rows` VALUES
(40, 1, '44.jpg', '', 0, 57061, 600, 550, 'image/jpeg', '2021/11/banh-da-nem-nam-chi/44.jpg', '/2021/11/90x72-44_1.jpg', 0, 1, 0, 1636443377, 1636443377), 
(39, 1, '2.jpg', '', 0, 95377, 700, 700, 'image/jpeg', '2021/11/banh-da-nem-nam-chi/2.jpg', '/2021/11/90x72-2_1.jpg', 0, 1, 0, 1636443377, 1636443377), 
(38, 1, '55.jpg', '', 0, 53691, 640, 426, 'image/jpeg', '2021/11/banh-da-nem-nam-chi/55.jpg', '/2021/11/90x72-55.jpg', 0, 1, 0, 1636443170, 1636443377), 
(37, 1, '44.jpg', '', 0, 57061, 600, 550, 'image/jpeg', '2021/11/banh-da-nem-nam-chi/44.jpg', '/2021/11/90x72-44.jpg', 0, 1, 0, 1636443170, 1636443377), 
(36, 1, '14.jpg', '', 0, 290616, 1024, 768, 'image/jpeg', '2021/11/banh-da-nem-nam-chi/14.jpg', '/2021/11/90x72-14.jpg', 0, 1, 0, 1636443170, 1636443377), 
(35, 1, '13.jpg', '', 0, 124995, 1000, 594, 'image/jpeg', '2021/11/banh-da-nem-nam-chi/13.jpg', '/2021/11/90x72-13.jpg', 0, 1, 0, 1636443170, 1636443377), 
(34, 1, '12.jpg', '', 0, 79674, 600, 600, 'image/jpeg', '2021/11/banh-da-nem-nam-chi/12.jpg', '/2021/11/90x72-12.jpg', 0, 1, 0, 1636443170, 1636443377), 
(33, 1, '4.jpg', '', 1, 52742, 603, 406, 'image/jpeg', '2021/11/banh-da-nem-nam-chi/4.jpg', '/2021/11/90x72-4.jpg', 0, 1, 0, 1636443170, 1636443377), 
(32, 1, '2.jpg', '', 0, 95377, 700, 700, 'image/jpeg', '2021/11/banh-da-nem-nam-chi/2.jpg', '/2021/11/90x72-2.jpg', 0, 1, 0, 1636443170, 1636443377);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_referer_stats`
--

DROP TABLE IF EXISTS `tms_vi_referer_stats`;
CREATE TABLE `tms_vi_referer_stats` (
  `host` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `month01` int(11) NOT NULL DEFAULT 0,
  `month02` int(11) NOT NULL DEFAULT 0,
  `month03` int(11) NOT NULL DEFAULT 0,
  `month04` int(11) NOT NULL DEFAULT 0,
  `month05` int(11) NOT NULL DEFAULT 0,
  `month06` int(11) NOT NULL DEFAULT 0,
  `month07` int(11) NOT NULL DEFAULT 0,
  `month08` int(11) NOT NULL DEFAULT 0,
  `month09` int(11) NOT NULL DEFAULT 0,
  `month10` int(11) NOT NULL DEFAULT 0,
  `month11` int(11) NOT NULL DEFAULT 0,
  `month12` int(11) NOT NULL DEFAULT 0,
  `last_update` int(11) NOT NULL DEFAULT 0,
  UNIQUE KEY `host` (`host`),
  KEY `total` (`total`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_referer_stats`
--

INSERT INTO `tms_vi_referer_stats` VALUES
('yensaoxunghe.net', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 1635629265), 
('l.facebook.com', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 0, 0, 1635491455), 
('google.com', 56, 15, 1, 18, 9, 0, 0, 0, 0, 0, 4, 4, 5, 1649734005), 
('lm.facebook.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1634736452), 
('facebook.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1634817269), 
('m.facebook.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1634825563), 
('103.27.237.137', 23, 3, 4, 3, 2, 0, 0, 0, 0, 0, 5, 3, 3, 1649471533), 
('longdungfood.com', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 1635955977), 
('baidu.com', 7, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 1646018924), 
('', 22, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 11, 1642094632), 
('banhdanemnamchi.com', 86, 41, 9, 12, 3, 0, 0, 0, 0, 0, 0, 6, 15, 1649244649), 
('google.com.vn', 5, 0, 0, 2, 2, 0, 0, 0, 0, 0, 0, 1, 0, 1649664861), 
('bing.com', 11, 0, 0, 3, 1, 0, 0, 0, 0, 0, 0, 4, 3, 1649320586), 
('google.com.hk', 3, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1648956184), 
('com.all-url.info', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1638056782), 
('duckduckgo.com', 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1646501957), 
('google.co.jp', 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1646580634);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_searchkeys`
--

DROP TABLE IF EXISTS `tms_vi_searchkeys`;
CREATE TABLE `tms_vi_searchkeys` (
  `id` varchar(32)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `skey` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `search_engine` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `id` (`id`),
  KEY `skey` (`skey`),
  KEY `search_engine` (`search_engine`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_vi_tin_tuc`
--

DROP TABLE IF EXISTS `tms_vi_tin_tuc`;
CREATE TABLE `tms_vi_tin_tuc` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `imagealt` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `imageposition` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `description` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bodytext` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialbutton` tinyint(4) NOT NULL DEFAULT 0,
  `activecomm` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `layout_func` varchar(100)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `edit_time` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hot_post` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=15  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_tin_tuc`
--

INSERT INTO `tms_vi_tin_tuc` VALUES
(12, 'Bánh đa nem phơi sương Hà Tĩnh ngon giòn miễn chê.', 'banh-da-nem-phoi-suong-ha-tinh-ngon-gion-mien-che', '2_1.jpg', '2', 0, 'Vốn là một tín đồ trung thành của món nem rán, mình rất hay tìm tòi những cách làm mới, hay những nguyên liệu mới thích hợp nhất cho món ăn nổi tiếng này. Tình cờ một lần được một người đồng nghiệp trong công ty giới thiệu về loại bánh đa nem phơi sương Hà Tĩnh – quê hương của cô ấy.', '<p>Sau một thời gian thử nghiệm mình nhận thấy loại bánh đa nem này rất phù hợp: dẻo, dai dễ cuộn, sau khi rán thì giòn và lên màu rất đẹp. Không những thế để được lâu mà không mất đi đặc tính ban đầu. Ngày hôm nay xin được giới thiệu tới các bạn, hi vọng có thể giúp ích cho mọi người trong việc tìm kiếm nguyên liệu phù hợp cho món nem rán của mình.</p>  <p>Nguyên liệu và cách sản xuất bánh đa nem phơi sương Hà Tĩnh</p>  <p>Là sản vật nổi tiếng của người dân Hà Tĩnh, bánh đa nem phơi sương Hà Tĩnh được sản xuất từ gạo + mật mía. Không chất bảo quản, không chất phụ gia nên hoàn toàn không gây độc hại cho người sử dụng.</p>  <p>Quy trình sản xuất của bánh hoàn toàn bằng thủ công: Bánh được phơi sương, phơi nắng. Hoàn toàn không sử dụng tới lò sấy kể cả mùa đông.</p>  <ul> 	<li>Lá bánh mềm, dẻo</li> 	<li>Dễ cuốn, không lo bị rách, vỡ khi cuốn cũng như khi rán</li> 	<li>Bánh khi rán có màu vàng rất đẹp mắt</li> 	<li>Không ngấm dầu mỡ nên mẹ nào sợ tăng cân thì khỏi cần phải lo nghĩ nhé.</li> 	<li>Bánh nhạt chứ không mặn như các loại bánh thông thường mua ở chợ</li> </ul>  <p>Vì bánh không chứa chất bảo quản thực phẩm nên có thể bảo quản được 1 năm trong ngăn đá của tủ lạnh.</p>', '', 1, '4', '', 3, 2, 1636445149, 1636445149, 1, 52, 1), 
(13, 'Đặc sản quê hương - Bánh ram Hà Tĩnh', 'dac-san-que-huong-banh-ram-ha-tinh', '44_1.jpg', '44', 0, 'Ngoài kẹo cu đơ, bưởi Phúc Trạch, cam Khe Mây,… thì những năm gần đây, bánh ram Hà Tĩnh (bánh đa nem vỏ ram Hà Tĩnh) thực sự là một nguyên liệu  không thể thiếu trong mâm cơm của người Việt.', '<figure aria-describedby=\"caption-attachment-1594\" id=\"attachment_1594\"><a href=\"https://dacsanhatinh.vn/wp-content/uploads/2020/11/Co-so-san-xuat-banh-da-nem-tai-Ha-Tinh.jpg\"><img alt=\"\" height=\"394\" loading=\"lazy\" sizes=\"(max-width: 700px) 100vw, 700px\" src=\"https://dacsanhatinh.vn/wp-content/uploads/2020/11/Co-so-san-xuat-banh-da-nem-tai-Ha-Tinh-700x394.jpg\" srcset=\"https://dacsanhatinh.vn/wp-content/uploads/2020/11/Co-so-san-xuat-banh-da-nem-tai-Ha-Tinh-700x394.jpg 700w, https://dacsanhatinh.vn/wp-content/uploads/2020/11/Co-so-san-xuat-banh-da-nem-tai-Ha-Tinh-768x432.jpg 768w, https://dacsanhatinh.vn/wp-content/uploads/2020/11/Co-so-san-xuat-banh-da-nem-tai-Ha-Tinh.jpg 800w\" width=\"700\" /></a> <figcaption id=\"caption-attachment-1594\">Công đoạn phơi bánh ram Hà Tĩnh</figcaption> </figure>  <p>Ở Hà Tĩnh, dễ dàng bắt gặp nhiều vùng sản xuất lá ram, mỗi nơi sẽ có những cách sản xuất và chất lượng khác nhau, nhưng nổi tiếng hơn cả, vẫn là vùng Thạch Hưng – Hà Tĩnh. Nơi đây, trước kia là làng nghề làm bánh tráng (bánh đa), dần dần chuyển sang làm bánh ram.</p>  <h3><strong>Cách làm bánh ram Hà Tĩnh</strong></h3>  <p>Bánh ram được làm nên từ gạo và mật mía. Gạo được lựa chọn từ loại gạo khang dân, hạt nào cũng to, tròn, đều. Hai nguyên liệu này dễ dàng tìm thấy ở bất kỳ vùng miền nào trên cả nước. Ấy vậy mà, hình ảnh và hương vị vỏ bánh ram quê Hà Tĩnh vẫn là “<em>thương hiệu</em>” các bà nội trợ gọi tên đầu tiên.</p>  <p>Với nguồn nguyên liệu gạo Hà Tĩnh sẵn có, nhưng còn cần phải có tay nghề làm bánh chuẩn, điều mà không phải vùng đất nào Hà Tĩnh cũng làm được. Tay nghề của người làm và cái tâm của người làm bánh đã tạo nên sự thành công vượt trội, làm nên thương hiệu “vỏ ram Hà Tĩnh”.</p>  <p>Để có được lá ram mỏng, mịn, dẻo thơm, người làm bánh phải tuân theo quy trình từ xay bột gạo, pha bột đến tráng bánh, đem phơi, bóc bánh ra khỏi phên, xếp lại theo từng tệp và đóng gói. Lá ram thường được xếp thành tệp 100 lá, hoặc ép chân không và vận chuyển đi nhiều vùng miền khác nhau của tổ quốc.</p>  <p>Quá trình tráng bánh, phơi bánh đều được làm thủ công. Bánh sau khi tráng được trải trên từng tấm phên nứa và đem phơi. Phơi bánh cũng cần lưu ý bởi nếu dính mưa, bánh bị mốc, nhưng nếu trời nắng to hoặc hanh khô thì vỏ bánh lại giòn, nứt. Có lẽ, vượt lên những điều kiện thời tiết miền Trung khắc nghiệt như vậy, bánh ram Hà Tĩnh mới trở thành từ khóa tìm kiếm hot trên thị trường, là sản phẩm&nbsp;<em>“best-seller”</em>&nbsp;tại&nbsp;<a href=\"https://dacsanhatinh.vn/\"><strong>CED CENTRAL</strong></a>&nbsp;– Trung tâm trưng bày, giới thiệu, tiêu thụ sản phẩm OCOP và hàng hóa sản xuất trong tỉnh Hà Tĩnh.</p>  <h3><strong>Bánh ram Hà Tĩnh – món ngon đơn giản tại nhà</strong></h3>  <p>Bánh ram Hà Tĩnh không hề sử dụng bất kỳ một chất bảo quản nào, vì vậy, người dùng muốn để được lâu, có thể bảo quản trong ngăn đá tủ lạnh. Khi cần sử dụng, hãy lấy ra tầm 5-10 phút tùy theo điều kiện thời tiết môi trường bên ngoài.</p>  <p>Công thức làm ram của người Hà Tĩnh gồm: thịt ba chỉ băm nhỏ, mộc nhĩ thái sợi, miến gạo cùng một số gia vị kèm theo.&nbsp; tỏi, ớt, tiêu, bột ngọt, các loại rau thơm băm nhỏ cũng là thành phần không thể thiếu. Ở một số nơi , ram được gọi là nem rán, có thể trộn cùng củ đậu, cà rốt, giá đỗ. Món ram (nem) sử dụng vỏ bánh ram Hà Tĩnh khi rán lên có màu vàng, giòn rụm.</p>  <figure aria-describedby=\"caption-attachment-1596\" id=\"attachment_1596\"><a href=\"https://dacsanhatinh.vn/wp-content/uploads/2020/11/ram-banh-muot-mon-an-ha-tinh.jpg\"><img alt=\"\" height=\"350\" loading=\"lazy\" src=\"https://dacsanhatinh.vn/wp-content/uploads/2020/11/ram-banh-muot-mon-an-ha-tinh-500x350.jpg\" width=\"500\" /></a>  <figcaption id=\"caption-attachment-1596\">Đặc sản ăn sáng của người dân Hà Tĩnh mà khách du lịch nên thưởng thức</figcaption> </figure>  <p>Vỏ ram Hà Tĩnh là nguyên liệu nấu ăn được yêu thích, lại tiện ích khi nấu nướng. Ram Hà Tĩnh ăn cùng bánh mướt là món ăn sáng quen thuộc mà bất kỳ du khách nào mỗi khi đến Hà Tĩnh đều tìm thưởng thức. Và dù ở bất kỳ đâu, mỗi người con của quê hương đều nhớ đến như một sự nằm lòng.</p>  <p>Chọn một món quà quê tặng người ở xa hay một thức gia vị tuyệt hảo cho căn bếp, tại sao không chọn vỏ&nbsp; ram Hà Tĩnh.</p>', 'quê hương', 1, '4', '', 2, 2, 1636445340, 1636445340, 1, 64, 1), 
(14, 'Bánh ram Hà Tĩnh sang Thái Lan, lên kệ Vinmart', 'banh-ram-ha-tinh-sang-thai-lan-len-ke-vinmart', '117d4110834t23248l0.jpg', '', 0, 'Là một trong hai cơ sở đầu tiên ở Hà Tĩnh xây dựng được thương hiệu, bánh ram Anh Thu (xã Thạch Lâm, huyện Thạch Hà – Hà Tĩnh) được khách hàng gần xa tìm đến, sản xuất đến đâu tiêu thụ đến đó.', '<p>Đầu tư công nghệ - “chế ngự” thời tiết</p>  <p>Đang trong mùa sản xuất cao điểm nên cơ sở sản xuất bánh ram Anh Thu luôn phải hoạt động tối đa công suất nhằm kịp tiến độ giao hàng tết cho khách. Chị Lê Hoài Thu – chủ cơ sở sản xuất bánh ram Anh Thu cho biết: “Đơn hàng tới dồn dập nên từ tháng 9 đến hết tháng 1 (âm lịch) là chúng tôi phải chạy tối đa công suất. Mỗi ngày, cơ sở sản xuất 10 vạn bánh. Ngoài 6 công nhân làm việc thường xuyên, chúng tôi đang tuyển thêm lao động thời vụ để đáp ứng tiến độ”.</p>  <p>Bên trong nhà xưởng rộng hơn 1.000 m<sup>2</sup>, không khí sản xuất diễn ra hết sức nhịp nhàng, khẩn trương. Từ năm 2018 đến nay, cơ sở đầu tư hệ thống máy móc hiện đại nên việc vận hành sản xuất không bị phụ thuộc vào yếu tố thời tiết.</p>  <p>“Ngoài hệ thống máy tráng, máy xay bột, máy ép, máy cắt, máy hút chân không… chúng tôi còn đầu tư máy sấy công nghiệp nên dù trời mưa vẫn có thể sản xuất bánh bình thường. Tổng kinh phí đầu tư cho máy móc khoảng hơn 1 tỷ đồng” – chủ cơ sở sản xuất bánh ram Anh Thu cho biết thêm.</p>  <p>Từ ngày đầu tư hệ thống dây chuyền máy móc hiện đại, cơ sở sản xuất bánh ram Anh Thu “lên như diều gặp gió”. Đặc biệt, cuối năm 2018, sau khi hoàn thành đăng ký thương hiệu, bánh ram Anh Thu đã mở rộng được thị trường và quy mô ngày càng phát triển. Bình quân mỗi tháng, cơ sở tiêu thụ 6 tấn gạo, tăng gấp 6 lần so với trước. Riêng năm 2019, cơ sở đã sản xuất hơn 1.500 vạn bánh ram, bánh cuốn rau sống.</p>  <p>Hữu xạ tự nhiên hương</p>  <p>Sản xuất với số lượng lớn nhưng bánh ram Anh Thu không phải lo về đầu ra sản phẩm. Với chất lượng vượt trội, bánh ram Anh Thu được khách hàng gần xa tìm đến mua tận nơi.</p>  <p>Lựa những tệp bánh ram để làm quà gửi cho con đang sinh sống và làm việc tại Thái Lan, bà Phan Thị Nhung (xã Thạch Lâm – huyện Thạch Hà) cho biết: “Bánh không chỉ dòn ngon, dễ cuốn, không ngấm mỡ, lên màu vàng đẹp mắt khi chiên rán mà còn được đóng gói hút chân không cẩn thận nên rất thích hợp để làm quà quê. Vì vậy, mỗi lần có người sang Thái Lan là tôi lại đi mua bánh gửi cho các con”.</p>  <p>Một trong những kênh phát triển thị trường thông minh được cơ sở áp dụng là bán hàng online. Thông qua website bán hàng: banhramhatinh.com, qua mạng xã hội Facebook… , bạn hàng tự tìm đến và đặt mua sản phẩm.</p>  <p>Hiện tại, bánh ram Anh Thu đã có mặt trên thị trường 30 tỉnh, thành trong cả nước và hơn 5 nước trên thế giới. Đặc biệt, bánh ram Anh Thu còn được phân phối trong hệ thống các siêu thị lớn trên toàn quốc như: Coopmart, Vinmart…</p>  <p>“Hiện nay, sản phẩm bánh ram của cơ sở đang được huyện Thạch Hà lựa chọn là sản phẩm OCOP. Thông qua các hội chợ, triển lãm, cơ sở cũng đã kết nối được nhiều bạn hàng. Thời gian tới, chúng tôi sẽ phát huy lợi thế này để mở rộng thị trường và phát triển thương hiệu bánh ram thành đặc sản của Hà Tĩnh, được khách hàng trong nước và quốc tế biết đến nhiều hơn” - chị Lê Hoài Thu, chủ cơ sở sản xuất bánh ram Anh Thu cho hay.</p>', '', 1, '4', '', 1, 2, 1636445457, 1636445457, 1, 61, 0);


-- ---------------------------------------


--
-- Table structure for table `tms_vi_tin_tuc_config`
--

DROP TABLE IF EXISTS `tms_vi_tin_tuc_config`;
CREATE TABLE `tms_vi_tin_tuc_config` (
  `config_name` varchar(30)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_tin_tuc_config`
--

INSERT INTO `tms_vi_tin_tuc_config` VALUES
('viewtype', '1'), 
('facebookapi', ''), 
('per_page', '20'), 
('news_first', '1'), 
('related_articles', '5'), 
('copy_page', '0'), 
('alias_lower', '1'), 
('socialbutton', 'facebook,twitter');


-- ---------------------------------------


--
-- Table structure for table `tms_vi_tuyen_dung`
--

DROP TABLE IF EXISTS `tms_vi_tuyen_dung`;
CREATE TABLE `tms_vi_tuyen_dung` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `imagealt` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `imageposition` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `description` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bodytext` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialbutton` tinyint(4) NOT NULL DEFAULT 0,
  `activecomm` varchar(255)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `layout_func` varchar(100)  COLLATE utf8mb4_unicode_ci DEFAULT '',
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `edit_time` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT 0,
  `hot_post` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_vi_tuyen_dung_config`
--

DROP TABLE IF EXISTS `tms_vi_tuyen_dung_config`;
CREATE TABLE `tms_vi_tuyen_dung_config` (
  `config_name` varchar(30)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms_vi_tuyen_dung_config`
--

INSERT INTO `tms_vi_tuyen_dung_config` VALUES
('viewtype', '0'), 
('facebookapi', ''), 
('per_page', '20'), 
('news_first', '0'), 
('related_articles', '5'), 
('copy_page', '0'), 
('alias_lower', '1'), 
('socialbutton', 'facebook,twitter');


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_admin_groups`
--

DROP TABLE IF EXISTS `tms_wallet_admin_groups`;
CREATE TABLE `tms_wallet_admin_groups` (
  `gid` smallint(4) NOT NULL AUTO_INCREMENT,
  `group_title` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Tên nhóm',
  `add_time` int(11) NOT NULL DEFAULT 0,
  `update_time` int(11) NOT NULL DEFAULT 0,
  `is_wallet` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Quyền xem và cập nhật ví tiền',
  `is_vtransaction` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Quyền xem giao dịch',
  `is_mtransaction` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Quyền xem và xử lý giao dịch',
  `is_vorder` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Quyền xem các đơn hàng kết nối',
  `is_morder` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Quyền xem và xử lý các đơn hàng kết nối',
  `is_exchange` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Quyền quản lý tỷ giá',
  `is_money` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Quyền quản lý tiền tệ',
  `is_payport` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Quyền quản lý các cổng thanh toán',
  `is_configmod` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Quyền thiết lập cấu hình module',
  `is_viewstats` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Quyền xem thống kê',
  PRIMARY KEY (`gid`),
  UNIQUE KEY `group_title` (`group_title`),
  KEY `is_wallet` (`is_wallet`),
  KEY `is_vtransaction` (`is_vtransaction`),
  KEY `is_mtransaction` (`is_mtransaction`),
  KEY `is_vorder` (`is_vorder`),
  KEY `is_morder` (`is_morder`),
  KEY `is_exchange` (`is_exchange`),
  KEY `is_money` (`is_money`),
  KEY `is_payport` (`is_payport`),
  KEY `is_configmod` (`is_configmod`),
  KEY `is_viewstats` (`is_viewstats`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_admins`
--

DROP TABLE IF EXISTS `tms_wallet_admins`;
CREATE TABLE `tms_wallet_admins` (
  `admin_id` mediumint(8) NOT NULL,
  `gid` smallint(4) NOT NULL,
  `add_time` int(11) NOT NULL DEFAULT 0,
  `update_time` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`admin_id`),
  KEY `gid` (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_epay_log`
--

DROP TABLE IF EXISTS `tms_wallet_epay_log`;
CREATE TABLE `tms_wallet_epay_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL DEFAULT 0,
  `telco` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `code` varchar(30)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `userid` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `SessionID` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `money_card` int(11) NOT NULL DEFAULT 0,
  `money_site` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `time` (`time`),
  KEY `telco` (`telco`,`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_exchange`
--

DROP TABLE IF EXISTS `tms_wallet_exchange`;
CREATE TABLE `tms_wallet_exchange` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `money_unit` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `than_unit` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `exchange_from` double NOT NULL DEFAULT 1,
  `exchange_to` double NOT NULL DEFAULT 1,
  `time_update` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`money_unit`,`than_unit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_exchange_log`
--

DROP TABLE IF EXISTS `tms_wallet_exchange_log`;
CREATE TABLE `tms_wallet_exchange_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `money_unit` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `than_unit` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `exchange_from` double NOT NULL DEFAULT 1,
  `exchange_to` double NOT NULL DEFAULT 1,
  `time_begin` int(11) NOT NULL DEFAULT 0,
  `time_end` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_ipn_logs`
--

DROP TABLE IF EXISTS `tms_wallet_ipn_logs`;
CREATE TABLE `tms_wallet_ipn_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT 0 COMMENT 'ID thành viên nếu có',
  `log_ip` varchar(64)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Địa chỉ IP',
  `log_data` mediumtext  COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Dữ liệu dạng json_encode',
  `request_method` varchar(20)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Loại truy vấn',
  `request_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'Thời gian log',
  `user_agent` text  COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `log_ip` (`log_ip`),
  KEY `request_method` (`request_method`),
  KEY `request_time` (`request_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_money`
--

DROP TABLE IF EXISTS `tms_wallet_money`;
CREATE TABLE `tms_wallet_money` (
  `userid` int(11) NOT NULL DEFAULT 0,
  `created_time` int(11) NOT NULL DEFAULT 0,
  `created_userid` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `money_unit` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `money_in` double NOT NULL DEFAULT 0,
  `money_out` double NOT NULL DEFAULT 0,
  `money_total` double NOT NULL DEFAULT 0,
  `note` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenkey` varchar(32)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  UNIQUE KEY `userid` (`userid`,`money_unit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_money_sys`
--

DROP TABLE IF EXISTS `tms_wallet_money_sys`;
CREATE TABLE `tms_wallet_money_sys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `currency` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_orders`
--

DROP TABLE IF EXISTS `tms_wallet_orders`;
CREATE TABLE `tms_wallet_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_mod` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Module title của module thực hiện đơn hàng',
  `order_id` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'ID đơn hàng',
  `order_message` text  COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Message gửi cho cổng thanh toán',
  `order_object` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Đối tượng thanh toán ví dụ: Giỏ hàng, sản phẩn, ứng dụng...',
  `order_name` varchar(250)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Tên đối tượng',
  `money_amount` double NOT NULL DEFAULT 0 COMMENT 'Số tiền thanh toán',
  `money_unit` varchar(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Loại tiền tệ',
  `secret_code` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Mã bí mật của mỗi đơn hàng, không trùng lặp',
  `url_back` text  COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Dữ liệu trả về khi thanh toán xong',
  `url_admin` text  COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Url trang quản trị đơn hàng',
  `add_time` int(11) NOT NULL DEFAULT 0,
  `update_time` int(11) NOT NULL DEFAULT 0,
  `paid_status` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Trạng thái giao dịch',
  `paid_id` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'ID giao dịch',
  `paid_time` int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật của status kia',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_key` (`order_mod`,`order_id`),
  UNIQUE KEY `secret_code` (`secret_code`),
  KEY `paid_status` (`paid_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_payment`
--

DROP TABLE IF EXISTS `tms_wallet_payment`;
CREATE TABLE `tms_wallet_payment` (
  `payment` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `paymentname` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `domain` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `weight` int(11) NOT NULL DEFAULT 0,
  `config` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` double NOT NULL DEFAULT 0 COMMENT 'Phí cho nhà cung cấp dịch vụ, phần này chỉ làm đối số để thống kê',
  `discount_transaction` double NOT NULL DEFAULT 0 COMMENT 'Phí giao dịch',
  `images_button` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `bodytext` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` mediumtext  COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_support` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Các loại tiền tệ hỗ trợ thanh toán',
  `allowedoptionalmoney` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'Cho phép thanh toán số tiền tùy ý hay không',
  `active_completed_email` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Kích hoạt gửi email thông báo các giao dịch chưa hoàn thành',
  `active_incomplete_email` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Kích hoạt gửi email thông báo các giao dịch đã hoàn thành',
  PRIMARY KEY (`payment`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_payment_discount`
--

DROP TABLE IF EXISTS `tms_wallet_payment_discount`;
CREATE TABLE `tms_wallet_payment_discount` (
  `payment` varchar(100)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Cổng thanh toán',
  `revenue_from` double NOT NULL DEFAULT 0 COMMENT 'Doanh thu từ: Quan hệ lớn hơn hoặc bằng',
  `revenue_to` double NOT NULL DEFAULT 0 COMMENT 'Doanh thu đến: Quan hệ nhỏ hơn',
  `provider` varchar(10)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Nhà cung cấp',
  `discount` double NOT NULL DEFAULT 0 COMMENT 'Mức phí %',
  UNIQUE KEY `payment` (`payment`,`revenue_from`,`revenue_to`,`provider`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_smslog`
--

DROP TABLE IF EXISTS `tms_wallet_smslog`;
CREATE TABLE `tms_wallet_smslog` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `User_ID` varchar(15)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Service_ID` varchar(15)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Command_Code` varchar(160)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Message` varchar(160)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Request_ID` varchar(160)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `set_time` int(11) NOT NULL DEFAULT 0,
  `active` tinyint(5) NOT NULL DEFAULT 0,
  `client_ip` varchar(25)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `User_ID` (`User_ID`),
  KEY `set_time` (`set_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- ---------------------------------------


--
-- Table structure for table `tms_wallet_transaction`
--

DROP TABLE IF EXISTS `tms_wallet_transaction`;
CREATE TABLE `tms_wallet_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` int(11) NOT NULL DEFAULT 0 COMMENT 'Ngày khởi tạo giao dịch',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Tác động: 1 cộng tiền, -1 trừ tiền',
  `money_unit` char(3)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `money_total` double NOT NULL DEFAULT 0 COMMENT 'Số tiền thực cập nhật vào tài khoản thành viên',
  `money_net` double NOT NULL DEFAULT 0 COMMENT 'Số tiền thành viên thực hiện giao dịch',
  `money_discount` double NOT NULL DEFAULT 0 COMMENT 'Phí doanh nghiệp phải trả cho nhà cung cấp dịch vụ',
  `money_revenue` double NOT NULL DEFAULT 0 COMMENT 'Lợi nhuận mà doanh nghiệp đạt được',
  `userid` int(11) NOT NULL DEFAULT 0 COMMENT 'ID thành viên có tài khoản được tác động',
  `adminid` int(11) NOT NULL DEFAULT 0 COMMENT 'ID admin thực hiện giao dịch, nếu có giá trị này sẽ không tính vào doanh thu khi thống kê',
  `order_id` int(11) NOT NULL DEFAULT 0 COMMENT 'ID giao dịch nếu là thanh toán các đơn hàng từ module khác',
  `customer_id` int(11) NOT NULL DEFAULT 0 COMMENT 'ID người thực hiện giao dịch (Nạp tiền vào tài khoản)',
  `customer_name` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `customer_email` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `customer_phone` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `customer_address` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `customer_info` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `transaction_type` smallint(5) NOT NULL DEFAULT -1 COMMENT 'Loại giao dịch',
  `transaction_status` int(11) NOT NULL DEFAULT 0 COMMENT 'Trạng thái giao dịch được quy ước chuẩn theo module',
  `transaction_time` int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thực hiện thanh toán giao dịch',
  `transaction_info` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_data` text  COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Cổng thanh toán sử dụng',
  `provider` varchar(50)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Nhà cung cấp thẻ sử dụng nếu như đây là cổng thanh toán nạp thẻ, nếu không cần bỏ trống',
  `tokenkey` varchar(32)  COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `is_expired` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '0: Chưa hết hạn, 1: Hết hạn',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `adminid` (`adminid`),
  KEY `customer_id` (`customer_id`),
  KEY `created_time` (`created_time`),
  KEY `customer_name` (`customer_name`(191)),
  KEY `customer_email` (`customer_email`(191)),
  KEY `transaction_type` (`transaction_type`),
  KEY `is_expired` (`is_expired`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;