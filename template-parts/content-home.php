<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tetcom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
						<div class="col">
						<?php
							the_content();
						?>
						</div>
				</div>
			</div>
		</div>
	</div>

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

<!--
ENQUIRY FORM SECTION
-->

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
						<div class="col">
						<?php
							echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
						?>
						</div>
				</div>
			</div>
		</div>
	</div>


</article><!-- #post-## -->