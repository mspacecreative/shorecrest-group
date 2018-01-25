<?php 
/* Template Name: Experience Page */
get_header();
?>
 
<div class="main-container">
	
	<div class="page-header-image">
		<div class="inner">
			<h1 class="page-title"><?php the_title(); ?><span class="caption">&nbsp;(Static image or image collage in background)</span></h1>
		</div>
	</div>
	
	<div class="inner side">
		<div class="content clearfix">
			<main>
				<?php echo do_shortcode('[experience]'); ?>
			</main>
			<?php get_sidebar(); ?>
		</div>
	</div><!--END INNER-->
	
</div><!--END MAIN CONTAINER-->

<?php get_footer(); ?>