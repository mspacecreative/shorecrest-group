<?php 
/* Template Name: Custom Home Page */
get_header();
?>
 
	<section class="et_pb_section_parallax hero" style="position: relative; overflow: hidden; height: 100vh;">
		<div class="et_parallax_bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero-wave.png'); background-repeat: no-repeat;">
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