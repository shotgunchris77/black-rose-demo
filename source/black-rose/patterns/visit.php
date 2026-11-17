<?php
/**
 * Title: Visit Page
 * Slug: black-rose/visit
 * Categories: black-rose
 * Description: Hours, address, map and Instagram.
 * Inserter: yes
 */
$i = function ( $f ) { return esc_url( get_theme_file_uri( 'assets/images/' . $f ) ); };
?>
<!-- wp:cover {"url":"<?php echo $i( 'opening-day.jpg' ); ?>","dimRatio":75,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30);min-height:50vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo $i( 'opening-day.jpg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"br-eyebrow"} -->
<p class="has-text-align-center br-eyebrow">Makers Row · West Allis</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"br-hero-title"} -->
<h1 class="wp-block-heading has-text-align-center br-hero-title">Come <em>on</em> In</h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ink","layout":{"type":"constrained","contentSize":"1280px","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull has-ink-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"level":3,"textColor":"rose"} -->
<h3 class="wp-block-heading has-rose-color has-text-color">Address</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Black Rose Cocktail Bar &amp; Food<br>6601 W. National Ave.<br>West Allis, WI 53214</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ash"} -->
<p class="has-ash-color has-text-color">Inside the Makers Row development on National Avenue near South 66th Street, across from the West Allis Farmers Market.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"textColor":"rose","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<h3 class="wp-block-heading has-rose-color has-text-color" style="margin-top:var(--wp--preset--spacing--40)">Hours</h3>
<!-- /wp:heading -->

<!-- wp:html -->
<table class="br-hours"><tbody><tr><th>Monday</th><td>Closed (on purpose)</td></tr><tr><th>Tuesday</th><td>From 4 pm</td></tr><tr><th>Wednesday</th><td>From 4 pm</td></tr><tr><th>Thursday</th><td>From 4 pm</td></tr><tr><th>Friday</th><td>From 4 pm</td></tr><tr><th>Saturday</th><td>From 3 pm</td></tr><tr><th>Sunday</th><td>From 3 pm</td></tr></tbody></table>
<!-- /wp:html -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.google.com/maps/search/?api=1&amp;query=6601+W+National+Ave+West+Allis+WI+53214" target="_blank" rel="noreferrer noopener">Get Directions</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.instagram.com/blackrosewestallis/" target="_blank" rel="noreferrer noopener">@blackrosewestallis</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:html -->
<div class="br-map br-map--tall"><iframe title="Map to Black Rose, 6601 W. National Ave., West Allis" src="https://www.openstreetmap.org/export/embed.html?bbox=-88.0005%2C43.0115%2C-87.9885%2C43.0178&amp;layer=mapnik&amp;marker=43.01463%2C-87.99449" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
