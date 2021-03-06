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

	<div class="container-fluid" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-position: center bottom;  background-repeat: no-repeat; padding: 0px;">
		<div class="row d-flex" style="width: 100%; height: 100%; margin:0px;">
			<div class="container pt-5">
				<div class="row">
						<div class="col-md-6 col-8">
						<?php
							the_content();
						?>
						<a href="/contact/" class="btn blackBtn">Make an enquiry</a>

						</div>
				</div>
			</div>
			<div class="container-fluid footerWave mt-auto" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/white-about-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
			</div>
		</div>
	</div>

<!--
INTRO SECTION
-->

	<div class="container-fluid">
		<div class="row">
			<div class="container pt-5">
				<div class="row">
						<div class="col-md-6">
							<div class="p-1">
								<?php the_field('about_intro_left_column'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="p-1">
								<?php the_field('about_intro_right_column'); ?>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
			<div class="row">
				<div class="blackBottomWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/single-wave.svg); background-position: center bottom; background-repeat: no-repeat; background-size: 2686px;">
				</div>
			</div>
	</div>





<!--
HISTORY SECTION
-->




<!--
DEPARTMENTS SECTION
-->

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mt-4 mb-4">
						<?php the_field('departments_intro'); ?>
					</div>		
				</div>

				<div class="row">
<!-- COLUMN ONE -->
					<div class="col-md-6">
						<ul class='snippets-accordian'>
						<?php if( have_rows('departments') ): 
							 while( have_rows('departments') ): the_row(); 
							// vars
							$title = get_sub_field('department');
							$description = get_sub_field('dept_description');
							$icon = get_sub_field('icon');
							$count = count(get_field('departments'));
							if($count % 2 == 0){
								$halfNum = $count/2;
							} else {
								$num = ($count/2);
								$halfNum = ceil($num);
							}
							$rownumber = get_row_index();

						?>
									<?php if($rownumber <= $halfNum) { ?>
										<li class='d-flex justify-content-between q'>
												<div class="d-flex" style="width: 80%;">
													<div style="width: 15%; margin-right: 5%;"><?php echo $icon; ?>&nbsp;</div>
													<div style="width: 85%" class="text-primary"><?php echo $title; ?></div>
												</div>
												<i class="fa fa-plus text-primary" style="padding-top:8px;"></i>
										</li>
										<li class='a'><?php echo $description; ?></li>
									<?php } ?>
							<?php endwhile;
						endif; ?>
						</ul>
					</div>
<!-- COLUMN TWO -->
					<div class="col-md-6">
						<ul class='snippets-accordian'>
						<?php if( have_rows('departments') ): 
							 while( have_rows('departments') ): the_row(); 
							// vars
							$title = get_sub_field('department');
							$description = get_sub_field('dept_description');
							$icon = get_sub_field('icon');
							$count = count(get_field('departments'));
							if($count % 2 == 0){
								$halfNum = $count/2;
							} else {
								$num = ($count/2);
								$halfNum = ceil($num);
							}
							$rownumber = get_row_index();

						?>
									<?php if($rownumber > $halfNum) { ?>
										<li class='d-flex justify-content-between q'>
												<div class="d-flex" style="width: 80%;">
													<div style="width: 15%; margin-right: 5%;"><?php echo $icon; ?>&nbsp;</div>
													<div style="width: 85%" class="text-primary"><?php echo $title; ?></div>
												</div>
												<i class="fa fa-plus text-primary" style="padding-top:8px;"></i>
										</li>
										<li class='a'><?php echo $description; ?></li>
									<?php } ?>
							<?php endwhile;
						endif; ?>
						</ul>
					</div>
<!-- END COLUMN TWO -->

				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid">
			<div class="row">
				<div class="blackBottomWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/single-wave.svg); background-position: center bottom; background-repeat: no-repeat; background-size: 2686px;">
				</div>
			</div>
	</div>




<?php
get_template_part( 'template-parts/content', 'videos' );
?>


<?php
get_template_part( 'template-parts/content', 'enquiry' );
?>



</article><!-- #post-## -->
