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

		<section class="page-top">
			<div class="page-top-content">
				<h1><?php the_field('page_lead_in'); ?></h1>
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

					<!-- Mobile version -->
					<?php if( have_rows('location_images') ) : ?>

						<div class="mobile-image-container">

					  		<?php while ( have_rows('location_images') ) : ?>

					    	<?php the_row(); ?>

							<?php if( get_sub_field('mobile_only') ) : ?>

								<div class="mobile-image">

									<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-squared'); ?>
									<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-squared'); ?>
									<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-squared'); ?>

									<picture>
										<!--[if IE 9]><video style="display: none;"><![endif]-->
										<source srcset="<?php echo $mobile[0]; ?>" media="(max-width: 400px)">
										<source srcset="<?php echo $tablet[0]; ?>" media="(max-width: 801px)">
										<source srcset="<?php echo $desktop[0]; ?>" media="(max-width: 1024px)">
										<!--[if IE 9]></video><![endif]-->
										<img srcset="<?php echo $desktop[0]; ?>">
									</picture>

									<?php if( get_sub_field('link_to_map') ) : ?>

										<div class="square-portal">
											<a target="_blank" href="<?php the_field('location_map'); ?>">
												<span class="location-title portal-text">View our <?php the_field('location_title') ?>:</span>
												<span class="location-city portal-text"><?php the_field('city_only'); ?></span>
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

								<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-squared'); ?>
								<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-squared'); ?>
								<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-squared'); ?>

								<picture>
									<!--[if IE 9]><video style="display: none;"><![endif]-->
									<source srcset="<?php echo $mobile[0]; ?>" media="(max-width: 400px)">
									<source srcset="<?php echo $tablet[0]; ?>" media="(max-width: 801px)">
									<source srcset="<?php echo $desktop[0]; ?>" media="(max-width: 1024px)">
									<!--[if IE 9]></video><![endif]-->
									<img srcset="<?php echo $desktop[0]; ?>">
								</picture>

								<?php if( get_sub_field('link_to_map') ) : ?>

									<div class="square-portal-overlay"></div>
									<div class="square-portal">
										<a target="_blank" href="<?php the_field('location_map'); ?>">
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

					<section name="<?php global $post; $slug = get_post( $post )->post_name; echo $slug; ?>-content" id="<?php global $post; $slug = get_post( $post )->post_name; echo $slug; ?>-content" class="page-content">

						<div class="entry-title">
							<h2><?php the_title(); ?></h2>
						</div>

						<ul class="entry-content">
							<li><?php the_field('location_address') ?></li>
							<li><a href="tel:<?php the_field('phone_number') ?>"><?php the_field('phone_number') ?></a></li>
							<li><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></li>
						</ul>

					</section>

				</article>

				<?php endwhile; ?>

			<?php endif; ?>

		<section class="contact-form-container">
			<div class="mailto-link">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 25 20" style="enable-background:new 0 0 25 20;" xml:space="preserve">
				<g>
					<path fill="#7E7D7E" d="M23,2.3c-0.3-0.3-0.8-0.5-1.2-0.5H3.3C2.8,1.7,2.3,1.9,2,2.3C1.7,2.6,1.5,3,1.5,3.5v13c0,0.5,0.2,0.9,0.5,1.2
						c0.3,0.3,0.8,0.5,1.2,0.5h18.5c0.5,0,0.9-0.2,1.2-0.5c0.3-0.3,0.5-0.8,0.5-1.2v-13C23.5,3,23.3,2.6,23,2.3z M22,15.6l-5.9-5.5
						L22,4.6V15.6z M3.3,3.3h18.5c0.1,0,0.1,0,0.2,0.1c0,0,0,0,0,0l-8.2,7.6c-0.3,0.2-0.6,0.4-1,0.4c-0.4,0-0.7-0.1-1-0.3L3.1,3.3
						c0,0,0,0,0,0C3.1,3.3,3.2,3.3,3.3,3.3z M3,15.6v-11l6.3,5.5L3,15.6z M3.3,16.8l6.8-6l1.1,0.9c0.5,0.4,1,0.6,1.6,0.6
						c0.6,0,1.2-0.2,1.7-0.6l0.9-0.9l6.4,5.9c0,0,0,0,0,0H3.3z"/>
				</g>
				</svg>
				<a href="mailto:info@pinnacle-exhibits.com">info@pinnacle-exhibits.com</a>
			</div>
		</section>

	</div><!-- #primary -->

<?php get_footer(); ?>
