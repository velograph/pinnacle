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

				<?php
					$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'original-upload' );
				?>
				<div class="featured-home-image" style="background-image: url(<?php echo $src[0]; ?> );">
					&nbsp;
				</div>

				<div class="home-description-container">
					<h1 class="home-description"><?php the_field('home_page_description'); ?></h1>
				</div>

				<?php if( have_rows('home_page_sections') ) : ?>

				<?php while ( have_rows('home_page_sections') ) : ?>

					<?php the_row(); ?>

					<?php if( get_row_layout() == 'home_page_content' ) : ?>

						<article class="page-content">
							<div class="entry-title">
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

						<?php if( get_sub_field('image') ) : ?>
							<picture class="home-featured-image">
								<!--[if IE 9]><video style="display: none"><![endif]-->
								<source
									srcset="<?php echo $hero_mobile[0]; ?>"
									media="(max-width: 500px)" />
								<source
									srcset="<?php echo $hero_tablet[0]; ?>"
									media="(max-width: 860px)" />
								<source
									srcset="<?php echo $hero_desktop[0]; ?>"
									media="(max-width: 1180px)" />
								<source
									srcset="<?php echo $hero_retina[0]; ?>"
									media="(min-width: 1181px)" />
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $desktop[0]; ?>">
							</picture>
						<?php endif; ?>

					<?php endif; ?>

				<?php endwhile; ?>

			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>


		<?php

		$posts = get_field('featured_project');

		if( $posts ): ?>

			<section class="work-portals">

				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>

					<div class="square-portal-container">

						<a href="<?php the_permalink(); ?>">
							<div class="square-portal-overlay"></div>

							<?php $mobile_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'mobile-squared'); ?>
							<?php $tablet_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'tablet-squared'); ?>
							<?php $desktop_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'desktop-squared'); ?>

							<picture class="home-featured-image">
								<!--[if IE 9]><video style="display: none"><![endif]-->
								<source
									srcset="<?php echo $mobile_squared[0]; ?>"
									media="(max-width: 500px)" />
								<source
									srcset="<?php echo $tablet_squared[0]; ?>"
									media="(max-width: 860px)" />
								<source
									srcset="<?php echo $desktop_squared[0]; ?>"
									media="(min-width: 861px)" />
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $desktop_squared[0]; ?>">
							</picture>

							<div class="square-portal">
									<span class="rollover-top portal-text">Featured:</span>
									<span class="rollover-middle portal-text"><?php the_title(); ?></span>
									<span class="rollover-bottom portal-text"><?php the_field('subtitle'); ?></span>
							</div>
						</a>
					</div>

				<?php endforeach; ?>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

			</section>

		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
