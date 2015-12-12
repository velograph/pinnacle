<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

	<div id="primary" class="work-archive-container content-area">

		<section class="page-top">
			<div class="page-top-content">
				<h1><?php
					the_archive_title();
				?></h1>
			</div>
		</section>

		<div class="three-up-container">

			<?php if( have_posts() ) : ?>

				<div class="work-portals">

			      <?php while( have_posts() ) : ?>

			        <?php the_post(); ?>

					<?php $i = 1; ?>

					<?php if ($i == 0 || $i % 3 == 0) { ?>
						<div class="three-up-row">
					<?php }; ?>

						<div class="square-portal-container">

							<a href="<?php the_permalink(); ?>">
								<div class="square-portal-overlay"></div>

								<?php $small_squared = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'mobile-squared' ); ?>
								<?php $medium_squared = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tablet-squared' ); ?>
								<?php $large_squared = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'desktop-squared' ); ?>

								<picture>
									<!--[if IE 9]><video style="display: none;"><![endif]-->
									<source srcset="<?php echo $small_squared[0]; ?>" media="(max-width: 600px)">
									<source srcset="<?php echo $medium_squared[0]; ?>" media="(min-width: 601px)">
									<source srcset="<?php echo $large_squared[0]; ?>" media="(min-width: 801px)">
									<!--[if IE 9]></video><![endif]-->
									<img srcset="<?php echo $large_squared[0]; ?>">
								</picture>

								<div class="square-portal">
									<span class="rollover-top portal-text">View:</span>
									<span class="rollover-middle portal-text"><?php the_title(); ?></span>
									<span class="rollover-bottom portal-text"><?php the_field('subtitle'); ?></span>
								</div>
							</a>

						</div>

						<?php
					      $i++;
					      if ($i % 3 == 0){echo "</div>";}

						wp_reset_query();

						?>

				<?php endwhile; ?>

				</div>

			<?php endif; ?>

			<!-- <div class="work-portals">
				<?php echo do_shortcode('[ajax_load_more post_type="work" transition="fade" cache="true" posts_per_page="6" offset="6" pause="true" scroll="false" button_label="Load More"]'); ?>
			</div> -->

		</div>

	</div><!-- #primary -->

<?php get_footer(); ?>
