<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>


	<div id="primary" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if( have_rows('home_page_sections') ) : ?>

				<?php while ( have_rows('home_page_sections') ) : ?>

					<?php the_row(); ?>

					<?php if( get_row_layout() == 'home_page_content' ) : ?>

						<article class="home-page-content">
							<?php the_sub_field('title'); ?>
							<?php the_sub_field('content'); ?>
						</article>

						<?php $hero_mobile = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-hero'); ?>
						<?php $hero_tablet = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-hero'); ?>
						<?php $hero_desktop = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-hero'); ?>
						<?php $hero_retina = wp_get_attachment_image_src(get_sub_field('image'), 'retina-hero'); ?>

						<picture class="home-featured-image">
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source
								data-srcset="<?php echo $hero_mobile[0]; ?>"
								media="(max-width: 500px)" />
							<source
								data-srcset="<?php echo $hero_tablet[0]; ?>"
								media="(max-width: 860px)" />
							<source
								data-srcset="<?php echo $hero_desktop[0]; ?>"
								media="(max-width: 1180px)" />
							<source
								data-srcset="<?php echo $hero_retina[0]; ?>"
								media="(min-width: 1181px)" />
							<!--[if IE 9]></video><![endif]-->
							<img
								src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
								class="lazyload"
								alt="Pinnacle Exhibits" />
						</picture>

					<?php endif; ?>

				<?php endwhile; ?>

			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

		FEATURED WORK EXAMPLES - 3 UP

	</div><!-- #primary -->

<?php get_footer(); ?>
