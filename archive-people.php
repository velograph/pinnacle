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

		<section class="page-top">

			<div class="page-top-content">

				<h1><?php the_field('page_title', 90); ?></h1>

				<ul class="people-navigation">
					<li>
						A-Z
					</li>
					<li>
						<a href="/people-executives">Executive Team</a>
					</li>
				</ul>

			</div>

		</section>

		<section class="people-container">

			<?php

				global $query_string;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		    	$args = array(
					'post_type' => 'people',
					'orderby' => 'title',
					'order' => 'ASC',
					'paged' => $paged,
				);
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

				<?php $i = 0;?>

				  <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<?php if ($i == 0 || $i % 3 == 0) { ?>
			            <div class="people-row">
			          <?php }; ?>

					<article class="person">

						<?php $mobile_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'mobile-squared'); ?>
						<?php $tablet_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'tablet-squared'); ?>
						<?php $desktop_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'desktop-squared'); ?>

						<picture class="home-featured-image">
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source
								srcset="<?php echo $mobile_squared[0]; ?>"
								media="(max-width: 500px)" />
							<source
								srcset="<?php echo $tablet_squared[0]; ?>"
								media="(max-width: 860px)" />
							<source
								srcset="<?php echo $desktop_squared[0]; ?>"
								media="(min-width: 861px)" />
							<!--[if IE 9]></video><![endif]-->
							<img srcset="<?php echo $desktop_squared[0]; ?>">
						</picture>

						<div class="square-portal-overlay"></div>

						<div class="person-details">
							<h2><?php the_title(); ?></h2>
							<?php the_field('location'); ?> /
							<?php the_field('position'); ?>
							<?php $terms = get_the_term_list( $post->ID, 'people_roles' );
							echo strip_tags($terms); ?>

						</div>

					</article>

					<?php
				      $i++;
				      if ($i % 3 == 0){echo "</div>";}

					wp_reset_query();

					?>

				<?php endwhile; ?>

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

		</section>

	</div><!-- #primary -->

<?php get_footer(); ?>
