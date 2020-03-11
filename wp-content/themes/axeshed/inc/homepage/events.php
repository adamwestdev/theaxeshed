        <?php
            $events_args = array( 
                'post_type'=>'events',
                'meta_query'=>array(
                    array(
                        'key'=>'event_start_date',
                        'compare'=>'>=',
                        'value'=>date( 'Ymd' ),
                        'type'=>'numeric'
                    )
                ),
                'post__not_in' => array(get_the_ID()),
                'orderby'=>'meta_value',
                'order'=>'DESC',
                'limit'=>4
            );
            $events_query = new WP_Query( $events_args );
            if ( $events_query->post_count > 0 ) :
        ?>
            <section class="homepage--content homepage--events<?php if( is_singular( 'events' ) ) : echo ' event-page--footer'; endif; ?>" id="events">
                <div class="content--container content--blocks container--rows container--space-between section--header">
                    <div class="width--half">
                        <h1>Events</h1>
                    </div>
                    <div class="width--half">
                        <a href="<?php echo home_url(); ?>/events" class="btn bg--green" title="View all events">
                            View All Events
                        </a>
                    </div>
                </div>
                <?php
                if ( $events_query->have_posts() ) : ?>
                <div class="content--container content--blocks container--rows container--space-between">
                    <?php
                        while( $events_query->have_posts() ) : $events_query->the_post();   
                            $dateYear = substr(get_field( 'event_start_date',get_the_ID() ), 0,4);
                            $dateMonth = substr(get_field( 'event_start_date',get_the_ID() ), 4,2);
                            $dateDay = substr( get_field( 'event_start_date',get_the_ID() ), 6,2);
                            $displayDate = date( 'F j, Y', mktime(0,0,0,$dateMonth,$dateDay,$dateYear ) ) ?: 'Date undefined';
                        ?>
                    <a href="<?php echo get_the_permalink(); ?>" class="width--quarter-w-mar event bg--white" title="Event: <?php echo get_the_title(); ?>">
                        <h3><?php echo get_the_title(); ?></h3>
                        <h4><?php echo $displayDate; ?></h4>
                        <span class="btn bg--green">View Event</span>
                    </a>
                    <?php endwhile; ?>
                </div>
                <?php
                endif;
                wp_reset_postdata();
                wp_reset_query();
                ?>
            </section>
            <?php endif; ?>