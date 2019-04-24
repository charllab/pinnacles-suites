<?php
/**
 * Partial template for content in page.php
 */

?>

<section class="content pb-3">
    <div class="container padded-container" id="post-<?php the_ID(); ?>">

        <div class="row justify-content-between">
            <div class="col-xl-8 col-xxl-7 mt-4 mb-3 mb-xl-6 pr-xl-5">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>

	            <h1 class="page-title"><?php the_title(); ?></h1>

	            <div class="wp-content-body">
                    <?php the_content(); ?>
	            </div>
            </div><!-- col -->
            <div class="col-xl-4">
                <?php get_template_part('includes/standard', 'sidebar'); ?>
            </div><!-- col -->
        </div><!-- /row -->

    </div><!-- container -->
</section><!-- /page content -->