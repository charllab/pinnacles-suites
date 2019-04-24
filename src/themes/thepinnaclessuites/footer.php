<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<footer>

    <section class="section">
        <div class="container padded-container">
            <div class="row">
                <div class="col-sm-6 col-xxl-3 text-center text-sm-left">
                    <h4>Contact Us</h4>
                    <p>
                        9885 Pinnacles Road<br>
                        Box 3008<br>
                        Silver Star Mountain, BC<br>
                        V1B 3M1 Canada
                    </p>
                    <p>
                        Toll Free: 1-800-551-7466<br>
                        Direct: 250-542-4548<br>
                        Fax: 250-542-8508
                    </p>
                    <p><a href="mailto:reserve@pinnacles.com">reserve@pinnacles.com</a></p>
                </div>
                <div class="col-sm-6 col-xxl-3 text-center text-sm-left">
                    <h4>Navigation</h4>
                    <ul class="list-unstyled">
                        <li><a href="<?php bloginfo('url'); ?>/your-stay">Your Stay</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/your-stay/amenities">Amenities</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/your-stay/frequently-asked-questions">FAQ</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/special-offers">Special Offers</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/policies">Policies</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/about-us/our-story">Our Story</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/about-us/history">History</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/about-us/contact">Contact Us</a></li>
                        <li>
                            <a target="_blank" href="https://secure.webrez.com/Bookings-cr/login-owner.html?hotel_id=1921&mode=unitowner">
                                Unit Owner Login &nbsp;<i class="fas fa-external-link-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-xxl-3 text-center text-sm-left">
                    <h4>Accommodations</h4>
                    <ul class="list-unstyled">
                        <li><a href="<?php bloginfo('url'); ?>/accommodations/pinnacles-slopeside-townhomes">Pinnacles Slopeside
                                Townhouses</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/accommodations/central-lodge-suites">Central Lodge Suites</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/accommodations/west-wing-townhomes">West Wing Townhouses</a></li>
                    </ul>
                    <a href="https://www.tripadvisor.com/Hotel_Review-g1973875-d4744981-Reviews-The_Pinnacles_Suite_Hotel-Silver_Star_Okanagan_Valley_British_Columbia.html"
                       target="_blank"><img
                            src="<?php bloginfo('template_url'); ?>/images/footertrip-advisor-logo@2x.png" alt=""
                            class="img-fluid mx-auto mb-4 mb-sm-0"></a>
                </div>
                <div class="col-10 offset-1 col-sm-6 offset-sm-0 col-xxl-3 text-center text-sm-left">
                    <h4>The Pinnacles Suites Newsletter</h4>
                    <p>Stay up-to-date on the latest seasonal promotions and other news going on up at The Pinnacles and
                        Silver&nbsp;Star&nbsp;Mountain.</p>
	                <a href="https://pinnacles.us16.list-manage.com/subscribe/post?u=cd64218565c43e3ff41803bb1&amp;id=5bf112dd97" target="_blank" class="btn btn-secondary btn--icon">Subscribe <i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>
    </section>


    <section class="footer-bar">
        <div class="container padded-container">
            <div class="row py-3">
                <div class="col-lg-4 text-center text-lg-left">
                    <p class="mb-2 mb-lg-0">&copy; <?php echo date("Y"); ?> The Pinnacles Suites</p>
                </div>
                <div class="col-lg-8 text-center text-lg-right">
                    <p class="mb-0">Designed, Developed and Hosted by <a href="https://sproing.ca/" target="_blank">Sproing
                            Creative</a></p>
                </div>
            </div>
        </div>
    </section>

</footer>

</div><!-- side-b -->
</div><!-- sides-wrapper -->
</div><!-- /#page -->

<?php wp_footer(); ?>

</body>

</html>