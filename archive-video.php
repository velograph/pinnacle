<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

	<div id="primary" class="video-container">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php $mobile_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'mobile-squared'); ?>
				<?php $tablet_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'tablet-squared'); ?>
				<?php $desktop_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'desktop-squared'); ?>

				<picture class="home-featured-image">
					<!--[if IE 9]><video style="display: none"><![endif]-->
					<source
						data-srcset="<?php echo $mobile_squared[0]; ?>"
						media="(max-width: 500px)" />
					<source
						data-srcset="<?php echo $tablet_squared[0]; ?>"
						media="(max-width: 860px)" />
					<source
						data-srcset="<?php echo $desktop_squared[0]; ?>"
						media="(min-width: 861px)" />
					<!--[if IE 9]></video><![endif]-->
					<img
						src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
						class="lazyload"
						alt="Pinnacle Exhibits" />
				</picture>

<script>
jQuery(function ($) {
	// Load dialog on page load
	//jQuery('#basic-modal-content').modal();

	// Load dialog on click
	jQuery('#basic-modal .basic').click(function (e) {
		jQuery('#basic-modal-content').modal();

		return false;
	});
});</script>
				<div id='basic-modal'>
					<input type='button' name='basic' value='Demo' class='basic'/>
				</div>

				<div id="basic-modal-content">
					<?php the_field('video'); ?>
				</div>

				<div class="square-portal-overlay"></div>
				<div class="square-portal">
					<a href="">
						<span class="rollover-top portal-text">Play:</span>
						<span class="rollover-middle portal-text"><?php the_title(); ?></span>
						<span class="rollover-bottom portal-text"><?php the_field('subtitle') ?></span>
					</a>
				</div>

			<?php endwhile; ?>

		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
