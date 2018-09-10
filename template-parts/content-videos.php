<!--
VIDEO SECTION
-->

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
						<div class="col-md-4 text-center mt-4 mb-4 p-5">
						<p>
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</p>
						<p><?php the_title();?></p>
						<p><?php the_content();?></p>
						</div>
						<?php 
						endwhile;
						wp_reset_query();
						?>
				</div>
			</div> <!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->


