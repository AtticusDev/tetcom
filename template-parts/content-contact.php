<?php
/**
 * Template part for displaying page content in contact.php
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
						<div class="col text-primary pt-4">
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
	<div class="container-fluid" style="background-color: #ebebeb;">
		<div class="row">
			<div class="container">
				<div class="row">
						<div class="col-md-4 text-right mt-4">
							<h2>How can we help you today?</h2>
						</div>
						<div class="col">
						<?php
							echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
						?>
						</div>
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



<!--
DEPARTMENTS SECTION
-->

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
				<?php if( have_rows('contact_panels') ): 
					 while( have_rows('contact_panels') ): the_row(); 
					// vars
					$icon = get_sub_field('icon');
					$title = get_sub_field('title');
					$telephone = get_sub_field('telephone');
					$email = get_sub_field('email');
					$color = get_sub_field('color_selection');
				?>
				<div class="col-sm col-md-4">
					<div class="contactPanel text-center" style="background-color: #<?php echo $color; ?>">
						<div class="d-flex justify-content-center">
							<p style="width: 60px; text-align: center;"><?php echo $icon; ?></p>
						</div>
						<h3 class="text-primary"><?php echo $title; ?></h3>
						<p><?php echo $telephone; ?></p>
					    <p><?php echo $email; ?></p>
					</div>
				</div>
					<?php endwhile;
				endif; ?>
				</div>
			</div>
		</div>
	</div>





</article><!-- #post-## -->
