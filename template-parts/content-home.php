<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tetcom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid" >
		<div class="row" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/images/wave.svg); background-size: 100%; height: 350px; background-repeat:no-repeat;">
			<div class="container mt-5 text-white">
				<div class="row">
						<div class="col">
						<?php
							the_content();
						?>
						</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_template_part( 'template-parts/content', 'videos' );
?>


<?php
get_template_part( 'template-parts/content', 'testimonials' );
?>

<?php
get_template_part( 'template-parts/content', 'enquiry' );
?>


</article><!-- #post-## -->
