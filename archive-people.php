<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<h1><?php the_field('page_title', 90); ?></h1>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_post_thumbnail(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_field('location'); ?> /
				<?php the_field('position'); ?>

			<?php endwhile; ?>

			<?php basis_paging_nav(); ?>

		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
