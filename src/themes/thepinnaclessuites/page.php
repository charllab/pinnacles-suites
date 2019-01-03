<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();
?>

    <section class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="mb-0">The Pinnacles is available for individual ownership:<br>
                        <a href="#" target="_blank">Summer 2018 Sale Pricing →</a></p>
                </div>
                <div
                        class="col-lg-6 d-lg-flex align-self-lg-center justify-content-lg-end text-center topbar__telcta">
                    <a href="tel:2503092565"><i class="fas fa-phone"></i> 1-250-542-4548</a>
                </div>
            </div>
        </div>
    </section>


    <?php while (have_posts()) : the_post(); ?>

        <?php if (is_page(107)) { ?>

            <?php get_template_part('loop-templates/content', 'accommodations'); ?>

        <?php } else { ?>

            <?php get_template_part('loop-templates/content', 'page'); ?>

        <?php } ?>

    <?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
