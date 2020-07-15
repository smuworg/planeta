<?php 
	
/*
	Template Name: Promocje
*/

get_header(); ?>

<div class="wrapper wrapper--medium">

    <div class="promotions-wrapper">

        <div class="promotions-listing">
        <?php
            $query = new WP_Query( array(
                'post_type' => 'promocje' 
            ) );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) { $query->the_post(); ?>

                    <div class="promotion-tile">
                        <div class="promotion-tile__heading">
                            <figure class="promotion-tile__icon">
                                <img src="<?php the_field('miniaturka'); ?>" alt="">
                            </figure>
                            <div class="promotion-tile__content">
                                <a href="<?php the_permalink(); ?>" class="promotion-tile__title"><?php the_title(); ?></a>
                                <div class="promotion-tile__bar">
                                    <div class="promotion-tile__meta">
                                        <div class="promotion-tile__row promotion-tile__row--heading">
                                            <span class="promotion-content__price">
                                                <?php the_field('cena'); ?> zł
                                            </span>
                                            <span class="promotion-content__price-before">
                                                <?php the_field('cena_przed_promocja'); ?> zł
                                            </span>       
                                            <span class="promotion-tile__diff">
                                                <?php 
                                                    $before = get_field('cena_przed_promocja');;
                                                    $now = get_field('cena');

                                                    $diff = ($before - $now)/$before*100;

                                                    echo '-'.round($diff).'%';
                                                ?>
                                            </span> 
                                        </div>
                                        <div class="promotion-tile__row">
                                        Sklep: <?php the_field('sklep'); ?> | Aktualizacja: <?php printf( __( '%s', 'textdomain' ), get_the_modified_date( 'F j Y' ) ); ?>
                                        </div>
                                    </div>
                                    <div class="promotion-tile__cta-wrapper">
                                        <a href="<?php the_permalink(); ?>" class="promotion-tile__cta">SPRAWDŹ OKAZJĘ</a>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="promotion-tile__body">
                            <span class="promotion-tile__body-title">OPIS OKAZJI</span>
                            <div class="promotion-tile__excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>


                    <?php
                }
            }

            wp_reset_postdata();
        ?>

        </div>

        <aside class="banners">
            <div class="banner">
            </div>
        </aside>

    </div>
        
    <?php get_template_part( 'register-box' ); ?>

</div>


<?php get_footer(); ?>
