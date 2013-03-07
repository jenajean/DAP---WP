<?php
	/* Template Name: Services */
?>

<?php get_header(); the_post(); ?>

		<nav class="main-nav">
			<ul>
				<li class="first-main-nav-item"><a href="http://www.foodwecook.com">Home</a></li>
				<li><a href="http://www.foodwecook.com/about">About</a></li>
				<li><a href="http://www.foodwecook.com/piano-services" class="selected">Services</a></li>
				<li><a href="http://www.foodwecook.com/pianos-for-sale">Pianos for Sale</a></li>
				<li><a href="http://www.foodwecook.com/press">Press</a></li>
				<li><a href="http://www.foodwecook.com/contact">Contact</a></li>
			</ul>
		</nav>
		<div id="sub-nav-wrap">
			<nav class="sub-nav piano-services-sub-nav">
				<ul>
					<li class="first-sub-nav-item"><a href="http://www.foodwecook.com/piano-services" class="selected">Piano Services</a></li>
					<li><a href="http://www.foodwecook.com/piano-services-custom-restoration">Custom Restoration</a></li>
					<li><a href="http://www.foodwecook.com/piano-services-things-you-should-know">Things you Should Know</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div> 


<div class="wrap group"> 
	<div id="dynamic-content-wrap">
		<div id="dynamic-content">
			<div class="side-nav-section">
				<nav class="side-nav">
					<ul>
						<li class="first-side-nav-item"><a href="#piano-services-real-story" rel="piano-services-real-story" class="selected">Complete Piano Service</a></li>
						<li><a href="#piano-services-tuning" rel="piano-services-tuning">Tuning</a></li>
						<li><a href="#piano-services-action-regulation" rel="piano-services-action-regulation">Action Regulation</a></li>
						<li><a href="#piano-services-voice-tone-building" rel="piano-services-voice-tone-building">Voicing/Tone Building</a></li>
						<li><a href="#piano-services-action-performance" rel="piano-services-action-performance">Action Performance</a></li>
					</ul>
				</nav>
			</div>
			<div class="central-section">
				<div class="central-section-content">
	
				<div class="static-content group">
					<img src="http://www.foodwecook.com/images/David-working.jpg" />
					<?php echo get_post_meta($post->ID, "piano-services", true);?>
				</div>
				<div class="changing-content">
					<div id="piano-services-real-story" class="selected">
						<?php echo get_post_meta($post->ID, "piano-services-real-story", true);?>
					</div>
					<div id="piano-services-tuning">
						<?php echo get_post_meta($post->ID, "piano-services-tuning", true);?>
					</div>
					<div id="piano-services-action-regulation">
						<?php echo get_post_meta($post->ID, "piano-services-action-regulation", true);?>
					</div>
					
					<div id="piano-services-voice-tone-building">
						<?php echo get_post_meta($post->ID, "piano-services-voice-tone-building", true);?>
					</div>
					<div id="piano-services-action-performance">
						<?php echo get_post_meta($post->ID, "piano-services-action-performance", true);?>
					</div>
				</div> <!-- end changing content -->
			
				</div>		<!-- end central-section-content -->
			</div> <!-- central-section -->
		</div> <!-- END '.DYNAMIC-CONTENT' JS replaces this content-->
	</div> <!-- END dynamic-content-wrap -->
	
	<?php get_sidebar(); ?>

</div> <!-- END '.WRAP' -->

	<?php get_footer(); ?>