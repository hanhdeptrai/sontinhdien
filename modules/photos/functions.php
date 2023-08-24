<?php

/**
 * @Project PHOTOS 4.x
 * @Author KENNY NGUYEN (nguyentiendat713@gmail.com)
 * @Copyright (C) 2015 tradacongnghe.com. All rights reserved
 * @Based on NukeViet CMS
 * @License GNU/GPL version 2 or any later version
 * @Createdate  Fri, 18 Sep 2015 11:52:59 GMT
 */

if( !defined( 'NV_SYSTEM' ) )
	die( 'Stop!!!' );

define( 'NV_IS_MOD_PHOTO', true );
define( 'TABLE_PHOTO_NAME', NV_PREFIXLANG . '_' . $module_data );
define( 'ACTION_METHOD', $nv_Request->get_string( 'action', 'get,post', '' ) );

require_once NV_ROOTDIR . '/modules/' . $module_file . '/global.functions.php';


$alias_cat_url = isset( $array_op[0] ) ? $array_op[0] : '';
$array_mod_title = array( );
$id_row=end(explode("-",$array_op[0]));
if(!is_numeric($id_row)){
	$id_row=0;
}
if($id_row>0){
	$category_id=$db->query('SELECT * FROM '.TABLE_PHOTO_NAME.'_album where album_id='.$id_row)->fetchColumn();
}
//Xac dinh RSS
if( $module_info['rss'] )
{
	$rss[] = array(
		'title' => $module_info['custom_title'],
		'src' => NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=rss' //
	);
}



$page = 1;
$count_op = sizeof( $array_op );

if( !empty( $array_op ) and $op == 'main' )
{
	
	
		$op = 'main';
		if( $count_op == 1 or substr( $array_op[1], 0, 5 ) == 'page-' )
		{
			if($id_row==0){
				$op = 'viewcat';
				if( $count_op > 1 )
				{
					$page = intval( substr( $array_op[1], 5 ) );
				}
				$parent_id = $category_id;
				while( $parent_id > 0 )
				{
					$array_cat_i = $global_photo_cat[$parent_id];
					$array_mod_title[] = array(
						'category_id' => $parent_id,
						'title' => $array_cat_i['name'],
						'link' => $array_cat_i['link']
					);
					sort( $array_mod_title, SORT_NUMERIC );
					$parent_id = $array_cat_i['parent_id'];
				}
			}else{
				if( isset( $array_op[1] ) and substr( $array_op[1], 0, 5 ) == 'page-' )
				{
					$page = intval( substr( $array_op[1], 5 ) );
				}
				$array_page = explode( '-', $array_op[0] );
				$album_id = intval( end( $array_page ) );
				$number = strlen( $album_id ) + 1;
				$alias_url = substr( $array_op[0], 0, -$number );
				if( $album_id > 0 and $alias_url != '' )
				{
					$op = 'detail_album';
				}

				
				$array_mod_title[] = array(
					'category_id' => $album_id,
					'title' => $global_photo_album[$album_id]['name'],
					'link' => $global_photo_album[$album_id]['link']
				);
			}
		}
		elseif( $count_op == 2 or substr( $array_op[2], 0, 5 ) == 'page-' )
		{
			if( isset( $array_op[2] ) and substr( $array_op[2], 0, 5 ) == 'page-' )
			{
				$page = intval( substr( $array_op[2], 5 ) );
			}
			$array_page = explode( '-', $array_op[1] );
			$album_id = intval( end( $array_page ) );
			$number = strlen( $album_id ) + 1;
			$alias_url = substr( $array_op[1], 0, -$number );
			if( $album_id > 0 and $alias_url != '' )
			{
				$op = 'detail_album';
			}

			$parent_id = $category_id;
			while( $parent_id > 0 )
			{
				$array_cat_i = $global_photo_cat[$parent_id];
				$array_mod_title[] = array(
					'category_id' => $parent_id,
					'title' => $array_cat_i['name'],
					'link' => $array_cat_i['link']
				);
				sort( $array_mod_title, SORT_NUMERIC );
				$parent_id = $array_cat_i['parent_id'];
			}
			$array_mod_title[] = array(
				'category_id' => $album_id,
				'title' => $global_photo_album[$album_id]['name'],
				'link' => $global_photo_album[$album_id]['link']
			);
		}
		elseif( $count_op == 3 )
		{
			$array_alid = explode( '-', $array_op[1] );
			$album_id = intval( end( $array_alid ) );
			$array_page = explode( '-', $array_op[2] );
			$row_id = intval( end( $array_page ) );
			$number = strlen( $row_id ) + 1;
			if( $row_id > 0 )
			{
				$op = 'detail';
				$parent_id = $category_id;
				while( $parent_id > 0 )
				{
					$array_cat_i = $global_photo_cat[$parent_id];
					$array_mod_title[] = array(
						'category_id' => $parent_id,
						'title' => $array_cat_i['name'],
						'link' => $array_cat_i['link']
					);
					sort( $array_mod_title, SORT_NUMERIC );
					$parent_id = $array_cat_i['parent_id'];
				}
				$array_mod_title[] = array(
					'category_id' => $album_id,
					'title' => $global_photo_album[$album_id]['name'],
					'link' => $global_photo_album[$album_id]['link']
				);
			}
		}
	
}

function gltJsonResponse( $error = array(), $data = array() )
{
	$contents = array(
		'jsonrpc' => '2.0',
		'error' => $error,
		'data' => $data,
	);

	header( 'Content-Type: application/json' );
	echo json_encode( $contents );
	die( );
}
