<?php
/**
 * @package Shortcodes_Core
 * @version 1.7.2
 */
/*
Plugin Name:	Shortcore
Plugin URI:		http://ivanbarreda.com/plugins/shortcodes-core
Description:	This plugin add shortcodes to get all fields from the core of post and pages.
Author:			Cuxaro
Version: 		1.2.0
License:		GPL3
Author URI: 	https://ivanbarreda.com/
Text Domain: 	shortcore

*/


function shortcodes_core_func( $atts ) {

	$retun_field = "";
	if (array_key_exists("param",$atts)){
		switch ($atts['param']) {
			case 'core_title':
				$retun_field = get_the_title();
				break;
			case 'core_excerpt':
				$retun_field = get_the_excerpt();
				break;
			case 'core_id':
				$retun_field = get_the_ID();
				break;
			case 'core_content':
				$retun_field = get_the_content();
				break;
			case 'core_permalink':
				$retun_field = get_the_permalink();
				break;
			case 'core_thumbnail':
				$retun_field = get_the_post_thumbnail();
				break;
			case 'core_post_type':
				$retun_field = get_post_type();
				break;
			case 'core_status':
				$retun_field = get_post_status();
				break;
			default:
				$retun_field = "";
				break;
		}
	}

   return $retun_field;
}

add_shortcode( 'shortcore', 'shortcodes_core_func' );
