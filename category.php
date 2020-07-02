<?php get_header(); ?>

<div class="wrapper wrapper--medium wrapper--home">

    <div class="grid">
        <?php
        $query = new WP_Query( array(
            'posts_per_page' => '1'
        ) );

        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) { $query->the_post(); ?>

                <div class="post-tile heading-tile">
                    <div class="post-tile__header">
                        <figure class="post-tile__thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </figure>

                        <div class="post-tile__properties">
                            <div class="post-tile__category">
                                <?php the_category(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="heading post-tile__title">
                                <?php the_title(); ?>
                            </a>

                            <button class="post-tile__share"></button>

                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="post-tile__author">
                                <div class="post-tile__author-avatar">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                                </div>


                                <div class="post-tile__author-name">
                                    <?php the_author(); ?>
                                </div>
                                <!--                                <span class="post-tile__time">-->
                                <!--                                   --><?php //echo get_the_date( 'd.m.Y' ); ?>
                                <!--                                </span>-->


                            </a>
                            <div class="post-tile__format">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>


                <?php
            }
        }

        wp_reset_postdata();
        ?>

        <?php
        $query = new WP_Query( array(
            'posts_per_page' => '1'
        ) );

        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) { $query->the_post(); ?>

                <div class="post-tile heading-tile heading-tile--small">
                    <div class="post-tile__header">
                        <figure class="post-tile__thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </figure>

                        <div class="post-tile__properties">
                            <div class="post-tile__category">
                                <?php the_category(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="heading post-tile__title">
                                <?php the_title(); ?>
                            </a>

                            <button class="post-tile__share"></button>

                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="post-tile__author">
                                <div class="post-tile__author-avatar">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                                </div>

                                <div class="post-tile__author-name">
                                    <?php the_author(); ?>
                                </div>

                            </a>
                            <div class="post-tile__format">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>


                <?php
            }
        }

        wp_reset_postdata();
        ?>
    </div>

    <div class="category-box__heading">
        <a href="" class="category-box__category-title">Najnowsze wpisy</a>
        <a href="" class="category-box__show-all">Zobacz wszystkie</a>
    </div>

    <div class="grid grid--with-heading">
        <?php
        $query = new WP_Query( array(
            'posts_per_page' => '20'
        ) );

        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) { $query->the_post();
                get_template_part( 'post-tile' );
            }
        }

        wp_reset_postdata();
        ?>
    </div>

    <?php get_template_part( 'register-box' ); ?>

</div>


<?php get_footer(); ?>
