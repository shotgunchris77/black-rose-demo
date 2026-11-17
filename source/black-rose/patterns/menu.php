<?php
/**
 * Title: Menu Page
 * Slug: black-rose/menu
 * Categories: black-rose
 * Description: Menu page with drop-down sections for Cocktails, N/A Drinks, Beer and Food.
 * Inserter: yes
 */
$i = function ( $f ) { return esc_url( get_theme_file_uri( 'assets/images/' . $f ) ); };

$sections = array(
	array(
		'id'    => 'cocktails',
		'title' => 'Cocktails',
		'kick'  => 'Shaken, stirred, occasionally set on fire.',
		'img'   => 'negroni.jpg',
		'alt'   => 'A Negroni with an orange twist',
		'open'  => true,
		'items' => array(
			array( 'Black Rose Negroni', 'Gin, Campari, sweet vermouth, a whisper of rose and an orange twist.' ),
			array( 'Sbagliato Spritz', 'Campari, sweet vermouth and prosecco over a big rock.' ),
			array( 'Espresso Martini', 'Vodka, fresh espresso, coffee liqueur. The 9 pm pick-me-up.' ),
			array( 'Amaro Old Fashioned', 'Bourbon, Italian amaro, demerara and bitters.' ),
			array( 'Calabrian Margarita', 'Tequila, lime and a slow burn of Calabrian chili.' ),
			array( "Don't Work Mondays", 'Mezcal, Aperol, grapefruit and lime. House rule in a glass.' ),
		),
	),
	array(
		'id'    => 'na-drinks',
		'title' => 'N/A Drinks',
		'kick'  => 'All of the flavor, none of the Tuesday-morning regret.',
		'img'   => 'espresso-martini.jpg',
		'alt'   => 'Espresso drinks on the bar',
		'open'  => false,
		'items' => array(
			array( 'Phony Negroni', 'Non-alcoholic bitter aperitivo, N/A vermouth, orange.' ),
			array( 'Rosemary Citrus Soda', 'Fresh citrus, rosemary syrup, soda.' ),
			array( 'Italian Cream Soda', 'Seasonal syrup, sparkling water, a float of cream.' ),
			array( 'Espresso Tonic', 'Fresh espresso over tonic and ice.' ),
		),
	),
	array(
		'id'    => 'beer',
		'title' => 'Beer',
		'kick'  => 'Cold, local and Italian. Not always in that order.',
		'img'   => 'beer-pour.jpg',
		'alt'   => 'A beer being poured from the tap',
		'open'  => false,
		'items' => array(
			array( 'Wisconsin Draft Rotation', 'A rotating handful of local taps. Ask your bartender what is pouring.' ),
			array( 'Italian Lager', 'Crisp, light and built for street food.' ),
			array( 'Pilsner', 'Clean and snappy.' ),
			array( 'Hazy IPA', 'Juicy, soft, dangerously drinkable.' ),
			array( 'N/A Beer', 'Because the designated driver deserves nice things too.' ),
		),
	),
	array(
		'id'    => 'food',
		'title' => 'Food',
		'kick'  => 'Elevated Italian street food. To snack, to share.',
		'img'   => 'pizza-slice.jpg',
		'alt'   => 'A slice of pizza',
		'open'  => false,
		'items' => array(
			array( 'Arancini', 'Crispy risotto balls, molten mozzarella, marinara.' ),
			array( 'Supplì', 'Roman fried rice croquettes with a stretchy cheese center.' ),
			array( 'Porchetta Sandwich', 'Locally sourced pork, salsa verde, crusty roll.' ),
			array( 'Meatballs', 'House meatballs, red sauce, whipped ricotta, grilled bread.' ),
			array( 'Pizza al Taglio', 'Roman-style square slices. Toppings change often.' ),
			array( 'Burrata & Bread', 'Imported burrata, olive oil, sea salt, warm bread.' ),
			array( 'Fritto Misto', 'A paper cone of fried things. Lemon. Aioli.' ),
			array( 'Cannoli', 'Filled to order. Pistachio, chocolate, no regrets.' ),
		),
	),
);
?>
<!-- wp:cover {"url":"<?php echo $i( 'back-bar.jpg' ); ?>","dimRatio":70,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":56,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30);min-height:56vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo $i( 'back-bar.jpg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"br-eyebrow"} -->
<p class="has-text-align-center br-eyebrow">Drinks · Plates · Good Decisions</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"br-hero-title"} -->
<h1 class="wp-block-heading has-text-align-center br-hero-title">The <em>Menu</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"br-lede","fontSize":"large"} -->
<p class="has-text-align-center br-lede has-large-font-size">Pick a section and dig in. The menu changes, so what's here is a taste of what's behind the bar.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:template-part {"slug":"tape","tagName":"div","className":"br-tape-wrap br-tape-flat"} /-->

<!-- wp:group {"align":"full","className":"br-menu-jump","style":{"spacing":{"padding":{"top":"0.85rem","bottom":"0.85rem","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"coal","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull br-menu-jump has-coal-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0.85rem;padding-right:var(--wp--preset--spacing--30);padding-bottom:0.85rem;padding-left:var(--wp--preset--spacing--30)"><?php foreach ( $sections as $s ) : ?><!-- wp:paragraph -->
<p><a href="#<?php echo esc_attr( $s['id'] ); ?>"><?php echo esc_html( $s['title'] ); ?></a></p>
<!-- /wp:paragraph -->

<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"br-menu","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ink","layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group alignfull br-menu has-ink-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><?php foreach ( $sections as $n => $s ) : ?><!-- wp:details {"anchor":"<?php echo esc_attr( $s['id'] ); ?>","className":"br-menu-section"<?php echo $s['open'] ? ',"showContent":true' : ''; ?>} -->
<details id="<?php echo esc_attr( $s['id'] ); ?>" class="wp-block-details br-menu-section"<?php echo $s['open'] ? ' open' : ''; ?>><summary><span class="br-menu-num"><?php echo esc_html( sprintf( '%02d', $n + 1 ) ); ?></span> <?php echo esc_html( $s['title'] ); ?></summary><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:image {"sizeSlug":"large","className":"br-menu-img"} -->
<figure class="wp-block-image size-large br-menu-img"><img src="<?php echo $i( $s['img'] ); ?>" alt="<?php echo esc_attr( $s['alt'] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"br-script","fontSize":"large"} -->
<p class="br-script has-large-font-size"><?php echo esc_html( $s['kick'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><?php foreach ( $s['items'] as $it ) : ?><!-- wp:group {"className":"br-item","layout":{"type":"default"}} -->
<div class="wp-block-group br-item"><!-- wp:heading {"level":4,"className":"br-item-name"} -->
<h4 class="wp-block-heading br-item-name"><?php echo esc_html( $it[0] ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"br-item-desc"} -->
<p class="br-item-desc"><?php echo esc_html( $it[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></details>
<!-- /wp:details -->

<?php endforeach; ?><!-- wp:paragraph {"align":"center","className":"br-fine","fontSize":"small"} -->
<p class="has-text-align-center br-fine has-small-font-size">Demo menu: drinks and dishes shown are placeholders until the real Black Rose menu is added. Please let your server know about any allergies.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
