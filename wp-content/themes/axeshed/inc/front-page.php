            <section class="homepage--content homepage--header">
                <!-- Home Page Header -->
                <div class="content--container-wide content--blocks container--rows container--center" id="top">
                    <div class="width--half">
                        <h2>An</h2>
                        <h1>Axe-cellent</h1>
                        <h2>Adventure</h2>
                    </div>
                    <div class="width--half">
                        <a href="#" class="play-btn">
                            <i class="far fa-play-circle"></i>
                            <span class="play-btn--text">Watch Video</span>
                        </a>
                    </div>
                    <video class="bg-video"  mute autoplay>
                        <source src="<?php echo get_template_directory_uri(); ?>/images/video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>
            <section class="homepage--content homepage--about" id="about">
                <!-- About -->
                <div class="content--container-wide content--blocks container--rows container--space-between bg--darkgrey margin--bottom about-us-text">
                    <div class="width--third">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/axeshed-logo-white.png" alt="<?php echo get_bloginfo( 'site_name' ); ?> logo" class="about--logo">
                    </div>
                    <div class="width--two-thirds text--align-left">
                        <h1>Welcome to The Axe Shed</h1>
                        <p>Axe Throwing, Dart Throwing, and socializing in central Newfoundland. Your new spot for a great time with friends and colleagues. A great way to build you team or unwind after work, or both! Join us below the Legends lounge at The Axe Shed</p>
                    </div>
                </div>
                <div class="content--container content--blocks container--rows container--space-between">
                    <article class="width--third-w-mar bg--white about--article">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="alt">
                        <h3>This is a title</h3>
                        <p>Lorem ipsum dolar sit amet</p>
                    </article>
                    <article class="width--third-w-mar bg--white about--article">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="alt">
                        <h3>This is a title</h3>
                        <p>Lorem ipsum dolar sit amet</p>
                    </article>
                    <article class="width--third-w-mar bg--white about--article">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="alt">
                        <h3>This is a title</h3>
                        <p>Lorem ipsum dolar sit amet</p>
                    </article>
                </div>
            </section>
            <section class="homepage--content homepage--events" id="events">
                <div class="content--container content--blocks container--rows container--space-between section--header">
                    <div class="width--half">
                        <h1>Events</h1>
                    </div>
                    <div class="width--half">
                        <a href="#" class="btn bg--green">
                            View All Events
                        </a>
                    </div>
                </div>
                <div class="content--container content--blocks container--rows container--space-between">
                    <a href="#" class="width--quarter-w-mar event bg--white">
                        <h3>Event title here</h3>
                        <h4>Feb 20, 2020</h4>
                        <span class="btn bg--green">View Event</span>
                    </a>
                    <a href="#" class="width--quarter-w-mar event bg--white">
                        <h3>Another Event title here</h3>
                        <h4>Feb 20, 2020</h4>
                        <span class="btn bg--green">View Event</span>
                    </a>
                    <a href="#" class="width--quarter-w-mar event bg--white">
                        <h3>Event title here</h3>
                        <h4>Feb 20, 2020</h4>
                        <span class="btn bg--green">View Event</span>
                    </a>
                    <a href="#" class="width--quarter-w-mar event bg--white">
                        <h3>Another Event title here</h3>
                        <h4>Feb 20, 2020</h4>
                        <span class="btn bg--green">View Event</span>
                    </a>
                </div> 
            </section>
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
                                <span class="font--lg table--margin-top">$12</span>
                            </div>
                            <div class="column four">
                                <span class="font--med">1 Hour</span>
                                <span class="font--sm">per person</span>
                                <span class="font--lg table--margin-top">$20</span>
                            </div>
                            <div class="column five">
                                <span class="font--med">1 Hour</span>
                                <span class="font--sm">Group of 8+</span>
                                <span class="font--lg table--margin-top">$18</span>
                                <span class="font--sm">person</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="homepage--content homepage--content-blocks" id="league">
                <div class="content--container-wide content--blocks container--rows container--space-between">
                    <div class="width--half font-colour--white bg--orange">
                        <h1>Axe Throwing League</h1>
                        <p>Every week, spend some time in a friendly competition with new and old faces alike. League night is the place to improve your skills, show off as a professional axe throwing machine, and then demolish the competition.</p>
                        <h4>Date: Tuesday Nights</h4>
                        <h4>Length: 8 weeks</h4>
                        <a href="#" title="Get more info" aria-label="Get more info" class="btn bg--blue">Get More Info</a>
                    </div>
                    <div class="width--half bg--image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/test.jpg);">
                        
                    </div>
                </div>
            </section>
            <section class="homepage--content homepage--content-blocks" id="specials">
                <div class="content--container-wide content--blocks container--rows container--space-between">
                    <div class="width--half font-colour--white bg--blue">
                        <h1>Drink Specials</h1>
                        <h3>Daily Happy Hour &bull; 5-8PM</h3>
                        <p>Lorem ipsum dolar sit amet</p>
                        <h3>2 for 1 Friday</h3>
                        <a href="#" title="Get more info" aria-label="Get more info" class="btn bg--orange">See All Specials</a>
                    </div>
                    <div class="width--half font-colour--white bg--green">
                        <h1>Loyalty Program</h1>
                        <p>Every week, spend some time in a friendly competition with new and old faces alike. League night is the place to improve your skills, show off as a professional axe throwing machine, and then demolish the competition.</p>
                        <h4>Date: Tuesday Nights</h4>
                        <h4>Length: 8 weeks</h4>
                        <a href="#" title="Get more info" aria-label="Get more info" class="btn bg--orange">Get More Info</a>
                    </div>
                </div>
            </section>
            <section class="homepage--content homepage--googlemaps" id="hours">
                <div class="content--container-wide content--blocks container--rows container--space-between">
                    <div class="width--half font-colour--white bg--orange">
                        <h1>The Axe Shed</h1>
                        <h3>Location</h3>
                        <p>Lorem ipsum dolar sit amet</p>
                    </div>
                    <div class="googlemap">
                        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=1%20caldwell%20st%20gander&t=&z=15&ie=UTF8&iwloc=&output=embed&ll=48.951040,-54.603236" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
                
            </section>