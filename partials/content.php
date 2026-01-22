<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'pc_content', 'pc_display_content', 2 );
function pc_display_content() {
    
    ?><section class="site-content-wrap">
        <?php the_content(); ?>
    </section><?php
}

add_action( 'pc_footer', 'pc_display_footer' );
function pc_display_footer() {
    ?>
            <footer id="site-footer-wrap">
                <div class="site-content-90">
                    <div class="site-footer">
                        <div class="site-footer-left">
                            <div>
                                <a class="site-brand-footer" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo-bottom.png" border="0" alt="A&M TAXAND" /></a>
                            </div>
                            <div>
                                <p>600 Madison Avenue</p>
                                <p>8th Floor</p>
                                <p>New York, New York, 10022</p>
                            </div>
                        </div>
                        <div class="site-footer-right">
                            <div>Follow us on</div>
                            <div class="footer-socmed-wrap">
                                <a class="footer-socmed" href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/footer-icon-linkedin.webp" border="0" alt="LinkedIn" /></a>
                                <a class="footer-socmed" href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/footer-icon-fb.webp" border="0" alt="Facebook" /></a>
                                <a class="footer-socmed" href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/footer-icon-x.webp" border="0" alt="Twitter" /></a>
                                <a class="footer-socmed" href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/footer-icon-youtube.webp" border="0" alt="YouTube" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer-copyright">
                        © Copyright 2017, Alvarez & Marsal Holdings, LLC. All Rights Reserved.
                    </div>
                </div>
            </footer>
            <?php
                // REQUIRED: Call WP Footer (other JS' won't work without this)
                wp_footer();
            ?>
        </body>
    </html>
    <?php
}