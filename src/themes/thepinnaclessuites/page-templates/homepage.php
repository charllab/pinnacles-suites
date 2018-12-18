<?php
/**
 * Template Name: Home
 *
 * @package understrap
 */

get_header(); ?>

    <div class="side-b">

        <div id="home-page">

            <section class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                            <p class="mb-0">The Pinnacles is available for individual ownership:<br>
                                <a href="#" target="_blank">Summer 2018 Sale Pricing →</a></p>
                        </div>
                        <div class="col-lg-6 d-lg-flex align-self-lg-center justify-content-lg-end text-center topbar__telcta">
                            <a href="tel:2503092565"><i class="fas fa-phone"></i> 1-250-542-4548</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-intro-cta">
                <div class="container position-relative">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 text-center">
                            <a href="#" class="btn btn-secondary-vid mb-5">Watch Video</a>
                            <h1 class="text-white">Cozy Accommodations and Warm&nbsp;Hospitality</h1>
                            <p class="lead text-white">Watch our video to see what it’s like to experience all the comforts of home in
                                our vacation suites and townhouses.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center home-intro-cards">
                        <div class="col-md-6 col-xl-5 mb-5">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/images/index-suites-and-townhomes.jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Suites & Townhomes</h4>
                                    <p class="card-text">The Pinnacles Suites is a favourite among Silver Star
                                        accommodations.</p>
                                    <a href="#" class="btn btn-primary-arr">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5 mb-5">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/images/index-current-specials.jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Current Specials</h4>
                                    <p class="card-text">Experience the wonders of Silver Star with one of our seasonal
                                        promotions.</p>
                                    <a href="#" class="btn btn-primary-arr">View Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section home-newsletter-cta">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 offset-xl-1">
                            <h2 class="text-white">The Pinnacles Suites Newsletter</h2>
                            <p class="text-white">Stay up-to-date on the latest seasonal promotions and other news going on up at The Pinnacles
                                and Silver Star Mountain.</p>
                            <form>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Your Email" aria-label="Your Email"
                                           aria-describedby="newsletter-sign-up">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary-arr" type="button">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-5 offset-lg-1">
                            <img src="<?php bloginfo('template_url'); ?>/images/index-story-img-1.jpg" alt="" class="img-fluid mx-auto d-block mb-5 mb-lg-0">
                        </div>
                        <div class="col-lg-4 offset-lg-1 flex-column align-self-lg-center">
                            <h2>The Pinnacles Suites at Silver Star Mountain</h2>
                            <p>With spectacular views of the slopes and mountains, spacious suites offering all the comforts
                                of home and the charm of the original day lodge at our core, The Pinnacles Suites is a
                                favourite among Silver Star accommodations.</p>
                            <a href="#" class="btn btn-outline-primary d-lg-inline">Read our story</a>
                        </div>
                    </div>

                </div>
            </section>

            <section class="section">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-5 justify-content-lg-end ml-md-auto order-lg-1">
                            <img src="<?php bloginfo('template_url'); ?>/images/index-story-img-2.jpg" alt="" class="img-fluid mx-auto d-block mb-5 mb-lg-0">
                        </div>

                        <div class="col-lg-5 offset-lg-1 flex-lg-column align-self-lg-center">
                            <h2>Come For the Fun – Stay for the Comfort & Hospitality!</h2>
                            <p>Tucked into the slopes of British Columbia’s Silver Star Mountain Resort, we invite you to
                                experience our all-suite, all the comforts of home - vacation suites and townhouses. Our
                                dog-friendly, non-smoking facilities are perfect for families, groups, family reunions and
                                executive gatherings.</p>
                            <a href="#" class="btn btn-outline-primary d-lg-inline">Browse Accommodations</a>
                        </div>

                    </div>

                </div>
            </section>

            <section class="section">
                <div class="container">

                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <h2>Suites & Townhomes</h2>
                            <p>Our accommodations sleep up to 17 with the comforts of home and the service of a hotel.</p>
                        </div>
                        <div class="col-md-3 ml-md-auto">
                            [[buttons]]
                            <a href="#" class="btn btn-primary">View All</a>
                        </div>

                    </div>
            </section>

    <!--        <section class="d-flex accomodation-deck">-->
    <!---->
    <!--            <div class="card">-->
    <!--                <img class="card-img-top" src="https://via.placeholder.com/360x294" alt="">-->
    <!--                <div class="card-body">-->
    <!--                    <h4 class="card-title">Townhouse #25</h4>-->
    <!--                    <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and hot-->
    <!--                        tub.</p>-->
    <!--                    <ul>-->
    <!--                        <li>Sleeps up to 17</li>-->
    <!--                        <li>Pinnacles Slopeside</li>-->
    <!--                    </ul>-->
    <!--                    <a href="#" class="btn btn-primary-arr">View Details</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="card">-->
    <!--                <img class="card-img-top" src="https://via.placeholder.com/360x294" alt="">-->
    <!--                <div class="card-body">-->
    <!--                    <h4 class="card-title">Townhouse #25</h4>-->
    <!--                    <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and hot-->
    <!--                        tub.</p>-->
    <!--                    <ul>-->
    <!--                        <li>Sleeps up to 17</li>-->
    <!--                        <li>Pinnacles Slopeside</li>-->
    <!--                    </ul>-->
    <!--                    <a href="#" class="btn btn-primary-arr">View Details</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="card">-->
    <!--                <img class="card-img-top" src="https://via.placeholder.com/360x294" alt="">-->
    <!--                <div class="card-body">-->
    <!--                    <h4 class="card-title">Townhouse #25</h4>-->
    <!--                    <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and hot-->
    <!--                        tub.</p>-->
    <!--                    <ul>-->
    <!--                        <li>Sleeps up to 17</li>-->
    <!--                        <li>Pinnacles Slopeside</li>-->
    <!--                    </ul>-->
    <!--                    <a href="#" class="btn btn-primary-arr">View Details</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="card">-->
    <!--                <img class="card-img-top" src="https://via.placeholder.com/360x294" alt="">-->
    <!--                <div class="card-body">-->
    <!--                    <h4 class="card-title">Townhouse #25</h4>-->
    <!--                    <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and hot-->
    <!--                        tub.</p>-->
    <!--                    <ul>-->
    <!--                        <li>Sleeps up to 17</li>-->
    <!--                        <li>Pinnacles Slopeside</li>-->
    <!--                    </ul>-->
    <!--                    <a href="#" class="btn btn-primary-arr">View Details</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="card">-->
    <!--                <img class="card-img-top" src="https://via.placeholder.com/360x294" alt="">-->
    <!--                <div class="card-body">-->
    <!--                    <h4 class="card-title">Townhouse #25</h4>-->
    <!--                    <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and hot-->
    <!--                        tub.</p>-->
    <!--                    <ul>-->
    <!--                        <li>Sleeps up to 17</li>-->
    <!--                        <li>Pinnacles Slopeside</li>-->
    <!--                    </ul>-->
    <!--                    <a href="#" class="btn btn-primary-arr">View Details</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="card">-->
    <!--                <img class="card-img-top" src="https://via.placeholder.com/360x294" alt="">-->
    <!--                <div class="card-body">-->
    <!--                    <h4 class="card-title">Townhouse #25</h4>-->
    <!--                    <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and hot-->
    <!--                        tub.</p>-->
    <!--                    <ul>-->
    <!--                        <li>Sleeps up to 17</li>-->
    <!--                        <li>Pinnacles Slopeside</li>-->
    <!--                    </ul>-->
    <!--                    <a href="#" class="btn btn-primary-arr">View Details</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!---->
    <!--        </section>-->

            <section class="section">

                <div class="container mb-5">
                    <div class="row">
                        <div class="col-md-10 offset-md-1 d-flex">
                            <div class="mr-3">
                                <i class="fab fa-instagram fa-5x"></i>
                            </div>
                            <div class="align-self-center">
                                <h2 class="mb-0">Instagram</h2>
                                <p class="mb-0"><a href="#">@thepinnaclesatsilverstar</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="instagram-gallery">

                        <img src="<?php bloginfo('template_url'); ?>/images/index-instagram-img-1.jpg" alt="" class="img-fluid mx-auto">
                        <img src="<?php bloginfo('template_url'); ?>/images/index-instagram-img-2.jpg" alt="" class="img-fluid mx-auto">
                        <img src="<?php bloginfo('template_url'); ?>/images/index-instagram-img-3.jpg" alt="" class="img-fluid mx-auto">
                        <img src="<?php bloginfo('template_url'); ?>/images/index-instagram-img-4.jpg" alt="" class="img-fluid mx-auto">
                        <img src="<?php bloginfo('template_url'); ?>/images/index-instagram-img-5.jpg" alt="" class="img-fluid mx-auto">
                        <img src="<?php bloginfo('template_url'); ?>/images/index-instagram-img-6.jpg" alt="" class="img-fluid mx-auto">
                        <img src="<?php bloginfo('template_url'); ?>/images/index-instagram-img-7.jpg" alt="" class="img-fluid mx-auto">
                        <img src="<?php bloginfo('template_url'); ?>/images/index-instagram-img-8.jpg" alt="" class="img-fluid mx-auto">
                        <img src="<?php bloginfo('template_url'); ?>/images/index-instagram-img-9.jpg" alt="" class="img-fluid mx-auto d-none d-xl-block">
                        <img src="<?php bloginfo('template_url'); ?>/images/index-instagram-img-10.jpg" alt="" class="img-fluid mx-auto d-none d-xl-block">

                    </div>
                </div>

            </section>

        </div><!-- #home-page -->

<?php get_footer();
