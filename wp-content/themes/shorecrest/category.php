<?php 
get_header();
?>
	
	<div class="page-header-image">
		<div class="inner">
			<?php $category = single_cat_title(' ', false); ?>
			<h1 class="page-title"><?php echo $category; _e( ' News'); ?></h1>
		</div>
	</div>
	
	<div class="inner side">
		<div class="content clearfix">
			<main>
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
			</main>
			<?php get_sidebar('news'); ?>
		</div>
	</div><!--END INNER-->

<?php get_footer(); ?>