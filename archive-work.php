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
				<h1><?php the_field('page_lead_in', 502); ?></h1>
				<div class="page-top-work-content">
					<?php the_field('content', 502) ?>
				</div>
			</div>
		</section>


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

							<div class="featured-image">

								<?php $mobile_key_image = wp_get_attachment_image_src(get_field('featured_project_key_image'), 'mobile-process-wide'); ?>
								<?php $tablet_key_image = wp_get_attachment_image_src(get_field('featured_project_key_image'), 'tablet-process-wide'); ?>
								<?php $desktop_key_image = wp_get_attachment_image_src(get_field('featured_project_key_image'), 'desktop-process-wide'); ?>
								<?php $retina_key_image = wp_get_attachment_image_src(get_field('featured_project_key_image'), 'retina-process-wide'); ?>

								<a href="<?php the_permalink(); ?>">
									<picture>
										<!--[if IE 9]><video style="display: none;"><![endif]-->
										<source srcset="<?php echo $mobile_key_image[0]; ?>" media="(max-width: 400px)">
										<source srcset="<?php echo $tablet_key_image[0]; ?>" media="(max-width: 801px)">
										<source srcset="<?php echo $desktop_key_image[0]; ?>" media="(max-width: 1024px)">
										<source srcset="<?php echo $retina_key_image[0]; ?>" media="(min-device-pixel-ratio: 2)">
										<!--[if IE 9]></video><![endif]-->
										<img srcset="<?php echo $desktop_key_image[0]; ?>">
									</picture>
								</a>

							</div>

							<div class="featured-content">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<h5><?php the_field('subtitle'); ?></h5>

								<span class="dotted-separator"></span>

								<?php the_content( 502); ?>
							</div>

						</div>

					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

				<?php endif; ?>

				<section class="page-content">

					<div class="entry-title">
						<h2><?php the_field('title', 502); ?></h2>
					</div>

					<div class="entry-content">
						<?php the_field('content', 502) ?>
					</div>

				</section>

		      <?php endwhile; ?>

		<?php endif;
		wp_reset_query();  ?>

		<div class="three-up-container">

			<?php

				global $query_string;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			    $args = array(
			        'post_type' => 'work',
					'paged' => $paged,
					// 'posts_per_page' => 6,
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

				<div class="work-portals">

			      <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

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

				<div class="pagination">
					<?php
						$big = 999999999; // need an unlikely integer

						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_next' => 0,
							'show_all'=> 1,
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						) );
					?>
				</div>

			<?php endif; ?>

		</div>

	</div><!-- #primary -->

<?php get_footer(); ?>
