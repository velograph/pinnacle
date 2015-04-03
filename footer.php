<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pinnacle Exhibits
 */
?>

	</div><!-- #content -->

	<footer class="footer" role="contentinfo">

		<hr />

		<?php

		    $args = array(
		        'post_type' => 'location'
		    );
		    $query = new WP_Query($args);

		    if($query->have_posts()) : ?>

			<h4>Locations</h4>

		      <?php while($query->have_posts()) : ?>

		        <?php $query->the_post(); ?>

		        <?php the_title() ?><br>

		      <?php endwhile; ?>

		<?php endif; ?>

		<div class="client-tools">
			<h4>Client Tools</h4>
			<?php wp_nav_menu( array( 'theme_location' => 'client-tools' ) ); ?>
		</div>

		<div class="careers">
			<h4>Careers</h4>
			<a href="#">Job Openings</a>
		</div>

		<div class="social-links">
			<a href="" target="_blank">
			</a>

			<a href="" target="_blank">
			</a>

			<a href="" target="_blank">
			</a>

			<a href="" target="_blank">
			</a>
		</div>

		<hr />

		<div class="site-info">
			&copy; <?php the_time('Y'); ?> Pinnacle Exhibits | All Rights Reserved
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
