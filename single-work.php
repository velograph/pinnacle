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

						<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-hero'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-hero'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-hero'); ?>
						<?php $retina = wp_get_attachment_image_src(get_sub_field('image'), 'retina-hero'); ?>

						<picture class="work-section-image">
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source
								data-srcset="<?php echo $mobile[0]; ?>"
								media="(max-width: 500px)" />
							<source
								data-srcset="<?php echo $tablet[0]; ?>"
								media="(max-width: 860px)" />
							<source
								data-srcset="<?php echo $desktop[0]; ?>"
								media="(max-width: 1024px)" />
							<source
								data-srcset="<?php echo $retina[0]; ?>"
								media="(min-width: 1400px)" />
							<!--[if IE 9]></video><![endif]-->
							<img
								src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
								class="lazyload"
								alt="Pinnacle Exhibits" />
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

			<?php

			$i = 0;

			if( have_rows('project_details') ): ?>

				<section class="project-details-container">

					<?php while( have_rows('project_details') ): the_row(); $i++; ?>

						<?php if( $i == 1 ): ?>
							<div class="detail-column">
						<?php endif; ?>

							<div class="project-detail">
								<h6><?php the_sub_field('title'); ?></h6>
								<h5><?php the_sub_field('answer'); ?></h5>
							</div>

						<?php if( $i == 3 ): $i = 0; ?>
							</div>
						<?php endif; ?>

				  <?php endwhile; ?>

			</section>

			  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
