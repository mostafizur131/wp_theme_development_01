<?php

/**
 * This template for 404 page (page not found)
 */

?>

<?php get_header() ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 error_page">
                <p>404 Error - Page not found</p>
                <h1>Oops! Looks like something was wrong</h1>
                <div class="error_search">
                    <?php get_search_form(); ?>
                </div>
                <a href="<?php echo home_url() ?>" class="homepage">Home Page</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
<p>Source: From index.php</p>