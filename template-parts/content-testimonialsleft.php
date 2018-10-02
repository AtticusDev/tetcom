<!--
TESTIMONIAL SECTION
-->

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row  d-flex align-items-center">

						<?php 
						$args = array( 'post_type' => 'quote', 'posts_per_page' => '2', 'orderby' => 'rand' );
						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
						 $quotename = get_field( "author" );
						 $quotetitle = get_field( "title" );
						?>

						<div class="col-md-4">
							<div class="quotePanel">
								<div class="mb-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quote-marks.svg" width="37"></div>
								<div class="largeQuote"><?php the_content(); ?></div>
								<p class="text-primary mb-0"><?php echo $quotename ?></p>
								<p class="text-primary mt-0"><?php echo $quotetitle ?></p>
							</div>
						</div>

						<?php 
						endwhile;
						wp_reset_query();
						?>
						<div class="col-md-4 text-left mt-4 mb-4 p-5">
						<strong class="text-primary">CLIENT TESTIMONIALS</strong>
						<h2>What do the people that matter think about us</h2>
						</div>
				</div> <!-- end row -->
			</div> <!-- end container -->
		</div><!-- end row -->
	</div><!-- end container -->
