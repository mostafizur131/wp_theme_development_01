<?php

/**
 * My Theme Functions
 */

//Default Theme Function here
include_once('inc/default.php');

// Theme CSS, js and jQuery files calling
include_once('inc/enqueue.php');

//Theme Function
include_once('inc/theme_function.php');


//Register Nav Menu
include_once('inc/menu_register.php');

//Widgets Register
include_once('inc/widgets_register.php');

//Custom Post or Services Register
include_once('inc/custom_post.php');
//Custom Shortcode Register
include_once('inc/shortcode.php');
