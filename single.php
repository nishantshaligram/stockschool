<?php

get_header();
?>

<div id="page" class="site-content">
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col-md-8 col-sm-12">
            <?php
            if( have_posts() ):
                while( have_posts() ): the_post();
                    get_template_part( 'template-parts/post/content','single' );
                endwhile;
            endif;
            ?>
            </div>
            <div id="secondary" class="sidebar-area col-md-4 col-sm-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<section class="newsletter-optin">
    <div class="container">
        <div class="row align-items-center">
            <div class="optin-desc col-md-8 col-sm-12"> <h3>Stay tuned to our stockmarket blog.</h3> <p>Subscribe to our newsletter.</p></div>
            <div class="optin-btn col-md-4 col-sm-12"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#optinModal">Subscribe</button></div>
        </div>
    </div>
</section>
<?php

get_footer();