            <?php $frontpage_id = get_option( 'page_on_front' ); ?>
            <section class="homepage--content homepage--pricing" id="pricing">
                <div class="content--container content--blocks container--rows container--space-between section--header">
                    <div class="width--full">
                        <h1>Pricing</h1>
                    </div>
                    <div class="width--full">
                        <div class="pricing--table">
                            <div class="table--header one">
                                Individual
                            </div>
                            <div class="table--header two">
                                Group
                            </div>
                            <div class="column three">
                                <span class="font--med">1/2 Hour</span>
                                <span class="font--sm">per person</span>
                                <span class="font--lg table--margin-top"><?php echo get_field( 'hp_pricing_block_half_hour_price',$frontpage_id ) ?: '$12'; ?></span>
                            </div>
                            <div class="column four">
                                <span class="font--med">1 Hour</span>
                                <span class="font--sm">per person</span>
                                <span class="font--lg table--margin-top"><?php echo get_field( 'hp_pricing_block_hour_price',$frontpage_id ) ?: '$12'; ?></span>
                            </div>
                            <div class="column five">
                                <span class="font--med">1 Hour</span>
                                <span class="font--sm">Group of 8+</span>
                                <span class="font--lg table--margin-top"><?php echo get_field( 'hp_pricing_block_group_hour_price',$frontpage_id ) ?: '$12'; ?></span>
                                <span class="font--sm">person</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>