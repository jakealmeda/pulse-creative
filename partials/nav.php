<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'pc_content', 'pc_before_body', 1 );

function pc_before_body() {

    global $post;

    // this is 404 if not a page/post
    if( $post ) {
        $post_slug = $post->post_name;
    } else {
        $post_slug = '';
    }

    ?><header class="site-header-wrap">
        <div class="site-logo-wrap">
            <div class="site-logo">
                <a class="site-brand" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo-top.png" border="0" alt="A&M TAXAND" /></a>
            </div>
            <div class="site-logo-right-wrap site-logo-right">
                <div><img src="<?php bloginfo( 'template_url' ); ?>/images/logo-top-right.png" border="0" width="80px" height="auto" alt="A&M GLOBAL" /></div>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id' => 'navbar-nav',
                    'container' => 'div',
                    'fallback_cb' => false,
                ) );
                ?>
                <div id="site-menu-burger-wrap">
                    <div id="site-menu-burger"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="100%" height="100%"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg></div>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id' => 'mobile-nav',
                        'container' => 'div',
                        'container_class' => 'mobile-nav-wrap',
                        'fallback_cb' => false,
                    ) );
                    ?>
                </div>
            </div>
        </div>
    </header><?php
/* <div class="site-before-nav-wrap site-content-prim">
            <div class="site-before-nav">
                <div>
                    <div><svg width="17px" height="17px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#b3b3b3"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#b3b3b3" stroke-width="1" stroke-miterlimit="10"></path> </g></svg></div>
                    <div><a href="tel:+13016765436">+1-301-676-5436</a></div>
                </div>
                <div>
                    <div><svg width="17px" height="17px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12ZM16 12V13.5C16 14.8807 17.1193 16 18.5 16V16C19.8807 16 21 14.8807 21 13.5V12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21H16" stroke="#b3b3b3" stroke-width="0.9600000000000002" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></div>
                    <div><a href="mailto:info@pccked.io">info@pccked.io</a></div>
                </div>
            </div>
        </div>
        <div class="site-header">
            <div class="site-brand-wrap">
                <div class="site-logo">
                    <a class="site-brand" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/pccked-logo.webp" border="0" width="80px" height="auto" alt="pccked, Inc" /></a>
                    <div class="site-tagline-wrap">
                        <div><a class="site-name" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></div>
                        <div class='site-tagline'><?php echo get_bloginfo( 'description' ); ?></div>
                    </div>
                </div>
                <div class="site-menu-wrap"><?php

                    if( 'opt-in' != $post_slug ) { ?>
                        
                        <div id="site-navbar">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_id' => 'navbar-nav',
                                'container' => 'div',
                                'container_id' => 'navbar-ul-wrap',
                                'fallback_cb' => false,
                                // 'walker' => new Walker_Nav_Menu_Top_Level_Triangle(),
                            ) );
                            ?>
                        </div>
                        <div id="site-menu-navbars"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="100%" height="100%"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg></div>

                    <?php } ?>

                </div>
            </div>
        </div>
*/
}