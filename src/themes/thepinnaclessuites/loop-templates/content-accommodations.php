<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

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

                <h1 class="page-title"><?php the_title(); ?></h1>
            </div><!-- row -->
        </div>

            <?php
            $cat_args = [
                'orderby' => 'name',
                'order' => 'ASC'
            ];

            $categories = get_categories($cat_args);
            $rowCount = 0;

            foreach ($categories as $category) {
                $image_id = get_field('featured_image', 'term_' . $category->term_taxonomy_id);
                $attachment = wp_get_attachment_image_src($image_id, 'square-lg');
                $isEven = $rowCount++ % 2 == 1;
                ?>
            <div class="row mb-3 mb-xl-6 justify-content-around">
                <div class="col-md-8 col-xl-5 <?php echo($isEven ? 'justify-content-xl-end order-xl-1' : ''); ?>">
                    <img class="img-fluid w-100 d-block mb-5 mb-xl-0"
                         src="<?php echo $attachment[0]; ?>"
                         alt="<?php bloginfo('name'); ?> - <?php echo $category->name ?>">
                </div>
                <div class="col-md-8 col-xl-5 flex-column align-self-lg-center">
                    <h2><?php echo $category->name ?></h2>
                    <?php echo category_description($category->term_taxonomy_id); ?>
                    <a href="<?php echo get_category_link($category->term_taxonomy_id); ?>"
                       class="btn btn-outline-primary d-block mt-2 mb-5 mb-xl-0 d-xl-inline-block">View All</a>
                </div>
            </div><!-- row -->

            <?php
            }
            ?>

        </div><!-- container -->
</section><!-- /page content -->