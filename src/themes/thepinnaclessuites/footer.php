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
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
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
                    <div class="col-md-6 col-lg-3">
                        <h4>Navigation</h4>
                        <ul class="list-unstyled mb-0">
                            <li><a href="<?php bloginfo('url'); ?>/your-stay">Your Stay</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/amenities">Amenities</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/faq">FAQ</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/special-offers">Special Offers</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/our-story">Our Story</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/policies">Policies</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/history">History</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/contact-and-locations">Contact & Location</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4>Accommodations</h4>
                        <ul class="list-unstyled">
                            <li><a href="<?php bloginfo('url'); ?>/pinnacles-slopeside-townhouses">Pinnacles Slopeside Townhouses</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/central-lodge-suites">Central Lodge Suites</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/west-wing-townhouses">West Wing Townhouses</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4>The Pinnacles Suites Newsletter</h4>
                        <p>Stay up-to-date on the latest seasonal promotions and other news going on up at The Pinnacles and Silver Star Mountain.</p>
                        <form>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Your Email" aria-label="Your Email" aria-describedby="newsletter-sign-up">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary-arr" type="button">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>



        <section class="footer-bar">
            <div class="container">
                <div class="row py-3">
                    <div class="col-md-6">
                        <p class="mb-0">&copy; <?php echo date("Y"); ?> The Pinnacles Suites</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="mb-0">Designed, Developed and Hosted by <a href="https://sproing.ca/" target="_blank">Sproing Creative</a></p>
                    </div>
                </div>
            </div>
        </section>

    </footer>


<?php wp_footer(); ?>

</body>

</html>