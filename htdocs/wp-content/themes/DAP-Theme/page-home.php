<?php
	/* Template Name: Home */
?>

<?php get_header(); the_post(); ?>


		<nav class="main-nav">
			<ul>
				<li class="first-main-nav-item"><a href="http://www.davidandersenpianos.com" class="selected">Home</a></li>
				<li><a href="http://www.davidandersenpianos.com/about">About</a></li>
				<li><a href="http://www.davidandersenpianos.com/piano-services">Services</a></li>
				<li><a href="http://www.davidandersenpianos.com/pianos-for-sale">Pianos for Sale</a></li>
				<li><a href="http://www.davidandersenpianos.com/press">Press</a></li>
				<li><a href="http://www.davidandersenpianos.com/contact">Contact</a></li>
			</ul>
		</nav>
		<div id="sub-nav-wrap">
			<nav class="sub-nav">
				<ul>
				</ul>
			</nav>
		</div>
	</div>
</div> 


<div class="wrap group"> 
	<div id="dynamic-content-wrap">
		<div id="dynamic-content">
			<div class="side-nav-section">
				<div class="side-nav">
					<p>Artisanal, custom-rebuilt vintage Steinways, significantly superior to and less expensive than new models. <br />Ask us how.</p>
				</div>
			</div>
			<div class="central-section">
			<div class="central-section-content">
				<div class="static-content group">
					<img src="images/david-andersen-pianos-welcome-shot.png" alt="David Andersen" />
					<h2>Home</h2>
					<p>
					WELCOME to our corner of the fascinating world of pianos, piano
					service, and custom, player-centered instrument restoration.
					</p>
				</div>
				<div class="changing-content">
					<div id="services-real-story" class="selected">
								<?php $recent = new WP_Query("page_id=6"); while($recent->have_posts())
								: $recent->the_post();?>
								<?php the_content(); ?>
								<?php endwhile; ?>
					</div>
				</div>
			</div><!-- end central section content -->
			</div> <!-- end central section -->
		</div> <!-- END '.DYNAMIC-CONTENT' JS replaces this content-->
	</div> <!-- END dynamic-content-wrap -->	
		
	<?php get_sidebar(); ?>
	

</div> <!-- END '.WRAP' -->

	<?php get_footer(); ?>