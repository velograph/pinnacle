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

	<footer class="site-footer" role="contentinfo">

		<div class="footer-row">

			<?php

			    $args = array(
			        'post_type' => 'location'
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

				<div class="footer-locations">

					<h4>Locations</h4>

					<ul>
						<?php while($query->have_posts()) : ?>

							<?php $query->the_post(); ?>

							<li><a href="/locations/"><?php the_title() ?></a></li>

						<?php endwhile; ?>
					</ul>

				</div>

			<?php endif; ?>

			<script>
			jQuery(function() {
					jQuery('.client-tools, .footer-locations').matchHeight();
			});
			</script>

			<div class="client-tools">
				<h4>Client Tools</h4>
				<?php if( have_rows('client_tools', 130) ) : ?>

				    <ul>
						<?php while ( have_rows('client_tools', 130) ) : ?>

					        <?php the_row(); ?>

							<li><a href="<?php the_sub_field('link_address'); ?>" target="_blank"><?php the_sub_field('link_title'); ?></a></li>

					    <?php endwhile; ?>
					</ul>

				<?php endif; ?>

			</div>

			<div class="careers">
				<h4>Careers</h4>
				<ul>
					<li><a href="http://pinnacle.hiringthing.com" target="_blank">Job Openings</a></li>
				</ul>
			</div>

			<div class="social-links">
				<a href="<?php the_field('facebook_link', 130); ?>" target="_blank">
					<?xml version="1.0" encoding="utf-8"?>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 14.5 14.5" enable-background="new 0 0 14.5 14.5" xml:space="preserve">
					<path fill="#00A9C5" d="M13.7,0.1H0.8c-0.4,0-0.8,0.4-0.8,0.8v12.8c0,0.4,0.4,0.8,0.8,0.8h6.9V8.9H5.9V6.7h1.9V5.1
						c0-1.9,1.1-2.9,2.8-2.9c0.8,0,1.5,0.1,1.7,0.1v1.9l-1.2,0c-0.9,0-1.1,0.4-1.1,1.1v1.4h2.2l-0.3,2.2H10v5.6h3.7
						c0.4,0,0.8-0.4,0.8-0.8V0.8C14.4,0.4,14.1,0.1,13.7,0.1z"/>
					</svg>
				</a>

				<a href="<?php the_field('twitter_link', 130); ?><?php the_field(''); ?>" target="_blank">
					<?xml version="1.0" encoding="utf-8"?>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 16 13" enable-background="new 0 0 16 13" xml:space="preserve">
					<path fill="#00A9C5" d="M15.8,1.7c-0.6,0.3-1.2,0.4-1.8,0.5c0.7-0.4,1.2-1,1.4-1.8c-0.6,0.4-1.3,0.6-2,0.8c-0.6-0.6-1.4-1-2.3-1
						c-1.8,0-3.2,1.4-3.2,3.2c0,0.3,0,0.5,0.1,0.7C5.2,4,2.9,2.7,1.3,0.8C1,1.2,0.9,1.8,0.9,2.4c0,1.1,0.6,2.1,1.4,2.7
						c-0.5,0-1-0.2-1.4-0.4c0,0,0,0,0,0c0,1.5,1.1,2.8,2.6,3.1C3.1,7.9,2.9,7.9,2.6,7.9c-0.2,0-0.4,0-0.6-0.1c0.4,1.3,1.6,2.2,3,2.2
						c-1.1,0.9-2.5,1.4-4,1.4c-0.3,0-0.5,0-0.8,0c1.4,0.9,3.1,1.4,4.9,1.4c5.9,0,9.1-4.9,9.1-9.1c0-0.1,0-0.3,0-0.4
						C14.8,2.9,15.3,2.3,15.8,1.7z"/>
					</svg>
				</a>

				<a href="<?php the_field('instagram_link', 130); ?>" target="_blank">
					<?xml version="1.0" encoding="utf-8"?>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 15 15" enable-background="new 0 0 15 15" xml:space="preserve">
					<g>
						<path fill-rule="evenodd" clip-rule="evenodd" fill="#00A9C5" d="M13,6.4h-1.3c0.1,0.4,0.1,0.7,0.1,1.1c0,2.4-2,4.4-4.4,4.4
							c-2.4,0-4.4-2-4.4-4.4c0-0.4,0.1-0.8,0.1-1.1H2v6.1C2,12.8,2.2,13,2.5,13h10c0.3,0,0.6-0.2,0.6-0.6V6.4z M13,2.5
							C13,2.2,12.8,2,12.5,2h-1.7c-0.3,0-0.6,0.2-0.6,0.6v1.7c0,0.3,0.2,0.6,0.6,0.6h1.7c0.3,0,0.6-0.2,0.6-0.6V2.5z M7.5,4.7
							C6,4.7,4.7,6,4.7,7.5c0,1.5,1.2,2.8,2.8,2.8s2.8-1.2,2.8-2.8C10.3,6,9,4.7,7.5,4.7 M13,14.7H2C1,14.7,0.3,14,0.3,13V2
							C0.3,1,1,0.3,2,0.3H13C14,0.3,14.7,1,14.7,2V13C14.7,14,14,14.7,13,14.7"/>
					</g>
					</svg>
				</a>

				<a href="<?php the_field('pinterest_link', 130); ?>" target="_blank">
					<?xml version="1.0" encoding="utf-8"?>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 15 15" enable-background="new 0 0 15 15" xml:space="preserve">
					<g>
						<g>
							<path fill="#00A9C5" d="M7.5,0.3c-4,0-7.2,3.2-7.2,7.2c0,3.1,1.9,5.7,4.6,6.7c-0.1-0.6-0.1-1.4,0-2.1C5,11.6,5.7,8.6,5.7,8.6
								S5.5,8.1,5.5,7.5c0-1,0.6-1.7,1.3-1.7c0.6,0,0.9,0.5,0.9,1c0,0.6-0.4,1.5-0.6,2.4C7,9.9,7.5,10.5,8.2,10.5c1.3,0,2.3-1.3,2.3-3.3
								c0-1.7-1.2-2.9-3-2.9c-2,0-3.3,1.5-3.3,3.1C4.2,8,4.5,8.6,4.8,9c0.1,0.1,0.1,0.1,0,0.2C4.7,9.4,4.6,9.9,4.6,10
								c0,0.1-0.1,0.2-0.2,0.1C3.5,9.7,2.9,8.4,2.9,7.3C2.9,5.1,4.6,3,7.7,3c2.5,0,4.4,1.8,4.4,4.2c0,2.5-1.6,4.5-3.7,4.5
								c-0.7,0-1.4-0.4-1.7-0.8c0,0-0.4,1.4-0.4,1.7c-0.2,0.6-0.6,1.4-0.9,1.9c0.7,0.2,1.4,0.3,2.1,0.3c4,0,7.2-3.2,7.2-7.2
								C14.7,3.5,11.5,0.3,7.5,0.3z"/>
						</g>
					</g>
					</svg>
				</a>
			</div>

		</div>

		<div class="footer-row">

			<div class="site-info">
				&copy; <?php the_time('Y'); ?> Pinnacle Exhibits | All Rights Reserved
			</div><!-- .site-info -->

		</div>

	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
