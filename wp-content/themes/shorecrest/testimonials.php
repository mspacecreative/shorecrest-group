<div class="testimonials-slider">
	<?php
	
		$i = 0;
		
		if(get_field('testimonials', 'options')): 
	
	 	while(has_sub_field('testimonials', 'options')): 
		 	$i++; 
		 	if( $i > 3 ) {
			 	break;
		 	}
	 	?>
	
	  	<div>
	  		<h3><?php the_sub_field('testimonial_author', 'options'); ?></h3>
	  		<p><?php the_sub_field('testimonial_body', 'options'); ?></p>
	  	</div>
	
	  <?php endwhile; endif; 
	 
	 ?>
</div>