
<?php
/**
 * Template Name: What we do
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tetcom
 */

get_header(); ?>

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'whatwedo' );


					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
get_footer();