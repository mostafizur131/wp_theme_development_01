<?php

//Theme title
add_theme_support('title-tag');

//Theme Post Thumbnails
add_theme_support('post_thumbnails', array('post', 'page', 'service'));
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

//Post Page Pagination Function
function mr_page_nav()
{
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if ($max > 1) echo '</pre>
    <div class="wp_pagenav">';
    if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' . $current . '<span>of</span>' . $max . '</p>';
    echo $pages . paginate_links($args);
    if ($max > 1) echo '</div><pre>';
}
