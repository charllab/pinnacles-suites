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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2271929-29"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-2271929-29');
    </script>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="height: 100%;">

<div id="page">

    <div class="sides-wrapper">
        <div class="side-a d-flex justify-content-between flex-column">

            <div class="my-0 my-md-3 p-3 px-lg-0">
                <a href="<?php bloginfo('url'); ?>" class="logo-h">

                    <img alt="<?php bloginfo('name'); ?>" class="img-fluid d-none d-lg-block mx-auto"
                         srcset="<?php bloginfo('template_url'); ?>/images/tps-logo.png 1x,
                             <?php bloginfo('template_url'); ?>/images/tps-logo@2x.png 2x"
                         src="<?php bloginfo('template_url'); ?>/images/tps-logo.png">

                    <img alt="<?php bloginfo('name'); ?>" class="img-fluid d-lg-none my-3 my-sm-0"
                         src="<?php bloginfo('template_url'); ?>/images/tps-logo-vert-alt.svg">
                </a>
            </div>

            <div class="text-right d-block d-lg-none menu-switch">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-container"
                        aria-controls="navbar-container" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <nav class="navbar navbar-expand-lg p-0 navbar-light c-flex c-flex-colmn c-height-100">

                <div id="navbar-container" class="navbar-collapse collapse c-flex c-flex-colmn w-100">

                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'container_class' => 'w-100',
                        'container_id' => '',
                        'menu_class' => 'navbar-nav d-flex w-100 flex-column mb-4 mb-lg-0',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                    ]); ?>

                    <div class="w-100 mt-3 mt-lg-4 d-none d-lg-block">
                        <a target="_blank" href="<?php the_field('booking_link', 'options'); ?>"
                           class="btn btn-primary btn--arrow mb-2 d-inline-block">Check Availability</a>
                        <a target="_blank" href="<?php the_field('policies_link', 'options'); ?>"
                           class="btn btn-secondary btn--arrow mb-4 d-inline-block">Covid-19 Policies</a>
                    </div>

                    <div class="mt-lg-auto menu-socialmedia-wrapper w-100">
                        <ul class="list-unstyled mb-0 menu-socialmedia-items w-100">
                            <li><a href="https://www.facebook.com/thepinnaclessuites/" class="d-block"
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

        <div class="side-b">

            <div class="header-btns-m d-block d-lg-none">
                <a target="_blank" href="<?php the_field('booking_link', 'options'); ?>"
                   class="btn btn-primary btn--arrow">Check Availability</a>
                <a target="_blank" href="<?php the_field('policies_link', 'options'); ?>"
                   class="btn btn-secondary btn--arrow">Covid-19 Policies</a>
            </div>

            <?php if (get_field('display_the_alert_banner', 'options')) : ?>
                <div class="alert-banner bg-primary pt-3 pb-2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <?php the_field('alert_banner_text', 'options'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php
            $custom_banner = get_field('new_custom_banner', 'options');
            if ($custom_banner['display_custom_banner']) : ?>
                <div class="alert-banner pt-3 custom-banner" style="display:flex;justify-content:center;align-items:center;background-color: <?php echo $custom_banner['banner_background_color']; ?>">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <?php echo $custom_banner['banner_text']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <section class="topbar">
                <div class="container padded-container">
                    <div class="row">
                        <div class="col-xl-6 mb-2 mb-lg-0 text-center text-xl-left">
                            <?php the_field('banner_text', 'options'); ?>
                        </div>
                        <div
                            class="col-xl-6 mt-2 mt-xl-0 align-self-lg-center justify-content-lg-end topbar__telcta text-center text-xl-right">
                            <a href="tel:12505424548"><i class="fas fa-phone mr-1"></i> 1-250-542-4548</a>
                        </div>
                    </div>
                </div>
            </section>