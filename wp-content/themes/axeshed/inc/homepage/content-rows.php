    <?php $frontpage_id = get_option( 'page_on_front' ); ?>
    
    <?php if ( have_rows( 'hp_content_row',$frontpage_id ) ) : ?>
        <?php while( have_rows( 'hp_content_row',$frontpage_id ) ) : the_row();

            $contentRowType = get_sub_field( 'hp_content_row_block_type' );

            $leftColour = get_sub_field( 'hp_content_row_left_block_colour' );
            $rightColour = get_sub_field( 'hp_content_row_right_block_colour' );

            $leftImage = get_sub_field( 'hp_content_row_left_block_image' );
            $rightImage = get_sub_field( 'hp_content_row_right_block_image' ) ;

            $leftImageURL = wp_get_attachment_image_url( $leftImage['id'],'large' ) ?: get_template_directory_uri().'/images/test.jpg';
            $rightImageURL = wp_get_attachment_image_url( $rightImage['id'],'large' ) ?: get_template_directory_uri().'/images/test.jpg';

            switch ( $leftColour ) {
                case 'bg--orange':
                    $lBtnColour = 'bg--blue';
                break;
                case 'bg--blue':
                    $lBtnColour = 'bg--orange';
                break;
                case 'bg--green':
                    $lBtnColour = 'bg--orange';
                break;
                case 'bg--darkgrey':
                    $lBtnColour = 'bg--orange';
                break;
                default:
                    $lBtnColour = 'bg--green';
                break;
            }
            switch ( $rightColour ) {
                case 'bg--orange':
                    $rBtnColour = 'bg--blue';
                break;
                case 'bg--blue':
                    $rBtnColour = 'bg--orange';
                break;
                case 'bg--green':
                    $rBtnColour = 'bg--orange';
                break;
                case 'bg--darkgrey':
                    $rBtnColour = 'bg--orange';
                break;
                default:
                    $rBtnColour = 'bg--green';
                break;
            }

            if ( $contentRowType == 'col-content' ) :
                $leftCol = '
                    <div class="width--half font-colour--white '.$leftColour.'">
                        <h1>'.get_sub_field( 'hp_content_row_left_block_title' ).'</h1>
                        '.get_sub_field( 'hp_content_row_left_block_content' ).'
                        <a href="'.get_sub_field( 'hp_content_row_left_block_button' )['url'].'" title="'.get_sub_field( 'hp_content_row_left_block_button' )['title'].'" aria-label="'.get_sub_field( 'hp_content_row_left_block_button' )['title'].'" class="btn '.$lBtnColour.'">'.get_sub_field( 'hp_content_row_left_block_button' )['title'].'</a>
                    </div>';
                $rightCol = '
                    <div class="width--half font-colour--white '.$rightColour.'">
                        <h1>'.get_sub_field( 'hp_content_row_right_block_title' ).'</h1>
                        '.get_sub_field( 'hp_content_row_right_block_content' ).'
                        <a href="'.get_sub_field( 'hp_content_row_right_block_button' )['url'].'" title="'.get_sub_field( 'hp_content_row_right_block_button' )['title'].'" aria-label="'.get_sub_field( 'hp_content_row_right_block_button' )['title'].'" class="btn '.$rBtnColour.'">'.get_sub_field( 'hp_content_row_right_block_button' )['title'].'</a>
                    </div>';
            elseif( $contentRowType == 'col-image-content' ) :
                $leftCol = '
                <div class="width--half bg--image" style="background-image:url('.$leftImageURL.')"></div>';
                $rightCol = '
                    <div class="width--half font-colour--white '.$rightColour.'">
                        <h1>'.get_sub_field( 'hp_content_row_right_block_title' ).'</h1>
                        '.get_sub_field( 'hp_content_row_right_block_content' ).'
                        <a href="'.get_sub_field( 'hp_content_row_right_block_button' )['url'].'" title="'.get_sub_field( 'hp_content_row_right_block_button' )['title'].'" aria-label="'.get_sub_field( 'hp_content_row_right_block_button' )['title'].'" class="btn '.$rBtnColour.'">'.get_sub_field( 'hp_content_row_right_block_button' )['title'].'</a>
                    </div>';
            elseif( $contentRowType == 'col-content-image' ) :
                $leftCol = '
                    <div class="width--half font-colour--white '.$leftColour.'">
                        <h1>'.get_sub_field( 'hp_content_row_left_block_title' ).'</h1>
                        '.get_sub_field( 'hp_content_row_left_block_content' ).'
                        <a href="'.get_sub_field( 'hp_content_row_left_block_button' )['url'].'" title="'.get_sub_field( 'hp_content_row_left_block_button' )['title'].'" aria-label="'.get_sub_field( 'hp_content_row_left_block_button' )['title'].'" class="btn '.$lBtnColour.'">'.get_sub_field( 'hp_content_row_left_block_button' )['title'].'</a>
                    </div>';
                    $rightCol = '
                    <div class="width--half bg--image" style="background-image:url('.$rightImageURL.');"></div>';
            endif;
            ?>



            <section class="homepage--content homepage--content-blocks" id="<?php echo get_sub_field( 'hp_content_row_anchor_name' ) ?: 'none'; ?>">
                <div class="content--container-wide content--blocks container--rows container--space-between">
                    <?php echo $leftCol; ?>
                    <?php echo $rightCol; ?>
                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>