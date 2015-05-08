<?php
/**
 * Template Name: Process
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

	<section class="page-top">
		<div class="page-top-content">
			<h1><?php the_field('lead_in_title'); ?></h1>
		</div>
	</section>

	<div id="primary" class="process-page content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if( have_rows('process_sections') ) : ?>

			    <?php while ( have_rows('process_sections') ) : ?>

			        <?php the_row(); ?>

			        <?php if( get_row_layout() == 'four_up_wide_top_right' ) : ?>

						<div class="four_up_wide_top_right process-section-container">

							<div class="section-image-row">

									<?php $mobile_top_left_square = wp_get_attachment_image_src(get_sub_field('top_left_square'), 'mobile-squared'); ?>
									<?php $tablet_top_left_square = wp_get_attachment_image_src(get_sub_field('top_left_square'), 'tablet-squared'); ?>
									<?php $desktop_top_left_square = wp_get_attachment_image_src(get_sub_field('top_left_square'), 'desktop-squared'); ?>

									<div class="square">
										<picture class="process-image">
											<!--[if IE 9]><video style="display: none"><![endif]-->
											<source
												srcset="<?php echo $mobile_top_left_square[0]; ?>"
												media="(max-width: 500px)" />
											<source
												srcset="<?php echo $tablet_top_left_square[0]; ?>"
												media="(max-width: 860px)" />
											<source
												srcset="<?php echo $desktop_top_left_square[0]; ?>"
												media="(min-width: 861px)" />
											<!--[if IE 9]></video><![endif]-->
											<img srcset="<?php echo $desktop_top_left_square[0]; ?>">
										</picture>
									</div>

									<?php $mobile_top_right_rectangle = wp_get_attachment_image_src(get_sub_field('top_right_rectangle'), 'mobile-process-wide'); ?>
									<?php $tablet_top_right_rectangle = wp_get_attachment_image_src(get_sub_field('top_right_rectangle'), 'tablet-process-wide'); ?>
									<?php $desktop_top_right_rectangle = wp_get_attachment_image_src(get_sub_field('top_right_rectangle'), 'desktop-process-wide'); ?>

									<picture class="rectangle process-image">
										<!--[if IE 9]><video style="display: none"><![endif]-->
										<source
											srcset="<?php echo $mobile_top_right_rectangle[0]; ?>"
											media="(max-width: 500px)" />
										<source
											srcset="<?php echo $tablet_top_right_rectangle[0]; ?>"
											media="(max-width: 860px)" />
										<source
											srcset="<?php echo $desktop_top_right_rectangle[0]; ?>"
											media="(min-width: 861px)" />
										<!--[if IE 9]></video><![endif]-->
										<img srcset="<?php echo $desktop_top_right_rectangle[0]; ?>">

									</picture>


							</div>

							<div class="section-image-row">

								<div class="rectangle bottom-left-rectangle process-image-container">

									<?php $mobile_bottom_left_rectangle = wp_get_attachment_image_src(get_sub_field('bottom_left_rectangle'), 'mobile-process-wide'); ?>
									<?php $tablet_bottom_left_rectangle = wp_get_attachment_image_src(get_sub_field('bottom_left_rectangle'), 'tablet-process-wide'); ?>
									<?php $desktop_bottom_left_rectangle = wp_get_attachment_image_src(get_sub_field('bottom_left_rectangle'), 'desktop-process-wide'); ?>

									<picture class="process-image">
										<!--[if IE 9]><video style="display: none"><![endif]-->
										<source
											srcset="<?php echo $mobile_bottom_left_rectangle[0]; ?>"
											media="(max-width: 500px)" />
										<source
											srcset="<?php echo $tablet_bottom_left_rectangle[0]; ?>"
											media="(max-width: 860px)" />
										<source
											srcset="<?php echo $desktop_bottom_left_rectangle[0]; ?>"
											media="(min-width: 861px)" />
										<!--[if IE 9]></video><![endif]-->
										<img srcset="<?php echo $desktop_bottom_left_rectangle[0]; ?>">
									</picture>

								</div>

								<div class="square">
									<div class="bottom-right-square process-image-container process-image">

										<?php $mobile_bottom_right_square = wp_get_attachment_image_src(get_sub_field('bottom_right_square'), 'mobile-squared'); ?>
										<?php $tablet_bottom_right_square = wp_get_attachment_image_src(get_sub_field('bottom_right_square'), 'tablet-squared'); ?>
										<?php $desktop_bottom_right_square = wp_get_attachment_image_src(get_sub_field('bottom_right_square'), 'desktop-squared'); ?>

										<picture class="process-image">
											<!--[if IE 9]><video style="display: none"><![endif]-->
											<source
												srcset="<?php echo $mobile_bottom_right_square[0]; ?>"
												media="(max-width: 500px)" />
											<source
												srcset="<?php echo $tablet_bottom_right_square[0]; ?>"
												media="(max-width: 860px)" />
											<source
												srcset="<?php echo $desktop_bottom_right_square[0]; ?>"
												media="(min-width: 861px)" />
											<!--[if IE 9]></video><![endif]-->
											<img srcset="<?php echo $desktop_bottom_right_square[0]; ?>">
										</picture>

									</div>
								</div>

							</div>

							<div class="section-content">
								<div class="entry-title">
									<h1><?php the_sub_field('section_title'); ?></h1>
								</div>
								<div class="entry-content">
									<?php the_sub_field('section_content'); ?>
								</div>
							</div>

						</div>

			        <?php endif; ?>

					<?php if( get_row_layout() == 'four_up_wide_top_left' ) : ?>

						<div class="four_up_wide_top_left process-section-container">

							<div class="section-image-row">

								<div class="rectangle top-left-rectangle process-image-container">

									<?php $mobile_top_left_rectangle = wp_get_attachment_image_src(get_sub_field('top_left_rectangle'), 'mobile-process-wide'); ?>
									<?php $tablet_top_left_rectangle = wp_get_attachment_image_src(get_sub_field('top_left_rectangle'), 'tablet-process-wide'); ?>
									<?php $desktop_top_left_rectangle = wp_get_attachment_image_src(get_sub_field('top_left_rectangle'), 'desktop-process-wide'); ?>

									<picture class="process-image">
										<!--[if IE 9]><video style="display: none"><![endif]-->
										<source
											srcset="<?php echo $mobile_top_left_rectangle[0]; ?>"
											media="(max-width: 500px)" />
										<source
											srcset="<?php echo $tablet_top_left_rectangle[0]; ?>"
											media="(max-width: 860px)" />
										<source
											srcset="<?php echo $desktop_top_left_rectangle[0]; ?>"
											media="(min-width: 861px)" />
										<!--[if IE 9]></video><![endif]-->
										<img srcset="<?php echo $desktop_top_left_rectangle[0]; ?>">
									</picture>

								</div>

								<div class="square top-right-square process-image-container">

									<?php $mobile_top_right_square = wp_get_attachment_image_src(get_sub_field('top_right_square'), 'mobile-squared'); ?>
									<?php $tablet_top_right_square = wp_get_attachment_image_src(get_sub_field('top_right_square'), 'tablet-squared'); ?>
									<?php $desktop_top_right_square = wp_get_attachment_image_src(get_sub_field('top_right_square'), 'desktop-squared'); ?>

									<picture class="process-image">
										<!--[if IE 9]><video style="display: none"><![endif]-->
										<source
											srcset="<?php echo $mobile_top_right_square[0]; ?>"
											media="(max-width: 500px)" />
										<source
											srcset="<?php echo $tablet_top_right_square[0]; ?>"
											media="(max-width: 860px)" />
										<source
											srcset="<?php echo $desktop_top_right_square[0]; ?>"
											media="(min-width: 861px)" />
										<!--[if IE 9]></video><![endif]-->
										<img srcset="<?php echo $desktop_top_right_square[0]; ?>">
									</picture>

								</div>

							</div>

							<div class="section-image-row">

								<div class="square bottom-left-square process-image-container">

									<?php $mobile_bottom_left_square = wp_get_attachment_image_src(get_sub_field('bottom_left_square'), 'mobile-squared'); ?>
									<?php $tablet_bottom_left_square = wp_get_attachment_image_src(get_sub_field('bottom_left_square'), 'tablet-squared'); ?>
									<?php $desktop_bottom_left_square = wp_get_attachment_image_src(get_sub_field('bottom_left_square'), 'desktop-squared'); ?>

									<picture class="process-image">
										<!--[if IE 9]><video style="display: none"><![endif]-->
										<source
											srcset="<?php echo $mobile_bottom_left_square[0]; ?>"
											media="(max-width: 500px)" />
										<source
											srcset="<?php echo $tablet_bottom_left_square[0]; ?>"
											media="(max-width: 860px)" />
										<source
											srcset="<?php echo $desktop_bottom_left_square[0]; ?>"
											media="(min-width: 861px)" />
										<!--[if IE 9]></video><![endif]-->
										<img srcset="<?php echo $desktop_bottom_left_square[0]; ?>">
									</picture>

								</div>

								<div class="rectangle bottom-right-rectangle process-image-container">

									<?php $mobile_bottom_right_rectangle = wp_get_attachment_image_src(get_sub_field('bottom_right_rectangle'), 'mobile-process-wide'); ?>
									<?php $tablet_bottom_right_rectangle = wp_get_attachment_image_src(get_sub_field('bottom_right_rectangle'), 'tablet-process-wide'); ?>
									<?php $desktop_bottom_right_rectangle = wp_get_attachment_image_src(get_sub_field('bottom_right_rectangle'), 'desktop-process-wide'); ?>

									<picture class="process-image">
										<!--[if IE 9]><video style="display: none"><![endif]-->
										<source
											srcset="<?php echo $mobile_bottom_right_rectangle[0]; ?>"
											media="(max-width: 500px)" />
										<source
											srcset="<?php echo $tablet_bottom_right_rectangle[0]; ?>"
											media="(max-width: 860px)" />
										<source
											srcset="<?php echo $desktop_bottom_right_rectangle[0]; ?>"
											media="(min-width: 861px)" />
										<!--[if IE 9]></video><![endif]-->
										<img srcset="<?php echo $desktop_bottom_right_rectangle[0]; ?>">
									</picture>

								</div>

							</div>

							<div class="section-content">
								<div class="entry-title">
									<h1><?php the_sub_field('section_title'); ?></h1>
								</div>
								<div class="entry-content">
									<?php the_sub_field('section_content'); ?>
								</div>
							</div>

						</div>

			        <?php endif; ?>

					<?php if( get_row_layout() == 'three_up_large_square_left' ) : ?>

						<div class="three-squares-container process-section-container">

							<div class="three-squares">

								<div class="square left-large-square process-image-container">

									<?php $mobile_large_square = wp_get_attachment_image_src(get_sub_field('large_left_square'), 'mobile-squared'); ?>
									<?php $tablet_large_square = wp_get_attachment_image_src(get_sub_field('large_left_square'), 'tablet-squared'); ?>
									<?php $desktop_large_square = wp_get_attachment_image_src(get_sub_field('large_left_square'), 'desktop-squared'); ?>

									<picture class="process-image">
										<!--[if IE 9]><video style="display: none"><![endif]-->
										<source
											srcset="<?php echo $mobile_large_square[0]; ?>"
											media="(max-width: 500px)" />
										<source
											srcset="<?php echo $tablet_large_square[0]; ?>"
											media="(max-width: 860px)" />
										<source
											srcset="<?php echo $desktop_large_square[0]; ?>"
											media="(min-width: 861px)" />
										<!--[if IE 9]></video><![endif]-->
										<img srcset="<?php echo $desktop_large_square[0]; ?>">
									</picture>

								</div>

								<div class="stacked-squares">

									<!-- <div class="top-right-square process-image-container"> -->

										<?php $mobile_top_right_square = wp_get_attachment_image_src(get_sub_field('top_right_square'), 'mobile-squared'); ?>
										<?php $tablet_top_right_square = wp_get_attachment_image_src(get_sub_field('top_right_square'), 'tablet-squared'); ?>
										<?php $desktop_top_right_square = wp_get_attachment_image_src(get_sub_field('top_right_square'), 'desktop-squared'); ?>

										<picture class="process-image">
											<!--[if IE 9]><video style="display: none"><![endif]-->
											<source
												srcset="<?php echo $mobile_top_right_square[0]; ?>"
												media="(max-width: 500px)" />
											<source
												srcset="<?php echo $tablet_top_right_square[0]; ?>"
												media="(max-width: 860px)" />
											<source
												srcset="<?php echo $desktop_top_right_square[0]; ?>"
												media="(min-width: 861px)" />
											<!--[if IE 9]></video><![endif]-->
											<img srcset="<?php echo $desktop_top_right_square[0]; ?>">
										</picture>

									<!-- </div>

									<div class="bottom-right-square process-image-container"> -->

										<?php $desktop_bottom_right_square = wp_get_attachment_image_src(get_sub_field('bottom_right_square'), 'mobile-process-wide'); ?>
										<?php $tablet_bottom_right_square = wp_get_attachment_image_src(get_sub_field('bottom_right_square'), 'tablet-process-wide'); ?>
										<?php $desktop_bottom_right_square = wp_get_attachment_image_src(get_sub_field('bottom_right_square'), 'desktop-process-wide'); ?>

										<picture class="process-image">
											<!--[if IE 9]><video style="display: none"><![endif]-->
											<source
												srcset="<?php echo $desktop_bottom_right_square[0]; ?>"
												media="(max-width: 500px)" />
											<source
												srcset="<?php echo $tablet_bottom_right_square[0]; ?>"
												media="(max-width: 860px)" />
											<source
												srcset="<?php echo $desktop_bottom_right_square[0]; ?>"
												media="(min-width: 861px)" />
											<!--[if IE 9]></video><![endif]-->
											<img srcset="<?php echo $desktop_bottom_right_square[0]; ?>">
										</picture>

									<!-- </div> -->

								</div>

							</div>

							<div class="section-content">
								<div class="entry-title">
									<h1><?php the_sub_field('section_title'); ?></h1>
								</div>
								<div class="entry-content">
									<?php the_sub_field('section_content'); ?>
								</div>
							</div>

						</div>

			        <?php endif; ?>

			    <?php endwhile; ?>

			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
