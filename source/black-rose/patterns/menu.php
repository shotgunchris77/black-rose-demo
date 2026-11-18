<?php
/**
 * Title: Menu Page
 * Slug: black-rose/menu
 * Categories: black-rose
 * Description: Menu page with drop-down sections for Cocktails, N/A Drinks, Beer, Wine and Food.
 * Inserter: yes
 */
$i = function ( $f ) { return esc_url( get_theme_file_uri( 'assets/images/' . $f ) ); };

$sections = array(
	array(
		'id'    => 'cocktails',
		'title' => 'Cocktails',
		'kick'  => 'Shaken, stirred, occasionally set on fire.',
		'img'   => 'negroni.jpg',
		'alt'   => 'A stirred cocktail with an orange twist',
		'open'  => true,
		'groups' => array(
			array( 'h' => 'Speciality', 'items' => array(
				array( 'Pom Cosmo', 'Wheatley, pomegranate, orange, lime', '12' ),
				array( 'Black Rose Dirty Martini', 'Ketel or Twisted Path gin, vermouth, olive oil, pepper, blue cheese olive', '13' ),
				array( 'Car Crash', 'Malört, Nardini Acqua di Cedro, orange, lemon, simple', '10' ),
				array( 'Manhattan Noir', 'Roulette, amaro, bitters, cherry', '12' ),
				array( 'Hot Honey Grapefruit Margarita', 'La Vieja Taberna reposado, orange, grapefruit, house hot honey', '10' ),
				array( "Fig Jam Bee's Knees", 'Tanqueray, fig jam, house ginger simple, lemon', '9' ),
				array( 'Divorce Papers', 'Twisted Path gin, Aperol, passionfruit, lemon', '9' ),
				array( 'Patty', 'La Vieja Taberna reposado, Campari, Cocchi Americano, grapefruit, house salted simple', '12' ),
				array( 'Pear Pressure', 'Wheatley, pear nectar, St-Germain, prosecco', '12' ),
				array( 'Viola!!', 'Amaretto, lambrusco, balsamic, cherry', '10' ),
				array( 'Rosa Negra', 'Nosotros reposado, Licor 43, espresso', '11' ),
				array( 'White Lotus', 'Ketel, lychee, lemon, simple', '12' ),
			) ),
			array( 'h' => "Ol' Fashioned", 'items' => array(
				array( 'Black Rose', 'Central Standard brandy, Cherry Heering, demerara, bitters', '11' ),
				array( 'Rye and Agave', 'Rye, agave, house cherry, orange bitters', '9' ),
				array( 'Viejo', 'Dos Santos, Tacoma Punk, orange, agave, bitters', '11' ),
				array( 'Mister Swiss', 'Dancing Goat Swiss Misters rye, demerara, chocolate and orange bitters, big rock', '14' ),
			) ),
			array( 'h' => 'House Wine', 'items' => array(
				array( 'Grape Ape', '', '6' ),
				array( 'Espresso Bourbon', '', '4' ),
				array( 'Ferlort', '', '4' ),
				array( 'Chicago Handshake', '', '4' ),
			) ),
		),
	),
	array(
		'id'    => 'na-drinks',
		'title' => 'N/A Drinks',
		'kick'  => 'All of the flavor, none of the Tuesday-morning regret.',
		'img'   => 'cocktail-flight.jpg',
		'alt'   => 'Three spirit-free style cocktails on the bar',
		'open'  => false,
		'groups' => array(
			array( 'h' => 'Spirit-Free', 'items' => array(
				array( 'Palomino', 'Ritual tequila, house salted syrup, grapefruit, lime', '10' ),
				array( 'Garden Spritz', 'Seedlip Garden, elderflower cordial, tonic, cucumber', '9' ),
				array( 'High Stakes', 'Seedlip Grove, house honey simple, lemon, orange blossom water', '9' ),
				array( 'Pink Pearl', 'Egg white, orgeat, cranberry, lemon', '8' ),
				array( 'Olive Oil', 'Empress 0.0, elderflower cordial, N/A prosecco, mint', '10' ),
				array( 'Amalfi Spritz', 'Lapos aperitivo, N/A prosecco, club', '10' ),
				array( "The Cat's Miaow", 'Seedlip Grove, fig jam, house ginger simple, lemon', '9' ),
				array( 'Nora', 'Egg white, house hot honey, agave, grapefruit', '8' ),
			) ),
			array( 'h' => 'N/A Beer', 'items' => array(
				array( 'Athletic', '0.0%', '6' ),
				array( 'Michelob Ultra Zero', '0.0%', '4' ),
			) ),
		),
	),
	array(
		'id'    => 'beer',
		'title' => 'Beer',
		'kick'  => 'Bottles and cans. Cold, local and not always in that order.',
		'img'   => 'beer-pour.jpg',
		'alt'   => 'A beer being poured',
		'open'  => false,
		'groups' => array(
			array( 'h' => 'Hoppy', 'items' => array(
				array( 'Half Acre Daisy Cutter', 'Pale ale · 5.2%', '6' ),
				array( 'Third Space Happy Place', 'Pale ale · 5.3%', '5' ),
				array( '3 Sheeps Chaos Pattern', 'IPA · 6.5%', '5' ),
				array( "Bell's Two Hearted", 'IPA · 7.0%', '6' ),
				array( 'Dogfish Head Grateful Dead', 'IPA · 5.3%', '6' ),
				array( 'Founders All Day IPA', 'IPA · 4.7%', '6' ),
				array( 'Sierra Nevada Hazy Little Things', 'IPA · 6.7%', '5' ),
				array( 'Third Space Upward Spiral', 'IPA · 6.5%', '6' ),
			) ),
			array( 'h' => 'Light', 'items' => array(
				array( 'Miller High Life', 'Lager · 4.6%', '4' ),
				array( 'Old Style', 'Lager · 4.6%', '4' ),
				array( 'Lakefront New Grist GF', 'Pilsner · 5.0%', '5' ),
				array( 'Miller Lite', 'Pilsner · 4.2%', '4' ),
				array( 'Modelo Especial', 'Pilsner · 4.4%', '5' ),
			) ),
			array( 'h' => 'Malty', 'items' => array(
				array( 'Spotted Cow', 'Farmhouse ale · 4.8%', '5' ),
				array( 'Alaskan', 'Amber · 5.3%', '5' ),
				array( 'Yuengling', 'Amber · 4.5%', '4' ),
				array( 'Central Waters Mudpuppy', 'Porter · 5.6%', '6' ),
				array( 'Great Lakes Edmund Fitzgerald', 'Porter · 6.0%', '5' ),
				array( "Leinenkugel's White Mocha Stout", 'Stout · 5.6%', '6' ),
			) ),
			array( 'h' => 'Sour', 'items' => array(
				array( 'Sierra Nevada Wild Little Things', 'Fruited sour · 5.5%', '5' ),
				array( 'Third Space Frog Weiss', 'Fruited sour · 5.0%', '6' ),
			) ),
			array( 'h' => 'Cider | Seltzer', 'items' => array(
				array( 'Eagle Park Spekto Cooler', 'Seltzer · 5.0%', '6' ),
			) ),
		),
	),
	array(
		'id'    => 'wine',
		'title' => 'Wine',
		'kick'  => 'Mostly Italian. Priced by the glass and the bottle.',
		'img'   => 'wine-pour.jpg',
		'alt'   => 'Red wine being poured into a glass',
		'open'  => false,
		'note'  => 'Glass | Bottle',
		'groups' => array(
			array( 'h' => 'Red', 'items' => array(
				array( 'Folk Machine Pinot Noir', 'Central Coast, CA', '13 | 48' ),
				array( "Barbera d'Asti", 'Piedmont, IT', '8 | 32' ),
				array( 'Rocca delle Macie Chianti', 'Tuscany, IT', '11 | 44' ),
				array( 'Cleto Chiarli Lambrusco', 'Emilia-Romagna, IT', '9 | 36' ),
				array( 'House Cabernet', '', '9 | 36' ),
			) ),
			array( 'h' => 'White', 'items' => array(
				array( 'Tavernello Bianco', 'Caviro, IT', '9 | 32' ),
				array( "Moscato d'Asti", 'Luca Bosio, Piedmont, IT', '9 | 36' ),
				array( 'Chasing Venus Sauvignon Blanc', 'Marlborough, NZ', '10 | 39' ),
				array( 'Rosé', 'Gruet, NM', '10 | 39' ),
				array( 'Prosecco', 'Guinigi, Veneto, IT', '9 | 36' ),
				array( 'House Chardonnay', '', '9 | 36' ),
			) ),
		),
	),
	array(
		'id'    => 'food',
		'title' => 'Food',
		'kick'  => 'Elevated Italian street food. To snack, to share.',
		'img'   => 'pizza-slice.jpg',
		'alt'   => 'A slice of pizza',
		'open'  => false,
		'note'  => 'V can be made vegetarian · VG can be made vegan · GF gluten-free · GFO gluten-free option available',
		'groups' => array(
			array( 'h' => 'Specials', 'items' => array(
				array( 'Mortadella Sliders', 'Seared mortadella, mozzarella, spiced fig jam', '14' ),
				array( 'Parm Patata', 'Roasted fingerlings, scarpariello sauce, peppers, onions, shaved parm (V, VG, GF)', '11' ),
				array( 'Fig & Prosciutto Pizza', 'EVOO, fig, prosciutto, arugula, ricotta, balsamic reduction, pistachio', '17' ),
				array( 'Squash & Rosemary Pasta', 'House roasted squash sauce, roasted rosemary, rigatoni mezzi. Add sausage $5', '15' ),
				array( 'Rotating Pesto Pasta', 'Ask your server for details', '15' ),
			) ),
			array( 'h' => 'To Snack, To Share', 'items' => array(
				array( 'Wisconsin Platter', 'Local meats, cheese, pickled veggies, local jam (GFO)', '26' ),
				array( 'Brat Sliders', "Rotating chef's choice flavors, local made Sciortino's rolls, local made Le Marche sausage", '14' ),
				array( 'Italian Dip', 'Imported olive oil, balsamic, olives, marinated tomato wedges, herbs, burrata ball (V, VG, GFO)', '15' ),
				array( 'Ricotta & Sausage Dumplings', 'House dumplings, ricotta, Italian sausage, scarpariello sauce', '12' ),
				array( 'Meatballs', 'House meatballs, sugo, mozzarella', '12' ),
			) ),
			array( 'h' => 'Salad, Soup, Dessert', 'items' => array(
				array( 'Seasonal Salad', "Chef's choice seasonal salad (V, VG, GFO)", '10' ),
				array( 'Creamy Gnocchi Soup', "Nonna's best. Comforting, classic. (V)", '8' ),
				array( 'Deconstructed Cannoli Dip', 'House-made cannoli dip, rotating flavors (V)', '10' ),
				array( 'Crème Brûlée Flatbread', 'House-made dessert flatbread (V)', '10' ),
			) ),
			array( 'h' => 'Sandwiches', 'items' => array(
				array( 'Vodka Parm', 'Chicken cutlet, mozzarella, vodka sauce. Add burrata $5', '15' ),
				array( 'The Gabagool', 'Ham, salami, capicola, pepperoni, provolone, arugula, red onion, tomato, pepperoncini, house-made dressing', '15' ),
				array( 'The Bourdain', 'Mortadella, melted provolone, pesto ricotta, pistachio', '14' ),
				array( 'The Top Tier Clucker', 'Pulled chicken, romesco, ricotta, arugula, onion', '14' ),
				array( 'Ham and Provolone', 'Badger smoked ham, provolone, marinated tomato, mixed greens, dijon aioli, onion, balsamic reduction', '13' ),
				array( 'Meatball', 'House meatballs, sugo, mozzarella', '15' ),
				array( 'The Veggie', 'Mixed greens, marinated tomato and mushroom, kalamata olive blend, roasted red pepper, onion, shaved parm, avorio mozzarella, house dressing (V, VG)', '13' ),
			) ),
			array( 'h' => 'Pizza', 'items' => array(
				array( 'The Marg', 'Sugo, mozzarella, fresh basil. Add Italian sausage $5 (V)', '13' ),
				array( 'The Diavola', 'Vodka sauce, salami, pepperoni, ricotta, hot honey', '16' ),
				array( 'The Lady in White', 'Mornay, caramelized onion, crimini mushroom, olives, balsamic reduction. Add Italian sausage $5 (V)', '15' ),
				array( 'The Garden of Eaten', 'Pesto base, olives, crimini mushroom, caramelized onion, basil, ricotta. Add chicken cutlet $6', '15' ),
			) ),
			array( 'h' => 'Pasta', 'items' => array(
				array( 'Lumaconi e Peppadew', 'Stuffed shells and peppers with Italian sausage over a bed of mornay sauce, lightly topped with house-made sugo', '17' ),
				array( 'Lasagna', 'Made to order. Fresh local pasta, Italian sausage, house sugo, mornay and mozzarella (V)', '17' ),
				array( 'Baked Ziti', 'Imported bronze cut pasta, Italian sausage with Calabrian spices, house vodka sauce, topped with ricotta and house-made Calabrian hot honey', '16' ),
			) ),
		),
	),
);
?>
<!-- wp:cover {"url":"<?php echo $i( 'back-bar.jpg' ); ?>","dimRatio":70,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":56,"minHeightUnit":"vh","align":"full","className":"br-menu-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-cover alignfull br-menu-hero" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30);min-height:56vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo $i( 'back-bar.jpg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"br-eyebrow"} -->
<p class="has-text-align-center br-eyebrow">Drinks · Plates · Good Decisions</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"br-hero-title"} -->
<h1 class="wp-block-heading has-text-align-center br-hero-title">The <em>Menu</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"br-lede","fontSize":"large"} -->
<p class="has-text-align-center br-lede has-large-font-size">Pick a section and dig in. Specials rotate, so ask your server what's new.</p>
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
<div class="wp-block-column" style="flex-basis:66%"><?php if ( ! empty( $s['note'] ) ) : ?><!-- wp:paragraph {"className":"br-menu-note"} -->
<p class="br-menu-note"><?php echo esc_html( $s['note'] ); ?></p>
<!-- /wp:paragraph -->

<?php endif; ?><?php foreach ( $s['groups'] as $g ) : ?><!-- wp:heading {"level":3,"className":"br-menu-group"} -->
<h3 class="wp-block-heading br-menu-group"><?php echo esc_html( $g['h'] ); ?></h3>
<!-- /wp:heading -->

<?php foreach ( $g['items'] as $it ) : ?><!-- wp:group {"className":"br-item","layout":{"type":"default"}} -->
<div class="wp-block-group br-item"><!-- wp:heading {"level":4,"className":"br-item-name"} -->
<h4 class="wp-block-heading br-item-name"><?php echo esc_html( $it[0] ); ?> <span class="br-price"><?php echo esc_html( $it[2] ); ?></span></h4>
<!-- /wp:heading -->
<?php if ( '' !== $it[1] ) : ?>
<!-- wp:paragraph {"className":"br-item-desc"} -->
<p class="br-item-desc"><?php echo esc_html( $it[1] ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></div>
<!-- /wp:group -->

<?php endforeach; ?><?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></details>
<!-- /wp:details -->

<?php endforeach; ?><!-- wp:paragraph {"align":"center","className":"br-fine","fontSize":"small"} -->
<p class="has-text-align-center br-fine has-small-font-size">Our kitchen handles gluten, nuts, dairy and other common allergens. While we offer modifications and take steps to minimize cross-contact, we are not a certified gluten-free or allergen-free environment and cannot guarantee any item is completely free of allergens. Please tell your server about any severe allergies before ordering.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
