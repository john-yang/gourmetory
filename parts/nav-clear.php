<div class="off-canvas-wrapper">
			
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
		<!-- OFF CANVAS CONTENT: your off canvas content will start here -->

		<div class="off-canvas position-right" id="off-canvas" data-off-canvas data-position="right">
			<?php get_template_part('parts/nav','offcanvas'); ?>
		</div>

		<!-- OFF CANVAS CONTENT: and ends here -->

		<div class="off-canvas-content" data-off-canvas-content><!-- closes at the footer -->
			<div class="clear-bar-wrap clearfix">
			<div class="clear-bar row" id="clear-bar-menu">
				<div class="clear-bar-left small-6 medium-4 large-3 text-left">
				      <a id="logo"href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/resources/logo-tall.png"></a>
				</div>
				
				<div class="clear-bar-right small-6 medium-3 large-2 text-right large-offset-7">
				   <a class="burger" data-toggle="off-canvas">MENU<span class="burger-menu"></span></a>
				</div>
			</div>
			</div>
