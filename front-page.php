<?php

/**
 * Theme Front Page
 */

?>

<?php get_header() ?>
<section id="slider_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider">
                    <?php
                    query_posts('post_type=slider&post_status=publish&posts_per_page=3&order=ASC&pages=' . get_query_var('post'));

                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                    ?>
                            <div>
                                <?php echo the_post_thumbnail('slider') ?>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="service_area">
    <div class="container">
        <div class="row">
            <?php
            query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&pages=' . get_query_var('post'));

            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <div class="col-md-4">
                        <div class="child_service">
                            <h2><?php the_title(); ?></h2>
                            <?php echo the_post_thumbnail('service') ?>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer() ?>
<p>Source: From Front-page.php</p>