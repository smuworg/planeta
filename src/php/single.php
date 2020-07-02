<?php get_header(); ?>

<div class="wrapper wrapper--medium wrapper--single">
    <?php
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>

    <div class="single-post">
        <figure class="single-post__thumbnail">
            <?php the_post_thumbnail(); ?>
        </figure>

        <div class="single-post__container">
            <div class="single-post__text-content">
                <div class="single-post__category">
                    <?php the_category(); ?>
                </div>

                <h1 class="single-post__title">
                    <?php the_title(); ?>
                </h1>

                <div class="single-post__meta">
                    <div class="single-post__date"><?php echo get_the_date( 'd.m.Y' ); ?></div>
                    <div class="single-post__comments-count"><?php echo get_comments_number(); ?> komentarzy</div>
                </div>

                <div class="single-post__excerpt">
                    <?php the_excerpt(); ?>
                </div>

                <div class="single-post__horizontal-ad">
                    Lorem ipsum dolor sit amet.
                </div>

                <div class="single-post__content">
                    <?php the_content(); ?>
                </div>

                <div class="single-post__square-ad">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, aspernatur.
                </div>

                <div class="single-post__author">
                    <figure class="single-post__author-avatar">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                    </figure>
                    <div class="single-post__author-text-content">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="single-post__author-name"><?php the_author(); ?></a>
                        <span class="single-post__author-description">
                            <?php echo the_author_meta('description'); ?>
                        </span>
                    </div>
                </div>
                <div class="single-post__share">
                    Udostępnij wpis
                </div>
            </div>
            <div class="single-post__floating-ads">
                <div class="single-post__floating-ads-content">
                    <div class="single-post__vertical-banner"></div>
                    <div class="single-post__vertical-banner"></div>
                </div>
            </div>
        </div>
    </div>

    <hr class="single-post__separator">

    <div class="single-post__comments">
<!--        --><?php
//        if ( comments_open() || get_comments_number() ) :
//            comments_template();
//        endif;
//        ?>

        <br>
        <br>
        <center>
            <-- komentarze -->
        </center>
        <br>
        <br>
    </div>

    <hr class="single-post__separator">

    <?php endwhile;
    endif;
    ?>

    <div class="similar-posts">
        <div class="category-box__heading">
            <a href="" class="category-box__category-title">Podobne wpisy</a>
            <a href="" class="category-box__show-all">Zobacz wszystkie</a>
        </div>

        <div class="grid grid--with-heading">
            <?php
            $categories = get_the_category();
            $query = new WP_Query( array(
                'category_name' => $categories[0]->name,
                'posts_per_page' => '3'
            ) );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) { $query->the_post(); ?>
                    <div class="small-post-tile">
                        <?php get_template_part( 'post-tile' ); ?>
                    </div>
                    <?php
                }
            }

            wp_reset_postdata();
            ?>
        </div>
    </div>

    <div class="single-post__big-square-ad">

    </div>

    <?php get_template_part( 'register-box' ); ?>
</div>



<?php get_footer(); ?>