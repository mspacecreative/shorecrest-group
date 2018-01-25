<div class="grid our_clients">

	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	
	<?php
	
		if( have_rows('tombstones') ):
		while ( have_rows('tombstones') ) : the_row(); ?>
	
	<div class="grid-item index-post-box"></i>
		<div class="grid-inner">
			<?php the_sub_field('tombstone_content'); ?>
		</div>
	</div>
	
	<?php endwhile; else : endif; ?>
	
</div>