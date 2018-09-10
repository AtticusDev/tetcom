<?php
/**
 * Template part for displaying page content in about.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tetcom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid">
		<div class="row">
			<div class="container">
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

<!--
HISTORY SECTION
-->

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center mt-4 mb-4">
					<h2>Our History</h2>
					</div>		
				</div>
				<div class="row">

				<?php if( have_rows('history') ): 
					 while( have_rows('history') ): the_row(); 
					// vars
					$title = get_sub_field('title');
					$description = get_sub_field('details');
					$color = get_sub_field('color_select');
				?>
				<div class="col-sm col-md-4 col-lg" style="background-color: #<?php echo $color; ?>">
					<h3><?php echo $title; ?></h3>
				    <p><?php echo $description; ?></p>					
				</div>
					<?php endwhile;
				endif; ?>
				</div>
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
					<div class="col-md-12 text-center mt-4 mb-4">
					<h2>Our Departments</h2>
					</div>		
				</div>
				<div class="row">
					<ul class='snippets-accordian'>

				<?php if( have_rows('departments') ): 
					 while( have_rows('departments') ): the_row(); 
					// vars
					$title = get_sub_field('department');
					$description = get_sub_field('dept_description');
					$icon = get_sub_field('icon');
				?>
								<li class='q col-md-6'>
									<!--
									<?php echo $icon; ?>&nbsp;
									-->
									<?php echo $title; ?><i class="fa fa-plus"></i></li>
								<li class='a'><?php echo $description; ?></li>
					<?php endwhile;
				endif; ?>
					</ul>
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
