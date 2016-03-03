<?php
/**
 * Template Name: Concierge
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

<script>

$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						if (target.length) {
								$('html,body').animate({ scrollTop: target.offset().top -150 }, 1500);
				return false;
				}
			}
			});
		});
</script>

	<div id="primary" class="archive-page content-area">

		<section class="page-top">
			<div class="page-top-content">
				<h1><?php the_title(); ?></h1>
			</div>
		</section>

		<?php

			$args = array(
				'post_type' => 'location'
			);
			$query = new WP_Query($args);

			if($query->have_posts()) : ?>

			<div class="page-sub-nav">

				<div class="subnav">

					<?php while($query->have_posts()) : ?>

						<?php $query->the_post(); ?>

						<a href="#<?php global $post; $slug = get_post( $post )->post_name; echo $slug; ?>"><?php the_field('city_only') ?></a>

					<?php endwhile; ?>

				</div>

			</div>

		<?php endif; ?>

		<?php

			$args = array(
				'post_type' => 'location',
			);
			$query = new WP_Query($args);

			if($query->have_posts()) : ?>

			<?php while($query->have_posts()) : ?>

				<?php $query->the_post(); ?>

				<article class="anchorLink" id="<?php global $post; $slug = get_post( $post )->post_name; echo $slug; ?>" name="<?php global $post; $slug = get_post( $post )->post_name; echo $slug; ?>" class="location">

					<section name="<?php global $post; $slug = get_post( $post )->post_name; echo $slug; ?>-content" id="<?php global $post; $slug = get_post( $post )->post_name; echo $slug; ?>-content">

						<?php $retina = wp_get_attachment_image_src(get_field('concierge_image'), 'retina-process-wide'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_field('concierge_image'), 'desktop-process-wide'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_field('concierge_image'), 'tablet-process-wide'); ?>
						<?php $mobile = wp_get_attachment_image_src(get_field('concierge_image'), 'mobile-process-wide'); ?>

						<picture>
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source
								srcset="<?php echo $mobile[0]; ?>"
								media="(max-width: 500px)" />
							<source
								srcset="<?php echo $tablet[0]; ?>"
								media="(max-width: 860px)" />
							<source
								srcset="<?php echo $desktop[0]; ?>"
								media="(max-width: 1180px)" />
							<source
								srcset="<?php echo $retina[0]; ?>"
								media="(min-width: 1181px)" />
							<!--[if IE 9]></video><![endif]-->
							<img srcset="<?php echo $image[0]; ?>">
						</picture>

						<div class="entry-content">
							<div class="entry-title">
								<h2><?php the_title(); ?></h2>
							</div>

							<div class="concierge-listings">

								<?php if( have_rows('concierge') ) : ?>

								    <?php while ( have_rows('concierge') ) : ?>

								        <?php the_row(); ?>

								        <?php if( get_row_layout() == 'listings' ) : ?>

											<!-- Hotel Repeater -->
											<?php if( have_rows('hotels') ) : ?>

												<div class="concierge_listing">
													<h5>Hotels</h5>
												    <?php while ( have_rows('hotels') ) : ?>

														<div class="listing">
												        	<?php the_row(); ?>

															<a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('name'); ?></a>
														</div>

												    <?php endwhile; ?>
												</div>

											<?php endif; ?>
											<!-- END Hotel Repeater -->

											<!-- Coffee Repeater -->
											<?php if( have_rows('coffee') ) : ?>

												<div class="concierge_listing">
													<h5>Coffee</h5>
												    <?php while ( have_rows('coffee') ) : ?>

														<div class="listing">
													        <?php the_row(); ?>

															<a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('name'); ?></a>
														</div>

												    <?php endwhile; ?>
												</div>

											<?php endif; ?>
											<!-- END Coffee Repeater -->

											<!-- Things to Do Repeater -->
											<?php if( have_rows('things_to_do') ) : ?>

												<div class="concierge_listing">
													<h5>Things to Do</h5>
												    <?php while ( have_rows('things_to_do') ) : ?>

														<div class="listing">
													        <?php the_row(); ?>

															<a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('name'); ?></a>
														</div>

												    <?php endwhile; ?>
												</div>

											<?php endif; ?>
											<!-- END Things to Do Repeater -->

											<!-- Lunch Repeater -->
											<?php if( have_rows('lunch') ) : ?>

												<div class="concierge_listing">
													<h5>Lunch</h5>
												    <?php while ( have_rows('lunch') ) : ?>

														<div class="listing">
													        <?php the_row(); ?>

															<a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('name'); ?></a>
														</div>

												    <?php endwhile; ?>
												</div>

											<?php endif; ?>
											<!-- END Lunch Repeater -->

											<!-- Dinner Repeater -->
											<?php if( have_rows('dinner') ) : ?>

												<div class="concierge_listing">
													<h5>Dinner</h5>
												    <?php while ( have_rows('dinner') ) : ?>

														<div class="listing">
													        <?php the_row(); ?>

															<a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('name'); ?></a>
														</div>

												    <?php endwhile; ?>
												</div>

											<?php endif; ?>
											<!-- END Dinner Repeater -->

											<!-- Transportation Repeater -->
											<?php if( have_rows('transportation') ) : ?>

												<div class="concierge_listing">
													<h5>Transportation</h5>
												    <?php while ( have_rows('transportation') ) : ?>

														<div class="listing">
													        <?php the_row(); ?>

															<a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('name'); ?></a>
														</div>

												    <?php endwhile; ?>
												</div>

											<?php endif; ?>
											<!-- END Transportation Repeater -->

								        <?php endif; ?>

								    <?php endwhile; ?>

								<?php endif; ?>

							<div>

						<div>

					</section>

				</article>

				<?php endwhile; ?>

			<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
