            <?php $frontpage_id = get_option( 'page_on_front' ); ?>            
            
            <?php
                $aboutLogo = get_field( 'hp_about_us_logo',$frontpage_id ) ?: get_template_directory_uri().'/images/axeshed-logo-white.png';
                $aboutLogoImg = wp_get_attachment_image_url( $aboutLogo['id'],'large' ) ?: get_template_directory_uri()."/images/test.jpg";
            ?>
            <section class="homepage--content homepage--about" id="about">
                <!-- About -->
                <div class="content--container-wide content--blocks container--rows container--space-between bg--darkgrey margin--bottom about-us-text">
                    <div class="width--third">
                        <img src="<?php echo $aboutLogoImg; ?>" alt="<?php echo get_bloginfo( 'site_name' ); ?> logo" class="about--logo">
                    </div>
                    <div class="width--two-thirds text--align-left">
                        <?php echo get_field( 'hp_about_us_content',$frontpage_id ); ?>
                    </div>
                </div>
                <?php if( have_rows( 'hp_content_blocks',$frontpage_id ) ) : ?>
                <div class="content--container content--blocks container--rows container--space-between container--align-stretch">
                    <?php
                    while( have_rows( 'hp_content_blocks',$frontpage_id ) ) : the_row();
                        $blockImage = get_sub_field( 'hp_content_block_image' );
                        $blockImageURL = wp_get_attachment_image_url( $blockImage['id'],'large' ) ?: get_template_directory_uri().'/images/test.jpg';
                        $blockTitle = get_sub_field( 'hp_content_block_title' ) ?: 'Title goes here';
                        $blockContent = get_sub_field( 'hp_content_block_content' ) ?: 'Content goes here.';
                    ?>
                    
                    <article class="width--third-w-mar bg--white about--article">
                        <img src="<?php echo $blockImageURL; ?>" alt="<?php echo $blockTitle; ?>">
                        <h3><?php echo $blockTitle; ?></h3>
                        <p><?php echo $blockContent; ?></p>
                    </article>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </section>