            <section class="homepage--content homepage--header">
                <!-- Home Page Header -->
                <div class="content--container-wide content--blocks container--rows container--center" id="top">
                    <?php
                    if( have_rows( 'hp_header_title',get_the_ID() ) ) : ?>
                    <div class="width--half">
                        <?php while( have_rows( 'hp_header_title',get_the_ID() ) ) : the_row(); ?>
                        <h2><?php echo get_sub_field( 'hp_header_title_line_one',get_the_ID() ) ?: 'Line one goes here'; ?></h2>
                        <h1><?php echo get_sub_field( 'hp_header_title_line_two',get_the_ID() ) ?: 'Line two goes here'; ?></h1>
                        <h2><?php echo get_sub_field( 'hp_header_title_line_three',get_the_ID() ) ?: 'Line three goes here'; ?></h2>
                        <a href="<?php echo get_sub_field( 'hp_header_title_url' )['url']; ?>" class="btn bg--orange">Book your lane now!</a>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                    <?php if( have_rows( 'hp_header_button_and_video',get_the_ID() ) ) : ?>
                    <?php while( have_rows( 'hp_header_button_and_video',get_the_ID() ) ) : the_row(); ?>
                    <div class="width--half">
                        <a href="http://www.youtube.com/embed/<?php echo get_sub_field( 'hp_header_button_and_video_video_link' ) ?: '3_IZ3ZWarZI'; ?>?rel=0&amp;autoplay=1" class="play-btn" data-featherlight="iframe" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true" data-featherlight-iframe-style="display:block;border:none;height:85vh;width:85vw;">
                            <i class="far fa-play-circle"></i>
                            <span class="play-btn--text">Watch Video</span>
                        </a>
                    </div>
                    <?php
                        $video = get_sub_field( 'hp_header_button_and_video_background_video_mp4' );
                        $videoURL = $video['url'] ?: get_template_directory_uri().'/images/test.mp4';
                        $headerBackupImage = get_sub_field( 'hp_header_button_and_video_backup_image' );
                        $headerBackupImg = wp_get_attachment_image_url( $headerBackupImage['id'],'Large' ) ?: get_template_directory_uri().'/images/test.jpg';
                    ?>
                    <video class="bg-video"  mute autoplay>
                        <source src="<?php echo $videoURL; ?>" type="video/mp4">
                        <img src="<?php echo $headerBackupImg; ?>">
                        Your browser does not support the video tag.
                    </video>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section>