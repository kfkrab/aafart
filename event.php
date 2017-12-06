<?php
/*
 * Template Name: event	
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
						
						<div class="col-md-12">
  						<img src="" alt="avatar" class="image">
							<?php
										$posts = new WP_Query([
											'tag'       => 'kommende_events',
											'post_type' => 'post'
										]);
										?>



											<?php while($posts->have_posts()): $posts->the_post(); ?>
												<div>
														<h1><?php the_title(); ?></h1>
													

													<div>
														<?php the_content(); ?>
													</div>
												</div>
											<?php endwhile; ?>
										
										
	
	
	
						</div>
					</div>
				</div>
			</div>
	</section>


<?php include('assets/incl/bottom.php') ?>
</body>
</html>