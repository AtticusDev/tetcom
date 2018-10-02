<?php
/**
 * Template part for displaying page content in about.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tetcom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid"  style="background-color: #000000;">
		<div class="row">
			<div class="container">
				<div class="row">
						<div class="col-md-12">
							<h2 class="text-primary"><?php the_title(); ?></h2>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
			<div class="row">
				<div class="container-fluid" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/black-bottom-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px; background-color: #ebebeb;">
					<div class="container">
						<div class="row">
								<div class="col-md-4" style="padding-top: 150px;">
										<p><?php the_content(); ?></p>

								<a href="/contact/" class="btn blackBtn">Make an enquiry</a>

								</div>
								<div class="col-md-8">
									<img src="<?php the_post_thumbnail_url(); ?>">
								</div>
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
						$posts = get_field('select_product');
				        $postPos = 0;

						if( $posts ): ?>
						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); 
						        ?>
								<div class="col-md-6 pt-4">
						            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						            <p><?php the_content(); ?></p>
						        </div>
								<div class="col-md-6 pt-4">
						            <img src="<?php the_post_thumbnail_url(); ?>">
								</div>
						    <?php endforeach; ?>
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>						
				</div>
			</div>
		</div>
	</div>


<?php
get_template_part( 'template-parts/content', 'moreservice' );
?>




</article><!-- #post-## -->
