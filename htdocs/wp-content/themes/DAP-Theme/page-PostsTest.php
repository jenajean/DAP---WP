	<?php
	/* Template Name: Posts test */
?>

<?php get_header(); ?>

	
	
	<nav class="main-nav">
			<ul>
				<li class="first-main-nav-item"><a href="http://www.davidandersenpianos.com">Home</a></li>
				<li><a href="http://www.davidandersenpianos.com/about">About</a></li>
				<li><a href="http://www.davidandersenpianos.com/piano-services">Services</a></li>
				<li><a href="http://www.davidandersenpianos.com/pianos-for-sale">Pianos for Sale</a></li>
				<li><a href="http://www.davidandersenpianos.com/press" class="selected">Press</a></li>
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
				<nav class="side-nav">
					<ul>
						<li class="first-side-nav-item"><a href="#Articles" rel="Articles" class="selected">Articles</a></li>
						<li><a href="#teaching-materials" rel="teaching-materials">Teaching and Course Materials</a></li>
					</ul>
				</nav>
			</div>
			<div class="central-section">
			<div class="central-section-content">
				<div class="static-content group">
					<h2>Press</h2>
				</div>
				<div class="changing-content">







				
					<div id="Articles" class="selected">
								<?php
								$post_id = 114;
								$queried_post = get_post($post_id);
								?>
								<?php echo $queried_post->post_content;?>
								<?php echo $queried_post->the_post_thumbnail; ?>
					
						
						<div class="article group">
							<div class="excerpt-image">
								<img src="http://www.davidandersenpianos.com/images/press/articles/Brotherly_Convergence.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 114;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
								<p class="read-more"><a class="fancybox-iframe" target="_blank"
								href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.
								davidandersenpianos.com%2Fimages%2Fpress%2Farticles%2FPDFs%
								2FBrotherly_Convergence-LA-Weekly_Kurt-David-interview.pdf
								&embedded=true" class="fancybox-iframe">Read more...</a></p>
							</div>
						</div>
						
						
					</div>
				
					
				</div>
			</div><!-- end central section content -->
			</div> <!-- end central section -->
		</div> <!-- END '.DYNAMIC-CONTENT' JS replaces this content-->
	<?php get_sidebar(); ?>
	</div> <!-- END dynamic-content-wrap -->

</div> <!-- END '.WRAP' -->

	<?php get_footer(); ?>