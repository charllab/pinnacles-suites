<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>

<div class="row">
    <div class="col-lg-8">
        <article <?php post_class('pr-0 pr-lg-5 pageContent'); ?> id="post-<?php the_ID(); ?>">

            <div class="entry-content">

                <?php the_content(); ?>

            </div><!-- .entry-content -->

        </article><!-- #post-## -->
    </div>
    <div class="col-10 offset-1 col-sm-6 offset-sm-3 col-lg-4 offset-lg-0 d-flex flex-column align-items-sm-start">
        <div class="howAndWho__forWho d-flex flex-column align-items-center mt-4 mt-md-0" id="forRenters">
            <h2 class="text-center text-md-left">For Renters</h2>
            <img src="<?php bloginfo('template_url'); ?>/images/index-renters.jpg" alt="A father and mother embracing their child">
            <div class="howAndWho__infoBlock">
                <p>The path to home ownership is rent-to-own</p>
                <a href="#">Learn More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="howAndWho__forWho d-flex flex-column align-items-center mt-4" id="forInvestors">
            <h2 class="text-center text-md-left mt-2">For Investors</h2>
            <img src="<?php bloginfo('template_url'); ?>/images/index-investors.jpg" alt="A potential investor">
            <div class="howAndWho__infoBlock">
                <p>Real estate investments that make sense</p>
                <a href="#">Learn More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>