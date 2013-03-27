	<?php
	/* Template Name: Contact */
?>

<?php get_header(); the_post(); ?>
		
		
		<nav class="main-nav">
			<ul>
				<li class="first-main-nav-item"><a href="http://www.foodwecook.com">Home</a></li>
				<li><a href="http://www.foodwecook.com/about">About</a></li>
				<li><a href="http://www.foodwecook.com/piano-services">Services</a></li>
				<li><a href="http://www.foodwecook.com/pianos-for-sale">Pianos for Sale</a></li>
				<li><a href="http://www.foodwecook.com/press">Press</a></li>
				<li><a href="http://www.foodwecook.com/contact" class="selected">Contact</a></li>
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
						<img id="static-content-contact-img" src="http://www.foodwecook.com/images/David-Andersen-Pianos_Atelier-Panorama.jpg" alt="David-Andersen-Pianos_Atelier-Panorama" />
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
							<div id="contact_form">
<!-- 
								<div class="contact-description">
									<p>To get a rate quote, or just find out more about our work just drop us a note!</p>
								</div>
 -->

								<form action="contact.php" method="post">
									<span class="form-headers">Your name</span>
									<input class='field' type="text" name="cf_name">
									<br/>
					
									<span class="form-headers">Your e-mail</span>
									<input class='field' type="text" name="cf_email">
									<br/>
									
									<span class="form-headers">Message</span>
									<textarea name="cf_message"></textarea>
									<br/>
									<div id="button-wrapper">
										<input class="button" type="submit" value="Send">
										<input class="button" type="reset" value="Clear">
									</div>
								</form>
								
							</div>
									
							<p>
								Office and Showroom:<br />
								The Atelier<br />
								Mar Vista, CA 90066<br />
								<br />
								<a href="tel:310-391-4360">(310) 391-4360</a>
								<br />
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