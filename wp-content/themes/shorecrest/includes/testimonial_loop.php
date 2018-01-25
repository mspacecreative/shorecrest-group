<!-- article -->
	<div class="grid testimonial-container" id="post-<?php the_ID(); ?>">
	
		<div class="grid-sizer"></div>
		<div class="gutter-sizer"></div>
		
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
				
		<div class="grid-item index-post-box light-grey"><i class="fa fa-quote-right"></i>
			
			<div class="grid-inner">
			
			<!-- post title -->
			<h3 style="margin: 0;">
				<?php the_title(); ?>
			</h3>
			<!-- /post title -->
			
			<!-- JOB TITLE -->
			<p class="post-meta dark" style="color: #3492a7;">
				<?php if( get_field('job_title') ): 
				 the_field('job_title');
				endif; ?>
			</p>
			<!-- /JOB TITLE -->
			
			<!--content-->
			
			<?php the_content(); ?>
							
			</div>		
		</div>
		
		<?php endwhile;
		endif ?>
			
	</div>
	<!-- /article -->
