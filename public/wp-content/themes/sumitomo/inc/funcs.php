<?php 

add_filter( 'um_template_tags_replaces_hook', 'pbg_template_tags_replaces', 10, 1 );
function pbg_template_tags_replaces( $replace_placeholders ) {
	// your code here
	$replace_placeholders[] = um_user('first_name');
	$replace_placeholders[] = um_user('last_name');
	return $replace_placeholders;
}

add_filter( 'um_template_tags_patterns_hook', 'pbg_template_tags_patterns', 10, 1 );
function pbg_template_tags_patterns( $placeholders ) {
	// your code here
	$placeholders[] = '{first_name}';
	$placeholders[] = '{last_name}';
	return $placeholders;
}

add_action('wp_login', 'smtm_redirect_after_login');
function smtm_redirect_after_login() {
	$current_user = wp_get_current_user();
	if (in_array('subscriber', $current_user->roles)) {
		$url = home_url() . '/thank-you';
		wp_redirect($url);
		die();
	}
}

add_action('wp_logout','smtm_redirect_after_logout');
function smtm_redirect_after_logout() {
	wp_redirect(home_url());
	die();
}
