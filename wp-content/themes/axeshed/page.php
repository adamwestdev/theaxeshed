<?php get_header(); ?>
    <?php if( !is_front_page() ) : ?>
    <main id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </main>
    <?php
        if( get_the_title() == 'Booking Form' ) :
            include( 'inc/homepage/pricing.php' );
        endif;
    ?>
    <?php endif; ?>
<?php get_footer(); ?>