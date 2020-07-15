<?php 
	
/*
	Template Name: Editorial Office
*/

get_header(); ?>
    <div class="wrapper wrapper--medium">
        <div class="editorial-office">

            <h1 class="editorial-office__title">
                Redakcja planetagracza.pl
            </h1>
            <p class="editorial-office__desc">
            Początek wpisu, czyli tzw. zajawka, która będzie mieć na sztywno maksymalnie jakąś tam ilość znaków, np. 225 czy może nawet...
            </p>        


            <ul class="editorial-office__list">
                <?php if( have_rows('redakcja') ): while ( have_rows('redakcja') ) : the_row(); ?>
                <div class="editorial-office__person">
                    <figure class="editorial-office__person-photo">
                        <img src="<?php the_sub_field('zdjecie'); ?>" alt="">
                    </figure>
                    <div class="editorial-office__person-content">

                        <a href="<?php the_sub_field('link_do_profilu'); ?>" class="editorial-office__person-name"> <?php the_sub_field('imie_i_nazwisko'); ?></a>

                        <?php 
                            $mail = get_sub_field('email');
                            $telefon = get_sub_field('telefon');
                        ?>

                        <?php if(!empty($mail)) : ?>
                            <a href="mailto:<?php the_sub_field('email'); ?>" class="editorial-office__person-email">
                                <?php the_sub_field('email'); ?>
                            </a>
                        <?php endif; ?>

                        <?php if(!empty($telefon)): ?>
                            <a href="tel:<?php the_sub_field('telefon'); ?>" class="editorial-office__person-phone"><?php the_sub_field('telefon'); ?></a>
                        <?php endif; ?>
                        
                        <span class="editorial-office__person-desc"><?php the_sub_field('opis'); ?></span>
                    </div>
                </div>
                <?php endwhile; else: endif; ?>
            </ul>
        </div> 

        <?php get_template_part( 'register-box' ); ?>
    </div>
<?php get_footer(); ?>