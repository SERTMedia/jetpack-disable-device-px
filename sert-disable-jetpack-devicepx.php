<?php 
/*
Plugin Name: Jetpack Remove DevicePX
Plugin URI: https://www.sertmedia.com
Description: Removes Jetpack's DevicePX JS file as it's unused and not necessary.
Version: 1.0
Author: SERT Media
Author URI: https://www.sertmedia.com
*/
function sertmedia_remove_devicepx_junk() {
                   wp_dequeue_script('devicepx');
}
add_action( 'wp_enqueue_scripts', 'sertmedia_remove_devicepx_junk', PHP_INT_MAX );