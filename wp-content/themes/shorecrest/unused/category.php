<?php 
get_header();
?>
	
	<div class="page-header-image">
		<div class="inner">
			<h1 class="page-title"><?php get_cat_name( $cat_id ) ?></h1>
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