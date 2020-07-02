<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php bloginfo( 'name' ); ?> </title>

    <meta property="og:title" content=" //Page title// "/>
    <meta property="og:description" name="description" content=" //Page Description// "/>
    <meta property="og:image" content=" //page image link// "/>
    <meta property="og:url" content=" //page url// "/>
    <meta property="og:site_name" content=" //pagename.pl// "/>

    <meta name="Description" content="Opis strony">
    <meta name="Keywords" content="Słowa kluczowe">


    <link href=" //page favicon// " rel="shortcut icon"/>
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-7e9f0ec526.css" />
    <!-- endinject -->
    <?php wp_head(); ?>
</head>
<body>

<header class="header">
    <div class="header__content">
        <a href="<?php echo get_home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
        </a>
        <nav class="header__navigation">
            <?php
            wp_nav_menu(array(
                    'theme_location' => 'primary',
                )
            );
            ?>
            <div class="header__mobile-controlls">
                <h1>SZUKANIE</h1> 
                <h2>ZALOGUJ</h2>  
                <h3>ZAREJESTRUJ</h3>  
            </div>
        </nav>
        <div class="header__controls">
            <form action="" class="search-form">
                <input type="text" class="header__controls-icon search-form__input">
                <button type="submit" class="header__controls-icon search-form__submit">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="">
                </button>
            </form>
            <button>
                <img src="<?php echo get_template_directory_uri(); ?>/images/account.svg" alt="">
            </button>
        </div>

        <button class="menu-trigger" id="main-menu-trigger"></button>
    </div>
</header>

<main>

