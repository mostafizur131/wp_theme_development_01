<?php
//Sidebar Register Function

function mr_widgets_register()
{
    register_sidebar(array(
        'name' => __('Main Widgets Area', 'tahsin'),
        'id' => 'sidebar-1',
        'description' => __('Appears in the sidebar, in blog page and other pages', 'tahsin'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    //Footer Sidebar widgets
    register_sidebar(array(
        'name' => __('Footer 1', 'tahsin'),
        'id' => 'footer-1',
        'description' => __('Appears in the sidebar, in blog page and other pages', 'tahsin'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 2', 'tahsin'),
        'id' => 'footer-2',
        'description' => __('Appears in the sidebar, in blog page and other pages', 'tahsin'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 3', 'tahsin'),
        'id' => 'footer-3',
        'description' => __('Appears in the sidebar, in blog page and other pages', 'tahsin'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'mr_widgets_register');
