<?php
/**
 * Title: Header Content
 * Slug: black-rose/header
 * Categories: black-rose
 * Description: Logo, menu, Instagram and Find Us button.
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","className":"br-header","style":{"spacing":{"padding":{"top":"0.7rem","bottom":"0.7rem","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"ink","layout":{"type":"constrained","contentSize":"1280px","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull br-header has-ink-background-color has-background" style="padding-top:0.7rem;padding-right:var(--wp--preset--spacing--30);padding-bottom:0.7rem;padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0.8rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"58px","linkDestination":"custom","className":"br-header-logo"} -->
<figure class="wp-block-image is-resized br-header-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo-cream.png' ) ); ?>" alt="Black Rose West Allis logo" style="width:58px"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"br-wordmark"} -->
<p class="br-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Black Rose<span>West Allis</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayBackgroundColor":"ink","overlayTextColor":"cream","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"Home","url":"<?php echo esc_url( home_url( '/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Menu","url":"<?php echo esc_url( home_url( '/menu/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Events","url":"<?php echo esc_url( home_url( '/events/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Visit","url":"<?php echo esc_url( home_url( '/visit/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Instagram","url":"https://www.instagram.com/blackrosewestallis/","kind":"custom","opensInNewTab":true,"isTopLevelLink":true,"className":"br-nav-ig"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
