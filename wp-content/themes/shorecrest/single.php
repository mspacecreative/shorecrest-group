<?php 
get_header();
?>
	
	<div class="page-header-image">
		<div class="inner">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<!-- post details -->
			<p class="post-meta">Posted <?php the_time('F j, Y'); ?><!-- in <?php the_category(', ') ?>--></p>
			<!-- /post details -->
		</div>
	</div>
	
	<div class="inner side">
		<div class="content clearfix">
			<main>
				<?php 
							if ( have_posts() ) {
								while ( have_posts() ) {
									the_post(); 
				
									the_content();
				
								} 
							}
							?>
			</main>
			<?php get_sidebar('news'); ?>
		</div>
	</div><!--END INNER-->

<?php get_footer(); ?>