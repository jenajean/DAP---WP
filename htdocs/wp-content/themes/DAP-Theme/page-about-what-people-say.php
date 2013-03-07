<?php
	/* Template Name: What People Say */
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
					<li><a href="http://www.foodwecook.com/about-heroes-and-mentors">Heroes and Mentors</a></li>
					<li><a href="http://www.foodwecook.com/about-what-people-say" class="selected">What People Say</a></li>
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
							<div>
								<img src="http://www.foodwecook.com/images/What-ppl-say-1.jpg" alt="" />
								<img src="http://www.foodwecook.com/images/What-ppl-say-jonah.jpg" alt=""/>
							</div>
						</nav>
					</div>
				<div class="central-section">
					<div class="central-section-content">
						<div class="static-content group">
							<img/>
							<h2>What People Say</h2>
							<p>Our Success is defined by those we serve; the appreciation and praise of our clients gives our work meaning...</p>
						</div><!-- end static content -->
						<div class="changing-content">
							<div id="about-what-people-say" class="selected">
								<?php $recent = new WP_Query("page_id=48"); while($recent->have_posts())
								: $recent->the_post();?>
								<h3><?php the_title(); ?></h3></br>
								<?php the_content(); ?>
								<?php endwhile; ?>
							</div>
						</div> <!-- end changing content -->
					</div><!--  end central section content -->
			</div> <!-- end central section -->
		</div> <!-- END '.DYNAMIC-CONTENT' JS replaces this content-->
	</div> <!-- END dynamic-content-wrap -->
	
		<?php get_sidebar(); ?>

</div> <!-- END '.WRAP' -->

	<?php get_footer(); ?>