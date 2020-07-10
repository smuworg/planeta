<?php get_header(); ?>
    <div class="wrapper wrapper--medium wrapper--notfound">
        <div class="notfound">
            <h2 class="notfound__subtitle">HOUSTON, HOUSTON. MAMY PROBLEM.</h2>
            <h1 class="heading notfound__title">404. TO NIE NASZA PLANETA.</h1>

            <figure class="notfound__image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/404.svg" alt="">
            </figure>


            <p class="notfound__info">
                Kapitanie... <br>
                Wróc na <a href="<?php echo get_home_url(); ?>" class="notfound__link">stronę główną</a> lub skorzystaj z wyszukiwarki poniżej.
            </p>

            <form action="" class="notfound__form">
                <input placeholder="WPISZ TO, CZEGO SZUKAŁEŚ..." type="text">
                <button>SZUKAJ</button>
            </form>
        </div>
    </div>
<?php get_footer(); ?>