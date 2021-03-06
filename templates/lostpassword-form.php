<?php
// If you would like to edit this file, copy it to your current theme's directory and edit it there.
// This plugin will always look in your theme's directory first, before using this default template.

global $themedLoginInstance;
$template = $themedLoginInstance->current_instance;

?>
<div class="tml tml-lostpassword" id="themed-login<?php $template->instance_id(); ?>">
	<?php
	$template->the_action_template_message('lostpassword');
	$template->the_errors(); ?>
	<form id="lostpasswordform<?php $template->instance_id(); ?>" action="<?php $template->the_action_url('lostpassword', 'login_post'); ?>" method="post">
		<p class="tml-user-login-wrap">
			<label for="user_login<?php $template->instance_id(); ?>"><?php
			if ($themedLoginInstance->get_option('login_type') === 'email') {
				_e('Email:', 'themed-login');
			} else {
				_e('Username or Email:', 'themed-login');
			} ?></label>
			<input type="text" name="user_login" id="user_login<?php $template->instance_id(); ?>" class="input" value="<?php $template->the_posted_value('user_login'); ?>" size="20">
		</p>

		<?php do_action('lostpassword_form'); ?>

		<p class="tml-submit-wrap">
			<input type="submit" name="wp-submit" id="wp-submit<?php $template->instance_id(); ?>" value="<?php esc_attr_e('Get New Password', 'themed-login'); ?>">
			<input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url('lostpassword'); ?>">
			<input type="hidden" name="instance" value="<?php $template->instance_id(); ?>">
			<input type="hidden" name="action" value="lostpassword">
		</p>
	</form>
	<?php $template->the_action_links(['lostpassword' => false]); ?>
</div>
