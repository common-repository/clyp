<?php
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
 * Clyp oEmbed
 * Register oEmbed provider.
 *
 * @since 1.0
 */
function clyp_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www.)?clyp.it/.*#i', 'http://api.clyp.it/oembed/', true );
	wp_oembed_add_provider( '#https?://(www.)?clyp.it/playlist/.*#i', 'http://api.clyp.it/oembed/', true );

}
add_action( 'init', 'clyp_oembed_provider' );
