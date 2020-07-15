<?php 
	
/*
	Template Name: Simple Page
*/

get_header(); ?>
    <div class="wrapper wrapper--medium">
        <div class="simple-page">
            <?php 

            if( have_posts() ):

            while( have_posts() ): the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile;

            endif;

            ?>
        </div> 

        <?php get_template_part( 'register-box' ); ?>
    </div>
<?php get_footer(); ?>