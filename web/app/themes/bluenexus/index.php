<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bluenexus
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="homepage-banner valign-wrapper">
				<div class="homepage-banner__overlay"></div>
				<div class="homepage-banner__title-container valign">
					<h1 class="homepage-banner__title">Thomas Roberts</h1>
					<h2 class="homepage-banner__strapline">DevOps, front-end, PHP</h2>
				</div>
			</section>

			<section class="homepage-skills row">
				<div class="homepage-skills__skill col s12 l3 valign-wrapper center-align">
					<h3 class="homepage-skills__skill__title valign">PHP</h3>
				</div>
				<div class="homepage-skills__skill col s12 l3 valign-wrapper center-align">
					<h3 class="homepage-skills__skill__title valign">WordPress</h3>
				</div>
				<div class="homepage-skills__skill col s12 l3 valign-wrapper center-align">
					<h3 class="homepage-skills__skill__title valign">HTML + CSS</h3>
				</div>
				<div class="homepage-skills__skill col s12 l3 valign-wrapper center-align">
					<h3 class="homepage-skills__skill__title valign">JavaScript</h3>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
