<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
			<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
	<style>
		#top-bar-menu { display:none;}
		.gridsy { margin-top:.5rem; }

.off-canvas-content { 



background: #360033; /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #360033 , #0b8793); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #360033 , #0b8793); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        

}



		.ex-off-canvas-content{
			background: #f0b195; /* Old browsers */
			background: -moz-linear-gradient(top,  #f0b195 0%, #f67280 30%, #f67280 30%, #c06c84 54%, #6c5b7b 84%, #6c5b7b 84%, #355c7d 100%); /* FF3.6-15 */
			background: -webkit-linear-gradient(top,  #f0b195 0%,#f67280 30%,#f67280 30%,#c06c84 54%,#6c5b7b 84%,#6c5b7b 84%,#355c7d 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom,  #f0b195 0%,#f67280 30%,#f67280 30%,#c06c84 54%,#6c5b7b 84%,#6c5b7b 84%,#355c7d 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0b195', endColorstr='#355c7d',GradientType=0 ); /* IE6-9 */
			}		
		body.home #content #inner-content { padding:0;}
			@media screen and ( max-width: 800px){
		}
		
	</style>


	
	</head>
		
	<body class="akiba-gradient" <?php body_class(); ?>>
	 <?php get_template_part( 'parts/nav', 'default' ); ?>
