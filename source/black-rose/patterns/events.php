<?php
/**
 * Title: Events Page
 * Slug: black-rose/events
 * Categories: black-rose
 * Description: Events page with a monthly calendar and upcoming list.
 * Inserter: yes
 */
$i = function ( $f ) { return esc_url( get_theme_file_uri( 'assets/images/' . $f ) ); };
?>
<!-- wp:cover {"url":"<?php echo $i( 'bartender.jpg' ); ?>","dimRatio":70,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":56,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30);min-height:56vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo $i( 'bartender.jpg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"br-eyebrow"} -->
<p class="has-text-align-center br-eyebrow">Pop-Ups · Parties · Live Nights</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"br-hero-title"} -->
<h1 class="wp-block-heading has-text-align-center br-hero-title"><em>What's</em> On</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"br-lede","fontSize":"large"} -->
<p class="has-text-align-center br-lede has-large-font-size">Something's always shaking at Black Rose. Here's what's on the books.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:template-part {"slug":"tape","tagName":"div","className":"br-tape-wrap br-tape-flat"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ink","layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group alignfull has-ink-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:shortcode -->
[br_calendar]
<!-- /wp:shortcode -->

<!-- wp:group {"className":"br-private","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}},"backgroundColor":"blood","layout":{"type":"constrained"}} -->
<div class="wp-block-group br-private has-blood-background-color has-background" style="margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Got an idea for a night?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Pop-ups, collaborations, birthdays and big groups. Send us a message on Instagram and let's talk.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"cream","textColor":"ink"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-ink-color has-cream-background-color has-text-color has-background wp-element-button" href="https://www.instagram.com/blackrosewestallis/" target="_blank" rel="noreferrer noopener">Message @blackrosewestallis</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
