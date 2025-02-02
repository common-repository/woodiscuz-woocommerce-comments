<div>
    <h2 style="padding:5px 10px 10px 10px; margin:0px;"><?php _e('Background and Colors', 'woodiscuz-woocommerce-comments'); ?></h2>
    <table class="wp-list-table widefat plugins"  style="margin-top:10px; border:none;">
        <tbody>
            <tr valign="top">
                <th scope="row" style="width:55%;">
                    <label for="wpc_comment_text_size"><?php _e('Comment text size in pixels', 'woodiscuz-woocommerce-comments'); ?></label>
                </th>
                <td colspan="3">
                    <select id="wpc_comment_text_size" name="wpc_comment_text_size">
                        <?php $wpc_comment_text_size = isset($this->wpc_options_serialized->wpc_comment_text_size) ? $this->wpc_options_serialized->wpc_comment_text_size : '14px'; ?>            
                        <option value="12px" <?php selected($wpc_comment_text_size, '12px'); ?>>12px</option>
                        <option value="13px" <?php selected($wpc_comment_text_size, '13px'); ?>>13px</option>
                        <option value="14px" <?php selected($wpc_comment_text_size, '14px'); ?>>14px</option>
                        <option value="15px" <?php selected($wpc_comment_text_size, '15px'); ?>>15px</option>
                        <option value="16px" <?php selected($wpc_comment_text_size, '16px'); ?>>16px</option>
                    </select>
                </td>
            </tr>
            <tr valign="top" class="wpc-row-light">
                <th scope="row" style="width:55%;">
                    <label for="wpc_form_bg_color"><?php _e('Comment Form Background Color', 'woodiscuz-woocommerce-comments'); ?></label>
                </th>
                <td width="1">
                    <input type="text" class="regular-text" value="<?php echo isset($this->wpc_options_serialized->wpc_form_bg_color) ? esc_attr($this->wpc_options_serialized->wpc_form_bg_color) : '#f9f9f9'; ?>" id="wpc_form_bg_color" name="wpc_form_bg_color" placeholder="<?php _e('Example: #00ff00', 'woodiscuz-woocommerce-comments'); ?>"/>
                </td>
                <td class="picker_img_cell">
                    <a href="#wpc_openModal4">
                        <img class="wpc_colorpicker_img4" src="<?php echo plugins_url(WOODISCUZ_DIR_NAME . '/files/third-party/colorpicker/img/colorpicker_icon_22.png'); ?>" />
                    </a>
                </td>
                <td class="color_picker">
                    <div id="wpc_openModal4" class="modalDialog">
                        <div id="wpc_box4">
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Color Picker</h2>
                            <p id="wpc_colorpickerHolder4"></p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="top" class="wpc-row-light">
                <th scope="row" style="width:55%;">
                    <label for="wpc_comment_bg_color"><?php _e('Comment Background Color', 'woodiscuz-woocommerce-comments'); ?></label>
                </th>
                <td width="1">
                    <input type="text" class="regular-text" value="<?php echo esc_attr($this->wpc_options_serialized->wpc_comment_bg_color); ?>" id="wpc_comment_bg_color" name="wpc_comment_bg_color" placeholder="<?php _e('Example: #00ff00', 'woodiscuz-woocommerce-comments'); ?>"/>
                </td>
                <td class="picker_img_cell">
                    <a href="#wpc_openModal1">
                        <img class="wpc_colorpicker_img1" src="<?php echo plugins_url(WOODISCUZ_DIR_NAME . '/files/third-party/colorpicker/img/colorpicker_icon_22.png'); ?>" />
                    </a>
                </td>
                <td class="color_picker">
                    <div id="wpc_openModal1" class="modalDialog">
                        <div id="wpc_box1">
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Color Picker</h2>
                            <p id="wpc_colorpickerHolder1"></p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="top" class="wpc-row-dark">
                <th scope="row" style="width:55%;">
                    <label for="wpc_reply_bg_color"><?php _e('Reply Background Color', 'woodiscuz-woocommerce-comments'); ?></label>
                </th>
                <td>
                    <input type="text" class="regular-text" value="<?php echo esc_attr($this->wpc_options_serialized->wpc_reply_bg_color); ?>" id="wpc_reply_bg_color" name="wpc_reply_bg_color" placeholder="<?php _e('Example: #00ff00', 'woodiscuz-woocommerce-comments'); ?>"/>
                </td>
                <td class="picker_img_cell">
                    <a href="#wpc_openModal2">
                        <img class="wpc_colorpicker_img2" src="<?php echo plugins_url(WOODISCUZ_DIR_NAME . '/files/third-party/colorpicker/img/colorpicker_icon_22.png'); ?>" />
                    </a>
                </td>
                <td class="color_picker">
                    <div id="wpc_openModal2" class="modalDialog">
                        <div id="wpc_box2">
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Color Picker</h2>
                            <p id="wpc_colorpickerHolder2"></p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="top" class="wpc-row-light">
                <th scope="row" style="width:55%;">
                    <label for="wpc_comment_text_color"><?php _e('Comment Text Color', 'woodiscuz-woocommerce-comments'); ?></label>
                </th>
                <td>
                    <input type="text" class="regular-text" value="<?php echo esc_attr($this->wpc_options_serialized->wpc_comment_text_color); ?>" id="wpc_comment_text_color" name="wpc_comment_text_color" placeholder="<?php _e('Example: #00ff00', 'woodiscuz-woocommerce-comments'); ?>"/>
                </td>
                <td class="picker_img_cell">
                    <a href="#wpc_openModal3">
                        <img class="wpc_colorpicker_img3" src="<?php echo plugins_url(WOODISCUZ_DIR_NAME . '/files/third-party/colorpicker/img/colorpicker_icon_22.png'); ?>" />
                    </a>
                </td>
                <td class="color_picker">
                    <div id="wpc_openModal3" class="modalDialog">
                        <div id="wpc_box3">
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Color Picker</h2>
                            <p id="wpc_colorpickerHolder3"></p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="top" class="wpc-row-light">
                <th scope="row" style="width:55%;">
                    <label for="wpc_member_role_color"><?php _e('Member Color', 'woodiscuz-woocommerce-comments'); ?></label>
                </th>
                <td>
                    <input type="text" class="regular-text" value="<?php echo esc_attr($this->wpc_options_serialized->wpc_member_role_color); ?>" id="wpc_member_role_color" name="wpc_member_role_color" placeholder="<?php _e('Example: #00ff00', 'woodiscuz-woocommerce-comments'); ?>"/>
                </td>
                <td class="picker_img_cell">
                    <a href="#wpc_openModal5">
                        <img class="wpc_colorpicker_img5" src="<?php echo plugins_url(WOODISCUZ_DIR_NAME . '/files/third-party/colorpicker/img/colorpicker_icon_22.png'); ?>" />
                    </a>
                </td>
                <td class="color_picker">
                    <div id="wpc_openModal5" class="modalDialog">
                        <div id="wpc_box5">
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Color Picker</h2>
                            <p id="wpc_colorpickerHolder5"></p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="top" class="wpc-row-light">
                <th scope="row" style="width:55%;">
                    <label for="wpc_support_role_color"><?php _e('Support Color', 'woodiscuz-woocommerce-comments'); ?></label>
                </th>
                <td>
                    <input type="text" class="regular-text" value="<?php echo esc_attr($this->wpc_options_serialized->wpc_support_role_color); ?>" id="wpc_support_role_color" name="wpc_support_role_color" placeholder="<?php _e('Example: #00ff00', 'woodiscuz-woocommerce-comments'); ?>"/>
                </td>
                <td class="picker_img_cell">
                    <a href="#wpc_openModal6">
                        <img class="wpc_colorpicker_img6" src="<?php echo plugins_url(WOODISCUZ_DIR_NAME . '/files/third-party/colorpicker/img/colorpicker_icon_22.png'); ?>" />
                    </a>
                </td>
                <td class="color_picker">
                    <div id="wpc_openModal6" class="modalDialog">
                        <div id="wpc_box6">
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Color Picker</h2>
                            <p id="wpc_colorpickerHolder6"></p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="top" class="wpc-row-light">
                <th scope="row" style="width:55%;">
                    <label for="wpc_customer_role_color"><?php _e('Customer Color', 'woodiscuz-woocommerce-comments'); ?></label>
                </th>
                <td>
                    <input type="text" class="regular-text" value="<?php echo esc_attr($this->wpc_options_serialized->wpc_customer_role_color); ?>" id="wpc_customer_role_color" name="wpc_customer_role_color" placeholder="<?php _e('Example: #00ff00', 'woodiscuz-woocommerce-comments'); ?>"/>
                </td>
                <td class="picker_img_cell">
                    <a href="#wpc_openModal7">
                        <img class="wpc_colorpicker_img7" src="<?php echo plugins_url(WOODISCUZ_DIR_NAME . '/files/third-party/colorpicker/img/colorpicker_icon_22.png'); ?>" />
                    </a>
                </td>
                <td class="color_picker">
                    <div id="wpc_openModal7" class="modalDialog">
                        <div id="wpc_box7">
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Color Picker</h2>
                            <p id="wpc_colorpickerHolder7"></p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="top" class="wpc-row-light">
                <th scope="row" style="width:55%;">
                    <label for="wpc_guest_role_color"><?php _e('Guest Color', 'woodiscuz-woocommerce-comments'); ?></label>
                </th>
                <td>
                    <input type="text" class="regular-text" value="<?php echo esc_attr($this->wpc_options_serialized->wpc_guest_role_color); ?>" id="wpc_guest_role_color" name="wpc_guest_role_color" placeholder="<?php _e('Example: #00ff00', 'woodiscuz-woocommerce-comments'); ?>"/>
                </td>
                <td class="picker_img_cell">
                    <a href="#wpc_openModal8">
                        <img class="wpc_colorpicker_img8" src="<?php echo plugins_url(WOODISCUZ_DIR_NAME . '/files/third-party/colorpicker/img/colorpicker_icon_22.png'); ?>" />
                    </a>
                </td>
                <td class="color_picker">
                    <div id="wpc_openModal8" class="modalDialog">
                        <div id="wpc_box8">
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Color Picker</h2>
                            <p id="wpc_colorpickerHolder8"></p>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>