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
                <img class="card-img-top"
                     src="<?php echo $image['url']; ?>"
                     alt="<?php bloginfo('name'); ?> - <?php the_title(); ?>">
                <div class="card-body">
                    <h4 class="card-title"><?php the_title(); ?></h4>
                    <p class="card-text"><?php the_field('excerpt'); ?></p>
                    <ul class="list-unstyled">
                        <li>Sleeps <?php the_field('sleeps'); ?></li>
                        <li><?php echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>'; ?></li>
                    </ul>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btn--arrow mr-auto mt-auto">View Details</a>
                </div>
            </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif;
    ?>
</div>