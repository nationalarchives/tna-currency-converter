<?php

include 'inc/functions-globals.php';
include 'inc/functions-identify-environment.php';
include 'inc/functions-child.php';
include 'inc/functions-admin.php';

// For Breadcrumbs and URLs
$environment = identifyEnvironmentFromIP( $_SERVER['SERVER_ADDR'], $_SERVER['REMOTE_ADDR'] );
setThemeGlobals( $environment );

// add_action
add_action( 'wp_enqueue_scripts', 'tna_child_styles', 999 );
add_action( 'wp_print_scripts', 'dequeue_parent_script', 100 );
add_action('wp_enqueue_scripts','tna_child_scripts');
add_action( 'init', 'add_excerpts_to_pages' );
add_action( 'init', 'currency_metaboxes' );