<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<body <?php body_class(); ?>>

		<!-- wrapper -->
					<!-- nav -->
					<!-- <div class="logo">
						
					</div> -->
			<nav class="navbar navbar-expand-lg ">
			<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/fitnex.png" alt="Logo" class="logo-img">
						</a>
  				<!-- <a class="navbar-brand" href="#">FITNEX</a>
 					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="navbar-toggler-icon"></span>
  					</button> -->
  				<div class="collapse navbar-collapse" id="navbarNav">
    				<ul class="navbar-nav">
     					<li class="nav-item active">
        				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      					</li>
     					<li class="nav-item">
        				<a class="nav-link" href="#">Blog</a>
      					</li>
      					<li class="nav-item">
        				<a class="nav-link" href="#">Programs</a>
      					</li>
    				</ul>
  				</div>
			</nav>

					<!-- /nav -->
			<!-- header -->
			<header class=" header clear" role="banner">
				
					<!-- logo -->

					<!-- /logo -->



			</header>


			<!-- /header -->
