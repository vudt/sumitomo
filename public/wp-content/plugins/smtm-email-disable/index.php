<?php
/*
Plugin Name: Stop email change password
Description: SMTM
*/

if (!function_exists('wp_password_change_notification')) {
    function wp_password_change_notification($user) {
        return;
    }
}
?>