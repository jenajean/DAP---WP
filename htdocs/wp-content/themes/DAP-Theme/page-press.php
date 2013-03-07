	<?php
	/* Template Name: Press */
?>

<?php get_header(); the_post(); the_post_thumbnail(); ?>
	
	
	<nav class="main-nav">
			<ul>
				<li class="first-main-nav-item"><a href="http://www.foodwecook.com">Home</a></li>
				<li><a href="http://www.foodwecook.com/about">About</a></li>
				<li><a href="http://www.foodwecook.com/piano-services">Services</a></li>
				<li><a href="http://www.foodwecook.com/pianos-for-sale">Pianos for Sale</a></li>
				<li><a href="http://www.foodwecook.com/press" class="selected">Press</a></li>
				<li><a href="http://www.foodwecook.com/contact">Contact</a></li>
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
						
						<div class="article group">
							<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/articles/Brotherly_Convergence.jpg" alt="thumbnail" />
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
								foodwecook.com%2Fimages%2Fpress%2Farticles%2FPDFs%
								2FBrotherly_Convergence-LA-Weekly_Kurt-David-interview.pdf
								&embedded=true" class="fancybox-iframe">Read more...</a></p>
							</div>
						</div>
						
						<div class="article group">
							<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/articles/studio_360.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 175;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
							</div>
						</div>
						<div class="article group">
							<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/articles/PTJ-2009-Cover.png" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 116;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
								<p class="read-more">
									<a class="fancybox-iframe"
									href="http://docs.google.com/viewer?url=http%3A%2F%
									2Fwww.foodwecook.com%2Fimages%2Fpress%2Farticles%
									2FPDFs%2FBuildGreatWebsitept1.pdf&embedded=true">Read
									more...</a>
								</p>
							</div>
						</div>
					
						<div class="article group">
							<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/articles/PTJ-2009-Cover.png" alt="change thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 194;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
								<p class="read-more">
									<a class="fancybox-iframe"
									href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.foodwecook.com%2Fimages%2Fpress%
									2Farticles%2FPDFs%2Fdavid-andersen-ptg-build-a-great-website-google-pt2.pdf&embedded=true"
									>Read more...</a>
								</p>
							</div>
						</div>
						<div class="article group">
							<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/articles/Secret-from-the-aural-tuning-kit-small.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 177;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>	
								<p class="read-more">
									<a class="fancybox-iframe"
									href="http://docs.google.com/viewer?url=http%3A%2F%
									2Fwww.foodwecook.com%2Fimages%2Fpress%2Farticles%
									2FPDFs%2Fdavid-andersen-Secrets-from-the-Aural-tuning-
									kit.pdf&embedded=true">Read more...</a>
								</p>								
							</div>
						</div>
						<div class="article group">
							<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/articles/ptg-nov-2005-small.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 179;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>	
								<p class="read-more">
									<a class="fancybox-iframe"
									href="http://docs.google.com/viewer?url=http%3A%2F%
									2Fwww.foodwecook.com%2Fimages%2Fpress%2Farticles%
									2FPDFs%2Fdavid-andersen-ost-piano-technicians-journal-
									nov_2005.pdf&embedded=true">Read more...</a>
								</p>
								
							</div>
						</div>
						<div class="article group">
							<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/articles/salon-salvation-small.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 186;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>	
								<p class="read-more">
									<a class="fancybox-iframe"
									href="http://docs.google.com/viewer?url=http%3A%2F%
									2Fwww.foodwecook.com%2Fimages%2Fpress%2Farticles%
									2FPDFs%2FLA-City-Beat-Article.pdf&embedded=true">Read
									more...</a>
								</p>
							</div>
						</div>			
						<div class="article group">
							<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/articles/For_the_love_of_piano-small.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 188;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>	
								<p class="read-more">
									<a class="fancybox-iframe"
									href="http://docs.google.com/viewer?url=http%3A%2F%
									2Fwww.foodwecook.com%2Fimages%2Fpress%2Farticles%
									2FPDFs%2FFor-the-love-of-piano-MarVistaNewsArticle.pdf
									&embedded=true">Read more...</a>
								</p>
							</div>
						</div>	
	
						<div class="article group">
							<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/articles/Mordecai-Shehori.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 286;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>	
								<p class="read-more">
									<a class="fancybox-iframe"
									href="http://docs.google.com/viewer?url=http%3A%2F%
									2Fwww.foodwecook.com%2Fimages%2Fpress%2Farticles%
									2FPDFs%2Fjazzsalons.pdf&embedded=true">Read
									more...</a>
								</p>
							</div>
						</div>
					</div>
					
					
					
					<div id="teaching-materials">
					
						<div class="teaching group">
							<div class="excerpt-image group">
								<img src="http://www.foodwecook.com/images/press/teaching/Your-Tool-Thumb.png" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 353;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
							<p class="read-more">
								<a class="fancybox-iframe"
								href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.
								foodwecook.com%2Fimages%2Fpress%2Fteaching%2FPDFs%2FCLASS-
								OUTLINE-2011-PTG-Natl.pdf&embedded=true">View
								Class Outlines...</a>
							</p>
							</div>
						</div>

						<div class="teaching group">
							<div class="excerpt-image group">
								<img src="http://www.foodwecook.com/images/press/teaching/Your-Tool-Thumb.png" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 339;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
							<p class="read-more">
								<a class="fancybox-iframe"
								href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.
								foodwecook.com%2Fimages%2Fpress%2Fteaching%2FPDFs%
								2FtuningclassKC07ptg.pdf&embedded=true">View Presentation...</a>
							</p>
							</div>
						</div>
					
						<div class="teaching group">
						<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/teaching/Soul-Craft-Chicago-sm.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 215;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
							<p class="read-more">
								<a class="fancybox-iframe"
								href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.
								foodwecook.com%2Fimages%2Fpress%2Fteaching%2FPDFs%
								2FPHOENIX%20ALL-DAY1-08.pdf&embedded=true">View Presentation</a>
							</p>
							</div>
							
						</div>
						<div class="teaching group">
							<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/teaching/Custom-Restoration-sm.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 217;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
							<p class="read-more">
								<a class="fancybox-iframe"
								href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.foodwecook.com%2Fimages%2Fpress%
								2Fteaching%2FPDFs%2FAnaheim%20powerpt08-customRestoration.pdf&embedded=true">View Presentation</a>
							</p>
							</div>
						</div>
						<div class="teaching group">
							<div class="excerpt-image">
								<img src="http://www.foodwecook.com/images/press/teaching/Dave-and-jonah-sm.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 222;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
							<p class="read-more">
								<a class="fancybox-iframe"
								href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.
								foodwecook.com%2Fimages%2Fpress%2Fteaching%2FPDFs%2FArt%
								26EstheticsofVoicing1.1.pdf&embedded=true">View Presentation</a>
							</p>
							</div>
						</div>
						<div class="teaching group">
							<div class="excerpt-image group">
								<img src="http://www.foodwecook.com/images/press/teaching/soul-of-craft-sm.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 224;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
							<p class="read-more">
								<a class="fancybox-iframe"
								href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.
								foodwecook.com%2Fimages%2Fpress%2Fteaching%2FPDFs%
								2FPHOENIX%20ALL-DAY1-08.pdf&embedded=true">View Presentation</a>
							</p>
								
							</div>
						</div>
						<div class="teaching group">
							<div class="excerpt-image group">
								<img src="http://www.foodwecook.com/images/press/teaching/whole-tone-open-string-tuning-sm.jpg" alt="thumbnail" />
							</div>
							<div class="excerpt">
								<?php
								$post_id = 226;
								$queried_post = get_post($post_id);
								?>
								<h3><?php echo $queried_post->post_title; ?></h3>
								<?php echo $queried_post->post_content; ?>
							<p class="read-more">
								<a class="fancybox-iframe"
								href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.
								foodwecook.com%2Fimages%2Fpress%2Fteaching%2FPDFs%
								2FtuningclassKC07ptg.pdf&embedded=true">Read more...</a>
							</p>
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