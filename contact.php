<?php
/**
 * Template Name: Contact
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

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="page-title">
				<h1><?php the_field('lead_in_title'); ?></h1>
			</section>

		<?php endwhile; // end of the loop. ?>

		<?php

			$args = array(
				'post_type' => 'location'
			);
			$query = new WP_Query($args);

			if($query->have_posts()) : ?>

			<div class="location-sub-nav">

				<div class="subnav">

					<?php while($query->have_posts()) : ?>

						<?php $query->the_post(); ?>

						<a href="#<?php the_field('city_only'); ?>"><?php the_field('short_title') ?></a>

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

				<article id="<?php the_field('city_only'); ?>" class="location">

					<!-- Mobile version -->
					<?php if( have_rows('location_images') ) : ?>

						<div class="mobile-image-container">

					  		<?php while ( have_rows('location_images') ) : ?>

					    	<?php the_row(); ?>

							<?php if( get_sub_field('mobile_only') ) : ?>

								<div class="mobile-image">

									<?php $mobile_squared = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-squared'); ?>
									<?php $tablet_squared = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-squared'); ?>
									<?php $desktop_squared = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-squared'); ?>

									<picture class="home-featured-image">
										<!--[if IE 9]><video style="display: none"><![endif]-->
										<source
											data-srcset="<?php echo $mobile_squared[0]; ?>"
											media="(max-width: 500px)" />
										<source
											data-srcset="<?php echo $tablet_squared[0]; ?>"
											media="(max-width: 860px)" />
										<source
											data-srcset="<?php echo $desktop_squared[0]; ?>"
											media="(min-width: 861px)" />
										<!--[if IE 9]></video><![endif]-->
										<img
											src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
											class="lazyload"
											alt="Pinnacle Exhibits" />
									</picture>

									<?php if( get_sub_field('link_to_map') ) : ?>

										<div class="square-portal-overlay"></div>
										<div class="square-portal">
											<a href="">
												<span class="rollover-top portal-text">View Map:</span>
												<span class="rollover-middle portal-text"><?php the_field('city_only'); ?></span>
												<span class="rollover-bottom portal-text"><?php the_field('location_title') ?></span>
											</a>
										</div>

									<?php endif; ?>

								</div>

							<?php endif; ?>

					  		<?php endwhile; ?>

						</div>

					<?php endif; ?>

					<!-- Desktop version -->
					<?php if( have_rows('location_images') ) : ?>

						<div class="desktop-image-container">

					  		<?php while ( have_rows('location_images') ) : ?>

					    	<?php the_row(); ?>

							<div class="desktop-image">

								<?php $mobile_squared = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-squared'); ?>
								<?php $tablet_squared = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-squared'); ?>
								<?php $desktop_squared = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-squared'); ?>

								<picture>
									<!--[if IE 9]><video style="display: none"><![endif]-->
									<source
										data-srcset="<?php echo $mobile_squared[0]; ?>"
										media="(max-width: 500px)" />
									<source
										data-srcset="<?php echo $tablet_squared[0]; ?>"
										media="(max-width: 860px)" />
									<source
										data-srcset="<?php echo $desktop_squared[0]; ?>"
										media="(min-width: 861px)" />
									<!--[if IE 9]></video><![endif]-->
									<img
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
										class="lazyload"
										alt="Pinnacle Exhibits" />
								</picture>

								<?php if( get_sub_field('link_to_map') ) : ?>

									<div class="square-portal-overlay"></div>
									<div class="square-portal">
										<a href="">
											<span class="rollover-top portal-text">View Map:</span>
											<span class="rollover-middle portal-text"><?php the_field('city_only'); ?></span>
											<span class="rollover-bottom portal-text"><?php the_field('location_title') ?></span>
										</a>
									</div>

								<?php endif; ?>

							</div>

					  		<?php endwhile; ?>

						</div>

					<?php endif; ?>

					<section class="location-meta">

						<div class="location-title">
							<h1><?php the_title(); ?></h1>
						</div>

						<ul class="location-info">
							<li><?php the_field('location_title') ?></li>
							<li><?php the_field('location_address') ?></li>
							<li><a href="tel:<?php the_field('phone_number') ?>"><?php the_field('phone_number') ?></a></li>
							<li><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></li>
						</ul>

					</section>

				<?php endwhile; ?>

			<?php endif; ?>

		</article>

	</div><!-- #primary -->

<?php get_footer(); ?>
