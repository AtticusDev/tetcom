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
						$args = array( 'post_type' => 'video', 'posts_per_page' => '10', 'orderby' => 'rand' );
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
DOWNLOADS SECTION
-->

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">

						<?php 
						$args = array( 'post_type' => 'download', 'posts_per_page' => '20', 'orderby' => 'rand' );
						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
						 $download = get_field( "download_document" );
						?>
						<div class="col-md-6 text-center mt-4 mb-4 p-5">
							<div class="row">
								<div style="width: 80%">
									<p><a href="<?php echo $download; ?>" target="_blank"><?php the_title();?></a></p>
									<p><?php the_content();?></p>
								</div>
								<div  style="width: 20%">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf-download.svg">
								</div>
							</div>
						</div>
						<?php 
						endwhile;
						wp_reset_query();
						?>

				</div>
			</div> <!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->




</article><!-- #post-## -->
