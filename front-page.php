<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_post_thumbnail(); ?>

			<?php if( have_rows('home_page_sections') ) : ?>

				<?php while ( have_rows('home_page_sections') ) : ?>

					<?php the_row(); ?>

					<?php if( get_row_layout() == 'home_page_content' ) : ?>

						<?php the_sub_field('title'); ?>
						<?php the_sub_field('content'); ?>
						<img src="<?php the_sub_field('image'); ?>" />

					<?php endif; ?>

				<?php endwhile; ?>

			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

		FEATURED WORK EXAMPLES - 3 UP

	</div><!-- #primary -->

<?php get_footer(); ?>
