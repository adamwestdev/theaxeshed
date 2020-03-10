            <footer class="footer<?php if( is_front_page() ) : echo ' footer--home'; endif; ?>">
                <nav class="footer--nav">
                    <ul>
                        <li><a href="#about">About</a></li>
                        <li><a href="#booknow">Book Now</a></li>
                        <li><a href="#league">League</a></li>
                        <li><a href="#specials">Specials</a></li>
                        <li><a href="#hours">Hours</a></li>
                        <li class="return-to-top"><a href="#top">Return to Top</a></li>
                    </ul>
                </nav>
                <div class="footer--info">
                    <p><a href="#">Privacy Policy</a> <a href="#">Terms &amp; Conditions</a> &copy; <?php echo date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?></p>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>