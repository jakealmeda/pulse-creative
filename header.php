<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;
$post_type = get_post_type( $post );
$post_type_object = get_post_type_object( $post_type );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php wp_head(); ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title>
			<?php
			echo get_bloginfo( "name" );
			if( !is_front_page() && !empty( $post_type_object ) ) {
				print ' | ';
				if( 'page' == $post_type ) {
					echo esc_html( get_the_title() );
				} elseif( 'post' == $post_type ) {
					echo 'Blog - '.get_the_title();
				} else {
					echo $post_type_object->label.' - '.get_the_title();
				}
			}
			?>
		</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>
	<?php
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		} else {
			do_action( 'wp_body_open' );
		}
	?>
	<div class="pc-progress-wrap">
		<svg class="pc-progress-circle" width="60" height="60">
			<circle class="pc-bg-circle" cx="30" cy="30" r="25" stroke="#000000" stroke-width="2" fill="none"/>
			<circle class="pc-progress" stroke="#5ce1e6" cx="30" cy="30" r="25" stroke-width="2" fill="none" />
		</svg>
		<div class="arrow">↑</div>
	</div><?php
