<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$run = new PulseCreativeMain();
class PulseCreativeMain {

    public function __construct() {

        // include files found in the partials directory
        $this->pc_include_files();

        // enqueue scripts
        add_action( 'wp_enqueue_scripts', array( $this, 'pc_enqueue_scripts' ) );

        // add theme support for menus
        add_action( 'after_setup_theme', array( $this, 'pc_theme_support' ) );

        // shortcode for the main hero banner
        add_shortcode( 'pc_main_bg_vid', array( $this, 'pc_main_background_video' ) );

    }

    /**
     * Include all PHP files in the PARTIALS directory
     */
    private function pc_include_files() {
        $folder = 'partials';
        $dir = new DirectoryIterator( dirname(__FILE__).'/'.$folder );
        foreach( $dir as $filename ) {
            if ( !$filename->isDot() ) {

                $ext = pathinfo( $filename, PATHINFO_EXTENSION );
                if( $ext == 'php' )
                    include_once get_template_directory() . '/'.$folder.'/'.$filename;


            }
        }
    }

    /**
     * Enqueue scripts
     */
    public function pc_enqueue_scripts() {

        // enqueue theme styles
        wp_enqueue_style( 'pc-styles', get_template_directory_uri() . '/css/styles.css' );

        // load jQuery
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'jquery-effects-core' );
        wp_enqueue_script( 'jquery-effects-slide' );
        wp_enqueue_script( 'jquery-effects-fade' );

        // enqueue theme scripts
        $js_name = 'pc-scripts';
        $js_file = 'js/asset.js';
        $js_ver  = filemtime( get_stylesheet_directory().'/'.$js_file );
        wp_register_script( $js_name, get_template_directory_uri().'/'.$js_file );
        /* wp_localize_script( $js_name, 'kli_variables', array(
            'ajax_url'                  => admin_url( 'admin-ajax.php' ), // https://daxkorocket.com/wp-admin/admin-ajax.php
            // 'nonce'                 => wp_create_nonce( 'ajax-nonce' ),
            'kli_video_urls'            => get_template_directory_uri().'/video/',
            'kli_service_urls'          => $this->kli_get_service_urls(),
        )); */
        wp_enqueue_script( $js_name, get_template_directory_uri().'/'.$js_file, array(), 1.0, TRUE );
    }

    /**
     * Register Menu Locations
     */
    public function pc_theme_support() {

        // menu locations
        register_nav_menus(
            array(
                'primary'           => __( 'Primary Menu', 'pulse-creative-theme' ),
            )
        );

        // posts' featured image
        add_theme_support( 'post-thumbnails' );
    }

    /**
     * Homepage | Hero Background Video
     */
    public function pc_main_background_video() {
        
        $vids = array( 'primary_video', 'secondary_video' );

        $sources = ''; // declare empty variable
        foreach( $vids as $video ) {

            $video =  get_field( $video );

            $video_ext = pathinfo( $video, PATHINFO_EXTENSION);

            /* <video autoplay loop muted playsinline class="pc-bg-video">
                        <source src="< ?php bloginfo( 'template_url' ); ? >/video/amtax.webm" type="video/webm">
                        <source src="< ?php bloginfo( 'template_url' ); ? >/video/amtax.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video> */
            $sources .= '<source src="'.$video.'" type="video/'.$video_ext.'">';
        }

        return '<video autoplay loop muted playsinline class="pc-bg-video">'.$sources.'</video>';
    }

}