	<?php
	/* Template Name: Contact */
?>

<?php get_header(); the_post(); ?>
		
		
		<nav class="main-nav">
			<ul>
				<li class="first-main-nav-item"><a href="http://www.davidandersenpianos.com">Home</a></li>
				<li><a href="http://www.davidandersenpianos.com/about">About</a></li>
				<li><a href="http://www.davidandersenpianos.com/piano-services">Services</a></li>
				<li><a href="http://www.davidandersenpianos.com/pianos-for-sale">Pianos for Sale</a></li>
				<li><a href="http://www.davidandersenpianos.com/press">Press</a></li>
				<li><a href="http://www.davidandersenpianos.com/contact" class="selected">Contact</a></li>
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
				</nav>
			</div>
			<div class="central-section">
				<div class="central-section-content">
					<div class="static-content group" id="static-content-contact">
						<img id="static-content-contact-img" src="http://www.davidandersenpianos.com/images/David-Andersen-Pianos_Atelier-Panorama.jpg" alt="David-Andersen-Pianos_Atelier-Panorama" />
						<h2></h2>
					</div><!-- end static -->
					<div class="changing-content">
						<div id="contact" class="selected">
							<h3>
								We're always here when you need us; always eager to hear from you and help you - a reply is guaranteed.
							</h3>
							<p>
								There are no stupid questions.
								<br />
								You can always reach us by telephone or
								e-mail: 
								<br />	
							</p>
							<p>
								<a href="tel:310-391-4360">(310) 391-4360</a>
							</p>
                            <p>
                            	<a href="mailto:david@davidandersenpianos.com,jaye@davidandersenpianos.com">david@davidandersenpianos.com</a>
                            </p>
									
							<p>
								Office and Showroom:<br />
								The Atelier<br />
								Mar Vista, CA 90066<br />
								
							</p>
						</div>
					</div><!-- end changing -->
				</div><!-- end central section content -->
			</div> <!-- end central sect -->
		</div> <!-- END '.DYNAMIC-CONTENT' JS replaces this content-->
	</div> <!-- END dynamic-content-wrap -->
	<?php get_sidebar(); ?>
</div> <!-- END '.WRAP' -->

	<?php get_footer(); ?>