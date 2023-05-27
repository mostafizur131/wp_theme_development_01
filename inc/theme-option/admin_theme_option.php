<?php

function mr_add_theme_page()
{
    // $page_title:string
    // $menu_title:string
    // $capability:string
    // $menu_slug:string
    // $callback:callable
    // $position:integer|null
    add_menu_page('Theme Option for Admin', 'Theme Option', 'manage_options', 'mr_theme_option', 'mr_theme_create_page', 'dashicons-menu', 101);

    //Sub Menu
    // $parent_slug:string
    // $page_title:string
    // $menu_title:string
    // $capability:string
    // $menu_slug:string
    // $callback:callable
    // $position:integer|float|null 
    add_submenu_page('mr_theme_option', 'Theme Option', 'General', 'manage_options', 'mr_theme_option', 'mr_theme_create_page');

    add_submenu_page('mr_theme_option', 'Theme Custom CSS', 'Custom CSS', 'manage_options', 'mr_custom_css', 'mr_theme_custom_css_page');

    add_submenu_page('mr_theme_option', 'Theme Custom JS', 'Custom JS', 'manage_options', 'mr_custom_js', 'mr_theme_custom_js_page');
}

add_action('admin_menu', 'mr_add_theme_page');

//Generating Theme option
function mr_theme_create_page()
{
    require_once(get_template_directory() . '/inc/theme-option/general.php');
}

// Custom CSS submenu option
function mr_theme_custom_css_page()
{
    require_once(get_template_directory() . '/inc/theme-option/custom_css.php');
}
// Custom JS submenu option
function mr_theme_custom_js_page()
{
    require_once(get_template_directory() . '/inc/theme-option/custom_js.php');
}
