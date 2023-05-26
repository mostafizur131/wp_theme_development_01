<?php

/**
 * This template for search result
 */

?>

<?php get_header() ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="search_title">
                    <h1 class="title">
                        <?php printf(__('Search Result for: %s', 'tahsin'), get_search_query()) ?>
                    </h1>
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