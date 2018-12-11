<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>

<div class="row">
    <div class="col-lg-8">
        <article <?php post_class('pr-0 pr-lg-5'); ?> id="post-<?php the_ID(); ?>">

            <div class="entry-content">

                <?php the_content(); ?>

            </div><!-- .entry-content -->

        </article><!-- #post-## -->
    </div>
    <div class="col-lg-4">
	    <aside id="sidebar" class="mt-4 mt-lg-0 d-flex flex-column flex-md-row flex-lg-column align-items-center align-items-md-end justify-content-between">
            <?php get_template_part('includes/cta', 'buyer'); ?>
            <?php get_template_part('includes/cta', 'investor'); ?>
	    </aside>
    </div>
</div>