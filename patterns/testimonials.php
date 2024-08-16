<?php

/**

 * Title: Testimonials

 * Slug: testimonials

 * Description:

 * Categories: wpentrepreneur/testimonials

 * Keywords: testimonials

 * Viewport Width: 1500

 * Block Types:

 * Post Types:

 * Inserter: true

 */



?>

<!-- wp:group {"metadata":{"categories":["wpentrepreneur/testimonials"],"patternName":"testimonials","name":"Testimonials"},"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"background":{"backgroundImage":{"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/bg-texture.webp","id":252,"source":"file","title":"bg-skills"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull"
    style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|small"}}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-large)">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"main","fontSize":"small"} -->
        <p class="has-text-align-center has-main-color has-text-color has-small-font-size"
            style="font-style:normal;font-weight:500"><?php _e('Testimonials', 'wpentrepreneur'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","className":"wow animate__animated animate__bounce","textColor":"base"} -->
        <h2
            class="wp-block-heading has-text-align-center wow animate__animated animate__bounce has-base-color has-text-color">

            <?php _e('Meet our', 'wpentrepreneur'); ?> <mark style="background-color:rgba(0, 0, 0, 0)"
                class="has-inline-color has-highlight-color-color"><?php _e('happy', 'wpentrepreneur'); ?> </mark><?php _e('clients', 'wpentrepreneur'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","className":"has-main-accent-color"} -->
        <p class="has-text-align-center has-main-accent-color"><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit.

            Etiam varius lorem in sem semper malesuada. Etiam eget urna tincidunt, hendrerit orci non, hendrerit odio.', 'wpentrepreneur'); ?>

        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px">
        <!-- wp:column {"verticalAlignment":"center","className":"wow animate__animated animate__flipInX"} -->
        <div class="wp-block-column is-vertically-aligned-center wow animate__animated animate__flipInX">
            <!-- wp:group {"className":"wow animate__animated animate__flipInX","style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
            <div class="wp-block-group wow animate__animated animate__flipInX has-primary-background-color has-background"
                style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size"><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam

                        varius lorem in sem semper malesuada. Etiam eget urna tincidunt, hendrerit orci non, hendrerit

                        odio.', 'wpentrepreneur'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:separator {"className":"is-style-separator-dotted","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
                    <hr class="wp-block-separator has-alpha-channel-opacity is-style-separator-dotted"
                        style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)" />
                    <!-- /wp:separator -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)">
                    <!-- wp:image {"id":33082,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
                    <figure class="wp-block-image size-full is-resized is-style-rounded-full"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/avatar-1.webp"
                            alt="" class="wp-image-33082" style="width:60px;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong><strong><?php _e('Alex Glacier', 'wpentrepreneur'); ?></strong></strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
                        <p class="has-secondary-color has-text-color has-small-font-size"><?php _e('Brand Designer', 'wpentrepreneur'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:group {"className":"wow animate__animated animate__flipInX","style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
            <div class="wp-block-group wow animate__animated animate__flipInX has-primary-background-color has-background"
                style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size"><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam

                        varius lorem in sem semper malesuada. Etiam eget urna tincidunt, hendrerit orci non, hendrerit

                        odio.', 'wpentrepreneur'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:separator {"className":"is-style-separator-dotted","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
                    <hr class="wp-block-separator has-alpha-channel-opacity is-style-separator-dotted"
                        style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)" />
                    <!-- /wp:separator -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)">
                    <!-- wp:image {"id":33082,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
                    <figure class="wp-block-image size-full is-resized is-style-rounded-full"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/avatar-1.webp"
                            alt="" class="wp-image-33082" style="width:60px;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph -->
                        <p><strong><strong><?php _e('Alex Glacier', 'wpentrepreneur'); ?></strong></strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
                        <p class="has-secondary-color has-text-color has-small-font-size"><?php _e('Brand Designer', 'wpentrepreneur'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->