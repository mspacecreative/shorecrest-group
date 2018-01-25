<?php 
/* Template Name: Project Page */
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
				
				<?php 
							if ( have_posts() ) {
								while ( have_posts() ) {
									the_post(); 
				
									the_content();
				
								} 
							}
							?>
							
				<?php 
				
				$images = get_field('project_gallery');
				
				if( $images ): ?>
				    <ul class="project_gallery">
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a href="<?php echo $image['url']; ?>" class="fancybox" rel="project">
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				<?php endif; ?>
				
			</main>
			<?php get_sidebar(); ?>
		</div>
	</div><!--END INNER-->
	
</div><!--END MAIN CONTAINER-->

<?php get_footer(); ?>