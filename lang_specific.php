<?php
/**
 * Plugin Name: Language Specific Block Shortcode
 * Plugin URI: https://github.com/tarkant/wp-lang-specific
 * Description: WP Lang Specific enables you to show specific blocks of content following the language of the browser used by the visitor using simple shortcodes.
 * Version: 1.0.0
 * Author: Jacer Omri, Tarek Jellali
 * Author URI: https://github.com/tarkant/wp-lang-specific
 * License: GPL2
 */

// Add Shortcode
function lang_shortcode( $atts , $content = null ) {
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	// Attributes
	extract( shortcode_atts(
		array(
			'language' => '',
		), $atts )
	);
	if(strcasecmp ($lang ,$language )==0) return $content;
	else return null;
}
add_shortcode( 'lang', 'lang_shortcode' );
