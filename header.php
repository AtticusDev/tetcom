<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tetcom
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


		<div class="container-fluid sticky-top" style="background-color: #000000;">
			<div class="row">
				<div class="container">
					    <nav class="navbar navbar-expand-lg navbar-dark">
					    		<a class="navbar-brand" href="/">
							    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/tetcom_logo.svg" width="135" alt="">
								</a>
								<div class="navbar-text">
								    <span class="text-white">Call us on</span><br>
									<h3 class="text-primary">0844 567 7667</h3>
								</div>

								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
								</button>
						   		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					            <?php
					            $args = array(
					              'theme_location' => 'primary',
					              'depth'      => 2,
					              'container'  => false,
					              'menu_class'     => 'navbar-nav ml-auto',
					              'walker'     => new Bootstrap_Walker_Nav_Menu()
					              );
					            if (has_nav_menu('primary')) {
					              wp_nav_menu($args);
					            }
					            ?>
					            <!-- SOCIAL MEDIA ICONS / shows on mobile -->
					            	<div class="socialBoxMB text-center">
					            		<div class="d-flex justify-content-around">
						            		<div class="tw-icon">
							            		<a href="https://twitter.com/tetcomuk" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.svg"></a>
							            	</div>
						            		<div class="fb-icon">
						            			<a href="https://www.facebook.com/TetcomLtd/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb.svg"></a>
							            	</div>
						            		<div class="in-icon">
						            			<a href="https://www.linkedin.com/company/tetcom/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/in.svg"></a>
						            		</div>
						            	</div>
					            	</div>


					      		</div>
				    	</nav>
				</div> <!-- close container -->
			</div>
		</div>

	<div id="content" class="site-content">
