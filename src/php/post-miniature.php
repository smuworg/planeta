<div class="post-miniature">
    <figure class="post-miniature__image">
        <?php the_post_thumbnail(); ?>
    </figure>
    <div class="post-miniature__meta">
        <div class="post-miniature__category">
            <?php the_category(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="heading post-miniature__title">
            <?php the_title(); ?>
        </a>
    </div>
</div>