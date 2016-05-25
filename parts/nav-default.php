<div class="off-canvas-wrapper">
			
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
		<!-- OFF CANVAS CONTENT: your off canvas content will start here -->

		<div class="off-canvas position-right" id="off-canvas" data-off-canvas data-position="right">
			<?php get_template_part('parts/nav','offcanvas'); ?>
		</div>

		<!-- OFF CANVAS CONTENT: and ends here -->

		<div class="off-canvas-content" data-off-canvas-content><!-- closes at the footer -->
			<div class="default-bar-wrap clearfix">
			<div class="default-bar row align-middle" id="default-bar-menu">
				<div class="default-bar-left text-left small-6 medium-4 large-3">
				      <a id="logo"href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/resources/logo.png"></a>
				</div>
				
				<div class="default-bar-right small-6 medium-3 large-2 medium-offset-4 large-offset-7 text-right">
				   <a id="burger" data-toggle="off-canvas">MENU<span style="margin-left:1rem;"class="burger-menu"></span></a>
				</div>
			</div>
			</div>
