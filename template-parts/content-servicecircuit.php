<?php
/**
 * Template part for displaying page content in servicecircuit.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tetcom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
	$icon = get_field('icon');
?>

	<div class="container-fluid"  style="background-color: #000000;">
		<div class="row">
			<div class="container">
				<div class="row">
						<div class="col pt-4">
							<p style="width: 130px; height: 80px; margin-bottom:0px;"><?php echo $icon; ?></p>
							<h2 class="text-primary"><?php the_field('title'); ?></h2>
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
										<p class="introText text-primary pt-4"><?php echo $mainid; ?>
											<?php the_field('intro'); ?></p>
										<p><?php the_field('description'); ?></p>



									<?php

										$post_object = get_field('download');

										if( $post_object ): 

											// override $post
											$post = $post_object;
											setup_postdata( $post ); 

											?>
 
											<a href="<?php the_field('download_document'); ?>" class="btn greyBtn" target="_blank">Download system information</a>


										<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>



								</div>
								<div class="col-md-8">
									<img src="<?php the_post_thumbnail_url(); ?>">
									<p class="introText text-primary">Enquire about <?php the_field('title'); ?></p>
									<?php echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');?>
									<p class="introText">or call us for a quote on <span class="text-primary">0844 567 7667</span></p>
								</div>
						</div>
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
INTRO SECTION
-->
<?php if( get_field('service_intro_left_column') ) { ?>

	<div class="container-fluid">
		<div class="row">
			<div class="container pt-5">
				<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="p-1">
								<?php the_field('service_intro_left_column'); ?>
							</div>
						</div>
				</div>
			</div>
		<div class="container-fluid footerWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/single-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
		</div>
		</div>
	</div>

<?php } ?>

	

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
						<?php 

						$posts = get_field('select_system');
				        $postPos = 0;


						if( $posts ): ?>
						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post);
								      $postPos = $postPos +1;

								      //Pull in the gallery images

										$count = count(get_field('system_gallery')); 
										$images = get_field('system_gallery');
										$num = 0;



								//if $postPos is even, content left, image right

    							if( $postPos % 2 == 0 ){
								?>
								<div class="col-md-6 pt-4 text-right">
						            <h2 class="text-primary"><?php the_title(); ?></h2>
						            <p><?php the_content(); ?></p>
						            <!-- HIDE THIS BUTTON AS NOT NEEDED NOW-->
	          					    <!-- <a href="<?php the_permalink(); ?>" class="btn greenBtn">More info</a> -->

						        </div>
								<div class="col-md-6 pt-4">
<!-- IMAGE SLIDER LEFT-->
									<div class="slider-holder" id="<?php echo 'slider'.$postPos; ?>">
									<?php
										if($count > '1'){
									?>

									      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow-left.png" class="prev" alt="Prev">
									      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow-right.png" class="next" alt="Next">
									<?php
									}
									?>									    

									      <div class="slider-outer">
									        <div class="slider-inner">
											<?php 
											if( $images ): ?>
											        <?php foreach( $images as $image ): 
											        	if($num > 0) {
											        		?>
										                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="400"/>
										                     <?php 
										                     $num++;
										                 }else{
										                     ?>
										                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="400" class="active"/>
										                     <?php 
										                     $num++;
										                 }
										                 ?>

											        <?php endforeach; ?>
											<?php endif; ?>
									        </div>
									      </div>
									</div>
<!-- END IMAGE SLIDER -->
						        </div>
						        <?php
						        //if $postPos is not even, content right, image left

								    }else{
						    	?>
								<div class="col-md-6 pt-4">
<!-- IMAGE SLIDER RIGHT -->
									<div class="slider-holder text-right" id="<?php echo 'slider'.$postPos; ?>">
									<?php
										if($count > '1'){
									?>
								      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow-left.png" class="prev" alt="Prev">
								      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow-right.png" class="next" alt="Next">
								      <?php
										  }
									  ?>

									    <div class="slider-outer">
									        <div class="slider-inner">


											<?php
											if( $images ): ?>
											        <?php foreach( $images as $image ): 
											        	if($num > 0) {
											        		?>
										                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="400" />
										                     <?php 
										                     $num++;
										                 }else{
										                     ?>
										                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="400" class="active"/>
										                     <?php 
										                     $num++;
										                 }
										                 ?>

											        <?php endforeach; ?>
											<?php endif; ?>
									        </div>
										</div>
									 

									    </div>
<!-- END IMAGE SLIDER -->
						        </div>
								<div class="col-md-6 pt-4">
						            <h2 class="text-primary"><?php the_title(); ?></h2>
						            <p><?php the_content(); ?></p>
						            <!-- HIDE THIS BUTTON AS NOT NEEDED NOW-->
	          					    <!-- <a href="<?php the_permalink(); ?>" class="btn greenBtn">More info</a> -->
						        </div>

						    	<?php
						    		}
						    	?>
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
