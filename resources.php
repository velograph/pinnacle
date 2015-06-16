<?php
/**
 * Template Name: Resources & Inventory
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

	<div id="primary" class="resources-inventory content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="page-top">

				<div class="page-top-content">

					<h1><?php the_field('page_lead_in'); ?></h1>

				</div>

			</section>

			<div class="page-content">
				<form class="exhibit-force-form" action="https://www.exhibitforce.com/CLIENTS/default.asp" method="post" name="mainform" target="_blank">
					<ul>
						<li>
							<h5>Login:</h5>
							<input name="login" type="text" id="login" size="10">
						</li>
						<li>
							<h5>Password:</h5>
							<input name="pwd" type="password" id="pwd" size="10">
							<input type="hidden" name="badredir" value="http://PUT YOUR URL HERE">
							<input type="submit" name="Submit" value="Login">
						</li>
					</ul>
				</form>
			</div>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
