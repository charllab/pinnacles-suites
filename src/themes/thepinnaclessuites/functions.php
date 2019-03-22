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

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts',
        'position' => 80,
        'redirect' => false
    ]);
}

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

    add_image_size('square-lg', '600', '600', true);
}

// Add TinyMCE style formats.
add_filter('mce_buttons_2', 'custom_tiny_mce_style_formats');

function custom_tiny_mce_style_formats($styles)
{
    array_unshift($styles, 'styleselect');
    return $styles;
}

add_filter('tiny_mce_before_init', 'custom_tiny_mce_before_init');

function custom_tiny_mce_before_init($settings)
{
    $style_formats = [
        [
            'title' => 'Lead Paragraph',
            'selector' => 'p',
            'classes' => 'lead',
            'wrapper' => true
        ],
        [
            'title' => 'Small',
            'inline' => 'small'
        ],
        [
            'title' => 'Blockquote',
            'block' => 'blockquote',
            'classes' => 'blockquote',
            'wrapper' => true
        ],
        [
            'title' => 'Blockquote Footer',
            'block' => 'footer',
            'classes' => 'blockquote-footer',
            'wrapper' => true
        ],
        [
            'title' => 'Cite',
            'inline' => 'cite'
        ]
    ];

    if (isset($settings['style_formats'])) {
        $orig_style_formats = json_decode($settings['style_formats'], true);
        $style_formats = array_merge($orig_style_formats, $style_formats);
    }

    $settings['style_formats'] = json_encode($style_formats);
    return $settings;
}

add_filter('wpseo_breadcrumb_links', 'wpseo_breadcrumb_add_woo_shop_link');
function wpseo_breadcrumb_add_woo_shop_link($links)
{
    if (is_archive()) {
        $breadcrumb[] = [
            'url' => get_bloginfo('url') . '/accommodations',
            'text' => 'Accommodations',
        ];
        array_splice($links, 1, -2, $breadcrumb);
    } else if (is_single()) {
        $categories = get_the_category();

        $breadcrumb[] = [
            'url' => get_bloginfo('url') . '/accommodations',
            'text' => 'Accommodations',
        ];

        $breadcrumb[] = [
            'url' => esc_url(get_category_link($categories[0]->term_id)),
            'text' => esc_html($categories[0]->name),
        ];

        array_splice($links, 1, -2, $breadcrumb);
    }
    return $links;
}