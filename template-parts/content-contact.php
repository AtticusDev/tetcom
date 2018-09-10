<?php
/**
 * Template part for displaying page content in contact.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tetcom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
get_template_part( 'template-parts/content', 'enquiry' );
?>


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
DEPARTMENTS SECTION
-->

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
				<?php if( have_rows('contact_panels') ): 
					 while( have_rows('contact_panels') ): the_row(); 
					// vars
					$icon = get_sub_field('icon');
					$title = get_sub_field('title');
					$telephone = get_sub_field('telephone');
					$email = get_sub_field('email');
					$color = get_sub_field('color_selection');
				?>
				<div class="col-sm col-md-4" style="background-color: #<?php echo $color; ?>">
					<p style="width: 100px;"><?php echo $icon; ?></p>
					<h3><?php echo $title; ?></h3>
					<p><?php echo $telephone; ?></p>
				    <p><?php echo $email; ?></p>
				</div>
					<?php endwhile;
				endif; ?>
				</div>
			</div>
		</div>
	</div>





</article><!-- #post-## -->
