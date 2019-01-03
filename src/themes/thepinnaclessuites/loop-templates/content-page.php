<?php
/**
 * Partial template for content in page.php
 */

?>

<section class="content">
    <div class="container padded-container" id="post-<?php the_ID(); ?>">

        <div class="row">
            <div class="col-xl-7 mt-5 mt-lg-6 mb-3 mb-xl-6 pr-xl-5">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>

                <?php the_content(); ?>
            </div><!-- col -->
            <div class="col-xl-5 pl-xxl-5">
                <?php get_template_part('includes/standard', 'sidebar'); ?>
            </div><!-- col -->
        </div><!-- /row -->

    </div><!-- container -->
</section><!-- /page content -->