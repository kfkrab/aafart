<?php
/*
 * Template Name: Kontakt
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>


<body>




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