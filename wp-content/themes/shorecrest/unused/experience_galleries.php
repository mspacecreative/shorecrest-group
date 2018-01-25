<div class="product-grid clearfix">
	<?php
		if( have_rows('experience') ):
			while ( have_rows('experience') ) : the_row(); ?>
		  
		  <div class="product">
		  	<?php $image = get_sub_field('project_image');
		  		
		  		if( !empty($image) ): ?>
		  		
		  			<a href="<?php the_sub_field('project_page_link'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
		  		
		  		<?php endif; ?>
		  		
		  	<h3><?php the_sub_field('project_title'); ?></h3>
		  </div>
		  
		  <? endwhile; else : 
		endif;
	?>
</div>