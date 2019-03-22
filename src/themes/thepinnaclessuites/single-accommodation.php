<?php get_header(); ?>

    <section class="content pb-3">
        <div class="container padded-container" id="post-<?php the_ID(); ?>">

            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-12 mt-4">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>

                    <a href="<?php the_field('booking_link'); ?>" target="_blank" class="btn btn-primary btn--arrow float-right">
                        Book Now
                    </a>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </div><!-- row -->
            </div>

            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <?php the_field('accommodation_content'); ?>
                    <a href="<?php the_field('booking_link'); ?>" target="_blank" class="btn btn-primary btn--arrow mt-4">
                        Book Now
                    </a>
                </div>

                <div class="col-lg-6">
                    <?php $images = get_field('accommodation_gallery'); ?>

                    <div id="home-slideshow" class="carousel slide carousel-fade mb-5" data-ride="carousel">
                        <ol class="carousel-indicators d-none d-lg-flex">
                            <?php $index = 0; ?>
                            <?php foreach ($images as $key => $image): ?>
                                <li data-target="#home-slideshow" data-slide-to="<?php echo $index; ?>"
                                    class="<?php echo($index == 0 ? 'active' : ''); ?>"></li>
                                <?php $index++; ?>
                            <?php endforeach; ?>

                        </ol>
                        <div class="carousel-inner">
                            <?php $index = 0; ?>
                            <?php foreach ($images as $key => $image): ?>
                                <div class="carousel-item <?php echo($index == 0 ? 'active' : ''); ?>">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                </div>
                                <?php $index++; ?>
                            <?php endforeach; ?>
                        </div>

                        <a class="carousel-control-prev" href="#home-slideshow" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#home-slideshow" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <h3>Rates</h3>
                    <?php the_field('rate'); ?>

                    <hr/>

                    <h3>Quick Facts</h3>
                    <table class="table table-striped table-sm">
                        <?php while (have_rows('facts')) : the_row(); ?>
                            <tr>
                                <td class="w-25"><?php the_sub_field('label'); ?></td>
                                <td><?php the_sub_field('value'); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </table>

                </div><!-- col -->

            </div><!-- row no-gutters-->
        </div><!-- container -->
    </section>

    <section class="accommodation-bg mt-5 pb-0">

        <section>
            <div class="container padded-container">

                <div class="row">
                    <div class="col-xl-6">
                        <h2>Suites & Townhomes</h2>
                        <p>You might also be interested in the&nbsp;following accommodations.</p>
                    </div>
                    <div class="col-xl-4 mx-auto mr-xl-0 mb-5 mb-xl-0 d-flex align-items-start justify-content-around acc-controls">
                        <div class="acc-btn-set d-flex justify-content-between">
                            <div id="customNav" class="owl-nav d-flex"></div>
                        </div>
                        <a href="<?php bloginfo('url'); ?>/accommodations" class="btn btn-primary">View All</a>
                    </div>

                </div>
        </section>

        <div class="owl-carousel owl-theme">
            <?php
            $post_objects = get_field('featured_accommodations', 'option');

            if ($post_objects): ?>
                <?php foreach ($post_objects as $post): ?>
                    <?php setup_postdata($post); ?>

                    <?php
                    $image = get_field('accommodation_featured_images');
                    $categories = get_the_category();
                    ?>

                    <div class="card">
                        <img class="card-img-top h-100"
                             src="<?php echo $image['url']; ?>"
                             alt="<?php bloginfo('name'); ?> - <?php the_title(); ?>">
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <p class="card-text"><?php the_field('excerpt'); ?></p>
                            <ul class="list-unstyled">
                                <li>Sleeps <?php the_field('sleeps'); ?></li>
                                <li><?php echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>'; ?></li>
                            </ul>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn--arrow">View Details</a>
                        </div>
                    </div>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif;
            ?>
        </div>
    </section>


<?php get_footer();
