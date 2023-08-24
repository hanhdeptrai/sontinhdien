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

if (!nv_function_exists('tms_hotro')) {
    /**
     * @param string $module
     * @param array $data_block
     * @param array $lang_block
     * @return string
     */
    function tms_config_hotro($module, $data_block, $lang_block)
    {
        global $nv_Cache, $site_mods, $nv_Request;

        $html = '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">Chuyên mục</label>';
        $html .= '<div class="col-xs-8">';
        $html .= '<select name="config_blockid" class="form-control">';
        $sql = 'SELECT bid, title FROM ' . NV_PREFIXLANG . '_' . $site_mods[$module]['module_data'] . '_support ORDER BY title ASC';
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
    function tms_config_hotro_submit($module, $lang_block)
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
    function tms_hotro($block_config)
    {
        global $global_config, $db, $site_mods, $nv_Cache;

        $mod_name = $block_config['module'];
        if (isset($site_mods[$mod_name])) {
            $mod_file = $site_mods[$mod_name]['module_file'];
            $mod_upload = $site_mods[$mod_name]['module_upload'];
            $mod_data = $site_mods[$mod_name]['module_data'];

            $sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $mod_data . '_support_rows where bid='.$block_config['blockid'] . ' limit ' . $block_config['number_item'];
            $list = $nv_Cache->db($sql, '', $mod_name);

            if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $mod_file . '/block.hotro.tpl')) {
                $block_theme = $global_config['module_theme'];
            } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/modules/' . $mod_file . '/block.hotro.tpl')) {
                $block_theme = $global_config['site_theme'];
            } else {
                $block_theme = 'default';
            }

            $xtpl = new XTemplate('block.hotro.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/modules/' . $mod_file);
            $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
            $xtpl->assign('TEMPLATE', $block_theme);
          
            foreach ($list as $row) {
                
                $row['link'] =$row['link'];
                $row['image'] = !(empty($row['image'])) ? NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $mod_upload . '/' . $row['image'] : '';
               

                $xtpl->assign('ROW', $row);
                if (!empty($row['image'])) {
                    $xtpl->parse('main.loop.image');;
                }
                if (!empty($row['image_mobile'])) {
                    $xtpl->parse('main.loop.image_mobile');;
                }
                $xtpl->parse('main.loop');
                
           
            }
            $xtpl->parse('main');
            return $xtpl->text('main');
        }
    }
}

if (defined('NV_SYSTEM')) {
    $content = tms_hotro($block_config);
}
