<!-- article -->
	<div class="grid grid_archive" id="post-<?php the_ID(); ?>">
	
		<div class="grid-sizer"></div>
		<div class="gutter-sizer"></div>
		
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
				
		<div class="grid-item index-post-box">
			
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('post_thumbnail', ['class' => 'index-post-img']); ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<div class="grid-inner">
			
			<!-- post title -->
			<h2 class="index-post-title">
				<?php the_title(); ?>
			</h2>
			<!-- /post title -->
			
			<!-- post details -->
			<p class="post-meta dark"><?php _e( 'Posted on ', 'shorecrest' ); ?><?php the_time('F j, Y'); ?></p>
			<!-- /post details -->
			
					<?php if ( get_field( 'article_link' ) ): ?>
					<a style="margin-top: 0;" class="article-link" href="<?php the_field('article_link'); ?>" target="_blank">View Article</a>
					<?php else:
					html5wp_excerpt('html5wp_index');
					endif; ?>
					
							
			</div>		
		</div>
		
		<?php endwhile;
		endif ?>
			
	</div>
	<!-- /article -->
