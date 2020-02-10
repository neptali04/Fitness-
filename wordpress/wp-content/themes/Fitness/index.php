<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>
			<div class="row justify-content-center">
			<div class="col-sm-2 col-md-2">
			<div class="card" style="width: 18rem;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/card1.jpg" alt="Pitcher filled with berries. Photo by Jagoda Kondratiuk on Unsplash." class="card-img-top img-responsive">
  					<div class="card-body">
    					<h5 class="card-title">The Basics</h5>
    						<p class="card-text">Nutrition is something that many think is hard to keep up with when actually it's quite simple. Here are the basics.</p>
    						<a href="#" class="btn btn-primary">Go somewhere</a>
  					</div>
			</div>
			</div>
			<div class="col-sm-2 col-md-2">	
			<div class="card" style="width: 18rem;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/card1.jpg" alt="pitcher filled with berries" class="card-img-top img-responsive">
  					<div class="card-body">
    					<h5 class="card-title">The Basics</h5>
    						<p class="card-text">Nutrition is something that many think is hard to keep up with when actually it's quite simple. Here are the basics.</p>
    						<a href="#" class="btn btn-primary">Go somewhere</a>
  					</div>
			</div>
			</div>
			<div class="col-sm-2 col-md-2">	
			<div class="card" style="width: 18rem;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/card1.jpg" alt="pitcher filled with berries" class="card-img-top img-responsive">
  					<div class="card-body">
    					<h5 class="card-title">The Basics</h5>
    						<p class="card-text">Nutrition is something that many think is hard to keep up with when actually it's quite simple. Here are the basics.</p>
    						<a href="#" class="btn btn-primary">Go somewhere</a>
  					</div>
			</div>
			</div>
			<div class="col-sm-2 col-md-2">	
			<div class="card" style="width: 18rem;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/card1.jpg" alt="pitcher filled with berries" class="card-img-top img-responsive">
  					<div class="card-body">
    					<h5 class="card-title">The Basics</h5>
    						<p class="card-text">Nutrition is something that many think is hard to keep up with when actually it's quite simple. Here are the basics.</p>
    						<a href="#" class="btn btn-primary">Go somewhere</a>
  					</div>
			</div>
			</div>
			</div>
			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
