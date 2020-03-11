            <?php
                if( is_singular( 'events' ) || is_singular( 'posts' ) ) :
                    $pageTitle = get_the_title();
                elseif( is_post_type_archive( 'events' ) ) :
                    $pageTitle = 'Events';
                elseif( is_home() ) :
                    $pageTitle = 'News';
                else:
                    $pageTitle = get_the_title();
                endif;
            ?>
            <section class="page--header">
                <div class="header--title">
                    <h1><?php echo $pageTitle; ?></h1>
                </div>
            </section>