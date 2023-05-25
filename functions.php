<?php

/**
 * My Theme Functions
 */

//Theme title
add_theme_support('title-tag');


// Theme CSS, js and jQuery files calling
function mr_css_js_file_calling()
{
    wp_enqueue_style('mr-style', get_stylesheet_uri());
    // Bootstrap CSS Register
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom');

    // jQuery and JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', 'true');
}
add_action('wp_enqueue_scripts', 'mr_css_js_file_calling');


//Google Fonts Enqueue
function mr_add_google_fonts()
{
    wp_enqueue_style('mr_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
}
add_action('wp_enqueue_scripts', 'mr_add_google_fonts');

//Theme Function
function mr_customize_register($wp_customize)
{
    //Theme Logo Register or Header Area
    $wp_customize->add_section('mr_header_area', array(
        'title' => __('Header Area', 'tahsin'),
        'description' => "If you interested to update your header area, You can do it here.",
    ));
    $wp_customize->add_setting('mr_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mr_logo', array(
        'label' => 'Logo Upload',
        'description' => "If you interested to change or update logo, you can do it.",
        'setting' => 'mr_logo',
        'section' => 'mr_header_area',
    )));


    // Menu Position
    $wp_customize->add_section('mr_menu_option', array(
        'title' => __('Menu Position Option'),
        'description' => "If you interested to change your menu position, You can do it here.",
    ));

    $wp_customize->add_setting('mr_menu_position', array(
        'default' => 'right_menu',
    ));

    $wp_customize->add_control('mr_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select Your Menu Position',
        'setting' => 'mr_menu_position',
        'section' => 'mr_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));
}

add_action('customize_register', 'mr_customize_register');


//Register Nav Menu
register_nav_menu('main_menu', __('Main Menu'), 'tahsin');
