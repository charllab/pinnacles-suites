<?php
/**
 * Template Name: Home
 *
 * @package understrap
 */

get_header(); ?>

    <div id="home-page">

    <section class="home-intro-cta">
        <div class="container padded-container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8 col-xxl-7 text-center">
                    <a href="https://www.youtube.com/watch?v=M0pPP-5OByY" class="btn btn-secondary btn--icon mb-5 js-video-modal">Watch
                        Video <i class="fas fa-play"></i></a>
                    <h1 class="text-white">Cozy Accommodations and Warm&nbsp;Hospitality</h1>
                    <p class="lead text-white">Watch our video to see what it’s like to experience all the comforts
                        of home in
                        our vacation suites and townhouses.</p>
                </div>
            </div>
            <div class="row justify-content-center home-intro-cards">
                <div class="col-md-6 col-xl-5 mb-5">
                    <div class="card">
                        <img class="card-img-top img-fluid d-block h-100"
                             src="<?php bloginfo('template_url'); ?>/images/index-suites-and-townhomes.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Suites & Townhomes</h4>
                            <p class="card-text">The Pinnacles Suites is a favourite among Silver Star
                                accommodations.</p>
                            <a href="<?php bloginfo('url'); ?>/accommodations" class="btn btn-primary btn--arrow">View All</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-5 mb-5">
                    <div class="card">
                        <img class="card-img-top img-fluid d-block h-100"
                             src="<?php bloginfo('template_url'); ?>/images/index-current-specials.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Current Specials</h4>
                            <p class="card-text">Experience the wonders of Silver Star with one of our seasonal
                                promotions.</p>
                            <a href="<?php bloginfo('url'); ?>/special-offers" class="btn btn-primary btn--arrow">View Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section home-newsletter-cta position-relative">
        <div class="container padded-container">

            <div class="hone-newsletter-bgsplit d-flex">
                <div class="img-clipblock img-clip-1"></div>
                <div class="d-xl-block img-clipblock col-xl-4 img-clip-2"></div>
            </div>

            <div class="row">
                <div class="col-md-10 offset-md-1 col-xl-6 offset-xl-1">
                    <h2 class="text-white">The Pinnacles Suites Newsletter</h2>
                    <p>Stay up-to-date on the latest seasonal promotions and other news going on up at The Pinnacles and Silver Star
                        Mountain. Please select all the ways you would like to hear from us and then subscribe.</p>

                    <div id="mc_embed_signup">
                        <form action="https://pinnacles.us16.list-manage.com/subscribe/post?u=cd64218565c43e3ff41803bb1&amp;id=5bf112dd97"
                              method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                              target="_blank">
                            <div id="mc_embed_signup_scroll">

                                <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
                                    <div class="content__gdpr">
                                        <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
                                            <label class="checkbox subfield" for="gdpr_9729"><input type="checkbox" id="gdpr_9729"
                                                                                                    name="gdpr[9729]" value="Y"
                                                                                                    class="av-checkbox "><span>Email</span>
                                            </label><label class="checkbox subfield" for="gdpr_9733"><input type="checkbox" id="gdpr_9733"
                                                                                                            name="gdpr[9733]" value="Y"
                                                                                                            class="av-checkbox "><span>Direct Mail</span>
                                            </label><label class="checkbox subfield" for="gdpr_9737"><input type="checkbox" id="gdpr_9737"
                                                                                                            name="gdpr[9737]" value="Y"
                                                                                                            class="av-checkbox "><span>Customized Online Advertising</span>
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" required placeholder="Email Address" name="EMAIL">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary btn--arrow" type="submit">Subscribe</button>
                                    </div>
                                </div>

                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                                          name="b_cd64218565c43e3ff41803bb1_5bf112dd97"
                                                                                                          tabindex="-1" value=""></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div><!-- row -->


        </div><!-- container -->
    </section>

    <section class="section pb-xl-0">
        <div class="container padded-container">

            <div class="row">
                <div class="col-md-8 offset-md-2 col-xl-5 offset-xl-1">
                    <img src="<?php bloginfo('template_url'); ?>/images/index-story-img-1.jpg" alt="<?php bloginfo('name'); ?>"
                         class="img-fluid w-100 d-block mb-5 mb-xl-0">
                </div>
                <div class="col-md-8 offset-md-2 col-xl-4 offset-xl-1 flex-column align-self-lg-center">
                    <h2>The Pinnacles Suites at Silver Star Mountain</h2>
                    <p>With spectacular views of the slopes and mountains, spacious suites offering all the comforts
                        of home and the charm of the original day lodge at our core, The Pinnacles Suites is a
                        favourite among Silver Star accommodations.</p>
                    <a href="<?php bloginfo('url'); ?>/about-us" class="btn btn-outline-primary">Read Our Story</a>
                </div>
            </div>

        </div>
    </section>

    <section class="section mb-3">
        <div class="container padded-container">

            <div class="row">

                <div class="col-md-8 offset-md-2 col-xl-5 justify-content-xl-end ml-xl-auto order-xl-1">
                    <img src="<?php bloginfo('template_url'); ?>/images/index-story-img-2.jpg" alt="<?php bloginfo('name'); ?>"
                         class="img-fluid w-100 d-block mb-5 mb-xl-0">
                </div>

                <div class="col-md-8 offset-md-2 col-xl-5 offset-xl-1 flex-xl-column align-self-lg-center">
                    <h2>Come For the Fun – Stay for the Comfort & Hospitality!</h2>
                    <p>Tucked into the slopes of British Columbia’s Silver Star Mountain Resort, we invite you to
                        experience our all-suite, all the comforts of home - vacation suites and townhouses. Our
                        dog-friendly, non-smoking facilities are perfect for families, groups, family reunions and
                        executive gatherings.</p>
                    <a href="<?php bloginfo('url'); ?>/accommodations" class="btn btn-outline-primary">Browse Accommodations</a>
                </div>

            </div>

        </div>
    </section>


    <section class="accommodation-bg">

        <div class="container">
            <div class="row">
                <div class="col-10 offset-1 col-xl-5 offset-md-1">
                    <h2>Featured Suites & Townhomes</h2>
                    <p class="mb-3">Our accommodations sleep up to 17 with the comforts of home and the service of a hotel.</p>
                </div>
                <div
                    class="col-10 offset-1 offset-xl-0 col-xl-4 mx-auto mr-xl-0 mb-5 mb-xl-0 d-flex align-items-start justify-content-around acc-controls">
                    <div class="acc-btn-set d-flex justify-content-between">
                        <div id="customNav" class="owl-nav d-flex"></div>
                    </div>
                    <a href="<?php bloginfo('url'); ?>/accommodations" class="btn btn-primary">View All</a>
                </div>
            </div>
        </div>

        <?php get_template_part('includes/accom-carousel'); ?>

        <div class="container padded-container mb-5 instagram-intro">
            <div class="row">
                <div class="col-md-10 offset-md-1 d-flex">
                    <div class="mr-3">
                        <i class="fab fa-instagram fa-5x"></i>
                    </div>
                    <div class="align-self-center text-left">
                        <h2 class="mb-0">Instagram</h2>
                        <p class="mb-0 instagram-user"><a href="https://www.instagram.com/thepinnaclesatsilverstar/" target="_blank">@thepinnaclesatsilverstar</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <?php echo do_shortcode('[instagram-feed num=12 cols=6 showfollow=false]'); ?>
        </div>

    </section>

<?php get_footer();
