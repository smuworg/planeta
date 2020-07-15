<?php get_header(); ?>
    <div class="wrapper wrapper--medium">
        <div class="single-promotion">

            <div class="promotion-content">
                <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

                <figure class="promotion-content__banner">
                    <img src="<?php the_field('baner'); ?>" alt="">
                </figure>

                <div class="promotion-content__heading">
                    <h1 class="promotion-content__title"><?php the_title(); ?></h1>
                    <figure class="promotion-content__logo">
                        <img src="<?php the_field('logo'); ?>" alt="">
                    </figure>
                    <span class="promotion-content__price">
                        <?php the_field('cena'); ?> zł
                    </span>
                    <span class="promotion-content__price-before">
                        <?php the_field('cena_przed_promocja'); ?> zł
                    </span>       
                    <span class="promotion-content__diff">
                        <?php 
                            $before = get_field('cena_przed_promocja');;
                            $now = get_field('cena');

                            $diff = ($before - $now)/$before*100;

                            echo '-'.round($diff).'%';
                        ?>
                    </span>
                </div>

                <div class="promotion-content__info">
                    <div class="promotion-content__days-left">
                        <span class="days-left__counter"> 
                            <?php 
                                $koniec = get_field('koniec_promocji');

                                $now = time(); 
                                $your_date = strtotime($koniec);
                                $datediff = $your_date - $now;
                                
                                if($datediff > 0) {
                                    echo round($datediff / (60 * 60 * 24));
                                } else {
                                    echo '0';
                                }
                            ?>
                        </span>
                        <span class="days-left__text">
                            <span class="days-left__title">DNI DO KOŃCA OKAZJI</span> 
                            <span class="days-left__update">Aktualizacja:  <?php printf( __( '%s', 'textdomain' ), get_the_modified_date( 'F j Y' ) ); ?></span>
                        </span>
                    </div>
                    <a href="<?php the_field('cta'); ?>" class="promotion-content__cta">SKORZYSTAJ Z OKAZJI</a>
                </div>

                <div class="promotion-content__body">
                    <?php the_content(); ?>
                </div>

                <?php endwhile; endif; ?>
            </div>
            <aside class="promotion-sidebar">
                <div class="baner">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, expedita!
                </div>
            </aside>
        </div> 

        <?php get_template_part( 'register-box' ); ?>
    </div>
<?php get_footer(); ?> 