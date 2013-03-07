<?php
	/* Template Name: Pianos for Sale */
?>

<?php get_header(); the_post(); ?>

		<nav class="main-nav">
			<ul>
				<li class="first-main-nav-item"><a href="http://www.foodwecook.com">Home</a></li>
				<li><a href="http://www.foodwecook.com/about">About</a></li>
				<li><a href="http://www.foodwecook.com/piano-services">Services</a></li>
				<li><a href="http://www.foodwecook.com/pianos-for-sale" class="selected">Pianos for Sale</a></li>
				<li><a href="http://www.foodwecook.com/press">Press</a></li>
				<li><a href="http://www.foodwecook.com/contact">Contact</a></li>
			</ul>
		</nav>
		<div id="sub-nav-wrap">
			<nav class="sub-nav piano-services-sub-nav">
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
						<li class="first-side-nav-item"><a href="#how-we-sell" rel="how-we-sell" class="selected">How We Sell</a></li>
						<li><a href="#Piano-Rentals" rel="Piano-Rentals">Piano Rental</a></li>
						<li><a href="#Fueurich-190-1983" rel="Fueurich-190-1983">Fueurich 190 1983</a></li>
						<li><a href="#Pearl-River-Grand-2006" rel="Pearl-River-Grand-2006">Pearl River Grand 2006</a></li>
						<li><a href="#Steinway-B-1894" rel="Steinway-B-1894">Steinway “B” (6’11”) 1894</a></li>
						<li><a href="#Steinway-Louis-XV-1937" rel="Steinway-Louis-XV-1937">Steinway Louis XV “S” 1937</a></li>
						<li><a href="#Steinway-Louis-XV-1925" rel="Steinway-Louis-XV-1925">Steinway Louis XV “M” 1925</a></li>
						<li><a href="#1928-Steinway-model-L-5-11" rel="1928-Steinway-model-L-5-11">Steinway model “L” (5’11”) 1928</a></li>
						<li><a href="#Yamaha-U3-1987" rel="Yamaha-U3-1987">Yamaha U3 1987</a></li>
					</ul>
				</nav>
			</div>
			<div class="central-section">
				<div class="central-section-content">
	
				<div class="static-content group">
						<?php echo get_post_meta($post->ID, "pianos-for-sale", true);?>
				</div>
				
				<div class="changing-content pianos">
					<div id="how-we-sell" class="selected" class="group">
						<?php echo get_post_meta($post->ID, "how-we-sell", true);?>
					</div>
					
					<div id="Piano-Rentals" class="group">
						<?php echo get_post_meta($post->ID, "Piano-Rentals", true);?>
					</div>
				
					<div id="Fueurich-190-1983" class="group">
						<?php echo get_post_meta($post->ID, "Fueurich-190-1983", true);?>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Feururich/
						David-Andersen-Pianos-Feururich-1.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Feururich/
						David-Andersen-Pianos-Feururich-1.jpg" alt="Fueurich 190 1983"
						class="fancybox"/></a>

						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Feururich/
						David-Andersen-Pianos-Feururich-2.jpg"> <img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Feururich/
						David-Andersen-Pianos-Feururich-2.jpg" alt="Fueurich 190 1983"
						class="fancybox"/></a>

						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Feururich/
						David-Andersen-Pianos-Feururich-3.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Feururich/
						David-Andersen-Pianos-Feururich-3.jpg" alt="Fueurich 190 1983"
						class="fancybox"/></a>

						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Feururich/
						David-Andersen-Pianos-Feururich-4.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Feururich/
						David-Andersen-Pianos-Feururich-4.jpg" alt="Fueurich 190 1983"
						class="fancybox"/></a>

						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Feururich/David-
						Andersen-Pianos-Feururich-5.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Feururich/
						David-Andersen-Pianos-Feururich-5.jpg" alt="Fueurich 190 1983"
						class="fancybox"/></a>
						
					</div>
					<div id="Pearl-River-Grand-2006" class="group">
						<?php echo get_post_meta($post->ID, "Pearl-River-Grand-2006", true);?>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River
						-Grand/David-Andersen-PianosPearl-River-Grand-2006-4.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River-
						Grand/David-Andersen-PianosPearl-River-Grand-2006-4.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River
						-Grand/David-Andersen-PianosPearl-River-Grand-2006-5.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River-
						Grand/David-Andersen-PianosPearl-River-Grand-2006-5.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River
						-Grand/David-Andersen-PianosPearl-River-Grand-2006-6.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River-
						Grand/David-Andersen-PianosPearl-River-Grand-2006-6.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River
						-Grand/David-Andersen-PianosPearl-River-Grand-2006-7.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River-
						Grand/David-Andersen-PianosPearl-River-Grand-2006-7.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River
						-Grand/David-Andersen-PianosPearl-River-Grand-2006-8.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River-
						Grand/David-Andersen-PianosPearl-River-Grand-2006-8.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River
						-Grand/David-Andersen-PianosPearl-River-Grand-2006-9.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Pearl-River-
						Grand/David-Andersen-PianosPearl-River-Grand-2006-9.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
					</div>
						
					<div id="Steinway-B-1894" class="group">

						<?php echo get_post_meta($post->ID, "Steinway-B-1894", true);?>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-1.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-1.jpg" alt="Pearl River Grand
						2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-2.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-2.jpg" alt="Pearl River Grand
						2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-3.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-3.jpg" alt="Pearl River Grand
						2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-4.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-4.jpg" alt="Pearl River Grand
						2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-5.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-5.jpg" alt="Pearl River Grand
						2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-6.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-B/
						David-Andersen-Pianos-Steinway-B-6.jpg" alt="Pearl River Grand
						2006" class="fancybox"/></a>
					</div>
					
					<div id="Steinway-Louis-XV-1937" class="group">
						<?php echo get_post_meta($post->ID, "Steinway-Louis-XV-1937", true);?>
						
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-1.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-1.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-2.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-2.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-3.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-3.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-4.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-4.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-5.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-5.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-6.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Steinway-
						Louis-XV-S/David-Andersen-Pianos-Steinway-Louis-XV-S-6.jpg"
						alt="Pearl River Grand 2006" class="fancybox"/></a>
						
					</div>
					
					<div id="Steinway-Louis-XV-1925" class="group">
						<?php echo get_post_meta($post->ID, "Steinway-Louis-XV-1925", true);?>
					</div>						
					
					<div id="1928-Steinway-model-L-5-11" class="group">
						<?php echo get_post_meta($post->ID, "1928-Steinway-model-L-5-11", true);?>
					</div>					
				
					
					<div id="Yamaha-U3-1987" class="group">
						<?php echo get_post_meta($post->ID, "Yamaha-U3-1987", true);?>
						
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Yahmaha-U3/
						David-Andersen-Pianos-Yahmaha-U3-1.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Yahmaha-U3/
						David-Andersen-Pianos-Yahmaha-U3-1.jpg" alt="Pearl River Grand
						2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Yahmaha-U3/
						David-Andersen-Pianos-Yahmaha-U3-2.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Yahmaha-U3/
						David-Andersen-Pianos-Yahmaha-U3-2.jpg" alt="Pearl River Grand
						2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Yahmaha-U3/
						David-Andersen-Pianos-Yahmaha-U3-3.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Yahmaha-U3/
						David-Andersen-Pianos-Yahmaha-U3-3.jpg" alt="Pearl River Grand
						2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Yahmaha-U3/
						David-Andersen-Pianos-Yahmaha-U3-4.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Yahmaha-U3/
						David-Andersen-Pianos-Yahmaha-U3-4.jpg" alt="Pearl River Grand
						2006" class="fancybox"/></a>
						
						<a class="fancybox"
						href="http://www.foodwecook.com/images/Pianos-for-Sale/Yahmaha-U3/
						David-Andersen-Pianos-Yahmaha-U3-5.jpg"><img
						src="http://www.foodwecook.com/images/Pianos-for-Sale/Yahmaha-U3/
						David-Andersen-Pianos-Yahmaha-U3-5.jpg" alt="Pearl River Grand
						2006" class="fancybox"/></a>
						
						
					</div>
					
				</div> <!-- end changing content -->
			
				</div>		<!-- end central-section-content -->
			</div> <!-- central-section -->
		</div> <!-- END '.DYNAMIC-CONTENT' JS replaces this content-->
	</div> <!-- END dynamic-content-wrap -->
	
	<?php get_sidebar(); ?>

</div> <!-- END '.WRAP' -->

	<?php get_footer(); ?>