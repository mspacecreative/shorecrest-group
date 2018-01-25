<div class="product-grid clearfix">
	<?php
		if( have_rows('products') ):
			while ( have_rows('products') ) : the_row(); ?>
		  
		  <div class="product">
		  	<?php $image = get_sub_field('product_img');
		  		
		  		if( !empty($image) ): ?>
		  		
		  			<a href="<?php the_sub_field('popup_img'); ?>" class="fancybox"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
		  		
		  		<?php endif; ?>
		  		
		  	<h3><?php the_sub_field('product_name'); ?></h3>
		  </div>
		  
		  <? endwhile; else : 
		endif;
	?>
</div>