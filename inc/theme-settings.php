<?php
/**
 * Check and setup theme's default settings
 *
 * @package eventosybodas
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists ( 'eventosybodas_setup_theme_default_settings' ) ) {
	function eventosybodas_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$eventosybodas_posts_index_style = get_theme_mod( 'eventosybodas_posts_index_style' );
		if ( '' == $eventosybodas_posts_index_style ) {
			set_theme_mod( 'eventosybodas_posts_index_style', 'default' );
		}

		// Sidebar position.
		$eventosybodas_sidebar_position = get_theme_mod( 'eventosybodas_sidebar_position' );
		if ( '' == $eventosybodas_sidebar_position ) {
			set_theme_mod( 'eventosybodas_sidebar_position', 'right' );
		}

		// Container width.
		$eventosybodas_container_type = get_theme_mod( 'eventosybodas_container_type' );
		if ( '' == $eventosybodas_container_type ) {
			set_theme_mod( 'eventosybodas_container_type', 'container' );
		}
	}
}