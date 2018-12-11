<?php

/* Require */

require get_template_directory().'/includes/bootstrap-wp-navwalker.php';

/* Hooks */

if (!function_exists('enqueue_scripts')) {

    add_action('wp_enqueue_scripts', 'enqueue_scripts');

    function enqueue_scripts()
    {
        wp_enqueue_script('jquery', false, [], false, false);

        wp_enqueue_style('style_file', get_stylesheet_directory_uri().'/style/style.css', [], '1.0.0');
        wp_enqueue_script('header_js', get_stylesheet_directory_uri().'/js/header-bundle.js', null, '1.0.0', false);
        wp_enqueue_script('footer_js', get_stylesheet_directory_uri().'/js/footer-bundle.js', null, '1.0.0', true);
    }
}

if (!function_exists('admin_init')) {

    function remove_posts_menu()
    {
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
    }

    add_action('admin_init', 'remove_posts_menu');
}

/* Misc */

show_admin_bar(false);

remove_action('wp_head', 'wp_generator');

add_filter('gform_init_scripts_footer', '__return_true');

add_filter('gform_confirmation_anchor', '__return_false');

/* Child Theme */

add_action('after_setup_theme', 'custom_after_setup_theme', 11);

function custom_after_setup_theme()
{
    remove_theme_support('custom-background');
    remove_theme_support('post-thumbnails');

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ]);

    register_nav_menus([
        'primary' => 'Primary Menu'
    ]);
}