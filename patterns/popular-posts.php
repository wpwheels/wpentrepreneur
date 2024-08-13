<?php
/**
 * Title: Popular Posts
 * Slug: popular-posts
 * Description:
 * Categories: wpentrepreneur/posts
 * Keywords: popular posts, popular
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"0px"}},"backgroundColor":"primary","className":"is-style-default","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull is-style-default has-primary-background-color has-background"
    style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
     <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"full","layout":{"type":"default"}} -->
    <div class="wp-block-query alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"primary","className":"is-style-default","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide is-style-default has-primary-background-color has-background"
            style="padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)">
            <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":3},"fontSize":"large"} -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"0","right":"0","bottom":"var:preset|spacing|medium","left":"0"}},"border":{"radius":{"bottomRight":"50px","topRight":"50px"},"bottom":{"color":"#13386c","style":"dotted","width":"2px"},"top":[],"right":[],"left":[]},"color":{"background":"#000000"}}} -->
            <div class="wp-block-group has-background"
                style="border-top-right-radius:50px;border-bottom-right-radius:50px;border-bottom-color:#13386c;border-bottom-style:dotted;border-bottom-width:2px;background-color:#000000;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--medium);padding-left:0">
                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","height":"300px","overlayColor":"highlight-color","dimRatio":20,"style":{"border":{"radius":{"topRight":"50px","bottomLeft":"50px"}}}} /-->

                <!-- wp:group {"style":{"spacing":{"blockGap":"8px","padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
                <div class="wp-block-group"
                    style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                    <!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                <div class="wp-block-group wow animate__animated animate__zoomIn"
                    style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                    <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"medium"} /-->

                    <!-- wp:post-excerpt {"moreText":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"paragraph-color","className":"is-style-excerpt-truncate-3","fontSize":"small"} /-->

                    <!-- wp:post-date {"textColor":"secondary","fontSize":"x-small"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:query -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"vertical"},"style":{"spacing":{"margin":{"top":"50px","bottom":"var:preset|spacing|small"},"blockGap":"0"}}} -->
    <div class="wp-block-buttons" style="margin-top:50px;margin-bottom:var(--wp--preset--spacing--small)">
        <!-- wp:button {"backgroundColor":"secondary","textColor":"primary","width":50,"style":{"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"is-style-fill"} -->
        <div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-fill"><a
                class="wp-block-button__link has-primary-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button"
                style="padding-top:var(--wp--preset--spacing--small);padding-right:0;padding-bottom:var(--wp--preset--spacing--small);padding-left:0"><?php _e('More
                Posts', 'wpentrepreneur'); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->