<div class="product-grid clearfix">
	<?php
		if( have_rows('products') ):
			while ( have_rows('products') ) : the_row(); ?>
		  
		  <div class="product" style="background-image: url(<?php the_sub_field('product_img'); ?>);">
		  	<h3><?php the_sub_field('product_name'); ?></h3>
		  </div>
		  
		  <? endwhile; else : 
		endif; ?>
</div>