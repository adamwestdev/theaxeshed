<?php get_header(); ?>
    <main id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </main>
    <?php include( 'inc/homepage/events.php' ); ?>
<?php get_footer(); ?>