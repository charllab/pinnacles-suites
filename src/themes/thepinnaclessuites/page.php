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


    <?php while (have_posts()) : the_post(); ?>

        <?php if (is_page(107)) { ?>

            <?php get_template_part('loop-templates/content', 'accommodations'); ?>

        <?php } else { ?>

            <?php get_template_part('loop-templates/content', 'page'); ?>

        <?php } ?>

    <?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
