<!--
TESTIMONIAL SECTION
-->

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
						<div class="col-md-4 text-center mt-4 mb-4 p-5">
							<p>Client Testimonials</p>
							<p>What do the people that matter think about us</p>
						</div>

						<?php 
						$args = array( 'post_type' => 'quote', 'posts_per_page' => '2', 'orderby' => 'rand' );
						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
						 $quotename = get_field( "author" );
						 $quotetitle = get_field( "title" );
						?>

						<div class="col-md-4 text-center mt-4 mb-4 bg-primary p-5 text-white">
							<div class="largeQuote text-white"><?php the_content(); ?></div>
							<p><?php echo $quotename ?></p>
							<p><?php echo $quotetitle ?></p>
						</div>

						<?php 
						endwhile;
						wp_reset_query();
						?>
					</div>
				</div>
			</div> <!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
