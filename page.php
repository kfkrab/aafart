<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

page.php

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

</body>
</html>