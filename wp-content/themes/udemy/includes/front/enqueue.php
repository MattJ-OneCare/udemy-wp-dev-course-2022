<?php
// Hooks
add_action( 'wp_enqueue_scripts', 'ju_enqueue' );
function ju_enqueue() {
    $uri = get_theme_file_uri();
    // Add $ver variable to add ms since Unix Epoch for develop mode
    $ver = JU_DEV_MODE ? time() : false;

    wp_register_style('ju_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', array(), $ver);
    wp_register_style('ju_bootstrap', $uri . '/assets/css/bootstrap.css' , array(), $ver);
    wp_register_style('ju_style', $uri . '/assets/css/style.css', array(), $ver);
    wp_register_style('ju_dark', $uri . '/assets/css/dark.css', array(), $ver);
    wp_register_style('ju_font_icons', $uri . '/assets/css/font-icons.css', array(), $ver);
    wp_register_style('ju_animate', $uri . '/assets/css/animate.css', array(), $ver);
    wp_register_style('ju_magnific_popup', $uri . '/assets/css/magnific-popup.css', array(), $ver);
    wp_register_style('ju_responsive', $uri . '/assets/css/responsive.css', array(), $ver);
    wp_register_style('ju_custom', $uri . '/assets/css/custom.css', array(), $ver);

    wp_enqueue_style('ju_google_fonts');
    wp_enqueue_style('ju_style');
    wp_enqueue_style('ju_dark');
    wp_enqueue_style('ju_font_icons');
    wp_enqueue_style('ju_animate');
    wp_enqueue_style('ju_magnific_popup');
    wp_enqueue_style('ju_responsive');
    wp_enqueue_style('ju_custom');

    // Last 3 parameters of wp_register_script('ju_plugins', $uri . '/assets/js/plugins.js', array(), null, true);
    // ensure JS being loaded has no dependencies, doesn't have a query string version number, is loaded just
    // before closing <body> tag
    wp_register_script('ju_plugins', $uri . '/assets/js/plugins.js', array(), $ver, true);
    wp_register_script('ju_functions', $uri . '/assets/js/functions.js', array(), $ver, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ju_plugins');
    wp_enqueue_script('ju_functions');
}

// function admin_scipts_styles() {
//     $uri = get_theme_file_uri();

//     wp_enqueue_script('ju_functions', $uri . '/assets/js/functions.js', array(), null);
// }
// add_action('admin_enqueue_scripts', 'admin_scipts_styles');