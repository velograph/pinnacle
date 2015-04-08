<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pinnacle Exhibits
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="body-border top-body-border"></div>
	<div class="body-border right-body-border"></div>
	<div class="body-border bottom-body-border"></div>
	<div class="body-border left-body-border"></div>

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'Pinnacle Exhibits' ); ?></a>

<?php if( is_front_page() ) : ?>


	<?php
		$target_post_id = '12';
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($target_post_id), 'original-upload' );
	?>
	<div class="featured-home-image" style="background-image: url(<?php echo $src[0]; ?> ); background-size: cover;"></div>

<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">

		<div class="inner-header">

			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?xml version="1.0" encoding="utf-8"?>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 92 14" enable-background="new 0 0 92 14" xml:space="preserve">
					<g>
						<path fill="#7E7D7E" d="M0.1,0.7h6.8c1.9,0,3.8,1,3.8,3.6C10.7,6.7,9.1,8,6.3,8H1.4v5.3H0.1c0,0,0,0,0-6.5C0.1,0.7,0.1,0.7,0.1,0.7
							z M1.4,6.8h5c2.2,0,2.8-1,2.8-2.5c0-1.9-1.1-2.4-2.5-2.4H1.4c0,0,0,0,0,2.3C1.4,6.8,1.4,6.8,1.4,6.8z"/>
						<path fill="#7E7D7E" d="M12.4,0.7h1.3c0,0,0,0,0,6.5c0,6,0,6.1,0,6.1h-1.3c0,0,0,0,0-6.1C12.4,0.7,12.4,0.7,12.4,0.7z"/>
						<path fill="#7E7D7E" d="M16.2,0.7h1.6l8.8,10.7h0c0,0,0,0,0-5.8c0-4.9,0-4.9,0-4.9h1.3c0,0,0,0,0,5.6c0,6.9,0,6.9,0,6.9h-1.5
							L17.5,2.6h0c0,0,0,0,0,4.9c0,5.8,0,5.8,0,5.8h-1.3c0,0,0,0,0-6.9C16.2,0.7,16.2,0.7,16.2,0.7z"/>
						<path fill="#7E7D7E" d="M30.2,0.7h1.6c0,0,0,0,4.2,5.2c4.5,5.5,4.5,5.5,4.5,5.5h0c0,0,0,0,0-7.1c0-3.6,0-3.6,0-3.6h1.3
							c0,0,0,0,0,4.4c0,8.1,0,8.1,0,8.1h-1.5c0,0,0,0-4.6-5.6c-4.2-5.1-4.2-5.1-4.2-5.1h0c0,0,0,0,0,5.3c0,5.4,0,5.4,0,5.4h-1.3
							c0,0,0,0,0-6.2C30.2,0.7,30.2,0.7,30.2,0.7z"/>
						<path fill="#7E7D7E" d="M52.6,9.5c0,0,0,0-3.2,0c-3.5,0-3.4,0-3.4,0l-1.7,3.8h-1.4c0,0,0,0,3.1-6.9c2.6-5.7,2.6-5.6,2.6-5.6h1.5
							c0,0,0,0,2.7,6c3,6.5,3,6.6,3,6.6h-1.5L52.6,9.5z M49.3,2c0,0,0,0-1.3,2.9c-1.5,3.3-1.5,3.3-1.5,3.3s0,0,2.9,0c2.7,0,2.7,0,2.7,0
							s0,0-1.4-3.2C49.3,2,49.3,2,49.3,2z"/>
						<path fill="#7E7D7E" d="M69.2,8.5c-0.3,2.8-2.6,5.1-6.2,5.1c-4.1,0-6.7-2.6-6.7-6.6c0-2.9,1.8-6.6,6.7-6.6c2.7,0,5.7,1.2,6.1,4.5
							h-1.3c-0.4-2.4-2.5-3.4-4.8-3.4c-3.1,0-5.3,1.7-5.3,5.4c0,2.8,1.5,5.4,5.3,5.4c3,0,4.5-1.5,4.9-3.9H69.2z"/>
						<path fill="#7E7D7E" d="M71.1,0.7h1.3c0,0,0,0,0,5.9c0,5.4,0,5.4,0,5.4s0,0,4,0c4,0,4,0,4,0v1.2c0,0,0,0-4.4,0c-4.8,0-4.8,0-4.8,0
							s0,0,0-6.6C71.1,0.7,71.1,0.7,71.1,0.7z"/>
						<path fill="#7E7D7E" d="M81.7,0.7c0,0,0,0,5.2,0c4.8,0,4.8,0,4.8,0v1.2c0,0,0,0-4.1,0c-4.5,0-4.5,0-4.5,0v4.2c0,0,0,0,3.8,0
							c4.5,0,4.5,0,4.5,0v1.2c0,0,0,0-4.5,0c-3.8,0-3.8,0-3.8,0v4.7c0,0,0,0,4.3,0c4.5,0,4.5,0,4.5,0v1.2c0,0,0,0-5.1,0c-5,0-5,0-5,0
							s0,0,0-6.6C81.8,0.7,81.7,0.7,81.7,0.7z"/>
					</g>
					</svg>
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->

			<?php if( is_front_page() ) : ?>

				<h1 class="home-description"><?php the_field('home_page_description'); ?></h1>

			<?php endif; ?>

			<button id="trigger-overlay" type="button">
				<?xml version="1.0" encoding="utf-8"?>
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 14 11.5" enable-background="new 0 0 14 11.5" xml:space="preserve">
				<g>
					<path fill="#7E7D7E" d="M13.9,2.7c0,0.2-0.1,0.3-0.3,0.3H0.4C0.3,3,0.1,2.9,0.1,2.7V0.6c0-0.2,0.1-0.3,0.3-0.3h13.1
						c0.2,0,0.3,0.1,0.3,0.3L13.9,2.7z"/>
					<path fill="#7E7D7E" d="M13.9,6.8c0,0.2-0.1,0.3-0.3,0.3H0.4C0.3,7.1,0.1,7,0.1,6.8V4.7c0-0.2,0.1-0.3,0.3-0.3h13.1
						c0.2,0,0.3,0.1,0.3,0.3L13.9,6.8z"/>
					<path fill="#7E7D7E" d="M13.9,10.9c0,0.2-0.1,0.3-0.3,0.3H0.4c-0.2,0-0.3-0.1-0.3-0.3V8.8c0-0.2,0.1-0.3,0.3-0.3h13.1
						c0.2,0,0.3,0.1,0.3,0.3L13.9,10.9z"/>
				</g>
				</svg>
			</button>

		</div>

	</header><!-- #masthead -->

	<div class="overlay overlay-pinnacle">
		<button type="button" class="overlay-close">
			<?xml version="1.0" encoding="utf-8"?>
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 12.5 12.5" enable-background="new 0 0 12.5 12.5" xml:space="preserve">
			<path fill="#FFFFFF" d="M7.9,6.2l4.2-4.2c0.2-0.2,0.2-0.4,0-0.6L11,0.4c-0.2-0.2-0.4-0.2-0.6,0L6.3,4.6L2.1,0.4
				c-0.2-0.2-0.4-0.2-0.6,0L0.4,1.5c-0.2,0.2-0.2,0.4,0,0.6l4.2,4.2l-4.2,4.2c-0.2,0.2-0.2,0.4,0,0.6l1.1,1.1c0.2,0.2,0.4,0.2,0.6,0
				l4.2-4.2l4.2,4.2c0.2,0.2,0.4,0.2,0.6,0l1.1-1.1c0.2-0.2,0.2-0.4,0-0.6L7.9,6.2z"/>
			</svg>
		</button>

		<nav>
			<?php wp_nav_menu(
				array(
						'theme_location' => 'primary',
					)
				);
			?>

			<div class="social-links">
				<a href="https://www.facebook.com/pages/Double-Darn/274214005984292" target="_blank">
					<?xml version="1.0" encoding="UTF-8" standalone="no"?>
					<svg viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
						<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
							<g id="Desktop" sketch:type="MSArtboardGroup" transform="translate(-555.000000, -1790.000000)" fill="#FFFFFF">
								<g id="facebook" sketch:type="MSLayerGroup" transform="translate(555.000000, 1790.000000)">
									<path d="M20.4444444,0 L2.55555556,0 C1.15,0 0,1.15 0,2.55555556 L0,20.4444444 C0,21.8512778 1.15,23 2.55555556,23 L11.5,23 L11.5,14.0555556 L8.94444444,14.0555556 L8.94444444,10.8930556 L11.5,10.8930556 L11.5,8.27361111 C11.5,5.5085 13.0486667,3.56627778 16.3121111,3.56627778 L18.6159444,3.56883333 L18.6159444,6.89744444 L17.0864444,6.89744444 C15.8163333,6.89744444 15.3333333,7.85066667 15.3333333,8.73488889 L15.3333333,10.8943333 L18.6146667,10.8943333 L17.8888889,14.0555556 L15.3333333,14.0555556 L15.3333333,23 L20.4444444,23 C21.85,23 23,21.8512778 23,20.4444444 L23,2.55555556 C23,1.15 21.85,0 20.4444444,0 L20.4444444,0 Z" id="Shape" sketch:type="MSShapeGroup"></path>
								</g>
							</g>
						</g>
					</svg>
				</a>

				<a href="https://instagram.com/doubledarn/" target="_blank">
					<?xml version="1.0" encoding="UTF-8" standalone="no"?>
					<svg viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
						<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
							<g id="Desktop" sketch:type="MSArtboardGroup" transform="translate(-602.000000, -1790.000000)" fill="#FFFFFF">
								<g id="instagram" sketch:type="MSLayerGroup" transform="translate(602.000000, 1790.000000)">
									<path d="M20.4444444,0 L2.55555556,0 C1.15,0 0,1.15 0,2.55555556 L0,20.4444444 C0,21.8512778 1.15,23 2.55555556,23 L20.4444444,23 C21.85,23 23,21.8512778 23,20.4444444 L23,2.55555556 C23,1.15 21.85,0 20.4444444,0 L20.4444444,0 Z M11.4795556,18.5571667 C15.3882778,18.5571667 18.5558889,15.387 18.5558889,11.4795556 C18.5558889,11.0476667 18.5009444,10.6311111 18.4242778,10.2222222 L20.4444444,10.2222222 L20.4444444,19.4426667 C20.4444444,19.9307778 20.0483333,20.3243333 19.5589444,20.3243333 L3.44105556,20.3243333 C2.95166667,20.3243333 2.55555556,19.9307778 2.55555556,19.4426667 L2.55555556,10.2222222 L4.53483333,10.2222222 C4.45688889,10.6311111 4.40194444,11.0476667 4.40194444,11.4795556 C4.40194444,15.3882778 7.57211111,18.5571667 11.4795556,18.5571667 L11.4795556,18.5571667 Z M7.05716667,11.4795556 C7.05716667,9.03644444 9.03772222,7.05716667 11.4808333,7.05716667 C13.9226667,7.05716667 15.9045,9.03644444 15.9045,11.4795556 C15.9045,13.9226667 13.9226667,15.9032222 11.4808333,15.9032222 C9.03644444,15.9032222 7.05716667,13.9226667 7.05716667,11.4795556 L7.05716667,11.4795556 Z M19.5589444,6.38888889 L17.4953333,6.38888889 C17.0072222,6.38888889 16.6111111,5.99022222 16.6111111,5.50466667 L16.6111111,3.4385 C16.6111111,2.95038889 17.0072222,2.55555556 17.4940556,2.55555556 L19.5576667,2.55555556 C20.0483333,2.55555556 20.4444444,2.95038889 20.4444444,3.4385 L20.4444444,5.50338889 C20.4444444,5.99022222 20.0483333,6.38888889 19.5589444,6.38888889 L19.5589444,6.38888889 Z" id="Shape" sketch:type="MSShapeGroup"></path>
								</g>
							</g>
						</g>
					</svg>
				</a>
			</div>
		</nav>
	</div>

	<div id="content" class="site-content">
