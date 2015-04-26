<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

	<div id="primary" class="archive-page content-area">

		<section class="page-title">
			<h1><?php the_field('page_title', 90); ?></h1>
		</section>

		<?php if ( have_posts() ) : ?>

			<section class="people-container">

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="person">

						<?php the_post_thumbnail(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_field('location'); ?> /
						<?php the_field('position'); ?>

					</article>

				<?php endwhile; ?>

				<?php basis_paging_nav(); ?>

			</section>

		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
