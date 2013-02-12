<?php
	/* Template Name: Custom Restoration */
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
					<li class="first-sub-nav-item"><a href="http://www.foodwecook.com/piano-services">Piano Services</a></li>
					<li><a href="http://www.foodwecook.com/piano-services-custom-restoration" class="selected">Custom Restoration</a></li>
					<li><a href="http://www.foodwecook.com/piano-services-things-you-should-know">Things you Should Know</a></li>
				</ul>
			</nav>
		</div
	</div>
</div> 


<div class="wrap group"> 
<div id="dynamic-content-wrap">
	<div id="dynamic-content">
		<div class="side-nav-section">
			<nav class="side-nav">
				<ul>
						<li class="first-side-nav-item"><a href="#piano-services-custom-restoration" rel="piano-services-custom-restoration" class="selected">Custom Restoration</a></li>
						<li><a href="#ptd" rel="ptd">Precision Touch Design (PTD) by Stanwood</a></li>
						<li><a href="#sala" rel="sala">Stanwood Adjustable Leverage Action, or SALA</a></li>
						<li><a href="#erwin-soundboard" rel="erwin-soundboard">Soundboards by Dale Erwin</a></li>
				</ul>
			</nav>
		</div>
		<div class="central-section">			
			<div class="central-section-content">
				<div class="static-content">
					<?php echo get_post_meta($post->ID, "custom-restoration", true);?>
					
				</div>
				<div class="changing-content">
					<div id="piano-services-custom-restoration" class="selected">
							<?php echo get_post_meta($post->ID, "piano-services-custom-restoration", true);?>
					</div>

					<div id="ptd">
							<?php echo get_post_meta($post->ID, "ptd", true);?>
					</div>
					
					<div id="sala">
							<?php echo get_post_meta($post->ID, "sala", true);?>
					</div>
					
					<div id="erwin-soundboard">
							<?php echo get_post_meta($post->ID, "erwin-soundboard", true);?>
					</div>
				</div>
		</div><!--  end of central-sect-content -->
		</div><!-- end central-section -->
	</div> <!-- END '.DYNAMIC-CONTENT' JS replaces this content-->
</div> <!-- END dynamic-content-wrap -->

	<?php get_sidebar(); ?>

</div> <!-- END '.WRAP' -->

	<?php get_footer(); ?>