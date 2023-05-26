<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="blog_area">
            <div class="post_thumb">

                <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post_thumbnails'); ?></a>
            </div>
            <div class="post_details">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </div>
        </div>
<?php
    endwhile;
else :
    _e('No Post Found');
endif;
?>

<div id="page_nav">
    <?php if ('mr_page_nav') {
        mr_page_nav();
    } else { ?>
        <?php next_post_link(); ?>
        <?php previous_post_link(); ?>
    <?php } ?>
</div>

<p>Source: From blog_setup.php</p>