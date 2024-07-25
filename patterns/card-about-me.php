<?php
/**
 * Title: About Me
 * Slug: about-me
 * Description:
 * Categories: wpentrepreneur/about
 * Keywords: about
 * Viewport Width: 1280
 * Block Types: 
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background"
    style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"0"}}}} -->
    <div class="wp-block-columns alignwide wow animate__animated animate__backInUp">
        <!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
            <!-- wp:image {"id":456,"sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
            <figure class="wp-block-image aligncenter size-full is-style-rounded"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/patterns/images/hero-banner.webp" alt=""
                    class="wp-image-456" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"backgroundColor":"main","className":"is-style-default","layout":{"type":"constrained","justifyContent":"center"}} -->
        <div class="wp-block-column is-vertically-aligned-center is-style-default has-main-background-color has-background"
            style="flex-basis:60%">
            <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large"}},"border":{"radius":"0px"},"position":{"type":""}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide has-primary-background-color has-background"
                style="border-radius:0px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary","fontSize":"xxx-large","fontFamily":"primary"} -->
                <h2 class="wp-block-heading has-secondary-color has-text-color has-link-color has-primary-font-family has-xxx-large-font-size"
                    style="font-style:normal;font-weight:700">Who Am I</h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlight-color"}}}},"textColor":"highlight-color","fontSize":"large"} -->
                <h2
                    class="wp-block-heading has-highlight-color-color has-text-color has-link-color has-large-font-size">
                    LOREM IPSUM</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main"} -->
                <p class="has-main-color has-text-color has-link-color">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Etiam varius lorem in sem semper malesuada. Etiam eget urna tincidunt, hendrerit
                    orci non, hendrerit odio. Mauris aliquam libero ac lacus consectetur posuere. Aenean ac lobortis
                    risus, quis imperdiet urna. Sed vel lobortis nunc, ac venenatis magna. Nunc laoreet magna ut tortor
                    commodo pulvinar.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->