<?php

// Dequeue parent styles for re-enqueuing in the correct order
function dequeue_parent_style() {
	wp_dequeue_style( 'tna-styles' );
	wp_deregister_style( 'tna-styles' );
}

// Enqueue styles in correct order
function tna_child_styles() {
	wp_register_style( 'tna-parent-styles', get_template_directory_uri() . '/css/base-sass.css.min', array(),
		EDD_VERSION, 'all' );
	wp_register_style( 'tna-child-styles', get_stylesheet_directory_uri() . '/css/currency-sass.css.min', array(), '0.1', 'all' );
	wp_enqueue_style( 'tna-parent-styles' );
	wp_enqueue_style( 'tna-child-styles' );
}

function tna_child_scripts() {
	wp_register_script( 'global-jquery', get_template_directory_uri() . '/js/lib/jquery-1.11.3.min.js', array(), '1.11.3' );
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/lib/modernizr.js', array(), '2.8.3', false );
	wp_register_script( 'tna-base-min', get_template_directory_uri() . '/js/compiled/tna-base.min.js', array(), EDD_VERSION, true );
	wp_register_script( 'webtrends', get_template_directory_uri() . '/js/lib/webtrends.js', array(), EDD_VERSION, true );
	wp_register_script( 'tna-base-flickr', 'https://www.nationalarchives.gov.uk/scripts/footer-img.js', array(), EDD_VERSION, true );
	if ( is_page_template( 'page-home.php' ) ) {
		wp_register_script( 'equal-heights', get_template_directory_uri() . '/js/lib/jQuery.equalHeights.js', array(),
			EDD_VERSION, true );
		wp_register_script( 'equal-heights-var', get_template_directory_uri() . '/js/equalHeights.js', array(),
			EDD_VERSION, true );

		wp_enqueue_script( 'equal-heights' );
		wp_enqueue_script( 'equal-heights-var' );
	}
	wp_enqueue_script( 'global-jquery' );
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'webtrends' );
	wp_enqueue_script( 'tna-base-min' );
	wp_enqueue_script( 'tna-base-flickr' );

	if ( is_page_template( 'page-home.php' ) ) {
		wp_register_script( 'currency-converter-build-min', get_stylesheet_directory_uri() . '/js/dist/currency-converter-build.min.js', array(), '', false );
		wp_enqueue_script( 'currency-converter-build-min' );

		//Get all pages that aren't homepage. Get their excerpts and URL and pass to an array for Javascript to use.
		$args = array(
			'exclude' => get_option( 'page_on_front' )
		);

		$excerpts = array();
		$urls     = array();

		foreach ( get_pages( $args ) as $page ) {
			array_push( $excerpts, array( get_post_meta( $page->ID, 'currency_century', true ) => $page->post_excerpt ) );
			array_push( $urls, array( get_post_meta( $page->ID, 'currency_century', true ) => get_page_link( $page->ID ) ) );
		}

		wp_localize_script( 'currency-converter-build-min', 'wp_child_theme', array( "templateURL"  => get_stylesheet_directory_uri(),
		                                                                             "excerptArray" => $excerpts,
		                                                                             "urlArray"     => $urls
		) );
	}
}

function add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}