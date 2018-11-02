<!--
VIDEO SECTION
-->

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center mt-5">
						<strong class="text-primary">LATEST VIDEOS</strong>
						<h2>Learn more through our videos</h2>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">

						<?php 
						$args = array( 'post_type' => 'video', 'posts_per_page' => '3', 'orderby' => 'rand' );
						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
						 $video = get_field( "youtube_code" );
						?>
						<div class="col-md-4 mt-4">
							<div class="videoPanel">
							<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							<p class="videoTitle text-primary"><?php the_title();?></p>
							<p><?php echo wp_trim_words( get_the_content(), 12, '...' ); ?></p>
							</div>
						</div>
						<?php 
						endwhile;
						wp_reset_query();
						?>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
					    <a href="/support/" class="btn greenBtn">View all videos</a>
					</div>
				</div>
			</div> <!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->


