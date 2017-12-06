<?php
/*
 * Template Name: index	
 */
?>
<!DOCTYPE html>
<html>
<head>
<?php include('assets/incl/head.php') ?>
</head>
<body>
	<header>
	<?php include('assets/incl/header.php') ?>
	</header>
	
	
	
	<section id="stemningsvideo">
		<video poster="" muted autoplay loop>
			<source src="" type="video/mp4">
			<source src="" type="video/webm">
		</video>
	<div id=""><?= $text->videoText ?></div>
	</section>
	
	
	
	<section id="oversigt">
		<div class="oversigt_wrapper">
			<br>
			<div id="oversigt_img_wrapper"
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="row">
							<div class="col-md-2 col-xs-3">	
  								<img src="http://k-krab.dk/skole/aafart/wp-content/themes/aafart/assets/img/avatar_priser.png" alt="avatar" class="avatar image">
								</div>
							<?php
										$posts = new WP_Query([
											'tag'       => 'forside_kasse1',
											'post_type' => 'post'
										]);
										?>



											<?php while($posts->have_posts()): $posts->the_post(); ?>
												<div class="col-6">
													
														<p class="overskrift_1"><?php the_title(); ?></p>
													</div>
													</div><!--overskrift row slut-->

													<div class="col-md-12">
														<?php the_content(); ?>
													</div>
												
											<?php endwhile; ?>
										
										<?php wp_reset_postdata(); ?>
	
								
							
						
					</div>
						<div class="col-md-4">
							<div class="row">
							<div class="col-md-2 col-xs-3">	
  								<img src="http://k-krab.dk/skole/aafart/wp-content/themes/aafart/assets/img/avatar_priser.png" alt="avatar" class="avatar image">
								</div>
							<?php
										$posts = new WP_Query([
											'tag'       => 'forside_kasse2',
											'post_type' => 'post'
										]);
										?>



											<?php while($posts->have_posts()): $posts->the_post(); ?>
												<div class="col-6">
													
														<p class="overskrift_1"><?php the_title(); ?></p>
													</div>
													</div><!--overskrift row slut-->

													<div class="col-md-12">
														<?php the_content(); ?>
													</div>
												
											<?php endwhile; ?>
										
										<?php wp_reset_postdata(); ?>
	
								
							
						
					</div>
						<div class="col-md-4">
							<div class="row">
							<div class="col-md-2 col-xs-3">	
  								<img src="http://k-krab.dk/skole/aafart/wp-content/themes/aafart/assets/img/avatar_priser.png" alt="avatar" class="avatar image">
								</div>
							<?php
										$posts = new WP_Query([
											'tag'       => 'forside_kasse3',
											'post_type' => 'post'
										]);
										?>



											<?php while($posts->have_posts()): $posts->the_post(); ?>
												<div class="col-6">
													
														<p class="overskrift_1"><?php the_title(); ?></p>
													</div>
													</div><!--overskrift row slut-->

													<div class="col-md-12">
														<?php the_content(); ?>
													</div>
												
											<?php endwhile; ?>
										
										<?php wp_reset_postdata(); ?>
	
								
							
						
					</div>
				</div>
			</div>
	</section>


<section class="" id="forside_musik">
<div class="container">

	<div class="row">
		<div class="col-md-4">
			<img src="http://k-krab.dk/skole/aafart/wp-content/themes/aafart/assets/img/musik_paa_aaen.png" alt="avatar" class="image">
		</div>
		<div class="col-md-8">yes this is dog</div>
	</div><!--row-->
	
	
</div>
</section>
	
	
<section class="">
<div class="container">

	<div class="row">
		<div class="col-md-8">yes this this is dog</div>
		
		
		
		<div class="row">
		<div class="col-md-4">
			<img src="http://k-krab.dk/skole/aafart/wp-content/themes/aafart/assets/img/vin_paa_aaen.png" alt="avatar" class="image">
		</div>
		
		
	</div><!--row-->
	
	
</div>
</section>	
	
<?php include('assets/incl/bottom.php') ?>
</body>
</html>