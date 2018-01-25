<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

	</head>
	
	<div id="cover">
		<div class="loader-container">
			<i class="fa fa-spinner fa-pulse" aria-hidden="true"></i>
		</div>
	</div>
	
	<body <?php body_class(); ?>>
	
	<?php include('includes/analyticstracking.php') ?>
	
		<div class="pulse"><a href="#intro" class="smoothScroll"><i class="fa fa-chevron-down"></i></a></div>
	
		<div class="nav-container">
		
			<nav>
				<?php html5blank_nav(); ?>
			</nav>
			
		</div><!--END NAV CONTAINER-->
		
		<header>
		
			<div class="inner clearfix">
			
				<div class="logo">
					<a href="<?php echo get_home_url(); ?>"><h1><img src="<?php echo get_template_directory_uri(); ?>/images/shorecrest-logo.svg" /></h1></a>
				</div>
				
				<button type="button" class="toggle-button" style="border: none; background: none; outline: none;">
					<div id="nav-icon3">
					  <span></span>
					  <span></span>
					  <span></span>
					  <span></span>
					</div>
				</button>
				
				<ul class="desktop-menu">
					<?php html5blank_nav(); ?>
				</ul>
				
			</div><!--END INNER-->
			
		</header>
		
		<div class="wrapper">
			<div class="main-container clearfix">