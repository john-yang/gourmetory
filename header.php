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
.featured-image img { border-radius:.25rem;}
.entry-content img { border-radius:.5rem;}	
h3.title { font-size:1.2rem;letter-spacing:-0.0925rem;}
h1.entry-title { letter-spacing:-0.125rem;}
p.byline { font-size:.75rem;}
#content #inner-content { padding:2rem 0;}
.title-bar { width:100%;}
.title-bar .row.expanded { border-bottom:1px solid #aaa;}

.header {
  padding: 10rem 0;
  background: url("http://placehold.it/2000x500&text=this is a header") center center no-repeat;
  background-size: cover; }

[data-sticky] {
  width: 100%; }

.title-bar {
  padding: 2rem;
  transition: padding .25s ease; }

.is-stuck .title-bar {
  padding: 1rem;
  transition: padding .25s ease; }




</style>

	
	</head>
		
	<body <?php body_class(); ?>>
	 <?php get_template_part( 'parts/nav', 'sticky' ); ?>
