	<div class="container-fluid" style="background-color: #000000;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-white pt-5 text-center">
						<?php the_field('product_intro'); ?>
					</div>
				</div>
				<div class="row justify-content-center">
					<?php 
					$args = array( 'post_type' => 'service', 'posts_per_page' => '5', 'order' => 'ASC' );
					$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
					// vars
					$icon = get_field('icon');
					$title = get_field('title');
					$description = get_field('intro');
					$link = get_field('button_link');
				?>
				<div class="col-xs-6 col-md-4 d-flex flex-column servicePanel">
					<div class="text-center">
						<p class="serviceIcon" style="margin-left: auto; margin-right: auto;"><?php echo $icon; ?></p>
						<h3 class="text-primary"><a href="<?php the_permalink(); ?>" title="<?php echo $service; ?>"><?php echo $title; ?></a></h3>
						<p class="text-white"><?php echo wp_trim_words( $description, 18 ); ?></p>
					</div>
					<div class="mt-auto text-center">
				    <a href="<?php the_permalink(); ?>" title="<?php echo $service; ?>" class="btn readmoreBtn">Read more</a>
					</div>
				</div>
					<?php 
					endwhile;
					wp_reset_query();
					?>
				</div>
			</div>
		</div>
	</div>

