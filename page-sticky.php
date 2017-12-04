<?php
/*
 * Template Name: Side med priser
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

page-sticky.php

<main>
	<?php while(have_posts()): the_post(); ?>
		<header>
			<h1><?php the_title(); ?></h1>
		</header>

		<div>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
</main>

<hr>

<?php
$posts = new WP_Query([
	'tag'       => 'priser',
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

<?php
$posts = new WP_Query([
	'tag'       => 'sejlplan',
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

</body>
</html>