<?php

//Theme title
add_theme_support('title-tag');

//Theme Post Thumbnails
add_theme_support('post_thumbnails', array('post', 'page'));
add_image_size('post_thumbnails', 970, 350, true);

//Excerpt 40 word
function mr_excerpt_more($more)
{
    return '<br><br><a class="readmore" href="' . get_permalink($more->ID) . '">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'mr_excerpt_more');

function mr_excerpt_length($length)
{
    return 40;
}
add_filter('excerpt_length', 'mr_excerpt_length', 999);
