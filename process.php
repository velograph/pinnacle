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

	<div id="primary" class="process-page content-area">

		<section class="page-top">
			<div class="page-top-content">
				<h1><?php the_field('page_lead_in'); ?></h1>
			</div>
		</section>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if( have_rows('process') ) : ?>

			    <?php while ( have_rows('process') ) : ?>

			        <?php the_row(); ?>

			        <?php if( get_row_layout() == 'process_section' ) : ?>

						<?php $mobile_process_image = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-process-wide'); ?>
						<?php $tablet_process_image = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-process-wide'); ?>
						<?php $desktop_process_image = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-process-wide'); ?>
						<?php $retina_process_image = wp_get_attachment_image_src(get_sub_field('image'), 'retina-process-wide'); ?>

						<picture class="process-image">
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source
								srcset="<?php echo $mobile_process_image[0]; ?>"
								media="(max-width: 500px)" />
							<source
								srcset="<?php echo $tablet_process_image[0]; ?>"
								media="(max-width: 860px)" />
							<source
								srcset="<?php echo $desktop_process_image[0]; ?>"
								media="(min-width: 861px)" />
							<source
								srcset="<?php echo $retina_process_image[0]; ?>"
								media="(min-device-pixel-ratio: 2)">
							<!--[if IE 9]></video><![endif]-->
							<img srcset="<?php echo $retina_process_image[0]; ?>">
						</picture>

						<div class="page-content">
							<div class="entry-title">
								<h2><?php the_sub_field('section_title'); ?></h2>
							</div>
							<div class="entry-content">
								<?php the_sub_field('section_content'); ?>
							</div>
						</div>

			        <?php endif; ?>

			    <?php endwhile; ?>

			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
