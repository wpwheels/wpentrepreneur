<?php

/**

 * Title: Portfolio 

 * Slug: portfolio

 * Description:

 * Categories: wpentrepreneur/portfolio

 * Keywords: portfolio

 * Viewport Width: 1500

 * Block Types:

 * Post Types:

 * Inserter: true

 */



?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/bg-texture.webp","id":252,"source":"file","title":"bg-skills"}}},"className":"is-style-default","layout":{"type":"constrained","justifyContent":"center"}} -->

<div class="wp-block-group alignfull is-style-default"

    style="margin-top:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)">

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|small"}}},"textColor":"secondary","fontFamily":"primary"} -->

    <h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color has-primary-font-family wow animate__animated animate__bounce"

        style="padding-bottom:var(--wp--preset--spacing--small)"><?php _e('Featured', 'wpentrepreneur'); ?> <mark

            style="background-color:rgba(0, 0, 0, 0)"

            class="has-inline-color has-highlight-color-color"><?php _e('Portfolio', 'wpentrepreneur'); ?></mark></h2>

    <!-- /wp:heading -->



    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"}}}} -->

    <div class="wp-block-columns alignwide wow animate__animated animate__backInUp">

        <!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->

        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%">

            <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-rozegold.jpg","id":623,"dimRatio":50,"overlayColor":"dark-grey-color","isUserOverlayColor":true,"style":{"dimensions":{"aspectRatio":"1"}},"className":"is-style-default wpentrepreneur-portfolio-img","layout":{"type":"default"}} -->

            <div class="wp-block-cover is-style-default wpentrepreneur-portfolio-img"><span aria-hidden="true"

                    class="wp-block-cover__background has-dark-grey-color-background-color has-background-dim"></span><img

                    class="wp-block-cover__image-background wp-image-623" alt=""

                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-rozegold.jpg"

                    data-object-fit="cover" />

                <div class="wp-block-cover__inner-container">

                    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","className":"wpentrepreneur-portfolio-name","fontSize":"large"} -->

                    <p

                        class="has-text-align-center wpentrepreneur-portfolio-name has-secondary-color has-text-color has-link-color has-large-font-size">

                        <a href="#">Title</a></p>

                    <!-- /wp:paragraph -->

                </div>

            </div>

            <!-- /wp:cover -->



            <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-shvetsa.jpg","id":622,"dimRatio":50,"overlayColor":"dark-grey-color","isUserOverlayColor":true,"style":{"dimensions":{"aspectRatio":"16/9"}},"className":"is-style-default wpentrepreneur-portfolio-img","layout":{"type":"default"}} -->

            <div class="wp-block-cover is-style-default wpentrepreneur-portfolio-img"><span aria-hidden="true"

                    class="wp-block-cover__background has-dark-grey-color-background-color has-background-dim"></span><img

                    class="wp-block-cover__image-background wp-image-622" alt=""

                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-shvetsa.jpg"

                    data-object-fit="cover" />

                <div class="wp-block-cover__inner-container">

                    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","className":"wpentrepreneur-portfolio-name","fontSize":"large"} -->

                    <p

                        class="has-text-align-center wpentrepreneur-portfolio-name has-secondary-color has-text-color has-link-color has-large-font-size">

                        <a href="#">Title</a></p>

                    <!-- /wp:paragraph -->

                </div>

            </div>

            <!-- /wp:cover -->

        </div>

        <!-- /wp:column -->



        <!-- wp:column {"width":"100%","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|small"}}} -->

        <div class="wp-block-column" style="padding-right:0;padding-left:0;flex-basis:100%">

            <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"}}}} -->

            <div class="wp-block-columns"><!-- wp:column -->

                <div class="wp-block-column">

                    <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-cottonbro.jpg","id":456,"dimRatio":50,"overlayColor":"dark-grey-color","isUserOverlayColor":true,"style":{"color":[]},"className":"wpentrepreneur-portfolio-img"} -->

                    <div class="wp-block-cover wpentrepreneur-portfolio-img"><span aria-hidden="true"

                            class="wp-block-cover__background has-dark-grey-color-background-color has-background-dim"></span><img

                            class="wp-block-cover__image-background wp-image-456" alt=""

                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-cottonbro.jpg"

                            data-object-fit="cover" />

                        <div class="wp-block-cover__inner-container">

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","className":"wpentrepreneur-portfolio-name","fontSize":"large"} -->

                            <p

                                class="has-text-align-center wpentrepreneur-portfolio-name has-secondary-color has-text-color has-link-color has-large-font-size">

                                <a href="#">Title</a></p>

                            <!-- /wp:paragraph -->

                        </div>

                    </div>

                    <!-- /wp:cover -->

                </div>

                <!-- /wp:column -->



                <!-- wp:column -->

                <div class="wp-block-column">

                    <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-rachel-claire.jpg","id":622,"dimRatio":50,"overlayColor":"dark-grey-color","isUserOverlayColor":true,"style":{"color":[]},"className":"wpentrepreneur-portfolio-img"} -->

                    <div class="wp-block-cover wpentrepreneur-portfolio-img"><span aria-hidden="true"

                            class="wp-block-cover__background has-dark-grey-color-background-color has-background-dim"></span><img

                            class="wp-block-cover__image-background wp-image-622" alt=""

                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-rachel-claire.jpg"

                            data-object-fit="cover" />

                        <div class="wp-block-cover__inner-container">

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","className":"wpentrepreneur-portfolio-name","fontSize":"large"} -->

                            <p

                                class="has-text-align-center wpentrepreneur-portfolio-name has-secondary-color has-text-color has-link-color has-large-font-size">

                                Title</p>

                            <!-- /wp:paragraph -->

                        </div>

                    </div>

                    <!-- /wp:cover -->

                </div>

                <!-- /wp:column -->

            </div>

            <!-- /wp:columns -->



            <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"}}}} -->

            <div class="wp-block-columns"><!-- wp:column -->

                <div class="wp-block-column">

                    <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-zdmit.jpg","id":623,"dimRatio":50,"overlayColor":"dark-grey-color","isUserOverlayColor":true,"style":{"color":[]},"className":"wpentrepreneur-portfolio-img"} -->

                    <div class="wp-block-cover wpentrepreneur-portfolio-img"><span aria-hidden="true"

                            class="wp-block-cover__background has-dark-grey-color-background-color has-background-dim"></span><img

                            class="wp-block-cover__image-background wp-image-623" alt=""

                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-zdmit.jpg"

                            data-object-fit="cover" />

                        <div class="wp-block-cover__inner-container">

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","className":"wpentrepreneur-portfolio-name","fontSize":"large"} -->

                            <p

                                class="has-text-align-center wpentrepreneur-portfolio-name has-secondary-color has-text-color has-link-color has-large-font-size">

                                Title</p>

                            <!-- /wp:paragraph -->

                        </div>

                    </div>

                    <!-- /wp:cover -->

                </div>

                <!-- /wp:column -->



                <!-- wp:column -->

                <div class="wp-block-column">

                    <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-chuck.jpg","id":456,"dimRatio":50,"overlayColor":"dark-grey-color","isUserOverlayColor":true,"style":{"color":[]},"className":"wpentrepreneur-portfolio-img"} -->

                    <div class="wp-block-cover wpentrepreneur-portfolio-img"><span aria-hidden="true"

                            class="wp-block-cover__background has-dark-grey-color-background-color has-background-dim"></span><img

                            class="wp-block-cover__image-background wp-image-456" alt=""

                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pexels-chuck.jpg"

                            data-object-fit="cover" />

                        <div class="wp-block-cover__inner-container">

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","className":"wpentrepreneur-portfolio-name","fontSize":"large"} -->

                            <p

                                class="has-text-align-center wpentrepreneur-portfolio-name has-secondary-color has-text-color has-link-color has-large-font-size">

                                Title</p>

                            <!-- /wp:paragraph -->

                        </div>

                    </div>

                    <!-- /wp:cover -->

                </div>

                <!-- /wp:column -->

            </div>

            <!-- /wp:columns -->

        </div>

        <!-- /wp:column -->

    </div>

    <!-- /wp:columns -->

</div>

<!-- /wp:group -->





