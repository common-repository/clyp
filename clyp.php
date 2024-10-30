<?php
/*
Plugin Name: Clyp
Plugin URI:  https://wordpress.org/plugins/clyp/
Description: Embed audio from clyp.it into your WordPress site.
Version:     1.3
Author:      Rami Yushuvaev
Author URI:  https://GenerateWP.com/
Text Domain: clyp
*/



/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Include plugin files
 *
 * @since 1.3
 */
include_once ( plugin_dir_path( __FILE__ ) . 'includes/i18n.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/oembed.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/shortcode.php' );
