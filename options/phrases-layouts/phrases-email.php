<div>
    <h2 style="padding:5px 10px 10px 10px; margin:0px;"><?php _e('Email Template Phrases', 'woodiscuz-woocommerce-comments'); ?></h2>
    <table class="wp-list-table widefat plugins"  style="margin-top:10px; border:none;">
        <tbody>
            <tr valign="top">
                <th scope="row">
                    <?php _e('Email Subject', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">                                
                    <label for="wpc_email_subject">
                        <input type="text" value="<?php echo esc_attr($this->wpc_options_serialized->wpc_phrases['wpc_email_subject']); ?>" name="wpc_email_subject" id="wpc_email_subject" />
                    </label>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <?php _e('Email Message', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">                                
                    <label for="wpc_email_message">
                        <textarea name="wpc_email_message" id="wpc_email_message"><?php echo $this->wpc_options_serialized->wpc_phrases['wpc_email_message']; ?></textarea>            
                    </label>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <?php _e('Request for reply on purchased product ["subject"]', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">                                
                    <label for="wpc_request_reply_subject">
                        <input type="text" value="<?php echo esc_attr($this->wpc_options_serialized->wpc_phrases['wpc_request_reply_subject']); ?>" name="wpc_request_reply_subject" id="wpc_request_reply_subject" />
                    </label>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <?php _e('Request for reply on purchased product ["message"]', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">                                
                    <label for="wpc_request_reply_message">
                        <textarea name="wpc_request_reply_message" id="wpc_request_reply_message"><?php echo $this->wpc_options_serialized->wpc_phrases['wpc_request_reply_message']; ?></textarea>
                    </label>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?php _e('Unsubscribe', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">
                    <label for="wpc_unsubscribe">
                        <input type="text" name="wpc_unsubscribe" id="wpc_unsubscribe" class="wpc_unsubscribe" value="<?php echo esc_attr($this->wpc_options_serialized->wpc_phrases['wpc_unsubscribe']); ?>" placeholder="<?php echo _e('Unsubscribe', 'woodiscuz-woocommerce-comments'); ?>"/>
                    </label>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?php _e('Ignore Subscription', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">
                    <label for="wpc_ignore_subscription">
                        <input type="text" name="wpc_ignore_subscription" id="wpc_ignore_subscription" class="wpc_ignore_subscription" value="<?php echo isset($this->wpc_options_serialized->wpc_phrases['wpc_ignore_subscription']) ? esc_attr($this->wpc_options_serialized->wpc_phrases['wpc_ignore_subscription']) : esc_attr__('Ignore Subscription', 'woodiscuz-woocommerce-comments'); ?>" placeholder="<?php echo _e('Ignore Subscription', 'woodiscuz-woocommerce-comments'); ?>"/>
                    </label>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?php _e('Confirm your subscription', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">
                    <label for="wpc_confirm_email">
                        <input type="text" name="wpc_confirm_email" id="wpc_confirm_email" class="wpc_confirm_email" value="<?php echo isset($this->wpc_options_serialized->wpc_phrases['wpc_confirm_email']) ? esc_attr($this->wpc_options_serialized->wpc_phrases['wpc_confirm_email']) : __('Confirm your subscription', 'woodiscuz-woocommerce-comments'); ?>" placeholder="<?php echo _e('Confirm your subscription', 'woodiscuz-woocommerce-comments'); ?>"/>
                    </label>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <?php _e('You\'ve successfully confirmed your subscription.', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">
                    <label for="wpc_confirm_success_message">
                        <textarea name="wpc_confirm_success_message" id="wpc_confirm_success_message"><?php echo isset($this->wpc_options_serialized->wpc_phrases['wpc_confirm_success_message']) ? $this->wpc_options_serialized->wpc_phrases['wpc_confirm_success_message'] : __('You\'ve successfully confirmed your subscription.', 'woodiscuz-woocommerce-comments'); ?></textarea>
                    </label>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <?php _e('Subscribe Confirmation Email Subject', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">
                    <label for="wpc_confirm_email_subject">
                        <input type="text" name="wpc_confirm_email_subject" id="wpc_confirm_email_subject" class="wpc_confirm_email_subject" value="<?php echo isset($this->wpc_options_serialized->wpc_phrases['wpc_confirm_email_subject']) ? esc_attr($this->wpc_options_serialized->wpc_phrases['wpc_confirm_email_subject']) : __('Subscribe Confirmation', 'woodiscuz-woocommerce-comments'); ?>" placeholder="<?php echo _e('Subscribe Confirmation', 'woodiscuz-woocommerce-comments'); ?>"/>
                    </label>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?php _e('Subscribe Confirmation Email Content', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">
                    <label for="wpc_confirm_email_message">
                        <textarea name="wpc_confirm_email_message" id="wpc_confirm_email_message"><?php echo isset($this->wpc_options_serialized->wpc_phrases['wpc_confirm_email_message']) ? $this->wpc_options_serialized->wpc_phrases['wpc_confirm_email_message'] : __('Hi, <br/> You just subscribed for new comments on our website. This means you will receive an email when new comments are posted according to subscription option you\'ve chosen. <br/> To activate, click confirm below. If you believe this is an error, ignore this message and we\'ll never bother you again.', 'woodiscuz-woocommerce-comments'); ?></textarea>
                    </label>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <?php _e('New Reply Subject', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">
                    <label for="wpc_new_reply_email_subject">
                        <input type="text" value="<?php echo isset($this->wpc_options_serialized->wpc_phrases['wpc_new_reply_email_subject']) ? esc_attr($this->wpc_options_serialized->wpc_phrases['wpc_new_reply_email_subject']) : _e('New Reply', 'woodiscuz-woocommerce-comments'); ?>" name="wpc_new_reply_email_subject" id="wpc_new_reply_email_subject" />
                    </label>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?php _e('New Reply Message', 'woodiscuz-woocommerce-comments'); ?>
                </th>
                <td colspan="3">
                    <label for="wpc_new_reply_email_message">
                        <textarea name="wpc_new_reply_email_message" id="wpc_new_reply_email_message"><?php echo $this->wpc_options_serialized->wpc_phrases['wpc_new_reply_email_message']; ?></textarea>
                    </label>
                </td>
            </tr>
        </tbody>
    </table>
</div>