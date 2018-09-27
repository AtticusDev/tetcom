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
<?php
	$icon = get_field('icon');
?>

		<div class="container-fluid"  style="background-color: #000000;">
		<div class="row">
			<div class="container">
				<div class="row">
						<div class="col pt-4">
							<div style="width: 200px;">
								<p style="width: 5rem; height: 5rem;"><?php echo $icon; ?></p>
							</div>
							<h2 class="text-primary"><?php the_field('title'); ?></h2>
						</div>
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


	<div class="container-fluid" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-position: center top; height: 700px; background-repeat: no-repeat; padding: 0px;">
		<div class="row d-flex align-items-end" style="width: 100%; height: 100%; margin:0px;">
			<div class="container">
				<div class="row">
						<div class="col-md-6">
								<p><?php the_field('intro'); ?></p>
								<p><?php the_field('description'); ?></p>

						<a href="/contact/" class="btn blackBtn">Make an enquiry</a>

						</div>
				</div>
			</div>
		<div class="container-fluid footerWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/footer-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
		</div>
		</div>
	</div>

<!--
HISTORY SECTION
-->

	<div class="container-fluid" style="background-color: #000000;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-8 text-white">
						<?php the_field('history_intro'); ?>
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
				<div class="col-sm col-md-4">
					<div class="historyPanel" style="background-color: #<?php echo $color; ?>">
					<?php if($color == 'ffffff') {?>
						<h3 class="text-primary"><?php echo $title; ?></h3>
					    <p><?php echo $description; ?></p>
				    <?php } elseif($color == '939598') { ?>
						<h3 class="text-white"><?php echo $title; ?></h3>
					    <p><?php echo $description; ?></p>
				    <?php } else { ?>
						<h3><?php echo $title; ?></h3>
					    <p><?php echo $description; ?></p>
					<?php } ?>
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
				<div class="blackBottomWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/black-bottom-wave.svg); background-position: center bottom; background-repeat: no-repeat; background-size: 2686px;">
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
											<?php echo $halfNum; ?>
												<div class="d-flex" style="width: 80%;">
													<div style="width: 15%; margin-right: 5%;"><?php echo $icon; ?>&nbsp;</div>
													<div style="width: 85%" class="text-primary"><?php echo $title; ?></div>
												</div>
												<i class="fa fa-plus text-primary"></i>
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
											<?php echo $halfNum; ?>
												<div class="d-flex" style="width: 80%;">
													<div style="width: 15%; margin-right: 5%;"><?php echo $icon; ?>&nbsp;</div>
													<div style="width: 85%" class="text-primary"><?php echo $title; ?></div>
												</div>
												<i class="fa fa-plus text-primary"></i>
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


<?php
get_template_part( 'template-parts/content', 'videos' );
?>


<?php
get_template_part( 'template-parts/content', 'enquiry' );
?>



</article><!-- #post-## -->