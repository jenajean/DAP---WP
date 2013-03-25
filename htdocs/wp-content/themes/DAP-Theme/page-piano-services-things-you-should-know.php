<?php
	/* Template Name: Things you Should Know */
?>

<?php get_header(); the_post(); ?>


		<nav class="main-nav">
			<ul>
				<li class="first-main-nav-item"><a href="http://www.davidandersenpianos.com">Home</a></li>
				<li><a href="http://www.davidandersenpianos.com/about">About</a></li>
				<li><a href="http://www.davidandersenpianos.com/piano-services" class="selected">Services</a></li>
				<li><a href="http://www.davidandersenpianos.com/pianos-for-sale">Pianos for Sale</a></li>
				<li><a href="http://www.davidandersenpianos.com/press">Press</a></li>
				<li><a href="http://www.davidandersenpianos.com/contact">Contact</a></li>
			</ul>
		</nav>
		<div id="sub-nav-wrap">
			<nav class="sub-nav piano-services-sub-nav">
				<ul>
					<li class="first-sub-nav-item"><a href="http://www.davidandersenpianos.com/piano-services">Piano Services</a></li>
					<li><a href="http://www.davidandersenpianos.com/piano-services-custom-restoration">Custom Restoration</a></li>
					<li><a href="http://www.davidandersenpianos.com/piano-services-things-you-should-know" class="selected">Things you Should Know</a></li>
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
						<li class="first-side-nav-item"><a href="#piano-services-Choosing-a-Tech" rel="piano-services-Choosing-a-Tech" class="selected">Choosing a Tech</a></li>
						<li><a href="#piano-services-Larry-Fine" rel="piano-services-Larry-Fine">Larry Fine</a></li>
						<li><a href="#piano-services-Personal-Referral" rel="piano-services-Personal-Referral">Personal Referral</a></li>
						<li><a href="#piano-services-Get-what-you-pay-for" rel="piano-services-Get-what-you-pay-for">Get what you pay for</a></li>
						<li><a href="#piano-services-There-are-no-stupid-questions" rel="piano-services-There-are-no-stupid-questions">There are no stupid questions</a></li>
						<li><a href="#piano-services-The-Golden-Rule" rel="services-voice-tone-building">The Golden Rule</a></li>
						<li><a href="#piano-services-Trust-your-own-ears" rel="piano-services-Trust-your-own-ears">Trust your own ears</a></li>
						<li><a href="#piano-services-Fall-in-Love" rel="piano-services-Fall-in-Love">Fall in Love</a></li>
						<li><a href="#piano-services-Psycho-Acoustic-Illusion" rel="piano-services-Psycho-Acoustic-Illusion">Psycho-Acoustic Illusion</a></li>
						<li><a href="#piano-services-Inter-Industry-Relationships" rel="piano-services-Inter-Industry-Relationships">Inter Industry Relationships</a></li>
						<li><a href="#piano-services-The-Piano-Technicians-Guild" rel="piano-services-The-Piano-Technicians-Guild">The Piano Technicians Guild</a></li>
						
					</ul>
				</nav>
			</div>
			<div class="central-section">			
				<div class="central-section-content">
	
					<div class="static-content group">
						<img src="http://www.davidandersenpianos.com/images/Things-you-should-know.jpg" alt="the Atelier"/>
						<?php echo get_post_meta($post->ID, "piano-services-Things-you-should-know", true);?>
					</div>
					<div class="changing-content">
						<div id="piano-services-Choosing-a-Tech" class="selected">
							<?php echo get_post_meta($post->ID, "piano-services-Choosing-a-Tech", true);?>
							
						</div>
						<div id="piano-services-Larry-Fine">
							<?php echo get_post_meta($post->ID, "piano-services-Larry-Fine", true);?>
						</div>
						
						<div id="piano-services-Personal-Referral">
							<?php echo get_post_meta($post->ID, "piano-services-Personal-Referral", true);?>
						</div>
						
						<div id="piano-services-Get-what-you-pay-for">
							<?php echo get_post_meta($post->ID, "piano-services-Get-what-you-pay-for", true);?>
						</div>
		
						<div id="piano-services-There-are-no-stupid-questions">
							<?php echo get_post_meta($post->ID, "piano-services-There-are-no-stupid-questions", true);?>
						</div>
						
						<div id="piano-services-The-Golden-Rule">
							<?php echo get_post_meta($post->ID, "piano-services-The-Golden-Rule", true);?>
						</div>
						
						<div id="piano-services-Trust-your-own-ears">
							<?php echo get_post_meta($post->ID, "piano-services-Trust-your-own-ears", true);?>
						</div>
						
						<div id="piano-services-Fall-in-Love">
							<?php echo get_post_meta($post->ID, "piano-services-Fall-in-Love", true);?>
						</div>
						
						<div id="piano-services-Psycho-Acoustic-Illusion">
							<?php echo get_post_meta($post->ID, "piano-services-Psycho-Acoustic-Illusion", true);?>
						</div>
						
						<div id="piano-services-Inter-Industry-Relationships">
							<?php echo get_post_meta($post->ID, "piano-services-Inter-Industry-Relationships", true);?>
						</div>
		
						<div id="piano-services-The-Piano-Technicians-Guild">
							<?php echo get_post_meta($post->ID, "piano-services-The-Piano-Technicians-Guild", true);?>
							
						</div>
					</div>
				</div> <!-- end central-sect-content --> 
			</div> <!-- end central-sect -->
		</div> <!-- END '.DYNAMIC-CONTENT' JS replaces this content-->
	</div> <!-- END dynamic-content-wrap -->
	
		
	<?php get_sidebar(); ?>

</div> <!-- END '.WRAP' -->

	<?php get_footer(); ?>