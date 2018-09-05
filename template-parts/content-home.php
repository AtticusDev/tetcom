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

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center mt-4 mb-4 bg-primary p-5 text-white">

						<?php 
						$args = array( 'post_type' => 'quote', 'posts_per_page' => '2', 'orderby' => 'rand' );
						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
						 $quotename = get_field( "author" );
						 $quotetitle = get_field( "title" );
						?>

						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/quote-symbol-white.png">
						<div class="largeQuote text-white"><?php the_content(); ?></div>
						<p><?php echo $quotename ?></p>
						<p><?php echo $quotetitle ?></p>

						<?php 
						endwhile;
						wp_reset_query();
						?>
					</div>
				</div>
			</div> <!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->


</article><!-- #post-## -->
