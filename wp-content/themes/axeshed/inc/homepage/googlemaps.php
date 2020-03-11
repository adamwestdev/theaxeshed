            <?php $frontpage_id = get_option( 'page_on_front' ); ?>  
            <section class="homepage--content homepage--googlemaps<?php if( !is_front_page() ) : echo ' page--footer'; endif;?>" id="hours">
                <div class="content--container-wide content--blocks container--rows container--space-between">
                    <div class="width--half font-colour--white bg--orange">
                        <h1>The Axe Shed</h1>
                        <h3>Location</h3>
                        <?php echo get_field( 'hp_location', $frontpage_id ) ?: 'Location details here'; ?>
                        <h3>Hours</h3>
                        <?php echo get_field( 'hp_hours', $frontpage_id ) ?: 'Hours information here'; ?>
                    </div>
                    <div class="googlemap">
                        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=1%20caldwell%20st%20gander&t=&z=15&ie=UTF8&iwloc=&output=embed&ll=48.951040,-54.603236" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
                
            </section>