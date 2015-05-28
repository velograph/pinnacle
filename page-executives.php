<?php
/**
 * Template Name: Executives
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

			</div>

		</section>

		<div class="page-sub-nav">

			<div class="subnav">

				<ul class="people-navigation">
					<li>
						<a href="/people">A-Z</a>
					</li>
					<li>
						Executive Team
					</li>
				</ul>

			</div>

		</div>

		<section class="people-container">

			<?php
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

				$args = array(
					'post_type' => 'people',
					'posts_per_page' => '-1',
					'order' => 'ASC',
					'orderby' => 'title'
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

				  <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<?php if ( get_field('executive') ) : ?>

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

					<?php wp_reset_query(); ?>

					<?php endif; ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</section>

	</div><!-- #primary -->

<?php get_footer(); ?>
