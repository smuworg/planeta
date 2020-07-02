<div class="category-box category-box--long">
    <?php
        $query = new WP_Query( array( 'tag' => 'longi', 'posts_per_page' => '1' ) );
        if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>

    <figure class="category-box__background">
        <?php the_post_thumbnail(); ?>
    </figure>
    <div class="category-box__content">
        <div class="category-box__category-name">
            <?php the_category(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="heading category-box__post-title">
            <?php the_title(); ?>
        </a>
        <div class="category-box__meta">
            <div class="category-box__author">
                <div class="post-tile__author-avatar">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                </div>
                <div>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="category-box__author-name">
                        <?php the_author(); ?>
                    </a>
                    <span class="category-box__time">
                    <?php echo get_the_date( 'd.m.Y' ); ?>
                </span>
                </div>
            </div>
            <div class="category-box__comments">
                <a href="" class="category-box__comments-link">
                    <span class="category-box__comments-counter">XX komentarzy</span>
                </a>
            </div>
        </div>
        <?php }} wp_reset_postdata(); ?>

        <hr class="category-box__separator">
        <div class="category-box__listing">
            <?php
                $query = new WP_Query( array( 'tag' => 'longi', 'posts_per_page' => '3', 'offset' => '1' ) );
                if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>

                    <div class="category-box__listing-item">
                        <?php get_template_part('post-miniature'); ?>
                    </div>

                   <?php }
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<div class="category-box__listing-mobile">
    <?php
    $query = new WP_Query( array( 'tag' => 'longi', 'posts_per_page' => '3', 'offset' => '1' ) );
    if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>

        <div class="category-box__listing-item">
            <?php get_template_part('post-miniature'); ?>
        </div>

    <?php }
    }
    wp_reset_postdata();
    ?>
</div>