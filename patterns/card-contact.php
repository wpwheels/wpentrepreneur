<?php
/**
 * Title: Contact Card
 * Slug: card-contact
 * Description:
 * Categories: wpentrepreneur/contact
 * Keywords: card, contact, social, links, email, company
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"5px"}},"backgroundColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-main-background-color has-background"
    style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"base"} -->
        <h4 class="wp-block-heading has-base-color has-text-color"><?php _e('Contact Us', 'wpentrepreneur'); ?></h4>
        <!-- /wp:heading -->

        <!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"className":"is-style-logos-only","layout":{"type":"flex"}} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only">
            <!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

            <!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

            <!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

            <!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:separator {"backgroundColor":"secondary","className":"is-style-separator-dotted"} -->
        <hr
            class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-separator-dotted" />
        <!-- /wp:separator -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"textColor":"main-accent"} -->
            <p class="has-main-accent-color has-text-color"><?php _e('Email', 'wpentrepreneur'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"base"} -->
            <p class="has-base-color has-text-color"><?php _e('mail@example.com', 'wpentrepreneur'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"backgroundColor":"secondary","className":"is-style-separator-dotted"} -->
        <hr
            class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-separator-dotted" />
        <!-- /wp:separator -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"textColor":"main-accent"} -->
            <p class="has-main-accent-color has-text-color"><?php _e('Phone', 'wpentrepreneur'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"base"} -->
            <p class="has-base-color has-text-color"><?php _e('815-420-2024', 'wpentrepreneur'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"backgroundColor":"secondary","className":"is-style-separator-dotted"} -->
        <hr
            class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-separator-dotted" />
        <!-- /wp:separator -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"textColor":"main-accent"} -->
            <p class="has-main-accent-color has-text-color"><?php _e('Address', 'wpentrepreneur'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"base"} -->
            <p class="has-base-color has-text-color"><?php _e('1234 Theme Street', 'wpentrepreneur'); ?><br><?php _e('San Francisco, CA 94070', 'wpentrepreneur'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->