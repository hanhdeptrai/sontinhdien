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

$sample_base_siteurl = '/';
$sql_create_table = [];


$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_authors_oauth`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_authors_oauth` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) unsigned NOT NULL COMMENT 'ID của quản trị',
  `oauth_server` varchar(50) NOT NULL COMMENT 'Eg: facebook, google...',
  `oauth_uid` varchar(50) NOT NULL COMMENT 'ID duy nhất ứng với server',
  `oauth_email` varchar(50) NOT NULL COMMENT 'Email',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_id` (`admin_id`,`oauth_server`,`oauth_uid`),
  KEY `oauth_email` (`oauth_email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci COMMENT='Bảng lưu xác thực 2 bước từ oauth của admin'";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'admin_theme', 'admin_default')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'date_pattern', 'l, d/m/Y')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'time_pattern', 'H:i')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'online_upd', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'statistic', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'site_phone', '02822030777')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'mailer_mode', 'mail')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_host', 'smtp.gmail.com')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_ssl', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_port', '465')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'verify_peer_ssl', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'verify_peer_name_ssl', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_username', 'user@gmail.com')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_password', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'sender_name', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'sender_email', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'reply_name', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'reply_email', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'force_sender', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'force_reply', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'notify_email_error', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'googleAnalyticsID', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'googleAnalyticsSetDomainName', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'googleAnalyticsMethod', 'classic')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'googleAnalytics4ID', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'searchEngineUniqueID', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'zaloOfficialAccountID', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'metaTagsOgp', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'pageTitleMode', 'pagetitle')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'description_length', '170')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_unickmin', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_unickmax', '20')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_upassmin', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_upassmax', '32')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'dir_forum', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_unick_type', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_upass_type', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowmailchange', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserpublic', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowquestion', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowloginchange', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserlogin', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserloginmulti', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserreg', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'is_user_forum', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'openid_servers', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'openid_processing', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'user_check_pass_time', '1800')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'auto_login_after_reg', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'whoviewuser', '2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'ssl_https', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'facebook_client_id', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'facebook_client_secret', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'google_client_id', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'google_client_secret', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'referer_blocker', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'private_site', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'max_user_admin', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'max_user_number', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'captcha_area', 'r,m,p')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'captcha_type', 'captcha')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'dkim_included', 'sendmail,mail')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smime_included', 'sendmail,mail')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_csp', 'script-src &#039;self&#039; *.google.com *.google-analytics.com *.googletagmanager.com *.gstatic.com *.facebook.com *.facebook.net *.twitter.com *.zalo.me *.zaloapp.com *.tawk.to &#039;unsafe-inline&#039; &#039;unsafe-hashes&#039; &#039;unsafe-eval&#039;;object-src &#039;self&#039;;style-src &#039;self&#039; *.google.com *.googleapis.com *.tawk.to &#039;unsafe-inline&#039;;img-src &#039;self&#039; data: *.twitter.com *.google.com *.googleapis.com *.gstatic.com *.facebook.com tawk.link *.tawk.to static.nukeviet.vn;media-src &#039;self&#039; *.tawk.to;frame-src &#039;self&#039; *.google.com *.youtube.com *.facebook.com *.facebook.net *.twitter.com *.zalo.me;font-src &#039;self&#039; *.googleapis.com *.gstatic.com *.tawk.to;connect-src &#039;self&#039; *.zalo.me *.tawk.to wss://*.tawk.to;form-action &#039;self&#039; *.google.com;base-uri &#039;self&#039;;')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_csp_act', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_rp', 'no-referrer-when-downgrade, strict-origin-when-cross-origin')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_rp_act', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'ogp_image', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_gfx_num', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'closed_site', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'site_reopening_time', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'notification_active', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'notification_autodel', '15')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'site_keywords', 'NukeViet, portal, mysql, php')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'block_admin_ip', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admfirewall', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_autobackup', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_backup_ext', 'gz')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_backup_day', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'file_allowed_ext', 'adobe,archives,audio,documents,flash,images,real,video')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'forbid_extensions', 'htm,html,htmls,js,php,php3,php4,php5,phtml,inc')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'forbid_mimes', 'application/ecmascript,application/javascript,application/x-javascript,text/ecmascript,text/html,text/javascript,application/x-httpd-php,application/x-httpd-php-source,application/php,application/x-php,text/php,text/x-php')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_max_size', '11658067968')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_overflow_size', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_checking_mode', 'strong')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_alt_require', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_auto_alt', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_chunk_size', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'useactivate', '2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'allow_sitelangs', 'vi')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'read_type', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_enable', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_optional', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_endurl', '/')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_exturl', '.html')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_op_mod', 'shops')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'autocheckupdate', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'autoupdatetime', '24')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'gzip_method', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'authors_detail_main', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'spadmin_add_admin', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'timestamp', '1634655058')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'version', '4.5.00')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cookie_httponly', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admin_check_pass_time', '1800')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cookie_secure', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cookie_SameSite', 'Lax')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'is_flood_blocker', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'max_requests_60', '40')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'max_requests_300', '150')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'is_login_blocker', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'login_number_tracking', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'login_time_tracking', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'login_time_ban', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_display_errors_list', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'display_errors_list', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_auto_resize', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_interval', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_static_url', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cdn_url', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'two_step_verification', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admin_2step_opt', 'code')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admin_2step_default', 'code')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'recaptcha_sitekey', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'recaptcha_secretkey', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'recaptcha_type', 'image')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'recaptcha_ver', '2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'users_special', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crosssite_restrict', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crosssite_valid_domains', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crosssite_valid_ips', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crossadmin_restrict', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crossadmin_valid_domains', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crossadmin_valid_ips', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'domains_whitelist', '[\"youtube.com\",\"www.youtube.com\",\"google.com\",\"www.google.com\",\"drive.google.com\",\"docs.google.com\"]')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'domains_restrict', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'remote_api_access', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'remote_api_log', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'allow_null_origin', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ip_allow_null_origin', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cookie_notice_popup', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_gfx_width', '150')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_gfx_height', '40')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_max_width', '1900')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_max_height', '1900')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_mobile_mode_img', '480')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_live_cookie_time', '31104000')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_live_session_time', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_anti_iframe', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_anti_agent', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_allowed_html_tags', 'embed, object, param, a, b, blockquote, br, caption, col, colgroup, div, em, h1, h2, h3, h4, h5, h6, hr, i, img, li, p, span, strong, s, sub, sup, table, tbody, td, th, tr, u, ul, ol, iframe, figure, figcaption, video, audio, source, track, code, pre')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_debug', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_domain', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_logo', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_banner', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_favicon', 'uploads/favicon.ico')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_description', 'Rượu Đông Trùng Hạ Thảo')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_keywords', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'theme_type', 'r')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_theme', 'default')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'preview_theme', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'user_allowed_theme', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'mobile_theme', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_home_module', 'home')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'switch_mobi_des', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'upload_logo', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'upload_logo_pos', 'bottomRight')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologosize1', '50')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologosize2', '40')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologosize3', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologomod', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'name_show', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'cronjobs_next_time', '1634655077')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'disable_site_content', 'Vì lý do kỹ thuật website tạm ngưng hoạt động. Thành thật xin lỗi các bạn vì sự bất tiện này!')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'seotools', 'prcservice', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'captcha_area_comm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'activecomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'activecomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'captcha_area_comm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'contact', 'bodytext', 'Để không ngừng nâng cao chất lượng dịch vụ và đáp ứng tốt hơn nữa các yêu cầu của Quý khách, chúng tôi mong muốn nhận được các thông tin phản hồi. Nếu Quý khách có bất kỳ thắc mắc hoặc đóng góp nào, xin vui lòng liên hệ với chúng tôi theo thông tin dưới đây. Chúng tôi sẽ phản hồi lại Quý khách trong thời gian sớm nhất.<br />&nbsp;<iframe allowfullscreen=\"\" loading=\"lazy\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7837.38387876656!2d106.66564981471898!3d10.834870492281887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529e782712833%3A0x4c4014ff5d8d057c!2sSi%C3%AAu%20Mall!5e0!3m2!1svi!2s!4v1634653922381!5m2!1svi!2s\" style=\"border:0;width:100%; height:425px\"></iframe>')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'contact', 'sendcopymode', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'contact', 'captcha_type', 'captcha')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'banners', 'captcha_type', 'captcha')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'activecomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'captcha_area_comm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'comment', 'captcha_type', 'captcha')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tuyen-dung', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'statistics_timezone', 'Asia/Bangkok')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'site_email', 'info@tms.vn')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'error_set_logs', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'error_send_email', 'info@tms.vn')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'site_lang', 'vi')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'my_domains', 'hatinh.tms,dongtrunghathaoht.com,www.dongtrunghathaoht.com')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'site_timezone', 'byCountry')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'proxy_blocker', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'str_referer_blocker', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'lang_geo', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_server', 'localhost')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_port', '21')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_user_name', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_user_pass', 'hrL5UVHzUGQrxCr2ayTCLA,,')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_path', '/')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_check_login', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'allow_smsNap', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'smsConfigNap_keyword', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'smsConfigNap_port', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'smsConfigNap_prefix', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'smsConfigNap', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'minimum_amount', 'a:2:{s:3:\"VND\";s:46:\"10000,20000,50000,100000,200000,500000,1000000\";s:3:\"USD\";s:22:\"5,10,20,50,100,200,500\";}')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'payport_content', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'recharge_rate', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'allow_exchange_pay', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'transaction_expiration_time', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'next_update_transaction_time', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'accountants_emails', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'wallet', 'captcha_type', 'captcha')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'image_size', '100x100')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'home_data', 'all')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'home_view', 'viewgrid')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'per_page', '20')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'per_row', '3')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'money_unit', 'VND')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'weight_unit', 'g')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'post_auto_member', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'auto_check_order', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'format_order_id', 'S%06s')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'format_code_id', 'S%06s')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'facebookappid', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_guest_order', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_showhomtext', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_order', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_order_popup', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_order_non_detail', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_price', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_order_number', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'order_day', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'order_nexttime', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_payment', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'groups_price', '3')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_tooltip', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'timecheckstatus', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'show_product_code', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'show_compare', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'show_displays', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'use_shipping', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'use_coupons', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_wishlist', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_gift', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'active_warehouse', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'tags_alias', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'auto_tags', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'tags_remind', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'point_active', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'point_conversion', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'point_new_order', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'money_to_point', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'review_active', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'review_check', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'review_captcha', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'group_price', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'groups_notify', '3')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'template_active', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'download_active', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'download_groups', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'saleprice_active', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'sortdefault', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'alias_lower', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'activecomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'captcha', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'shops', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'home', 'next_execute', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'autologosize2', '40')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'autologosize3', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'module_logo', 'uploads/logo_edu.png')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'logo_position', 'bottom_right')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'structure_upload', 'Y_m')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'maxupload', '2684354')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'active_logo', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'autologosize1', '50')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'fbappid', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'social_tool', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'per_page_photo', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'per_line', '3')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'home_view', 'home_view_grid_by_album')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'home_layout', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'album_view', 'album_view_grid')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'home_title_cut', '60')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'per_page_album', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'origin_size_width', '1500')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'origin_size_height', '1500')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'cr_thumb_width', '270')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'cr_thumb_height', '210')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'cr_thumb_quality', '90')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'activecomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'captcha', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'photos', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'activecomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'captcha_area_comm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'tin-tuc', 'alloweditorcomm', '0')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_cronjobs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_cronjobs` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `start_time` int(11) unsigned NOT NULL DEFAULT '0',
  `inter_val` int(11) unsigned NOT NULL DEFAULT '0',
  `inter_val_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0: Lặp lại sau thời điểm bắt đầu thực tế, 1:lặp lại sau thời điểm bắt đầu trong CSDL',
  `run_file` varchar(255) NOT NULL,
  `run_func` varchar(255) NOT NULL,
  `params` varchar(255) DEFAULT NULL,
  `del` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_sys` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `act` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `last_time` int(11) unsigned NOT NULL DEFAULT '0',
  `last_result` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `vi_cron_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `is_sys` (`is_sys`)
) ENGINE=MyISAM  AUTO_INCREMENT=10  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (1, 1634609551, 5, 0, 'online_expired_del.php', 'cron_online_expired_del', '', 0, 1, 1, 1634654777, 1, 'Xóa các dòng ghi trạng thái online đã cũ trong CSDL')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (2, 1634609551, 1440, 0, 'dump_autobackup.php', 'cron_dump_autobackup', '', 0, 1, 1, 1634609575, 1, 'Tự động lưu CSDL')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (3, 1634609551, 60, 0, 'temp_download_destroy.php', 'cron_auto_del_temp_download', '', 0, 1, 1, 1634651522, 1, 'Xóa các file tạm trong thư mục tmp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (4, 1634609551, 30, 0, 'ip_logs_destroy.php', 'cron_del_ip_logs', '', 0, 1, 1, 1634653960, 1, 'Xóa IP log files, Xóa các file nhật ký truy cập')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (5, 1634609551, 1440, 0, 'error_log_destroy.php', 'cron_auto_del_error_log', '', 0, 1, 1, 1634609575, 1, 'Xóa các file error_log quá hạn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (6, 1634609551, 360, 0, 'error_log_sendmail.php', 'cron_auto_sendmail_error_log', '', 0, 1, 0, 0, 0, 'Gửi email các thông báo lỗi cho admin')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (7, 1634609551, 60, 0, 'ref_expired_del.php', 'cron_ref_expired_del', '', 0, 1, 1, 1634651522, 1, 'Xóa các referer quá hạn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (8, 1634609551, 60, 0, 'check_version.php', 'cron_auto_check_version', '', 0, 1, 1, 1634651522, 1, 'Kiểm tra phiên bản NukeViet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (9, 1634609551, 1440, 0, 'notification_autodel.php', 'cron_notification_autodel', '', 0, 1, 1, 1634609575, 1, 'Xóa thông báo cũ')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_extension_files`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_extension_files` (
  `idfile` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL DEFAULT 'other',
  `title` varchar(55) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `lastmodified` int(11) unsigned NOT NULL DEFAULT '0',
  `duplicate` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idfile`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_ips`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_ips` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(32) DEFAULT NULL,
  `mask` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `area` tinyint(3) NOT NULL,
  `begintime` int(11) DEFAULT NULL,
  `endtime` int(11) DEFAULT NULL,
  `notice` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`,`type`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_ips` (`id`, `type`, `ip`, `mask`, `area`, `begintime`, `endtime`, `notice`) VALUES (1, 1, '127.0.0.1', 0, 1, 1634609572, 0, '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_language`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_language` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `idfile` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `langtype` varchar(50) NOT NULL DEFAULT 'lang_module',
  `lang_key` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `filelang` (`idfile`,`lang_key`,`langtype`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_language_file`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_language_file` (
  `idfile` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(50) NOT NULL,
  `admin_file` varchar(200) NOT NULL DEFAULT '0',
  `langtype` varchar(50) NOT NULL DEFAULT 'lang_module',
  PRIMARY KEY (`idfile`),
  UNIQUE KEY `module` (`module`,`admin_file`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_notification`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_notification` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_view_allowed` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT 'Cấp quản trị được xem: 0,1,2',
  `logic_mode` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0: Cấp trên xem được cấp dưới, 1: chỉ cấp hoặc người được chỉ định',
  `send_to` varchar(250) NOT NULL DEFAULT '' COMMENT 'Danh sách id người nhận, phân cách bởi dấu phảy',
  `send_from` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `area` tinyint(1) unsigned NOT NULL,
  `language` char(3) NOT NULL,
  `module` varchar(50) NOT NULL,
  `obid` int(11) unsigned NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `add_time` int(11) unsigned NOT NULL,
  `view` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `send_to` (`send_to`),
  KEY `admin_view_allowed` (`admin_view_allowed`),
  KEY `logic_mode` (`logic_mode`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_plugin`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_plugin` (
  `pid` tinyint(4) NOT NULL AUTO_INCREMENT,
  `plugin_file` varchar(50) NOT NULL,
  `plugin_area` tinyint(4) NOT NULL,
  `weight` tinyint(4) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `plugin_file` (`plugin_file`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_plugin` (`pid`, `plugin_file`, `plugin_area`, `weight`) VALUES (1, 'qrcode.php', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_plugin` (`pid`, `plugin_file`, `plugin_area`, `weight`) VALUES (2, 'cdn_js_css_image.php', 3, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_setup_extensions`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_setup_extensions` (
  `id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL DEFAULT 'other',
  `title` varchar(55) NOT NULL,
  `is_sys` tinyint(1) NOT NULL DEFAULT '0',
  `is_virtual` tinyint(1) NOT NULL DEFAULT '0',
  `basename` varchar(50) NOT NULL DEFAULT '',
  `table_prefix` varchar(55) NOT NULL DEFAULT '',
  `version` varchar(50) NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `author` text NOT NULL,
  `note` varchar(255) DEFAULT '',
  UNIQUE KEY `title` (`type`,`title`),
  KEY `id` (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'about', 0, 0, 'page', 'about', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (19, 'module', 'banners', 1, 0, 'banners', 'banners', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (20, 'module', 'contact', 0, 1, 'contact', 'contact', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (1, 'module', 'news', 0, 1, 'news', 'news', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'home', 1, 0, 'home', 'home', '4.3.06 1627344000', 1634609952, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (284, 'module', 'seek', 1, 0, 'seek', 'seek', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (24, 'module', 'users', 1, 1, 'users', 'users', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (27, 'module', 'statistics', 0, 0, 'statistics', 'statistics', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (29, 'module', 'menu', 0, 0, 'menu', 'menu', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (283, 'module', 'feeds', 1, 0, 'feeds', 'feeds', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (282, 'module', 'page', 1, 1, 'page', 'page', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (281, 'module', 'comment', 1, 0, 'comment', 'comment', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (312, 'module', 'freecontent', 0, 1, 'freecontent', 'freecontent', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (327, 'module', 'two-step-verification', 1, 0, 'two-step-verification', 'two_step_verification', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (307, 'theme', 'default', 0, 0, 'default', 'default', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (311, 'theme', 'mobile_default', 0, 0, 'mobile_default', 'mobile_default', '4.5.00 1626512400', 1634609551, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'photos', 0, 1, 'photos', 'photos', '4.5.0 1623225600', 1634609952, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'shops', 0, 1, 'shops', 'shops', '4.3.00 1492476600', 1634609952, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'wallet', 1, 1, 'wallet', 'wallet', '4.6.00 1629100800', 1634609952, 'TMS Holdings <contact@thuongmaiso.vn>', 'Quản lý tiền thành viên')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'tin-tuc', 1, 1, 'tin-tuc', 'tin_tuc', '4.5.00 1626512400', 1634627981, 'TMS Holdings <contact@thuongmaiso.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'tuyen-dung', 0, 0, 'page', 'tuyen_dung', '', 1634652830, '', '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_setup_language`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_setup_language` (
  `lang` char(2) NOT NULL,
  `setup` tinyint(1) NOT NULL DEFAULT '0',
  `weight` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_language` (`lang`, `setup`, `weight`) VALUES ('vi', 1, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_block`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_block` (
  `bid` int(11) unsigned NOT NULL,
  `id` int(11) unsigned NOT NULL,
  `weight` int(11) unsigned NOT NULL,
  UNIQUE KEY `bid` (`bid`,`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block` (`bid`, `id`, `weight`) VALUES (1, 11, 5)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block` (`bid`, `id`, `weight`) VALUES (1, 10, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block` (`bid`, `id`, `weight`) VALUES (1, 9, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block` (`bid`, `id`, `weight`) VALUES (2, 6, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block` (`bid`, `id`, `weight`) VALUES (2, 5, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block` (`bid`, `id`, `weight`) VALUES (2, 4, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block` (`bid`, `id`, `weight`) VALUES (2, 3, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block` (`bid`, `id`, `weight`) VALUES (2, 2, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block` (`bid`, `id`, `weight`) VALUES (2, 1, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block` (`bid`, `id`, `weight`) VALUES (2, 7, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block` (`bid`, `id`, `weight`) VALUES (2, 8, 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_block_cat`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_block_cat` (
  `bid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `adddefault` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(250) NOT NULL,
  `weight` smallint(4) NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `edit_time` int(11) NOT NULL DEFAULT '0',
  `vi_title` varchar(250) NOT NULL DEFAULT '',
  `vi_alias` varchar(250) NOT NULL DEFAULT '',
  `vi_description` varchar(250) NOT NULL DEFAULT '',
  `vi_bodytext` text,
  `vi_keywords` text NOT NULL,
  `vi_tag_title` varchar(255) NOT NULL DEFAULT '',
  `vi_tag_description` mediumtext NOT NULL,
  PRIMARY KEY (`bid`),
  UNIQUE KEY `vi_alias` (`vi_alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block_cat` (`bid`, `adddefault`, `image`, `weight`, `add_time`, `edit_time`, `vi_title`, `vi_alias`, `vi_description`, `vi_bodytext`, `vi_keywords`, `vi_tag_title`, `vi_tag_description`) VALUES (1, 0, '', 1, 1433298294, 1433298294, 'Sản phẩm bán chạy', 'San-pham-ban-chay', '', '', '', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_block_cat` (`bid`, `adddefault`, `image`, `weight`, `add_time`, `edit_time`, `vi_title`, `vi_alias`, `vi_description`, `vi_bodytext`, `vi_keywords`, `vi_tag_title`, `vi_tag_description`) VALUES (2, 0, '', 2, 1433298325, 1433298325, 'Sản phẩm hot', 'San-pham-hot', '', '', '', '', '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_carrier`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_carrier` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `weight` tinyint(3) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_carrier_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_carrier_config` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `weight` tinyint(3) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_carrier_config_items`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_carrier_config_items` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `cid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `weight` smallint(4) unsigned NOT NULL,
  `add_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_carrier_config_location`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_carrier_config_location` (
  `cid` tinyint(3) unsigned NOT NULL,
  `iid` smallint(4) unsigned NOT NULL,
  `lid` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `cid` (`cid`,`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_carrier_config_weight`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_carrier_config_weight` (
  `iid` smallint(4) unsigned NOT NULL,
  `weight` double unsigned NOT NULL,
  `weight_unit` varchar(20) NOT NULL,
  `carrier_price` double NOT NULL,
  `carrier_price_unit` char(3) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_catalogs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_catalogs` (
  `catid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `image` varchar(250) NOT NULL DEFAULT '',
  `weight` smallint(4) unsigned NOT NULL DEFAULT '0',
  `sort` mediumint(8) NOT NULL DEFAULT '0',
  `lev` smallint(4) NOT NULL DEFAULT '0',
  `viewcat` varchar(50) NOT NULL DEFAULT 'viewcat_page_new',
  `numsubcat` int(11) NOT NULL DEFAULT '0',
  `subcatid` varchar(250) NOT NULL DEFAULT '',
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `numlinks` tinyint(2) unsigned NOT NULL DEFAULT '3',
  `newday` tinyint(4) NOT NULL DEFAULT '3',
  `typeprice` tinyint(4) NOT NULL DEFAULT '2',
  `form` varchar(250) NOT NULL DEFAULT '',
  `group_price` text NOT NULL,
  `viewdescriptionhtml` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `admins` mediumtext NOT NULL,
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `edit_time` int(11) unsigned NOT NULL DEFAULT '0',
  `groups_view` varchar(250) NOT NULL DEFAULT '',
  `cat_allow_point` tinyint(1) NOT NULL DEFAULT '0',
  `cat_number_point` tinyint(4) NOT NULL DEFAULT '0',
  `cat_number_product` tinyint(4) NOT NULL DEFAULT '0',
  `vi_title` varchar(250) NOT NULL DEFAULT '',
  `vi_title_custom` varchar(250) NOT NULL DEFAULT '',
  `vi_alias` varchar(250) NOT NULL DEFAULT '',
  `vi_description` varchar(250) NOT NULL DEFAULT '',
  `vi_descriptionhtml` text NOT NULL,
  `vi_keywords` text NOT NULL,
  `vi_tag_description` mediumtext,
  PRIMARY KEY (`catid`),
  UNIQUE KEY `vi_alias` (`vi_alias`),
  KEY `parentid` (`parentid`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_catalogs` (`catid`, `parentid`, `image`, `weight`, `sort`, `lev`, `viewcat`, `numsubcat`, `subcatid`, `inhome`, `numlinks`, `newday`, `typeprice`, `form`, `group_price`, `viewdescriptionhtml`, `admins`, `add_time`, `edit_time`, `groups_view`, `cat_allow_point`, `cat_number_point`, `cat_number_product`, `vi_title`, `vi_title_custom`, `vi_alias`, `vi_description`, `vi_descriptionhtml`, `vi_keywords`, `vi_tag_description`) VALUES (1, 0, '', 1, 1, 0, 'viewgrid', 0, '', 1, 4, 7, 1, '', '', 0, '', 1634617472, 1634617472, '6', 0, 0, 0, 'Rượu đông trùng hạ thảo', '', 'ruou-dong-trung-ha-thao', '', '', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_catalogs` (`catid`, `parentid`, `image`, `weight`, `sort`, `lev`, `viewcat`, `numsubcat`, `subcatid`, `inhome`, `numlinks`, `newday`, `typeprice`, `form`, `group_price`, `viewdescriptionhtml`, `admins`, `add_time`, `edit_time`, `groups_view`, `cat_allow_point`, `cat_number_point`, `cat_number_product`, `vi_title`, `vi_title_custom`, `vi_alias`, `vi_description`, `vi_descriptionhtml`, `vi_keywords`, `vi_tag_description`) VALUES (2, 0, '', 2, 2, 0, 'viewgrid', 0, '', 1, 4, 7, 1, '', '', 0, '', 1634617480, 1634617480, '6', 0, 0, 0, 'Phụ kiện rượu', '', 'Phu-kien-ruou', '', '', '', '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_coupons`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `code` varchar(50) NOT NULL DEFAULT '',
  `type` varchar(1) NOT NULL DEFAULT 'p',
  `discount` double NOT NULL DEFAULT '0',
  `total_amount` double NOT NULL DEFAULT '0',
  `date_start` int(11) unsigned NOT NULL DEFAULT '0',
  `date_end` int(11) unsigned NOT NULL DEFAULT '0',
  `uses_per_coupon` int(11) unsigned NOT NULL DEFAULT '0',
  `uses_per_coupon_count` int(11) NOT NULL DEFAULT '0',
  `date_added` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_coupons_history`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_coupons_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `date_added` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_coupons_product`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_coupons_product` (
  `cid` int(11) unsigned NOT NULL,
  `pid` int(11) unsigned NOT NULL,
  UNIQUE KEY `cid` (`cid`,`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_discounts`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_discounts` (
  `did` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `weight` smallint(6) NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `edit_time` int(11) unsigned NOT NULL DEFAULT '0',
  `begin_time` int(11) unsigned NOT NULL DEFAULT '0',
  `end_time` int(11) unsigned NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  `detail` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`did`),
  KEY `begin_time` (`begin_time`,`end_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_field`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_field` (
  `fid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `field` varchar(25) NOT NULL,
  `listtemplate` varchar(25) NOT NULL,
  `tab` varchar(250) NOT NULL DEFAULT '',
  `weight` int(10) unsigned NOT NULL DEFAULT '1',
  `field_type` enum('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect') NOT NULL DEFAULT 'textbox',
  `field_choices` text NOT NULL,
  `sql_choices` text NOT NULL,
  `match_type` enum('none','alphanumeric','email','url','regex','callback') NOT NULL DEFAULT 'none',
  `match_regex` varchar(250) NOT NULL DEFAULT '',
  `func_callback` varchar(75) NOT NULL DEFAULT '',
  `min_length` int(11) NOT NULL DEFAULT '0',
  `max_length` bigint(20) unsigned NOT NULL DEFAULT '0',
  `class` varchar(25) NOT NULL DEFAULT '',
  `language` text NOT NULL,
  `default_value` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`),
  UNIQUE KEY `field` (`field`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_field_value_vi`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_field_value_vi` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `rows_id` int(11) unsigned NOT NULL,
  `field_id` mediumint(8) NOT NULL,
  `field_value` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rows_id` (`rows_id`,`field_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_files`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_files` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(250) NOT NULL,
  `filesize` int(11) unsigned NOT NULL DEFAULT '0',
  `extension` varchar(10) NOT NULL DEFAULT '',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `download_groups` varchar(250) NOT NULL DEFAULT '-1',
  `status` tinyint(1) unsigned DEFAULT '1',
  `vi_title` varchar(250) NOT NULL DEFAULT '',
  `vi_description` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_files_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_files_rows` (
  `id_rows` int(11) unsigned NOT NULL,
  `id_files` mediumint(8) unsigned NOT NULL,
  `download_hits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `id_files` (`id_files`,`id_rows`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_group`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_group` (
  `groupid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `image` varchar(250) NOT NULL DEFAULT '',
  `weight` smallint(4) unsigned NOT NULL DEFAULT '0',
  `sort` mediumint(8) NOT NULL DEFAULT '0',
  `lev` smallint(4) NOT NULL DEFAULT '0',
  `viewgroup` varchar(50) NOT NULL DEFAULT 'viewgrid',
  `numsubgroup` int(11) NOT NULL DEFAULT '0',
  `subgroupid` varchar(250) NOT NULL DEFAULT '',
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `indetail` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `edit_time` int(11) unsigned NOT NULL DEFAULT '0',
  `numpro` int(11) unsigned NOT NULL DEFAULT '0',
  `in_order` tinyint(2) NOT NULL DEFAULT '0',
  `is_require` tinyint(1) NOT NULL DEFAULT '0',
  `vi_title` varchar(250) NOT NULL DEFAULT '',
  `vi_alias` varchar(250) NOT NULL DEFAULT '',
  `vi_description` varchar(250) NOT NULL DEFAULT '',
  `vi_keywords` text NOT NULL,
  PRIMARY KEY (`groupid`),
  UNIQUE KEY `vi_alias` (`vi_alias`),
  KEY `parentid` (`parentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_group_cateid`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_group_cateid` (
  `groupid` mediumint(8) unsigned NOT NULL,
  `cateid` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `groupid` (`groupid`,`cateid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_group_items`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_group_items` (
  `pro_id` int(11) unsigned NOT NULL DEFAULT '0',
  `group_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pro_id`,`group_id`),
  KEY `pro_id` (`pro_id`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_group_quantity`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_group_quantity` (
  `pro_id` int(11) unsigned NOT NULL DEFAULT '0',
  `listgroup` varchar(247) NOT NULL,
  `quantity` int(11) unsigned NOT NULL,
  UNIQUE KEY `pro_id` (`pro_id`,`listgroup`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_location`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_location` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL,
  `weight` smallint(4) unsigned NOT NULL DEFAULT '0',
  `sort` mediumint(8) NOT NULL DEFAULT '0',
  `lev` smallint(4) NOT NULL DEFAULT '0',
  `numsub` int(11) NOT NULL DEFAULT '0',
  `subid` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_money_vi`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_money_vi` (
  `id` mediumint(11) NOT NULL,
  `code` char(3) NOT NULL,
  `currency` varchar(250) NOT NULL,
  `symbol` varchar(3) NOT NULL DEFAULT '',
  `exchange` double NOT NULL DEFAULT '0',
  `round` varchar(10) NOT NULL,
  `number_format` varchar(5) NOT NULL DEFAULT ',||.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_money_vi` (`id`, `code`, `currency`, `symbol`, `exchange`, `round`, `number_format`) VALUES (840, 'USD', 'US Dollar', '$', '21000', '0.01', ',||.')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_money_vi` (`id`, `code`, `currency`, `symbol`, `exchange`, `round`, `number_format`) VALUES (704, 'VND', 'Vietnam Dong', 'đ', '1', '100', ',||.')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_orders`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_orders` (
  `order_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_code` varchar(30) NOT NULL DEFAULT '',
  `lang` char(2) NOT NULL DEFAULT 'en',
  `order_name` varchar(250) NOT NULL,
  `order_email` varchar(250) NOT NULL,
  `order_phone` varchar(20) NOT NULL,
  `order_address` varchar(250) NOT NULL,
  `order_note` text NOT NULL,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `admin_id` int(11) unsigned NOT NULL DEFAULT '0',
  `shop_id` int(11) unsigned NOT NULL DEFAULT '0',
  `who_is` int(2) unsigned NOT NULL DEFAULT '0',
  `unit_total` char(3) NOT NULL,
  `order_total` double unsigned NOT NULL DEFAULT '0',
  `order_time` int(11) unsigned NOT NULL DEFAULT '0',
  `edit_time` int(11) unsigned NOT NULL DEFAULT '0',
  `postip` varchar(100) NOT NULL,
  `order_view` tinyint(2) NOT NULL DEFAULT '0',
  `transaction_status` tinyint(4) NOT NULL,
  `transaction_id` int(11) NOT NULL DEFAULT '0',
  `transaction_count` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_code` (`order_code`),
  KEY `user_id` (`user_id`),
  KEY `order_time` (`order_time`),
  KEY `shop_id` (`shop_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_orders_id`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_orders_id` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `listgroupid` varchar(250) NOT NULL DEFAULT '',
  `proid` mediumint(9) NOT NULL,
  `num` mediumint(9) NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `discount_id` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderid` (`order_id`,`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_orders_id_group`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_orders_id_group` (
  `order_i` int(11) NOT NULL,
  `group_id` mediumint(8) NOT NULL,
  UNIQUE KEY `orderid` (`order_i`,`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_orders_shipping`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_orders_shipping` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) unsigned NOT NULL,
  `ship_name` varchar(250) NOT NULL,
  `ship_phone` varchar(25) NOT NULL,
  `ship_location_id` mediumint(8) unsigned NOT NULL,
  `ship_address_extend` varchar(250) NOT NULL,
  `ship_shops_id` tinyint(3) unsigned NOT NULL,
  `ship_carrier_id` tinyint(3) unsigned NOT NULL,
  `weight` double NOT NULL DEFAULT '0',
  `weight_unit` char(20) NOT NULL DEFAULT '',
  `ship_price` double NOT NULL DEFAULT '0',
  `ship_price_unit` char(3) NOT NULL DEFAULT '',
  `add_time` int(11) unsigned NOT NULL,
  `edit_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `add_time` (`add_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_point`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_point` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `point_total` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_point_history`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_point_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `order_id` int(11) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '0',
  `time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_point_queue`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_point_queue` (
  `order_id` int(11) NOT NULL,
  `point` mediumint(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_review`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_review` (
  `review_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  `sender` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `rating` int(1) NOT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `edit_time` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`review_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_rows` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `listcatid` int(11) NOT NULL DEFAULT '0',
  `user_id` mediumint(8) NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `edittime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `publtime` int(11) unsigned NOT NULL DEFAULT '0',
  `exptime` int(11) unsigned NOT NULL DEFAULT '0',
  `archive` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `product_code` varchar(250) NOT NULL DEFAULT '',
  `product_number` int(11) NOT NULL DEFAULT '0',
  `product_price` double NOT NULL DEFAULT '0',
  `price_config` text NOT NULL,
  `saleprice` double NOT NULL DEFAULT '0',
  `money_unit` char(3) NOT NULL,
  `product_unit` smallint(4) NOT NULL,
  `product_weight` double NOT NULL DEFAULT '0',
  `weight_unit` char(20) NOT NULL DEFAULT '',
  `discount_id` smallint(6) NOT NULL DEFAULT '0',
  `homeimgfile` varchar(250) NOT NULL DEFAULT '',
  `homeimgthumb` tinyint(4) NOT NULL DEFAULT '0',
  `homeimgalt` varchar(250) NOT NULL,
  `otherimage` text NOT NULL,
  `imgposition` tinyint(1) NOT NULL DEFAULT '1',
  `copyright` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gift_from` int(11) unsigned NOT NULL DEFAULT '0',
  `gift_to` int(11) unsigned NOT NULL DEFAULT '0',
  `inhome` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `allowed_comm` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `allowed_rating` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ratingdetail` varchar(250) NOT NULL DEFAULT '',
  `allowed_send` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `allowed_print` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `allowed_save` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `hitslm` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `num_sell` mediumint(8) NOT NULL DEFAULT '0',
  `showprice` tinyint(2) NOT NULL DEFAULT '0',
  `vi_title` varchar(250) NOT NULL DEFAULT '',
  `vi_alias` varchar(250) NOT NULL DEFAULT '',
  `vi_hometext` text NOT NULL,
  `vi_bodytext` mediumtext,
  `vi_gift_content` text NOT NULL,
  `vi_address` text NOT NULL,
  `vi_tag_title` varchar(255) NOT NULL DEFAULT '',
  `vi_tag_description` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vi_alias` (`vi_alias`),
  KEY `listcatid` (`listcatid`),
  KEY `user_id` (`user_id`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`)
) ENGINE=MyISAM  AUTO_INCREMENT=9  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_rows` (`id`, `listcatid`, `user_id`, `addtime`, `edittime`, `status`, `publtime`, `exptime`, `archive`, `product_code`, `product_number`, `product_price`, `price_config`, `saleprice`, `money_unit`, `product_unit`, `product_weight`, `weight_unit`, `discount_id`, `homeimgfile`, `homeimgthumb`, `homeimgalt`, `otherimage`, `imgposition`, `copyright`, `gift_from`, `gift_to`, `inhome`, `allowed_comm`, `allowed_rating`, `ratingdetail`, `allowed_send`, `allowed_print`, `allowed_save`, `hitstotal`, `hitscm`, `hitslm`, `num_sell`, `showprice`, `vi_title`, `vi_alias`, `vi_hometext`, `vi_bodytext`, `vi_gift_content`, `vi_address`, `vi_tag_title`, `vi_tag_description`) VALUES (1, 1, 1, 1634617775, 1634617775, 1, 1634617775, 0, 2, 'S000001', 100, '1000000', '', '0', 'VND', 1, '500', 'g', 0, '2021_10/ruou-dong-trung-ha-thao-5g.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 1, 0, 0, 0, 1, 'Rượu Đông Trùng Hạ Thảo 5g', 'ruou-dong-trung-ha-thao-5g', 'Sản phẩm rượu cao cấp từ 100% đông trùng hạ thảo dành cho phái mạnh, thiết kế dáng bình sang trọng, đẳng cấp quý phái. Hương vị êm dịu - ngọt thơm, phảng phất hương thơm thảo mộc, tốt cho sức khoẻ, phục hưng sinh lực hiệu quả.', 'Rượu đông trùng hạ thảo được biết đến như một loại rượu thuốc quý hiếm chữa trị nhiều bệnh, bồi bổ cơ thể, tăng cường sức khỏe. Vậy rượu ngâm đông trùng hạ thảo có tác dụng gì, cách sử dụng như thế nào để mang lại hiệu quả tốt nhất thì điều đó còn là một câu hỏi còn bỏ ngỏ của rất nhiều người. Hãy cùng đi tìm câu trả lời và các vấn đề liên quan đến rượu đông trùng trong bài viết dưới đây.&nbsp;<br />&nbsp;<h2>Những tác dụng của rượu đông trùng hạ thảo đã được y học kiểm chứng</h2><figure aria-describedby=\"caption-attachment-31389\" id=\"attachment_31389\"><img alt=\"Rượu Đông Trùng Hạ Thảo 5g\" data-ll-status=\"loaded\" height=\"704\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-5g.jpg\" title=\"Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường\" width=\"800\" /><figcaption id=\"caption-attachment-31389\">Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường</figcaption></figure><p>Không phải ngẫu nhiên mà&nbsp;đông trùng hạ thảo ngâm rượu&nbsp;lại được tung hô nhiều đến vậy. Dưới đây là những tác dụng rượu đông trùng hạ thảo với sức khỏe và sắc đẹp của con người đã được y học kiểm chứng.</p><ul>	<li>Bồi bổ sức khỏe: Đông trùng chứa nhiều vitamin và khoáng chất có tác dụng chống suy nhược cơ thể. Các axit amin kích thích sản sinh ATP, oxy rất tốt cho sự phát triển của tế bào, kích thích trao đổi chất. Vì vậy uống rượu thuốc giúp cơ thể khỏe mạnh, sinh lực dồi dào.</li>	<li>Tăng cường hệ miễn dịch: Thành phần Selen có trong đông trùng – một chất hiếm giúp ức chế hệ miễn dịch, tăng cường đề kháng, phòng ngừa bệnh tật. Vitamin A, C được cung cấp cho cơ thể sẽ tạo hàng rào chắn bảo vệ cơ thể khỏi các vi khuẩn, virus tấn công.</li>	<li>Tăng cường chức năng hệ tim mạch:&nbsp;Rượu đông trùng giúp hỗ trợ tuần hoàn máu và ngăn ngừa bệnh đột quỵ, tắc nghẽn mạch máu. Giảm cholesterol và chất xơ trong máu, ngăn chặn các chứng bệnh xơ vữa động mạch, máu nhiễm mỡ.</li>	<li>Cải thiện và tăng cường chức năng của thận:&nbsp;Thích hợp với người bị suy giảm chức năng thận, suy thận mãn tính, tiểu đêm, bí tiểu, tiểu rắt,…</li>	<li>Tái tạo và tăng cường chức năng cho lá phổi:&nbsp;Rượu đông trùng có chức năng tái tạo làm sạch tế bào phổi, những người thường xuyên hút thuốc lá hoặc làm việc trong môi trường khói bụi và ô nhiễm thì nên sử dụng để thanh lọc và duy trì sức khỏe cho lá phổi.</li>	<li>Tăng cường chức năng sinh lý:&nbsp;Các thành phần có trong rượu đông trùng kích thích sản sinh hormone nam giới, lưu thông khí huyết. Vì thế đông trùng hạ thảo như một thần dược cứu cánh đấng mày râu&nbsp;yếu sinh lý&nbsp;hay ở độ tuổi xế chiều. Đông trùng hạ thảo rượu cũng kích thích sản sinh và điều hòa nội tiết ở phụ nữ giải quyết các vấn đề do rối loạn nội tiết tố nữ gây ra như rụng tóc, rối loạn kinh nguyệt …</li>	<li>Thần dược làm đẹp cho chị em phụ nữ: Giúp chị em có làn da tươi sáng, hồng hào, cải thiện lão hóa da.</li></ul><figure aria-describedby=\"caption-attachment-31387\" id=\"attachment_31387\"><img alt=\"ruou dong trung ha thao 1\" data-ll-status=\"loaded\" height=\"521\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-1.jpg\" title=\"Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp\" width=\"730\" /><figcaption id=\"caption-attachment-31387\">Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp</figcaption></figure><p>Đó chính là lý do mà rượu đông trùng luôn được gọi với cái tên thần dược với sức khỏe và đây cũng chính là lời giải đáp cho câu hỏi rượu đông trùng hạ thảo có tác dụng gì.</p><h2>Uống rượu đông trùng đúng cách như thế nào?</h2><p>Ngâm rượu là&nbsp;cách dùng đông trùng hạ thảo&nbsp;hiệu quả&nbsp;rất được ưa chuộng, vừa bổ dưỡng vừa sang trọng, phù hợp với nhiều đối tượng khác nhau. Cách sử dụng rượu còn tùy thuộc vào rượu ngâm nguyên chất hay ngâm với các phụ gia khác và tùy thuộc vào bệnh lý nền và sức khỏe của người dùng.</p><p>Dưới đây là một số cách sử dụng&nbsp;trùng thảo&nbsp;cho các bạn tham khảo:</p><ul>	<li>Rượu đông trùng nguyên con: Đối với loại rượu này thì ngày uống 1 lần, mỗi lần 1 chén nhỏ trước bữa ăn hoặc trước khi đi ngủ 30 phút giúp tăng cường sinh lý, cải thiện sức khỏe, tăng cường hệ miễn dịch.</li>	<li>Rượu đông trùng ngâm nhung hươu:&nbsp;mỗi ngày uống khoảng 20-30ml chia làm 2 lần giúp cải thiện sinh lý, bổ thận tráng dương, cân bằng khí huyết.</li>	<li>Rượu đông trùng ngâm&nbsp;kỷ tử:&nbsp;ngày dùng 1-2 lần, mỗi lần 15ml vào trước bữa ăn hoặc trước khi đi ngủ buổi tối 30 phút dùng điều trị chứng xuất tinh sớm, liệt dương cho nam giới, phục hồi thể lực cho người già, người mới ốm dậy</li>	<li>Rượu đông trùng nhân sâm:&nbsp;ngày uống 1 chén nhỏ trước khi đi ngủ 1 tiếng giúp bổ thận tráng dương, tăng cường sinh lực và sức khỏe, bồi bổ cơ thể, nâng cao sức đề kháng</li></ul><h2>Những điều cần lưu ý khi sử dụng rượu đông trùng hạ thảo</h2><p>Để tận dụng được tối đa&nbsp;công dụng của rượu đông trùng&nbsp;thì khi sử dụng người dùng cần lưu ý một số điều sau đây:</p><ul>	<li>Nên dùng rượu đông trùng vào buổi sáng trước khi ăn. Không nên dùng buổi tối dễ gây ra mất ngủ và mệt mỏi.</li>	<li>Một số đối tượng không nên dùng rượu đông trùng như trẻ em dưới 5 tuổi, người bị bệnh máu khó đông hoặc rối loạn đông màu, người chuẩn bị phẫu thuật, người mắc bệnh tự miễn dịch (đa xơ, viêm khớp dạng thấp …), phụ nữ có thai và đang cho con bú cũng không nên sử dụng.</li>	<li>Không tự ý sử dụng rượu đông trùng khi chưa tham khảo ý kiến chuyên gia, không lạm dụng vì dễ gây ra tình trạng suy thận.</li></ul><p>&nbsp;</p><h2>Rượu đông trùng hạ thảo giá bao nhiêu và có đắt không?</h2><p>Giá rượu đông trùng hạ thảo 500ml, 750ml … sẽ khác nhau và thường giao động trong khoảng từ 350 ngàn đến 2 triệu tùy vào dung tích. Trước khi chọn mua rượu các bạn cũng nên lưu ý và tìm hiểu cách phân biệt rượu thật giả. Nên chọn cơ sở uy tín có bảng giá rượu đông trùng rõ ràng để mua được sản phẩm tốt nhất cho sức khỏe nhé. Đừng ham của rẻ mà tiền mất, tật mang rồi lại rước bệnh vào người.</p><p>Hiện nay, Đông trùng hạ thảo Vietfarm là đơn vị uy tín đứng đầu cả nước về nuôi cấy và phân phối các sản phẩm nấm trùng thảo được giới chuyên gia cũng như người tiêu dùng đánh giá cao. Bên cạnh dòng sản phẩm dạng sinh khối tươi hay sấy khô, Vietfarm có các loại rượu ngâm đông trùng hạ thảo kết hợp cùng một số loại dược liệu quý khác như: nhung hươu, nấm lim xanh, ba kích, nhục thung dung, tỏa dương…</p><p>Mỗi bình rượu đông trùng Vietfarm đều ngâm theo tỷ lệ vàng nhất định, được nghiên cứu kỹ lưỡng bởi các chuyên gia đầu ngành trong lĩnh vực YHCT đến từ Viện nghiên cứu và phát triển Y dược cổ truyền dân tộc. Là sự kết hợp giữa rượu thảo dược mệnh danh tiên tửu chốn nhân gian của Mẫu Sơn (Lạng Sơn) và loại đông trùng hạ thảo nuôi cấy&nbsp;BÁN TỰ NHIÊN&nbsp;cho hàm lượng dưỡng chất tối ưu nhất.</p><p>Đặc biệt, rượu Đông trùng hạ thảo Vietfarm trải qua quá trình chưng cất 7 tầng tháp, khử hoàn toàn các độc tố andehit và methanol nên không gây đau đầu, chóng mặt, nóng gan, hại thận. Đây cũng là sản phẩm được ưa chuộng bởi nhiều nghệ sĩ nổi tiếng cùng hàng ngàn người tiêu dùng trên cả nước.</p>&nbsp;', '', '', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_rows` (`id`, `listcatid`, `user_id`, `addtime`, `edittime`, `status`, `publtime`, `exptime`, `archive`, `product_code`, `product_number`, `product_price`, `price_config`, `saleprice`, `money_unit`, `product_unit`, `product_weight`, `weight_unit`, `discount_id`, `homeimgfile`, `homeimgthumb`, `homeimgalt`, `otherimage`, `imgposition`, `copyright`, `gift_from`, `gift_to`, `inhome`, `allowed_comm`, `allowed_rating`, `ratingdetail`, `allowed_send`, `allowed_print`, `allowed_save`, `hitstotal`, `hitscm`, `hitslm`, `num_sell`, `showprice`, `vi_title`, `vi_alias`, `vi_hometext`, `vi_bodytext`, `vi_gift_content`, `vi_address`, `vi_tag_title`, `vi_tag_description`) VALUES (2, 1, 1, 1634617775, 1634617775, 1, 1634617795, 0, 2, 'S000002', 100, '2000000', '', '0', 'VND', 1, '500', 'g', 0, '2021_10/ruou-dong-trung-ha-thao-10g.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 1, 0, 0, 0, 1, 'Rượu Đông Trùng Hạ Thảo 10g', 'ruou-dong-trung-ha-thao-10g', 'Sản phẩm rượu cao cấp từ 100% đông trùng hạ thảo dành cho phái mạnh, thiết kế dáng bình sang trọng, đẳng cấp quý phái. Hương vị êm dịu - ngọt thơm, phảng phất hương thơm thảo mộc, tốt cho sức khoẻ, phục hưng sinh lực hiệu quả.', 'Rượu đông trùng hạ thảo được biết đến như một loại rượu thuốc quý hiếm chữa trị nhiều bệnh, bồi bổ cơ thể, tăng cường sức khỏe. Vậy rượu ngâm đông trùng hạ thảo có tác dụng gì, cách sử dụng như thế nào để mang lại hiệu quả tốt nhất thì điều đó còn là một câu hỏi còn bỏ ngỏ của rất nhiều người. Hãy cùng đi tìm câu trả lời và các vấn đề liên quan đến rượu đông trùng trong bài viết dưới đây.&nbsp;<br />&nbsp;<h2>Những tác dụng của rượu đông trùng hạ thảo đã được y học kiểm chứng</h2><figure aria-describedby=\"caption-attachment-31389\" id=\"attachment_31389\"><img alt=\"Rượu Đông Trùng Hạ Thảo 5g\" data-ll-status=\"loaded\" height=\"704\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-5g.jpg\" title=\"Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường\" width=\"800\" /><figcaption id=\"caption-attachment-31389\">Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường</figcaption></figure><p>Không phải ngẫu nhiên mà&nbsp;đông trùng hạ thảo ngâm rượu&nbsp;lại được tung hô nhiều đến vậy. Dưới đây là những tác dụng rượu đông trùng hạ thảo với sức khỏe và sắc đẹp của con người đã được y học kiểm chứng.</p><ul>	<li>Bồi bổ sức khỏe: Đông trùng chứa nhiều vitamin và khoáng chất có tác dụng chống suy nhược cơ thể. Các axit amin kích thích sản sinh ATP, oxy rất tốt cho sự phát triển của tế bào, kích thích trao đổi chất. Vì vậy uống rượu thuốc giúp cơ thể khỏe mạnh, sinh lực dồi dào.</li>	<li>Tăng cường hệ miễn dịch: Thành phần Selen có trong đông trùng – một chất hiếm giúp ức chế hệ miễn dịch, tăng cường đề kháng, phòng ngừa bệnh tật. Vitamin A, C được cung cấp cho cơ thể sẽ tạo hàng rào chắn bảo vệ cơ thể khỏi các vi khuẩn, virus tấn công.</li>	<li>Tăng cường chức năng hệ tim mạch:&nbsp;Rượu đông trùng giúp hỗ trợ tuần hoàn máu và ngăn ngừa bệnh đột quỵ, tắc nghẽn mạch máu. Giảm cholesterol và chất xơ trong máu, ngăn chặn các chứng bệnh xơ vữa động mạch, máu nhiễm mỡ.</li>	<li>Cải thiện và tăng cường chức năng của thận:&nbsp;Thích hợp với người bị suy giảm chức năng thận, suy thận mãn tính, tiểu đêm, bí tiểu, tiểu rắt,…</li>	<li>Tái tạo và tăng cường chức năng cho lá phổi:&nbsp;Rượu đông trùng có chức năng tái tạo làm sạch tế bào phổi, những người thường xuyên hút thuốc lá hoặc làm việc trong môi trường khói bụi và ô nhiễm thì nên sử dụng để thanh lọc và duy trì sức khỏe cho lá phổi.</li>	<li>Tăng cường chức năng sinh lý:&nbsp;Các thành phần có trong rượu đông trùng kích thích sản sinh hormone nam giới, lưu thông khí huyết. Vì thế đông trùng hạ thảo như một thần dược cứu cánh đấng mày râu&nbsp;yếu sinh lý&nbsp;hay ở độ tuổi xế chiều. Đông trùng hạ thảo rượu cũng kích thích sản sinh và điều hòa nội tiết ở phụ nữ giải quyết các vấn đề do rối loạn nội tiết tố nữ gây ra như rụng tóc, rối loạn kinh nguyệt …</li>	<li>Thần dược làm đẹp cho chị em phụ nữ: Giúp chị em có làn da tươi sáng, hồng hào, cải thiện lão hóa da.</li></ul><figure aria-describedby=\"caption-attachment-31387\" id=\"attachment_31387\"><img alt=\"ruou dong trung ha thao 1\" data-ll-status=\"loaded\" height=\"521\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-1.jpg\" title=\"Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp\" width=\"730\" /><figcaption id=\"caption-attachment-31387\">Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp</figcaption></figure><p>Đó chính là lý do mà rượu đông trùng luôn được gọi với cái tên thần dược với sức khỏe và đây cũng chính là lời giải đáp cho câu hỏi rượu đông trùng hạ thảo có tác dụng gì.</p><h2>Uống rượu đông trùng đúng cách như thế nào?</h2><p>Ngâm rượu là&nbsp;cách dùng đông trùng hạ thảo&nbsp;hiệu quả&nbsp;rất được ưa chuộng, vừa bổ dưỡng vừa sang trọng, phù hợp với nhiều đối tượng khác nhau. Cách sử dụng rượu còn tùy thuộc vào rượu ngâm nguyên chất hay ngâm với các phụ gia khác và tùy thuộc vào bệnh lý nền và sức khỏe của người dùng.</p><p>Dưới đây là một số cách sử dụng&nbsp;trùng thảo&nbsp;cho các bạn tham khảo:</p><ul>	<li>Rượu đông trùng nguyên con: Đối với loại rượu này thì ngày uống 1 lần, mỗi lần 1 chén nhỏ trước bữa ăn hoặc trước khi đi ngủ 30 phút giúp tăng cường sinh lý, cải thiện sức khỏe, tăng cường hệ miễn dịch.</li>	<li>Rượu đông trùng ngâm nhung hươu:&nbsp;mỗi ngày uống khoảng 20-30ml chia làm 2 lần giúp cải thiện sinh lý, bổ thận tráng dương, cân bằng khí huyết.</li>	<li>Rượu đông trùng ngâm&nbsp;kỷ tử:&nbsp;ngày dùng 1-2 lần, mỗi lần 15ml vào trước bữa ăn hoặc trước khi đi ngủ buổi tối 30 phút dùng điều trị chứng xuất tinh sớm, liệt dương cho nam giới, phục hồi thể lực cho người già, người mới ốm dậy</li>	<li>Rượu đông trùng nhân sâm:&nbsp;ngày uống 1 chén nhỏ trước khi đi ngủ 1 tiếng giúp bổ thận tráng dương, tăng cường sinh lực và sức khỏe, bồi bổ cơ thể, nâng cao sức đề kháng</li></ul><h2>Những điều cần lưu ý khi sử dụng rượu đông trùng hạ thảo</h2><p>Để tận dụng được tối đa&nbsp;công dụng của rượu đông trùng&nbsp;thì khi sử dụng người dùng cần lưu ý một số điều sau đây:</p><ul>	<li>Nên dùng rượu đông trùng vào buổi sáng trước khi ăn. Không nên dùng buổi tối dễ gây ra mất ngủ và mệt mỏi.</li>	<li>Một số đối tượng không nên dùng rượu đông trùng như trẻ em dưới 5 tuổi, người bị bệnh máu khó đông hoặc rối loạn đông màu, người chuẩn bị phẫu thuật, người mắc bệnh tự miễn dịch (đa xơ, viêm khớp dạng thấp …), phụ nữ có thai và đang cho con bú cũng không nên sử dụng.</li>	<li>Không tự ý sử dụng rượu đông trùng khi chưa tham khảo ý kiến chuyên gia, không lạm dụng vì dễ gây ra tình trạng suy thận.</li></ul><p>&nbsp;</p><h2>Rượu đông trùng hạ thảo giá bao nhiêu và có đắt không?</h2><p>Giá rượu đông trùng hạ thảo 500ml, 750ml … sẽ khác nhau và thường giao động trong khoảng từ 350 ngàn đến 2 triệu tùy vào dung tích. Trước khi chọn mua rượu các bạn cũng nên lưu ý và tìm hiểu cách phân biệt rượu thật giả. Nên chọn cơ sở uy tín có bảng giá rượu đông trùng rõ ràng để mua được sản phẩm tốt nhất cho sức khỏe nhé. Đừng ham của rẻ mà tiền mất, tật mang rồi lại rước bệnh vào người.</p><p>Hiện nay, Đông trùng hạ thảo Vietfarm là đơn vị uy tín đứng đầu cả nước về nuôi cấy và phân phối các sản phẩm nấm trùng thảo được giới chuyên gia cũng như người tiêu dùng đánh giá cao. Bên cạnh dòng sản phẩm dạng sinh khối tươi hay sấy khô, Vietfarm có các loại rượu ngâm đông trùng hạ thảo kết hợp cùng một số loại dược liệu quý khác như: nhung hươu, nấm lim xanh, ba kích, nhục thung dung, tỏa dương…</p><p>Mỗi bình rượu đông trùng Vietfarm đều ngâm theo tỷ lệ vàng nhất định, được nghiên cứu kỹ lưỡng bởi các chuyên gia đầu ngành trong lĩnh vực YHCT đến từ Viện nghiên cứu và phát triển Y dược cổ truyền dân tộc. Là sự kết hợp giữa rượu thảo dược mệnh danh tiên tửu chốn nhân gian của Mẫu Sơn (Lạng Sơn) và loại đông trùng hạ thảo nuôi cấy&nbsp;BÁN TỰ NHIÊN&nbsp;cho hàm lượng dưỡng chất tối ưu nhất.</p><p>Đặc biệt, rượu Đông trùng hạ thảo Vietfarm trải qua quá trình chưng cất 7 tầng tháp, khử hoàn toàn các độc tố andehit và methanol nên không gây đau đầu, chóng mặt, nóng gan, hại thận. Đây cũng là sản phẩm được ưa chuộng bởi nhiều nghệ sĩ nổi tiếng cùng hàng ngàn người tiêu dùng trên cả nước.</p>', '', '', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_rows` (`id`, `listcatid`, `user_id`, `addtime`, `edittime`, `status`, `publtime`, `exptime`, `archive`, `product_code`, `product_number`, `product_price`, `price_config`, `saleprice`, `money_unit`, `product_unit`, `product_weight`, `weight_unit`, `discount_id`, `homeimgfile`, `homeimgthumb`, `homeimgalt`, `otherimage`, `imgposition`, `copyright`, `gift_from`, `gift_to`, `inhome`, `allowed_comm`, `allowed_rating`, `ratingdetail`, `allowed_send`, `allowed_print`, `allowed_save`, `hitstotal`, `hitscm`, `hitslm`, `num_sell`, `showprice`, `vi_title`, `vi_alias`, `vi_hometext`, `vi_bodytext`, `vi_gift_content`, `vi_address`, `vi_tag_title`, `vi_tag_description`) VALUES (3, 1, 1, 1634617775, 1634617775, 1, 1634617821, 0, 2, 'S000003', 100, '3000000', '', '0', 'VND', 1, '500', 'g', 0, '2021_10/ruou-dong-trung-ha-thao-20g.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 0, 0, 0, 0, 1, 'Rượu Đông Trùng Hạ Thảo 20g', 'ruou-dong-trung-ha-thao-20g', 'Sản phẩm rượu cao cấp từ 100% đông trùng hạ thảo dành cho phái mạnh, thiết kế dáng bình sang trọng, đẳng cấp quý phái. Hương vị êm dịu - ngọt thơm, phảng phất hương thơm thảo mộc, tốt cho sức khoẻ, phục hưng sinh lực hiệu quả.', 'Rượu đông trùng hạ thảo được biết đến như một loại rượu thuốc quý hiếm chữa trị nhiều bệnh, bồi bổ cơ thể, tăng cường sức khỏe. Vậy rượu ngâm đông trùng hạ thảo có tác dụng gì, cách sử dụng như thế nào để mang lại hiệu quả tốt nhất thì điều đó còn là một câu hỏi còn bỏ ngỏ của rất nhiều người. Hãy cùng đi tìm câu trả lời và các vấn đề liên quan đến rượu đông trùng trong bài viết dưới đây.&nbsp;<br />&nbsp;<h2>Những tác dụng của rượu đông trùng hạ thảo đã được y học kiểm chứng</h2><figure aria-describedby=\"caption-attachment-31389\" id=\"attachment_31389\"><img alt=\"Rượu Đông Trùng Hạ Thảo 5g\" data-ll-status=\"loaded\" height=\"704\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-5g.jpg\" title=\"Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường\" width=\"800\" /><figcaption id=\"caption-attachment-31389\">Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường</figcaption></figure><p>Không phải ngẫu nhiên mà&nbsp;đông trùng hạ thảo ngâm rượu&nbsp;lại được tung hô nhiều đến vậy. Dưới đây là những tác dụng rượu đông trùng hạ thảo với sức khỏe và sắc đẹp của con người đã được y học kiểm chứng.</p><ul>	<li>Bồi bổ sức khỏe: Đông trùng chứa nhiều vitamin và khoáng chất có tác dụng chống suy nhược cơ thể. Các axit amin kích thích sản sinh ATP, oxy rất tốt cho sự phát triển của tế bào, kích thích trao đổi chất. Vì vậy uống rượu thuốc giúp cơ thể khỏe mạnh, sinh lực dồi dào.</li>	<li>Tăng cường hệ miễn dịch: Thành phần Selen có trong đông trùng – một chất hiếm giúp ức chế hệ miễn dịch, tăng cường đề kháng, phòng ngừa bệnh tật. Vitamin A, C được cung cấp cho cơ thể sẽ tạo hàng rào chắn bảo vệ cơ thể khỏi các vi khuẩn, virus tấn công.</li>	<li>Tăng cường chức năng hệ tim mạch:&nbsp;Rượu đông trùng giúp hỗ trợ tuần hoàn máu và ngăn ngừa bệnh đột quỵ, tắc nghẽn mạch máu. Giảm cholesterol và chất xơ trong máu, ngăn chặn các chứng bệnh xơ vữa động mạch, máu nhiễm mỡ.</li>	<li>Cải thiện và tăng cường chức năng của thận:&nbsp;Thích hợp với người bị suy giảm chức năng thận, suy thận mãn tính, tiểu đêm, bí tiểu, tiểu rắt,…</li>	<li>Tái tạo và tăng cường chức năng cho lá phổi:&nbsp;Rượu đông trùng có chức năng tái tạo làm sạch tế bào phổi, những người thường xuyên hút thuốc lá hoặc làm việc trong môi trường khói bụi và ô nhiễm thì nên sử dụng để thanh lọc và duy trì sức khỏe cho lá phổi.</li>	<li>Tăng cường chức năng sinh lý:&nbsp;Các thành phần có trong rượu đông trùng kích thích sản sinh hormone nam giới, lưu thông khí huyết. Vì thế đông trùng hạ thảo như một thần dược cứu cánh đấng mày râu&nbsp;yếu sinh lý&nbsp;hay ở độ tuổi xế chiều. Đông trùng hạ thảo rượu cũng kích thích sản sinh và điều hòa nội tiết ở phụ nữ giải quyết các vấn đề do rối loạn nội tiết tố nữ gây ra như rụng tóc, rối loạn kinh nguyệt …</li>	<li>Thần dược làm đẹp cho chị em phụ nữ: Giúp chị em có làn da tươi sáng, hồng hào, cải thiện lão hóa da.</li></ul><figure aria-describedby=\"caption-attachment-31387\" id=\"attachment_31387\"><img alt=\"ruou dong trung ha thao 1\" data-ll-status=\"loaded\" height=\"521\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-1.jpg\" title=\"Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp\" width=\"730\" /><figcaption id=\"caption-attachment-31387\">Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp</figcaption></figure><p>Đó chính là lý do mà rượu đông trùng luôn được gọi với cái tên thần dược với sức khỏe và đây cũng chính là lời giải đáp cho câu hỏi rượu đông trùng hạ thảo có tác dụng gì.</p><h2>Uống rượu đông trùng đúng cách như thế nào?</h2><p>Ngâm rượu là&nbsp;cách dùng đông trùng hạ thảo&nbsp;hiệu quả&nbsp;rất được ưa chuộng, vừa bổ dưỡng vừa sang trọng, phù hợp với nhiều đối tượng khác nhau. Cách sử dụng rượu còn tùy thuộc vào rượu ngâm nguyên chất hay ngâm với các phụ gia khác và tùy thuộc vào bệnh lý nền và sức khỏe của người dùng.</p><p>Dưới đây là một số cách sử dụng&nbsp;trùng thảo&nbsp;cho các bạn tham khảo:</p><ul>	<li>Rượu đông trùng nguyên con: Đối với loại rượu này thì ngày uống 1 lần, mỗi lần 1 chén nhỏ trước bữa ăn hoặc trước khi đi ngủ 30 phút giúp tăng cường sinh lý, cải thiện sức khỏe, tăng cường hệ miễn dịch.</li>	<li>Rượu đông trùng ngâm nhung hươu:&nbsp;mỗi ngày uống khoảng 20-30ml chia làm 2 lần giúp cải thiện sinh lý, bổ thận tráng dương, cân bằng khí huyết.</li>	<li>Rượu đông trùng ngâm&nbsp;kỷ tử:&nbsp;ngày dùng 1-2 lần, mỗi lần 15ml vào trước bữa ăn hoặc trước khi đi ngủ buổi tối 30 phút dùng điều trị chứng xuất tinh sớm, liệt dương cho nam giới, phục hồi thể lực cho người già, người mới ốm dậy</li>	<li>Rượu đông trùng nhân sâm:&nbsp;ngày uống 1 chén nhỏ trước khi đi ngủ 1 tiếng giúp bổ thận tráng dương, tăng cường sinh lực và sức khỏe, bồi bổ cơ thể, nâng cao sức đề kháng</li></ul><h2>Những điều cần lưu ý khi sử dụng rượu đông trùng hạ thảo</h2><p>Để tận dụng được tối đa&nbsp;công dụng của rượu đông trùng&nbsp;thì khi sử dụng người dùng cần lưu ý một số điều sau đây:</p><ul>	<li>Nên dùng rượu đông trùng vào buổi sáng trước khi ăn. Không nên dùng buổi tối dễ gây ra mất ngủ và mệt mỏi.</li>	<li>Một số đối tượng không nên dùng rượu đông trùng như trẻ em dưới 5 tuổi, người bị bệnh máu khó đông hoặc rối loạn đông màu, người chuẩn bị phẫu thuật, người mắc bệnh tự miễn dịch (đa xơ, viêm khớp dạng thấp …), phụ nữ có thai và đang cho con bú cũng không nên sử dụng.</li>	<li>Không tự ý sử dụng rượu đông trùng khi chưa tham khảo ý kiến chuyên gia, không lạm dụng vì dễ gây ra tình trạng suy thận.</li></ul><p>&nbsp;</p><h2>Rượu đông trùng hạ thảo giá bao nhiêu và có đắt không?</h2><p>Giá rượu đông trùng hạ thảo 500ml, 750ml … sẽ khác nhau và thường giao động trong khoảng từ 350 ngàn đến 2 triệu tùy vào dung tích. Trước khi chọn mua rượu các bạn cũng nên lưu ý và tìm hiểu cách phân biệt rượu thật giả. Nên chọn cơ sở uy tín có bảng giá rượu đông trùng rõ ràng để mua được sản phẩm tốt nhất cho sức khỏe nhé. Đừng ham của rẻ mà tiền mất, tật mang rồi lại rước bệnh vào người.</p><p>Hiện nay, Đông trùng hạ thảo Vietfarm là đơn vị uy tín đứng đầu cả nước về nuôi cấy và phân phối các sản phẩm nấm trùng thảo được giới chuyên gia cũng như người tiêu dùng đánh giá cao. Bên cạnh dòng sản phẩm dạng sinh khối tươi hay sấy khô, Vietfarm có các loại rượu ngâm đông trùng hạ thảo kết hợp cùng một số loại dược liệu quý khác như: nhung hươu, nấm lim xanh, ba kích, nhục thung dung, tỏa dương…</p><p>Mỗi bình rượu đông trùng Vietfarm đều ngâm theo tỷ lệ vàng nhất định, được nghiên cứu kỹ lưỡng bởi các chuyên gia đầu ngành trong lĩnh vực YHCT đến từ Viện nghiên cứu và phát triển Y dược cổ truyền dân tộc. Là sự kết hợp giữa rượu thảo dược mệnh danh tiên tửu chốn nhân gian của Mẫu Sơn (Lạng Sơn) và loại đông trùng hạ thảo nuôi cấy&nbsp;BÁN TỰ NHIÊN&nbsp;cho hàm lượng dưỡng chất tối ưu nhất.</p><p>Đặc biệt, rượu Đông trùng hạ thảo Vietfarm trải qua quá trình chưng cất 7 tầng tháp, khử hoàn toàn các độc tố andehit và methanol nên không gây đau đầu, chóng mặt, nóng gan, hại thận. Đây cũng là sản phẩm được ưa chuộng bởi nhiều nghệ sĩ nổi tiếng cùng hàng ngàn người tiêu dùng trên cả nước.</p>', '', '', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_rows` (`id`, `listcatid`, `user_id`, `addtime`, `edittime`, `status`, `publtime`, `exptime`, `archive`, `product_code`, `product_number`, `product_price`, `price_config`, `saleprice`, `money_unit`, `product_unit`, `product_weight`, `weight_unit`, `discount_id`, `homeimgfile`, `homeimgthumb`, `homeimgalt`, `otherimage`, `imgposition`, `copyright`, `gift_from`, `gift_to`, `inhome`, `allowed_comm`, `allowed_rating`, `ratingdetail`, `allowed_send`, `allowed_print`, `allowed_save`, `hitstotal`, `hitscm`, `hitslm`, `num_sell`, `showprice`, `vi_title`, `vi_alias`, `vi_hometext`, `vi_bodytext`, `vi_gift_content`, `vi_address`, `vi_tag_title`, `vi_tag_description`) VALUES (4, 1, 1, 1634617775, 1634617775, 1, 1634617831, 0, 2, 'S000004', 100, '3000000', '', '0', 'VND', 1, '500', 'g', 0, '2021_10/ruou-dong-trung-ha-thao-25g.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 0, 0, 0, 0, 1, 'Rượu Đông Trùng Hạ Thảo 25g', 'ruou-dong-trung-ha-thao-25g', 'Sản phẩm rượu cao cấp từ 100% đông trùng hạ thảo dành cho phái mạnh, thiết kế dáng bình sang trọng, đẳng cấp quý phái. Hương vị êm dịu - ngọt thơm, phảng phất hương thơm thảo mộc, tốt cho sức khoẻ, phục hưng sinh lực hiệu quả.', 'Rượu đông trùng hạ thảo được biết đến như một loại rượu thuốc quý hiếm chữa trị nhiều bệnh, bồi bổ cơ thể, tăng cường sức khỏe. Vậy rượu ngâm đông trùng hạ thảo có tác dụng gì, cách sử dụng như thế nào để mang lại hiệu quả tốt nhất thì điều đó còn là một câu hỏi còn bỏ ngỏ của rất nhiều người. Hãy cùng đi tìm câu trả lời và các vấn đề liên quan đến rượu đông trùng trong bài viết dưới đây.&nbsp;<br />&nbsp;<h2>Những tác dụng của rượu đông trùng hạ thảo đã được y học kiểm chứng</h2><figure aria-describedby=\"caption-attachment-31389\" id=\"attachment_31389\"><img alt=\"Rượu Đông Trùng Hạ Thảo 5g\" data-ll-status=\"loaded\" height=\"704\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-5g.jpg\" title=\"Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường\" width=\"800\" /><figcaption id=\"caption-attachment-31389\">Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường</figcaption></figure><p>Không phải ngẫu nhiên mà&nbsp;đông trùng hạ thảo ngâm rượu&nbsp;lại được tung hô nhiều đến vậy. Dưới đây là những tác dụng rượu đông trùng hạ thảo với sức khỏe và sắc đẹp của con người đã được y học kiểm chứng.</p><ul>	<li>Bồi bổ sức khỏe: Đông trùng chứa nhiều vitamin và khoáng chất có tác dụng chống suy nhược cơ thể. Các axit amin kích thích sản sinh ATP, oxy rất tốt cho sự phát triển của tế bào, kích thích trao đổi chất. Vì vậy uống rượu thuốc giúp cơ thể khỏe mạnh, sinh lực dồi dào.</li>	<li>Tăng cường hệ miễn dịch: Thành phần Selen có trong đông trùng – một chất hiếm giúp ức chế hệ miễn dịch, tăng cường đề kháng, phòng ngừa bệnh tật. Vitamin A, C được cung cấp cho cơ thể sẽ tạo hàng rào chắn bảo vệ cơ thể khỏi các vi khuẩn, virus tấn công.</li>	<li>Tăng cường chức năng hệ tim mạch:&nbsp;Rượu đông trùng giúp hỗ trợ tuần hoàn máu và ngăn ngừa bệnh đột quỵ, tắc nghẽn mạch máu. Giảm cholesterol và chất xơ trong máu, ngăn chặn các chứng bệnh xơ vữa động mạch, máu nhiễm mỡ.</li>	<li>Cải thiện và tăng cường chức năng của thận:&nbsp;Thích hợp với người bị suy giảm chức năng thận, suy thận mãn tính, tiểu đêm, bí tiểu, tiểu rắt,…</li>	<li>Tái tạo và tăng cường chức năng cho lá phổi:&nbsp;Rượu đông trùng có chức năng tái tạo làm sạch tế bào phổi, những người thường xuyên hút thuốc lá hoặc làm việc trong môi trường khói bụi và ô nhiễm thì nên sử dụng để thanh lọc và duy trì sức khỏe cho lá phổi.</li>	<li>Tăng cường chức năng sinh lý:&nbsp;Các thành phần có trong rượu đông trùng kích thích sản sinh hormone nam giới, lưu thông khí huyết. Vì thế đông trùng hạ thảo như một thần dược cứu cánh đấng mày râu&nbsp;yếu sinh lý&nbsp;hay ở độ tuổi xế chiều. Đông trùng hạ thảo rượu cũng kích thích sản sinh và điều hòa nội tiết ở phụ nữ giải quyết các vấn đề do rối loạn nội tiết tố nữ gây ra như rụng tóc, rối loạn kinh nguyệt …</li>	<li>Thần dược làm đẹp cho chị em phụ nữ: Giúp chị em có làn da tươi sáng, hồng hào, cải thiện lão hóa da.</li></ul><figure aria-describedby=\"caption-attachment-31387\" id=\"attachment_31387\"><img alt=\"ruou dong trung ha thao 1\" data-ll-status=\"loaded\" height=\"521\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-1.jpg\" title=\"Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp\" width=\"730\" /><figcaption id=\"caption-attachment-31387\">Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp</figcaption></figure><p>Đó chính là lý do mà rượu đông trùng luôn được gọi với cái tên thần dược với sức khỏe và đây cũng chính là lời giải đáp cho câu hỏi rượu đông trùng hạ thảo có tác dụng gì.</p><h2>Uống rượu đông trùng đúng cách như thế nào?</h2><p>Ngâm rượu là&nbsp;cách dùng đông trùng hạ thảo&nbsp;hiệu quả&nbsp;rất được ưa chuộng, vừa bổ dưỡng vừa sang trọng, phù hợp với nhiều đối tượng khác nhau. Cách sử dụng rượu còn tùy thuộc vào rượu ngâm nguyên chất hay ngâm với các phụ gia khác và tùy thuộc vào bệnh lý nền và sức khỏe của người dùng.</p><p>Dưới đây là một số cách sử dụng&nbsp;trùng thảo&nbsp;cho các bạn tham khảo:</p><ul>	<li>Rượu đông trùng nguyên con: Đối với loại rượu này thì ngày uống 1 lần, mỗi lần 1 chén nhỏ trước bữa ăn hoặc trước khi đi ngủ 30 phút giúp tăng cường sinh lý, cải thiện sức khỏe, tăng cường hệ miễn dịch.</li>	<li>Rượu đông trùng ngâm nhung hươu:&nbsp;mỗi ngày uống khoảng 20-30ml chia làm 2 lần giúp cải thiện sinh lý, bổ thận tráng dương, cân bằng khí huyết.</li>	<li>Rượu đông trùng ngâm&nbsp;kỷ tử:&nbsp;ngày dùng 1-2 lần, mỗi lần 15ml vào trước bữa ăn hoặc trước khi đi ngủ buổi tối 30 phút dùng điều trị chứng xuất tinh sớm, liệt dương cho nam giới, phục hồi thể lực cho người già, người mới ốm dậy</li>	<li>Rượu đông trùng nhân sâm:&nbsp;ngày uống 1 chén nhỏ trước khi đi ngủ 1 tiếng giúp bổ thận tráng dương, tăng cường sinh lực và sức khỏe, bồi bổ cơ thể, nâng cao sức đề kháng</li></ul><h2>Những điều cần lưu ý khi sử dụng rượu đông trùng hạ thảo</h2><p>Để tận dụng được tối đa&nbsp;công dụng của rượu đông trùng&nbsp;thì khi sử dụng người dùng cần lưu ý một số điều sau đây:</p><ul>	<li>Nên dùng rượu đông trùng vào buổi sáng trước khi ăn. Không nên dùng buổi tối dễ gây ra mất ngủ và mệt mỏi.</li>	<li>Một số đối tượng không nên dùng rượu đông trùng như trẻ em dưới 5 tuổi, người bị bệnh máu khó đông hoặc rối loạn đông màu, người chuẩn bị phẫu thuật, người mắc bệnh tự miễn dịch (đa xơ, viêm khớp dạng thấp …), phụ nữ có thai và đang cho con bú cũng không nên sử dụng.</li>	<li>Không tự ý sử dụng rượu đông trùng khi chưa tham khảo ý kiến chuyên gia, không lạm dụng vì dễ gây ra tình trạng suy thận.</li></ul><p>&nbsp;</p><h2>Rượu đông trùng hạ thảo giá bao nhiêu và có đắt không?</h2><p>Giá rượu đông trùng hạ thảo 500ml, 750ml … sẽ khác nhau và thường giao động trong khoảng từ 350 ngàn đến 2 triệu tùy vào dung tích. Trước khi chọn mua rượu các bạn cũng nên lưu ý và tìm hiểu cách phân biệt rượu thật giả. Nên chọn cơ sở uy tín có bảng giá rượu đông trùng rõ ràng để mua được sản phẩm tốt nhất cho sức khỏe nhé. Đừng ham của rẻ mà tiền mất, tật mang rồi lại rước bệnh vào người.</p><p>Hiện nay, Đông trùng hạ thảo Vietfarm là đơn vị uy tín đứng đầu cả nước về nuôi cấy và phân phối các sản phẩm nấm trùng thảo được giới chuyên gia cũng như người tiêu dùng đánh giá cao. Bên cạnh dòng sản phẩm dạng sinh khối tươi hay sấy khô, Vietfarm có các loại rượu ngâm đông trùng hạ thảo kết hợp cùng một số loại dược liệu quý khác như: nhung hươu, nấm lim xanh, ba kích, nhục thung dung, tỏa dương…</p><p>Mỗi bình rượu đông trùng Vietfarm đều ngâm theo tỷ lệ vàng nhất định, được nghiên cứu kỹ lưỡng bởi các chuyên gia đầu ngành trong lĩnh vực YHCT đến từ Viện nghiên cứu và phát triển Y dược cổ truyền dân tộc. Là sự kết hợp giữa rượu thảo dược mệnh danh tiên tửu chốn nhân gian của Mẫu Sơn (Lạng Sơn) và loại đông trùng hạ thảo nuôi cấy&nbsp;BÁN TỰ NHIÊN&nbsp;cho hàm lượng dưỡng chất tối ưu nhất.</p><p>Đặc biệt, rượu Đông trùng hạ thảo Vietfarm trải qua quá trình chưng cất 7 tầng tháp, khử hoàn toàn các độc tố andehit và methanol nên không gây đau đầu, chóng mặt, nóng gan, hại thận. Đây cũng là sản phẩm được ưa chuộng bởi nhiều nghệ sĩ nổi tiếng cùng hàng ngàn người tiêu dùng trên cả nước.</p>', '', '', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_rows` (`id`, `listcatid`, `user_id`, `addtime`, `edittime`, `status`, `publtime`, `exptime`, `archive`, `product_code`, `product_number`, `product_price`, `price_config`, `saleprice`, `money_unit`, `product_unit`, `product_weight`, `weight_unit`, `discount_id`, `homeimgfile`, `homeimgthumb`, `homeimgalt`, `otherimage`, `imgposition`, `copyright`, `gift_from`, `gift_to`, `inhome`, `allowed_comm`, `allowed_rating`, `ratingdetail`, `allowed_send`, `allowed_print`, `allowed_save`, `hitstotal`, `hitscm`, `hitslm`, `num_sell`, `showprice`, `vi_title`, `vi_alias`, `vi_hometext`, `vi_bodytext`, `vi_gift_content`, `vi_address`, `vi_tag_title`, `vi_tag_description`) VALUES (5, 1, 1, 1634617775, 1634617775, 1, 1634621491, 0, 2, 'S000005', 100, '3000000', '', '0', 'VND', 1, '500', 'g', 0, '2021_10/ruou-dong-trung-ha-thao-25g.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 0, 0, 0, 0, 1, 'Rượu Đông Trùng Hạ Thảo 25g', 'ruou-dong-trung-ha-thao-25g-5', 'Sản phẩm rượu cao cấp từ 100% đông trùng hạ thảo dành cho phái mạnh, thiết kế dáng bình sang trọng, đẳng cấp quý phái. Hương vị êm dịu - ngọt thơm, phảng phất hương thơm thảo mộc, tốt cho sức khoẻ, phục hưng sinh lực hiệu quả.', 'Rượu đông trùng hạ thảo được biết đến như một loại rượu thuốc quý hiếm chữa trị nhiều bệnh, bồi bổ cơ thể, tăng cường sức khỏe. Vậy rượu ngâm đông trùng hạ thảo có tác dụng gì, cách sử dụng như thế nào để mang lại hiệu quả tốt nhất thì điều đó còn là một câu hỏi còn bỏ ngỏ của rất nhiều người. Hãy cùng đi tìm câu trả lời và các vấn đề liên quan đến rượu đông trùng trong bài viết dưới đây.&nbsp;<br />&nbsp;<h2>Những tác dụng của rượu đông trùng hạ thảo đã được y học kiểm chứng</h2><figure aria-describedby=\"caption-attachment-31389\" id=\"attachment_31389\"><img alt=\"Rượu Đông Trùng Hạ Thảo 5g\" data-ll-status=\"loaded\" height=\"704\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-5g.jpg\" title=\"Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường\" width=\"800\" /><figcaption id=\"caption-attachment-31389\">Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường</figcaption></figure><p>Không phải ngẫu nhiên mà&nbsp;đông trùng hạ thảo ngâm rượu&nbsp;lại được tung hô nhiều đến vậy. Dưới đây là những tác dụng rượu đông trùng hạ thảo với sức khỏe và sắc đẹp của con người đã được y học kiểm chứng.</p><ul>	<li>Bồi bổ sức khỏe: Đông trùng chứa nhiều vitamin và khoáng chất có tác dụng chống suy nhược cơ thể. Các axit amin kích thích sản sinh ATP, oxy rất tốt cho sự phát triển của tế bào, kích thích trao đổi chất. Vì vậy uống rượu thuốc giúp cơ thể khỏe mạnh, sinh lực dồi dào.</li>	<li>Tăng cường hệ miễn dịch: Thành phần Selen có trong đông trùng – một chất hiếm giúp ức chế hệ miễn dịch, tăng cường đề kháng, phòng ngừa bệnh tật. Vitamin A, C được cung cấp cho cơ thể sẽ tạo hàng rào chắn bảo vệ cơ thể khỏi các vi khuẩn, virus tấn công.</li>	<li>Tăng cường chức năng hệ tim mạch:&nbsp;Rượu đông trùng giúp hỗ trợ tuần hoàn máu và ngăn ngừa bệnh đột quỵ, tắc nghẽn mạch máu. Giảm cholesterol và chất xơ trong máu, ngăn chặn các chứng bệnh xơ vữa động mạch, máu nhiễm mỡ.</li>	<li>Cải thiện và tăng cường chức năng của thận:&nbsp;Thích hợp với người bị suy giảm chức năng thận, suy thận mãn tính, tiểu đêm, bí tiểu, tiểu rắt,…</li>	<li>Tái tạo và tăng cường chức năng cho lá phổi:&nbsp;Rượu đông trùng có chức năng tái tạo làm sạch tế bào phổi, những người thường xuyên hút thuốc lá hoặc làm việc trong môi trường khói bụi và ô nhiễm thì nên sử dụng để thanh lọc và duy trì sức khỏe cho lá phổi.</li>	<li>Tăng cường chức năng sinh lý:&nbsp;Các thành phần có trong rượu đông trùng kích thích sản sinh hormone nam giới, lưu thông khí huyết. Vì thế đông trùng hạ thảo như một thần dược cứu cánh đấng mày râu&nbsp;yếu sinh lý&nbsp;hay ở độ tuổi xế chiều. Đông trùng hạ thảo rượu cũng kích thích sản sinh và điều hòa nội tiết ở phụ nữ giải quyết các vấn đề do rối loạn nội tiết tố nữ gây ra như rụng tóc, rối loạn kinh nguyệt …</li>	<li>Thần dược làm đẹp cho chị em phụ nữ: Giúp chị em có làn da tươi sáng, hồng hào, cải thiện lão hóa da.</li></ul><figure aria-describedby=\"caption-attachment-31387\" id=\"attachment_31387\"><img alt=\"ruou dong trung ha thao 1\" data-ll-status=\"loaded\" height=\"521\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-1.jpg\" title=\"Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp\" width=\"730\" /><figcaption id=\"caption-attachment-31387\">Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp</figcaption></figure><p>Đó chính là lý do mà rượu đông trùng luôn được gọi với cái tên thần dược với sức khỏe và đây cũng chính là lời giải đáp cho câu hỏi rượu đông trùng hạ thảo có tác dụng gì.</p><h2>Uống rượu đông trùng đúng cách như thế nào?</h2><p>Ngâm rượu là&nbsp;cách dùng đông trùng hạ thảo&nbsp;hiệu quả&nbsp;rất được ưa chuộng, vừa bổ dưỡng vừa sang trọng, phù hợp với nhiều đối tượng khác nhau. Cách sử dụng rượu còn tùy thuộc vào rượu ngâm nguyên chất hay ngâm với các phụ gia khác và tùy thuộc vào bệnh lý nền và sức khỏe của người dùng.</p><p>Dưới đây là một số cách sử dụng&nbsp;trùng thảo&nbsp;cho các bạn tham khảo:</p><ul>	<li>Rượu đông trùng nguyên con: Đối với loại rượu này thì ngày uống 1 lần, mỗi lần 1 chén nhỏ trước bữa ăn hoặc trước khi đi ngủ 30 phút giúp tăng cường sinh lý, cải thiện sức khỏe, tăng cường hệ miễn dịch.</li>	<li>Rượu đông trùng ngâm nhung hươu:&nbsp;mỗi ngày uống khoảng 20-30ml chia làm 2 lần giúp cải thiện sinh lý, bổ thận tráng dương, cân bằng khí huyết.</li>	<li>Rượu đông trùng ngâm&nbsp;kỷ tử:&nbsp;ngày dùng 1-2 lần, mỗi lần 15ml vào trước bữa ăn hoặc trước khi đi ngủ buổi tối 30 phút dùng điều trị chứng xuất tinh sớm, liệt dương cho nam giới, phục hồi thể lực cho người già, người mới ốm dậy</li>	<li>Rượu đông trùng nhân sâm:&nbsp;ngày uống 1 chén nhỏ trước khi đi ngủ 1 tiếng giúp bổ thận tráng dương, tăng cường sinh lực và sức khỏe, bồi bổ cơ thể, nâng cao sức đề kháng</li></ul><h2>Những điều cần lưu ý khi sử dụng rượu đông trùng hạ thảo</h2><p>Để tận dụng được tối đa&nbsp;công dụng của rượu đông trùng&nbsp;thì khi sử dụng người dùng cần lưu ý một số điều sau đây:</p><ul>	<li>Nên dùng rượu đông trùng vào buổi sáng trước khi ăn. Không nên dùng buổi tối dễ gây ra mất ngủ và mệt mỏi.</li>	<li>Một số đối tượng không nên dùng rượu đông trùng như trẻ em dưới 5 tuổi, người bị bệnh máu khó đông hoặc rối loạn đông màu, người chuẩn bị phẫu thuật, người mắc bệnh tự miễn dịch (đa xơ, viêm khớp dạng thấp …), phụ nữ có thai và đang cho con bú cũng không nên sử dụng.</li>	<li>Không tự ý sử dụng rượu đông trùng khi chưa tham khảo ý kiến chuyên gia, không lạm dụng vì dễ gây ra tình trạng suy thận.</li></ul><p>&nbsp;</p><h2>Rượu đông trùng hạ thảo giá bao nhiêu và có đắt không?</h2><p>Giá rượu đông trùng hạ thảo 500ml, 750ml … sẽ khác nhau và thường giao động trong khoảng từ 350 ngàn đến 2 triệu tùy vào dung tích. Trước khi chọn mua rượu các bạn cũng nên lưu ý và tìm hiểu cách phân biệt rượu thật giả. Nên chọn cơ sở uy tín có bảng giá rượu đông trùng rõ ràng để mua được sản phẩm tốt nhất cho sức khỏe nhé. Đừng ham của rẻ mà tiền mất, tật mang rồi lại rước bệnh vào người.</p><p>Hiện nay, Đông trùng hạ thảo Vietfarm là đơn vị uy tín đứng đầu cả nước về nuôi cấy và phân phối các sản phẩm nấm trùng thảo được giới chuyên gia cũng như người tiêu dùng đánh giá cao. Bên cạnh dòng sản phẩm dạng sinh khối tươi hay sấy khô, Vietfarm có các loại rượu ngâm đông trùng hạ thảo kết hợp cùng một số loại dược liệu quý khác như: nhung hươu, nấm lim xanh, ba kích, nhục thung dung, tỏa dương…</p><p>Mỗi bình rượu đông trùng Vietfarm đều ngâm theo tỷ lệ vàng nhất định, được nghiên cứu kỹ lưỡng bởi các chuyên gia đầu ngành trong lĩnh vực YHCT đến từ Viện nghiên cứu và phát triển Y dược cổ truyền dân tộc. Là sự kết hợp giữa rượu thảo dược mệnh danh tiên tửu chốn nhân gian của Mẫu Sơn (Lạng Sơn) và loại đông trùng hạ thảo nuôi cấy&nbsp;BÁN TỰ NHIÊN&nbsp;cho hàm lượng dưỡng chất tối ưu nhất.</p><p>Đặc biệt, rượu Đông trùng hạ thảo Vietfarm trải qua quá trình chưng cất 7 tầng tháp, khử hoàn toàn các độc tố andehit và methanol nên không gây đau đầu, chóng mặt, nóng gan, hại thận. Đây cũng là sản phẩm được ưa chuộng bởi nhiều nghệ sĩ nổi tiếng cùng hàng ngàn người tiêu dùng trên cả nước.</p>', '', '', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_rows` (`id`, `listcatid`, `user_id`, `addtime`, `edittime`, `status`, `publtime`, `exptime`, `archive`, `product_code`, `product_number`, `product_price`, `price_config`, `saleprice`, `money_unit`, `product_unit`, `product_weight`, `weight_unit`, `discount_id`, `homeimgfile`, `homeimgthumb`, `homeimgalt`, `otherimage`, `imgposition`, `copyright`, `gift_from`, `gift_to`, `inhome`, `allowed_comm`, `allowed_rating`, `ratingdetail`, `allowed_send`, `allowed_print`, `allowed_save`, `hitstotal`, `hitscm`, `hitslm`, `num_sell`, `showprice`, `vi_title`, `vi_alias`, `vi_hometext`, `vi_bodytext`, `vi_gift_content`, `vi_address`, `vi_tag_title`, `vi_tag_description`) VALUES (6, 1, 1, 1634617775, 1634617775, 1, 1634621496, 0, 2, 'S000006', 100, '3000000', '', '0', 'VND', 1, '500', 'g', 0, '2021_10/ruou-dong-trung-ha-thao-25g.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 0, 0, 0, 0, 1, 'Rượu Đông Trùng Hạ Thảo 25g', 'ruou-dong-trung-ha-thao-25g-6', 'Sản phẩm rượu cao cấp từ 100% đông trùng hạ thảo dành cho phái mạnh, thiết kế dáng bình sang trọng, đẳng cấp quý phái. Hương vị êm dịu - ngọt thơm, phảng phất hương thơm thảo mộc, tốt cho sức khoẻ, phục hưng sinh lực hiệu quả.', 'Rượu đông trùng hạ thảo được biết đến như một loại rượu thuốc quý hiếm chữa trị nhiều bệnh, bồi bổ cơ thể, tăng cường sức khỏe. Vậy rượu ngâm đông trùng hạ thảo có tác dụng gì, cách sử dụng như thế nào để mang lại hiệu quả tốt nhất thì điều đó còn là một câu hỏi còn bỏ ngỏ của rất nhiều người. Hãy cùng đi tìm câu trả lời và các vấn đề liên quan đến rượu đông trùng trong bài viết dưới đây.&nbsp;<br />&nbsp;<h2>Những tác dụng của rượu đông trùng hạ thảo đã được y học kiểm chứng</h2><figure aria-describedby=\"caption-attachment-31389\" id=\"attachment_31389\"><img alt=\"Rượu Đông Trùng Hạ Thảo 5g\" data-ll-status=\"loaded\" height=\"704\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-5g.jpg\" title=\"Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường\" width=\"800\" /><figcaption id=\"caption-attachment-31389\">Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường</figcaption></figure><p>Không phải ngẫu nhiên mà&nbsp;đông trùng hạ thảo ngâm rượu&nbsp;lại được tung hô nhiều đến vậy. Dưới đây là những tác dụng rượu đông trùng hạ thảo với sức khỏe và sắc đẹp của con người đã được y học kiểm chứng.</p><ul>	<li>Bồi bổ sức khỏe: Đông trùng chứa nhiều vitamin và khoáng chất có tác dụng chống suy nhược cơ thể. Các axit amin kích thích sản sinh ATP, oxy rất tốt cho sự phát triển của tế bào, kích thích trao đổi chất. Vì vậy uống rượu thuốc giúp cơ thể khỏe mạnh, sinh lực dồi dào.</li>	<li>Tăng cường hệ miễn dịch: Thành phần Selen có trong đông trùng – một chất hiếm giúp ức chế hệ miễn dịch, tăng cường đề kháng, phòng ngừa bệnh tật. Vitamin A, C được cung cấp cho cơ thể sẽ tạo hàng rào chắn bảo vệ cơ thể khỏi các vi khuẩn, virus tấn công.</li>	<li>Tăng cường chức năng hệ tim mạch:&nbsp;Rượu đông trùng giúp hỗ trợ tuần hoàn máu và ngăn ngừa bệnh đột quỵ, tắc nghẽn mạch máu. Giảm cholesterol và chất xơ trong máu, ngăn chặn các chứng bệnh xơ vữa động mạch, máu nhiễm mỡ.</li>	<li>Cải thiện và tăng cường chức năng của thận:&nbsp;Thích hợp với người bị suy giảm chức năng thận, suy thận mãn tính, tiểu đêm, bí tiểu, tiểu rắt,…</li>	<li>Tái tạo và tăng cường chức năng cho lá phổi:&nbsp;Rượu đông trùng có chức năng tái tạo làm sạch tế bào phổi, những người thường xuyên hút thuốc lá hoặc làm việc trong môi trường khói bụi và ô nhiễm thì nên sử dụng để thanh lọc và duy trì sức khỏe cho lá phổi.</li>	<li>Tăng cường chức năng sinh lý:&nbsp;Các thành phần có trong rượu đông trùng kích thích sản sinh hormone nam giới, lưu thông khí huyết. Vì thế đông trùng hạ thảo như một thần dược cứu cánh đấng mày râu&nbsp;yếu sinh lý&nbsp;hay ở độ tuổi xế chiều. Đông trùng hạ thảo rượu cũng kích thích sản sinh và điều hòa nội tiết ở phụ nữ giải quyết các vấn đề do rối loạn nội tiết tố nữ gây ra như rụng tóc, rối loạn kinh nguyệt …</li>	<li>Thần dược làm đẹp cho chị em phụ nữ: Giúp chị em có làn da tươi sáng, hồng hào, cải thiện lão hóa da.</li></ul><figure aria-describedby=\"caption-attachment-31387\" id=\"attachment_31387\"><img alt=\"ruou dong trung ha thao 1\" data-ll-status=\"loaded\" height=\"521\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-1.jpg\" title=\"Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp\" width=\"730\" /><figcaption id=\"caption-attachment-31387\">Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp</figcaption></figure><p>Đó chính là lý do mà rượu đông trùng luôn được gọi với cái tên thần dược với sức khỏe và đây cũng chính là lời giải đáp cho câu hỏi rượu đông trùng hạ thảo có tác dụng gì.</p><h2>Uống rượu đông trùng đúng cách như thế nào?</h2><p>Ngâm rượu là&nbsp;cách dùng đông trùng hạ thảo&nbsp;hiệu quả&nbsp;rất được ưa chuộng, vừa bổ dưỡng vừa sang trọng, phù hợp với nhiều đối tượng khác nhau. Cách sử dụng rượu còn tùy thuộc vào rượu ngâm nguyên chất hay ngâm với các phụ gia khác và tùy thuộc vào bệnh lý nền và sức khỏe của người dùng.</p><p>Dưới đây là một số cách sử dụng&nbsp;trùng thảo&nbsp;cho các bạn tham khảo:</p><ul>	<li>Rượu đông trùng nguyên con: Đối với loại rượu này thì ngày uống 1 lần, mỗi lần 1 chén nhỏ trước bữa ăn hoặc trước khi đi ngủ 30 phút giúp tăng cường sinh lý, cải thiện sức khỏe, tăng cường hệ miễn dịch.</li>	<li>Rượu đông trùng ngâm nhung hươu:&nbsp;mỗi ngày uống khoảng 20-30ml chia làm 2 lần giúp cải thiện sinh lý, bổ thận tráng dương, cân bằng khí huyết.</li>	<li>Rượu đông trùng ngâm&nbsp;kỷ tử:&nbsp;ngày dùng 1-2 lần, mỗi lần 15ml vào trước bữa ăn hoặc trước khi đi ngủ buổi tối 30 phút dùng điều trị chứng xuất tinh sớm, liệt dương cho nam giới, phục hồi thể lực cho người già, người mới ốm dậy</li>	<li>Rượu đông trùng nhân sâm:&nbsp;ngày uống 1 chén nhỏ trước khi đi ngủ 1 tiếng giúp bổ thận tráng dương, tăng cường sinh lực và sức khỏe, bồi bổ cơ thể, nâng cao sức đề kháng</li></ul><h2>Những điều cần lưu ý khi sử dụng rượu đông trùng hạ thảo</h2><p>Để tận dụng được tối đa&nbsp;công dụng của rượu đông trùng&nbsp;thì khi sử dụng người dùng cần lưu ý một số điều sau đây:</p><ul>	<li>Nên dùng rượu đông trùng vào buổi sáng trước khi ăn. Không nên dùng buổi tối dễ gây ra mất ngủ và mệt mỏi.</li>	<li>Một số đối tượng không nên dùng rượu đông trùng như trẻ em dưới 5 tuổi, người bị bệnh máu khó đông hoặc rối loạn đông màu, người chuẩn bị phẫu thuật, người mắc bệnh tự miễn dịch (đa xơ, viêm khớp dạng thấp …), phụ nữ có thai và đang cho con bú cũng không nên sử dụng.</li>	<li>Không tự ý sử dụng rượu đông trùng khi chưa tham khảo ý kiến chuyên gia, không lạm dụng vì dễ gây ra tình trạng suy thận.</li></ul><p>&nbsp;</p><h2>Rượu đông trùng hạ thảo giá bao nhiêu và có đắt không?</h2><p>Giá rượu đông trùng hạ thảo 500ml, 750ml … sẽ khác nhau và thường giao động trong khoảng từ 350 ngàn đến 2 triệu tùy vào dung tích. Trước khi chọn mua rượu các bạn cũng nên lưu ý và tìm hiểu cách phân biệt rượu thật giả. Nên chọn cơ sở uy tín có bảng giá rượu đông trùng rõ ràng để mua được sản phẩm tốt nhất cho sức khỏe nhé. Đừng ham của rẻ mà tiền mất, tật mang rồi lại rước bệnh vào người.</p><p>Hiện nay, Đông trùng hạ thảo Vietfarm là đơn vị uy tín đứng đầu cả nước về nuôi cấy và phân phối các sản phẩm nấm trùng thảo được giới chuyên gia cũng như người tiêu dùng đánh giá cao. Bên cạnh dòng sản phẩm dạng sinh khối tươi hay sấy khô, Vietfarm có các loại rượu ngâm đông trùng hạ thảo kết hợp cùng một số loại dược liệu quý khác như: nhung hươu, nấm lim xanh, ba kích, nhục thung dung, tỏa dương…</p><p>Mỗi bình rượu đông trùng Vietfarm đều ngâm theo tỷ lệ vàng nhất định, được nghiên cứu kỹ lưỡng bởi các chuyên gia đầu ngành trong lĩnh vực YHCT đến từ Viện nghiên cứu và phát triển Y dược cổ truyền dân tộc. Là sự kết hợp giữa rượu thảo dược mệnh danh tiên tửu chốn nhân gian của Mẫu Sơn (Lạng Sơn) và loại đông trùng hạ thảo nuôi cấy&nbsp;BÁN TỰ NHIÊN&nbsp;cho hàm lượng dưỡng chất tối ưu nhất.</p><p>Đặc biệt, rượu Đông trùng hạ thảo Vietfarm trải qua quá trình chưng cất 7 tầng tháp, khử hoàn toàn các độc tố andehit và methanol nên không gây đau đầu, chóng mặt, nóng gan, hại thận. Đây cũng là sản phẩm được ưa chuộng bởi nhiều nghệ sĩ nổi tiếng cùng hàng ngàn người tiêu dùng trên cả nước.</p>', '', '', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_rows` (`id`, `listcatid`, `user_id`, `addtime`, `edittime`, `status`, `publtime`, `exptime`, `archive`, `product_code`, `product_number`, `product_price`, `price_config`, `saleprice`, `money_unit`, `product_unit`, `product_weight`, `weight_unit`, `discount_id`, `homeimgfile`, `homeimgthumb`, `homeimgalt`, `otherimage`, `imgposition`, `copyright`, `gift_from`, `gift_to`, `inhome`, `allowed_comm`, `allowed_rating`, `ratingdetail`, `allowed_send`, `allowed_print`, `allowed_save`, `hitstotal`, `hitscm`, `hitslm`, `num_sell`, `showprice`, `vi_title`, `vi_alias`, `vi_hometext`, `vi_bodytext`, `vi_gift_content`, `vi_address`, `vi_tag_title`, `vi_tag_description`) VALUES (7, 1, 1, 1634617775, 1634617775, 1, 1634621501, 0, 2, 'S000007', 100, '3000000', '', '0', 'VND', 1, '500', 'g', 0, '2021_10/ruou-dong-trung-ha-thao-25g.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 1, 0, 0, 0, 1, 'Rượu Đông Trùng Hạ Thảo 25g', 'ruou-dong-trung-ha-thao-25g-7', 'Sản phẩm rượu cao cấp từ 100% đông trùng hạ thảo dành cho phái mạnh, thiết kế dáng bình sang trọng, đẳng cấp quý phái. Hương vị êm dịu - ngọt thơm, phảng phất hương thơm thảo mộc, tốt cho sức khoẻ, phục hưng sinh lực hiệu quả.', 'Rượu đông trùng hạ thảo được biết đến như một loại rượu thuốc quý hiếm chữa trị nhiều bệnh, bồi bổ cơ thể, tăng cường sức khỏe. Vậy rượu ngâm đông trùng hạ thảo có tác dụng gì, cách sử dụng như thế nào để mang lại hiệu quả tốt nhất thì điều đó còn là một câu hỏi còn bỏ ngỏ của rất nhiều người. Hãy cùng đi tìm câu trả lời và các vấn đề liên quan đến rượu đông trùng trong bài viết dưới đây.&nbsp;<br />&nbsp;<h2>Những tác dụng của rượu đông trùng hạ thảo đã được y học kiểm chứng</h2><figure aria-describedby=\"caption-attachment-31389\" id=\"attachment_31389\"><img alt=\"Rượu Đông Trùng Hạ Thảo 5g\" data-ll-status=\"loaded\" height=\"704\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-5g.jpg\" title=\"Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường\" width=\"800\" /><figcaption id=\"caption-attachment-31389\">Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường</figcaption></figure><p>Không phải ngẫu nhiên mà&nbsp;đông trùng hạ thảo ngâm rượu&nbsp;lại được tung hô nhiều đến vậy. Dưới đây là những tác dụng rượu đông trùng hạ thảo với sức khỏe và sắc đẹp của con người đã được y học kiểm chứng.</p><ul>	<li>Bồi bổ sức khỏe: Đông trùng chứa nhiều vitamin và khoáng chất có tác dụng chống suy nhược cơ thể. Các axit amin kích thích sản sinh ATP, oxy rất tốt cho sự phát triển của tế bào, kích thích trao đổi chất. Vì vậy uống rượu thuốc giúp cơ thể khỏe mạnh, sinh lực dồi dào.</li>	<li>Tăng cường hệ miễn dịch: Thành phần Selen có trong đông trùng – một chất hiếm giúp ức chế hệ miễn dịch, tăng cường đề kháng, phòng ngừa bệnh tật. Vitamin A, C được cung cấp cho cơ thể sẽ tạo hàng rào chắn bảo vệ cơ thể khỏi các vi khuẩn, virus tấn công.</li>	<li>Tăng cường chức năng hệ tim mạch:&nbsp;Rượu đông trùng giúp hỗ trợ tuần hoàn máu và ngăn ngừa bệnh đột quỵ, tắc nghẽn mạch máu. Giảm cholesterol và chất xơ trong máu, ngăn chặn các chứng bệnh xơ vữa động mạch, máu nhiễm mỡ.</li>	<li>Cải thiện và tăng cường chức năng của thận:&nbsp;Thích hợp với người bị suy giảm chức năng thận, suy thận mãn tính, tiểu đêm, bí tiểu, tiểu rắt,…</li>	<li>Tái tạo và tăng cường chức năng cho lá phổi:&nbsp;Rượu đông trùng có chức năng tái tạo làm sạch tế bào phổi, những người thường xuyên hút thuốc lá hoặc làm việc trong môi trường khói bụi và ô nhiễm thì nên sử dụng để thanh lọc và duy trì sức khỏe cho lá phổi.</li>	<li>Tăng cường chức năng sinh lý:&nbsp;Các thành phần có trong rượu đông trùng kích thích sản sinh hormone nam giới, lưu thông khí huyết. Vì thế đông trùng hạ thảo như một thần dược cứu cánh đấng mày râu&nbsp;yếu sinh lý&nbsp;hay ở độ tuổi xế chiều. Đông trùng hạ thảo rượu cũng kích thích sản sinh và điều hòa nội tiết ở phụ nữ giải quyết các vấn đề do rối loạn nội tiết tố nữ gây ra như rụng tóc, rối loạn kinh nguyệt …</li>	<li>Thần dược làm đẹp cho chị em phụ nữ: Giúp chị em có làn da tươi sáng, hồng hào, cải thiện lão hóa da.</li></ul><figure aria-describedby=\"caption-attachment-31387\" id=\"attachment_31387\"><img alt=\"ruou dong trung ha thao 1\" data-ll-status=\"loaded\" height=\"521\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-1.jpg\" title=\"Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp\" width=\"730\" /><figcaption id=\"caption-attachment-31387\">Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp</figcaption></figure><p>Đó chính là lý do mà rượu đông trùng luôn được gọi với cái tên thần dược với sức khỏe và đây cũng chính là lời giải đáp cho câu hỏi rượu đông trùng hạ thảo có tác dụng gì.</p><h2>Uống rượu đông trùng đúng cách như thế nào?</h2><p>Ngâm rượu là&nbsp;cách dùng đông trùng hạ thảo&nbsp;hiệu quả&nbsp;rất được ưa chuộng, vừa bổ dưỡng vừa sang trọng, phù hợp với nhiều đối tượng khác nhau. Cách sử dụng rượu còn tùy thuộc vào rượu ngâm nguyên chất hay ngâm với các phụ gia khác và tùy thuộc vào bệnh lý nền và sức khỏe của người dùng.</p><p>Dưới đây là một số cách sử dụng&nbsp;trùng thảo&nbsp;cho các bạn tham khảo:</p><ul>	<li>Rượu đông trùng nguyên con: Đối với loại rượu này thì ngày uống 1 lần, mỗi lần 1 chén nhỏ trước bữa ăn hoặc trước khi đi ngủ 30 phút giúp tăng cường sinh lý, cải thiện sức khỏe, tăng cường hệ miễn dịch.</li>	<li>Rượu đông trùng ngâm nhung hươu:&nbsp;mỗi ngày uống khoảng 20-30ml chia làm 2 lần giúp cải thiện sinh lý, bổ thận tráng dương, cân bằng khí huyết.</li>	<li>Rượu đông trùng ngâm&nbsp;kỷ tử:&nbsp;ngày dùng 1-2 lần, mỗi lần 15ml vào trước bữa ăn hoặc trước khi đi ngủ buổi tối 30 phút dùng điều trị chứng xuất tinh sớm, liệt dương cho nam giới, phục hồi thể lực cho người già, người mới ốm dậy</li>	<li>Rượu đông trùng nhân sâm:&nbsp;ngày uống 1 chén nhỏ trước khi đi ngủ 1 tiếng giúp bổ thận tráng dương, tăng cường sinh lực và sức khỏe, bồi bổ cơ thể, nâng cao sức đề kháng</li></ul><h2>Những điều cần lưu ý khi sử dụng rượu đông trùng hạ thảo</h2><p>Để tận dụng được tối đa&nbsp;công dụng của rượu đông trùng&nbsp;thì khi sử dụng người dùng cần lưu ý một số điều sau đây:</p><ul>	<li>Nên dùng rượu đông trùng vào buổi sáng trước khi ăn. Không nên dùng buổi tối dễ gây ra mất ngủ và mệt mỏi.</li>	<li>Một số đối tượng không nên dùng rượu đông trùng như trẻ em dưới 5 tuổi, người bị bệnh máu khó đông hoặc rối loạn đông màu, người chuẩn bị phẫu thuật, người mắc bệnh tự miễn dịch (đa xơ, viêm khớp dạng thấp …), phụ nữ có thai và đang cho con bú cũng không nên sử dụng.</li>	<li>Không tự ý sử dụng rượu đông trùng khi chưa tham khảo ý kiến chuyên gia, không lạm dụng vì dễ gây ra tình trạng suy thận.</li></ul><p>&nbsp;</p><h2>Rượu đông trùng hạ thảo giá bao nhiêu và có đắt không?</h2><p>Giá rượu đông trùng hạ thảo 500ml, 750ml … sẽ khác nhau và thường giao động trong khoảng từ 350 ngàn đến 2 triệu tùy vào dung tích. Trước khi chọn mua rượu các bạn cũng nên lưu ý và tìm hiểu cách phân biệt rượu thật giả. Nên chọn cơ sở uy tín có bảng giá rượu đông trùng rõ ràng để mua được sản phẩm tốt nhất cho sức khỏe nhé. Đừng ham của rẻ mà tiền mất, tật mang rồi lại rước bệnh vào người.</p><p>Hiện nay, Đông trùng hạ thảo Vietfarm là đơn vị uy tín đứng đầu cả nước về nuôi cấy và phân phối các sản phẩm nấm trùng thảo được giới chuyên gia cũng như người tiêu dùng đánh giá cao. Bên cạnh dòng sản phẩm dạng sinh khối tươi hay sấy khô, Vietfarm có các loại rượu ngâm đông trùng hạ thảo kết hợp cùng một số loại dược liệu quý khác như: nhung hươu, nấm lim xanh, ba kích, nhục thung dung, tỏa dương…</p><p>Mỗi bình rượu đông trùng Vietfarm đều ngâm theo tỷ lệ vàng nhất định, được nghiên cứu kỹ lưỡng bởi các chuyên gia đầu ngành trong lĩnh vực YHCT đến từ Viện nghiên cứu và phát triển Y dược cổ truyền dân tộc. Là sự kết hợp giữa rượu thảo dược mệnh danh tiên tửu chốn nhân gian của Mẫu Sơn (Lạng Sơn) và loại đông trùng hạ thảo nuôi cấy&nbsp;BÁN TỰ NHIÊN&nbsp;cho hàm lượng dưỡng chất tối ưu nhất.</p><p>Đặc biệt, rượu Đông trùng hạ thảo Vietfarm trải qua quá trình chưng cất 7 tầng tháp, khử hoàn toàn các độc tố andehit và methanol nên không gây đau đầu, chóng mặt, nóng gan, hại thận. Đây cũng là sản phẩm được ưa chuộng bởi nhiều nghệ sĩ nổi tiếng cùng hàng ngàn người tiêu dùng trên cả nước.</p>', '', '', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_rows` (`id`, `listcatid`, `user_id`, `addtime`, `edittime`, `status`, `publtime`, `exptime`, `archive`, `product_code`, `product_number`, `product_price`, `price_config`, `saleprice`, `money_unit`, `product_unit`, `product_weight`, `weight_unit`, `discount_id`, `homeimgfile`, `homeimgthumb`, `homeimgalt`, `otherimage`, `imgposition`, `copyright`, `gift_from`, `gift_to`, `inhome`, `allowed_comm`, `allowed_rating`, `ratingdetail`, `allowed_send`, `allowed_print`, `allowed_save`, `hitstotal`, `hitscm`, `hitslm`, `num_sell`, `showprice`, `vi_title`, `vi_alias`, `vi_hometext`, `vi_bodytext`, `vi_gift_content`, `vi_address`, `vi_tag_title`, `vi_tag_description`) VALUES (8, 1, 1, 1634617775, 1634617775, 1, 1634621504, 0, 2, 'S000008', 100, '3000000', '', '0', 'VND', 1, '500', 'g', 0, '2021_10/ruou-dong-trung-ha-thao-25g.jpg', 1, '', '', 0, 0, 0, 0, 1, 4, 1, '0', 1, 1, 1, 1, 0, 0, 0, 1, 'Rượu Đông Trùng Hạ Thảo 25g', 'ruou-dong-trung-ha-thao-25g-8', 'Sản phẩm rượu cao cấp từ 100% đông trùng hạ thảo dành cho phái mạnh, thiết kế dáng bình sang trọng, đẳng cấp quý phái. Hương vị êm dịu - ngọt thơm, phảng phất hương thơm thảo mộc, tốt cho sức khoẻ, phục hưng sinh lực hiệu quả.', 'Rượu đông trùng hạ thảo được biết đến như một loại rượu thuốc quý hiếm chữa trị nhiều bệnh, bồi bổ cơ thể, tăng cường sức khỏe. Vậy rượu ngâm đông trùng hạ thảo có tác dụng gì, cách sử dụng như thế nào để mang lại hiệu quả tốt nhất thì điều đó còn là một câu hỏi còn bỏ ngỏ của rất nhiều người. Hãy cùng đi tìm câu trả lời và các vấn đề liên quan đến rượu đông trùng trong bài viết dưới đây.&nbsp;<br />&nbsp;<h2>Những tác dụng của rượu đông trùng hạ thảo đã được y học kiểm chứng</h2><figure aria-describedby=\"caption-attachment-31389\" id=\"attachment_31389\"><img alt=\"Rượu Đông Trùng Hạ Thảo 5g\" data-ll-status=\"loaded\" height=\"704\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-5g.jpg\" title=\"Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường\" width=\"800\" /><figcaption id=\"caption-attachment-31389\">Một chai rượu đông trùng hạ thảo 500ml đang được bán trên thị trường</figcaption></figure><p>Không phải ngẫu nhiên mà&nbsp;đông trùng hạ thảo ngâm rượu&nbsp;lại được tung hô nhiều đến vậy. Dưới đây là những tác dụng rượu đông trùng hạ thảo với sức khỏe và sắc đẹp của con người đã được y học kiểm chứng.</p><ul>	<li>Bồi bổ sức khỏe: Đông trùng chứa nhiều vitamin và khoáng chất có tác dụng chống suy nhược cơ thể. Các axit amin kích thích sản sinh ATP, oxy rất tốt cho sự phát triển của tế bào, kích thích trao đổi chất. Vì vậy uống rượu thuốc giúp cơ thể khỏe mạnh, sinh lực dồi dào.</li>	<li>Tăng cường hệ miễn dịch: Thành phần Selen có trong đông trùng – một chất hiếm giúp ức chế hệ miễn dịch, tăng cường đề kháng, phòng ngừa bệnh tật. Vitamin A, C được cung cấp cho cơ thể sẽ tạo hàng rào chắn bảo vệ cơ thể khỏi các vi khuẩn, virus tấn công.</li>	<li>Tăng cường chức năng hệ tim mạch:&nbsp;Rượu đông trùng giúp hỗ trợ tuần hoàn máu và ngăn ngừa bệnh đột quỵ, tắc nghẽn mạch máu. Giảm cholesterol và chất xơ trong máu, ngăn chặn các chứng bệnh xơ vữa động mạch, máu nhiễm mỡ.</li>	<li>Cải thiện và tăng cường chức năng của thận:&nbsp;Thích hợp với người bị suy giảm chức năng thận, suy thận mãn tính, tiểu đêm, bí tiểu, tiểu rắt,…</li>	<li>Tái tạo và tăng cường chức năng cho lá phổi:&nbsp;Rượu đông trùng có chức năng tái tạo làm sạch tế bào phổi, những người thường xuyên hút thuốc lá hoặc làm việc trong môi trường khói bụi và ô nhiễm thì nên sử dụng để thanh lọc và duy trì sức khỏe cho lá phổi.</li>	<li>Tăng cường chức năng sinh lý:&nbsp;Các thành phần có trong rượu đông trùng kích thích sản sinh hormone nam giới, lưu thông khí huyết. Vì thế đông trùng hạ thảo như một thần dược cứu cánh đấng mày râu&nbsp;yếu sinh lý&nbsp;hay ở độ tuổi xế chiều. Đông trùng hạ thảo rượu cũng kích thích sản sinh và điều hòa nội tiết ở phụ nữ giải quyết các vấn đề do rối loạn nội tiết tố nữ gây ra như rụng tóc, rối loạn kinh nguyệt …</li>	<li>Thần dược làm đẹp cho chị em phụ nữ: Giúp chị em có làn da tươi sáng, hồng hào, cải thiện lão hóa da.</li></ul><figure aria-describedby=\"caption-attachment-31387\" id=\"attachment_31387\"><img alt=\"ruou dong trung ha thao 1\" data-ll-status=\"loaded\" height=\"521\" src=\"/uploads/shops/2021_10/ruou-dong-trung-ha-thao-1.jpg\" title=\"Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp\" width=\"730\" /><figcaption id=\"caption-attachment-31387\">Đông trùng hạ thảo ngâm rượu có rất nhiều tác dụng với sức khỏe và sắc đẹp</figcaption></figure><p>Đó chính là lý do mà rượu đông trùng luôn được gọi với cái tên thần dược với sức khỏe và đây cũng chính là lời giải đáp cho câu hỏi rượu đông trùng hạ thảo có tác dụng gì.</p><h2>Uống rượu đông trùng đúng cách như thế nào?</h2><p>Ngâm rượu là&nbsp;cách dùng đông trùng hạ thảo&nbsp;hiệu quả&nbsp;rất được ưa chuộng, vừa bổ dưỡng vừa sang trọng, phù hợp với nhiều đối tượng khác nhau. Cách sử dụng rượu còn tùy thuộc vào rượu ngâm nguyên chất hay ngâm với các phụ gia khác và tùy thuộc vào bệnh lý nền và sức khỏe của người dùng.</p><p>Dưới đây là một số cách sử dụng&nbsp;trùng thảo&nbsp;cho các bạn tham khảo:</p><ul>	<li>Rượu đông trùng nguyên con: Đối với loại rượu này thì ngày uống 1 lần, mỗi lần 1 chén nhỏ trước bữa ăn hoặc trước khi đi ngủ 30 phút giúp tăng cường sinh lý, cải thiện sức khỏe, tăng cường hệ miễn dịch.</li>	<li>Rượu đông trùng ngâm nhung hươu:&nbsp;mỗi ngày uống khoảng 20-30ml chia làm 2 lần giúp cải thiện sinh lý, bổ thận tráng dương, cân bằng khí huyết.</li>	<li>Rượu đông trùng ngâm&nbsp;kỷ tử:&nbsp;ngày dùng 1-2 lần, mỗi lần 15ml vào trước bữa ăn hoặc trước khi đi ngủ buổi tối 30 phút dùng điều trị chứng xuất tinh sớm, liệt dương cho nam giới, phục hồi thể lực cho người già, người mới ốm dậy</li>	<li>Rượu đông trùng nhân sâm:&nbsp;ngày uống 1 chén nhỏ trước khi đi ngủ 1 tiếng giúp bổ thận tráng dương, tăng cường sinh lực và sức khỏe, bồi bổ cơ thể, nâng cao sức đề kháng</li></ul><h2>Những điều cần lưu ý khi sử dụng rượu đông trùng hạ thảo</h2><p>Để tận dụng được tối đa&nbsp;công dụng của rượu đông trùng&nbsp;thì khi sử dụng người dùng cần lưu ý một số điều sau đây:</p><ul>	<li>Nên dùng rượu đông trùng vào buổi sáng trước khi ăn. Không nên dùng buổi tối dễ gây ra mất ngủ và mệt mỏi.</li>	<li>Một số đối tượng không nên dùng rượu đông trùng như trẻ em dưới 5 tuổi, người bị bệnh máu khó đông hoặc rối loạn đông màu, người chuẩn bị phẫu thuật, người mắc bệnh tự miễn dịch (đa xơ, viêm khớp dạng thấp …), phụ nữ có thai và đang cho con bú cũng không nên sử dụng.</li>	<li>Không tự ý sử dụng rượu đông trùng khi chưa tham khảo ý kiến chuyên gia, không lạm dụng vì dễ gây ra tình trạng suy thận.</li></ul><p>&nbsp;</p><h2>Rượu đông trùng hạ thảo giá bao nhiêu và có đắt không?</h2><p>Giá rượu đông trùng hạ thảo 500ml, 750ml … sẽ khác nhau và thường giao động trong khoảng từ 350 ngàn đến 2 triệu tùy vào dung tích. Trước khi chọn mua rượu các bạn cũng nên lưu ý và tìm hiểu cách phân biệt rượu thật giả. Nên chọn cơ sở uy tín có bảng giá rượu đông trùng rõ ràng để mua được sản phẩm tốt nhất cho sức khỏe nhé. Đừng ham của rẻ mà tiền mất, tật mang rồi lại rước bệnh vào người.</p><p>Hiện nay, Đông trùng hạ thảo Vietfarm là đơn vị uy tín đứng đầu cả nước về nuôi cấy và phân phối các sản phẩm nấm trùng thảo được giới chuyên gia cũng như người tiêu dùng đánh giá cao. Bên cạnh dòng sản phẩm dạng sinh khối tươi hay sấy khô, Vietfarm có các loại rượu ngâm đông trùng hạ thảo kết hợp cùng một số loại dược liệu quý khác như: nhung hươu, nấm lim xanh, ba kích, nhục thung dung, tỏa dương…</p><p>Mỗi bình rượu đông trùng Vietfarm đều ngâm theo tỷ lệ vàng nhất định, được nghiên cứu kỹ lưỡng bởi các chuyên gia đầu ngành trong lĩnh vực YHCT đến từ Viện nghiên cứu và phát triển Y dược cổ truyền dân tộc. Là sự kết hợp giữa rượu thảo dược mệnh danh tiên tửu chốn nhân gian của Mẫu Sơn (Lạng Sơn) và loại đông trùng hạ thảo nuôi cấy&nbsp;BÁN TỰ NHIÊN&nbsp;cho hàm lượng dưỡng chất tối ưu nhất.</p><p>Đặc biệt, rượu Đông trùng hạ thảo Vietfarm trải qua quá trình chưng cất 7 tầng tháp, khử hoàn toàn các độc tố andehit và methanol nên không gây đau đầu, chóng mặt, nóng gan, hại thận. Đây cũng là sản phẩm được ưa chuộng bởi nhiều nghệ sĩ nổi tiếng cùng hàng ngàn người tiêu dùng trên cả nước.</p>', '', '', '', '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_shops`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_shops` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `location` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `address` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `weight` tinyint(3) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_shops_carrier`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_shops_carrier` (
  `shops_id` tinyint(3) unsigned NOT NULL,
  `carrier_id` tinyint(3) unsigned NOT NULL,
  `config_id` tinyint(3) unsigned NOT NULL,
  UNIQUE KEY `shops_id` (`shops_id`,`carrier_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_tabs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_tabs` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(50) NOT NULL DEFAULT '',
  `content` varchar(50) NOT NULL DEFAULT '',
  `weight` int(10) unsigned NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `vi_title` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tabs` (`id`, `icon`, `content`, `weight`, `active`, `vi_title`) VALUES (1, '', 'content_detail', 1, 1, 'Chi tiết sản phẩm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tabs` (`id`, `icon`, `content`, `weight`, `active`, `vi_title`) VALUES (2, '', 'content_comments', 2, 1, 'Bình luận')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tabs` (`id`, `icon`, `content`, `weight`, `active`, `vi_title`) VALUES (3, '', 'content_rate', 3, 1, 'Đánh giá')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_tags_id_vi`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_tags_id_vi` (
  `id` int(11) NOT NULL,
  `tid` mediumint(9) NOT NULL,
  `keyword` varchar(65) NOT NULL,
  UNIQUE KEY `sid` (`id`,`tid`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 1, 'thời trang')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 2, 'sang trọng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 3, 'phù hợp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 4, 'đi chơi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 5, 'áo sơ mi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (10, 6, 'mũi nhọn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (11, 7, 'búp bê')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 8, 'sản phẩm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 9, 'cao cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 10, 'thiết kế')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 11, 'đẳng cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 12, 'quý phái')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 13, 'hương vị')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 14, 'êm dịu')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 15, 'phảng phất')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 16, 'hương thơm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 17, 'thảo mộc')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 18, 'sức khoẻ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 19, 'phục hưng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (1, 20, 'sinh lực')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 9, 'cao cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 11, 'đẳng cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 4, 'đi chơi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 14, 'êm dịu')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 16, 'hương thơm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 13, 'hương vị')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 15, 'phảng phất')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 3, 'phù hợp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 19, 'phục hưng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 12, 'quý phái')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 8, 'sản phẩm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 2, 'sang trọng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 20, 'sinh lực')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 18, 'sức khoẻ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 17, 'thảo mộc')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 10, 'thiết kế')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (2, 1, 'thời trang')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 9, 'cao cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 11, 'đẳng cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 4, 'đi chơi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 14, 'êm dịu')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 16, 'hương thơm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 13, 'hương vị')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 15, 'phảng phất')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 3, 'phù hợp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 19, 'phục hưng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 12, 'quý phái')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 8, 'sản phẩm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 2, 'sang trọng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 20, 'sinh lực')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 18, 'sức khoẻ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 17, 'thảo mộc')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 10, 'thiết kế')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (3, 1, 'thời trang')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 9, 'cao cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 11, 'đẳng cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 4, 'đi chơi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 14, 'êm dịu')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 16, 'hương thơm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 13, 'hương vị')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 15, 'phảng phất')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 3, 'phù hợp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 19, 'phục hưng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 12, 'quý phái')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 8, 'sản phẩm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 2, 'sang trọng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 20, 'sinh lực')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 18, 'sức khoẻ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 17, 'thảo mộc')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 10, 'thiết kế')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (4, 1, 'thời trang')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 9, 'cao cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 11, 'đẳng cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 4, 'đi chơi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 14, 'êm dịu')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 16, 'hương thơm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 13, 'hương vị')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 15, 'phảng phất')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 3, 'phù hợp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 19, 'phục hưng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 12, 'quý phái')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 8, 'sản phẩm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 2, 'sang trọng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 20, 'sinh lực')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 18, 'sức khoẻ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 17, 'thảo mộc')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 10, 'thiết kế')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (5, 1, 'thời trang')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 9, 'cao cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 11, 'đẳng cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 4, 'đi chơi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 14, 'êm dịu')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 16, 'hương thơm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 13, 'hương vị')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 15, 'phảng phất')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 3, 'phù hợp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 19, 'phục hưng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 12, 'quý phái')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 8, 'sản phẩm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 2, 'sang trọng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 20, 'sinh lực')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 18, 'sức khoẻ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 17, 'thảo mộc')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 10, 'thiết kế')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (6, 1, 'thời trang')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 5, 'áo sơ mi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 9, 'cao cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 11, 'đẳng cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 4, 'đi chơi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 14, 'êm dịu')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 16, 'hương thơm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 13, 'hương vị')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 15, 'phảng phất')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 3, 'phù hợp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 19, 'phục hưng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 12, 'quý phái')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 8, 'sản phẩm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 2, 'sang trọng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 20, 'sinh lực')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 18, 'sức khoẻ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 17, 'thảo mộc')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 10, 'thiết kế')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (7, 1, 'thời trang')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 5, 'áo sơ mi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 9, 'cao cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 11, 'đẳng cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 4, 'đi chơi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 14, 'êm dịu')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 16, 'hương thơm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 13, 'hương vị')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 15, 'phảng phất')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 3, 'phù hợp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 19, 'phục hưng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 12, 'quý phái')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 8, 'sản phẩm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 2, 'sang trọng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 20, 'sinh lực')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 18, 'sức khoẻ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 17, 'thảo mộc')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 10, 'thiết kế')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_id_vi` (`id`, `tid`, `keyword`) VALUES (8, 1, 'thời trang')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_tags_vi`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_tags_vi` (
  `tid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `numpro` mediumint(8) NOT NULL DEFAULT '0',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(250) DEFAULT '',
  `description` text,
  `bodytext` text,
  `keywords` varchar(250) DEFAULT '',
  PRIMARY KEY (`tid`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=21  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (1, 8, 'thời-trang', '', '', '', 'thời trang')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (2, 9, 'sang-trọng', '', '', '', 'sang trọng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (3, 8, 'phù-hợp', '', '', '', 'phù hợp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (4, 8, 'đi-chơi', '', '', '', 'đi chơi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (5, 3, 'áo-sơ-mi', '', '', '', 'áo sơ mi')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (6, 1, 'mũi-nhọn', '', '', '', 'mũi nhọn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (7, 1, 'búp-bê', '', '', '', 'búp bê')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (8, 8, 'sản-phẩm', '', '', '', 'sản phẩm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (9, 8, 'cao-cấp', '', '', '', 'cao cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (10, 8, 'thiết-kế', '', '', '', 'thiết kế')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (11, 8, 'đẳng-cấp', '', '', '', 'đẳng cấp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (12, 8, 'quý-phái', '', '', '', 'quý phái')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (13, 8, 'hương-vị', '', '', '', 'hương vị')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (14, 8, 'êm-dịu', '', '', '', 'êm dịu')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (15, 8, 'phảng-phất', '', '', '', 'phảng phất')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (16, 8, 'hương-thơm', '', '', '', 'hương thơm')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (17, 8, 'thảo-mộc', '', '', '', 'thảo mộc')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (18, 8, 'sức-khoẻ', '', '', '', 'sức khoẻ')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (19, 8, 'phục-hưng', '', '', '', 'phục hưng')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_tags_vi` (`tid`, `numpro`, `alias`, `image`, `description`, `bodytext`, `keywords`) VALUES (20, 8, 'sinh-lực', '', '', '', 'sinh lực')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_template`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_template` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `weight` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `vi_title` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_transaction`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_time` int(11) NOT NULL DEFAULT '0',
  `transaction_status` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  `payment` varchar(100) NOT NULL DEFAULT '0',
  `payment_id` varchar(22) NOT NULL DEFAULT '0',
  `payment_time` int(11) NOT NULL DEFAULT '0',
  `payment_amount` double NOT NULL DEFAULT '0',
  `payment_data` text NOT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `order_id` (`order_id`),
  KEY `payment_id` (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_units`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vi_title` varchar(250) NOT NULL DEFAULT '',
  `vi_note` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_units` (`id`, `vi_title`, `vi_note`) VALUES (1, 'cái', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_units` (`id`, `vi_title`, `vi_note`) VALUES (2, 'đôi', '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_warehouse`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_warehouse` (
  `wid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `note` text NOT NULL,
  `user_id` mediumint(8) NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM  AUTO_INCREMENT=12  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse` (`wid`, `title`, `note`, `user_id`, `addtime`) VALUES (1, 'Nhập kho ngày 23/05/2015', '', 1, 1432364016)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse` (`wid`, `title`, `note`, `user_id`, `addtime`) VALUES (2, 'Nhập kho ngày 23/05/2015', '', 1, 1432365552)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse` (`wid`, `title`, `note`, `user_id`, `addtime`) VALUES (3, 'Nhập kho ngày 23/05/2015', '', 1, 1432366753)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse` (`wid`, `title`, `note`, `user_id`, `addtime`) VALUES (4, 'Nhập kho ngày 23/05/2015', '', 1, 1432367106)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse` (`wid`, `title`, `note`, `user_id`, `addtime`) VALUES (5, 'Nhập kho ngày 23/05/2015', '', 1, 1432367387)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse` (`wid`, `title`, `note`, `user_id`, `addtime`) VALUES (6, 'Nhập kho ngày 23/05/2015', '', 1, 1432367857)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse` (`wid`, `title`, `note`, `user_id`, `addtime`) VALUES (7, 'Nhập kho ngày 23/05/2015', '', 1, 1432369139)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse` (`wid`, `title`, `note`, `user_id`, `addtime`) VALUES (8, 'Nhập kho ngày 26/05/2015', '', 1, 1432608794)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse` (`wid`, `title`, `note`, `user_id`, `addtime`) VALUES (9, 'Nhập kho ngày 26/05/2015', '', 1, 1432608805)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse` (`wid`, `title`, `note`, `user_id`, `addtime`) VALUES (10, 'Nhập kho ngày 26/05/2015', '', 1, 1432608819)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse` (`wid`, `title`, `note`, `user_id`, `addtime`) VALUES (11, 'Nhập kho ngày 26/05/2015', '', 1, 1432608835)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_warehouse_logs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_warehouse_logs` (
  `logid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wid` int(11) unsigned NOT NULL DEFAULT '0',
  `pro_id` int(11) unsigned NOT NULL DEFAULT '0',
  `quantity` int(11) unsigned NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  `money_unit` char(3) NOT NULL,
  PRIMARY KEY (`logid`),
  KEY `wid` (`wid`)
) ENGINE=MyISAM  AUTO_INCREMENT=12  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs` (`logid`, `wid`, `pro_id`, `quantity`, `price`, `money_unit`) VALUES (1, 1, 1, 20, '150000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs` (`logid`, `wid`, `pro_id`, `quantity`, `price`, `money_unit`) VALUES (2, 2, 2, 50, '250000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs` (`logid`, `wid`, `pro_id`, `quantity`, `price`, `money_unit`) VALUES (3, 3, 3, 15, '70000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs` (`logid`, `wid`, `pro_id`, `quantity`, `price`, `money_unit`) VALUES (4, 4, 4, 20, '120000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs` (`logid`, `wid`, `pro_id`, `quantity`, `price`, `money_unit`) VALUES (5, 5, 5, 30, '120000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs` (`logid`, `wid`, `pro_id`, `quantity`, `price`, `money_unit`) VALUES (6, 6, 6, 15, '180000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs` (`logid`, `wid`, `pro_id`, `quantity`, `price`, `money_unit`) VALUES (7, 7, 7, 50, '50000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs` (`logid`, `wid`, `pro_id`, `quantity`, `price`, `money_unit`) VALUES (8, 8, 11, 20, '80000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs` (`logid`, `wid`, `pro_id`, `quantity`, `price`, `money_unit`) VALUES (9, 9, 10, 10, '90000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs` (`logid`, `wid`, `pro_id`, `quantity`, `price`, `money_unit`) VALUES (10, 10, 9, 10, '95000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs` (`logid`, `wid`, `pro_id`, `quantity`, `price`, `money_unit`) VALUES (11, 11, 8, 15, '50000', 'VND')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_warehouse_logs_group`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_warehouse_logs_group` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `logid` int(11) unsigned NOT NULL DEFAULT '0',
  `listgroup` varchar(250) NOT NULL,
  `quantity` int(11) unsigned NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  `money_unit` char(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `logid` (`logid`)
) ENGINE=MyISAM  AUTO_INCREMENT=11  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs_group` (`id`, `logid`, `listgroup`, `quantity`, `price`, `money_unit`) VALUES (8, 8, '7,24,35', 20, '80000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs_group` (`id`, `logid`, `listgroup`, `quantity`, `price`, `money_unit`) VALUES (9, 9, '7,16,33,51', 10, '90000', 'VND')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_warehouse_logs_group` (`id`, `logid`, `listgroup`, `quantity`, `price`, `money_unit`) VALUES (10, 10, '7,24,35,53', 10, '95000', 'VND')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_weight_vi`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_weight_vi` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `code` char(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `exchange` double NOT NULL DEFAULT '0',
  `round` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_weight_vi` (`id`, `code`, `title`, `exchange`, `round`) VALUES (1, 'g', 'Gram', '1', '0.1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_weight_vi` (`id`, `code`, `title`, `exchange`, `round`) VALUES (2, 'kg', 'Kilogam', '1000', '0.1')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_shops_wishlist`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_shops_wishlist` (
  `wid` smallint(6) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `listid` text,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_shops_wishlist` (`wid`, `user_id`, `listid`) VALUES (1, 1, '3')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users` (`userid`, `group_id`, `username`, `md5username`, `password`, `email`, `first_name`, `last_name`, `gender`, `photo`, `birthday`, `sig`, `regdate`, `question`, `answer`, `passlostkey`, `view_mail`, `remember`, `in_groups`, `active`, `active2step`, `secretkey`, `checknum`, `last_login`, `last_ip`, `last_agent`, `last_openid`, `last_update`, `idsite`, `safemode`, `safekey`, `email_verification_time`, `active_obj`) VALUES (2, 2, 'phanhuuhoang', 'd8e7c0a72ff278d65455f5d1c7516b3c', '{SSHA512}bz48PhvbEjJ9+ToqN2BanImiRrZbSPAnwr2uIPl5qLnxcZ2+0QYi64k0/dS/dDRODS9j7igb7sFGKgwuFvkjKTkzOTU=', 'phanhuuhoang@gmail.com', 'Phan Hữu Hoàng', '', 'M', '', 308422800, '', 1634652284, 'phanhuuhoang', 'phanhuuhoang', '', 0, 1, '4,2', 1, 0, '', '', 0, '', '', '', 0, 0, 0, '', -1, 'SYSTEM')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_backupcodes`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_backupcodes` (
  `userid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `is_used` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `time_used` int(11) unsigned NOT NULL DEFAULT '0',
  `time_creat` int(11) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `userid` (`userid`,`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_config` (
  `config` varchar(100) NOT NULL,
  `content` text,
  `edit_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`config`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('access_admin', 'a:8:{s:15:\"access_viewlist\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:12:\"access_addus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:14:\"access_waiting\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:17:\"access_editcensor\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_editus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:12:\"access_delus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_passus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_groups\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}}', 1634652282)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('password_simple', '000000|1234|2000|12345|111111|123123|123456|654321|696969|1234567|1234569|11223344|12345678|12345679|23456789|66666666|66668888|68686868|87654321|88888888|99999999|123456789|999999999|1234567890|aaaaaa|abc123|abc123@|abc@123|admin123|admin123@|admin@123|adobe1|adobe123|azerty|baseball|dragon|football|harley|hoilamgi|iloveyou|jennifer|jordan|khongbiet|khongco|khongcopass|letmein|macromedia|master|michael|monkey|mustang|nuke123|nuke123@|nuke@123|password|photoshop|pussy|qwerty|shadow|superman', 1634652282)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('deny_email', 'yoursite.com|mysite.com|localhost|xxx', 1634652282)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('deny_name', 'anonimo|anonymous|god|linux|nobody|operator|root', 1634652282)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('avatar_width', '80', 1634652282)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('avatar_height', '80', 1634652282)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('active_group_newusers', '0', 1634652282)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('active_editinfo_censor', '0', 1634652282)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('active_user_logs', '1', 1634652282)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('min_old_user', '16', 1634652282)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('register_active_time', '86400', 1634609551)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('auto_assign_oauthuser', '0', 1634652282)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('siteterms_vi', '<p> Để trở thành thành viên, bạn phải cam kết đồng ý với các điều khoản dưới đây. Chúng tôi có thể thay đổi lại những điều khoản này vào bất cứ lúc nào và chúng tôi sẽ cố gắng thông báo đến bạn kịp thời.<br /> <br /> Bạn cam kết không gửi bất cứ bài viết có nội dung lừa đảo, thô tục, thiếu văn hoá; vu khống, khiêu khích, đe doạ người khác; liên quan đến các vấn đề tình dục hay bất cứ nội dung nào vi phạm luật pháp của quốc gia mà bạn đang sống, luật pháp của quốc gia nơi đặt máy chủ của website này hay luật pháp quốc tế. Nếu vẫn cố tình vi phạm, ngay lập tức bạn sẽ bị cấm tham gia vào website. Địa chỉ IP của tất cả các bài viết đều được ghi nhận lại để bảo vệ các điều khoản cam kết này trong trường hợp bạn không tuân thủ.<br /> <br /> Bạn đồng ý rằng website có quyền gỡ bỏ, sửa, di chuyển hoặc khoá bất kỳ bài viết nào trong website vào bất cứ lúc nào tuỳ theo nhu cầu công việc.<br /> <br /> Đăng ký làm thành viên của chúng tôi, bạn cũng phải đồng ý rằng, bất kỳ thông tin cá nhân nào mà bạn cung cấp đều được lưu trữ trong cơ sở dữ liệu của hệ thống. Mặc dù những thông tin này sẽ không được cung cấp cho bất kỳ người thứ ba nào khác mà không được sự đồng ý của bạn, chúng tôi không chịu trách nhiệm về việc những thông tin cá nhân này của bạn bị lộ ra bên ngoài từ những kẻ phá hoại có ý đồ xấu tấn công vào cơ sở dữ liệu của hệ thống.</p>', 1274757129)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_edit`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_edit` (
  `userid` mediumint(8) unsigned NOT NULL,
  `lastedit` int(11) unsigned NOT NULL DEFAULT '0',
  `info_basic` text NOT NULL,
  `info_custom` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_field`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_field` (
  `fid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `field` varchar(25) NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT '1',
  `field_type` enum('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect') NOT NULL DEFAULT 'textbox',
  `field_choices` text NOT NULL,
  `sql_choices` text NOT NULL,
  `match_type` enum('none','alphanumeric','unicodename','email','url','regex','callback') NOT NULL DEFAULT 'none',
  `match_regex` varchar(250) NOT NULL DEFAULT '',
  `func_callback` varchar(75) NOT NULL DEFAULT '',
  `min_length` int(11) NOT NULL DEFAULT '0',
  `max_length` bigint(20) unsigned NOT NULL DEFAULT '0',
  `required` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `show_register` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `user_editable` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `show_profile` tinyint(4) NOT NULL DEFAULT '1',
  `class` varchar(50) NOT NULL,
  `language` text NOT NULL,
  `default_value` varchar(255) NOT NULL DEFAULT '',
  `is_system` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`),
  UNIQUE KEY `field` (`field`)
) ENGINE=MyISAM  AUTO_INCREMENT=8  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (1, 'first_name', 1, 'textbox', '', '', 'none', '', '', 0, 100, 1, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:4:\"Tên\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (2, 'last_name', 2, 'textbox', '', '', 'none', '', '', 0, 100, 0, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:20:\"Họ và tên đệm\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (3, 'gender', 3, 'select', 'a:3:{s:1:\"N\";s:0:\"\";s:1:\"M\";s:0:\"\";s:1:\"F\";s:0:\"\";}', '', 'none', '', '', 0, 1, 0, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:12:\"Giới tính\";i:1;s:0:\"\";}}', '2', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (4, 'birthday', 4, 'date', 'a:1:{s:12:\"current_date\";i:0;}', '', 'none', '', '', 0, 0, 1, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Ngày tháng năm sinh\";i:1;s:0:\"\";}}', '0', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (5, 'sig', 5, 'textarea', '', '', 'none', '', '', 0, 1000, 0, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:9:\"Chữ ký\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (6, 'question', 6, 'textbox', '', '', 'none', '', '', 3, 255, 1, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Câu hỏi bảo mật\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (7, 'answer', 7, 'textbox', '', '', 'none', '', '', 3, 255, 1, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Trả lời câu hỏi\";i:1;s:0:\"\";}}', '', 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_groups`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_groups` (
  `group_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(240) NOT NULL,
  `email` varchar(100) DEFAULT '',
  `group_type` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '0:Sys, 1:approval, 2:public',
  `group_color` varchar(10) NOT NULL,
  `group_avatar` varchar(255) NOT NULL,
  `require_2step_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `require_2step_site` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_default` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL,
  `exp_time` int(11) NOT NULL,
  `weight` int(11) unsigned NOT NULL DEFAULT '0',
  `act` tinyint(1) unsigned NOT NULL,
  `idsite` int(11) unsigned NOT NULL DEFAULT '0',
  `numbers` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `siteus` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `config` varchar(250) DEFAULT '',
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `kalias` (`alias`,`idsite`),
  KEY `exp_time` (`exp_time`)
) ENGINE=MyISAM  AUTO_INCREMENT=13  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (1, 'Super-Admin', '', 0, '', '', 0, 0, 0, 1634609551, 0, 1, 1, 0, 1, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (2, 'General-Admin', '', 0, '', '', 0, 0, 0, 1634609551, 0, 2, 1, 0, 1, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (3, 'Module-Admin', '', 0, '', '', 0, 0, 0, 1634609551, 0, 3, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (4, 'Users', '', 0, '', '', 0, 0, 0, 1634609551, 0, 4, 1, 0, 2, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (7, 'New-Users', '', 0, '', '', 0, 0, 0, 1634609551, 0, 5, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (5, 'Guest', '', 0, '', '', 0, 0, 0, 1634609551, 0, 6, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (6, 'All', '', 0, '', '', 0, 0, 0, 1634609551, 0, 7, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_groups_detail`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_groups_detail` (
  `group_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `lang` char(2) NOT NULL DEFAULT '',
  `title` varchar(240) NOT NULL,
  `description` varchar(240) NOT NULL DEFAULT '',
  `content` text,
  UNIQUE KEY `group_id_lang` (`lang`,`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (1, 'vi', 'Super Admin', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (2, 'vi', 'General Admin', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (3, 'vi', 'Module Admin', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (4, 'vi', 'Users', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (7, 'vi', 'New Users', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (5, 'vi', 'Guest', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (6, 'vi', 'All', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (10, 'vi', 'Người hâm mộ', 'Nhóm những người hâm mộ hệ thống NukeViet', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (11, 'vi', 'Người quản lý', 'Nhóm những người quản lý website xây dựng bằng hệ thống NukeViet', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (12, 'vi', 'Lập trình viên', 'Nhóm Lập trình viên hệ thống NukeViet', '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_groups_users`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_groups_users` (
  `group_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_leader` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `approved` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `time_requested` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'Thời gian yêu cầu tham gia',
  `time_approved` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'Thời gian duyệt yêu cầu tham gia',
  PRIMARY KEY (`group_id`,`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_users` (`group_id`, `userid`, `is_leader`, `approved`, `data`, `time_requested`, `time_approved`) VALUES (1, 1, 1, 1, '0', 1634609572, 1634609572)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_users` (`group_id`, `userid`, `is_leader`, `approved`, `data`, `time_requested`, `time_approved`) VALUES (2, 2, 0, 1, '0', 1634652290, 1634652290)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_info`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_info` (
  `userid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_info` (`userid`) VALUES (1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_info` (`userid`) VALUES (2)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_openid`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_openid` (
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `openid` varchar(255) NOT NULL DEFAULT '',
  `opid` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`opid`),
  KEY `userid` (`userid`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_question`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_question` (
  `qid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(240) NOT NULL DEFAULT '',
  `lang` char(2) NOT NULL DEFAULT '',
  `weight` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `edit_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`qid`),
  UNIQUE KEY `title` (`title`,`lang`)
) ENGINE=MyISAM  AUTO_INCREMENT=8  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (1, 'Bạn thích môn thể thao nào nhất', 'vi', 1, 1274840238, 1274840238)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (2, 'Món ăn mà bạn yêu thích', 'vi', 2, 1274840250, 1274840250)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (3, 'Thần tượng điện ảnh của bạn', 'vi', 3, 1274840257, 1274840257)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (4, 'Bạn thích nhạc sỹ nào nhất', 'vi', 4, 1274840264, 1274840264)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (5, 'Quê ngoại của bạn ở đâu', 'vi', 5, 1274840270, 1274840270)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (6, 'Tên cuốn sách &quot;gối đầu giường&quot;', 'vi', 6, 1274840278, 1274840278)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (7, 'Ngày lễ mà bạn luôn mong đợi', 'vi', 7, 1274840285, 1274840285)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_reg`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_reg` (
  `userid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '',
  `md5username` char(32) NOT NULL DEFAULT '',
  `password` varchar(150) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `gender` char(1) NOT NULL DEFAULT '',
  `birthday` int(11) NOT NULL,
  `sig` text,
  `regdate` int(11) unsigned NOT NULL DEFAULT '0',
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL DEFAULT '',
  `checknum` varchar(50) NOT NULL DEFAULT '',
  `users_info` text,
  `openid_info` text,
  `idsite` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `login` (`username`),
  UNIQUE KEY `md5username` (`md5username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_about`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_about` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT '',
  `imagealt` varchar(255) DEFAULT '',
  `imageposition` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `description` text,
  `bodytext` mediumtext NOT NULL,
  `keywords` text,
  `socialbutton` tinyint(4) NOT NULL DEFAULT '0',
  `activecomm` varchar(255) DEFAULT '',
  `layout_func` varchar(100) DEFAULT '',
  `weight` smallint(4) NOT NULL DEFAULT '0',
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `edit_time` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `hot_post` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_about_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_about_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('viewtype', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('facebookapi', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('per_page', '20')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('news_first', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('related_articles', '5')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('copy_page', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('alias_lower', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('socialbutton', 'facebook,twitter')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_blocks_groups`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_blocks_groups` (
  `bid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(55) NOT NULL,
  `module` varchar(55) NOT NULL,
  `file_name` varchar(55) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `template` varchar(55) DEFAULT NULL,
  `position` varchar(55) DEFAULT NULL,
  `exp_time` int(11) DEFAULT '0',
  `active` varchar(10) DEFAULT '1',
  `act` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `groups_view` varchar(255) DEFAULT '',
  `all_func` tinyint(4) NOT NULL DEFAULT '0',
  `weight` int(11) NOT NULL DEFAULT '0',
  `config` text,
  PRIMARY KEY (`bid`),
  KEY `theme` (`theme`),
  KEY `module` (`module`),
  KEY `position` (`position`),
  KEY `exp_time` (`exp_time`)
) ENGINE=MyISAM  AUTO_INCREMENT=46  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (11, 'default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, '1', 1, '6', 1, 1, 'a:5:{s:12:\"copyright_by\";s:0:\"\";s:13:\"copyright_url\";s:0:\"\";s:9:\"design_by\";s:12:\"VINADES.,JSC\";s:10:\"design_url\";s:18:\"http://vinades.vn/\";s:13:\"siteterms_url\";s:39:\"/index.php?language=vi&amp;nv=siteterms\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (15, 'default', 'users', 'global.user_button.php', 'Đăng nhập thành viên', '', 'no_title', '[PERSONALAREA]', 0, '1', 1, '6', 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (17, 'default', 'menu', 'global.bootstrap.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:1;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (22, 'mobile_default', 'menu', 'global.metismenu.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:1;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (23, 'mobile_default', 'users', 'global.user_button.php', 'Sign In', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (24, 'mobile_default', 'contact', 'global.contact_default.php', 'Contact Default', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (25, 'mobile_default', 'contact', 'global.contact_form.php', 'Feedback', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (26, 'mobile_default', 'theme', 'global.social.php', 'Social icon', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 3, 'a:3:{s:8:\"facebook\";s:32:\"http://www.facebook.com/nukeviet\";s:7:\"youtube\";s:37:\"https://www.youtube.com/user/nukeviet\";s:7:\"twitter\";s:28:\"https://twitter.com/nukeviet\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (27, 'mobile_default', 'theme', 'global.QR_code.php', 'QR code', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (28, 'mobile_default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, '1', 1, '6', 1, 1, 'a:5:{s:12:\"copyright_by\";s:0:\"\";s:13:\"copyright_url\";s:0:\"\";s:9:\"design_by\";s:12:\"VINADES.,JSC\";s:10:\"design_url\";s:18:\"http://vinades.vn/\";s:13:\"siteterms_url\";s:39:\"/index.php?language=vi&amp;nv=siteterms\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (29, 'mobile_default', 'theme', 'global.menu_footer.php', 'Các chuyên mục chính', '', 'primary', '[MENU_FOOTER]', 0, '1', 1, '6', 1, 1, 'a:1:{s:14:\"module_in_menu\";a:9:{i:0;s:5:\"about\";i:1;s:4:\"news\";i:2;s:5:\"users\";i:3;s:7:\"contact\";i:4;s:6:\"voting\";i:5;s:7:\"banners\";i:6;s:4:\"seek\";i:7;s:5:\"feeds\";i:8;s:9:\"siteterms\";}}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (30, 'mobile_default', 'theme', 'global.company_info.php', 'Công ty chủ quản', '', 'primary', '[COMPANY_INFO]', 0, '1', 1, '6', 1, 1, 'a:13:{s:12:\"company_name\";s:58:\"Công ty cổ phần phát triển nguồn mở Việt Nam\";s:15:\"company_address\";s:72:\"Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội\";s:16:\"company_sortname\";s:12:\"VINADES.,JSC\";s:15:\"company_regcode\";s:0:\"\";s:16:\"company_regplace\";s:0:\"\";s:21:\"company_licensenumber\";s:0:\"\";s:22:\"company_responsibility\";s:0:\"\";s:15:\"company_showmap\";i:1;s:14:\"company_mapurl\";s:326:\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2634.116366996857!2d105.79399620326203!3d20.9844946314258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac93055e2f2f%3A0x91f4b423089193dd!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gUGjDoXQgdHJp4buDbiBOZ3Xhu5NuIG3hu58gVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1558315703646!5m2!1svi!2s\";s:13:\"company_phone\";s:58:\"+84-24-85872007[+842485872007]|+84-904762534[+84904762534]\";s:11:\"company_fax\";s:15:\"+84-24-35500914\";s:13:\"company_email\";s:18:\"contact@vinades.vn\";s:15:\"company_website\";s:17:\"http://vinades.vn\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (31, 'default', 'home', 'global.banner_center.php', 'slider home', '', 'no_title', '[BANNER_HEADER]', 0, '1', 1, '6', 1, 1, 'a:3:{s:7:\"blockid\";i:1;s:11:\"number_item\";i:10;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (32, 'default', 'home', 'global.about.php', 'giới thiệu', '', 'no_title', '[GIOITHIEU]', 0, '1', 1, '6', 1, 1, 'a:3:{s:7:\"blockid\";i:8;s:11:\"number_item\";i:10;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (33, 'default', 'shops', 'global.block_relates_product.php', 'Sản phẩm nổi bật', '', 'home', '[SANPHAM]', 0, '1', 1, '6', 1, 1, 'a:3:{s:7:\"blockid\";i:2;s:6:\"numrow\";i:8;s:7:\"cut_num\";i:60;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (34, 'default', 'photos', 'global.block_photos_new.php', 'Hình ảnh hoạt động', '', 'no_title', '[HINHANH]', 0, '1', 1, '6', 1, 1, 'a:4:{s:6:\"numrow\";i:8;s:12:\"title_length\";i:60;s:10:\"slide_mode\";i:0;s:8:\"hometext\";s:0:\"\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (35, 'default', 'home', 'global.hotro.php', 'Hỗ trợ online', '', '', '[RIGHT]', 0, '1', 1, '6', 1, 2, 'a:3:{s:7:\"blockid\";i:1;s:11:\"number_item\";i:10;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (36, 'default', 'shops', 'global.block_cart.php', 'Giỏ hàng', '', '', '[RIGHT]', 0, '1', 1, '6', 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (37, 'default', 'statistics', 'global.counter.php', 'Thống kê', '', '', '[RIGHT]', 0, '1', 1, '6', 1, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (38, 'default', 'tin-tuc', 'global.tin-tuc.php', 'Tin tức &amp; sự kiện', '', 'home', '[NEW]', 0, '1', 1, '6', 1, 1, 'a:2:{s:12:\"title_length\";i:0;s:6:\"numrow\";i:4;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (39, 'default', 'menu', 'global.footer.php', 'Thông tin', '', 'simple', '[MENU_FOOTER1]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:2;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (40, 'default', 'menu', 'global.footer.php', 'Quy định', '', 'simple', '[MENU_FOOTER2]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:3;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (41, 'default', 'home', 'global.company.php', 'Liên hệ', '', 'no_title', '[COMPANY_INFO]', 0, '1', 1, '6', 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (42, 'default', 'home', 'global.bot.php', 'bot liên hệ', '', 'no_title', '[COMPANY_INFO]', 0, '1', 1, '6', 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (43, 'default', 'home', 'global.doitac.php', 'Đối tác', '', 'no_title', '[DOITAC]', 0, '1', 1, '6', 1, 1, 'a:3:{s:7:\"blockid\";i:2;s:11:\"number_item\";i:10;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (44, 'default', 'home', 'global.review.php', 'Khách hàng nói về chúng tôi', '', 'no_title', '[REVIEW]', 0, '1', 1, '6', 1, 1, 'a:3:{s:7:\"blockid\";i:3;s:11:\"number_item\";i:10;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (45, 'default', 'tin-tuc', 'global.tintucright.php', 'Tin tức', '', '', '[RIGHT]', 0, '1', 1, '6', 1, 3, 'a:2:{s:12:\"title_length\";i:0;s:6:\"numrow\";i:5;}')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_blocks_weight`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_blocks_weight` (
  `bid` mediumint(8) NOT NULL DEFAULT '0',
  `func_id` mediumint(8) NOT NULL DEFAULT '0',
  `weight` mediumint(8) NOT NULL DEFAULT '0',
  UNIQUE KEY `bid` (`bid`,`func_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 118, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 115, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 109, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 107, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 108, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 119, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 110, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 118, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 115, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 109, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 107, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 108, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 119, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 110, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 118, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 115, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 109, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 107, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 108, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 119, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 110, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 118, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 115, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 109, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 107, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 108, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 119, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 110, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 1, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 2, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 3, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 4, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 5, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 6, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 7, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 8, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 9, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 10, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 11, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 12, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 13, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 14, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 15, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 16, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 17, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 18, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 19, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 20, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 21, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 22, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 23, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 24, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 25, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 26, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 27, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 28, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 29, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 30, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 31, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 32, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 33, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 34, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 35, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 36, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 37, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 38, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 39, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 40, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 41, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 42, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 43, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 44, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 45, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 46, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 47, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 48, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 49, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 50, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 51, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 52, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 53, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 54, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 55, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 56, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 57, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 58, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 59, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 60, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 61, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 62, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 63, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 64, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 65, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 1, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 2, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 3, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 4, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 5, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 6, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 7, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 8, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 9, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 10, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 11, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 12, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 13, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 14, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 15, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 16, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 17, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 18, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 19, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 20, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 21, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 22, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 23, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 24, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 25, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 26, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 27, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 28, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 29, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 30, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 31, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 32, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 33, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 34, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 35, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 36, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 37, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 38, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 39, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 40, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 41, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 42, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 43, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 44, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 45, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 46, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 47, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 48, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 49, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 50, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 51, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 52, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 53, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 54, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 55, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 56, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 57, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 58, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 59, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 60, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 61, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 62, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 63, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 64, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 65, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 1, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 2, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 3, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 4, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 5, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 6, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 7, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 8, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 9, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 10, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 11, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 12, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 13, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 14, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 15, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 16, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 17, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 18, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 19, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 20, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 21, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 22, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 23, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 24, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 25, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 26, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 27, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 28, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 29, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 30, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 31, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 32, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 33, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 34, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 35, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 36, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 37, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 38, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 39, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 40, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 41, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 42, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 43, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 44, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 45, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 46, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 47, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 48, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 49, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 50, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 51, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 52, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 53, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 54, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 55, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 56, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 57, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 58, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 59, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 60, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 61, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 62, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 63, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 64, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 65, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 1, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 2, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 3, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 4, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 5, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 6, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 7, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 8, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 9, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 10, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 11, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 12, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 13, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 14, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 15, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 16, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 17, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 18, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 19, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 20, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 21, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 22, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 23, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 24, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 25, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 26, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 27, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 28, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 29, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 30, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 31, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 32, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 33, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 34, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 35, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 36, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 37, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 38, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 39, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 40, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 41, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 42, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 43, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 44, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 45, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 46, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 47, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 48, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 49, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 50, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 51, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 52, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 53, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 54, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 55, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 56, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 57, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 58, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 59, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 60, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 61, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 62, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 63, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 64, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 65, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 71, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 73, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 66, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 72, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 67, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 68, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 74, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 71, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 73, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 66, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 72, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 67, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 68, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 74, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 71, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 73, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 66, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 72, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 67, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 68, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 74, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 71, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 73, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 66, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 72, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 67, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 68, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 74, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 86, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 102, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 81, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 95, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 77, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 87, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 88, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 84, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 83, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 96, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 79, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 103, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 101, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 89, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 99, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 82, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 76, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 75, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 86, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 102, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 81, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 95, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 77, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 87, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 88, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 84, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 83, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 96, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 79, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 103, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 101, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 89, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 99, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 82, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 76, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 75, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 86, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 102, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 81, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 95, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 77, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 87, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 88, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 84, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 83, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 96, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 79, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 103, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 101, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 89, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 99, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 82, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 76, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 75, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 86, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 102, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 81, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 95, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 77, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 87, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 88, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 84, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 83, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 96, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 79, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 103, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 101, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 89, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 99, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 82, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 76, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 75, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 106, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 86, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 102, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 81, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 95, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 77, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 87, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 88, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 84, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 83, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 96, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 79, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 103, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 101, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 89, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 99, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 82, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 76, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 75, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 1, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 3, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 110, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 119, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 108, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 107, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 109, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 115, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 118, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 71, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 73, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 66, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 72, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 67, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 68, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 74, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 4, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 5, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 6, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 12, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 13, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 8, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 11, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 7, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 9, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 10, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 20, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 21, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 22, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 23, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 24, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 25, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 26, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 27, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 28, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 29, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 30, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 32, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 33, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 34, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 35, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 36, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 37, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 38, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 39, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 41, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 42, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 43, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 44, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 50, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 51, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 52, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 55, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 56, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 57, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 58, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 59, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 63, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 64, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 65, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 106, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 86, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 102, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 81, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 95, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 77, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 87, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 88, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 84, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 83, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 96, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 79, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 103, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 101, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 89, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 99, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 82, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 76, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 75, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 1, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 3, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 110, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 119, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 108, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 107, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 109, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 115, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 118, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 71, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 73, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 66, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 72, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 67, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 68, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 74, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 4, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 5, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 6, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 12, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 13, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 8, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 11, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 7, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 9, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 10, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 20, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 21, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 22, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 23, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 24, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 25, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 26, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 27, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 28, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 29, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 30, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 32, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 33, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 34, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 35, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 36, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 37, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 38, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 39, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 41, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 42, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 43, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 44, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 50, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 51, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 52, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 55, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 56, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 57, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 58, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 59, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 63, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 64, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 65, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 120, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 121, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 120, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 121, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 120, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 121, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 120, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 121, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 120, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 121, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 120, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 121, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 106, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 86, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 102, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 81, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 95, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 77, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 87, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 88, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 84, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 83, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 96, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 79, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 103, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 101, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 89, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 99, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 82, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 76, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 75, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 120, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 121, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 1, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 3, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 110, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 119, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 108, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 107, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 109, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 115, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 118, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 71, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 73, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 66, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 72, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 67, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 68, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 74, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 20, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 21, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 22, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 23, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 24, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 25, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 26, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 27, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 28, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 29, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 30, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 32, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 33, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 34, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 35, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 36, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 37, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 38, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 39, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 41, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 42, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 43, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 44, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 50, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 51, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 52, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 55, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 56, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 57, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 58, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 59, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 63, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 64, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 65, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 106, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 86, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 102, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 81, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 95, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 77, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 87, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 88, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 84, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 83, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 96, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 79, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 103, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 101, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 89, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 99, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 82, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 76, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 75, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 120, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 121, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 110, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 119, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 108, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 107, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 109, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 115, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 118, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 71, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 73, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 72, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 67, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 74, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (31, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (41, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 123, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (42, 124, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (43, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (11, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (32, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (34, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (39, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (40, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (38, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (44, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (36, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 123, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (35, 124, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 123, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (37, 124, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (33, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 123, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 124, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 123, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 124, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 123, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 124, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 123, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 124, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 123, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 124, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 106, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 86, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 102, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 81, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 95, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 77, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 87, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 88, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 84, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 83, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 96, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 79, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 103, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 101, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 89, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 99, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 82, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 76, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 75, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 120, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 121, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 1, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 3, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 110, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 119, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 108, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 107, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 109, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 115, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 118, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 71, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 73, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 66, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 72, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 67, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 68, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 74, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 123, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 124, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 20, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 21, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 22, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 23, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 24, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 25, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 26, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 27, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 28, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 29, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 30, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 32, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 33, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 34, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 35, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 36, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 37, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 38, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 39, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 41, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 42, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 43, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 44, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 50, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 51, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 52, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 55, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 56, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 57, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 58, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 59, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 63, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 64, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (45, 65, 3)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_comment`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_comment` (
  `cid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(55) NOT NULL,
  `area` int(11) NOT NULL DEFAULT '0',
  `id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `attach` varchar(255) NOT NULL DEFAULT '',
  `post_time` int(11) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `post_name` varchar(100) NOT NULL,
  `post_email` varchar(100) NOT NULL,
  `post_ip` varchar(39) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `likes` mediumint(9) NOT NULL DEFAULT '0',
  `dislikes` mediumint(9) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `mod_id` (`module`,`area`,`id`),
  KEY `post_time` (`post_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_department`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_department` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `others` text NOT NULL,
  `cats` text NOT NULL,
  `admins` text NOT NULL,
  `act` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `weight` smallint(5) NOT NULL,
  `is_default` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `full_name` (`full_name`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_contact_department` (`id`, `full_name`, `alias`, `image`, `phone`, `fax`, `email`, `address`, `note`, `others`, `cats`, `admins`, `act`, `weight`, `is_default`) VALUES (1, 'Phòng Chăm sóc khách hàng', 'Cham-soc-khach-hang', '', '(08) 38.000.000[+84838000000]', '08 38.000.001', 'customer@mysite.com', '', 'Bộ phận tiếp nhận và giải quyết các yêu cầu, đề nghị, ý kiến liên quan đến hoạt động chính của doanh nghiệp', '{\"viber\":\"myViber\",\"skype\":\"mySkype\",\"yahoo\":\"myYahoo\"}', 'Tư vấn|Khiếu nại, phản ánh|Đề nghị hợp tác', '1/1/1/0;', 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_contact_department` (`id`, `full_name`, `alias`, `image`, `phone`, `fax`, `email`, `address`, `note`, `others`, `cats`, `admins`, `act`, `weight`, `is_default`) VALUES (2, 'Phòng Kỹ thuật', 'Ky-thuat', '', '(08) 38.000.002[+84838000002]', '08 38.000.003', 'technical@mysite.com', '', 'Bộ phận tiếp nhận và giải quyết các câu hỏi liên quan đến kỹ thuật', '{\"viber\":\"myViber2\",\"skype\":\"mySkype2\",\"yahoo\":\"myYahoo2\"}', 'Thông báo lỗi|Góp ý cải tiến', '1/1/1/0;', 1, 2, 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_reply`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_reply` (
  `rid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reply_content` text,
  `reply_time` int(11) unsigned NOT NULL DEFAULT '0',
  `reply_aid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_send`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_send` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cat` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `send_time` int(11) unsigned NOT NULL DEFAULT '0',
  `sender_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `sender_name` varchar(100) NOT NULL,
  `sender_address` varchar(250) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `sender_phone` varchar(20) DEFAULT '',
  `sender_ip` varchar(39) NOT NULL DEFAULT '',
  `is_read` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_reply` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_processed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `processed_by` int(11) unsigned NOT NULL DEFAULT '0',
  `processed_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sender_name` (`sender_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_supporter`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_supporter` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `departmentid` smallint(5) unsigned NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `others` text NOT NULL,
  `act` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `weight` smallint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_home_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_home_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(250) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('slider_title_extra', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('slider_image_mobile', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_email', 'info@sieusan.vn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_hotline', '0904999955')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_fax', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_responsibility', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_address', 'Số 17 Đường sô 7, KDC Cityland Park Hills, Phường 10, Gò Vấp, TP.HCM')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_map', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_regplace', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_name', 'RƯỢU ĐÔNG TRÙNG HẠ THẢO')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_sortname', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_regcode', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('facebook', 'https://www.facebook.com/0904999955')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('youtube', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('instagram', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('twitter', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('coppyright', '© Bản quyền thuộc về Rượu Đông Trùng Hạ Thảo')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_website', 'https://sieusan.vn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_hometext', 'Sản phẩm rượu cao cấp từ 100% đông trùng hạ thảo dành cho phái mạnh, thiết kế dáng bình sang trọng, đẳng cấp quý phái. Hương vị êm dịu - ngọt thơm, phảng phất hương thơm thảo mộc, tốt cho sức khoẻ, phục hưng sinh lực hiệu quả.')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_phone', '0282.20.30.777')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('logofooter', '/uploads/home/logo-hhv.png')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('bocongthuong', 'http://tms.vn/')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('logobocongthuong', '/uploads/home/logosalenoti.png')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('messenger', 'https://m.me/0904999955')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('zalo', 'https://chat.zalo.me/?phone=0904999955')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('whatsapp', 'whatsapp:+84904999955?call')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('skyper', 'skype:+84904999955?call')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('tb1', 'Cảm ơn Anh/Chị đã ghé thăm Rượu Đông Trùng Hạ Thảo')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('tb2', 'Vui lòng click vào đây để nhận thêm tư vấn!')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('tb3', 'Kết nối cùng chúng tôi qua')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('tb0', 'BeyondIncorp xin chào Anh/Chị!')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_home_slider`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_home_slider` (
  `bid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `description` mediumtext NOT NULL,
  `weight` smallint(4) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM  AUTO_INCREMENT=9  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider` (`bid`, `title`, `image`, `image2`, `description`, `weight`, `status`) VALUES (1, 'Slider trang chủ kích thước 1920x600px', '', '', '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider` (`bid`, `title`, `image`, `image2`, `description`, `weight`, `status`) VALUES (2, 'Đối tác', '', '', '', 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider` (`bid`, `title`, `image`, `image2`, `description`, `weight`, `status`) VALUES (3, 'Khách hàng nói về chúng tôi', '', '', 'Chúng tôi trân trọng  những lời khen tặng cũng như đóng góp ý kiến từ những khách hàng đã sử dụng dịch vụ của chúng tôi. Đó chính là động lực để chúng tôi cố gắng hơn nữa,mang đến những  giá trị tốt nhất khi quý khách sử dụng dịch vụ tại RƯỢU ĐÔNG TRÙNG HẠ THẢO', 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider` (`bid`, `title`, `image`, `image2`, `description`, `weight`, `status`) VALUES (8, 'ĐÔNG TRÙNG HẠ THẢO', '', '', 'Sản phẩm rượu cao cấp từ 100% đông trùng hạ thảo dành cho phái mạnh, thiết kế dáng bình sang trọng, đẳng cấp quý phái. Hương vị êm dịu - ngọt thơm, phảng phất hương thơm thảo mộc, tốt cho sức khoẻ, phục hưng sinh lực hiệu quả.', 4, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_home_slider_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_home_slider_rows` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `title_extra` varchar(250) NOT NULL,
  `title_link` varchar(250) NOT NULL,
  `description` mediumtext NOT NULL,
  `link` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(250) NOT NULL DEFAULT '',
  `image_mobile` varchar(250) NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `weight` smallint(4) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=61  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (1, 1, '1', '', '', '', '', 'slider/banner-dong-trung-ha-thao-dohavi-3.jpg', '', 1623383232, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (28, 3, 'Quốc Hiệu', 'Nhà Nam Việt', '', 'Đội ngũ tư vấn viên nhiệt tình, tư vấn rõ ràng là điều tôi tâm đắc và hài lòng nhất.Chúc cho doanh nghiệp ngày càng phát triển và vươn xa', '', 'slider/quochieu.png', '', 1626373907, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (29, 3, 'Anh Phan', 'Siêu Homes', '', '<p>Đội ngũ tư vấn viên nhiệt tình, tư vấn rõ ràng là điều tôi tâm đắc và hài lòng nhất.Chúc cho doanh nghiệp ngày càng phát triển và vươn xa</p>', '', 'slider/anhphan.png', '', 1626373947, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (5, 3, 'Đình Tứ', 'CTY NAM LONG', '', 'Đội ngũ tư vấn viên nhiệt tình, tư vấn rõ ràng là điều tôi tâm đắc và hài lòng nhất.Chúc cho doanh nghiệp ngày càng phát triển và vươn xa', '', 'slider/dinhtu.png', '', 1623384338, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (6, 3, 'Nhi Nguyễn', 'NV THU MUA', '', 'Đội ngũ tư vấn viên nhiệt tình, tư vấn rõ ràng là điều tôi tâm đắc và hài lòng nhất.Chúc cho doanh nghiệp ngày càng phát triển và vươn xa', '', 'slider/nhinguyen.png', '', 1623384370, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (7, 3, 'Phú Lê', 'XNK Phú Lê', '', 'Đội ngũ tư vấn viên nhiệt tình, tư vấn rõ ràng là điều tôi tâm đắc và hài lòng nhất.Chúc cho doanh nghiệp ngày càng phát triển và vươn xa', '', 'slider/phule.png', '', 1623384396, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (43, 8, 'IBC/BC', '', '', 'Belize, BVI, Bahamas, Samoa, Cayman, Seychelles', 'https://beyondincorp.com/vi/blog/cong-ty-offshore/', 'slider/1_2.png', '', 1626775071, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (19, 2, 'visa', '', '', '', '', 'slider/hd_03.png', '', 1624024091, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (20, 2, 'Mas', '', '', '', '', 'slider/sieuship.png', '', 1624024106, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (22, 2, '4', '', '', '', '', 'slider/viettelpost.png', '', 1624024131, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (23, 2, '5', '', '', '', '', 'slider/logo_mbbank.jpg', '', 1624024150, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (60, 2, '6', '', '', '', '', 'slider/hd_09.png', '', 1627742751, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (44, 8, 'LLC', '', 'https://beyondincorp.com/vi/blog/cong-ty-offshore/', 'Delaware, Saint Vincent , Belize, St.Kitt Nevis', '', 'slider/2_1.png', '', 1626775086, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (45, 8, 'Ltd', '', '', 'Hong Kong, Singapore, UK, Cyprus, Cayman', 'https://beyondincorp.com/vi/blog/cong-ty-offshore/', 'slider/3_1.png', '', 1626775101, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (48, 2, 'unlimint', '', '', '', '', 'slider/vnpost.png', '', 1626784362, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (59, 1, 'CHÚNG TÔI CAM KẾT MANG ĐẾN BẠN GIÁ TRỊ VƯỢT NGOÀI MONG ĐỢI', 'Kỳ vọng của bạn là đam mê của chúng tôi', '', '', '', 'slider/banner-dong-trung-ha-thao-dohavi-4.jpg', '', 1627551342, 2, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_home_support`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_home_support` (
  `bid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `weight` smallint(4) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_support` (`bid`, `title`, `description`, `weight`, `status`) VALUES (1, 'Hỗ trợ online', '', 1, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_home_support_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_home_support_rows` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `link` varchar(250) NOT NULL DEFAULT '',
  `phone` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `zalo` varchar(250) NOT NULL,
  `skyper` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT '',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `weight` smallint(4) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_support_rows` (`id`, `bid`, `title`, `link`, `phone`, `facebook`, `zalo`, `skyper`, `email`, `image`, `addtime`, `weight`, `status`) VALUES (1, 1, 'Tư vấn dịch vụ 24/7', '0813405565', '0813405565', 'https://www.facebook.com/BeyondIncorporationServices', '0813405565', '0813405565', 'support@beyondincorp.com', 'support/support_woman-512_150_150.png', 1615611586, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_support_rows` (`id`, `bid`, `title`, `link`, `phone`, `facebook`, `zalo`, `skyper`, `email`, `image`, `addtime`, `weight`, `status`) VALUES (2, 1, 'Phản ánh chất lượng 24/7', '0813405565', '0813405565', 'https://www.facebook.com/BeyondIncorporationServices', '0813405565', '0813405565', 'support@beyondincorp.com', 'support/support_man-512_150_150.png', 1622533675, 2, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_menu`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_menu` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM  AUTO_INCREMENT=4  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu` (`id`, `title`) VALUES (1, 'Top Menu')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu` (`id`, `title`) VALUES (2, 'THÔNG TIN')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu` (`id`, `title`) VALUES (3, 'QUY ĐỊNH')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_menu_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_menu_rows` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `parentid` mediumint(5) unsigned NOT NULL,
  `mid` smallint(5) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(255) DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `note` varchar(255) DEFAULT '',
  `weight` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `lev` int(11) NOT NULL DEFAULT '0',
  `subitem` text,
  `groups_view` varchar(255) DEFAULT '',
  `module_name` varchar(255) DEFAULT '',
  `op` varchar(255) DEFAULT '',
  `target` tinyint(4) DEFAULT '0',
  `css` varchar(255) DEFAULT '',
  `active_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`,`mid`)
) ENGINE=MyISAM  AUTO_INCREMENT=41  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (1, 0, 1, 'Giới thiệu', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=about', '', '', '', 2, 2, 0, '', '6', 'about', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (33, 0, 2, 'Tuyển dụng', '', '', '', '', 5, 5, 0, '', '6', '0', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (34, 0, 2, 'Liên hệ', '', '', '', '', 6, 6, 0, '', '6', '0', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (35, 0, 3, 'Chính sách khiếu nại', '', '', '', '', 1, 1, 0, '', '6', '0', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (36, 0, 3, 'Chính sách bảo mật', '', '', '', '', 2, 2, 0, '', '6', '0', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (37, 0, 3, 'Chính sách thanh toán', '', '', '', '', 3, 3, 0, '', '6', '0', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (38, 0, 3, 'Điều khoản sử dụng', '', '', '', '', 4, 4, 0, '', '6', '0', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (39, 0, 3, 'Chính sách đổi trả', '', '', '', '', 5, 5, 0, '', '6', '0', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (7, 0, 1, 'Liên hệ', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=contact', '', '', '', 6, 6, 0, '', '6', 'contact', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (27, 0, 1, 'Trang chủ', '" . NV_BASE_SITEURL . "', '', '', '', 1, 1, 0, '', '6', '0', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (40, 0, 1, 'Tuyển dụng', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=tuyen-dung', '', '', '', 5, 5, 0, '', '6', 'tuyen-dung', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (26, 0, 1, 'Sản phẩm', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=shops', '', '', '', 3, 3, 0, '', '6', 'shops', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (28, 0, 1, 'Tin tức', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=tin-tuc', '', '', '', 4, 4, 0, '', '6', 'tin-tuc', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (29, 0, 2, 'Về chúng tôi', '', '', '', '', 1, 1, 0, '', '6', '0', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (30, 0, 2, 'Tin thị trường', '', '', '', '', 2, 2, 0, '', '6', '0', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (31, 0, 2, 'Tin chuyên ngành', '', '', '', '', 3, 3, 0, '', '6', '0', '', 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (32, 0, 2, 'Yêu cầu tư vấn', '', '', '', '', 4, 4, 0, '', '6', '0', '', 1, '', 0, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_modfuncs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_modfuncs` (
  `func_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `func_name` varchar(55) NOT NULL,
  `alias` varchar(55) NOT NULL DEFAULT '',
  `func_custom_name` varchar(255) NOT NULL,
  `func_site_title` varchar(255) NOT NULL DEFAULT '',
  `in_module` varchar(50) NOT NULL,
  `show_func` tinyint(4) NOT NULL DEFAULT '0',
  `in_submenu` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `subweight` smallint(2) unsigned NOT NULL DEFAULT '1',
  `setting` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`func_id`),
  UNIQUE KEY `func_name` (`func_name`,`in_module`),
  UNIQUE KEY `alias` (`alias`,`in_module`)
) ENGINE=MyISAM  AUTO_INCREMENT=126  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (1, 'main', 'main', 'Main', '', 'about', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (2, 'sitemap', 'sitemap', 'Sitemap', '', 'about', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (3, 'rss', 'rss', 'Rss', '', 'about', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (125, 'sitemap', 'sitemap', 'Sitemap', '', 'tuyen-dung', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (124, 'rss', 'rss', 'Rss', '', 'tuyen-dung', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (123, 'main', 'main', 'Main', '', 'tuyen-dung', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (20, 'main', 'main', 'Main', '', 'users', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (21, 'login', 'login', 'Đăng nhập', '', 'users', 1, 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (22, 'register', 'register', 'Đăng ký', '', 'users', 1, 1, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (23, 'lostpass', 'lostpass', 'Khôi phục mật khẩu', '', 'users', 1, 1, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (24, 'active', 'active', 'Kích hoạt tài khoản', '', 'users', 1, 0, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (25, 'lostactivelink', 'lostactivelink', 'Lostactivelink', '', 'users', 1, 0, 6, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (26, 'editinfo', 'editinfo', 'Thiết lập tài khoản', '', 'users', 1, 1, 7, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (27, 'memberlist', 'memberlist', 'Danh sách thành viên', '', 'users', 1, 1, 8, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (28, 'groups', 'groups', 'Quản lý nhóm', '', 'users', 1, 1, 9, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (29, 'avatar', 'avatar', 'Avatar', '', 'users', 1, 0, 10, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (30, 'logout', 'logout', 'Thoát', '', 'users', 1, 1, 11, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (31, 'oauth', 'oauth', 'Oauth', '', 'users', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (32, 'main', 'main', 'Main', '', 'contact', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (33, 'main', 'main', 'Main', '', 'statistics', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (34, 'allreferers', 'allreferers', 'Theo đường dẫn đến site', '', 'statistics', 1, 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (35, 'allcountries', 'allcountries', 'Theo quốc gia', '', 'statistics', 1, 1, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (36, 'allbrowsers', 'allbrowsers', 'Theo trình duyệt', '', 'statistics', 1, 1, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (37, 'allos', 'allos', 'Theo hệ điều hành', '', 'statistics', 1, 1, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (38, 'allbots', 'allbots', 'Theo máy chủ tìm kiếm', '', 'statistics', 1, 1, 6, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (39, 'referer', 'referer', 'Đường dẫn đến site theo tháng', '', 'statistics', 1, 0, 7, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (41, 'main', 'main', 'Main', '', 'banners', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (42, 'addads', 'addads', 'Addads', '', 'banners', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (43, 'clientinfo', 'clientinfo', 'Clientinfo', '', 'banners', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (44, 'stats', 'stats', 'Stats', '', 'banners', 1, 0, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (45, 'cledit', 'cledit', 'Cledit', '', 'banners', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (46, 'click', 'click', 'Click', '', 'banners', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (47, 'clinfo', 'clinfo', 'Clinfo', '', 'banners', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (48, 'logininfo', 'logininfo', 'Logininfo', '', 'banners', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (49, 'viewmap', 'viewmap', 'Viewmap', '', 'banners', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (50, 'main', 'main', 'Main', '', 'seek', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (51, 'main', 'main', 'Main', '', 'feeds', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (52, 'main', 'main', 'Main', '', 'page', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (53, 'sitemap', 'sitemap', 'Sitemap', '', 'page', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (54, 'rss', 'rss', 'Rss', '', 'page', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (55, 'main', 'main', 'Main', '', 'comment', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (56, 'post', 'post', 'Post', '', 'comment', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (57, 'like', 'like', 'Like', '', 'comment', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (58, 'delete', 'delete', 'Delete', '', 'comment', 1, 0, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (59, 'down', 'down', 'Down', '', 'comment', 1, 0, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (107, 'detail', 'detail', 'Detail', '', 'photos', 1, 0, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (106, 'main', 'main', 'Main', '', 'home', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (105, 'ajax', 'ajax', 'Ajax', '', 'home', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (63, 'main', 'main', 'Main', '', 'two-step-verification', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (64, 'confirm', 'confirm', 'Confirm', '', 'two-step-verification', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (65, 'setup', 'setup', 'Setup', '', 'two-step-verification', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (66, 'complete', 'complete', 'Complete', '', 'wallet', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (67, 'exchange', 'exchange', 'Exchange', '', 'wallet', 1, 1, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (68, 'historyexchange', 'historyexchange', 'Historyexchange', '', 'wallet', 1, 1, 6, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (69, 'ipn', 'ipn', 'Ipn', '', 'wallet', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (70, 'loadinfomoney', 'loadinfomoney', 'Loadinfomoney', '', 'wallet', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (71, 'main', 'main', 'Main', '', 'wallet', 1, 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (72, 'money', 'money', 'Money', '', 'wallet', 1, 1, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (73, 'pay', 'pay', 'Pay', '', 'wallet', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (74, 'recharge', 'recharge', 'Recharge', '', 'wallet', 1, 0, 7, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (75, 'ajax', 'ajax', 'Ajax', '', 'shops', 1, 0, 18, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (76, 'blockcat', 'blockcat', 'Blockcat', '', 'shops', 1, 0, 17, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (77, 'cart', 'cart', 'Cart', '', 'shops', 1, 0, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (78, 'checkorder', 'checkorder', 'Checkorder', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (79, 'compare', 'compare', 'Compare', '', 'shops', 1, 0, 11, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (80, 'delhis', 'delhis', 'Delhis', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (81, 'detail', 'detail', 'Detail', '', 'shops', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (82, 'download', 'download', 'Download', '', 'shops', 1, 0, 16, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (83, 'group', 'group', 'Group', '', 'shops', 1, 0, 9, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (84, 'history', 'history', 'History', '', 'shops', 1, 0, 8, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (85, 'loadcart', 'loadcart', 'Loadcart', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (86, 'main', 'main', 'Main', '', 'shops', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (87, 'order', 'order', 'Order', '', 'shops', 1, 0, 6, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (88, 'payment', 'payment', 'Payment', '', 'shops', 1, 0, 7, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (89, 'point', 'point', 'Point', '', 'shops', 1, 0, 14, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (90, 'print', 'print', 'Print', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (91, 'print_pro', 'print_pro', 'Print_pro', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (92, 'remove', 'remove', 'Remove', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (93, 'review', 'review', 'Review', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (94, 'rss', 'rss', 'Rss', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (95, 'search', 'search', 'Search', '', 'shops', 1, 0, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (96, 'search_result', 'search_result', 'Search_result', '', 'shops', 1, 0, 10, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (97, 'sendmail', 'sendmail', 'Sendmail', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (98, 'setcart', 'setcart', 'Setcart', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (99, 'shippingajax', 'shippingajax', 'Shippingajax', '', 'shops', 1, 0, 15, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (100, 'sitemap', 'sitemap', 'Sitemap', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (101, 'tag', 'tag', 'Tag', '', 'shops', 1, 0, 13, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (102, 'viewcat', 'viewcat', 'Viewcat', '', 'shops', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (103, 'wishlist', 'wishlist', 'Wishlist', '', 'shops', 1, 0, 12, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (104, 'wishlist_update', 'wishlist_update', 'Wishlist_update', '', 'shops', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (108, 'detail_album', 'detail_album', 'Detail_album', '', 'photos', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (109, 'detail_viewer', 'detail_viewer', 'Detail_viewer', '', 'photos', 1, 0, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (110, 'main', 'main', 'Main', '', 'photos', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (111, 'pagemap', 'pagemap', 'Pagemap', '', 'photos', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (112, 'process', 'process', 'Process', '', 'photos', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (113, 'rating', 'rating', 'Rating', '', 'photos', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (114, 'rss', 'rss', 'Rss', '', 'photos', 0, 1, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (115, 'search', 'search', 'Search', '', 'photos', 1, 1, 6, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (116, 'sitemap-image', 'sitemap-image', 'Sitemap-image', '', 'photos', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (117, 'sitemap', 'sitemap', 'Sitemap', '', 'photos', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (118, 'upload', 'upload', 'Upload', '', 'photos', 1, 0, 7, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (119, 'viewcat', 'viewcat', 'Viewcat', '', 'photos', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (120, 'main', 'main', 'Main', '', 'tin-tuc', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (121, 'rss', 'rss', 'Rss', '', 'tin-tuc', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (122, 'sitemap', 'sitemap', 'Sitemap', '', 'tin-tuc', 0, 0, 0, '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_modthemes`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_modthemes` (
  `func_id` mediumint(8) DEFAULT NULL,
  `layout` varchar(100) DEFAULT NULL,
  `theme` varchar(100) DEFAULT NULL,
  UNIQUE KEY `func_id` (`func_id`,`layout`,`theme`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (0, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (0, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (1, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (1, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (3, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (20, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (20, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (21, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (21, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (22, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (22, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (23, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (23, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (24, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (24, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (25, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (25, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (26, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (26, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (27, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (27, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (28, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (28, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (29, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (30, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (30, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (32, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (32, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (33, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (33, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (34, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (34, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (35, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (35, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (36, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (36, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (37, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (37, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (38, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (38, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (39, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (39, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (41, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (41, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (42, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (42, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (43, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (43, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (44, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (44, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (50, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (50, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (51, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (51, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (52, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (52, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (55, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (55, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (56, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (56, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (57, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (57, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (58, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (58, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (59, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (63, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (63, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (64, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (64, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (65, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (65, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (66, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (66, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (67, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (67, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (68, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (68, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (69, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (70, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (71, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (71, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (72, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (72, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (73, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (73, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (74, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (74, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (75, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (75, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (76, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (76, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (77, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (77, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (78, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (79, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (79, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (80, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (81, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (81, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (82, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (82, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (83, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (83, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (84, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (84, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (85, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (86, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (86, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (87, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (87, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (88, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (88, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (89, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (89, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (90, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (91, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (92, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (93, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (94, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (95, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (95, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (96, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (96, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (97, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (98, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (99, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (99, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (100, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (101, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (101, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (102, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (102, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (103, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (103, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (104, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (105, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (106, 'home', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (106, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (107, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (107, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (108, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (108, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (109, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (109, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (110, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (110, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (111, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (112, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (113, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (114, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (115, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (115, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (116, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (117, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (118, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (118, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (119, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (119, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (120, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (120, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (121, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (121, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (122, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (123, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (123, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (124, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (124, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (125, 'left-main-right', 'default')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_modules`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_modules` (
  `title` varchar(50) NOT NULL,
  `module_file` varchar(50) NOT NULL DEFAULT '',
  `module_data` varchar(50) NOT NULL DEFAULT '',
  `module_upload` varchar(50) NOT NULL DEFAULT '',
  `module_theme` varchar(50) NOT NULL DEFAULT '',
  `custom_title` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL DEFAULT '',
  `admin_title` varchar(255) NOT NULL DEFAULT '',
  `set_time` int(11) unsigned NOT NULL DEFAULT '0',
  `main_file` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `admin_file` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(100) DEFAULT '',
  `mobile` varchar(100) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `keywords` text,
  `groups_view` varchar(255) NOT NULL,
  `weight` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `act` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `admins` varchar(255) DEFAULT '',
  `rss` tinyint(4) NOT NULL DEFAULT '1',
  `sitemap` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('about', 'page', 'about', 'about', 'page', 'Giới thiệu', '', '', 1634609551, 1, 1, '', '', '', '', '6', 4, 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('tuyen-dung', 'page', 'tuyen_dung', 'tuyen-dung', 'page', 'Tuyển dụng', '', '', 1634652833, 1, 1, '', '', '', '', '6', 7, 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('users', 'users', 'users', 'users', 'users', 'Thành viên', '', 'Tài khoản', 1634609551, 1, 1, '', '', '', '', '6', 8, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('contact', 'contact', 'contact', 'contact', 'contact', 'Liên hệ', '', '', 1634609551, 1, 1, '', '', '', '', '6', 9, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('statistics', 'statistics', 'statistics', 'statistics', 'statistics', 'Thống kê', '', '', 1634609551, 1, 1, '', '', '', 'online, statistics', '6', 10, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('home', 'home', 'home', 'home', 'home', 'Trang chủ', '', '', 1634610005, 1, 1, '', '', '', '', '6', 1, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('banners', 'banners', 'banners', 'banners', 'banners', 'Quảng cáo', '', '', 1634609551, 1, 1, '', '', '', '', '6', 11, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('seek', 'seek', 'seek', 'seek', 'seek', 'Tìm kiếm', '', '', 1634609551, 1, 0, '', '', '', '', '6', 12, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('menu', 'menu', 'menu', 'menu', 'menu', 'Menu Site', '', '', 1634609551, 0, 1, '', '', '', '', '6', 13, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('feeds', 'feeds', 'feeds', 'feeds', 'feeds', 'RSS-feeds', '', '', 1634609551, 1, 1, '', '', '', '', '6', 14, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('page', 'page', 'page', 'page', 'page', 'Page', '', '', 1634609551, 1, 1, '', '', '', '', '6', 15, 1, '', 1, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('comment', 'comment', 'comment', 'comment', 'comment', 'Bình luận', '', 'Quản lý bình luận', 1634609551, 0, 1, '', '', '', '', '6', 16, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('photos', 'photos', 'photos', 'photos', 'photos', 'Hình ảnh hoạt động', '', '', 1634610048, 1, 1, '', '', '', '', '6', 5, 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('tin-tuc', 'tin-tuc', 'tin_tuc', 'tin-tuc', 'tin-tuc', 'Tin tức', '', '', 1634627984, 1, 1, '', '', '', '', '6', 3, 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('two-step-verification', 'two-step-verification', 'two_step_verification', 'two_step_verification', 'two-step-verification', 'Xác thực hai bước', '', '', 1634609551, 1, 0, '', '', '', '', '6', 17, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('wallet', 'wallet', 'wallet', 'wallet', 'wallet', 'Ví tiền', '', '', 1634609955, 1, 1, '', '', '', '', '6', 6, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('shops', 'shops', 'shops', 'shops', 'shops', 'Sản phẩm', '', '', 1634609968, 1, 1, '', '', '', '', '6', 2, 1, '', 1, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_page`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_page` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT '',
  `imagealt` varchar(255) DEFAULT '',
  `imageposition` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `description` text,
  `bodytext` mediumtext NOT NULL,
  `keywords` text,
  `socialbutton` tinyint(4) NOT NULL DEFAULT '0',
  `activecomm` varchar(255) DEFAULT '',
  `layout_func` varchar(100) DEFAULT '',
  `weight` smallint(4) NOT NULL DEFAULT '0',
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `edit_time` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `hot_post` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_page_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_page_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('viewtype', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('facebookapi', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('per_page', '20')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('news_first', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('related_articles', '5')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('copy_page', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('alias_lower', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('socialbutton', 'facebook,twitter')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_photos_album`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_photos_album` (
  `album_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `meta_title` varchar(250) NOT NULL,
  `meta_description` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `folder` varchar(250) NOT NULL DEFAULT '',
  `layout` varchar(50) NOT NULL DEFAULT '',
  `num_photo` mediumint(3) unsigned NOT NULL DEFAULT '0',
  `viewed` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `weight` smallint(4) unsigned NOT NULL DEFAULT '0',
  `sort` mediumint(8) NOT NULL DEFAULT '0',
  `allow_rating` int(11) unsigned NOT NULL DEFAULT '1',
  `total_rating` int(11) NOT NULL DEFAULT '0',
  `click_rating` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `hot` int(11) DEFAULT '0',
  `groups_view` varchar(250) DEFAULT '',
  `author` int(11) unsigned NOT NULL DEFAULT '0',
  `author_modify` int(11) unsigned NOT NULL DEFAULT '0',
  `allow_comment` varchar(250) DEFAULT '',
  `hitscm` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `date_added` int(11) unsigned NOT NULL DEFAULT '0',
  `date_modified` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`album_id`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_album` (`album_id`, `name`, `alias`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `folder`, `layout`, `num_photo`, `viewed`, `weight`, `sort`, `allow_rating`, `total_rating`, `click_rating`, `status`, `hot`, `groups_view`, `author`, `author_modify`, `allow_comment`, `hitscm`, `date_added`, `date_modified`) VALUES (1, 'Đông Trùng Hạ Thảo', 'dong-trung-ha-thao', '', '', '', '', '2021/10/dong-trung-ha-thao', '', 11, 0, 0, 0, 1, 0, 0, 1, 0, '6', 1, 1, '6', 0, 1634621198, 1634621198)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_photos_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_photos_rows` (
  `row_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `album_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(250) NOT NULL DEFAULT '',
  `description` varchar(250) NOT NULL DEFAULT '',
  `defaults` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `size` int(11) unsigned NOT NULL DEFAULT '0',
  `width` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `height` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `mime` varchar(100) NOT NULL DEFAULT '',
  `file` varchar(250) NOT NULL,
  `thumb` varchar(250) NOT NULL,
  `favorite` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `viewed` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `date_added` int(11) unsigned NOT NULL DEFAULT '0',
  `date_modified` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`row_id`)
) ENGINE=MyISAM  AUTO_INCREMENT=12  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_rows` (`row_id`, `album_id`, `name`, `description`, `defaults`, `size`, `width`, `height`, `mime`, `file`, `thumb`, `favorite`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (1, 1, '1-119680-300x213.jpg', '', 0, 18429, 300, 213, 'image/jpeg', '2021/10/dong-trung-ha-thao/1-119680-300x213.jpg', '/2021/10/90x72-1-119680-300x213.jpg', 0, 1, 0, 1634621198, 1634621240)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_rows` (`row_id`, `album_id`, `name`, `description`, `defaults`, `size`, `width`, `height`, `mime`, `file`, `thumb`, `favorite`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (2, 1, 'dong-trung-ha-thao.jpg', '', 0, 87226, 768, 512, 'image/jpeg', '2021/10/dong-trung-ha-thao/dong-trung-ha-thao.jpg', '/2021/10/90x72-dong-trung-ha-thao.jpg', 0, 1, 0, 1634621198, 1634621240)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_rows` (`row_id`, `album_id`, `name`, `description`, `defaults`, `size`, `width`, `height`, `mime`, `file`, `thumb`, `favorite`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (3, 1, 'dong-trung-ha-thao-2.jpg', '', 0, 96902, 768, 663, 'image/jpeg', '2021/10/dong-trung-ha-thao/dong-trung-ha-thao-2.jpg', '/2021/10/90x72-dong-trung-ha-thao-2.jpg', 0, 1, 0, 1634621198, 1634621240)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_rows` (`row_id`, `album_id`, `name`, `description`, `defaults`, `size`, `width`, `height`, `mime`, `file`, `thumb`, `favorite`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (4, 1, 'dong-trung-ha-thao-7.jpg', '', 0, 95493, 768, 626, 'image/jpeg', '2021/10/dong-trung-ha-thao/dong-trung-ha-thao-7.jpg', '/2021/10/90x72-dong-trung-ha-thao-7.jpg', 0, 1, 0, 1634621198, 1634621240)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_rows` (`row_id`, `album_id`, `name`, `description`, `defaults`, `size`, `width`, `height`, `mime`, `file`, `thumb`, `favorite`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (5, 1, 'dong-trung-ha-thao-viet-nam-cau-chuyen-ung-dung-nghien-cuu-khoa-hoc-vao-thuc-te11438057298.jpg', '', 0, 72171, 600, 338, 'image/jpeg', '2021/10/dong-trung-ha-thao/dong-trung-ha-thao-viet-nam-cau-chuyen-ung-dung-nghien-cuu-khoa-hoc-vao-thuc-te11438057298.jpg', '/2021/10/90x72-dong-trung-ha-thao-viet-nam-cau-chuyen-ung-dung-nghien-cuu-khoa-hoc-vao-thuc-te11438057298.jpg', 0, 1, 0, 1634621198, 1634621240)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_rows` (`row_id`, `album_id`, `name`, `description`, `defaults`, `size`, `width`, `height`, `mime`, `file`, `thumb`, `favorite`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (6, 1, 'dtht12.jpg', '', 0, 309430, 1500, 1050, 'image/jpeg', '2021/10/dong-trung-ha-thao/dtht12.jpg', '/2021/10/90x72-dtht12.jpg', 0, 1, 0, 1634621198, 1634621240)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_rows` (`row_id`, `album_id`, `name`, `description`, `defaults`, `size`, `width`, `height`, `mime`, `file`, `thumb`, `favorite`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (7, 1, 'dtht21.jpg', '', 0, 330758, 1500, 973, 'image/jpeg', '2021/10/dong-trung-ha-thao/dtht21.jpg', '/2021/10/90x72-dtht21.jpg', 0, 1, 0, 1634621198, 1634621240)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_rows` (`row_id`, `album_id`, `name`, `description`, `defaults`, `size`, `width`, `height`, `mime`, `file`, `thumb`, `favorite`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (8, 1, 'Ruou-Dong-Trung-Ha-Thao-5g.jpg', '', 0, 299368, 1500, 1320, 'image/jpeg', '2021/10/dong-trung-ha-thao/ruou-dong-trung-ha-thao-5g.jpg', '/2021/10/90x72-ruou-dong-trung-ha-thao-5g.jpg', 0, 1, 0, 1634621240, 1634621240)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_rows` (`row_id`, `album_id`, `name`, `description`, `defaults`, `size`, `width`, `height`, `mime`, `file`, `thumb`, `favorite`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (9, 1, 'Ruou-Dong-Trung-Ha-Thao-10g.jpg', '', 0, 313455, 1500, 1320, 'image/jpeg', '2021/10/dong-trung-ha-thao/ruou-dong-trung-ha-thao-10g.jpg', '/2021/10/90x72-ruou-dong-trung-ha-thao-10g.jpg', 0, 1, 0, 1634621240, 1634621240)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_rows` (`row_id`, `album_id`, `name`, `description`, `defaults`, `size`, `width`, `height`, `mime`, `file`, `thumb`, `favorite`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (10, 1, 'Ruou-Dong-Trung-Ha-Thao-20g.jpg', '', 1, 228076, 1500, 1096, 'image/jpeg', '2021/10/dong-trung-ha-thao/ruou-dong-trung-ha-thao-20g.jpg', '/2021/10/90x72-ruou-dong-trung-ha-thao-20g.jpg', 0, 1, 0, 1634621240, 1634621240)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_photos_rows` (`row_id`, `album_id`, `name`, `description`, `defaults`, `size`, `width`, `height`, `mime`, `file`, `thumb`, `favorite`, `status`, `viewed`, `date_added`, `date_modified`) VALUES (11, 1, 'ruoudongtrunghathao1.jpg', '', 0, 97354, 1021, 766, 'image/jpeg', '2021/10/dong-trung-ha-thao/ruoudongtrunghathao1.jpg', '/2021/10/90x72-ruoudongtrunghathao1.jpg', 0, 1, 0, 1634621240, 1634621240)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_referer_stats`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_referer_stats` (
  `host` varchar(250) NOT NULL,
  `total` int(11) NOT NULL DEFAULT '0',
  `month01` int(11) NOT NULL DEFAULT '0',
  `month02` int(11) NOT NULL DEFAULT '0',
  `month03` int(11) NOT NULL DEFAULT '0',
  `month04` int(11) NOT NULL DEFAULT '0',
  `month05` int(11) NOT NULL DEFAULT '0',
  `month06` int(11) NOT NULL DEFAULT '0',
  `month07` int(11) NOT NULL DEFAULT '0',
  `month08` int(11) NOT NULL DEFAULT '0',
  `month09` int(11) NOT NULL DEFAULT '0',
  `month10` int(11) NOT NULL DEFAULT '0',
  `month11` int(11) NOT NULL DEFAULT '0',
  `month12` int(11) NOT NULL DEFAULT '0',
  `last_update` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `host` (`host`),
  KEY `total` (`total`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_searchkeys`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_searchkeys` (
  `id` varchar(32) NOT NULL DEFAULT '',
  `skey` varchar(250) NOT NULL,
  `total` int(11) NOT NULL DEFAULT '0',
  `search_engine` varchar(50) NOT NULL,
  KEY `id` (`id`),
  KEY `skey` (`skey`),
  KEY `search_engine` (`search_engine`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_tin_tuc`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_tin_tuc` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT '',
  `imagealt` varchar(255) DEFAULT '',
  `imageposition` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `description` text,
  `bodytext` mediumtext NOT NULL,
  `keywords` text,
  `socialbutton` tinyint(4) NOT NULL DEFAULT '0',
  `activecomm` varchar(255) DEFAULT '',
  `layout_func` varchar(100) DEFAULT '',
  `weight` smallint(4) NOT NULL DEFAULT '0',
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `edit_time` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `hot_post` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=5  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (1, '8 tác dụng của đông trùng hạ thảo: Không khác gì &quot;tiên dược&quot;', '8-tac-dung-cua-dong-trung-ha-thao-khong-khac-gi-tien-duoc', 'dong-trung-ha-thao.jpg', '', 0, 'Đông trùng hạ thảo là vị thuốc đông y nổi tiếng về cả tác dụng và giá trị của nó trên thị trường. Tác dụng của đông trùng hạ thảo đã được chứng minh ở cả lý thuyết và thực tiễn. Đặc biệt, ở những quốc gia có nền y học cổ truyền phát triển mạnh như Việt Nam, Trung Quốc, Hàn Quốc…, đông trùng hạ thảo được sử dụng rộng rãi để chữa bệnh và hỗ trợ điều trị cho nhiều căn bệnh khác nhau cũng như dùng để bồi bổ, nâng cao sức khoẻ cho con người.', '<p><strong><b>Đông trùng hạ thảo là vị thuốc đông y nổi tiếng về cả tác dụng và giá trị của nó trên thị trường. </b>Tác dụng của đông trùng hạ thảo đã được chứng minh ở cả lý thuyết và thực tiễn. Đặc biệt, ở những quốc gia có nền y học cổ truyền phát triển mạnh như Việt Nam, Trung Quốc, Hàn Quốc…, đông trùng hạ thảo được sử dụng rộng rãi để chữa bệnh và hỗ trợ điều trị cho nhiều căn bệnh khác nhau </strong><b>cũng như dùng để bồi bổ, nâng cao sức khoẻ cho con người.</b></p>

<h2><strong>Đông trùng hạ thảo là gì?</strong></h2>

<p>Đông trùng hạ thảo là loại dược liệu được công nhận trong nhiều tài liệu y học trên thế giới. Đây là một dạng cộng sinh giữa một loài nấm túi có tên Đông trùng hạ thảo – tên khoa học là Cordyceps sinensis (Berk.) Sacc. với sâu non (ấu trùng) của một loài côn trùng thuộc chi Hepialus. Thường gặp nhất là sâu non của loài Hepialus armoricanus. Ngoài ra còn 40 loài khác thuộc chi Hepialus cũng có thể bị Cordyceps sinensis ký sinh.</p>

<p>Đã có rất nhiều tài liệu y học giải thích nấm đông trùng hạ thảo là gì? Thông thường, ấu trùng sâu non sẽ lớn lên và trở thành bướm. Tuy nhiên, một số ấu trùng bị nhiễm nấm Cordyceps sinensis sẽ không thể lớn lên được nữa. Ấu trùng bị nhiễm nấm do ăn phải bào tử nấm hoặc bị nấm ký sinh ở các lỗ thở. Khi đó, nấm ký sinh sẽ hút chất dinh dưỡng từ bên trong cơ thể ấu trùng và lớn lên theo dạng sợi. Theo thời gian, sợi nấm phát triển mạnh sẽ xâm chiếm các mô vật chủ để “toàn quyền” sử dụng dưỡng chất trong xác trùng.</p>

<p>Vào mùa đông nấm ký sinh trên sâu non và làm chết sâu non vì ăn hết chất dinh dưỡng của chúng. Đến một thời điểm nào đó (thường là vào mùa hè), nấm thoát ra khỏi xác sâu và vươn lên, phát triển thành đông trùng hạ thảo.</p>

<p>Ở thiên nhiên, loại dược liệu quý này thường được tìm thấy trên vùng núi cao hơn mặt nước biển 3500- 5000m như ở Tây Tạng, Bhutan và Trung Quốc. Hiện nay, nó đã được nuôi trồng trên quy mô công nghiệp ở nhiều quốc gia khác nhau trên thế giới. Tuy nhiên, hiệu quả dược tính cũng như giá thành sản phẩm có sự chênh lệch rất lớn giữa đông trùng hạ thảo tự nhiên và loại nuôi trồng nhân tạo.</p>

<h2><strong>8 tác dụng của đông trùng hạ thảo</strong></h2>

<p><img alt=\"8 tac dung cua dong trung ha thao Khong khac gi tien duoc\" height=\"667\" src=\"/uploads/tin-tuc/8-tac-dung-cua-dong-trung-ha-thao-Khong-khac-gi-tien-duoc.jpg\" width=\"1000\" /></p>

<p>Tác dụng của đông trùng hạ thảo thường có khả năng phát huy ở cả những người hoàn toàn khỏe mạnh hoặc người đang mắc một bệnh lý nào đó. Hiểu một cách nôm na, người bình thường dùng loại dược liệu này sẽ ngày càng khỏe hơn. Người ốm dùng đến sẽ nhanh hồi phục thể lực.</p>

<p>Vậy cụ thể đông trùng hạ thảo có tác dụng gì? Hãy tìm hiểu 8 công dụng không khác gì “tiên dược” đã được giới khoa học chứng minh:</p>

<h3>1. Đông trùng hạ thảo có tác dụng nâng cao sức khỏe thể chất</h3>

<p>Các nhà nghiên cứu đã tiến hành thử nghiệm tác động của nấm đông trùng hạ thảo trong các hoạt động thể chất. Kết quả thử nghiệm cho thấy loại thảo dược này có khả năng cải thiện sự chuyển hóa năng lượng trong các tế bào sống. Hơn nữa, nó còn cải thiện khả năng chịu đựng khi bạn tập thể dục ở cường độ cao.</p>

<h3>2. Công dụng của đông trùng hạ thảo: Giảm các triệu chứng mệt mỏi</h3>

<p>Các nhà khoa học tiến hành nghiên cứu để theo dõi công dụng của đông trùng hạ thảo đối với chứng mệt mỏi thể chất ở chuột qua hoạt động bơi lội.</p>

<p>Kết quả nghiên cứu cho thấy:</p>

<ul>
	<li>Kéo dài thời gian bơi của chuột</li>
	<li>Giảm nồng độ axit lactic huyết thanh, nitơ urê, creatine kinase, aspartate aminotransferase, alanine aminotransferase và malondialdehyd</li>
	<li>Tăng hàm lượng glycogen ở gan và cơ</li>
	<li>Tăng nồng độ superoxide effutase huyết thanh, glutathione per-oxyase và catalase.</li>
</ul>

<p>Một nghiên cứu khác được thực hiện ở người để tìm hiểu về công dụng của đông trùng hạ thảo. Kết quả cho thấy, sau khi dùng dược liệu này trong 6 tuần liên tục, chỉ số VO2max ở tình nguyện viên tăng đáng kể. VO2max là tốc độ tiêu thụ oxy tối đa trong quá trình tập luyện được tính bằng ml/kg/phút. Đây cũng là đơn vị được sử dụng để đo công suất hiếu khí cá nhân của một người.</p>

<h3>3. Tác dụng của đông trùng hạ thảo với phụ nữ: Chống lão hóa</h3>

<p>Sau tuổi 30, cơ thể phụ nữ bắt đầu có các dấu hiệu của lão hoá thể hiện sớm trên da, tóc,…Quá trình lão hoá càng trở nên nhanh chóng ở phụ nữ sinh đẻ nhiều hoặc làm những công việc vất vả. Theo y học cổ truyền, tác dụng của đông trùng hạ thảo với phụ nữ là khả năng chống lão hóa mạnh mẽ.</p>

<p>Lý luận này cũng được các nhà khoa học hiện đại chứng minh và công nhận. Một nghiên cứu được thực hiện trên chuột cho thấy những con chuột được nuôi dưỡng bằng loại dược liệu này sống lâu hơn nhiều tháng so với những con chuột dùng giả dược.</p>

<p>Ngoài ra, một số nghiên cứu khác (cũng tiến hành trên chuột) chứng minh đông trùng hạ thảo có thể cải thiện chức năng não và hoạt động của các enzyme chống oxy hóa. Hơn nữa, nó cũng cải thiện chức năng tình dục của những con chuột bị thiến.</p>

<p>Khi tiến hành thử nghiệm ở ruồi giấm, sản phẩm có thành phần đông trùng hạ thảo cũng kéo dài tuổi thọ của loài vật này.</p>

<p>Ngày nay, con người tận dụng tác dụng của nấm đông trùng hạ thảo để bổ sung hoặc bào chế ra các sản phẩm bồi bổ khí huyết, kéo dài tuổi thanh xuân cho phụ nữ.</p>

<h3>4. Đông trùng hạ thảo có tác dụng tăng cường hệ miễn dịch</h3>

<p>Chất chống oxy hóa là các phân tử bảo vệ tế bào khỏi các tác động có hại bằng cách trung hòa gốc tự do thúc đẩy lão hóa. Thành phần của đông trùng hạ thảo chứa nhiều phân tử có khả năng này. Hơn nữa, các nhà khoa học cũng đã hệ thống được các đặc tính dược lý chống oxy hóa của loại dược liệu này.</p>

<p>Theo đó, chức năng miễn dịch của cơ thể cũng tăng đáng kể khi đông trùng hạ thảo loại bỏ các gốc tự do trong cơ thể.</p>

<h3>5. Tác dụng của đông trùng hạ thảo cải thiện chức năng não và tăng cường sức khỏe tình dục</h3>

<p><img alt=\"8 tac dung cua dong trung ha thao Khong khac gi tien duoc\" height=\"488\" src=\"/uploads/tin-tuc/8-tac-dung-cua-dong-trung-ha-thao-Khong-khac-gi-tien-duoc.png\" width=\"750\" /></p>

<p>Theo truyền thống, người cao tuổi hoặc người mới ốm dậy thường tận dụng công dụng của đông trùng hạ thảo để giảm mệt mỏi. Trong một số trường hợp, những người này còn dùng với mục đích tăng cường sức khỏe và ham muốn tình dục.</p>

<p>Nghiên cứu ban đầu cho thấy việc dùng các sản phẩm có đông trùng hạ thảo trong 40 ngày liên tục có thể cải thiện ham muốn tình dục ở những người có ham muốn thấp.</p>

<p>Ở vấn đề chức năng não, khi tiến hành kiểm tra tác động của dược liệu trên chuột, các nhà nghiên cứu nhận thấy dược liệu này có tác động trực tiếp đến khả năng tiếp thu và ghi nhớ của chuột. Cụ thể, nó giúp giảm số lượng hành vi bị lỗi (so với tiêu chuẩn của nghiên cứu) ở những con chuột sống lâu năm.</p>

<p>Với những con chuột bị thiến, đông trùng hạ thảo cũng đẩy nhanh tốc độ cương dương vật và kéo dài thời gian xuất tinh.</p>

<p>Với những bằng chứng này, công dụng của đông trùng hạ thảo giống như thuốc cường dương, tăng cường sinh lực tự nhiên của nam giới. Bên cạnh đó đông trùng hạ thảo cũng có tác dụng điều hoà nội tiết tố, cải thiện triệu chứng lạnh tử cung, vô sinh…ở nữ giới.</p>

<h3>6. Chống ung thư và chống lại các yếu tố làm tăng nguy cơ mắc bệnh ung thư</h3>

<p>Gần đây, nhiều nghiên cứu khoa học đã tiến hành để kiểm tra khả năng chống ung thư và tác động đến các yếu tố làm tăng nguy cơ mắc bệnh ung thư của đông trùng hạ thảo.</p>

<p>Theo đó, chiết xuất từ đông trùng hạ thảo có khả năng chống ung thư bằng nhiều cơ chế khác nhau như điều chỉnh hệ miễn dịch hoặc tạo ra chất khiến tế bào ung thư tự chết đi.</p>

<p>Các thử nghiệm trên chuột đã chỉ ra rằng chiết xuất từ loại dược liệu này có tác dụng chống ung thư hạch bạch huyết, ung thư phổi. Trong khi đó, nghiên cứu ở người chứng minh rằng tùy vào liều dùng, nó có thể ức chế tế bào ung thư vú, ung thư gan hoặc bệnh bạch cầu.</p>

<h3>7. Uống đông trùng hạ thảo có tác dụng gì với bệnh tiểu đường?</h3>

<p><img alt=\"dong trung ha thao\" height=\"668\" src=\"/uploads/tin-tuc/dong-trung-ha-thao.jpg\" width=\"1000\" /></p>

<p>Bệnh tiểu đường là tình trạng cơ thể không sản xuất đủ hoặc tế bào đề kháng với insulin. Trong khi đó, insulin là hormone giúp đưa glucose vào trong các tế bào để chuyển hóa thành năng lượng.</p>

<p>Khi cơ thể bạn không có đủ lượng insulin, glucose sẽ không được tế bào sử dụng mà tồn đọng lại trong máu. Theo thời gian, lượng đường huyết dư thừa này sẽ dẫn đến những vấn đề sức khỏe nghiêm trọng. Vì thế, người mắc bệnh tiểu đường cần theo dõi sát lượng đường trong máu để kịp thời điều chỉnh thói quen ăn, uống cũng như tuân thủ việc dùng thuốc..</p>

<p>Vậy uống đông trùng hạ thảo có tác dụng gì cho người bệnh tiểu đường? Khi tiến hành nghiên cứu về tác dụng của đông trùng hạ thảo đối với bệnh lý này, các nhà khoa học nhận thấy thành phần của loại dược liệu này có khả năng kiểm soát đường huyết rất tốt. Cụ thể, nó giúp người bệnh giảm cân, ổn định chỉ số mỡ máu và không tăng chỉ số đường huyết. Những yếu tố này cho thấy đông trùng hạ thảo là loại thực phẩm hữu ích cho người bệnh tiểu đường. Các nghiên cứu đã chỉ ra có 90% bệnh nhân mắc đái tháo đường có dấu hiệu chuyển biến khi được sử dụng đông trùng hạ thảo theo liệu trình.</p>

<h3>8. Tác dụng của đông trùng hạ thảo là gì? Hỗ trợ điều trị bệnh thận mãn tính</h3>

<p>Bên cạnh khả năng kiểm soát các triệu chứng của bệnh tiểu đường, đông trùng hạ thảo còn có thể giúp ngăn ngừa bệnh thận mãn tính – một biến chứng phổ biến của tiểu đường.</p>

<p>Một đánh giá của 22 nghiên cứu thực hiện trên 1.746 người mắc bệnh thận mãn tính cho thấy, người bệnh được bổ sung đông trùng hạ thảo trong chế độ ăn uống có dấu hiệu cải thiện chức năng thận.</p>

<p>Các nhà nghiên cứu còn phát hiện chế phẩm từ loại dược liệu quý này có khả năng giảm creatinin huyết thanh, giảm protein niệu và giảm các biến chứng liên quan đến bệnh thận như tăng huyết sắc tố và albumin huyết thanh.</p>

<p>Tác dụng của đông trùng hạ thảo còn thể hiện trên một số vấn đề khác ở thận, cụ thể như:</p>

<ul>
	<li><strong>Tổn thương thận do một số loại thuốc khác sinh (nhiễm độc thận aminoglycoside).</strong>&nbsp;Người bệnh thường xuyên dùng&nbsp;thuốc kháng sinh&nbsp;sẽ làm tổn hại đến thận. Lúc này, chiết xuất từ đông trùng hạ thảo có thể làm giảm tổn thương thận do kháng sinh gây ra.</li>
	<li><strong>Tăng hiệu quả điều trị sau khi cấy ghép thận.</strong>&nbsp;Người bệnh vừa trải qua ca cấy ghép thận được dùng chiết xuất hoặc sản phẩm bào chế từ đông trùng hạ thảo liều thấp có thể nguy cơ&nbsp;nhiễm trùng. Hơn nữa, loại dược liệu này còn làm giảm nguy cơ bị suy yếu chức năng thận ở những người vừa cấy ghép thận.&nbsp;Ngoài ra, đông trùng hạ thảo còn là một vị thuốc ức chế miễn dịch có tác dụng chống sự loại bỏ tổ chức cấy ghép khá tốt.</li>
</ul>

<p data-gtm-vis-first-on-screen-1361037_82=\"25497\" data-gtm-vis-has-fired-1361037_82=\"1\" data-gtm-vis-total-visible-time-1361037_82=\"100\">Nhìn chung, đông trùng hạ thảo là dược liệu quý, mang lại nhiều lợi ích cho sức khỏe người dùng. Tuy nhiên, loại dược liệu này vẫn có những tác dụng không mong muốn nếu dùng không đúng chỉ dẫn như các tác dụng phụ nhẹ, bao gồm đau bụng, buồn nôn, tiêu chảy hoặc khô miệng. Các triệu chứng thường hết sau khi ngừng điều trị. Nếu bạn bị dị ứng với nấm mốc hoặc men, bạn sẽ có thể bị dị ứng với đông trùng hạ thảo và nên tránh xa chúng.</p>

<p data-gtm-vis-first-on-screen-1361037_82=\"25602\" data-gtm-vis-has-fired-1361037_82=\"1\" data-gtm-vis-total-visible-time-1361037_82=\"100\">Để phát huy đúng tác dụng của đông trùng hạ thảo, bạn phải sử dụng vị thuốc này theo sự hướng dẫn của bác sĩ hoặc thầy thuốc Đông y. Đây là nguyên tắc quan trọng để đảm bảo mức độ an toàn hoặc không bị tương tác nếu đang dùng các loại thuốc điều trị bệnh khác.</p>', 'tác dụng,khác gì', 1, '4', '', 1, 1, 1634628123, 1634628179, 1, 1, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (2, 'Giải mã sức mạnh cặp đôi hàu biển và đông trùng hạ thảo đối với sinh lý nam giới', 'giai-ma-suc-manh-cap-doi-hau-bien-va-dong-trung-ha-thao-doi-voi-sinh-ly-nam-gioi', 'giai-ma-hau-bien-va-dong-trung-ha-thao-doi-voi-sinh-ly-nam-gioi-e1513158189647.jpg', '', 0, 'Cuộc sống tình dục lành mạnh là một yếu tố quyết định chất lượng đời sống của mỗi gia đình. Để chuyện yêu thêm mặn nồng, hãy bổ sung cặp đôi hàu biển và đông trùng hạ thảo vào thực đơn hàng ngày của mình.', '<p>Chuyện chăn gối không thỏa mãn khiến nhiều cặp đôi rơi vào tình trạng lo lắng và tình cảm vợ chồng dễ bị ảnh hưởng. Vợ chồng bạn đang gặp rắc rối trong chuyện ân ái chẳng hạn như anh xã liên tục gặp tình trạng “chưa đến chợ đã hết tiền” hay vấn đề cương cứng của “cậu nhỏ”? Hello Bacsi bật mí với bạn 2 loại siêu thực phẩm có thể hỗ trợ quý ông lấy lại phong độ vốn có nhé.</p>

<h2>1. <strong>Hàu biển thực phẩm vàng giúp tăng cường sinh lý phái mạnh</strong></h2>

<h2><img alt=\"giai ma hau bien va dong trung ha thao doi voi sinh ly nam gioi 1 e1513158207780&#91;1&#93;\" height=\"500\" src=\"/uploads/tin-tuc/giai-ma-hau-bien-va-dong-trung-ha-thao-doi-voi-sinh-ly-nam-gioi-1-e15131582077801.jpg\" width=\"750\" /></h2>

<p>Hàu biển là một loại thực phẩm bổ dưỡng, có họ hàng với nghêu, sò. Theo ước tính, lượng kẽm chứa trong hàu cao gấp nhiều lần so với thịt lợn hoặc thậm chí là cá biển. Mỗi 100g hàu biển tươi chứa tới 25mg kẽm, trong khi đó lượng kẽm trong 100g thịt là 5,2mg và trong 100g cá tươi là 0,8mg.</p>

<p>Ngoài ra, hàu biển còn giàu các chất dinh dưỡng khác bao gồm protein, glucid, chất béo, magiê, canxi…</p>

<h3><strong>Tác dụng của hàu biển đối với sức khỏe nam giới</strong></h3>

<p>Có nhiều nghiên cứu chỉ ra tác dụng của hàu biển đối với sức khỏe như đẩy mạnh hệ miễn dịch, tăng cường sức khỏe tim mạch, tốt cho mắt, da, cải thiện chức năng não. Không những thế, một số nghiên cứu cho thấy hàu biển có thể cải thiện sức khỏe của tuyến tiền liệt, thúc đẩy tinh hoàn khỏe hơn.</p>

<p>Hàu còn được đánh giá cao trong vấn đề tăng khả năng tình dục, đặc biệt là cho những quý ông muốn cải thiện phong độ của mình. Kẽm trong hàu giúp cơ thể sản xuất testosterone nội sinh, một hormone quan trọng trong việc điều chỉnh ham muốn tình dục của nam giới, nâng cao số lượng cũng như chất lượng tinh trùng. Ngoài ra, kẽm có thể điều trị một số vấn đề tình dục ở nam giới. Các nghiên cứu cho thấy hầu hết đàn ông bị rối loạn cương dương đều thiếu kẽm. Như vậy, tăng cường tiêu thụ kẽm từ hàu giúp cải thiện chuyện yêu của vợ chồng bạn.</p>

<h3><strong>Cách sử dụng hàu biển</strong></h3>

<p>Các chuyên gia cho rằng dùng đều đặn mỗi ngày khoảng 4 con hàu, sức khỏe sinh lý của các quý ông sẽ được cải thiện. Tuy nhiên, bạn không nên ăn quá nhiều hàu cùng một lúc để tránh khó tiêu do hàu chứa nhiều đạm. Nếu hấp thụ không tốt, hệ tiêu hóa sẽ phải làm việc cật lực để xử lý lượng thức ăn giàu dinh dưỡng này.</p>

<p>Với người mắc các bệnh về gan, bệnh mãn tính, rối loạn tiêu hóa nhưng muốn tăng cường sinh lý, không nên ăn hàu sống. Tuy nhiên, đối tượng này vẫn có thể bổ sung dưới dạng chiết xuất hoặc thực phẩm chức năng.</p>

<blockquote>
<p>Hàu biển và đông trùng hạ thảo hỗ trợ tăng cường sinh lý nam, giúp cuộc yêu của vợ chồng bạn thêm thăng hoa.</p>
</blockquote>

<h2>2. <strong>Đông trùng hạ thảo – “Thần dược” giúp tăng cường sinh lý cho vua chúa từ thời xa xưa</strong></h2>

<p><img alt=\"giai ma hau bien va dong trung ha thao doi voi sinh ly nam gioi 2 e1513158221860\" height=\"563\" src=\"/uploads/tin-tuc/giai-ma-hau-bien-va-dong-trung-ha-thao-doi-voi-sinh-ly-nam-gioi-2-e1513158221860.jpg\" width=\"750\" /></p>

<p>Đông trùng hạ thảo là loại thuốc quý có nguồn gốc từ Tây Tạng và được ứng dụng từ ngàn xưa trong y học cổ truyền Trung Hoa và Việt Nam. Đông trùng hạ thảo là một loại thảo dược có bản chất là dạng ký sinh của nấm trên cơ thể ấu trùng bướm. Vào cuối thu, sau khi phát triển đến mức cực đại, ấu trùng của loài bướm thuộc chi Thitarodes Viette bắt đầu đi tìm những nơi đất mềm, xốp để chui xuống tìm chỗ ngủ đông.</p>

<p>Tuy nhiên, bào tử của một loài nấm túi thuộc chi Ophiocordyceps (hoặc chi Cordycep) đã thâm nhập vào ấu trùng và ký sinh trong nó. Lúc này, chúng vẫn mang hình dáng ấu trùng nên gọi là “đông trùng”. Đến mùa xuân, khi thời tiết ấm áp, bào tử nấm tiến hành phân bào và phát triển mạnh mẽ nhờ vào việc hấp thụ dưỡng chất từ ấu trùng đến mức làm chết ấu trùng. Đến mùa hạ, chúng phát triển thành cây nấm nên được gọi là “hạ thảo”.</p>

<h3><strong>Tác dụng của đông trùng hạ thảo</strong></h3>

<p>Đông trùng hạ thảo có tới 17 loại axít amin, các loại vitamin A, B1, B2, B12, C và các nguyên tố vi lượng khác như kẽm, đồng, sắt, nhôm, mangan, magiê, kali, natri… Trong đông trùng hạ thảo chứa nhiều hoạt chất sinh học, các hoạt chất này có giá trị dược liệu cao và đang được nghiên cứu để sử dụng trong y học. Đông trùng hạ thảo đem lại những tác dụng như:</p>

<ul>
	<li>Tăng cường chức năng tiêu hóa và hấp thu dinh dưỡng</li>
	<li>Phục hồi sức khỏe, tăng cường sự dẻo dai cơ bắp</li>
	<li>An thần</li>
	<li>Bảo vệ tim mạch, giữ nhịp tim luôn ổn định, phục hồi tế bào thận</li>
	<li>Hỗ trợ&nbsp;kiểm soát bệnh tiểu đường&nbsp;bằng cách điều tiết lượng đường trong máu</li>
	<li>Tăng cường hệ miễn dịch của cơ thể, giúp bạn chống lại các loại viêm nhiễm và gây hại từ các loại virus như&nbsp;viêm gan B, lao phổi…</li>
	<li>Hỗ trợ điều trị các&nbsp;bệnh về phổi&nbsp;và đường hô hấp.</li>
</ul>

<p>Thêm vào đó, đông trùng hạ thảo còn được xem là vị thuốc quý trong việc tăng cường chức năng sinh lý của nam giới và cải thiện đời sống tình dục bằng cách tăng cường chức năng lọc của thận, khôi phục các chức năng làm cho hệ thần kinh ở trạng thái hưng phấn, tăng cường hoạt động các cơ quan, trong đó có cơ quan sinh dục.</p>

<p>Việc phục hồi sinh lực của nam giới còn gắn liền với quá trình sản sinh và tái tạo ATP (Adenosine triphosphate). Đây là phân tử mang năng lượng có chức năng vận chuyển năng lượng đến những nơi cần thiết, cung cấp sức mạnh cho các cơ. Sử dụng đông trùng hạ thảo khoa học sẽ làm sản sinh ra hàm lượng lớn ATP giúp cơ bắp hoạt động dẻo dai, nâng cao hoạt động tình dục của các quý ông. Ngoài ra, việc tăng cường ham muốn tình dục và phục hồi chức năng sinh sản có thể do đông trùng hạ thảo giúp tăng lượng testosterone.</p>

<h3><strong>Cách sử dụng</strong></h3>

<p data-gtm-vis-first-on-screen-1361037_82=\"14202\" data-gtm-vis-has-fired-1361037_82=\"1\" data-gtm-vis-total-visible-time-1361037_82=\"100\">Bạn có thể dùng đông trùng hạ thảo để ngâm rượu, hầm với sườn heo, hãm trà, nấu cháo… Tuy nhiên, nếu không có thời gian nấu nướng, ngâm rượu, bạn có thể dùng chiết xuất đông trùng hạ thảo có trong các loại thực phẩm bảo vệ sức khỏe.</p>

<p data-gtm-vis-first-on-screen-1361037_82=\"14588\" data-gtm-vis-has-fired-1361037_82=\"1\" data-gtm-vis-recent-on-screen-1361037_82=\"14588\" data-gtm-vis-total-visible-time-1361037_82=\"100\">Qua bài viết trên, bạn có thể hiểu hàu biển và đông trùng hạ thảo là gì và tại sao chúng được xem như là “thần dược” giúp tăng cường sức khỏe và sinh lý nam giới. Với sự kết hợp giữa 2 thành phần trên, hiệu quả mang lại sẽ tăng cường gấp đôi trong việc điều trị các vấn đề sinh lý và bồi bổ sinh lực nam giới. Nếu bạn còn đang băn khoăn hay lo lắng về chuyện chăn gối của mình, thì đây chính là giải pháp toàn diện dành cho bạn.</p>', 'sức mạnh,cặp đôi,sinh lý', 1, '4', '', 2, 1, 1634628353, 1634628353, 1, 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (3, '10 công dụng nổi bật khiến đông trùng hạ thảo được xem như một vị thuốc quý', '10-cong-dung-noi-bat-khien-dong-trung-ha-thao-duoc-xem-nhu-mot-vi-thuoc-quy', 'dong-trung-ha-thao-2.jpg', '', 0, 'Thị trường đông trùng hạ thảo đang rất “nóng” vì loại dược liệu quý hiếm này rất tốt cho sức khỏe. Đặc biệt là tăng sức đề kháng và hỗ trợ phòng tránh nhiều bệnh lý…', '<p>Từ lâu, y học cổ truyền đã xem đông trùng hạ thảo như vị thuốc trị bệnh. Ngay nay, y học Việt Nam cũng thịnh hành các sản phẩm chế biến từ đông trùng hạ thảo. Tuy nhiên, bạn cần hiểu rõ về loại dược liệu này và tìm mua sản phẩm chất lượng tại cơ sở uy tín. Nhằm đảm bảo cơ thể được nạp lượng dược chất cao, bồi bổ sức khỏe.</p>

<h2>Đông trùng hạ thảo là gì?</h2>

<p>Đông trùng hạ thảo là một loài thảo dược quý, được xem như &quot;con lai&quot; giữa động vật và thực vật. Cụ thể, nó là sự kết hợp giữa sâu non (ấu trùng bướm) của loài Thitarodes và loài nấm ký sinh Cordyceps sinensis.</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><img alt=\"Đông trùng hạ thảo còn tươi có hình dáng giống như những con sâu\" data-src=\"https://image.thanhnien.vn/w2048/Uploaded/2021/szyrbfly.bn/2021_09_08/maihan/1_tzch.jpg\" src=\"/uploads/tin-tuc/1_tzch.jpg\" />
			<p>Đông trùng hạ thảo còn tươi có hình dáng giống như những con sâu</p>
			</td>
		</tr>
	</tbody>
</table>
Vào mùa đông ẩm ướt, nấm bắt đầu ký sinh lên sâu non và hút hết chất dinh dưỡng từ bên trong khiến sâu non chết dần. Lúc này, bề ngoài của chúng sẽ giống như những con côn trùng (động vật). Nhưng đến mùa hè, nấm mọc ra khỏi sâu thành ngọn cỏ (thực vật/thảo mộc), vươn lên khỏi mặt đất và phát tán các bào tử.

<p>Trong tự nhiên, loài thảo dược quý hiếm này được tìm thấy ở những ngọn núi cao 4 - 5.000 m thuộc Tây Tạng (Trung Quốc), Bhutan. Tuy nhiên, đông trùng hạ thảo đang có nguy cơ tuyệt chủng do mang lại kinh tế cao, khiến hoạt động khai thác tràn lan.</p>

<p>Do đó, đã có khá nhiều cơ sở nghiên cứu, nuôi trồng đông trùng hạ thảo nhân tạo, đảm bảo lượng dược chất dồi dào không kém. Tạo nên những chế phẩm từ đông trùng hạ thảo đạt chất lượng cho cơ thể, phục vụ nhu cầu của đông đảo người Việt. Trong đó, đông trùng hạ thảo Hector đang là một trong những thương hiệu được người tiêu dùng tin tưởng sử dụng.</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><img alt=\"Đông trùng hạ thảo là gì? Phân loại, công dụng và cách phân biệt - ảnh 2\" caption=\"Đông trùng hạ thảo là gì? Phân loại, công dụng và cách phân biệt - ảnh 2\" data-src=\"https://image.thanhnien.vn/w2048/Uploaded/2021/szyrbfly.bn/2021_09_08/maihan/2_nmvn.jpg\" src=\"/uploads/tin-tuc/2_nmvn.jpg\" /></td>
		</tr>
	</tbody>
</table>

<h2>Phân loại đông trùng hạ thảo</h2>

<p><strong>Theo xuất xứ</strong></p>

<p>● Tự nhiên: Đông trùng hạ thảo được khai thác tại vùng cao nguyên Tây Tạng.</p>

<p>● Nhân tạo: Đông trùng hạ thảo được nuôi cấy trên cơ thể ấu trùng nhộng tằm. Hoặc cấy trên các vật chủ khác như hỗn hợp đậu xanh, vỏ trứng, gạo lứt và nhộng tằm xay nhỏ.</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><img alt=\"Đông trùng hạ thảo được nuôi cấy và sấy khô để bảo quản lâu hơn và dễ dùng hơn\" data-src=\"https://image.thanhnien.vn/w2048/Uploaded/2021/szyrbfly.bn/2021_09_08/maihan/3_vaxd.jpg\" src=\"/uploads/tin-tuc/3_vaxd.jpg\" />
			<p>Đông trùng hạ thảo được nuôi cấy và sấy khô để bảo quản lâu hơn và dễ dùng hơn</p>
			</td>
		</tr>
	</tbody>
</table>
<strong>Theo trạng thái</strong>

<p>● Dạng tươi (nguyên con): Bảo toàn hình dạng tự nhiên và mới được khai thác trong vòng 1 tháng trở lại, sau đó bảo quản ở nhiệt độ phù hợp. Sản phẩm này giữ được hàm lượng dinh dưỡng và hoạt tính sinh học tối đa.</p>

<p>● Dạng khô: Đông trùng hạ thảo tươi sẽ sấy lạnh, sấy đối lưu hoặc sấy thăng hoa. Nhằm bảo quản được lâu, sử dụng thuận tiện và dễ vận chuyển nhưng vẫn giữ được hàm lượng dược chất cao.</p>

<p><strong>Theo dạng chế phẩm</strong></p>

<p>● Dạng nước: Là sản phẩm đã qua chế biến, được đóng thành từng chai hoặc gói nhỏ. Dễ sử dụng và phù hợp với nhiều đối tượng.</p>

<p>● Dạng bột: Là đông dùng hạ thảo khô được xay mịn thành bột.</p>

<p>● Dạng viên nang: Đông trùng hạ thảo được chế biến và tổng hợp thành từng viên nhộng để uống mỗi ngày.</p>

<h2>10 công dụng nổi bật khiến đông trùng hạ thảo được xem như một vị thuốc quý</h2>

<p><strong>Tăng cường hệ miễn dịch</strong></p>

<p>Đông trùng hạ thảo giúp nhờ vào hàm lượng vitamin A, vitamin C cùng nguyên tố hiếm Selen… hỗ trợ tăng khả năng bảo vệ cơ thể trước các loại vi khuẩn có hại và giảm thiểu nguy cơ mắc các loại bệnh lý.</p>

<p><strong>Bồi bổ cơ thể</strong></p>

<p>Đông trùng hạ thảo sẽ cung cấp cho cơ thể năng lượng, phục hồi sức khỏe cho người bị suy nhược, mệt mỏi, mới ốm dậy, người suy dinh dưỡng… Đồng thời giúp giấc ngủ ngon hơn.</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><img alt=\"dtht21\" data-src=\"https://image.thanhnien.vn/w2048/Uploaded/2021/szyrbfly.bn/2021_09_08/maihan/4_ggji.jpg\" height=\"519\" src=\"/uploads/tin-tuc/dtht21.jpg\" width=\"800\" />
			<p>Đông trùng hạ thảo chiết xuất dạng nước rất thích hợp với người mới ốm dậy, người cần phục hồi nhanh sau phẫu thuật</p>
			</td>
		</tr>
	</tbody>
</table>
<strong>Hạ đường huyết</strong>

<p>Đông trùng hạ thảo hỗ trợ giúp ổn định chỉ số đường huyết trong máu, giảm thiểu biến chứng gây ra bởi bệnh đái tháo đường hay huyết áp cao.</p>

<p><strong>Tốt cho gan</strong></p>

<p>Loại dược liệu còn chứa hoạt chất Cordycepin và Polysaccharides hỗ trợ giúp gan giải độc nhanh hơn, hạn chế nguy cơ mắc bệnh gan nhiễm mỡ và phục hồi chức năng gan, cải thiện tình trạng viêm gan B, xơ gan...</p>

<p><strong>Hỗ trợ tăng cường chức năng của thận</strong></p>

<p>Đông trùng hạ thảo hỗ trợ giúp đào thải độc tố, bổ sung thận khí, giảm tình trạng bí tiểu, tiểu đêm nhiều lần, tiểu rắt, phòng tránh sỏi thận…</p>

<p><strong>Tốt cho hệ hô hấp</strong></p>

<p>Đông trùng hạ thảo chứa lượng axit amin dồi dào, hỗ trợ giúp làm sạch phổi và hồi phục những tế bào nang phổi đã bị tổn thương. Cũng như hỗ trợ điều trị hen suyễn, viêm phế quản, tắc nghẽn phổi…</p>

<p><strong>Hỗ trợ tăng cường chức năng hệ tim mạch</strong></p>

<p>Trong đông trùng hạ thảo có chứa đường D-mannitol có hỗ trợ khả năng giữ nhịp tim ổn định và nâng cao chức năng hoạt động của tim mạch. Cũng như giúp tăng tuần hoàn máu, lưu thông khí huyết, phòng ngừa bệnh viêm cơ tim, tắc nghẽn động mạnh, đột quỵ.</p>

<p><strong>Hỗ trợ tăng cường sinh lý cho nam giới</strong></p>

<p>Đông trùng hạ thảo thúc đẩy cơ thể sản sinh nội tiết tố nam Testosterone, hỗ trợ giúp bổ thận, cải thiện tình trạng rối loạn cương dương, tăng ham muốn, hỗ trợ điều trị vô sinh hiếm muộn ở nam…</p>
<br />
<strong>Hỗ trợ điều hoà nội tiết tố và làm đẹp da cho nữ</strong>

<p>Đông trùng hạ thảo hỗ trợ giúp kích thích sản sinh hormone sinh lý Estrogen, cân bằng nội tiết tố, đều kinh nguyệt và giúp đời sống chăn gối thăng hoa. hơn. Đồng thời giảm thâm nám, làm da sáng mịn, trẻ trung, hay ngăn ngừa rụng tóc ở phụ nữ sau sinh, trong giai đoạn tiền mãn kinh.</p>

<h2>Đông trùng hạ thảo giá bao nhiêu?</h2>

<p>Trên thị trường hiện nay có 2 loại đông trùng hạ thảo là tự nhiên và sản phẩm nuôi cấy. Bên cạnh đó, còn rất nhiều các chế phẩm từ đông trùng hạ thảo như đông trùng hạ thảo ngâm rượu, ngâm mật ong, dạng nước, dạng viên nén hay dạng nước… Gía của loại dược liệu quý hiếm đông trùng hạ thảo sẽ phụ thuộc vào nguồn gốc, chủng loại.</p>

<p>Cụ thể, với giá đông trùng tự nhiên có nguồn gốc từ một số vùng ở Trung Quốc giá thành không hề rẻ khoảng 1.2 - 1.8 tỉ đồng/kg đông trùng khô. Vì đông trùng hạ thảo tự nhiên rất khan hiếm mỗi năm khai thác không vượt quá 80 kg.</p>

<p>Nhưng không phải đông trùng hạ thảo tự nhiên nào cũng có giá cao như vậy. Nó còn tùy thuộc vào điều kiện sinh trưởng, địa hỉnh, thổ nhưỡng… mà chất lượng của đông trùng hạ thảo sẽ khác nhau nên giá cũng không giống nhau.</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><img alt=\"Đông trùng hạ thảo tự nhiên số lượng khai thác ít với giá đắt đỏ\" data-src=\"https://image.thanhnien.vn/w2048/Uploaded/2021/szyrbfly.bn/2021_09_08/maihan/6_urev.jpg\" src=\"/uploads/tin-tuc/6_urev.jpg\" />
			<p>Đông trùng hạ thảo tự nhiên số lượng khai thác ít với giá đắt đỏ</p>
			</td>
		</tr>
	</tbody>
</table>
Chính sự khan hiếm và đắt đỏ của đông trùng hạ thảo tự nhiên mà nhiều quốc gia trên thế giới đã nghiên cứu và nuôi cấy thành công. Sự ra đời của đông trùng hạ thảo nuôi cấy với giá thành rẻ hơn và số lượng nhiều đã phần nào đáp ứng được nhu cầu của người tiêu dùng. Thực tế, đông trùng hạ thảo nuôi cấy có giá thành rẻ hơn nhiều đông trùng hạ thảo tự nhiên mà chất lượng không hề thua kém là bao.

<p><em><strong>Các bạn có thể tham khảo giá một số loại đông trùng hạ thảo nuôi cấy đang có trên thị trường hiện nay như:</strong></em></p>

<p>• Đông trùng hạ thảo được nuôi cấy trên nhộng tằm tươi giá bán khoảng 8 triệu/100 g và 6 – 7 triệu/20 g sấy khô.</p>

<p>• Loại đông trùng hạ thảo nuôi cấy quả thể tươi có giá tham khảo 2 triệu/kg</p>

<p>• Đông trùng hạ thảo nuôi cấy trên nhộng tằm sấy khô giá khoảng 6,4 triệu đồng/20 g</p>

<p>• Loại nuôi cấy trên quả thể khô sấy lạnh giá 3,3 triệu đồng/30 g</p>

<p>• Nuôi cấy cấy trên quả thể sấy đối lưu giá khoảng 1,5 triệu đồng/20 g</p>

<p>• Bột sinh khối giá khoảng 1,5 triệu đồng/150 g</p>

<p>• Loại đông trùng hạ thảo nuôi cấy thái lát giá khoảng 1 triệu đồng/500 g</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><img alt=\"Rượu Đông Trùng Hạ Thảo 10g\" data-src=\"https://image.thanhnien.vn/w2048/Uploaded/2021/szyrbfly.bn/2021_09_08/maihan/7_oppq.jpg\" height=\"704\" src=\"/uploads/tin-tuc/ruou-dong-trung-ha-thao-10g.jpg\" width=\"800\" />
			<p>Đông trùng hạ thảo nuôi cấy giá rẻ hơn tự nhiên mà chất lượng không thua kém</p>
			</td>
		</tr>
	</tbody>
</table>
<em><strong>Còn giá của các chế phẩm đông trùng hạ thảo có thể ở dạng nước, dạng viên, ngâm mật ong… được bán với mức giá tham khảo như sau:</strong></em>

<p>• Viên uống đông trùng hạ thảo dao động từ 1 - 2 triệu đồng/hộp</p>

<p>• Đông trùng hạ thảo dạng nước có giá từ 1 – 2 triệu đồng/hộp</p>

<p>• Loại đông trùng hạ thảo ngâm dạng bột giá từ 6 – 8 triệu</p>

<p>• Đông trùng hạ ngâm rượu có giá từ 1-2 triệu/bình 100g đông trùng</p>

<p>• Loại ngâm mật ong có giá từ 1-2 triệu/bình 100g đông trùng</p>

<h2>Cách phân biệt đông trùng hạ thảo</h2>

<p>Đông trùng hạ thảo là loại dược liệu quý hiếm với giá bán cao nên tình trạng làm nhái, giả trục lợi là điều dễ hiểu. Do đó, khi mua đông trùng hạ thảo ai cũng cần trang bị cho mình những kiến thức phân biệt đông trùng hạ thảo để tránh tiền mất tật mang. Cùng tham khảo ngay cách phân biệt đông trùng hạ thảo.</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><img alt=\"Đông trùng hạ thảo là gì? Phân loại, công dụng và cách phân biệt - ảnh 8\" caption=\"Đông trùng hạ thảo là gì? Phân loại, công dụng và cách phân biệt - ảnh 8\" data-src=\"https://image.thanhnien.vn/w2048/Uploaded/2021/szyrbfly.bn/2021_09_08/maihan/8_ngnv.jpg\" src=\"/uploads/tin-tuc/8_ngnv.jpg\" /></td>
		</tr>
	</tbody>
</table>
<strong>Nhận diện qua đặc điểm bên ngoài</strong>

<p>Đông trùng hạ thảo thật có hình dáng như con tằm, màu vàng hay hơi sậm là ở phần thân sâu và phần thảo với màu nâu đậm. Chiều dài của phần sâu non từ 3-5 cm, dài từ 2-3 cm là phần thảo. Về vằn khía thì mỗi đông trùng hạ thảo có khoảng 20-30 vằn khía và 3 vằn tạo nên 1 nếp gấp. Nếp gấp xếp thành hàng và càng về phía đầu sâu thì các vằn càng nhỏ.</p>

<p>Mối nối của sâu non và phần thảo gắn kết với nhau rất tự nhiên và không có bất cứ dấu hiệu nào là có sự tác động của con người. Số chân thường là 8 đôi chân với 3 cặp ở phần đầu ngực. Nếu cắt ngang đông trùng hạ thảo sẽ thấy màu trắng, giữa lõi có hình chữ V màu đen và hoàn toàn không bị xơ.</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><img alt=\"Đông trùng hạ thảo là gì? Phân loại, công dụng và cách phân biệt - ảnh 9\" caption=\"Đông trùng hạ thảo là gì? Phân loại, công dụng và cách phân biệt - ảnh 9\" data-src=\"https://image.thanhnien.vn/w2048/Uploaded/2021/szyrbfly.bn/2021_09_08/maihan/9_ugdi.jpg\" src=\"/uploads/tin-tuc/9_ugdi.jpg\" />
			<p>Cắt ngang đông trùng hạ thảo có hình chữ V giữa lõi</p>
			</td>
		</tr>
	</tbody>
</table>
<strong>Phân biệt qua xúc giác</strong>

<p>Trọng lượng đông trùng hạ thảo cực nhẹ, bạn cầm lên cảm giác như ngọn cỏ khô, thân dễ gãy và phần thảo lại dai.</p>

<p><strong>Nhận biết qua khứu giác</strong></p>

<p>Mùi của đông trùng hạ thảo có mùi như nấm rơm và hơi tanh của nấm hương. Ngay khi mở hộp đông trùng hạ thảo sẽ cảm nhận được mùi hương này một cách rõ ràng.</p>

<p><strong>Phân biệt đông trùng hạ thảo qua vị giác</strong></p>

<p>Nếu ai đã từng ăn đông trùng hạ thảo sẽ thấy có mùi thơm như mùi thịt gà.</p>

<p>Qua một số cách phân biệt đông trùng hạ thảo, các bạn có thể mua được sản phẩm chất lượng với giá trị dinh dưỡng cao. Bên cạnh đó, khi mua đông trùng hạ thảo tại các cơ sở phân phối cũng cần tìm hiểu các chứng nhận về sản phẩm để chứng minh hàng chất lượng như:</p>

<p>• Giấy chứng nhận chất lượng sản phẩm.</p>

<p>• Phiếu kiểm nghiệm lâm sàng với các hoạt chất có trong đông trùng hạ thảo</p>

<p>• Giấy chứng nhận nguồn gốc xuất xử của sản phẩm</p>

<p>• Quan trọng nhất vẫn là tìm một đơn vị cung cấp sản phẩm đông trùng hạ thảo uy tín.</p>', 'nổi bật', 1, '4', '', 3, 1, 1634628510, 1634628591, 1, 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (4, 'Phân biệt đông trùng hạ thảo thật và giả, thiên nhiên và nuôi cấy', 'phan-biet-dong-trung-ha-thao-that-va-gia-thien-nhien-va-nuoi-cay', 'dtht12.jpg', '', 0, 'Đông trùng hạ thảo là một loại &#039;biệt dược&#039; quý hiếm, có giá trị kinh tế cao với vô vàn công dụng cho sức khỏe và sắc đẹp.', '<p><strong>Sự hình thành của đông trùng hạ thảo trong tự nhiên</strong></p>

<p>Cuối Thu, loài bướm trước khi kết thúc vòng đời (4-6 tháng) phải tìm đúng loại cây là thức ăn của sâu non để đẻ trứng dưới gốc. Khi trứng nở thành ấu trùng cũng là lúc mùa Đông đến. Trên đỉnh núi cao, băng tuyết phủ dày suốt ngày đêm, sâu non chui xuống đất tránh rét, ăn rễ cỏ và lớn dần. Mùa Đông trên triền Himalaya kéo dài nửa năm (từ tháng 11 đến hết tháng 4) đồng nghĩa với việc sâu cứ việc ẩn trú dưới mặt đất ấm áp.</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><a data-desc=\"Người dân Bhutan đang thu hái đông trùng hạ thảo. (Theo FB Diem Loving Heart Nguyen)\" data-index=\"0\" href=\"https://photo-cms-tpo.zadn.vn/w1000/Uploaded/2021/pcgycivo/2021_10_19/thu-hai-dtht-o-bhutan-7574.jpg\"><img alt=\"Phân biệt đông trùng hạ thảo thật và giả, thiên nhiên và nuôi cấy ảnh 1\" cms-photo-caption=\"Người dân Bhutan đang thu hái đông trùng hạ thảo. (Theo FB Diem Loving Heart Nguyen)\" data-height=\"1536\" data-image-id=\"2934537\" data-src=\"https://photo-cms-tpo.zadn.vn/w645/Uploaded/2021/pcgycivo/2021_10_19/thu-hai-dtht-o-bhutan-7574.jpg\" data-width=\"2048\" src=\"https://photo-cms-tpo.zadn.vn/w645/Uploaded/2021/pcgycivo/2021_10_19/thu-hai-dtht-o-bhutan-7574.jpg\" /></a></td>
		</tr>
		<tr>
			<td>
			<p>Người dân Bhutan đang thu hái đông trùng hạ thảo. (Theo FB&nbsp;<em>Diem Loving Heart Nguyen)</em></p>
			</td>
		</tr>
	</tbody>
</table>

<p>Và có hai tình huống xảy ra:</p>

<p><em>1. Không hình thành đông trùng hạ thảo (ĐTHT)</em></p>

<p>Hè đến, sâu non chui lên mặt đất, lột xác thành sâu trưởng thành, ăn hoa lá đến khi hóa bướm. Bướm bay lượn khắp thảo nguyên và đến cuối Thu lại đẻ trứng xuống đất, kết thúc vòng đời.</p>

<p><em>2. Có hình thành ĐTHT</em></p>

<p>Nếu tại đúng chỗ đất sâu non trú đông có bào tử của nấm túi thì trong lúc nó ăn rễ cây, các bào tử nấm túi cũng bùng nở thành các đám sợi (những mảng tơ nấm) bao quanh các rễ cỏ. Sâu đến ăn rễ cỏ, liền bị nấm “tóm sống”.</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><a data-desc=\"Sơ đồ hình thành đông trùng hạ thảo trong tự nhiên\" data-index=\"1\" href=\"https://photo-cms-tpo.zadn.vn/w1000/Uploaded/2021/pcgycivo/2021_10_19/5e07ff92467e8f20d66f-2817.jpg\"><img alt=\"Phân biệt đông trùng hạ thảo thật và giả, thiên nhiên và nuôi cấy ảnh 2\" cms-photo-caption=\"Sơ đồ hình thành đông trùng hạ thảo trong tự nhiên\" data-height=\"900\" data-image-id=\"2934534\" data-src=\"https://photo-cms-tpo.zadn.vn/w645/Uploaded/2021/pcgycivo/2021_10_19/5e07ff92467e8f20d66f-2817.jpg\" data-width=\"960\" src=\"https://photo-cms-tpo.zadn.vn/w645/Uploaded/2021/pcgycivo/2021_10_19/5e07ff92467e8f20d66f-2817.jpg\" /></a></td>
		</tr>
		<tr>
			<td>
			<p>Sơ đồ hình thành đông trùng hạ thảo trong tự nhiên</p>
			</td>
		</tr>
	</tbody>
</table>

<p>Hai bên “ăn” lẫn nhau. Sự cộng sinh/ký sinh của chúng gây ra những phản ứng sinh học, tạo nên các hoạt chất. Nấm cộng sinh thẳng vào sâu đang sống, sử dụng chất dinh dưỡng của sâu để phát triển. Cuối cùng sâu bị biến thành nấm, tuy hình hài bên ngoài vẫn là sâu. Nó cứ ở dưới đất như vậy đến hết mùa Đông.</p>

<p>Hè đến, cây nấm (quả thể của nấm) mọc lên trên mặt đất. Người ta lần theo các loại cây cỏ mà bướm thường đẻ trứng để tìm ĐTHT. Khi thấy cây nấm đó, họ sẽ đào hoặc nhẹ nhàng nhổ lên. Đất trên thảo nguyên Himalaya mùa Hè rất mềm và tơi xốp. Nếu không bị tìm thấy thì sau ít ngày, quả thể của nấm sẽ “chín” và bung nở, rụng những bào tử (hạt giống) mới xuống đất và vòng đời của nấm kết thúc.</p>

<p><strong>Quá trình nuôi cấy đông trùng hạ thảo</strong></p>

<p>1. Người ta làm chết nhộng tằm hoặc sâu bướm ở nhiệt độ rất lạnh, rồi xử lý thành giá thể để cấy bào tử nấm vào.</p>

<p>2. Vì nhộng tằm hoặc sâu bướm đã chết trước đó, nên không còn sự cộng sinh/ký sinh, không có sự tương tác và phản ứng sinh học tự nhiên khi hai loài “ăn” lẫn nhau, nên không thể tạo nên những hoạt chất quý báu của ĐTHT.</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><a data-desc=\"Đông trùng hạ thảo vừa thu hoạch trên núi tuyết (Theo FB Diem Loving Heart Nguyen)\" data-index=\"2\" href=\"https://photo-cms-tpo.zadn.vn/w1000/Uploaded/2021/pcgycivo/2021_10_19/dtht-bhutan-vua-thu-hoach-9222.jpg\"><img alt=\"Phân biệt đông trùng hạ thảo thật và giả, thiên nhiên và nuôi cấy ảnh 3\" cms-photo-caption=\"Đông trùng hạ thảo vừa thu hoạch trên núi tuyết (Theo FB Diem Loving Heart Nguyen)\" data-height=\"960\" data-image-id=\"2934535\" data-src=\"https://photo-cms-tpo.zadn.vn/w645/Uploaded/2021/pcgycivo/2021_10_19/dtht-bhutan-vua-thu-hoach-9222.jpg\" data-width=\"540\" src=\"https://photo-cms-tpo.zadn.vn/w645/Uploaded/2021/pcgycivo/2021_10_19/dtht-bhutan-vua-thu-hoach-9222.jpg\" /></a></td>
		</tr>
		<tr>
			<td>
			<p>Đông trùng hạ thảo vừa thu hoạch trên núi tuyết (Theo FB&nbsp;<em>Diem Loving Heart Nguyen)</em></p>
			</td>
		</tr>
	</tbody>
</table>

<p><strong>Đông trùng hạ thảo nuôi cấy có được như tự nhiên?</strong></p>

<p>ĐTHT nuôi trồng trên hỗn hợp bột nhộng tằm hoặc nhộng tằm nguyên con, Việt Nam đã sản xuất được. Hiện mới chỉ có Trung Quốc nuôi trồng được ĐTHT trên chính loài sâu bướm trên cao nguyên Tây Tạng, nên bề ngoài loại ĐTHT này giống hệt ĐTHT mắt vàng tự nhiên.</p>

<p><em>1. Khác nhau về sự hình thành và tương tác:</em></p>

<p>Như đã phân tích ở trên, ĐTHT thật hình thành do sự xâm thực, cộng sinh của bào tử nấm vào cơ thể ấu trùng bướm đang sống. Từ đó tạo thành các hoạt chất quý báu làm nên những công dụng vượt trội. Nuôi cấy ĐTHT chính là trồng nấm trên nhộng tằm hoặc sâu bướm đã chết. Xác của con nhộng hoặc sâu bướm chỉ đóng vai trò như giá thể (đất trồng) mà thôi.</p>

<p><em>2. Khác nhau về quá trình phát triển và điều kiện môi trường:</em></p>

<p>Để có được sản phẩm ĐTHT thiên nhiên đòi hỏi một quá trình hình thành trong tự nhiên kéo dài từ Đông sang Hạ, tức là từ tám đến chín tháng trên núi cao khí hậu trong lành, không có tác động của hoá chất kích thích.</p>

<p>Trong khi đó quá trình nuôi cấy ĐTHT thực chất chẳng có “đông” hay “hạ” gì, ngoài nhiệt độ của máy điều hoà và các “công nghệ kỹ thuật” để nấm mọc lên đều, đẹp. Bởi vậy, hiển nhiên chất lượng của hai loại không thể hoàn toàn giống nhau. TS Dương Văn Hợp, Viện trưởng Viện Công nghệ sinh học và Vi sinh vật, ĐH Quốc gia Hà Nội khẳng định với báo&nbsp;<em>Khoa học và Đời sống</em>: “ĐTHT nuôi cấy có dưỡng chất chỉ như nấm ăn, không thể so sánh với ĐTHT thật”.</p>

<table align=\"center\">
	<tbody>
		<tr>
			<td><a data-desc=\"So sánh đông trùng hạ thảo thật và giả\" data-index=\"3\" href=\"https://photo-cms-tpo.zadn.vn/w1000/Uploaded/2021/pcgycivo/2021_10_19/phan-biet-dtht-that-gia-6121.jpg\"><img alt=\"Phân biệt đông trùng hạ thảo thật và giả, thiên nhiên và nuôi cấy ảnh 4\" cms-photo-caption=\"So sánh đông trùng hạ thảo thật và giả\" data-height=\"960\" data-image-id=\"2934536\" data-src=\"https://photo-cms-tpo.zadn.vn/w645/Uploaded/2021/pcgycivo/2021_10_19/phan-biet-dtht-that-gia-6121.jpg\" data-width=\"720\" src=\"https://photo-cms-tpo.zadn.vn/w645/Uploaded/2021/pcgycivo/2021_10_19/phan-biet-dtht-that-gia-6121.jpg\" /></a></td>
		</tr>
		<tr>
			<td>
			<p>So sánh đông trùng hạ thảo thật và giả</p>
			</td>
		</tr>
	</tbody>
</table>

<p><strong>Phân biệt đông trùng hạ thảo thật- giả</strong></p>

<p>ĐTHT thật bản chất là nấm đã xâm thực cộng sinh và phát triển trong ấu trùng của loài bướm cao nguyên Himalaya. Có vị ngọt của nấm khô nhưng mùi giống mực khô. Phần nấm dẻo dai, dễ dàng tước dọc thành sợi nhỏ. Phần đầu rõ ràng, màu đỏ đậm, đỏ nhạt, đen hoặc vàng (màu sắc thay đổi tùy từng quả núi nơi ĐTHT được tìm thấy). Phần cổ có vết đen đậm hơn phần thân với ĐTHT mắt đỏ; trắng sáng màu hơn phần thân với ĐTHT mắt vàng. Phần thân rõ từng cặp chân tách biệt.</p>

<p>ĐTHT giả mùi vị giống thuốc Bắc nếu làm từ rễ cây. Hoặc mùi hôi, mùi lạ với loại làm từ tinh bột. Phần “nấm” rất cứng giòn, không thể tước sợi. Phần đầu không rõ ràng hoặc cố tình bọc bột để che giấu. Cổ và thân màu như nhau. Phần thân “sâu” không rõ từng cặp chân.</p>

<p><strong>Phân biệt đông trùng hạ thảo mắt đỏ- mắt vàng.</strong></p>

<p>Hai loại ĐTHT thiên nhiên này có một số đặc điểm khác biệt như sau:</p>

<p>1.&nbsp;<em>ĐTHT mắt đỏ</em>:</p>

<p>- Xuất xứ: Chỉ có tại Bhutan</p>

<p>- Kích cỡ: Nhỏ và ngắn hơn so với ĐTHT mắt vàng</p>

<p>- Hình dạng: Đầu to, vuông, màu đỏ đậm, đỏ nhạt hoặc đen</p>

<p>2.&nbsp;<em>ĐTHT mắt vàng</em>:</p>

<p>- Xuất xứ: Nepal, Tây Tạng (Trung Quốc)</p>

<p>- Kích cỡ: To, dài hơn mắt đỏ</p>

<p>- Hình dạng: Đầu nhỏ tam giác màu vàng, cổ sáng màu, thân sậm màu rõ rệt so với cổ.</p>

<p>Cả hai loại ĐTHT thiên nhiên kể trên đều rất tốt, mùi vị càng đậm càng tốt. Hiện ĐTHT mắt vàng đã có thể sản xuất trong môi trường nhân tạo từ loài sâu bướm ở Tây Tạng.</p>

<p><strong>Cách sử dụng đông trùng hạ thảo thiên nhiên</strong></p>

<p>Liều lượng ĐTHT nhiều hay ít tùy tình trạng sức khỏe người sử dụng. Với người lớn, mỗi ngày ăn một lần (0.5g- 1g) hoặc 2 đến 3 ngày ăn một lần (1g). Nếu không quá mệt, 5 đến 7 ngày ăn một lần để bồi bổ sức khỏe. Nếu quá mệt, không đảm bảo việc ăn uống bình thường, mỗi ngày có thể dùng ĐTHT 1 đến 3 lần, mỗi lần 1g.</p>

<p>ĐTHT tự nhiên, nguyên con có thể được chế biến bằng nhiều cách: hấp, hầm, canh, súp, cháo, chưng, tiềm, nấu… để ăn cả nước và cái.</p>

<p>1.&nbsp;<em>Cách nấu đơn giản</em>: Cho ĐTHT vào bát (gốm, sứ) đổ ngập nước sôi, đậy nắp, đặt vào nồi cơm vừa cạn nước, hấp chín cùng cơm. Hoặc hãm 30 phút với nước sôi trong bình giữ nhiệt. Dùng trực tiếp.</p>

<p>2.&nbsp;<em>Ngâm rượu</em>: Cứ 30g ĐTHT ngâm trong 1 lít rượu gạo, sau 21 ngày dùng được. Mỗi ngày dùng khoảng 30ml rượu và 1g ĐTHT. Có thể nhiều hoặc ít hơn tuỳ theo đáp ứng của cơ thể.</p>

<p>3.&nbsp;<em>Tán bột</em>: Giã tay hoặc xay khô thành bột vụn. Để trong ngăn đá tủ lạnh. Khi dùng cho vào cháo, canh, súp vừa nấu xong. Hoặc cho vào xong thì tắt bếp. Để ngấm 15-20 phút rồi sử dụng.</p>', 'phân biệt,thiên nhiên', 1, '4', '', 4, 1, 1634628840, 1634628840, 1, 0, 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_tin_tuc_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_tin_tuc_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc_config` (`config_name`, `config_value`) VALUES ('viewtype', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc_config` (`config_name`, `config_value`) VALUES ('facebookapi', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc_config` (`config_name`, `config_value`) VALUES ('per_page', '20')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc_config` (`config_name`, `config_value`) VALUES ('news_first', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc_config` (`config_name`, `config_value`) VALUES ('related_articles', '5')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc_config` (`config_name`, `config_value`) VALUES ('copy_page', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc_config` (`config_name`, `config_value`) VALUES ('alias_lower', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tin_tuc_config` (`config_name`, `config_value`) VALUES ('socialbutton', 'facebook,twitter')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_tuyen_dung`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_tuyen_dung` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT '',
  `imagealt` varchar(255) DEFAULT '',
  `imageposition` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `description` text,
  `bodytext` mediumtext NOT NULL,
  `keywords` text,
  `socialbutton` tinyint(4) NOT NULL DEFAULT '0',
  `activecomm` varchar(255) DEFAULT '',
  `layout_func` varchar(100) DEFAULT '',
  `weight` smallint(4) NOT NULL DEFAULT '0',
  `admin_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `edit_time` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `hot_post` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_tuyen_dung_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_tuyen_dung_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tuyen_dung_config` (`config_name`, `config_value`) VALUES ('viewtype', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tuyen_dung_config` (`config_name`, `config_value`) VALUES ('facebookapi', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tuyen_dung_config` (`config_name`, `config_value`) VALUES ('per_page', '20')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tuyen_dung_config` (`config_name`, `config_value`) VALUES ('news_first', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tuyen_dung_config` (`config_name`, `config_value`) VALUES ('related_articles', '5')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tuyen_dung_config` (`config_name`, `config_value`) VALUES ('copy_page', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tuyen_dung_config` (`config_name`, `config_value`) VALUES ('alias_lower', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_tuyen_dung_config` (`config_name`, `config_value`) VALUES ('socialbutton', 'facebook,twitter')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_admin_groups`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_admin_groups` (
  `gid` smallint(4) NOT NULL AUTO_INCREMENT,
  `group_title` varchar(100) NOT NULL DEFAULT '' COMMENT 'Tên nhóm',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `is_wallet` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Quyền xem và cập nhật ví tiền',
  `is_vtransaction` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Quyền xem giao dịch',
  `is_mtransaction` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Quyền xem và xử lý giao dịch',
  `is_vorder` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Quyền xem các đơn hàng kết nối',
  `is_morder` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Quyền xem và xử lý các đơn hàng kết nối',
  `is_exchange` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Quyền quản lý tỷ giá',
  `is_money` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Quyền quản lý tiền tệ',
  `is_payport` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Quyền quản lý các cổng thanh toán',
  `is_configmod` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Quyền thiết lập cấu hình module',
  `is_viewstats` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Quyền xem thống kê',
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_admins`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_admins` (
  `admin_id` mediumint(8) NOT NULL,
  `gid` smallint(4) NOT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`admin_id`),
  KEY `gid` (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_epay_log`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_epay_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL DEFAULT '0',
  `telco` char(3) NOT NULL DEFAULT '',
  `code` varchar(30) NOT NULL DEFAULT '',
  `userid` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `SessionID` varchar(255) NOT NULL DEFAULT '',
  `money_card` int(11) NOT NULL DEFAULT '0',
  `money_site` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `time` (`time`),
  KEY `telco` (`telco`,`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_exchange`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_exchange` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `money_unit` char(3) NOT NULL DEFAULT '',
  `than_unit` char(3) NOT NULL DEFAULT '',
  `exchange_from` double NOT NULL DEFAULT '1',
  `exchange_to` double NOT NULL DEFAULT '1',
  `time_update` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`money_unit`,`than_unit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_exchange_log`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_exchange_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `money_unit` char(3) NOT NULL DEFAULT '',
  `than_unit` char(3) NOT NULL DEFAULT '',
  `exchange_from` double NOT NULL DEFAULT '1',
  `exchange_to` double NOT NULL DEFAULT '1',
  `time_begin` int(11) NOT NULL DEFAULT '0',
  `time_end` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_ipn_logs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_ipn_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0' COMMENT 'ID thành viên nếu có',
  `log_ip` varchar(64) NOT NULL DEFAULT '' COMMENT 'Địa chỉ IP',
  `log_data` mediumtext COMMENT 'Dữ liệu dạng json_encode',
  `request_method` varchar(20) NOT NULL DEFAULT '' COMMENT 'Loại truy vấn',
  `request_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'Thời gian log',
  `user_agent` text,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `log_ip` (`log_ip`),
  KEY `request_method` (`request_method`),
  KEY `request_time` (`request_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_money`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_money` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `created_time` int(11) NOT NULL DEFAULT '0',
  `created_userid` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `money_unit` char(3) NOT NULL DEFAULT '',
  `money_in` double NOT NULL DEFAULT '0',
  `money_out` double NOT NULL DEFAULT '0',
  `money_total` double NOT NULL DEFAULT '0',
  `note` text NOT NULL,
  `tokenkey` varchar(32) NOT NULL DEFAULT '',
  UNIQUE KEY `userid` (`userid`,`money_unit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_money_sys`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_money_sys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` char(3) NOT NULL DEFAULT '',
  `currency` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_orders`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_mod` varchar(100) NOT NULL DEFAULT '' COMMENT 'Module title của module thực hiện đơn hàng',
  `order_id` varchar(100) NOT NULL DEFAULT '' COMMENT 'ID đơn hàng',
  `order_message` text NOT NULL COMMENT 'Message gửi cho cổng thanh toán',
  `order_object` varchar(250) NOT NULL DEFAULT '' COMMENT 'Đối tượng thanh toán ví dụ: Giỏ hàng, sản phẩn, ứng dụng...',
  `order_name` varchar(250) NOT NULL DEFAULT '' COMMENT 'Tên đối tượng',
  `money_amount` double NOT NULL DEFAULT '0' COMMENT 'Số tiền thanh toán',
  `money_unit` varchar(3) NOT NULL DEFAULT '' COMMENT 'Loại tiền tệ',
  `secret_code` varchar(50) NOT NULL DEFAULT '' COMMENT 'Mã bí mật của mỗi đơn hàng, không trùng lặp',
  `url_back` text NOT NULL COMMENT 'Dữ liệu trả về khi thanh toán xong',
  `url_admin` text NOT NULL COMMENT 'Url trang quản trị đơn hàng',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `paid_status` varchar(100) NOT NULL DEFAULT '' COMMENT 'Trạng thái giao dịch',
  `paid_id` varchar(50) NOT NULL DEFAULT '' COMMENT 'ID giao dịch',
  `paid_time` int(11) NOT NULL DEFAULT '0' COMMENT 'Thời gian cập nhật của status kia',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_key` (`order_mod`,`order_id`),
  UNIQUE KEY `secret_code` (`secret_code`),
  KEY `paid_status` (`paid_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_payment`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_payment` (
  `payment` varchar(100) NOT NULL DEFAULT '',
  `paymentname` varchar(255) NOT NULL DEFAULT '',
  `domain` varchar(255) NOT NULL DEFAULT '',
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `weight` int(11) NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  `discount` double NOT NULL DEFAULT '0' COMMENT 'Phí cho nhà cung cấp dịch vụ, phần này chỉ làm đối số để thống kê',
  `discount_transaction` double NOT NULL DEFAULT '0' COMMENT 'Phí giao dịch',
  `images_button` varchar(255) NOT NULL DEFAULT '',
  `bodytext` mediumtext NOT NULL,
  `term` mediumtext NOT NULL,
  `currency_support` varchar(255) NOT NULL DEFAULT '' COMMENT 'Các loại tiền tệ hỗ trợ thanh toán',
  `allowedoptionalmoney` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Cho phép thanh toán số tiền tùy ý hay không',
  `active_completed_email` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Kích hoạt gửi email thông báo các giao dịch chưa hoàn thành',
  `active_incomplete_email` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Kích hoạt gửi email thông báo các giao dịch đã hoàn thành',
  PRIMARY KEY (`payment`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_payment_discount`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_payment_discount` (
  `payment` varchar(100) NOT NULL DEFAULT '' COMMENT 'Cổng thanh toán',
  `revenue_from` double NOT NULL DEFAULT '0' COMMENT 'Doanh thu từ: Quan hệ lớn hơn hoặc bằng',
  `revenue_to` double NOT NULL DEFAULT '0' COMMENT 'Doanh thu đến: Quan hệ nhỏ hơn',
  `provider` varchar(10) NOT NULL DEFAULT '0' COMMENT 'Nhà cung cấp',
  `discount` double NOT NULL DEFAULT '0' COMMENT 'Mức phí %',
  UNIQUE KEY `payment` (`payment`,`revenue_from`,`revenue_to`,`provider`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_smslog`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_smslog` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `User_ID` varchar(15) NOT NULL DEFAULT '',
  `Service_ID` varchar(15) NOT NULL DEFAULT '',
  `Command_Code` varchar(160) NOT NULL DEFAULT '',
  `Message` varchar(160) NOT NULL DEFAULT '',
  `Request_ID` varchar(160) NOT NULL DEFAULT '',
  `set_time` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(5) NOT NULL DEFAULT '0',
  `client_ip` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `User_ID` (`User_ID`),
  KEY `set_time` (`set_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_wallet_transaction`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_wallet_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` int(11) NOT NULL DEFAULT '0' COMMENT 'Ngày khởi tạo giao dịch',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Tác động: 1 cộng tiền, -1 trừ tiền',
  `money_unit` char(3) NOT NULL DEFAULT '',
  `money_total` double NOT NULL DEFAULT '0' COMMENT 'Số tiền thực cập nhật vào tài khoản thành viên',
  `money_net` double NOT NULL DEFAULT '0' COMMENT 'Số tiền thành viên thực hiện giao dịch',
  `money_discount` double NOT NULL DEFAULT '0' COMMENT 'Phí doanh nghiệp phải trả cho nhà cung cấp dịch vụ',
  `money_revenue` double NOT NULL DEFAULT '0' COMMENT 'Lợi nhuận mà doanh nghiệp đạt được',
  `userid` int(11) NOT NULL DEFAULT '0' COMMENT 'ID thành viên có tài khoản được tác động',
  `adminid` int(11) NOT NULL DEFAULT '0' COMMENT 'ID admin thực hiện giao dịch, nếu có giá trị này sẽ không tính vào doanh thu khi thống kê',
  `order_id` int(11) NOT NULL DEFAULT '0' COMMENT 'ID giao dịch nếu là thanh toán các đơn hàng từ module khác',
  `customer_id` int(11) NOT NULL DEFAULT '0' COMMENT 'ID người thực hiện giao dịch (Nạp tiền vào tài khoản)',
  `customer_name` varchar(255) NOT NULL DEFAULT '',
  `customer_email` varchar(255) NOT NULL DEFAULT '',
  `customer_phone` varchar(255) NOT NULL DEFAULT '',
  `customer_address` varchar(255) NOT NULL DEFAULT '',
  `customer_info` text NOT NULL,
  `transaction_id` varchar(255) NOT NULL DEFAULT '',
  `transaction_type` smallint(5) NOT NULL DEFAULT '-1' COMMENT 'Loại giao dịch',
  `transaction_status` int(11) NOT NULL DEFAULT '0' COMMENT 'Trạng thái giao dịch được quy ước chuẩn theo module',
  `transaction_time` int(11) NOT NULL DEFAULT '0' COMMENT 'Thời gian thực hiện thanh toán giao dịch',
  `transaction_info` text NOT NULL,
  `transaction_data` text NOT NULL,
  `payment` varchar(50) NOT NULL DEFAULT '' COMMENT 'Cổng thanh toán sử dụng',
  `provider` varchar(50) NOT NULL DEFAULT '' COMMENT 'Nhà cung cấp thẻ sử dụng nếu như đây là cổng thanh toán nạp thẻ, nếu không cần bỏ trống',
  `tokenkey` varchar(32) NOT NULL DEFAULT '',
  `is_expired` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0: Chưa hết hạn, 1: Hết hạn',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `adminid` (`adminid`),
  KEY `customer_id` (`customer_id`),
  KEY `created_time` (`created_time`),
  KEY `customer_name` (`customer_name`(191)),
  KEY `customer_email` (`customer_email`(191)),
  KEY `transaction_type` (`transaction_type`),
  KEY `is_expired` (`is_expired`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
