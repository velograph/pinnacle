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
							<div class="content-title">
								<h2><?php the_sub_field('title'); ?></h2>
							</div>
							<div class="entry-content">
								<?php the_sub_field('content'); ?>
							</div>
						</article>

						<?php $hero_mobile = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-home-featured'); ?>
						<?php $hero_tablet = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-home-featured'); ?>
						<?php $hero_desktop = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-home-featured'); ?>
						<?php $hero_retina = wp_get_attachment_image_src(get_sub_field('image'), 'retina-home-featured'); ?>

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

		<?php

			$args = array(
			'post_type' => 'work',
			'posts_per_page' => 3
			);
			$query = new WP_Query($args);

			if($query->have_posts()) : ?>

			<section class="work-portals">

				<?php while($query->have_posts()) : ?>

					<?php $query->the_post(); ?>

					<div class="square-portal-container">

					<div class="square-portal-overlay"></div>

						<?php $square_mobile = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'mobile-squared'); ?>
						<?php $square_tablet = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'tablet-squared'); ?>
						<?php $square_desktop = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'desktop-squared'); ?>

						<picture class="home-featured-image">
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source
								data-srcset="<?php echo $square_mobile[0]; ?>"
								media="(max-width: 500px)" />
							<source
								data-srcset="<?php echo $square_tablet[0]; ?>"
								media="(max-width: 860px)" />
							<source
								data-srcset="<?php echo $square_desktop[0]; ?>"
								media="(min-width: 861px)" />
							<!--[if IE 9]></video><![endif]-->
							<img
								src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
								class="lazyload"
								alt="Pinnacle Exhibits" />
						</picture>

						<div class="square-portal">
							<a href="<?php the_permalink(); ?>">
								<h1><?php the_title() ?></h1>
								<div class="post-content"><?php the_content(); ?></div>
							</a>
						</div>
					</div>

				<?php endwhile; ?>

			</section>

		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
