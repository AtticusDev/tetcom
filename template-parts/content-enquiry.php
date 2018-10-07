<!--
ENQUIRY FORM SECTION
-->
	<div class="container-fluid">
		<div class="row">
			<div class="footerWave" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/enquiry-grey-wave.svg); background-position: center top; background-repeat: no-repeat; background-size: 2686px;">
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #ebebeb;">
		<div class="row">
			<div class="container">
				<div class="row">
						<div class="col-md-4 text-right mt-4">
							<h2>How can we help you today?</h2>
						</div>
						<div class="col">
						<?php
							echo do_shortcode('[gravityform id="1" title="false" description="false"]');
						?>
						</div>
				</div>
			</div>
		</div>
	</div>
