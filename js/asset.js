jQuery( document ).ready( function( $ ) {
    
    /******************************************************
     * Floating Back to Top Anchor Link
     *************************************************** */
    $( window ).on( 'scroll', function () {
        const scrollTop = $( window ).scrollTop();
        const docHeight = $( document ).height() - $( window ).height();
        const scrollPercent = ( scrollTop / docHeight );

        const circle = $( '.pc-progress' );
        const radius = 25;
        const circumference = 2 * Math.PI * radius;
        const offset = circumference * ( 1 - scrollPercent );

        circle.css( 'stroke-dashoffset', offset );

        if( scrollTop >= 50 ) {
            $( '.pc-progress-wrap' ).fadeIn( 'normal' );
        } else {
            $( '.pc-progress-wrap' ).fadeOut( 'normal', function(){
                $( this ).removeAttr( 'style' );
            });
        }

        MobileNavHandler();
        
    });

    // Back to top
    $( document ).on( 'click', '.pc-progress-wrap', function() {

        $( "html, body" ).animate({
            scrollTop: 0 // Scroll to the top (position 0)
        }, "normal"); // Set the animation speed (e.g., "slow", "fast", "normal", or milliseconds like 500)

        return false; // Prevent default link behavior if applicable
    });

    /******************************************************
     * Listen to any window size changes
     *************************************************** */
    $( window ).resize( function() {
        MobileNavHandler();
    });

    function MobileNavHandler() {
        // mobile nav | hide if showing
        const MobileNav = $( '.mobile-nav-wrap' );
        if( MobileNav.is( ':visible' ) ) {
            MobileNav.hide();
        }
    }

    /******************************************************
     * Mobile Menu
     *************************************************** */
    $( document ).on( 'click', '#site-menu-burger', function() {
        
        const MobileNav = $( '.mobile-nav-wrap' );
        if( MobileNav.is( ':hidden' ) ) {
            MobileNav.show();
        } else {
            MobileNav.hide();
        }

    });

});