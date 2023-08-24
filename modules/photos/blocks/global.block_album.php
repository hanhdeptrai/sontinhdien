<?php

/**
 * @Project PHOTOS 4.x
 * @Author KENNY NGUYEN (nguyentiendat713@gmail.com)
 * @Copyright (C) 2015 tradacongnghe.com. All rights reserved
 * @Based on NukeViet CMS
 * @License GNU/GPL version 2 or any later version
 * @Createdate  Fri, 18 Sep 2015 11:52:59 GMT
 */

if( !defined( 'NV_MAINFILE' ) )
	die( 'Stop!!!' );

if( !nv_function_exists( 'photos_thumbs' ) )
{
	function photos_thumbs( $id, $file, $module_upload, $width = 270, $height = 210, $quality = 90 )
	{
		if( $width >= $height )
			$rate = $width / $height;
		else
			$rate = $height / $width;

		$image = NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/images/' . $file;

		if( $file != '' and file_exists( $image ) )
		{
			$imgsource = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/images/' . $file;
			$imginfo = nv_is_image( $image );

			$basename = $module_upload . '_' . $width . 'x' . $height . '-' . $id . '-' . md5_file( $image ) . '.' . $imginfo['ext'];

			if( file_exists( NV_ROOTDIR . '/' . NV_UPLOADS_DIR . '/' . $module_upload . '/thumbs/' . $basename ) )
			{
				$imgsource = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/thumbs/' . $basename;
			}
			else
			{

				$_image = new NukeViet\Files\Image( $image, NV_MAX_WIDTH, NV_MAX_HEIGHT );

				if( $imginfo['width'] <= $imginfo['height'] )
				{
					$_image->resizeXY( $width, 0 );

				}
				elseif( ($imginfo['width'] / $imginfo['height']) < $rate )
				{
					$_image->resizeXY( $width, 0 );
				}
				elseif( ($imginfo['width'] / $imginfo['height']) >= $rate )
				{
					$_image->resizeXY( 0, $height );
				}

				$_image->cropFromCenter( $width, $height );

				$_image->save( NV_ROOTDIR . '/' . NV_UPLOADS_DIR . '/' . $module_upload . '/thumbs/', $basename, $quality );

				if( file_exists( NV_ROOTDIR . '/' . NV_UPLOADS_DIR . '/' . $module_upload . '/thumbs/' . $basename ) )
				{
					$imgsource = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/thumbs/' . $basename;
				}
			}
		}
		elseif( nv_is_url( $file ) )
		{
			$imgsource = $file;
		}
		else
		{
			$imgsource = '';
		}
		return $imgsource;
	}

}

if( !nv_function_exists( 'nv_block_album' ) )
{
	function nv_block_config_album( $module, $data_block, $lang_block )
	{
		global $nv_Cache, $site_mods;
		$html = '';
		$html .= '<div class="form-group">';
		$html .= '<label class="control-label col-sm-6">' . $lang_block['album_id'] . '</label>';
		$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $site_mods[$module]['module_data'] . '_album ORDER BY date_added DESC';
		$list = $nv_Cache->db( $sql, '', $module );
		$html .= '<div class="col-sm-18">';
		foreach( $list as $l )
		{
			$xtitle_i = '';

			$html .= $xtitle_i . '<label><input type="checkbox" name="config_album[]" value="' . $l['album_id'] . '" ' . (( in_array( $l['album_id'], $data_block['album'] = !empty( $data_block['album'] ) ? $data_block['album'] : array( ) )) ? ' checked="checked"' : '') . '</input>' . $l['name'] . '</label><br />';
		}
		$html .= '</div>';
		$html .= '</div>';
		


		$html .= '<div class="form-group">';
		$html .= '<label class="control-label col-sm-6">' . $lang_block['numrow'] . '</label>';
		$html .= '<div class="col-sm-18"><input type="text" class="form-control w200" name="config_numrow" size="5" value="' . $data_block['numrow'] . '"/></div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="control-label col-sm-6">' . $lang_block['title_length'] . '</label>';
		$html .= '<div class="col-sm-18"><input type="text" class="form-control w200" name="config_title_length" size="5" value="' . $data_block['title_length'] . '"/></div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="control-label col-sm-6">' . $lang_block['width'] . '</label>';
		$html .= '<div class="col-sm-18"><input type="number" class="form-control w200" name="config_width" size="5" value="' . $data_block['width'] . '"/></div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="control-label col-sm-6">' . $lang_block['height'] . '</label>';
		$html .= '<div class="col-sm-18"><input type="number" class="form-control w200" name="config_height" size="5" value="' . $data_block['height'] . '"/></div>';
		$html .= '</div>';

		$html .= '<div class="form-group">';
		$html .= '<label class="control-label col-sm-6">' . $lang_block['gallery_mode'] . '</label>';
		$html .= '<div class="col-sm-18"><input type="checkbox" value="1" name="config_gallery_mode" ' . ($data_block['gallery_mode'] == 1 ? 'checked="checked"' : '') . ' /></div>';
		$html .= '</div>';
		
		$html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">Mô tả:</label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="text" value="' . nv_htmlspecialchars($data_block['text']) . '"></div>';
        $html .= '</div>';
		return $html;
	}

	function nv_block_config_album_submit( $module, $lang_block )
	{
		global $nv_Request;
		$return = array( );
		$return['error'] = array( );
		$return['config'] = array( );
		$return['config']['album'] = $nv_Request->get_array( 'config_album', 'post', array( ) );
		$return['config']['numrow'] = $nv_Request->get_int( 'config_numrow', 'post', 0 );
		$return['config']['title_length'] = $nv_Request->get_int( 'config_title_length', 'post', 0 );
		$return['config']['width'] = $nv_Request->get_int( 'config_width', 'post', 0 );
		$return['config']['height'] = $nv_Request->get_int( 'config_height', 'post', 0 );
		$return['config']['gallery_mode'] = $nv_Request->get_int( 'config_gallery_mode', 'post', 0 );
		$return['config']['text'] = $nv_Request->get_title('text', 'post');
		return $return;
	}

	function nv_block_album( $block_config )
	{
		global $nv_Cache, $module_photo_category, $module_info, $site_mods, $module_config, $global_config,$lang_module, $db, $blockID;

		$module = $block_config['module'];
		$album_id = implode( ',', $block_config['album'] );
		
		$thumb_width = !empty( $block_config['width'] ) ? $block_config['width'] : $module_config[$module]['cr_thumb_width'];
		$thumb_height = !empty( $block_config['height'] ) ? $block_config['height'] : $module_config[$module]['cr_thumb_height'];
		$thumb_quality = $module_config[$module]['cr_thumb_quality'];

		$mod_data = $site_mods[$module]['module_data'];
		$mod_file = $site_mods[$module]['module_file'];
		if( $block_config['album'] > 0 )
		{
			$db->sqlreset( )->select( 'a.album_id, a.category_id, a.name, a.alias, a.capturelocal, a.description, a.num_photo, a.date_added, a.capturedate, r.file, r.thumb' )->from( NV_PREFIXLANG . '_' . $mod_data . '_album a LEFT JOIN  ' . NV_PREFIXLANG . '_' . $mod_data . '_rows r ON ( a.album_id = r.album_id )' )->where( 'a.status= 1 AND a.album_id IN(' . $album_id . ') AND r.defaults = 1' )->order( 'a.date_added ASC' );

			$list = $nv_Cache->db( $db->sql( ), 'album_id', $module );
		}
		if( !empty( $list ) )
		{
			$array_data = array( );
			foreach( $list as $album_id => $album )
			{
				$db->sqlreset( )->select( '*' )->from( NV_PREFIXLANG . '_' . $mod_data . '_rows' )->where( 'status=1 AND album_id =' . $album['album_id'] )->limit( $block_config['numrow'] );

				$photo = $db->query( $db->sql( ) );

				$array_photos = array( );
				while( $row = $photo->fetch( ) )
				{
					$row['thumb'] = photos_thumbs( $row['row_id'], $row['file'], $site_mods[$module]['module_upload'], $thumb_width, $thumb_height, 90 );
					$row['file'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $site_mods[$module]['module_upload'] . '/images/' . $row['file'];
					$row['link'] = $module_photo_category[$album['category_id']]['link'] . '/' . $album['alias'] . '-' . $row['album_id'] . '/' . $row['row_id'] . $global_config['rewrite_exturl'];
					$array_photos[] = $row;
				}

				$array_data[$album_id] = array(
					'album_id' => $album_id,
					'link_album' =>  $module_photo_category[$album['category_id']]['link'] . '/' . $album['alias'] . '-' . $album_id . $global_config['rewrite_exturl'],
					'name' => $album['name'],
					'name_cut' => nv_clean60( $album['name'], $block_config['title_length'] ),
					'alias' => $album['alias'],
					'photos' => $array_photos
				);
			}

			if( file_exists( NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $mod_file . '/block_album.tpl' ) )
			{
				$block_theme = $global_config['module_theme'];
			}
			else
			{
				$block_theme = 'default';
			}
			// Language
            if (file_exists(NV_ROOTDIR . '/modules/'.$site_mods[$module]['module_file'].'/language/' . NV_LANG_DATA . '.php')) {
                require_once NV_ROOTDIR . '/modules/'.$site_mods[$module]['module_file'].'/language/' . NV_LANG_DATA . '.php';
            }
		
			
			$xtpl = new XTemplate( 'block_album.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/modules/' . $mod_file );
			$xtpl->assign( 'BLOCK_ID', $blockID );
			$xtpl->assign( 'MODULE_FILE', $mod_file );
			$xtpl->assign('LANG', $lang_module);
			$xtpl->assign( 'TEMPLATE', $block_theme );
			$xtpl->assign( 'TEXT',  $block_config['text'] );    
			$xtpl->assign( 'BLOCK_TITLE',  $block_config['title'] );		
			if( !empty( $array_data ) )
			{
				foreach( $array_data as $album_id => $data )
				{
					$xtpl->assign( 'TABS', $data );
					$xtpl->parse( 'main.tabs' );

					if( !empty( $data['photos'] ) )
					{
						if( $block_config['gallery_mode'] == 1 )
						{
							foreach( $data['photos'] as $photo )
							{
								$xtpl->assign( 'DATA', $photo );
								$xtpl->parse( 'main.tabs_data.gallery' );
							}
							$xtpl->parse( 'main.gallery_template' );
						}
						else
						{
							foreach( $data['photos'] as $photo )
							{
								$xtpl->assign( 'DATA', $photo );
								$xtpl->parse( 'main.tabs_data.loop' );
							}
						}
						$xtpl->parse( 'main.tabs_data' );
					}
				}
			}

			$xtpl->parse( 'main' );
			return $xtpl->text( 'main' );
		}
	}

}
if( defined( 'NV_SYSTEM' ) )
{
	global $nv_Cache, $site_mods, $module_name, $global_photo_cat, $module_photo_category;
	$module = $block_config['module'];
	if( isset( $site_mods[$module] ) )
	{
		if( $module == $module_name )
		{
			$module_photo_category = $global_photo_cat;
			unset( $module_photo_category[0] );
		}
		else
		{
			$module_photo_category = array( );
			$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $site_mods[$module]['module_data'] . '_category ORDER BY sort_order ASC';
			$list = $nv_Cache->db( $sql, 'category_id', $module );
			foreach( $list as $l )
			{
				$module_photo_category[$l['category_id']] = $l;
				$module_photo_category[$l['category_id']]['link'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module . '&amp;' . NV_OP_VARIABLE . '=' . $l['alias'];
			}
		}
		$content = nv_block_album( $block_config );
	}
}
