<?php
/**
 * Title: Footer Minimal
 * Slug: footer-minimal
 * Description:
 * Categories: footer
 * Keywords:
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Inserter: true
 */

// Prepare the variables
$year = esc_html(date('Y'));
$link = esc_url('https://wpwheels.com');
$link_text = esc_html('WPWheels');
$html_content = sprintf(
    '<p class="has-main-color has-text-color has-link-color has-small-font-size">Copyright © %s WPEntrepreneur — Powered by <a href="%s">%s</a></p>',
    $year,
    $link,
    $link_text
);

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0px"},"blockGap":"var:preset|spacing|large"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"top":{"color":"var:preset|color|paragraph-color","width":"1px"},"right":[],"bottom":[],"left":[]}},"backgroundColor":"primary-accent-black","textColor":"base","className":"dark-footer","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull dark-footer has-base-color has-primary-accent-black-background-color has-text-color has-background has-link-color"
    style="border-top-color:var(--wp--preset--color--paragraph-color);border-top-width:1px;margin-top:0px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|main-accent"}}}},"textColor":"main-accent","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide has-main-accent-color has-text-color has-link-color">
        <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main","fontSize":"small"} -->
        <?php
        echo $html_content;
        ?>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
