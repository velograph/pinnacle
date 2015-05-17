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

	<script>
	jQuery(document).ready(function (){
            jQuery(".back-to-top svg").click(function (){
                //jQuery(this).animate(function(){
                    jQuery('html, body').animate({
                        scrollTop: jQuery("body").offset().top
                    }, 1500);
                //});
            });
        });
	</script>

	<footer class="mobile-footer">

		<div class="mobile-footer-row">

			<div class="back-to-top">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 44.2 43" enable-background="new 0 0 44.2 43" xml:space="preserve">
					<g>
						<g>
							<path fill="#00A9C5" d="M0.2,42.5v-5h1.6c0.3,0,0.6,0,0.8,0.1c0.2,0.1,0.4,0.1,0.5,0.3c0.1,0.1,0.2,0.2,0.3,0.4
								c0.1,0.2,0.1,0.3,0.1,0.5c0,0.1,0,0.2-0.1,0.4s-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.3,0.1-0.4,0.2
								C3,40,3.2,40.1,3.4,40.3s0.3,0.4,0.3,0.8c0,0.2,0,0.4-0.1,0.6c-0.1,0.2-0.2,0.3-0.3,0.5s-0.3,0.2-0.6,0.3
								c-0.2,0.1-0.5,0.1-0.7,0.1H0.2z M0.8,39.7h0.9c0.2,0,0.4,0,0.5-0.1c0.1,0,0.3-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3
								c0-0.1,0.1-0.2,0.1-0.3c0-0.3-0.1-0.5-0.3-0.6S2.1,38,1.8,38H0.8V39.7z M0.8,40.2V42h1.1c0.2,0,0.4,0,0.5-0.1
								c0.1,0,0.3-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3C3,41.3,3,41.2,3,41.1c0-0.3-0.1-0.5-0.3-0.6c-0.2-0.2-0.5-0.2-0.8-0.2H0.8z"/>
							<path fill="#00A9C5" d="M8.7,42.5H8.2c-0.1,0-0.1,0-0.1,0c0,0-0.1-0.1-0.1-0.1l-0.5-1.2H5.2l-0.5,1.2c0,0,0,0.1-0.1,0.1
								c0,0-0.1,0-0.1,0H4l2-5h0.7L8.7,42.5z M5.4,40.6h1.9l-0.8-2c0-0.1-0.1-0.1-0.1-0.2s0-0.2-0.1-0.3c0,0.1,0,0.2-0.1,0.3
								c0,0.1,0,0.2-0.1,0.2L5.4,40.6z"/>
							<path fill="#00A9C5" d="M12.8,41.5C12.8,41.5,12.8,41.5,12.8,41.5l0.4,0.3c-0.2,0.2-0.5,0.4-0.7,0.6s-0.6,0.2-1.1,0.2
								c-0.4,0-0.7-0.1-1-0.2c-0.3-0.1-0.5-0.3-0.8-0.5c-0.2-0.2-0.4-0.5-0.5-0.8c-0.1-0.3-0.2-0.7-0.2-1s0.1-0.7,0.2-1
								c0.1-0.3,0.3-0.6,0.5-0.8s0.5-0.4,0.8-0.5c0.3-0.1,0.6-0.2,1-0.2c0.4,0,0.7,0.1,0.9,0.2s0.5,0.3,0.7,0.5l-0.2,0.3c0,0,0,0-0.1,0.1
								c0,0-0.1,0-0.1,0c0,0-0.1,0-0.2-0.1c-0.1,0-0.1-0.1-0.2-0.2c-0.1-0.1-0.2-0.1-0.4-0.2c-0.1,0-0.3-0.1-0.5-0.1
								c-0.3,0-0.5,0-0.7,0.1c-0.2,0.1-0.4,0.2-0.6,0.4c-0.2,0.2-0.3,0.4-0.4,0.6c-0.1,0.2-0.1,0.5-0.1,0.8c0,0.3,0,0.6,0.1,0.8
								c0.1,0.2,0.2,0.5,0.4,0.6c0.2,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.4,0.1,0.7,0.1c0.1,0,0.3,0,0.4,0c0.1,0,0.2,0,0.3-0.1
								c0.1,0,0.2-0.1,0.3-0.1c0.1-0.1,0.2-0.1,0.3-0.2C12.7,41.5,12.7,41.5,12.8,41.5z"/>
							<path fill="#00A9C5" d="M14.6,39.7h0.3c0.1,0,0.2,0,0.2,0s0.1-0.1,0.1-0.1l1.7-1.9c0-0.1,0.1-0.1,0.1-0.1s0.1,0,0.2,0h0.6
								l-1.9,2.2c0,0.1-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0.1,0.2,0.2l2,2.4h-0.6c0,0-0.1,0-0.1,0
								c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0s0,0-0.1-0.1l-1.7-2c0-0.1-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0h-0.3v2.3h-0.7v-5h0.7V39.7z"/>
							<path fill="#00A9C5" d="M23.5,37.5v0.6h-1.6v4.4h-0.7v-4.4h-1.6v-0.6H23.5z"/>
							<path fill="#00A9C5" d="M28.7,40c0,0.4-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.8c-0.2,0.2-0.5,0.4-0.8,0.5c-0.3,0.1-0.6,0.2-1,0.2
								c-0.4,0-0.7-0.1-1-0.2c-0.3-0.1-0.6-0.3-0.8-0.5c-0.2-0.2-0.4-0.5-0.5-0.8s-0.2-0.7-0.2-1s0.1-0.7,0.2-1c0.1-0.3,0.3-0.6,0.5-0.8
								s0.5-0.4,0.8-0.5c0.3-0.1,0.6-0.2,1-0.2c0.4,0,0.7,0.1,1,0.2c0.3,0.1,0.6,0.3,0.8,0.5c0.2,0.2,0.4,0.5,0.5,0.8
								C28.6,39.3,28.7,39.6,28.7,40z M28,40c0-0.3,0-0.6-0.1-0.8c-0.1-0.2-0.2-0.5-0.4-0.6c-0.2-0.2-0.3-0.3-0.6-0.4
								c-0.2-0.1-0.5-0.1-0.7-0.1c-0.3,0-0.5,0-0.7,0.1c-0.2,0.1-0.4,0.2-0.6,0.4c-0.2,0.2-0.3,0.4-0.4,0.6c-0.1,0.2-0.1,0.5-0.1,0.8
								c0,0.3,0,0.6,0.1,0.8c0.1,0.2,0.2,0.5,0.4,0.6s0.3,0.3,0.6,0.4c0.2,0.1,0.5,0.1,0.7,0.1c0.3,0,0.5,0,0.7-0.1s0.4-0.2,0.6-0.4
								c0.2-0.2,0.3-0.4,0.4-0.6C27.9,40.6,28,40.3,28,40z"/>
							<path fill="#00A9C5" d="M34.6,37.5v0.6H33v4.4h-0.7v-4.4h-1.6v-0.6H34.6z"/>
							<path fill="#00A9C5" d="M39.8,40c0,0.4-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.5,0.8c-0.2,0.2-0.5,0.4-0.8,0.5c-0.3,0.1-0.6,0.2-1,0.2
								c-0.4,0-0.7-0.1-1-0.2c-0.3-0.1-0.6-0.3-0.8-0.5c-0.2-0.2-0.4-0.5-0.5-0.8s-0.2-0.7-0.2-1s0.1-0.7,0.2-1c0.1-0.3,0.3-0.6,0.5-0.8
								s0.5-0.4,0.8-0.5c0.3-0.1,0.6-0.2,1-0.2c0.4,0,0.7,0.1,1,0.2c0.3,0.1,0.6,0.3,0.8,0.5c0.2,0.2,0.4,0.5,0.5,0.8
								C39.7,39.3,39.8,39.6,39.8,40z M39.1,40c0-0.3,0-0.6-0.1-0.8c-0.1-0.2-0.2-0.5-0.4-0.6c-0.2-0.2-0.3-0.3-0.6-0.4
								c-0.2-0.1-0.5-0.1-0.7-0.1c-0.3,0-0.5,0-0.7,0.1c-0.2,0.1-0.4,0.2-0.6,0.4c-0.2,0.2-0.3,0.4-0.4,0.6c-0.1,0.2-0.1,0.5-0.1,0.8
								c0,0.3,0,0.6,0.1,0.8c0.1,0.2,0.2,0.5,0.4,0.6s0.3,0.3,0.6,0.4c0.2,0.1,0.5,0.1,0.7,0.1c0.3,0,0.5,0,0.7-0.1s0.4-0.2,0.6-0.4
								c0.2-0.2,0.3-0.4,0.4-0.6C39,40.6,39.1,40.3,39.1,40z"/>
							<path fill="#00A9C5" d="M41.4,40.6v1.9h-0.7v-5h1.5c0.3,0,0.6,0,0.8,0.1s0.4,0.2,0.6,0.3c0.2,0.1,0.3,0.3,0.3,0.5
								c0.1,0.2,0.1,0.4,0.1,0.6c0,0.2,0,0.4-0.1,0.6c-0.1,0.2-0.2,0.4-0.4,0.5c-0.2,0.1-0.4,0.2-0.6,0.3c-0.2,0.1-0.5,0.1-0.8,0.1H41.4z
								 M41.4,40.1h0.8c0.2,0,0.4,0,0.5-0.1c0.1-0.1,0.3-0.1,0.4-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.1-0.4
								c0-0.3-0.1-0.6-0.3-0.7c-0.2-0.2-0.5-0.3-0.9-0.3h-0.8V40.1z"/>
						</g>
						<g>
							<polygon fill="#00A9C5" points="15.4,23.6 21.8,12.7 28.2,23.6 		"/>
							<polygon fill="#00A9C5" points="15.4,11.4 21.8,0.4 28.2,11.4 		"/>
						</g>
					</g>
				</svg>
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

		<div class="mobile-footer-row">

			<div class="client-tools">
				<h4>Client Tools</h4>

				<ul>
					<li>
						<a href="/resources-inventory/">Resources & Inventory</a>
					</li>
				</ul>
			</div>

			<div class="careers">
				<h4>Careers</h4>
				<ul>
					<li><a href="http://pinnacle.hiringthing.com" target="_blank">Job Openings</a></li>
				</ul>
			</div>

		</div>

		<div class="mobile-footer-row">
			<div class="site-info">
				&copy; <?php the_time('Y'); ?> Pinnacle Exhibits | All Rights Reserved
			</div><!-- .site-info -->
		</div>

	</footer>

	<footer class="site-footer" role="contentinfo" style="display:none;">

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

				<?php wp_nav_menu(
					array(
							'theme_location' => 'client-tools',
						)
					);
				?>
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
