<?php
/**
 * Template Name: Contact
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

			<h1><?php the_field('lead_in_title'); ?></h1>

		<?php endwhile; // end of the loop. ?>

		<?php

			$args = array(
				'post_type' => 'location'
			);
			$query = new WP_Query($args);

			if($query->have_posts()) : ?>

			<h4>Locations</h4>

			<?php while($query->have_posts()) : ?>

				<?php $query->the_post(); ?>

				<a href=""><?php the_field('short_title') ?></a>

			<?php endwhile; ?>

		<?php endif; ?>

		<?php

			$args = array(
				'post_type' => 'location',
			);
			$query = new WP_Query($args);

			if($query->have_posts()) : ?>

			<?php while($query->have_posts()) : ?>

				<?php $query->the_post(); ?>

				<?php if( have_rows('location_images') ) : ?>

					<div class="location-image-container">

				  		<?php while ( have_rows('location_images') ) : ?>

				    	<?php the_row(); ?>

						<div class="location-image">

				      		<img src="<?php the_sub_field('image'); ?>" />

							<?php if( get_sub_field('link_to_map') ) : ?>

								Visit our <?php the_field('location_title') ?>
								<h1><?php the_field('city_only'); ?></h1>

							<?php endif; ?>

						</div>

				  		<?php endwhile; ?>

					</div>

				<?php endif; ?>

				<div class="location-title">
					<h1><?php the_title(); ?></h1>
				</div>

				<div class="location-info">
					<?php the_field('location_title') ?>
					<?php the_field('location_address') ?>
					p: <?php the_field('phone_number') ?><br>
					e: <a href="<?php the_field('email') ?>"><?php the_field('email') ?></a>
				</div>

			<?php endwhile; ?>

		<?php endif; ?>



	</div><!-- #primary -->

<?php get_footer(); ?>
