<?php

// Dequeue parent styles for re-enqueuing in the correct order
function dequeue_parent_style() {
	wp_dequeue_style( 'tna-styles' );
	wp_deregister_style( 'tna-styles' );
}

// Enqueue styles in correct order
function tna_child_styles() {
	wp_register_style('tna-child-styles', get_stylesheet_directory_uri() . '/css/currency.min.css', array(), '0.1', 'all');
	wp_enqueue_style('tna-child-styles');
}

function tna_child_scripts() {
	wp_register_script( 'jquery-local', get_stylesheet_directory_uri(). '/js/jquery-1.11.3.min.js', false, NULL, true );
	wp_enqueue_script( 'jquery-local' );

	if ( is_page_template( 'page-home.php' ) ) {
		wp_register_script( 'currency-converter-build-min', get_stylesheet_directory_uri() . '/js/dist/currency-converter-build.min.js', array(),'1.0', true );
		wp_enqueue_script( 'currency-converter-build-min' );

		//Get all pages that aren't homepage. Get their excerpts and URL and pass to an array for Javascript to use.
		$args = array(
			'exclude' => get_option( 'page_on_front' )
		);

		$excerpts = array();
		$urls     = array();

		foreach ( get_pages( $args ) as $page ) {
			array_push( $excerpts, array( get_post_meta( $page->ID, 'currency_century', true ) => $page->post_excerpt ) );
			array_push( $urls, array( get_post_meta( $page->ID, 'currency_century', true ) => make_path_relative(get_page_link( $page->ID ) )) );
		}

		wp_localize_script( 'currency-converter-build-min', 'wp_child_theme', array( "templateURL"  => make_path_relative(get_stylesheet_directory_uri()),
		                                                                             "excerptArray" => $excerpts,
		                                                                             "urlArray"     => $urls
		) );
	}
}

function add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}


function dequeue_parent_script() {
	wp_dequeue_script( 'global-jquery' ); //removing jquery form parent
	wp_deregister_script( 'global-jquery' );
}