<?php
/**
 * Template part for displaying page content in whatwedo.php
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
						<div class="col text-white pt-4">
						<h2 class="text-primary"><?php
							the_title();
						?>
						</h2>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-position: center bottom;  background-repeat: no-repeat; padding: 0px;">
		<div class="row d-flex" style="margin:0;">
			<div class="blackBottomWave mb-auto" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/black-bottom-wave.svg); background-position: center bottom; background-repeat: no-repeat; background-size: 2686px;">
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 pt-4">
						<p><?php the_content(); ?></>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
if(is_page('terms-and-conditions')){
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row" style="padding-left:15px; padding-right:15px;">
					<ul class="downloadSection">
						<?php 
						$args = array( 'post_type' => 'download', 'posts_per_page' => '20', 'orderby' => 'ASC', 

						'tax_query' => array(
								array(
									'taxonomy' => 'category',
									'field'    => 'slug',
									'terms' => 'terms'
								),
							),
						 );
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

<?php
}
?>




<?php
get_template_part( 'template-parts/content', 'enquiry' );
?>



</article><!-- #post-## -->
