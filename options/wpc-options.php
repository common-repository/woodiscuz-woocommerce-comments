<?php

class WPC_Options {

    public $wpc_options_serialized;
    public $wpc_usergroups_for_support_title;
    public $wpc_db_helper;

    public function __construct($wpc_options_serialized, $wpc_db_helper) {
        $this->wpc_db_helper = $wpc_db_helper;
        $this->wpc_options_serialized = $wpc_options_serialized;
        $this->wpc_usergroups_for_support_title = $this->wpc_options_serialized->wpc_usergroups_for_support_title;
    }

    /**
     * Builds options page
     */
    public function main_options_form() {
        global $wp_roles;
        $roles = $wp_roles->get_names();



        if (empty($this->wpc_options_serialized->wpc_usergroups_for_support_title)) {
            $this->wpc_options_serialized->wpc_usergroups_for_support_title = array('administrator', 'shop_manager');
        }

        if (isset($_POST['wpc_submit_options'])) {

            if (function_exists('current_user_can') && !current_user_can('manage_options')) {
                die(_e('Hacker?', 'woodiscuz-woocommerce-comments'));
            }

            if (function_exists('check_admin_referer')) {
                check_admin_referer('wpc_options_form');
            }

            $this->wpc_options_serialized->wpc_comment_tab_priority = (isset($_POST['wpc_comment_tab_priority']) && abs(intval($_POST['wpc_comment_tab_priority'])) > 0) ? abs(intval($_POST['wpc_comment_tab_priority'])) : 1000;
            $this->wpc_options_serialized->wpc_tab_show_hide = isset($_POST['wpc_tab_show_hide']) ? intval($_POST['wpc_tab_show_hide']) : 0;
            $this->wpc_options_serialized->wpc_voting_buttons_show_hide = isset($_POST['wpc_voting_buttons_show_hide']) ? intval($_POST['wpc_voting_buttons_show_hide']) : 0;
            $this->wpc_options_serialized->wpc_share_buttons_show_hide = isset($_POST['wpc_share_buttons_show_hide']) ? intval($_POST['wpc_share_buttons_show_hide']) : 0;
            $this->wpc_options_serialized->wpc_captcha_show_hide = isset($_POST['wpc_captcha_show_hide']) ? intval($_POST['wpc_captcha_show_hide']) : 0;
            $this->wpc_options_serialized->wpc_is_name_field_required = isset($_POST['wpc_is_name_field_required']) ? intval($_POST['wpc_is_name_field_required']) : 0;
            $this->wpc_options_serialized->wpc_is_email_field_required = isset($_POST['wpc_is_email_field_required']) ? intval($_POST['wpc_is_email_field_required']) : 0;
            $this->wpc_options_serialized->wpc_reply_button_guests_show_hide = isset($_POST['wpc_reply_button_guests_show_hide']) ? intval($_POST['wpc_reply_button_guests_show_hide']) : 0;
            $this->wpc_options_serialized->wpc_reply_button_customers_show_hide = isset($_POST['wpc_reply_button_customers_show_hide']) ? intval($_POST['wpc_reply_button_customers_show_hide']) : 0;
            $this->wpc_options_serialized->wpc_reply_button_only_author_show = isset($_POST['wpc_reply_button_only_author_show']) ? intval($_POST['wpc_reply_button_only_author_show']) : 0;
            $this->wpc_options_serialized->wpc_author_titles_show_hide = isset($_POST['wpc_author_titles_show_hide']) ? intval($_POST['wpc_author_titles_show_hide']) : 0;
            $this->wpc_options_serialized->wpc_usergroups_for_support_title = isset($_POST['wpc_usergroups_for_support_title']) ? $_POST['wpc_usergroups_for_support_title'] : array('administrator');
            $this->wpc_options_serialized->woodiscuz_redirect_page = isset($_POST['woodiscuz_redirect_page']) ? intval($_POST['woodiscuz_redirect_page']) : 0;
            $this->wpc_options_serialized->wpc_comment_editable_time = isset($_POST['wpc_comment_editable_time']) ? intval($_POST['wpc_comment_editable_time']) : 900;
            $this->wpc_options_serialized->wpc_is_guest_can_vote = isset($_POST['wpc_is_guest_can_vote']) ? intval($_POST['wpc_is_guest_can_vote']) : 0;
            $this->wpc_options_serialized->wpc_simple_comment_date = isset($_POST['wpc_simple_comment_date']) ? intval($_POST['wpc_simple_comment_date']) : 0;
            $this->wpc_options_serialized->wpc_notify_comment_author = isset($_POST['wpc_notify_comment_author']) ? intval($_POST['wpc_notify_comment_author']) : 0;
            $this->wpc_options_serialized->wpc_request_for_comment = isset($_POST['wpc_request_for_comment']) ? intval($_POST['wpc_request_for_comment']) : 0;
            $this->wpc_options_serialized->wpc_comment_text_size = isset($_POST['wpc_comment_text_size']) ? sanitize_text_field($_POST['wpc_comment_text_size']) : '14px';
            $this->wpc_options_serialized->wpc_form_bg_color = isset($_POST['wpc_form_bg_color']) ? sanitize_hex_color($_POST['wpc_form_bg_color']) : '#f9f9f9';
            $this->wpc_options_serialized->wpc_comment_bg_color = isset($_POST['wpc_comment_bg_color']) ? sanitize_hex_color($_POST['wpc_comment_bg_color']) : '#fefefe';
            $this->wpc_options_serialized->wpc_reply_bg_color = isset($_POST['wpc_reply_bg_color']) ? sanitize_hex_color($_POST['wpc_reply_bg_color']) : '#f8f8f8';
            $this->wpc_options_serialized->wpc_comment_text_color = isset($_POST['wpc_comment_text_color']) ? sanitize_hex_color($_POST['wpc_comment_text_color']) : '#555';
            $this->wpc_options_serialized->wpc_member_role_color = isset($_POST['wpc_member_role_color']) ? sanitize_hex_color($_POST['wpc_member_role_color']) : '#ad74a2';
            $this->wpc_options_serialized->wpc_support_role_color = isset($_POST['wpc_support_role_color']) ? sanitize_hex_color($_POST['wpc_support_role_color']) : '#ad74a2';
            $this->wpc_options_serialized->wpc_customer_role_color = isset($_POST['wpc_customer_role_color']) ? sanitize_hex_color($_POST['wpc_customer_role_color']) : '#ad74a2';
            $this->wpc_options_serialized->wpc_guest_role_color = isset($_POST['wpc_guest_role_color']) ? sanitize_hex_color($_POST['wpc_guest_role_color']) : '#ad74a2';
            $this->wpc_options_serialized->wpc_is_use_po_mo = isset($_POST['wpc_is_use_po_mo']) ? intval($_POST['wpc_is_use_po_mo']) : 0;
            $this->wpc_options_serialized->wpc_reply_subscription_on_off = isset($_POST['wpc_reply_subscription_on_off']) ? intval($_POST['wpc_reply_subscription_on_off']) : 0;
            $this->wpc_options_serialized->wpc_show_plugin_powered_by = isset($_POST['wpc_show_plugin_powered_by']) ? intval($_POST['wpc_show_plugin_powered_by']) : 0;
            $this->wpc_options_serialized->update_options();
        }
        ?>

        <div class="wrap woodiscuz_options_page">

            <div style="float:left; width:50px; height:55px; margin:10px 10px 20px 0px;">
                <img src="<?php echo plugins_url(WOODISCUZ_DIR_NAME . '/files/img/plugin-icon/plugin-icon-48.png'); ?>" style="height:43px;"/>
            </div>
            <h2 style="padding-bottom:20px; padding-top:15px;"><?php _e('WooDiscuz General Settings', 'woodiscuz-woocommerce-comments'); ?></h2>
            <br style="clear:both" />
            <?php
            if (isset($_GET['woodiscuz_reset_options']) && $_GET['woodiscuz_reset_options'] == 1 && current_user_can('manage_options')) {
                delete_option($this->wpc_options_serialized->wpc_options_slug);
                $this->wpc_options_serialized->add_options();
                $this->wpc_options_serialized->init_options(get_option($this->wpc_options_serialized->wpc_options_slug));
                $this->wpc_options_serialized->wpc_show_plugin_powered_by = 1;
                $this->wpc_options_serialized->update_options();
            }
            ?>

            <form action="<?php echo admin_url(); ?>admin.php?page=woodiscuz_options_page&updated=true" method="post" name="woodiscuz_options_page" class="wpc-main-settings-form wpc-form">
                <?php
                if (function_exists('wp_nonce_field')) {
                    wp_nonce_field('wpc_options_form');
                }
                ?>

                <div id="parentHorizontalTab">
                    <ul class="resp-tabs-list hor_1">
                        <li><?php _e('General settings', 'woodiscuz-woocommerce-comments'); ?></li>
                        <li><?php _e('Show/Hide Components', 'woodiscuz-woocommerce-comments'); ?></li>
                        <li><?php _e('Background and Colors', 'woodiscuz-woocommerce-comments'); ?></li>
                    </ul>
                    <div class="resp-tabs-container hor_1">                            
                        <?php
                        include 'options-layouts/settings-general.php';
                        include 'options-layouts/settings-show-hide.php';
                        include 'options-layouts/settings-style.php';
                        ?>
                    </div>
                </div>

                <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        //Horizontal Tab
                        $('#parentHorizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion
                            width: 'auto', //auto or any width like 600px
                            fit: true, // 100% fit in a container
                            tabidentify: 'hor_1', // The tab groups identifier
                        });
                    });
                </script>

                <table class="form-table wpc-form-table">
                    <tbody>
                        <tr valign="top">
                            <td colspan="4">                                
                                <p class="submit">
									<a style="float: left;" class="button button-secondary" href="<?php echo admin_url(); ?>admin.php?page=woodiscuz_options_page&woodiscuz_reset_options=1"><?php _e('Reset Options', 'woodiscuz-woocommerce-comments'); ?></a>
                                    <input type="submit" style="float:right;" class="button button-primary" name="wpc_submit_options" value="<?php _e('Save Changes', 'woodiscuz-woocommerce-comments'); ?>" />
                                </p>
                            </td>
                        </tr>
                    <input type="hidden" name="action" value="update" />
                    </tbody>
                </table>
            </form>            
        </div>

        <?php
    }

    public function phrases_options_form() {

        if (isset($_POST['wpc_submit_phrases'])) {

            if (function_exists('current_user_can') && !current_user_can('manage_options')) {
                die(_e('Hacker?', 'woodiscuz-woocommerce-comments'));
            }

            if (function_exists('check_admin_referer')) {
                check_admin_referer('wpc_phrases_form');
            }

            $this->wpc_options_serialized->wpc_phrases['wpc_discuss_tab'] = isset($_POST['wpc_discuss_tab']) ? sanitize_text_field($_POST['wpc_discuss_tab']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_header_text'] = isset($_POST['wpc_header_text']) ? sanitize_text_field($_POST['wpc_header_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_comment_start_text'] = isset($_POST['wpc_comment_start_text']) ? sanitize_text_field($_POST['wpc_comment_start_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_comment_join_text'] = isset($_POST['wpc_comment_join_text']) ? sanitize_text_field($_POST['wpc_comment_join_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_email_text'] = isset($_POST['wpc_email_text']) ? sanitize_text_field($_POST['wpc_email_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_name_text'] = isset($_POST['wpc_name_text']) ? sanitize_text_field($_POST['wpc_name_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_captcha_text'] = isset($_POST['wpc_captcha_text']) ? sanitize_text_field($_POST['wpc_captcha_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_submit_text'] = isset($_POST['wpc_submit_text']) ? sanitize_text_field($_POST['wpc_submit_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_load_more_submit_text'] = isset($_POST['wpc_load_more_submit_text']) ? sanitize_text_field($_POST['wpc_load_more_submit_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_reply_text'] = isset($_POST['wpc_reply_text']) ? sanitize_text_field($_POST['wpc_reply_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_share_text'] = isset($_POST['wpc_share_text']) ? sanitize_text_field($_POST['wpc_share_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_edit_text'] = isset($_POST['wpc_edit_text']) ? sanitize_text_field($_POST['wpc_edit_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_comment_edit_cancel_button'] = isset($_POST['wpc_comment_edit_cancel_button']) ? sanitize_text_field($_POST['wpc_comment_edit_cancel_button']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_comment_edit_save_button'] = isset($_POST['wpc_comment_edit_save_button']) ? sanitize_text_field($_POST['wpc_comment_edit_save_button']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_share_facebook'] = isset($_POST['wpc_share_facebook']) ? sanitize_text_field($_POST['wpc_share_facebook']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_share_twitter'] = isset($_POST['wpc_share_twitter']) ? sanitize_text_field($_POST['wpc_share_twitter']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_share_google'] = isset($_POST['wpc_share_google']) ? sanitize_text_field($_POST['wpc_share_google']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_share_vk'] = isset($_POST['wpc_share_vk']) ? sanitize_text_field($_POST['wpc_share_vk']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_share_ok'] = isset($_POST['wpc_share_ok']) ? sanitize_text_field($_POST['wpc_share_ok']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_hide_replies_text'] = isset($_POST['wpc_hide_replies_text']) ? sanitize_text_field($_POST['wpc_hide_replies_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_show_replies_text'] = isset($_POST['wpc_show_replies_text']) ? sanitize_text_field($_POST['wpc_show_replies_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_user_title_guest_text'] = isset($_POST['wpc_user_title_guest_text']) ? sanitize_text_field($_POST['wpc_user_title_guest_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_user_title_member_text'] = isset($_POST['wpc_user_title_member_text']) ? sanitize_text_field($_POST['wpc_user_title_member_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_user_title_customer_text'] = isset($_POST['wpc_user_title_customer_text']) ? sanitize_text_field($_POST['wpc_user_title_customer_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_user_title_support_text'] = isset($_POST['wpc_user_title_support_text']) ? sanitize_text_field($_POST['wpc_user_title_support_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_email_subject'] = isset($_POST['wpc_email_subject']) ? sanitize_text_field($_POST['wpc_email_subject']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_email_message'] = isset($_POST['wpc_email_message']) ? sanitize_textarea_field($_POST['wpc_email_message']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_request_reply_subject'] = isset($_POST['wpc_request_reply_subject']) ? sanitize_text_field($_POST['wpc_request_reply_subject']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_request_reply_message'] = isset($_POST['wpc_request_reply_message']) ? sanitize_textarea_field($_POST['wpc_request_reply_message']) : '';

            $this->wpc_options_serialized->wpc_phrases['wpc_error_empty_text'] = isset($_POST['wpc_error_empty_text']) ? sanitize_text_field($_POST['wpc_error_empty_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_error_email_text'] = isset($_POST['wpc_error_email_text']) ? sanitize_text_field($_POST['wpc_error_email_text']) : '';

            $this->wpc_options_serialized->wpc_phrases['wpc_year_text']['datetime'][0] = isset($_POST['wpc_year_text']) ? sanitize_text_field($_POST['wpc_year_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_year_text_plural']['datetime'][0] = isset($_POST['wpc_year_text_plural']) ? sanitize_text_field($_POST['wpc_year_text_plural']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_month_text']['datetime'][0] = isset($_POST['wpc_month_text']) ? sanitize_text_field($_POST['wpc_month_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_month_text_plural']['datetime'][0] = isset($_POST['wpc_month_text_plural']) ? sanitize_text_field($_POST['wpc_month_text_plural']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_day_text']['datetime'][0] = isset($_POST['wpc_day_text']) ? sanitize_text_field($_POST['wpc_day_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_day_text_plural']['datetime'][0] = isset($_POST['wpc_day_text_plural']) ? sanitize_text_field($_POST['wpc_day_text_plural']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_hour_text']['datetime'][0] = isset($_POST['wpc_hour_text']) ? sanitize_text_field($_POST['wpc_hour_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_hour_text_plural']['datetime'][0] = isset($_POST['wpc_hour_text_plural']) ? sanitize_text_field($_POST['wpc_hour_text_plural']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_minute_text']['datetime'][0] = isset($_POST['wpc_minute_text']) ? sanitize_text_field($_POST['wpc_minute_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_minute_text_plural']['datetime'][0] = isset($_POST['wpc_minute_text_plural']) ? sanitize_text_field($_POST['wpc_minute_text_plural']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_second_text']['datetime'][0] = isset($_POST['wpc_second_text']) ? sanitize_text_field($_POST['wpc_second_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_second_text_plural']['datetime'][0] = isset($_POST['wpc_second_text_plural']) ? sanitize_text_field($_POST['wpc_second_text_plural']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_plural_text'] = isset($_POST['wpc_plural_text']) ? sanitize_text_field($_POST['wpc_plural_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_right_now_text'] = isset($_POST['wpc_right_now_text']) ? sanitize_text_field($_POST['wpc_right_now_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_ago_text'] = isset($_POST['wpc_ago_text']) ? sanitize_text_field($_POST['wpc_ago_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_posted_today_text'] = isset($_POST['wpc_posted_today_text']) ? sanitize_text_field($_POST['wpc_posted_today_text']) : '';

            $this->wpc_options_serialized->wpc_phrases['wpc_you_must_be_text'] = isset($_POST['wpc_you_must_be_text']) ? sanitize_text_field($_POST['wpc_you_must_be_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_logged_in_text'] = isset($_POST['wpc_logged_in_text']) ? sanitize_text_field($_POST['wpc_logged_in_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_to_post_comment_text'] = isset($_POST['wpc_to_post_comment_text']) ? sanitize_text_field($_POST['wpc_to_post_comment_text']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_vote_counted'] = isset($_POST['wpc_vote_counted']) ? sanitize_text_field($_POST['wpc_vote_counted']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_vote_up'] = isset($_POST['wpc_vote_up']) ? sanitize_text_field($_POST['wpc_vote_up']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_vote_down'] = isset($_POST['wpc_vote_down']) ? sanitize_text_field($_POST['wpc_vote_down']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_held_for_moderate'] = isset($_POST['wpc_held_for_moderate']) ? sanitize_text_field($_POST['wpc_held_for_moderate']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_vote_only_one_time'] = isset($_POST['wpc_vote_only_one_time']) ? sanitize_text_field($_POST['wpc_vote_only_one_time']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_voting_error'] = isset($_POST['wpc_voting_error']) ? sanitize_text_field($_POST['wpc_voting_error']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_self_vote'] = isset($_POST['wpc_self_vote']) ? sanitize_text_field($_POST['wpc_self_vote']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_login_to_vote'] = isset($_POST['wpc_login_to_vote']) ? sanitize_text_field($_POST['wpc_login_to_vote']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_invalid_captcha'] = isset($_POST['wpc_invalid_captcha']) ? sanitize_text_field($_POST['wpc_invalid_captcha']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_invalid_field'] = isset($_POST['wpc_invalid_field']) ? sanitize_text_field($_POST['wpc_invalid_field']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_comment_not_updated'] = isset($_POST['wpc_comment_not_updated']) ? sanitize_text_field($_POST['wpc_comment_not_updated']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_comment_edit_not_possible'] = isset($_POST['wpc_comment_edit_not_possible']) ? sanitize_text_field($_POST['wpc_comment_edit_not_possible']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_comment_not_edited'] = isset($_POST['wpc_comment_not_edited']) ? sanitize_text_field($_POST['wpc_comment_not_edited']) : '';

            $this->wpc_options_serialized->wpc_phrases['wpc_notify_on_new_reply'] = isset($_POST['wpc_notify_on_new_reply']) ? sanitize_text_field($_POST['wpc_notify_on_new_reply']) : '';

            $this->wpc_options_serialized->wpc_phrases['wpc_confirm_email_subject'] = isset($_POST['wpc_confirm_email_subject']) ? sanitize_text_field($_POST['wpc_confirm_email_subject']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_confirm_email_message'] = isset($_POST['wpc_confirm_email_message']) ? sanitize_textarea_field($_POST['wpc_confirm_email_message']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_confirm_email'] = isset($_POST['wpc_confirm_email']) ? sanitize_text_field($_POST['wpc_confirm_email']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_ignore_subscription'] = isset($_POST['wpc_ignore_subscription']) ? sanitize_text_field($_POST['wpc_ignore_subscription']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_unsubscribe_message'] = isset($_POST['wpc_unsubscribe_message']) ? sanitize_textarea_field($_POST['wpc_unsubscribe_message']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_confirm_success_message'] = isset($_POST['wpc_confirm_success_message']) ? sanitize_textarea_field($_POST['wpc_confirm_success_message']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_unsubscribe'] = isset($_POST['wpc_unsubscribe']) ? sanitize_text_field($_POST['wpc_unsubscribe']) : '';

            $this->wpc_options_serialized->wpc_phrases['wpc_new_reply_email_subject'] = isset($_POST['wpc_new_reply_email_subject']) ? sanitize_text_field($_POST['wpc_new_reply_email_subject']) : '';
            $this->wpc_options_serialized->wpc_phrases['wpc_new_reply_email_message'] = isset($_POST['wpc_new_reply_email_message']) ? sanitize_textarea_field($_POST['wpc_new_reply_email_message']) : '';

            $this->wpc_db_helper->update_phrases($this->wpc_options_serialized->wpc_phrases);
        }
        if ($this->wpc_db_helper->is_phrase_exists('wpc_discuss_tab')) {
            $this->wpc_options_serialized->wpc_phrases = $this->wpc_db_helper->get_phrases();
        }
        ?>
        <div class="wrap woodiscuz_options_page">

            <div style="float:left; width:50px; height:55px; margin:10px 10px 20px 0px;">
                <img src="<?php echo plugins_url(WOODISCUZ_DIR_NAME . '/files/img/plugin-icon/plugin-icon-48.png'); ?>" style="height:43px;"/>
            </div>
            <h2 style="padding-bottom:20px; padding-top:15px;"><?php _e('WooDiscuz Front-end Phrases', 'woodiscuz-woocommerce-comments'); ?></h2>
            <br style="clear:both" />
            <form action="<?php echo admin_url(); ?>admin.php?page=woodiscuz_phrases_page&updated=true" method="post" name="woodiscuz_phrases_page" class="wpc-phrases-settings-form wpc-form">
                <?php
                if (function_exists('wp_nonce_field')) {
                    wp_nonce_field('wpc_phrases_form');
                }
                ?>

                <div id="parentHorizontalTab1">
                    <ul class="resp-tabs-list hor_2">
                        <li><?php _e('General', 'woodiscuz-woocommerce-comments'); ?></li>
                        <li><?php _e('Form', 'woodiscuz-woocommerce-comments'); ?></li>
                        <li><?php _e('Comment', 'woodiscuz-woocommerce-comments'); ?></li>
                        <li><?php _e('Date/Time', 'woodiscuz-woocommerce-comments'); ?></li>
                        <li><?php _e('Email', 'woodiscuz-woocommerce-comments'); ?></li>
                        <li><?php _e('Notification', 'woodiscuz-woocommerce-comments'); ?></li>
                    </ul>
                    <div class="resp-tabs-container hor_2">  
                        <?php include 'phrases-layouts/phrases-general.php'; ?>
                        <?php include 'phrases-layouts/phrases-form.php'; ?>
                        <?php include 'phrases-layouts/phrases-comment.php'; ?>
                        <?php include 'phrases-layouts/phrases-datetime.php'; ?>
                        <?php include 'phrases-layouts/phrases-email.php'; ?>
                        <?php include 'phrases-layouts/phrases-notification.php'; ?>
                    </div>
                </div>
                <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        //Horizontal Tab
                        $('#parentHorizontalTab1').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion
                            width: 'auto', //auto or any width like 600px
                            fit: true, // 100% fit in a container
                            tabidentify: 'hor_2', // The tab groups identifier
                        });
                    });
                </script>                               

                <table class="form-table wpc-form-table">
                    <tbody>
                        <tr valign="top">
                            <td colspan="4">
                                <p class="submit">
                                    <input type="submit" class="button button-primary" name="wpc_submit_phrases" value="<?php _e('Save Changes', 'woodiscuz-woocommerce-comments'); ?>" />
                                </p>
                            </td>
                        </tr>
                    <input type="hidden" name="action" value="update" />
                    </tbody>
                </table>
            </form>

        </div>
        <?php
    }

}
?>