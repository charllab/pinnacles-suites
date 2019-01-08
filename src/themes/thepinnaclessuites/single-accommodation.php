<?php get_header(); ?>

<?php the_title(); ?>

<?php the_field('size'); ?>

    <section>
        <div class="container">
            <div class="row">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
            </div><!-- row -->
            <div class="row no-gutters">
                <div class="col-lg-6 col-xl-5 p-lg-5 py-5">
                    <h2>Townhouse #24</h2>
                    <h4>Where do you want to end your day at Silver Star?</h4>
                    <p>Pinnacles Slopeside Townhouse 24 gives you everything you need to make the most of your stay: a
                        kitchen like the one you’re used to, with plenty of counter space and sleek stainless steel
                        appliances; well-appointed bedrooms; and a heated deck and hot tub for you to soak your muscles
                        and admire the snow-capped pine trees.This elegant executive townhome also features a gas
                        fireplace in the living room and breathtaking views of the Monashee Mountain Range from the
                        light-filled dining&nbsp;area.</p>
                    <h4>Extras you’ll love about Townhouse&nbsp;24:</h4>
                    <ul>
                        <li>Four cable flat-screen TV’s</li>
                        <li>Boot room with heated tile floor</li>
                        <li>Heated deck housing private BBQ and hot tub filled in the winter (for summer there is a fee
                            to have the hot tub filled)
                        </li>
                    </ul>
                    <h4>The Sleeping Arrangements</h4>
                    <p>All three bedrooms are located on the upper floor along with a full bathroom and a stacked
                        washer/dryer.</p>
                    <h4>Master bedroom</h4>
                    <ul>
                        <li>King-size bed</li>
                        <li>Queen sofa bed</li>
                        <li>Expansive ensuite</li>
                        <li>TV/DVD</li>
                    </ul>
                    <h4>Bedroom 2</h4>
                    <ul>
                        <li>Queen-size bed</li>
                    </ul>
                    <h4>Bedroom 3</h4>
                    <ul>
                        <li>Single + single bunk bed</li>
                        <li>Queen + single bunk bed</li>
                    </ul>

                    <h4>Living room</h4>
                    <ul>
                        <li>Queen sofa bed</li>
                    </ul>
                    <p>So which room are you going to sleep in?</p>
                    <a href="#" class="btn btn-primary-arr">Book This Townhouse</a>
                </div><!-- col -->


                <div class="col-lg-6 col-xl-7">
                    <div class="row no-gutters">

                        <div class="order-3 order-lg-2 d-flex flex-wrap no-gutters mb-4">
                            <div class="col-xxl-12">
                                <img src="https://via.placeholder.com/825x550" alt=""
                                     class="img-fluid d-block">
                            </div>
                            <div class="col-xxl-6">
                                <img src="https://via.placeholder.com/825x550" alt=""
                                     class="img-fluid d-block">
                            </div>
                            <div class="col-xxl-6">
                                <img src="https://via.placeholder.com/825x550" alt=""
                                     class="img-fluid d-block">
                            </div>
                            <div class="d-none d-xxl-block col-xxl-4">
                                <img src="https://via.placeholder.com/825x550" alt=""
                                     class="img-fluid d-block">
                            </div>
                            <div class="d-none d-xxl-block col-xxl-4">
                                <img src="https://via.placeholder.com/825x550" alt=""
                                     class="img-fluid d-block">
                            </div>
                            <div class="d-none d-xxl-block col-xxl-4">
                                <img src="https://via.placeholder.com/825x550" alt=""
                                     class="img-fluid d-block">
                            </div>
                        </div><!-- order -->

                        <div class="order-2 order-lg-3 d-flex flex-wrap w-100 accommodationTables mb-4">

                            <div class="row">
                                <div class="col-xxl-6 mb-3">
                                    <h4>Fast Facts</h4>
                                    <table class="table table-striped table-sm">
                                        <tr>
                                            <td class="td-w-40">Size:</td>
                                            <td><?php the_field('size'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Sleeps:</td>
                                            <td>9 to 13</td>
                                        </tr>
                                        <tr>
                                            <td>Bedrooms:</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>Lofts:</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Bathrooms:</td>
                                            <td>2.5</td>
                                        </tr>
                                        <tr>
                                            <td>Fireplace:</td>
                                            <td>Yes - Gas</td>
                                        </tr>
                                        <tr>
                                            <td>BBQ:</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Outside Deck:</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Hot Tub:</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Ski Locker:</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>View:</td>
                                            <td>Silver Star Village and Monashee Mountain Range</td>
                                        </tr>
                                        <tr>
                                            <td>Ski-in/Ski-out:</td>
                                            <td>Ski Access to the Gondola & Comet Chairs, Alpine Meadows, Silver Queen &
                                                the Village
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Internet:</td>
                                            <td>WiFi</td>
                                        </tr>
                                        <tr>
                                            <td>Laundry:</td>
                                            <td>In-suite washer/dryer</td>
                                        </tr>
                                        <tr>
                                            <td>Garage:</td>
                                            <td>Heated tandem two-car</td>
                                        </tr>
                                        <tr>
                                            <td>Mud/Drying Room:</td>
                                            <td>Yes</td>
                                        </tr>
                                    </table>
                                </div><!-- col -->

                                <div class="col-xxl-6">
                                    <h4>Rates</h4>
                                    <table class="table table-sm">
                                        <tr>
                                            <td scope="col">Nov 08 - Dec 20, 2018</td>
                                            <td scope="col">Early Winter</td>
                                            <td scopr="col">$579/night</td>
                                        </tr>
                                        <tr>
                                            <td>Dec 21 - Jan 5, 2019</td>
                                            <td>Holiday</td>
                                            <td>$884/night</td>
                                        </tr>
                                        <tr>
                                            <td>Jan 6 - Apr 7, 2019</td>
                                            <td>Winter</td>
                                            <td>$649/night</td>
                                        </tr>
                                        <tr>
                                            <td>Jun 22 - Sept 16, 2018</td>
                                            <td>Summer</td>
                                            <td>$434/night</td>
                                        </tr>
                                    </table>
                                </div><!-- col -->

                            </div><!-- row -->


                        </div><!-- order -->

                    </div><!-- row -->

                </div><!-- col -->

            </div><!-- row no-gutters-->
        </div><!-- container -->
    </section>

    <section class="accommodation-bg">

    <section>
        <div class="container padded-container">

            <div class="row">
                <div class="col-xl-6">
                    <h2>More Suites & Townhomes:</h2>
                    <p>You might also be intersested in the&nbsp;following:</p>
                </div>
                <div class="col-xl-4 mx-auto mr-xl-0 mb-5 mb-xl-0 d-flex align-items-start justify-content-around acc-controls">
                    <div class="acc-btn-set d-flex justify-content-between">
                        <div id="customNav" class="owl-nav d-flex"></div>
                    </div>
                    <a href="#" class="btn btn-primary">View All</a>
                </div>

            </div>
    </section>

    <div class="owl-carousel owl-theme">
        <div class="card">
            <img class="card-img-top h-100"
                 src="<?php bloginfo('template_url'); ?>/images/index-townhouse-card-img-1.jpg" alt="">
            <div class="card-body">
                <h4 class="card-title">Townhouse #25</h4>
                <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and
                    hot
                    tub.</p>
                <ul class="list-unstyled">
                    <li>Sleeps up to 17</li>
                    <li>Pinnacles Slopeside</li>
                </ul>
                <a href="#" class="btn btn-primary-arr">View Details</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top h-100"
                 src="<?php bloginfo('template_url'); ?>/images/index-townhouse-card-img-1.jpg" alt="">
            <div class="card-body">
                <h4 class="card-title">Townhouse #25</h4>
                <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and
                    hot
                    tub.</p>
                <ul class="list-unstyled">
                    <li>Sleeps up to 17</li>
                    <li>Pinnacles Slopeside</li>
                </ul>
                <a href="#" class="btn btn-primary-arr">View Details</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top h-100"
                 src="<?php bloginfo('template_url'); ?>/images/index-townhouse-card-img-1.jpg" alt="">
            <div class="card-body">
                <h4 class="card-title">Townhouse #25</h4>
                <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and
                    hot
                    tub.</p>
                <ul class="list-unstyled">
                    <li>Sleeps up to 17</li>
                    <li>Pinnacles Slopeside</li>
                </ul>
                <a href="#" class="btn btn-primary-arr">View Details</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top h-100"
                 src="<?php bloginfo('template_url'); ?>/images/index-townhouse-card-img-1.jpg" alt="">
            <div class="card-body">
                <h4 class="card-title">Townhouse #25</h4>
                <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and
                    hot
                    tub.</p>
                <ul class="list-unstyled">
                    <li>Sleeps up to 17</li>
                    <li>Pinnacles Slopeside</li>
                </ul>
                <a href="#" class="btn btn-primary-arr">View Details</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top h-100"
                 src="<?php bloginfo('template_url'); ?>/images/index-townhouse-card-img-1.jpg" alt="">
            <div class="card-body">
                <h4 class="card-title">Townhouse #25</h4>
                <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and
                    hot
                    tub.</p>
                <ul class="list-unstyled">
                    <li>Sleeps up to 17</li>
                    <li>Pinnacles Slopeside</li>
                </ul>
                <a href="#" class="btn btn-primary-arr">View Details</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top h-100"
                 src="<?php bloginfo('template_url'); ?>/images/index-townhouse-card-img-1.jpg" alt="">
            <div class="card-body">
                <h4 class="card-title">Townhouse #25</h4>
                <p class="card-text">Well-appointed bedrooms, views and the all-important heated sun-deck and
                    hot
                    tub.</p>
                <ul class="list-unstyled">
                    <li>Sleeps up to 17</li>
                    <li>Pinnacles Slopeside</li>
                </ul>
                <a href="#" class="btn btn-primary-arr">View Details</a>
            </div>
        </div>
    </div>


<?php get_footer();
