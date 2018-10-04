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



	<div class="container-fluid" style="background-color: #000000;">
		<div class="row">
			<div class="container">
				<div class="row">
						<div class="col text-primary pt-4">
						<?php
							the_content();
						?>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #ebebeb;">
			<div class="row">
				<div class="blackBottomWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/black-bottom-wave.svg); background-position: center bottom; background-repeat: no-repeat; background-size: 2686px;">
				</div>
			</div>
	</div>
	<div class="container-fluid"  style="background-color: #ebebeb;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-sm col-md-4 pt-4">
							<h2><?php the_field('support_title'); ?></h2>
					</div>

				<?php if( have_rows('support_panels') ): 
					 while( have_rows('support_panels') ): the_row(); 
					// vars
					$icon = get_sub_field('icon');
					$title = get_sub_field('title');
					$email = get_sub_field('email');
					$color = get_sub_field('color_selection');
				?>
				<div class="col-sm col-md-4">
					<div class="contactPanel text-center text-white" style="background-color: #<?php echo $color; ?>">
						<div class="d-flex justify-content-center">
							<p style="width: 60px; text-align: center;"><?php echo $icon; ?></p>
						</div>
						<h3><?php echo $title; ?></h3>
						<p><a href="mailto:<?php echo $email; ?>" style="color: white;"><?php echo $email; ?></a></p>
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
			<div class="footerWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/contact-grey-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
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
					<div class="col-md-12 mt-5">
						<strong class="text-primary">LATEST VIDEOS</strong>
						<h2>Learn more through our videos</h2>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">

						<?php 
						$args = array( 'post_type' => 'video', 'posts_per_page' => '20', 'orderby' => 'rand' );
						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
						 $video = get_field( "youtube_code" );
						?>
						<div class="col-md-4 mt-4">
							<div class="videoPanel">
							<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							<p class="videoTitle text-primary"><?php the_title();?></p>
							<?php the_content();?>
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


<!--
DOWNLOADS SECTION
-->
	<div class="container-fluid">
		<div class="row">
			<div class="footerWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/enquiry-grey-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
			</div>
		</div>
	</div>

	<div class="container-fluid"  style="background-color: #ebebeb;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mt-5">
						<strong class="text-primary">FIND OUT MORE INFORMATION</strong>
						<h2>Downloads</h2>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row" style="padding-left:15px; padding-right:15px;">
					<ul class="downloadSection">
						<?php 
						$args = array( 'post_type' => 'download', 'posts_per_page' => '20', 'orderby' => 'ASC' );
						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
						 $download = get_field( "download_document" );
						?>
						<li>
							<div class="d-flex pt-3 pb-3">
								<div style="width: 85%">
									<p><a href="<?php echo $download; ?>" target="_blank"><?php the_title();?></a></p>
									<?php
									echo wp_trim_words( get_the_content(), 18, '...' );
									?>
<!--									<p><?php the_content();?></p>-->
								</div>
								<div  style="width: 15%">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf-download.svg">
								</div>
							</div>
						</li>
						<?php 
						endwhile;
						wp_reset_query();
						?>

				</div>
			</div> <!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->




</article><!-- #post-## -->
