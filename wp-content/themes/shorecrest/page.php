<?php 
/* Template Name: Sidebar Page */
get_header();
?>
	
	<div class="page-header-image">
		<div class="inner">
			<h1 class="page-title"><?php the_title(); ?></h1>
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
			<?php get_sidebar(); ?>
		</div>
	</div><!--END INNER-->

<?php get_footer(); ?>