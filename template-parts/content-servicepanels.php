	<div class="container-fluid" style="background-color: #000000;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-8 text-white">
						<?php the_field('product_intro'); ?>
					</div>
				</div>
				<div class="row d-flex align-items-top">
					<?php 
					$args = array( 'post_type' => 'service', 'posts_per_page' => '4', 'order' => 'ASC' );
					$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
					// vars
					$icon = get_field('icon');
					$title = get_field('title');
					$description = get_field('intro');
					$link = get_field('button_link');
				?>
				<div class="col-sm-12 col-md-3">
					<p style="width: 5rem; height: 5rem;"><?php echo $icon; ?></p>
					<h3 class="text-primary"><a href="<?php the_permalink(); ?>" title="<?php echo $service; ?>"><?php echo $title; ?></a></h3>
					<p class="text-white"><?php echo $description; ?></p>
				    <a href="<?php the_permalink(); ?>" title="<?php echo $service; ?>" class="btn readmoreBtn">Read more</a>
				</div>
					<?php 
					endwhile;
					wp_reset_query();
					?>
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

