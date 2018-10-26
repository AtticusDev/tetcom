<?php
/**
 * Template part for displaying page content in whatwedo.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tetcom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<div class="container-fluid" style="background-color: #000000;">
		<div class="row">
			<div class="container">
				<div class="row">
						<div class="col text-white pt-4">
						<?php
							the_content();
						?>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-position: center bottom;  background-repeat: no-repeat; padding: 0px;">
		<div class="row d-flex" style="margin:0;">
			<div class="blackBottomWave mb-auto" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/black-bottom-wave.svg); background-position: center bottom; background-repeat: no-repeat; background-size: 2686px;">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-8 col-md-6 pt-4">
						<p><?php the_field('intro'); ?></>
					    <a href="/contact/" class="btn blackBtn">Make an enquiry</a>
					</div>
				</div>
			</div>
			<div class="container-fluid footerWave  mt-auto" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/footer-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
			</div>
		</div>
	</div>


<!--
SERVICES SECTION
-->

<?php
get_template_part( 'template-parts/content', 'servicepanels' );
?>



	<div class="container-fluid" style="background-image: url(<?php the_field('middle_image');?>); background-repeat: no-repeat; background-position: center top;">
			<div class="row justify-content-center">
				<div class="container-fluid outer">
					<div class="inner">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/black-bottom-wave.svg" width="2686" class="waveImg">					
					</div>
					<div class="inner" style="margin-top:280px;">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/white-wave.svg" class="waveImg">					
					</div>
					
				</div>
			</div>
	</div>





<?php
get_template_part( 'template-parts/content', 'testimonialsleft' );
?>

<?php
get_template_part( 'template-parts/content', 'enquiry' );
?>




</article><!-- #post-## -->
