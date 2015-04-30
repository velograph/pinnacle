<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

	<div id="primary" class="people-archive content-area">

		<section class="page-title">
			<h1><?php the_field('lead_in_title', 502); ?></h1>
		</section>

		<section class="work-archive-container">

			<?php

			    $args = array(
			        'page_id' => '502'
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

			      <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<?php

					$posts = get_field('project');

					if( $posts ): ?>

						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>

							<div class="featured-project">

								<div class="featured-content">
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<h5><?php the_field('subtitle'); ?></h5>

									<span class="dotted-separator"></span>

									<?php the_content( 502); ?>
								</div>

								<div class="featured-image">

									<?php $small_featured = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'mobile-work-featured' ); ?>
									<?php $medium_featured = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tablet-work-featured' ); ?>
									<?php $large_featured = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'desktop-work-featured' ); ?>
									<?php $retina_featured = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'retina-work-featured' ); ?>

									<picture>
										<!--[if IE 9]><video style="display: none;"><![endif]-->
										<source srcset="<?php echo $small_featured[0]; ?>" media="(max-width: 600px)">
										<source srcset="<?php echo $medium_featured[0]; ?>" media="(min-width: 601px)">
										<source srcset="<?php echo $large_featured[0]; ?>" media="(min-width: 801px)">
										<source srcset="<?php echo $retina_featured[0]; ?>" media="(min-width: 1420px)">
										<!--[if IE 9]></video><![endif]-->
										<img class="lazyload" srcset="<?php echo $large_featured[0]; ?>">
									</picture>

								</div>

							</div>

						<?php endforeach; ?>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

					<?php endif; ?>

					<section class="lead-in-container">

						<div class="lead-in-title">
							<h1><?php the_field('title', 502); ?></h1>
						</div>

						<div class="lead-in-content">
							<?php the_field('content', 502) ?>
						</div>

					</section>

			      <?php endwhile; ?>

			<?php endif;
			wp_reset_query();  ?>

			<?php

			    $args = array(
			        'post_type' => 'work'
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

				<div class="work-portals">

			      <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<div class="square-portal-container">

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
							<img class="lazyload" srcset="<?php echo $large_squared[0]; ?>">
						</picture>

						<div class="square-portal">
							<a href="<?php the_permalink(); ?>">
								<span class="rollover-top portal-text">Featured:</span>
								<span class="rollover-middle portal-text"><?php the_title(); ?></span>
								<span class="rollover-bottom portal-text"><?php the_field('subtitle'); ?></span>
							</a>
						</div>
					</div>

				<?php endwhile; ?>

				</div>

			<?php endif; ?>

		</section>

		<div class="work-portals">
			<?php echo do_shortcode('[ajax_load_more post_type="work" posts_per_page="6" offset="6" pause="true" scroll="false" button_label="Load More"]'); ?>
		</div>

	</div><!-- #primary -->

<?php get_footer(); ?>
