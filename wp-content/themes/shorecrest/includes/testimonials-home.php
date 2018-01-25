<div class="testimonials-slider">
	
	<?php $loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => -1 ) ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
	  	<div>
	  		<h3><?php the_title(); ?><?php _e(', '); ?><span style="font-weight: normal;"><?php if( get_field('job_title') ): 
	  		 the_field('job_title');
	  		endif; ?></span></h3>
	  		<?php the_content(); ?>
	  	</div>
	
	 <?php endwhile; wp_reset_query(); ?>
	 
</div>