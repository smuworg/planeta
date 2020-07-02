<div class="category-box category-box--eq">
    <?php
    $query = new WP_Query( array( 'tag' => 'longi', 'posts_per_page' => '1' ) );
    if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
    <div class="category-box__content">
        <div class="category-box__category-name">
            <?php the_category(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="heading category-box__post-title">
            <?php the_title(); ?>
        </a>

        <figure class="category-box__thumb-mobile">
            <?php the_post_thumbnail(); ?>
        </figure>

        <a href="<?php the_permalink(); ?>" class="category-box__button">Zobacz szczegóły</a>

        <?php }} wp_reset_postdata(); ?>

        <hr class="category-box__separator">
        <div class="category-box__listing">
            <?php
            $query = new WP_Query( array( 'tag' => 'longi', 'posts_per_page' => '2', 'offset' => '1' ) );
            if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>

                <div class="category-box__listing-item">
                    <?php get_template_part('post-miniature'); ?>
                </div>

            <?php }
            }
            wp_reset_postdata();
            ?>
        </div>

        <a href="" class="category-box__show-all-posts">Zobacz wszystkie</a>            

    </div>


    <figure class="category-box__thumb">
        <?php the_post_thumbnail(); ?>
    </figure>
</div>