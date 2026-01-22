<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Hook for the Header
get_header();

// Hook for the Content
do_action( 'pc_content' );

// Hook for the Footer
do_action( 'pc_footer' );