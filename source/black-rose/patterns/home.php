<?php
/**
 * Title: Home Page
 * Slug: black-rose/home
 * Categories: black-rose
 * Description: Full Black Rose homepage.
 * Inserter: yes
 */
$i = function ( $f ) { return esc_url( get_theme_file_uri( 'assets/images/' . $f ) ); };
?>
<!-- wp:cover {"url":"<?php echo $i( 'br-backbar-neon.jpg' ); ?>","dimRatio":70,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":92,"minHeightUnit":"vh","contentPosition":"center center","align":"full","className":"br-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-cover alignfull br-hero" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30);min-height:92vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo $i( 'br-backbar-neon.jpg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"width":"210px","align":"center","className":"br-hero-logo"} -->
<figure class="wp-block-image aligncenter is-resized br-hero-logo"><img src="<?php echo $i( 'logo-cream.png' ); ?>" alt="Black Rose West Allis Est. 2026" style="width:210px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","className":"br-eyebrow"} -->
<p class="has-text-align-center br-eyebrow">Cocktail Bar &amp; Food · Makers Row · West Allis</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"br-hero-title"} -->
<h1 class="wp-block-heading has-text-align-center br-hero-title">Cocktails <em>with a</em> Bite.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"br-lede","fontSize":"large"} -->
<p class="has-text-align-center br-lede has-large-font-size">A creative, fun cocktail program and elevated Italian street food. Made to snack. Made to share.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">See the Menu</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/visit/' ) ); ?>">Find Us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","className":"br-hours-chip","fontSize":"small"} -->
<p class="has-text-align-center br-hours-chip has-small-font-size">Tue–Fri from 4 pm · Sat–Sun from 3 pm · Closed Mondays</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"br-tapes","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull br-tapes" style="margin-top:0;margin-bottom:0"><!-- wp:template-part {"slug":"tape","tagName":"div","className":"br-tape-wrap"} /-->

<!-- wp:group {"align":"full","className":"br-tape br-tape--alt","backgroundColor":"cream","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull br-tape br-tape--alt has-cream-background-color has-background"><!-- wp:paragraph {"textColor":"ink"} -->
<p class="has-ink-color has-text-color">Black Rose <span class="br-dot">&#10047;</span> West Allis <span class="br-dot">&#10047;</span> Est. 2026 <span class="br-dot">&#10047;</span> Negronis &amp; Nonsense <span class="br-dot">&#10047;</span> Two Floors <span class="br-dot">&#10047;</span> One Patio</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ink","layout":{"type":"constrained","contentSize":"1280px","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull has-ink-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:paragraph {"className":"br-eyebrow"} -->
<p class="br-eyebrow">The Neighborhood Spot</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"br-stack-title"} -->
<h2 class="wp-block-heading br-stack-title">To snack.<br><em>To share.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Black Rose is a two-floor cocktail bar on National Avenue. Dark walls, hundreds of pieces of art, a patio out back and a kitchen turning out elevated Italian street food.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ash"} -->
<p class="has-ash-color has-text-color">High-quality ingredients, locally sourced meats and imported Italian products. Locally sourced, locally served. Pull up a stool, order a round and get a few plates for the table.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/menu/#food' ) ); ?>">The Food</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"52%","className":"br-collage"} -->
<div class="wp-block-column is-vertically-aligned-center br-collage" style="flex-basis:52%"><!-- wp:image {"sizeSlug":"large","className":"br-collage-a"} -->
<figure class="wp-block-image size-large br-collage-a"><img src="<?php echo $i( 'br-backbar-tall.jpg' ); ?>" alt="The curved Black Rose back bar under the neon rose"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","className":"br-collage-b"} -->
<figure class="wp-block-image size-large br-collage-b"><img src="<?php echo $i( 'br-meatballs.jpg' ); ?>" alt="House meatballs in sugo with mozzarella and basil"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"ink","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-ink-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"full","className":"br-tiles","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignfull br-tiles"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $i( 'br-cocktail.jpg' ); ?>","dimRatio":40,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":78,"minHeightUnit":"vh","contentPosition":"bottom left","className":"br-tile"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left br-tile" style="min-height:78vh"><img class="wp-block-cover__image-background" alt="A cocktail held up in the busy Black Rose bar" src="<?php echo $i( 'br-cocktail.jpg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"br-tile-num"} -->
<p class="br-tile-num">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"br-tile-title"} -->
<h3 class="wp-block-heading br-tile-title"><a href="<?php echo esc_url( home_url( '/menu/#cocktails' ) ); ?>">Cocktails</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Classics with a twist and house originals that don't take themselves too seriously.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $i( 'br-cutlet-sandwich.jpg' ); ?>","dimRatio":40,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":78,"minHeightUnit":"vh","contentPosition":"bottom left","className":"br-tile"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left br-tile" style="min-height:78vh"><img class="wp-block-cover__image-background" alt="A breaded cutlet sandwich served in red-checked paper" src="<?php echo $i( 'br-cutlet-sandwich.jpg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"br-tile-num"} -->
<p class="br-tile-num">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"br-tile-title"} -->
<h3 class="wp-block-heading br-tile-title"><a href="<?php echo esc_url( home_url( '/menu/#food' ) ); ?>">Street Food</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Elevated Italian street food. Small plates built for the middle of the table.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $i( 'br-lounge.jpg' ); ?>","dimRatio":40,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":78,"minHeightUnit":"vh","contentPosition":"bottom left","className":"br-tile"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left br-tile" style="min-height:78vh"><img class="wp-block-cover__image-background" alt="The Black Rose lounge with the neon rose and a velvet couch" src="<?php echo $i( 'br-lounge.jpg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"br-tile-num"} -->
<p class="br-tile-num">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"br-tile-title"} -->
<h3 class="wp-block-heading br-tile-title"><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Events</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Pop-ups, parties and nights worth leaving the house for.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"br-quote-band","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"cream","textColor":"ink","layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group alignfull br-quote-band has-ink-color has-cream-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","className":"br-quote","textColor":"ink"} -->
<h2 class="wp-block-heading has-text-align-center br-quote has-ink-color has-text-color">We open at 4.<br>Every day <span class="br-strike">except</span> Mondays.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"br-script","textColor":"blood","fontSize":"x-large"} -->
<p class="has-text-align-center br-script has-blood-color has-text-color has-x-large-font-size">…because we don't want to work Mondays.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"br-eyebrow br-eyebrow--dark"} -->
<p class="has-text-align-center br-eyebrow br-eyebrow--dark">— The management</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"br-gallery-band","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"coal","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull br-gallery-band has-coal-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","className":"br-eyebrow"} -->
<p class="has-text-align-center br-eyebrow">Dark walls · Loud art · Good food</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"br-stack-title"} -->
<h2 class="wp-block-heading has-text-align-center br-stack-title">Inside <em>Black Rose</em></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"br-gallery","layout":{"type":"default"}} -->
<div class="wp-block-group br-gallery"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $i( 'br-tapestry.jpg' ); ?>" alt="Tattoo-style tapestry of a woman and a snake on a red wall"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $i( 'br-salad.jpg' ); ?>" alt="Seasonal salad topped with shaved parm and a skewered pepper"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $i( 'br-art-wall.jpg' ); ?>" alt="A wall of framed tattoo flash art"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $i( 'br-sliders.jpg' ); ?>" alt="Sliders with arugula and shaved parm"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $i( 'br-sandwich.jpg' ); ?>" alt="A loaded sandwich held up over the bar"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $i( 'br-backbar-neon.jpg' ); ?>" alt="The back bar shelves under the neon rose"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"coal","layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group alignfull has-coal-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"br-eyebrow"} -->
<p class="br-eyebrow">On the Calendar</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">What's On</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Full Calendar</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:shortcode -->
[br_upcoming count="3"]
<!-- /wp:shortcode --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ink","layout":{"type":"constrained","contentSize":"1280px","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull has-ink-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"className":"br-eyebrow"} -->
<p class="br-eyebrow">Come Thirsty</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Find Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">6601 W. National Ave.<br>West Allis, WI 53214</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ash"} -->
<p class="has-ash-color has-text-color">At Makers Row on National Avenue near South 66th Street, across from the West Allis Farmers Market.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<table class="br-hours"><tbody><tr><th>Monday</th><td>Closed</td></tr><tr><th>Tuesday – Friday</th><td>From 4 pm</td></tr><tr><th>Saturday – Sunday</th><td>From 3 pm</td></tr></tbody></table>
<!-- /wp:html -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.google.com/maps/search/?api=1&amp;query=6601+W+National+Ave+West+Allis+WI+53214" target="_blank" rel="noreferrer noopener">Directions</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.instagram.com/blackrosewestallis/" target="_blank" rel="noreferrer noopener">Instagram</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:html -->
<div class="br-map"><img src="<?php echo $i( 'map-black-rose.jpg' ); ?>" alt="Map showing Black Rose at 6601 W. National Ave., West Allis, near South 66th Street" loading="lazy"/><span class="br-map-pin">Black Rose<small>6601 W. National Ave.</small></span><span class="br-map-credit">&copy; OpenStreetMap contributors</span></div>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"br-ig-band","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"blood","layout":{"type":"constrained","contentSize":"1280px","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull br-ig-band has-blood-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:heading {"className":"br-ig-title"} -->
<h2 class="wp-block-heading br-ig-title">Follow<br><em>the chaos.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><a href="https://www.instagram.com/blackrosewestallis/" target="_blank" rel="noreferrer noopener">@blackrosewestallis</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Specials, events, new drinks and the occasional unhinged caption. It all shows up on Instagram first.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"62%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:62%"><!-- wp:gallery {"columns":3,"linkTo":"none","sizeSlug":"large","className":"br-ig-grid"} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped br-ig-grid"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="https://www.instagram.com/blackrosewestallis/" target="_blank" rel="noreferrer noopener"><img src="<?php echo $i( 'opening-day.jpg' ); ?>" alt="Opening day at Black Rose"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="https://www.instagram.com/blackrosewestallis/" target="_blank" rel="noreferrer noopener"><img src="<?php echo $i( 'now-hiring.jpg' ); ?>" alt="Black Rose now hiring poster"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="https://www.instagram.com/blackrosewestallis/" target="_blank" rel="noreferrer noopener"><img src="<?php echo $i( 'espresso-martini.jpg' ); ?>" alt="Espresso martinis on the bar"/></a></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
