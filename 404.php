<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// Hook for the Content
do_action( 'pc_content' );

?>

<main class="site-404" style="padding:40px;display:flex;justify-content:center;">

    <div style="max-width:1100px;width:100%;display:grid;grid-template-columns:1fr 360px;gap:28px;align-items:center;">

        <section>
            <h1 class="site-headline-1">404 — Page not found</h1>
            <p>We're sorry — the page you tried to visit cannot be found. Try using the search, or return home.</p>
            <?php get_search_form(); ?>
            <p><a href="<?php echo home_url('/'); ?>" class="button">Return Home</a>
            <a href="<?php echo site_url('/projects'); ?>" class="button">View Projects</a></p>
            <p>Call us: <a href="tel:+18005551234">(800) 555-1234</a></p>
        </section>


        <aside>
            <div style="background:#fff;padding:20px;border-radius:12px;box-shadow:0 10px 30px rgba(2,6,23,0.06)">
                <h3>Need help?</h3>
                <p><a href="<?php echo home_url('/contact'); ?>">Contact us</a> or request a free estimate.</p>
            </div>
        </aside>

    </div>
</main>

<?php
// Hook for the Footer
do_action( 'pc_footer' );