<?php
/**
 * Custom hooks.
 *
 * @package eventosybodas
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'eventosybodas_site_info' ) ) {
  /**
   * Add site info hook to WP hook library.
   */
  function eventosybodas_site_info() {
    do_action( 'eventosybodas_site_info' );
  }
}

if ( ! function_exists( 'eventosybodas_add_site_info' ) ) {
  add_action( 'eventosybodas_site_info', 'eventosybodas_add_site_info' );

  /**
   * Add site info content.
   */
  function eventosybodas_add_site_info() {
    $the_theme = wp_get_theme();
    
    $site_info = sprintf(
      '<a href="%1$s" target="_blank">%2$s</a>',
      esc_url( __( 'http://www.aguilascfc.org/', 'eventosybodas' ) ),
      sprintf(
        /* translators:*/
        esc_html__( '© Copyright 2019 Aguilas Centro Familiar Cristiano %s', 'eventosybodas' ), ''
      ),
      sprintf( // WPCS: XSS ok.
        /* translators:*/
        esc_html__( 'Theme: %1$s by %2$s.', 'eventosybodas' ), $the_theme->get( 'Name' ), '<a href="' . esc_url( __( 'http://eventosybodas.com', 'eventosybodas' ) ) . '">eventosybodas.com</a>'
      ),
      sprintf( // WPCS: XSS ok.
        /* translators:*/
        esc_html__( 'Version: %1$s', 'eventosybodas' ), $the_theme->get( 'Version' )
      )
    );

    echo apply_filters( 'eventosybodas_site_info_content', $site_info ); // WPCS: XSS ok.
  }
}
