<aside>

    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
	<div class="audio-section">
		<div class="listen-prompt group">
			<h2>Listen!</h2>
			<a class="fancybox-iframe" href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.foodwecook.com%2Fimages%2Ftech-specs.pdf&embedded=true">technical specifications</a>		</div>
		<div class="audio-player">
				<?php $recent = new WP_Query("page_id=424"); while($recent->have_posts())
				: $recent->the_post();?>
				       <!-- <h3><?php the_title(); ?></h3> -->
				       <?php the_content(); ?>
				<?php endwhile; ?>	

		</div>
	</div>
    	
    	

</aside>