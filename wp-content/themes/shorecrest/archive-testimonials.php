<?php 
get_header();
?>
	
	<div class="page-header-image">
		<div class="inner" style="max-width: 960px;">
			<?php $post_date = get_the_date('Y'); ?>
			<h1 class="page-title"><?php _e( 'Client Testimonials'); ?></h1>
		</div>
	</div>
	
	<div class="inner">
		<div class="content fullwidth">
			<?php get_template_part('includes/testimonial_loop'); ?>
			<?php get_template_part('pagination'); ?>
		</div>
	</div><!--END INNER-->

<?php get_footer(); ?>