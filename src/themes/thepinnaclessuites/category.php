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
    <section class="content pb-3">
        <div class="container padded-container" id="post-<?php the_ID(); ?>">

            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-12 mt-4">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>

                    <h1 class="page-title"><?php single_cat_title(); ?></h1>
                </div><!-- row -->
            </div>

            <div class="mb-5"><?php the_field('long_description', $category); ?></div>

            <div class="row justify-content-start">

                <?php while ($the_query->have_posts()) : $the_query->the_post();

                    $image = get_field('accommodation_featured_images');
                    $categories = get_the_category();
                    ?>


                    <div class="col-12 col-md-6 col-xxl-4 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top"
                                 src="<?php echo $image['url']; ?>"
                                 alt="<?php bloginfo('name'); ?> - <?php the_title(); ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title(); ?><br/></h4>
                                <p class="card-text"><?php the_field('excerpt'); ?></p>
                                <ul class="list-unstyled">
                                    <li>Sleeps <?php the_field('sleeps'); ?></li>
                                    <li><?php echo '<a href="'.esc_url(get_category_link($categories[0]->term_id)).'">'.esc_html($categories[0]->name).'</a>'; ?></li>
                                </ul>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn--arrow mr-auto">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div><!-- col -->


                <?php endwhile;
                wp_reset_postdata(); ?>

            </div><!-- row -->
    </section>

<?php get_footer();
