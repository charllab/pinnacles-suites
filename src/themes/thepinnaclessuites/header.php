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

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('url'); ?>/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('url'); ?>/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-16x16.png" sizes="16x16" />

    <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <section class="topbar">
        <div class="container">
            <div id="topbarContent" class="d-flex justify-content-sm-end">
                <div class="mr-auto topbar__phoneNumber">
                    <a href="tel:2503092565"><i class="fas fa-phone"></i> (250) 309-2565</a></div>
                <div class="d-none d-lg-block mr-4 topbar__fluff">Helping you make smart investments</div>
                <div class="d-none d-lg-block topbar__getStarted">
                    <a href="<?php bloginfo('url'); ?>/contact" class="px-4 topbar__GetStarted">Get Started <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="d-lg-none">
                    <button class="navbar-toggler white" type="button" data-toggle="collapse" data-target="#navbar-container" aria-controls="navbar-container" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                    </button>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /topbar -->


    <?php if (is_front_page()) : ?>

       <section class="indexhero">
            <div class="container">
	            <div class="py-md-5 logo">
	                <h1 class="logo m-auto mb-0">
	                    <a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url" class="mb-0">
	                        <?php get_template_part('includes/svg', 'logo-lg'); ?>
	                            <span class="sr-only"><?php bloginfo('name'); ?></span>
                        </a>
                    </h1>
                </div>
            </div>
        </section>

        <section class="mainMenu">
            <div class="container">
                <div id="menuItems">
                    <nav class="navbar navbar-expand-lg p-0">
                        <?php wp_nav_menu([
                            'theme_location' => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbar-container',
                            'menu_class' => 'navbar-nav d-flex w-100',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'walker' => new understrap_WP_Bootstrap_Navwalker(),
                        ]); ?>
                    </nav>
                </div>
            </div>
        </section>

        <?php else : ?>

            <div id="pagesHeaderLogo">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url" class="mb-0">
	                            <?php get_template_part('includes/svg', 'logo-sm'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- #pagesHeaderLogo -->

            <section class="mainMenu">
                <div class="container">
                    <div id="menuItems">
                        <nav class="navbar navbar-expand-lg p-0">
                            <?php wp_nav_menu([
                                'theme_location' => 'primary',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'navbar-container',
                                'menu_class' => 'navbar-nav d-flex w-100',
                                'fallback_cb' => '',
                                'menu_id' => 'main-menu',
                                'walker' => new understrap_WP_Bootstrap_Navwalker(),
                            ]); ?>
                        </nav>
                    </div>
                </div>
            </section>

        <?php endif; ?>