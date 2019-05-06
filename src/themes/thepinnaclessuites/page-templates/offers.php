<?php
/**
 * Template Name: Special Offers
 *
 * @package understrap
 */

get_header(); ?>

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

                        <?php
                        if( have_rows('offers') ):

                            while ( have_rows('offers') ) : the_row();
                                $image_id = get_sub_field('featured_image');
                                $image_src = wp_get_attachment_image_src($image_id, 'banner-lg');
                            ?>

                                <?php if (get_sub_field('display_special')) { ?>
                                    <div class="card mx-0 mb-5">
                                        <img class="card-img-top h-100"
                                             src="<?php echo $image_src[0]; ?>"
                                             alt="<?php bloginfo('name'); ?> - <?php the_title(); ?>">
                                        <div class="card-body">
                                            <h2 class="card-title mt-0"><?php the_sub_field('title'); ?></h2>
                                            <p class="card-text"><?php the_sub_field('description'); ?></p>
                                            <a target="_blank" href="<?php the_field('booking_link', 'options'); ?>" class="btn btn-primary mr-auto btn--arrow">Book Now</a>
                                        </div>
                                    </div>
                                <?php } ?>

                            <?php endwhile;

                        endif;
                        ?>

                        <?php the_field('disclaimer'); ?>
                    </div>
                </div><!-- col -->
                <div class="col-xl-4">
                    <?php get_template_part('includes/standard', 'sidebar'); ?>
                </div><!-- col -->
            </div><!-- /row -->

        </div><!-- container -->
    </section><!-- /page content -->

<?php get_footer();
