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
                $menuName = 'Home Menu';
            else:
                $headerClass = 'header';
                $headerID = 'header';
                $tag = 'section';
                $menuName = 'Page Menu';
            endif;
            ?>

        <<?php echo $tag; ?> class="<?php echo $headerClass; ?><?php if( is_user_logged_in() ) : echo ' logged-in'; endif;?>" id="<?php echo $headerID; ?>"<?php if ( !is_front_page() && is_user_logged_in() ) : ?> style="top:32px;"<?php endif; ?>>
                <div class="header--logo">
                    <a href="<?php echo home_url(); ?>" alt="<?php echo get_bloginfo( 'site_name' ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/axeshed-logo-colour.png" alt="<?php echo get_bloginfo( 'site_name' ); ?> logo">
                    </a>
                </div>
                <nav class="header--nav" id="main-nav">
                    <?php wp_nav_menu( array( 'menu' => $menuName ) ); ?>
                </nav>
                <a href="tel:<?php echo get_field( 'site_options_phone_number','option' ) ?: ''; ?>" title="Call us today" aria-label="Call us today" class="header--tel">
                    <?php echo get_field( 'site_options_phone_number','option' ) ?: ''; ?>
                </a>
                <ul class="header--social-media">
                    <?php if( get_field( 'site_options_facebook','option' ) ) : ?>
                    <li>
                        <a href="<?php echo get_field( 'site_options_facebook','option' ); ?>" title="Like Us on Facebook" aria-label="Like Us on Facebook" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if( get_field( 'site_options_instgram','option' ) ) : ?>
                    <li>
                        <a href="<?php echo get_field( 'site_options_instagram','option' ); ?>" title="Follow Us on Instagram" aria-label="Follow Us on Instagram" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if( get_field( 'site_options_twitter','option' ) ) : ?>
                    <li>
                        <a href="<?php echo get_field( 'site_options_twitter','option' ); ?>" title="Follow Us Twitter" aria-label="Follow Us on Twitter" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <?php endif; ?>
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