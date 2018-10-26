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

	<div class="container-fluid" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-position: center top; height: 700px; background-repeat: no-repeat; padding: 0px;">
		<div class="row d-flex align-items-end" style="width: 100%; height: 100%; margin:0px;">
			<div class="container">
				<div class="row">
						<div class="col-md-6 col-8">
						<?php
							the_content();
						?>
					    <a href="/contact/" class="btn blackBtn">Make an enquiry</a>

						</div>
						<div class="col">
						</div>
				</div>
			</div>
		<div class="container-fluid footerWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/footer-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
		</div>
		</div>
	</div>

<?php
get_template_part( 'template-parts/content', 'servicepanels' );
?>
	<div class="container-fluid">
			<div class="row">
				<div class="blackBottomWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/black-bottom-wave.svg); background-position: center bottom; background-repeat: no-repeat; background-size: 2686px;">
				</div>
			</div>
	</div>


<?php
get_template_part( 'template-parts/content', 'videos' );
?>

	<div class="container-fluid">
			<div class="row">
				<div class="blackBottomWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/single-wave.svg); background-position: center bottom; background-repeat: no-repeat; background-size: 2686px;">
				</div>
			</div>
	</div>


<?php
get_template_part( 'template-parts/content', 'testimonials' );
?>

<?php
get_template_part( 'template-parts/content', 'enquiry' );
?>


</article><!-- #post-## -->
