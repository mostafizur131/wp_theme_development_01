<?php

/**
 * This template for archive/category post
 */

?>

<?php get_header() ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="archive_title">
                    <?php the_archive_title('<h1 class="title">', '</h1>') ?>
                    <?php the_author_meta('<div class="description">', '</div>'); ?>
                </div>
                <?php get_template_part('/template_parts/blog_setup') ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
<p>Source: From archive.php</p>