<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

<script>
jQuery(document).ready(function(){
    /* default settings */
    jQuery('.venobox').venobox();
});
</script>

	<section class="page-top">
		<div class="page-top-content">
			<h1>Featured videos.</h1>
		</div>
	</section>

	<div id="primary" class="work-portals">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="square-portal-container">

					<a class="venobox" data-type="vimeo" href="<?php the_field('video'); ?>">
                        <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'thumbnail'); ?>
						<?php $mobile_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'mobile-squared'); ?>
						<?php $tablet_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'tablet-squared'); ?>
						<?php $desktop_squared = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'desktop-squared'); ?>

						<picture class="home-featured-image">
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source
								srcset="<?php echo $thumbnail[0]; ?>"
								media="(max-width: 500px)" />
							<source
								srcset="<?php echo $tablet_squared[0]; ?>"
								media="(max-width: 860px)" />
							<source
								srcset="<?php echo $desktop_squared[0]; ?>"
								media="(min-width: 861px)" />
							<!--[if IE 9]></video><![endif]-->
                            <img srcset="<?php echo $desktop_squared[0]; ?>">

						</picture>

						<div class="square-portal-overlay"></div>
						<div class="video-play-icon">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 143 143" enable-background="new 0 0 143 143" xml:space="preserve">
							<g>
								<polygon fill="#FFFFFF" points="58.3,49 96.7,71.5 58.3,94 	"/>
								<path fill="#FFFFFF" d="M71.5,142.8c-39.3,0-71.3-32-71.3-71.3s32-71.3,71.3-71.3c39.3,0,71.3,32,71.3,71.3S110.8,142.8,71.5,142.8
									z M71.5,8.2C36.6,8.2,8.2,36.6,8.2,71.5s28.4,63.3,63.3,63.3c34.9,0,63.3-28.4,63.3-63.3S106.4,8.2,71.5,8.2z"/>
							</g>
							</svg>
						</div>
						<div class="square-portal">
							<span class="rollover-top portal-text">Play:</span>
							<span class="rollover-middle portal-text"><?php the_title(); ?></span>
							<span class="rollover-bottom portal-text"><?php the_field('subtitle') ?></span>
						</div>
					</a>

				</div>

				<?php wp_reset_query(); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
