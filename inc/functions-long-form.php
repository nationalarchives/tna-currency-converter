<?php

function long_form_assets() {
	if ( is_page_template('page-long-form.php') ) {
		wp_register_style('long-form-css', get_stylesheet_directory_uri() . '/css/long-form.css', array(), '0.1', 'all');
		wp_register_script('long-form-js', get_stylesheet_directory_uri() . '/js/long-form.js', array( 'jquery' ), '1.0',true );
		wp_enqueue_style('long-form-css');
		wp_enqueue_script( 'long-form-js' );
	}
}

function aria_labels() {
	$img_title = get_post(get_post_thumbnail_id())->post_title;
	$img_caption = get_post(get_post_thumbnail_id())->post_excerpt;
	if ( $img_caption ) {
		echo 'aria-labelledby="'.get_post_thumbnail_id().'"';
	} else {
		echo 'aria-label="'.$img_title.'"';
	}
}
