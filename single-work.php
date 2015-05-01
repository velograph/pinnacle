<?php
/**
 * The template for displaying all single posts.
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

	<div id="primary" class="work-study content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="leading-container">

				<div class="entry-content">
					<h1><?php the_title(); ?></h1>

					<h3><?php the_field('subtitle'); ?></h3>

					<?php the_content(); ?>
				</div>

			</div>

			<?php if( have_rows('work_study_section') ) : ?>

			    <?php while ( have_rows('work_study_section') ) : ?>

			        <?php the_row(); ?>

			        <?php if( get_row_layout() == 'section' ) : ?>

						<?php $mobile_work_study = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-work-featured'); ?>
						<?php $tablet_work_study = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-work-featured'); ?>
						<?php $desktop_work_study = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-work-featured'); ?>
						<?php $retina_work_study = wp_get_attachment_image_src(get_sub_field('image'), 'retina-work-featured'); ?>

						<picture class="work-section-image">
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source srcset="<?php echo $mobile_work_study[0]; ?>" media="(max-width: 600px)">
							<source srcset="<?php echo $tablet_work_study[0]; ?>" media="(min-width: 601px)">
							<source srcset="<?php echo $desktop_work_study[0]; ?>" media="(max-width: 1024px)">
							<source srcset="<?php echo $retina_work_study[0]; ?>" media="(min-width: 1025px)">
							<!--[if IE 9]></video><![endif]-->
							<img srcset="<?php echo $desktop_work_study[0]; ?>">
						</picture>

						<?php if( get_sub_field( 'title_and_description_toggle' ) ) : ?>

							<div class="work-study-container">

								<div class="work-study-content">
									<h4><?php the_sub_field('title'); ?></h4>
									<p><?php the_sub_field('description'); ?></p>
								</div>

							</div>

						<?php endif; ?>

			        <?php endif; ?>

			    <?php endwhile; ?>

			<?php endif; ?>

			<section class="project-details-container">

				<div class="detail-column">
					<div class="project-detail">
						<h6>Client</h6>
						<h5><?php the_field('client'); ?></h5>
					</div>
					<div class="project-detail">
						<h6>Project</h6>
						<h5><?php the_field('project'); ?></h5>
					</div>
					<div class="project-detail">
						<h6>Date</h6>
						<h5><?php the_field('date'); ?></h5>
					</div>
				</div>

				<div class="detail-column">
					<div class="project-detail">
						<h6>Industry</h6>
						<h5><?php the_field('industry'); ?></h5>
					</div>
					<div class="project-detail">
						<h6>Credits</h6>
						<h5><?php the_field('credits'); ?></h5>
					</div>
					<div class="project-detail">
						<h6>Share</h6>
						<h5></h5>
					</div>
				</div>

		</section>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
