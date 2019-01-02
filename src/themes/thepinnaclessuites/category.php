<?php get_header(); ?>

<?php
$category = get_queried_object();
?>

	<div class="side-b">

		<p>Category: <?php single_cat_title(); ?></p>

        <?php
        $the_query = new WP_Query([
            'post_type' => 'accomadation',
            'cat' => $category->term_id,
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC'
        ]);
        ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php the_title(); ?><br />
        <?php endwhile;
        wp_reset_postdata(); ?>

	</div><!-- #home-page -->

<?php get_footer();
