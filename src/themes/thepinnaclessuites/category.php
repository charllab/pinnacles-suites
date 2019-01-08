<?php get_header(); ?>

<?php
$category = get_queried_object();
?>
<?php
$the_query = new WP_Query([
    'post_type' => 'accommodation',
    'cat' => $category->term_id,
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
]);
?>

    <section>

        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-12 mb-3">
                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                    ?>
                    <h2 class="text-center text-sm-left"><?php single_cat_title(); ?></h2>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="container category-page pb-5">
            <div class="row no-gutters justify-content-start">

                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


                    <div class="col-12 col-md-6 col-xxl-4 mb-4">
                        <div class="card">
                            <img class="card-img-top h-100"
                                 src="<?php bloginfo('template_url'); ?>/images/index-townhouse-card-img-1.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title(); ?><br/></h4>
                                <p class="card-text"><?php the_field('excerpt'); ?></p>
                                <ul class="list-unstyled">
                                    <li>Sleeps up to 17</li>
                                    <li>Pinnacles Slopeside</li>
                                </ul>
                                <a href="<?php bloginfo('url')?>/accommodation/townhouse-24" class="btn btn-primary-arr">View Details</a>
                            </div>
                        </div>
                    </div><!-- col -->


                <?php endwhile;
                wp_reset_postdata(); ?>


            </div><!-- row -->
        </div><!-- container -->
    </section>

<?php get_footer();
