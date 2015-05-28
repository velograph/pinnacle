<?php
/**
 * The template for displaying all single posts.
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

	<div id="primary" class="work-study content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="page-top">
				<div class="page-top-content">
					<h1><?php the_title(); ?></h1>

					<h3><?php the_field('subtitle'); ?></h3>

					<?php the_content(); ?>
				</div>
			</section>

			<?php if( have_rows('work_study_section') ) : ?>

			    <?php while ( have_rows('work_study_section') ) : ?>

			        <?php the_row(); ?>

			        <?php if( get_row_layout() == 'section' ) : ?>

						<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-work-featured'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-work-featured'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-work-featured'); ?>
						<?php $retina = wp_get_attachment_image_src(get_sub_field('image'), 'retina-work-featured'); ?>

						<div class="work-section">

							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
								<source srcset="<?php echo $mobile[0]; ?>" media="(max-width: 400px)">
								<source srcset="<?php echo $tablet[0]; ?>" media="(max-width: 801px)">
								<source srcset="<?php echo $desktop[0]; ?>" media="(max-width: 1024px)">
								<source srcset="<?php echo $retina[0]; ?>" media="(min-device-pixel-ratio: 2)">
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $desktop[0]; ?>">
							</picture>

							<?php if( get_sub_field( 'title_and_description_toggle' ) ) : ?>

								<div class="page-content">

									<div class="entry-title">
										<h4><?php the_sub_field('title'); ?></h4>
											<div class="entry-content">
											<p><?php the_sub_field('description'); ?></p>
										</div>
									</div>

								</div>

							<?php endif; ?>

						</div>

			        <?php endif; ?>

					<?php if( get_row_layout() == 'section_no_text' ) : ?>

						<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-work-featured'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-work-featured'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-work-featured'); ?>
						<?php $retina = wp_get_attachment_image_src(get_sub_field('image'), 'retina-work-featured'); ?>

						<div class="work-section-no-text">

							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
								<source srcset="<?php echo $mobile[0]; ?>" media="(max-width: 400px)">
								<source srcset="<?php echo $tablet[0]; ?>" media="(max-width: 801px)">
								<source srcset="<?php echo $desktop[0]; ?>" media="(max-width: 1024px)">
								<source srcset="<?php echo $retina[0]; ?>" media="(min-device-pixel-ratio: 2)">
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $desktop[0]; ?>">
							</picture>

						</div>

			        <?php endif; ?>

			    <?php endwhile; ?>

			<?php endif; ?>

			<section class="page-content project-details-container">

				<div class="detail-column">
					<div class="project-detail">
						<?php if( get_field('client') ) : ?>
							<h6>Client:</h6>
							<h5><?php the_field('client'); ?></h5>
						<?php endif; ?>
					</div>
					<div class="project-detail">
						<?php if( get_field('project') ) : ?>
							<h6>Project:</h6>
							<h5><?php the_field('project'); ?></h5>
						<?php endif; ?>
					</div>
					<div class="project-detail">
						<?php if( get_field('date') ) : ?>
							<h6>Date:</h6>
							<h5><?php the_field('date'); ?></h5>
						<?php endif; ?>
					</div>
				</div>

				<div class="detail-column">
					<div class="project-detail industry-list">
						<h6>Tags:</h6>
						<!-- Strip link wrappers -->
						<h5><?php
							$terms_as_text = get_the_term_list( $post->ID, 'work-categories', '', ', ', '' ) ;
							echo strip_tags($terms_as_text);
						?></h5>
						<!-- Use this when we turn the taxonomies into links
							<?php the_terms( $post->ID, 'work-categories' ); ?>
						-->
					</div>
					<div class="project-detail">
						<?php if( get_field('credits') ) : ?>
							<h6>Credits:</h6>
							<h5><?php the_field('credits'); ?></h5>
						<?php endif; ?>
					</div>
					<div class="project-detail">
						<h6>Share:</h6>
						<?php echo sharing_display(); ?>
					</div>
				</div>

				<?php if( get_field('awards') ) : ?>
					<div class="detail-column">

						<div class="project-detail">
							<h6>Award:</h6>

							<?php if( get_field('award_logo') ) : ?>
								<?php $mobile_award = wp_get_attachment_image_src(get_field('award_logo'), 'thumbnail'); ?>
								<?php $tablet_award = wp_get_attachment_image_src(get_field('award_logo'), 'thumbnail'); ?>
								<?php $desktop_award = wp_get_attachment_image_src(get_field('award_logo'), 'thumbnail'); ?>
								<?php $retina_award = wp_get_attachment_image_src(get_field('award_logo'), 'thumbnail'); ?>

								<picture>
									<!--[if IE 9]><video style="display: none;"><![endif]-->
									<source srcset="<?php echo $mobile_award[0]; ?>" media="(max-width: 400px)">
									<source srcset="<?php echo $tablet_award[0]; ?>" media="(max-width: 801px)">
									<source srcset="<?php echo $desktop_award[0]; ?>" media="(max-width: 1024px)">
									<source srcset="<?php echo $retina_award[0]; ?>" media="(min-device-pixel-ratio: 2)">
									<!--[if IE 9]></video><![endif]-->
									<img srcset="<?php echo $desktop_award[0]; ?>">
								</picture>
							<?php endif; ?>

							<h5><?php the_field('award_title'); ?></h5>
						</div>

					</div>
				<?php endif; ?>

		</section>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
