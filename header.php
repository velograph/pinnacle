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
		$target_post_id = '12'; // Front Page
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($target_post_id), 'original-upload' );
	?>
	<div class="featured-home-image" style="background-image: url(<?php echo $src[0]; ?> ); background-size: cover;"></div>

	<?php endif; ?>

	<!-- Overlay Menu -->
	<div class="overlay overlay-pinnacle">

		<a class="mobile-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?xml version="1.0" encoding="utf-8"?>
			<svg width="200" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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

		<button type="button" class="overlay-close">
			<?xml version="1.0" encoding="utf-8"?>
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 12.5 12.5" enable-background="new 0 0 12.5 12.5" xml:space="preserve">
			<path fill="#FFFFFF" d="M7.9,6.2l4.2-4.2c0.2-0.2,0.2-0.4,0-0.6L11,0.4c-0.2-0.2-0.4-0.2-0.6,0L6.3,4.6L2.1,0.4
				c-0.2-0.2-0.4-0.2-0.6,0L0.4,1.5c-0.2,0.2-0.2,0.4,0,0.6l4.2,4.2l-4.2,4.2c-0.2,0.2-0.2,0.4,0,0.6l1.1,1.1c0.2,0.2,0.4,0.2,0.6,0
				l4.2-4.2l4.2,4.2c0.2,0.2,0.4,0.2,0.6,0l1.1-1.1c0.2-0.2,0.2-0.4,0-0.6L7.9,6.2z"/>
			</svg>&nbsp;<span class="menu-text">Menu</span>
		</button>

		<div class="mobile-navigation">
			<?php wp_nav_menu(
				array(
						'theme_location' => 'primary',
					)
				);
			?>


			<div class="social-links">
				<a href="<?php the_field('facebook_link', 130); ?>" target="_blank">
					<?xml version="1.0" encoding="utf-8"?>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 14.5 14.5" enable-background="new 0 0 14.5 14.5" xml:space="preserve">
					<path fill="#00A9C5" d="M13.7,0.1H0.8c-0.4,0-0.8,0.4-0.8,0.8v12.8c0,0.4,0.4,0.8,0.8,0.8h6.9V8.9H5.9V6.7h1.9V5.1
						c0-1.9,1.1-2.9,2.8-2.9c0.8,0,1.5,0.1,1.7,0.1v1.9l-1.2,0c-0.9,0-1.1,0.4-1.1,1.1v1.4h2.2l-0.3,2.2H10v5.6h3.7
						c0.4,0,0.8-0.4,0.8-0.8V0.8C14.4,0.4,14.1,0.1,13.7,0.1z"/>
					</svg>
				</a>

				<a href="<?php the_field('twitter_link', 130); ?><?php the_field(''); ?>" target="_blank">
					<?xml version="1.0" encoding="utf-8"?>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 16 13" enable-background="new 0 0 16 13" xml:space="preserve">
					<path fill="#00A9C5" d="M15.8,1.7c-0.6,0.3-1.2,0.4-1.8,0.5c0.7-0.4,1.2-1,1.4-1.8c-0.6,0.4-1.3,0.6-2,0.8c-0.6-0.6-1.4-1-2.3-1
						c-1.8,0-3.2,1.4-3.2,3.2c0,0.3,0,0.5,0.1,0.7C5.2,4,2.9,2.7,1.3,0.8C1,1.2,0.9,1.8,0.9,2.4c0,1.1,0.6,2.1,1.4,2.7
						c-0.5,0-1-0.2-1.4-0.4c0,0,0,0,0,0c0,1.5,1.1,2.8,2.6,3.1C3.1,7.9,2.9,7.9,2.6,7.9c-0.2,0-0.4,0-0.6-0.1c0.4,1.3,1.6,2.2,3,2.2
						c-1.1,0.9-2.5,1.4-4,1.4c-0.3,0-0.5,0-0.8,0c1.4,0.9,3.1,1.4,4.9,1.4c5.9,0,9.1-4.9,9.1-9.1c0-0.1,0-0.3,0-0.4
						C14.8,2.9,15.3,2.3,15.8,1.7z"/>
					</svg>
				</a>

				<a href="<?php the_field('instagram_link', 130); ?>" target="_blank">
					<?xml version="1.0" encoding="utf-8"?>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 15 15" enable-background="new 0 0 15 15" xml:space="preserve">
					<g>
						<path fill-rule="evenodd" clip-rule="evenodd" fill="#00A9C5" d="M13,6.4h-1.3c0.1,0.4,0.1,0.7,0.1,1.1c0,2.4-2,4.4-4.4,4.4
							c-2.4,0-4.4-2-4.4-4.4c0-0.4,0.1-0.8,0.1-1.1H2v6.1C2,12.8,2.2,13,2.5,13h10c0.3,0,0.6-0.2,0.6-0.6V6.4z M13,2.5
							C13,2.2,12.8,2,12.5,2h-1.7c-0.3,0-0.6,0.2-0.6,0.6v1.7c0,0.3,0.2,0.6,0.6,0.6h1.7c0.3,0,0.6-0.2,0.6-0.6V2.5z M7.5,4.7
							C6,4.7,4.7,6,4.7,7.5c0,1.5,1.2,2.8,2.8,2.8s2.8-1.2,2.8-2.8C10.3,6,9,4.7,7.5,4.7 M13,14.7H2C1,14.7,0.3,14,0.3,13V2
							C0.3,1,1,0.3,2,0.3H13C14,0.3,14.7,1,14.7,2V13C14.7,14,14,14.7,13,14.7"/>
					</g>
					</svg>
				</a>

				<a href="<?php the_field('pinterest_link', 130); ?>" target="_blank">
					<?xml version="1.0" encoding="utf-8"?>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 15 15" enable-background="new 0 0 15 15" xml:space="preserve">
					<g>
						<g>
							<path fill="#00A9C5" d="M7.5,0.3c-4,0-7.2,3.2-7.2,7.2c0,3.1,1.9,5.7,4.6,6.7c-0.1-0.6-0.1-1.4,0-2.1C5,11.6,5.7,8.6,5.7,8.6
								S5.5,8.1,5.5,7.5c0-1,0.6-1.7,1.3-1.7c0.6,0,0.9,0.5,0.9,1c0,0.6-0.4,1.5-0.6,2.4C7,9.9,7.5,10.5,8.2,10.5c1.3,0,2.3-1.3,2.3-3.3
								c0-1.7-1.2-2.9-3-2.9c-2,0-3.3,1.5-3.3,3.1C4.2,8,4.5,8.6,4.8,9c0.1,0.1,0.1,0.1,0,0.2C4.7,9.4,4.6,9.9,4.6,10
								c0,0.1-0.1,0.2-0.2,0.1C3.5,9.7,2.9,8.4,2.9,7.3C2.9,5.1,4.6,3,7.7,3c2.5,0,4.4,1.8,4.4,4.2c0,2.5-1.6,4.5-3.7,4.5
								c-0.7,0-1.4-0.4-1.7-0.8c0,0-0.4,1.4-0.4,1.7c-0.2,0.6-0.6,1.4-0.9,1.9c0.7,0.2,1.4,0.3,2.1,0.3c4,0,7.2-3.2,7.2-7.2
								C14.7,3.5,11.5,0.3,7.5,0.3z"/>
						</g>
					</g>
					</svg>
				</a>
			</div>

			<a class="mailto-link" href="mailto:info@pinnacle-exhibits.com">info@pinnacle-exhibits.com</a>

			</div>




	</div>

	<header id="masthead" class="site-header" role="banner">

		<div class="inner-header">

			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?xml version="1.0" encoding="utf-8"?>
					<svg width="200" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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

	<div id="content" class="site-content">
