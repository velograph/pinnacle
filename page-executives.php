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

		<section class="page-title">
			<h1><?php the_field('page_title', 90); ?></h1>
		</section>

		<section class="people-container">

			<ul class="people-navigation">
				<li>
					<a href="/people">A-Z</a>
				</li>
				<li>
					Executive Team
				</li>
			</ul>


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

				<?php $i = 0;?>

				  <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<?php if ( get_field('executive') ) : ?>

					<?php if ($i == 0 || $i % 3 == 0) { ?>
			            <div class="people-row">
			          <?php }; ?>

					<article class="person">

						<?php the_post_thumbnail(); ?>

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

					<?php endif; ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</section>

	</div><!-- #primary -->

<?php get_footer(); ?>
