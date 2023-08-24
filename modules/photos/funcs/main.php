<?php

/**
 * @Project PHOTOS 4.x
 * @Author KENNY NGUYEN (nguyentiendat713@gmail.com)
 * @Copyright (C) 2015 tradacongnghe.com. All rights reserved
 * @Based on NukeViet CMS
 * @License GNU/GPL version 2 or any later version
 * @Createdate  Fri, 18 Sep 2015 11:52:59 GMT
 */

if( !defined( 'NV_IS_MOD_PHOTO' ) )
	die( 'Stop!!!' );

$page_title = $module_info['custom_title'];
$key_words = $module_info['keywords'];
$contents = '';
$base_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name;
$base_url_rewrite = nv_url_rewrite( $base_url, true );
$page_url_rewrite = $page ? nv_url_rewrite( $base_url . '/page-' . $page, true ) : $base_url_rewrite;
$request_uri = $_SERVER['REQUEST_URI'];
if( !($home OR $request_uri == $base_url_rewrite OR $request_uri == $page_url_rewrite OR NV_MAIN_DOMAIN . $request_uri == $base_url_rewrite OR NV_MAIN_DOMAIN . $request_uri == $page_url_rewrite) )
{
	$redirect = '<meta http-equiv="Refresh" content="3;URL=' . $base_url_rewrite . '" />';
	nv_info_die( $lang_global['error_404_title'], $lang_global['error_404_title'], $lang_global['error_404_content'] . $redirect );
}

if( $module_config[$module_name]['home_view'] == 'home_view_grid_by_album' )
{
	$per_page = $module_config[$module_name]['per_page_album'];
	$array_album = array( );
	if( !empty( $global_photo_album ) )
	{
		$db->sqlreset( )->select( 'COUNT(*)' )->from( TABLE_PHOTO_NAME . '_album a' )->join( 'LEFT JOIN  ' . TABLE_PHOTO_NAME . '_rows r ON ( a.album_id = r.album_id )' )->where( 'a.status=1 AND r.defaults=1' );
		$num_items = $db->query( $db->sql( ) )->fetchColumn( );

		$db->select( 'a.album_id, a.name, a.alias, a.description, a.num_photo, a.date_added, a.viewed, a.author, r.file, r.thumb' )->order( 'a.date_added DESC' )->limit( $per_page )->where( 'a.status= 1 AND r.defaults = 1' )->offset( ($page - 1) * $per_page );

		$result = $db->query( $db->sql( ) );

		while( $item = $result->fetch( ) )
		{
			$sql = 'SELECT userid, username, first_name, last_name, photo FROM ' . NV_USERS_GLOBALTABLE . ' WHERE active=1 AND userid= ' . $item['author'];
			$array_user = $nv_Cache->db( $sql, 'userid', $module_name );
			if( !empty( $array_user ) )
			{
				foreach( $array_user as $array_user_i )
				{
					if( !empty( $array_user_i['first_name'] ) && !empty( $array_user_i['last_name'] ) )
					{
						$item['author_upload'] = $array_user_i['first_name'] . ' ' . $array_user_i['last_name'];
					}
					else
					{
						$item['author_upload'] = $array_user_i['username'];
					}
					if( !empty( $array_user_i['photo'] ) )
					{
						$item['author_image'] = $array_user_i['photo'];
					}
					else
					{
						$item['author_image'] = 'themes/default/images/users/no_avatar.png';
					}
				}
			}
			$item['link'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $item['alias'] . '-' . $item['album_id'];
			$array_album[] = $item;
		}
		$result->closeCursor( );

		$generate_page = nv_alias_page( $page_title, $base_url, $num_items, $per_page, $page );
		$contents = home_view_grid_by_album( $array_album, $generate_page );
	}
}
else
{
	$query = $db->query( 'SELECT a.*, r.file, r.thumb FROM ' . TABLE_PHOTO_NAME . '_album a LEFT JOIN  ' . TABLE_PHOTO_NAME . '_rows r ON ( a.album_id = r.album_id )WHERE a.status= 1 AND r.defaults = 1  ');
	$album = $query->fetch( );
	if( $album['album_id'] > 0 )
	{
		if( defined( 'NV_IS_MODADMIN' ) or $album['status'] == 1 ) // cap nhat luot xem
		{
			$time_set = $nv_Request->get_int( $module_data . '_' . $op . '_' . $album['album_id'], 'session' );
			if( empty( $time_set ) )
			{
				$nv_Request->set_Session( $module_data . '_' . $op . '_' . $album['album_id'], NV_CURRENTTIME );
				$db->query( 'UPDATE ' . TABLE_PHOTO_NAME . '_album SET viewed=viewed+1 WHERE album_id=' . $album['album_id'] );
			}
		}

		
	}
	$base_url_rewrite = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $album['alias'] . '-' . $album['album_id'];
	if( $page > 1 )
	{
		$base_url_rewrite .= '/page-' . $page;
	}
	$base_url_rewrite = nv_url_rewrite( $base_url_rewrite, true );
	if( $_SERVER['REQUEST_URI'] != $base_url_rewrite and NV_MAIN_DOMAIN . $_SERVER['REQUEST_URI'] != $base_url_rewrite )
	{
		Header( 'Location: ' . $base_url_rewrite );
		die( );
	}

}
include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme( $contents );
include NV_ROOTDIR . '/includes/footer.php';
