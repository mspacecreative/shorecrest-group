<?php 
get_header();
?>
	
	<div class="page-header-image">
		<div class="inner">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</div>
	
	<div class="page-outer">
		<!--INNER-->
			<div class="inner">
				<div class="content fullwidth">
					<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); 
		
							the_content();
		
						} 
					}
					?>
				</div>
			</div>
			<!--END INNER-->
	</div>

<?php get_footer(); ?>