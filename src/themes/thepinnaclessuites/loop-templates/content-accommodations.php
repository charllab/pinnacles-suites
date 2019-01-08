<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>

<section class="content">
    <div class="container padded-container" id="post-<?php the_ID(); ?>">

        <div class="row justify-content-center">
            <div class="col-md-8 col-xl-12 mt-5 mt-lg-6">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
            </div><!-- row -->

            <div class="row mb-3 mb-xl-6 justify-content-around">
                <div class="col-md-8 col-xl-5">
                    <img src="https://via.placeholder.com/571" alt=""
                         class="img-fluid mx-auto d-block mb-5 mb-xl-0">
                </div>
                <div class="col-md-8 col-xl-5 flex-column align-self-lg-center">
                    <h2>Pinnacles Slopeside</h2>
                    <p>Nestled into the hillside between the Alpine Meadows and Summit lifts, the Pinnacles Slopeside wing of our hotel was aptly named when it opened. Since then, the Pinnacles have become the kind of townhouses Silver Star devotees try to keep a&nbsp;secret.</p>
                    <a href="<?php bloginfo('url')?>/accommodations/pinnacles-slopeside-townhomes" class="btn btn-outline-primary d-block mb-5 mb-xl-0 d-xl-inline">View Townhouses</a>
                </div>
            </div><!-- row -->

            <div class="row mb-3 mb-xl-6 justify-content-around">

                <div class="col-md-8 col-xl-5 justify-content-xl-end order-xl-1">
                    <img src="https://via.placeholder.com/571" alt=""
                         class="img-fluid mx-auto d-block mb-5 mb-xl-0">
                </div>
                <div class="col-md-8 col-xl-5 flex-xl-column align-self-lg-center">
                    <h2>Central Lodge</h2>
                    <p>The central portion of the building was the original Silver Star Day Lodge. Each of the twelve suites has its own unique floor plan and character. Many of the two, three and four bedroom suites highlight the building’s heavy beam construction. And kids love the unique sleeping lofts tucked into corners of several of the suites. Most units have private hot tubs and barbecues on their&nbsp;sundecks.</p>
                    <a href="<?php bloginfo('url')?>/accommodations/central-lodge-suites" class="btn btn-outline-primary d-block mb-5 mb-xl-0 d-xl-inline">View Suites</a>
                </div>
            </div><!-- row -->

            <div class="row mb-3 mb-xl-6 justify-content-around">
                <div class="col-md-8 col-xl-5">
                    <img src="https://via.placeholder.com/571" alt=""
                         class="img-fluid mx-auto d-block mb-5 mb-xl-0">
                </div>
                <div class="col-md-8 col-xl-5 flex-column align-self-lg-center">
                    <h2>West Wing</h2>
                    <p>The West Wing consists of two, four-bedroom deluxe townhome style suites. Each unit boasts two master bedrooms with ensuite washrooms plus private hot tub on the&nbsp;sundeck.</p>
                    <a href="<?php bloginfo('url')?>/accommodations/west-wing-townhomes" class="btn btn-outline-primary d-block mb-5 mb-xl-0 d-xl-inline">View Suites</a>
                </div>
            </div><!-- row -->

        </div><!-- container -->
</section><!-- /page content -->