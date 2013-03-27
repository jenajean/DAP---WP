<?php
	/* Template Name: Heroes and Mentors */
?>

<?php get_header(); the_post(); ?>




<nav class="main-nav">
			<ul>
				<li class="first-main-nav-item"><a href="http://www.foodwecook.com">Home</a></li>
				<li><a href="http://www.foodwecook.com/about" class="selected">About</a></li>
				<li><a href="http://www.foodwecook.com/piano-services">Services</a></li>
				<li><a href="http://www.foodwecook.com/pianos-for-sale">Pianos for Sale</a></li>
				<li><a href="http://www.foodwecook.com/press">Press</a></li>
				<li><a href="http://www.foodwecook.com/contact">Contact</a></li>
			</ul>
		</nav>
		<div id="sub-nav-wrap">
			<nav class="sub-nav about-sub-nav">
				<ul>
					<li class="first-sub-nav-item"><a href="http://www.foodwecook.com/about">About Us</a></li>
					<li><a href="http://www.foodwecook.com/about-heroes-and-mentors" class="selected">Heroes and Mentors</a></li>
					<li><a href="http://www.foodwecook.com/about-what-people-say">What People Say</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div> 


<div class="wrap group"> 
	<div id="dynamic-content-wrap">
		<div id="dynamic-content" class="group">
			<div class="side-nav-section">
				<nav class="side-nav">
					<ul>
						<li class="first-side-nav-item"><a href="#about-heroes-and-mentors-Jack-Coffer" rel="about-heroes-and-mentors-Jack-Coffer" class="selected">Jack Coffer</a></li>
						<li><a href="#about-heroes-and-mentors-Virgil-Smith" rel="about-heroes-and-mentors-Virgil-Smith">Virgil Smith</a></li>
						<li><a href="#about-heroes-and-mentors-Richard-Davenport" rel="about-heroes-and-mentors-Richard-Davenport">Richard Davenport</a></li>
						<li><a href="#about-heroes-and-mentors-Norman-Neblett" rel="about-heroes-and-mentors-Norman-Neblett">Norman Neblett</a></li>
						<li><a href="#about-heroes-and-mentors-Randy-Morton-and-Mike-Farnell" rel="about-heroes-and-mentors-Randy-Morton-and-Mike-Farnell">Randy Morton and Mike Farnell</a></li>
						<li><a href="#about-heroes-and-mentors-Bill-Garlick" rel="about-heroes-and-mentors-Bill-Garlick">Bill Garlick</a></li>
						<li><a href="#about-heroes-and-mentors-Michael-Spreeman" rel="about-heroes-and-mentors-Michael-Spreeman">Michael Spreeman</a></li>
<!-- 
						<li><a href="#about-heroes-and-mentors-David-Stanwood" rel="about-heroes-and-mentors-David-Stanwood">David Stanwood</a></li>
 -->
						<li><a href="#about-heroes-and-mentors-David-Abell" rel="about-heroes-and-mentors-David-Abell">David Abell</a></li>
					
					</ul>
				</nav>
			</div>
			<div class="central-section">
				<div class="central-section-content">
					<div class="static-content group">
						<h2>Heroes and Mentors</h2>
						<p>
							I want to honor the people in the world of pianos that have inspired, challenged, intimidated, and taught me.
						</p>
					</div> <!-- end static content -->
					<div class="changing-content">
						<div id="about-heroes-and-mentors-Jack-Coffer" class="selected">
							<?php echo get_post_meta($post->ID, "jack-coffer", true);?>
						</div>
						<div id="about-heroes-and-mentors-Virgil-Smith">
							<?php echo get_post_meta($post->ID, "virgil-smith", true);?>
						</div>
						<div id="about-heroes-and-mentors-Richard-Davenport">
							<?php echo get_post_meta($post->ID, "richard-davenport", true);?>
	
						</div>
						<div id="about-heroes-and-mentors-Norman-Neblett">
							<?php echo get_post_meta($post->ID, "norman-neblett", true);?>
						</div>
						<div id="about-heroes-and-mentors-Randy-Morton-and-Mike-Farnell">
							<?php echo get_post_meta($post->ID, "randy-morton-and-mike-farnell", true);?>
						</div>
						<div id="about-heroes-and-mentors-Bill-Garlick">
							<?php echo get_post_meta($post->ID, "bill-garlick", true);?>
						</div>
						<div id="about-heroes-and-mentors-Michael-Spreeman">
							<?php echo get_post_meta($post->ID, "michael-spreeman", true);?>
						</div>
						<!-- 
<div id="about-heroes-and-mentors-David-Stanwood">
							<?php echo get_post_meta($post->ID, "david-stanwood", true);?>
	
						</div>
 -->
						<div id="about-heroes-and-mentors-David-Abell">
							<?php echo get_post_meta($post->ID, "david-abell", true);?>
	
						</div>
					</div><!-- end changing content -->
				</div> <!-- end central section-content --> 
			</div> <!-- end central section -->
		</div> <!-- END '.DYNAMIC-CONTENT' JS replaces this content-->
	</div> <!-- END dynamic-content-wrap -->
	
		<?php get_sidebar(); ?>
	
</div> <!-- END '.WRAP' -->






	<?php get_footer(); ?>
	
	
	