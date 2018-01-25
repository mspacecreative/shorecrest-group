<?php 
get_header();
?>
 
	<div class="page-header-image">
		<div class="inner">
			<h1 class="page-title"><?php _e('Page Not Found'); ?></h1>
		</div>
	</div>
	
	<!--INNER-->
	<div class="inner">
		<div class="content">
			<h2 style="padding-bottom: 0!important;"><?php _e( 'Oops! Looks like we have made a mistake.' ); ?></h2>
							</header>
			
			<p style="font-size: 20px;">Nothing was found at this location. Please use the navigation above to find what you&#8217;re looking for or click <a style="text-decoration: underline; color: #56c8e2;" href="<?php echo get_home_url(); ?>">here</a> to return to the homepage.</p>
		</div>
	</div>
	<!--END INNER-->

<?php get_footer(); ?>