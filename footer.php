<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tetcom
 */

?>

	</div><!-- #content -->

		<?php 
		$templateName = esc_html( get_page_template_slug( $post->ID ) );

		if ($templateName == 'templates/contact.php'){
		?>
		<div class="container-fluid" style="background-color: #ffffff;">
			<div class="row">
				<div class="footerWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/footer-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
				</div>
			</div>
		</div>
		<?php
		}else{
		?>
		<div class="container-fluid" style="background-color: #ebebeb;">
			<div class="row">
				<div class="footerWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/footer-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
				</div>
			</div>
		</div>
		<?php
		}
		?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-6 text-center pt-4 pb-4 text-white">
					<a href="/">
				 	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/tetcom_logo.svg" width="135" alt=""></a><br />
				 	<div class="footer-menu ">
				 		<nav  class="navbar navbar-expand-md  justify-content-center">
					            <?php
					            $args = array(
					              'theme_location' => 'secondary',
					              'depth'      => 2,
					              'container'  => false,
					              'menu_class'     => 'navbar-nav',
					              'walker'     => new Bootstrap_Walker_Nav_Menu()
					              );
					            if (has_nav_menu('secondary')) {
					              wp_nav_menu($args);
					            }
					            ?>						</nav>
					</div>

				 	<p class="light">Tetcom Ltd, London Court, <br />
				 	T64 London Road, Southampton SO15 2AH<br />
				 	&copy; Copyright <?php echo date('Y'); ?> Tetcom Ltd. All Rights Reserved</p>
				 	<div class="row justify-content-center">
					            <!-- SOCIAL MEDIA ICONS -->
					            	<div class="socialBoxMB text-center ml-3 d-flex justify-content-around">
					            		<div class="tw-icon">
						            		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.svg">
						            	</div>
					            		<div class="fb-icon">
					            			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb.svg">
						            	</div>
					            		<div class="in-icon">
					            			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/in.svg">
					            		</div>
					            	</div>
		            </div>
				</div>



			</div>
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
