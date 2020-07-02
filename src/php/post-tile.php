<div class="post-tile">
    <div class="post-tile__header">
        <figure class="post-tile__thumbnail">
            <?php the_post_thumbnail(); ?>
        </figure>

        <div class="post-tile__properties">
            <div class="post-tile__category">
                <?php the_category(); ?>
            </div>

            <button class="post-tile__share"></button>

            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="post-tile__author">
                <div class="post-tile__author-avatar">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                </div>

                <div class="post-tile__author-name">
                    <?php the_author(); ?>
                </div>
            </a>

            <?php get_template_part( 'post-tile-type' ); ?>

        </div>
    </div>
    <div class="post-tile__meta">
        <a href="<?php the_permalink(); ?>" class="heading post-tile__title">
            <?php the_title(); ?>
        </a>

        <span class="post-tile__time">
           <?php echo get_the_date( 'd.m.Y' ); ?>
        </span>

        <a href="" class="post-tile__comments-link">
            <span class="post-tile__comments-counter"><?php echo get_comments_number(); ?> komentarzy</span>
        </a>
    </div>
</div>