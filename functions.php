<?php

function load_scripts()
{
    wp_enqueue_style(
        "style",
        get_template_directory_uri()."/style/css/main.css",
        array(),
        '1.0',
        "all"
    );

    wp_enqueue_style(
        "slick",
        get_template_directory_uri()."/style/css/slick.css",
        array(),
        '1.8.1',
        "all"
    );

    wp_enqueue_script(
        'jquery-3',
        get_template_directory_uri()."/js/jquery.min.js",
        array(),
        '3.4.1',
        true // true = footer, false = header
    );

    wp_enqueue_script(
        'slick-js',
        get_template_directory_uri()."/js/slick.min.js",
        array(),
        '1.8.1',
        true // true = footer, false = header
    );

    wp_enqueue_script(
        'index-js',
        get_template_directory_uri()."/js/index.js",
        array(),
        '1.0.0',
        true // true = footer, false = header
    );
}

add_action("wp_enqueue_scripts", "load_scripts");

function biomob_config()
{
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(450, 450);
}
add_action("after_setup_theme", "biomob_config", 0);
