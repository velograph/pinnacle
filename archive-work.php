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
									<?php $mobile_featured = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'mobile-work-featured'); ?>
									<?php $tablet_featured = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'tablet-work-featured'); ?>
									<?php $desktop_featured = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'desktop-work-featured'); ?>
									<?php $retina_featured = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'retina-work-featured'); ?>

									<picture class="home-featured-image">
										<!--[if IE 9]><video style="display: none"><![endif]-->
										<source
											data-srcset="<?php echo $mobile_featured[0]; ?>"
											media="(max-width: 500px)" />
										<source
											data-srcset="<?php echo $tablet_featured[0]; ?>"
											media="(max-width: 860px)" />
										<source
											data-srcset="<?php echo $desktop_featured[0]; ?>"
											media="(max-width: 1180px)" />
										<source
											data-srcset="<?php echo $retina_featured[0]; ?>"
											media="(min-width: 1181px)" />
										<!--[if IE 9]></video><![endif]-->
										<img
											src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
											class="lazyload"
											alt="Pinnacle Exhibits" />
									</picture>

								</div>

							</div>

						<?php endforeach; ?>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

					<?php endif; ?>

			      <?php endwhile; ?>

			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

		</section>

	</div><!-- #primary -->

<?php get_footer(); ?>
