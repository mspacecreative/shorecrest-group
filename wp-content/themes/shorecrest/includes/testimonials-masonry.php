<div class="grid testimonial-container">

	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	
	<?php
	
		if( have_rows('testimonials', 'options') ):
		while ( have_rows('testimonials', 'options') ) : the_row(); ?>
	
	<div class="grid-item index-post-box light-grey"><i class="fa fa-quote-right"></i>
		<div class="grid-inner">
			<h3><?php the_sub_field('testimonial_author', 'options'); ?></h3>
			<p><?php the_sub_field('testimonial_body', 'options'); ?></p>
		</div>
	</div>
	
	<?php endwhile; else : endif; ?>
	
</div>