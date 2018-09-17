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
						<div class="col-md-6">
						<?php
							the_content();
						?>
					    <a href="/contact/" class="btn blackBtn">Make an enquiry</a>

						</div>
				</div>
			</div>
		<div class="container-fluid footerWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/footer-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
		</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #000000;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-8 text-white">
						<?php the_field('product_intro'); ?>
					</div>
				</div>
				<div class="row d-flex align-items-center">
				<?php if( have_rows('product_panels') ): 
					 while( have_rows('product_panels') ): the_row(); 
					// vars
					$icon = get_sub_field('icon');
					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$link = get_sub_field('button_link');
				?>
				<div class="col-sm-12 col-md-3">
					<p style="width: 5rem; height: 5rem;"><?php echo $icon; ?></p>
					<h3 class="text-primary"><?php echo $title; ?></h3>
					<p class="text-white"><?php echo $description; ?></p>
				    <a href="<?php echo $link; ?>" class="btn readmoreBtn">Read more</a>
				</div>
					<?php endwhile;
				endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
			<div class="row">
				<div class="blackBottomWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/black-bottom-wave.svg); background-position: center bottom; background-repeat: no-repeat; background-size: 2686px;">
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
