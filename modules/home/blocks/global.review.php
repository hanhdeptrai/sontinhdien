<?php

/**
 * @Project TMS Holdings
 * @Author TMS Holdings <contact@tms.vn>
 * @Copyright (C) 2019 TMS Holdings. All rights reserved
 * @License: Not free read more http://tms.vn/vi/store/modules/nvtools/
 * @Createdate Thu, 22 Aug 2019 14:58:08 GMT
 */

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

if (!nv_function_exists('nvb_review')) {
    /**
     * @param string $module
     * @param array $data_block
     * @param array $lang_block
     * @return string
     */
    function nvb_config_review($module, $data_block, $lang_block)
    {
        global $nv_Cache, $site_mods, $nv_Request;

		$html = '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">Chuyên mục</label>';
        $html .= '<div class="col-xs-8">';
        $html .= '<select name="config_blockid" class="form-control">';
        $sql = 'SELECT bid, title FROM ' . NV_PREFIXLANG . '_' . $site_mods[$module]['module_data'] . '_slider ORDER BY title ASC';
        $list = $nv_Cache->db($sql, '', $module);
        foreach ($list as $row) {
            $html .= '<option value="' . $row['bid'] . '"' . ($row['bid'] == $data_block['blockid'] ? ' selected="selected"' : '') . '>' . $row['title'] . '</option>';
        }
        $html .= '</select>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_block['number_item'] . ':</label>';
        $html .= '<div class="col-sm-9"><select name="config_number_item" class="form-control">';
        for ($i = 0; $i < 20; ++$i) {
            $html .= '<option value="' . $i . '"' . ($data_block['number_item'] == $i ? ' selected="selected"' : '') . '> ' . $i . ' </option>';
        }
        $html .= "</select></div>";
        $html .= '</div>';
        $html . '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_block['title_length'] . ':</label>';
        $html .= '<div class="col-sm-9"><input type="text" class="form-control" name="config_title_length" value="' . $data_block['title_length'] . '"/></div>';
        $html .= '</div>';

        return $html;
    }

    /**
     * @param string $module
     * @param array $lang_block
     * @return number
     */
    function nvb_config_review_submit($module, $lang_block)
    {
        global $nv_Request;

        $return = array();
        $return['error'] = array();
        $return['config'] = array();
        $return['config']['blockid'] = $nv_Request->get_int('config_blockid', 'post', 0); 
		$return['config']['number_item'] = $nv_Request->get_int('config_number_item', 'post', 0);
        $return['config']['title_length'] = $nv_Request->get_int('config_title_length', 'post', 0);
        return $return;
    }

    /**
     * @param array $block_config
     * @return string
     */
    function nvb_review($block_config)
    {
        global $global_config,$db_slave, $db, $site_mods, $nv_Cache;

        $mod_name = $block_config['module'];
        if (isset($site_mods[$mod_name])) {
            $mod_file = $site_mods[$mod_name]['module_file'];
            $mod_upload = $site_mods[$mod_name]['module_upload'];
            $mod_data = $site_mods[$mod_name]['module_data'];


            $sql = 'SELECT title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status FROM ' . NV_PREFIXLANG . '_' . $mod_data . '_slider_rows where bid='.$block_config['blockid'];
            $list = $nv_Cache->db($sql, '', $mod_name);

            if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $mod_file . '/global.review.tpl')) {
                $block_theme = $global_config['module_theme'];
            } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/modules/' . $mod_file . '/global.review.tpl')) {
                $block_theme = $global_config['site_theme'];
            } else {
                $block_theme = 'default';
            }

            $xtpl = new XTemplate('global.review.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/modules/' . $mod_file);
            $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
            $xtpl->assign('TEMPLATE', $block_theme); 
			
			$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $mod_data . '_slider where bid='.$block_config['blockid'];
		    $catslider = $db->query($sql)->fetch();
			$xtpl->assign('BLOCK_TITLE', $catslider['title']);
			$xtpl->assign('BLOCK_HOME_TEXT', $catslider['description']);
			
			$i=1;
            foreach ($list as $row) {
                $row['title_link'] = $row['title_link'];
                $row['link'] =$row['link']; 
				$row['description'] =$row['description'];
                $row['image'] = !(empty($row['image'])) ? NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $mod_upload . '/' . $row['image'] : '';
                $row['image_mobile'] = !(empty($row['image_mobile'])) ? NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $mod_upload . '/' . $row['image_mobile'] : '';

                $xtpl->assign('ROW', $row);
                if (!empty($row['image'])) {
                    $xtpl->parse('main.loop.image');
                }
                if (!empty($row['image_mobile'])) {
                    $xtpl->parse('main.loop.image_mobile');
                }
			
              
			  $xtpl->parse('main.loop');
				$xtpl->parse('main.loop_top');
				
				++$i;
            }
            $xtpl->parse('main');
            return $xtpl->text('main');
        }
    }
}

if (defined('NV_SYSTEM')) {
    $content = nvb_review($block_config);
}
