<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	


	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/ie8-and-down.css" />
	<![endif]-->
	
	<!--[if lte IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/ie8-and-down.css" />
	<![endif]-->
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
	
	<?php wp_enqueue_script("jquery"); ?>
	
	<!-- TYPKIT BELOW -->
	<script type="text/javascript" src="//use.typekit.net/lsv1zcy.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<!-- TYPKIT ABOVE -->
	
	<script type="text/javascript" src="http://www.davidandersenpianos.com/html5shiv.js"></script>
	<script type="text/javascript" src="http://www.davidandersenpianos.com/html5shiv-printshiv.js"></script>
	<!--[if !IE 8]><!-->
    <script type="text/javascript" src="http://www.davidandersenpianos.com/script.js"></script>
	<!--<![endif]-->
	<!--[if IE 8]>
    <script type="text/javascript" src="http://www.davidandersenpianos.com/IE8_script.js"></script>
	<![endif]-->

	<script type="text/javascript" src="http://www.davidandersenpianos.com/modernizr.js"></script>
	

</head>



<body <?php body_class(); ?>>

	
	<div class="top-background">
	<div class="wrap">
		<header><h1><a href="http://www.davidandersenpianos.com">David Andersen Pianos</a></h1></header>
