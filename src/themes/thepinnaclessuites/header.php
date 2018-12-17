<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php bloginfo('url'); ?>/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
          href="<?php bloginfo('url'); ?>/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-16x16.png" sizes="16x16"/>

    <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/solid.css"
          integrity="sha384-aj0h5DVQ8jfwc8DA7JiM+Dysv7z+qYrFYZR+Qd/TwnmpDI6UaB3GJRRTdY8jYGS4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/brands.css"
          integrity="sha384-whKHCkwP9f4MyD1vda26+XRyEg2zkyZezur14Kxc784RxUU1E7HvWVYj9EoJnUV7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/fontawesome.css"
          integrity="sha384-WK8BzK0mpgOdhCxq86nInFqSWLzR5UAsNg0MGX9aDaIIrFWQ38dGdhwnNCAoXFxL" crossorigin="anonymous">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="height: 100%;">

<div id="page">

<div class="d-block d-xl-flex" id="page-wrapper">

    <div class="menu-column">



        <div class="menu-column-inner d-xl-flex flex-xl-column">
            <div class="menu-logo-wrapper d-flex d-xl-block">

                <div class="menu-logo d-flex">
                    <img src="<?php bloginfo('template_url'); ?>/images/tps-logo@2x.png" alt="The Pinnacles Suite logo" class="mx-auto">
                </div>

                <div class="d-xl-none ml-auto">
                    <button class="navbar-toggler white" type="button" data-toggle="collapse" data-target="#navbar-container" aria-controls="navbar-container" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                    </button>
                </div>
            </div><!-- /.menu-logo -->

            <div class="menu-items">
                <nav class="navbar navbar-expand-xl p-0">
                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbar-container',
                        'menu_class' => 'navbar-nav d-flex w-100 flex-column',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                    ]); ?>
                </nav>
            </div>
            <div class="d-none d-xl-block mt-auto menu-socialmedia-wrapper">
                <ul class="list-unstyled mb-0 menu-socialmedia-items">
                    <li><a href="https://www.facebook.com/PinnaclesSuiteHotel" class="d-block" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="https://www.tripadvisor.com/Hotel_Review-g1973875-d4744981-Reviews-The_Pinnacles_Suite_Hotel-Silver_Star_Okanagan_Valley_British_Columbia.html" target="_blank"><i class="fab fa-tripadvisor" class="d-block"></i></a></li>
                    <li><a href="https://www.instagram.com/thepinnaclesatsilverstar/" class="d-block" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="content-column">

        <section class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                        <p class="mb-0">The Pinnacles is available for individual ownership:<br>
                            <a href="#" target="_blank">Summer 2018 Sale Pricing →</a></p>
                    </div>
                    <div class="col-lg-6 d-lg-flex align-self-lg-center justify-content-lg-end text-center topbar__telcta">
                        <a href="tel:2503092565"><i class="fas fa-phone"></i> 1-250-542-4548</a>
                    </div>
                </div>
            </div>
        </section>


