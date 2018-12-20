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

    <div class="sides-wrapper">
        <div class="side-a d-flex flex-column">

            <div class="text-sm-center mt-5 mb-4 mx-5 mx-ms-3 my-lg-4 mx-lg-0">
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/images/tps-logo-vert@2x.png"
                         alt="The Pinnacles Suite logo" class="img-fluid d-lg-none my-3 my-sm-0">
                    <img src="<?php bloginfo('template_url'); ?>/images/tps-logo@2x.png" alt="The Pinnacles Suite logo"
                         class="img-fluid d-none d-lg-block mx-auto">
                </a>
            </div>

            <nav class="navbar navbar-expand-lg p-0 navbar-light c-flex c-flex-colmn c-height-100">

                <div class="text-right d-block d-lg-none menu-switch">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-container"
                            aria-controls="navbar-container" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div id="navbar-container" class="navbar-collapse collapse c-flex c-flex-colmn w-100">

                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'container_class' => 'w-100',
                        'container_id' => '',
                        'menu_class' => 'navbar-nav d-flex w-100 flex-column',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                    ]); ?>

                    <div class="text-center text-lg-left w-100 mt-3 mt-lg-5">
                        <a href="#" class="btn btn-primary-menu mb-4 d-inline-flex">Check Availability</a>
                    </div>


                    <div class="mt-lg-auto menu-socialmedia-wrapper w-100">
                        <ul class="list-unstyled mb-0 menu-socialmedia-items">
                            <li><a href="https://www.facebook.com/PinnaclesSuiteHotel" class="d-block"
                                   target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                            <li>
                                <a href="https://www.tripadvisor.com/Hotel_Review-g1973875-d4744981-Reviews-The_Pinnacles_Suite_Hotel-Silver_Star_Okanagan_Valley_British_Columbia.html"
                                   target="_blank"><i class="fab fa-tripadvisor" class="d-block"></i></a></li>
                            <li><a href="https://www.instagram.com/thepinnaclesatsilverstar/" class="d-block"
                                   target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>


                </div><!-- navbar-collapse -->


            </nav>


        </div><!-- /side-a -->




