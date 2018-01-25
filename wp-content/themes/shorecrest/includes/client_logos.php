<div class="client-logos-slider">

	<?php $images = get_field('client_logo_slider');
	if( $images ): foreach( $images as $image ): ?>
  <div class="client_logo_container">
  	<img src="<?php echo $image['sizes']['logos']; ?>" alt="<?php echo $image['alt'] ?>" />
  </div>
  <?php endforeach; endif; ?>
  
</div>