<?php get_header(); ?>
    <?php if( !is_front_page() ) : ?>
    <main id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </main>
    <?php endif; ?>
<?php get_footer(); ?>