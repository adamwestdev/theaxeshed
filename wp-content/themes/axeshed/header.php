<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="wrapper" class="hfeed">

            <?php
            if( is_front_page() ) :
                $headerClass = 'header--homepage';
                $headerID = 'homepage--header';
                $tag = 'aside';
                $menuName = 'home-menu';
            else:
                $headerClass = 'header';
                $headerID = 'header';
                $tag = 'section';
                $menuName = 'page-menu';
            endif;
            ?>

            <<?php echo $tag; ?> class="<?php echo $headerClass; ?><?php if( is_user_logged_in() ) : echo ' logged-in'; endif;?>" id="<?php echo $headerID; ?>">
                <div class="header--logo">
                    <a href="<?php echo home_url(); ?>" alt="<?php echo get_bloginfo( 'site_name' ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/axeshed-logo-colour.png" alt="<?php echo get_bloginfo( 'site_name' ); ?> logo">
                    </a>
                </div>
                <nav class="header--nav" id="main-nav">
                    <?php wp_nav_menu( array( 'menu_name' => $menuName ) ); ?>
                </nav>
                <a href="tel:709555555" title="Call us today" aria-label="Call us today" class="header--tel">
                    709-555-5555
                </a>
                <ul class="header--social-media">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
                <a href="#" class="header--mnb" id="mnb">
                    <i class="fas fa-bars" id="mnb-icon"></i>
                </a>
            </<?php echo $tag; ?>>


            <?php
            if( is_front_page() ) :
                include ( 'inc/front-page.php' );
            else:
                include( 'inc/page-header.php' );
            endif;
            ?>