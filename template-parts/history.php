<!--
HISTORY SECTION
-->

	<div class="container-fluid" style="background-color: #000000;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-8 text-white pt-4">
						<?php the_field('history_intro'); ?>
					</div>
				</div>
				<div class="row justify-content-center">

				<?php if( have_rows('history') ): 
					 while( have_rows('history') ): the_row(); 
					// vars
					$title = get_sub_field('title');
					$description = get_sub_field('details');
					$color = get_sub_field('color_select');
				?>
				<div class="col-sm-12 col-md-4">
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