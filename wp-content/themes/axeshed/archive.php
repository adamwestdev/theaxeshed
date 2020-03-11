<?php
    if( is_post_type_archive( 'events' ) ) :
        $args = array(
            'meta_query'=>array(
                array(
                    'key'=>'event_start_date',
                    'compare'=>'>=',
                    'value'=>date( 'Ymd' ),
                    'type'=>'numeric'
                )
            ),
            'orderby'=>'meta_value',
            'order'=>'DESC',
            'limit'=>-1
        );
    endif;
?>
<?php get_header(); ?>
    <main id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post--article">
            <a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>" aria-label="<?php echo get_the_title(); ?>">
                <h1><?php echo get_the_title(); ?></h1>
            </a>
            <h3><?php echo date('F d, Y', strtotime( get_field( 'event_start_date',get_the_ID() ))); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php echo get_the_permalink(); ?>" class="btn bg--blue">Read More</a>
        </article>
    <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>