<div class="post-tile__format">
    <?php

    $i = get_field('typ_postu');

    switch ($i) {
        case 'wyróżniony':
            ?>
            <div class="format format--featured">
                <img src="<?php echo get_template_directory_uri(); ?>/images/post-type-planeta.svg" alt="">
            </div>
            <?php
            break;
        case 'galeria':
            ?>
            <div class="format format--gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-icon.svg" alt="">
            </div>
            <?php
            break;
        case 'recenzja':
            ?>
            <div class="format format--review">
                <div class="format--review__rate">
                    <?php the_field('ocena'); ?>
                </div>
            </div>
            <?php
            break;
        case 'video':
            ?>
            <div class="format format--video">
                <img src="<?php echo get_template_directory_uri(); ?>/images/video-icon.svg" alt="">
            </div>
            <?php
            break;
    }
    ?>
</div>