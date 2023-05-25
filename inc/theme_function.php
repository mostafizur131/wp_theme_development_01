<?php
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
        'title' => __('Menu Position Option', 'tahsin'),
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

    // Copyright Area
    $wp_customize->add_section('mr_copyright_option', array(
        'title' => __('Footer Option', 'tahsin'),
        'description' => "If you interested to change or update Copyright, You can do it here."
    ));
    $wp_customize->add_setting('mr_copyright', array(
        'default' => '&copy; Copyright 2023 | Tahsin'
    ));
    $wp_customize->add_control('mr_copyright', array(
        'label' => 'Copyright Text',
        'description' => 'You can update your Copyright Text from here',
        'setting' => 'mr_copyright',
        'section' => 'mr_copyright_option',

    ));
}
add_action('customize_register', 'mr_customize_register');
