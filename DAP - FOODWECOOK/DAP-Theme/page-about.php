
<?php
	/* Template Name: About */
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
					<li class="first-sub-nav-item"><a href="http://www.foodwecook.com/about" class="selected">About Us</a></li>
					<li><a href="http://www.foodwecook.com/about-heroes-and-mentors">Heroes and Mentors</a></li>
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
						<li class="first-side-nav-item"><a href="#about-our-team-of-artisans" rel="about-our-team-of-artisans" class="selected">Our Team of Artisans</a></li>
						<li><a href="#about-david-andersen" rel="about-david-andersen">David Andersen</a></li>
						<li><a href="#about-stephen-bellieu" rel="about-stephen-bellieu">Stephen Bellieu</a></li>
						<li><a href="#about-dale-erwin" rel="about-dale-erwin">Dale Erwin</a></li>
						<li><a href="#about-phenoyd-ezra" rel="about-phenoyd-ezra">Phenoyd Ezra</a></li>
					</ul>
				</nav>
			</div>
			<div class="central-section">
				<div class="central-section-content">
					<div class="static-content group">
						<img src="http://www.foodwecook.com/images/about-david-andersen-pianos-main-pic.jpg" alt="david andersen"/>
						<h2>About Us</h2>
						<p>These are my honored colleagues; they have mentored, taught, and "been there" along the way; I'm grateful to all of them.</p>
					</div><!-- end static section -->
					<div class="changing-content">
						<div id="about-our-team-of-artisans" class="selected">
						
							<?php echo get_post_meta($post->ID, "about-our-team-of-artisans", true);?>
					
						</div>
						<div id="about-david-andersen">
						
								<?php
								$post_id = 293;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
						
								
						</div>
						<div id="about-stephen-bellieu">
						
								<?php
								$post_id = 299;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
						
	
						</div>
						<div id="about-dale-erwin">
								<?php
								$post_id = 302;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>							
						</div>
						<div id="about-phenoyd-ezra">
								<?php
								$post_id = 305;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>	
						</div>
					</div><!-- end changing -->
				</div><!-- end central section content -->
			</div> <!-- end central section -->
		</div> <!-- END '.DYNAMIC-CONTENT' JS replaces this content-->
	</div> <!-- END dynamic-content-wrap -->
		
		<?php get_sidebar(); ?>


</div> <!-- END '.WRAP' -->

	<?php get_footer(); ?>