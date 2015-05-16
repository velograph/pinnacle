<?php
/**
 * Template Name: Social
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

<script>
	jQuery(document).ready(function () {
	  jQuery('.accordion-tabs').each(function(index) {
	    jQuery(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
	  });

	  jQuery('.accordion-tabs').on('click', 'li > a', function(event) {
	    if (!jQuery(this).hasClass('is-active')) {
	      event.preventDefault();
	      var accordionTabs = jQuery(this).closest('.accordion-tabs');
	      accordionTabs.find('.is-open').removeClass('is-open').hide();

	      jQuery(this).next().toggleClass('is-open').toggle();
	      accordionTabs.find('.is-active').removeClass('is-active');
	      jQuery(this).addClass('is-active');
	    } else {
	      event.preventDefault();
	    }
	  });
	});
</script>

	<div id="primary" class="social-feeds content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="page-top">
				<div class="page-top-content">
					<h1><?php the_field('page_lead_in'); ?></h1>
				</div>
			</section>

			<div class="two-feeds">

				<ul class="accordion-tabs">
				  <li class="tab-header-and-content">
				    <a href="javascript:void(0)" class="is-active tab-link">
						Culture&nbsp;
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 14.5 14.5" enable-background="new 0 0 14.5 14.5" xml:space="preserve">
						<path fill="#00A9C5" d="M13.7,0.1H0.8c-0.4,0-0.8,0.4-0.8,0.8v12.8c0,0.4,0.4,0.8,0.8,0.8h6.9V8.9H5.9V6.7h1.9V5.1
							c0-1.9,1.1-2.9,2.8-2.9c0.8,0,1.5,0.1,1.7,0.1v1.9l-1.2,0c-0.9,0-1.1,0.4-1.1,1.1v1.4h2.2l-0.3,2.2H10v5.6h3.7
							c0.4,0,0.8-0.4,0.8-0.8V0.8C14.4,0.4,14.1,0.1,13.7,0.1z"/>
						</svg>
					</a>
				    <div class="tab-content">
						<?php echo do_shortcode('[custom-facebook-feed]'); ?>
				    </div>
				  </li>
				  <li class="tab-header-and-content">
				    <a href="javascript:void(0)" class="tab-link">
						Design&nbsp;
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
				    <div class="tab-content">
						<?php echo do_shortcode('[instagram-feed]'); ?>
				    </div>
				  </li>
				</ul>

			</div>

			<aside class="one-feed">
				<span class="twitter-title">
					Industry&nbsp;
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 16 13" enable-background="new 0 0 16 13" xml:space="preserve">
					<path fill="#00A9C5" d="M15.8,1.7c-0.6,0.3-1.2,0.4-1.8,0.5c0.7-0.4,1.2-1,1.4-1.8c-0.6,0.4-1.3,0.6-2,0.8c-0.6-0.6-1.4-1-2.3-1
						c-1.8,0-3.2,1.4-3.2,3.2c0,0.3,0,0.5,0.1,0.7C5.2,4,2.9,2.7,1.3,0.8C1,1.2,0.9,1.8,0.9,2.4c0,1.1,0.6,2.1,1.4,2.7
						c-0.5,0-1-0.2-1.4-0.4c0,0,0,0,0,0c0,1.5,1.1,2.8,2.6,3.1C3.1,7.9,2.9,7.9,2.6,7.9c-0.2,0-0.4,0-0.6-0.1c0.4,1.3,1.6,2.2,3,2.2
						c-1.1,0.9-2.5,1.4-4,1.4c-0.3,0-0.5,0-0.8,0c1.4,0.9,3.1,1.4,4.9,1.4c5.9,0,9.1-4.9,9.1-9.1c0-0.1,0-0.3,0-0.4
						C14.8,2.9,15.3,2.3,15.8,1.7z"/>
					</svg>
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
