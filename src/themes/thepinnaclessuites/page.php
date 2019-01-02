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

<div class="wrapper section section--page" id="page-wrapper">

    <div class="container" id="content" tabindex="-1">

        <main class="site-main" id="main">

            <?php while (have_posts()) : the_post(); ?>

                <?php if (is_page(107)) { ?>

                    <?php get_template_part('loop-templates/content', 'accommodations'); ?>

	            <?php } else { ?>

                    <?php get_template_part('loop-templates/content', 'page'); ?>

	            <?php } ?>

            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
