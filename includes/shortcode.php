<?php
/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.3
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Clyp shortcode
 * Register shortcode handler.
 *
 * usage: [clyp id=""]
 *
 * @since 1.3
 */
function clyp_shortcode( $atts ) {

	// Set default attributes
	$atts = shortcode_atts(
		array(
			'id' => '',
		), $atts
	);

	// Embed code
	$embed_code = '<iframe width="100%" height="160" src="https://clyp.it/' . $atts['id'] . '/widget" frameborder="0"></iframe>';

	// Return embed code
	return $embed_code;

}
add_shortcode( 'clyp', 'clyp_shortcode' );
