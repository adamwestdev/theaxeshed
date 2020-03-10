$(document).ready( function() {

    //vars
    var homepage_header = $( '#homepage--header' );
    var window_width = $( window ).width();
    var mnb = $( '#mnb' );
    var mnb_icon = $( '#mnb-icon' );
    var nav = $( '#main-nav' );
    var nav_link = $( '#main-nav ul li a' );

    //change home page header style
    if( window_width < 800 ) {
        if( homepage_header.hasClass( 'header--homepage') ) {
            homepage_header.removeClass( 'header--homepage' ).addClass( 'header' );
        }
    }
    $( window ).resize( function () {
        var new_width = $( window ).width();
        if ( new_width < 800 ) {
            homepage_header.removeClass( 'header--homepage' ).addClass( 'header' );
        }
        else if ( new_width > 800 ) {
            homepage_header.removeClass( 'header' ).addClass( 'header--homepage' );
        }
    });

    //mobile nav open
    mnb.on( 'click', function(e) {
        e.preventDefault();
        $(this).toggleClass( 'mnb-clicked' );
        if ( mnb_icon.hasClass( 'fa-bars' ) ) {
            mnb_icon.removeClass( 'fa-bars' ).addClass( 'fa-times' );
        }
        else if ( mnb_icon.hasClass( 'fa-times' ) ) {
            mnb_icon.removeClass( 'fa-times' ).addClass( 'fa-bars' );
        }
        nav.toggleClass( 'nav-opened' );
    });
    nav_link.on( 'click', function() {
        mnb.toggleClass( 'mnb-clicked' );
        if ( mnb_icon.hasClass( 'fa-bars' ) ) {
            mnb_icon.removeClass( 'fa-bars' ).addClass( 'fa-times' );
        }
        else if ( mnb_icon.hasClass( 'fa-times' ) ) {
            mnb_icon.removeClass( 'fa-times' ).addClass( 'fa-bars' );
        }
        nav.toggleClass( 'nav-opened' );
    });
});