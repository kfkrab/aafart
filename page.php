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
  						<img src="" alt="avatar" class="image">
							<h1>Sejlplan</h1>
							<p>Du kan opleve Odense Å fra vandet gennem hele sommeren. Fra maj til august er der mange daglige afgange - særplan i påsken, april, september og oktober.</p>
							<p>Turen med Odense Aafart varer 1 time og består af en skøn sejltur op og ned ad Odense Å.</p>
						</div>
						<div class="col-md-4">
  						<img src="" alt="avatar" class="image">
							<h1>Firmaarrangement</h1>
							<p>Prøv et anderledes og sjovt firmaarrangement med dine kolleger. I kommer til at opleve hinanden på en helt ny måde end i dagligdagen.
							<p>Dagen byder sejltur på smukke Odense Å, segway, teambuilding-aktiviteter og picnic i det grønne.</p>
						</div>
						<div class="col-md-4">
  						<img src="" alt="avatar" class="image">
							<?php
										$posts = new WP_Query([
											'tag'       => 'priser',
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
										
										<?php wp_reset_postdata(); ?>
	
	
	
						</div>
					</div>
				</div>
			</div>
	</section>


<section class="">
<div class="container"></div>
</section>
	
	
<section>	
<div class="container"></div>	
</section>	
	
<?php include('assets/incl/bottom.php') ?>
</body>
</html>