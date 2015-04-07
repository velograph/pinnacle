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
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->

			<?php if( is_front_page() ) : ?>

				<h1 class="home-description"><?php the_field('home_page_description'); ?></h1>

			<?php endif; ?>

		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
