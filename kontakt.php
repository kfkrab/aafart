<?php
/*
 * Template Name: Kontakt
 */
?>
<!DOCTYPE html>
<html>
	
<head>
<?php include('assets/incl/head.php') ?>
</head>

<header>
<?php include('assets/incl/header.php') ?>
</header>

<body>
<div style="background-size:cover;height:400px;display:flex;justify-content:center;flex-direction:column;align-items:center; margin-top: 120px;">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9064.12967351543!2d10.3808038!3d55.3923401!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5a094802ed6d986a!2sOdense+Aafart!5e0!3m2!1sda!2sdk!4v1512417668792" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>



<main>
	<?php while(have_posts()): the_post(); ?>
		<header>
			<h1><?php the_title(); ?></h1>
		</header>

		<div>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
	
	
	
	<hr>
	
	
	
	
	
	<?php
$posts = new WP_Query([
	'tag'       => 'kontakt',
	'post_type' => 'post'
]);
?>



<section>
	<?php while($posts->have_posts()): $posts->the_post(); ?>
		<div>
			<header>
				<?php the_title(); ?>
			</header>

			<div>
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
</section>
<?php wp_reset_postdata(); ?>
	
	
	
	
</main>

</body>
</html>