<?php
/**
 * Template part for displaying page content in services.php
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
	<div class="container-fluid" style="background-color: #ebebeb;">
			<div class="row">
				<div class="blackBottomWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/black-bottom-wave.svg); background-position: center bottom; background-repeat: no-repeat; background-size: 2686px;">
				</div>
			</div>
	</div>
	<div class="container-fluid"  style="background-color: #ebebeb;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-sm col-md-4 pt-4">
							<h2><?php the_field('services_intro'); ?></h2>
					</div>

				<?php if( have_rows('support_panels') ): 
					 while( have_rows('support_panels') ): the_row(); 
					// vars
					$icon = get_sub_field('icon');
					$title = get_sub_field('title');
					$email = get_sub_field('email');
					$color = get_sub_field('color_selection');
				?>
				<div class="col-sm col-md-4">
					<div class="contactPanel text-center text-white" style="background-color: #<?php echo $color; ?>">
						<div class="d-flex justify-content-center">
							<p style="width: 60px; text-align: center;"><?php echo $icon; ?></p>
						</div>
						<h3><?php echo $title; ?></h3>
						<p><a href="mailto:<?php echo $email; ?>" style="color: white;"><?php echo $email; ?></a></p>
					</div>
				</div>
					<?php endwhile;
				endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="footerWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/contact-grey-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
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
