<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <header id="header_area" class="<?php echo get_theme_mod('mr_menu_position') ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo home_url() ?>"><img src="<?php echo get_theme_mod('mr_logo'); ?>" alt="logo"></a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>

                    <!-- Static Nav Menu -->
                    <!-- <ul id="nav">
                        <li><a href="">Home</a></li>
                        <li><a href="">About US</a></li>
                        <li><a href="">Media</a></li>
                        <li><a href="">Download</a></li>
                        <li><a href="">Project</a></li>
                        <li><a href="">Services</a>
                            <ul>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a>
                                    <ul>
                                        <li><a href="">Dropdown</a></li>
                                        <li><a href="">Dropdown</a></li>
                                        <li><a href="">Dropdown</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a></li>
                            </ul>
                        </li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </header>