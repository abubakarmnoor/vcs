<?php
/**
 * Title: 404
 * Slug: enterprisio/404
 * Categories: enterprisio
 * Inserter: yes
 */
?>
<!-- wp:group {"tagName":"main","style":{"color":{"background":"#08142c"},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"default"}} -->
<main class="wp-block-group has-background" style="background-color:#08142c;min-height:100vh"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"100px"}},"textColor":"white"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="font-size:100px"><?php echo __('404', 'enterprisio');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color"><?php echo __('Sorry, the page you are looking for doesn\'t exist or has been moved.', 'enterprisio');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"white","textColor":"black","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"padding":{"left":"var:preset|spacing|80","right":"var:preset|spacing|80","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"is-style-button-hover-secondary-color"} -->
<div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" href="/" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--80)"><?php echo __('<strong>Go to home</strong>', 'enterprisio');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->