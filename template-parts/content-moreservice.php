	<div class="container-fluid">
		<div class="row">
			<div class="footerWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/enquiry-grey-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #ebebeb;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-8 text-white">
						<?php the_field('product_intro'); ?>
						<h2 class="text-primary">Explore what else we do</h2>
					</div>
				</div>
				<div class="row d-flex align-items-top">
					<?php 
					$currentID = get_the_ID();
					$args = array( 'post_type' => 'service', 'posts_per_page' => '4', 'order' => 'ASC', 'post__not_in' => array($currentID));
					$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
						// vars
						$thisID = get_the_ID();
						$icon = get_field('icon_grey');
						$title = get_field('title');
						$description = get_field('intro');
						$link = get_field('button_link');
					?>

						<div class="col-sm-12 col-md-3">
							<p style="width: 130px; height: 80px;"><?php echo $icon; ?></p>
							<h3 class="text-primary"><a href="<?php the_permalink(); ?>" title="<?php echo $service; ?>"><?php echo $title; ?></a></h3>
							<p><?php echo $description; ?></p>
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

