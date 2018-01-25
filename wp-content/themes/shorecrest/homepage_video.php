<?php 
/* Template Name: Video Home Page */
get_header();
?>
 
	<section class="et_pb_section_parallax hero" style="position: relative; overflow: hidden;">
		<div class="et_parallax_bg" style="z-index: 1; background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero-wave.png'); background-repeat: no-repeat;">
		</div>
		<div style="position: absolute; top: 0; left: 0; min-height: 100%; min-width: 100%; -webkit-transform-style: preserve-3d;">
			<video poster="<?php echo get_template_directory_uri(); ?>/video/shorecrest-wave.jpg" id="video" height="100%" width="100%" loop="loop" muted autoplay playsinline style="position: absolute; top: 0; left: 0; min-height: 100%; min-width: 100%; height: auto; width: 100%; object-fit: cover;">
				<source src="<?php echo get_template_directory_uri(); ?>/video/shorecrest-wave-video.mp4" type="video/mp4" />
			</video>
		</div>
	</section>
	<div class="hero-overlay">
		<img src="<?php echo get_template_directory_uri(); ?>/images/white-logo.png" />
		<p>An Industry Leading<br />Shareholder Engagement Firm</p>
	</div>
	
	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_content();
		}
	}
	?>

<?php get_footer(); ?>