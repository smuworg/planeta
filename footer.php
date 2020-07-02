        </main>
        <footer class="footer <?php if ( is_home() ) { echo 'footer--narrow'; } ?>">
            <div class="wrapper wrapper--medium">
                <div class="footer__content">
                    <a href="" class="logo logo--footer">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo--footer.svg" alt="">
                    </a>
                    <div class="social-icons">
                        <a href="" class="social-icons__item">
                            <img class="social-icons__image" src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg" alt="">
                        </a>
                        <a href="" class="social-icons__item">
                            <img class="social-icons__image" src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.svg" alt="">
                        </a>
                        <a href="" class="social-icons__item">
                            <img class="social-icons__image" src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.svg" alt="">
                        </a>
                    </div>
                </div>
                <hr class="footer__separator">
                <div class="footer__meta">
                    <span class="footer__copy">
                        PlanetaGracza.pl sp. z o.o. © Wszystkie prawa zastrzeżone
                    </span>
                    <nav class="footer__nav">
                        <?php
                        wp_nav_menu(array(
                                'theme_location' => 'secondary',
                            )
                        );
                        ?>
                    </nav>
                    <a href="https://smuw.org/" class="smuw-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/smuw.svg" alt="">
                    </a>
                </div>
            </div>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <!-- inject:js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main-4b265746b8.js"></script>
    <!-- endinject -->
<?php wp_footer(); ?>
</html>