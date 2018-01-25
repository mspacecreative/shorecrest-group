<?php 

  $the_query = new WP_Query( array(
       'posts_per_page' => 3
     )); 

  if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
<div class="recent_posts_sb">
	<!-- post title -->
	<h3>
		<?php the_title(); ?>
	</h3>
	<!-- /post title -->
	
	<!-- post details -->
	<p class="post-meta dark"><?php _e( 'Posted on ', 'shorecrest' ); ?><?php the_time('F j, Y'); ?></p>
	<!-- /post details -->
	
	<?php if ( get_field( 'article_link' ) ): ?>
	<a class="article-link" href="<?php the_field('article_link'); ?>" target="_blank">View Article</a>
	<?php else:
	html5wp_excerpt('html5wp_index');
	endif; ?>
</div>

<?php endwhile; wp_reset_postdata(); else: endif; ?>