<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wr_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	
	<h1> DevOps Demo Theme </h1>
	<p>This WordPress theme is managed using git and jenkins</p>

	<?php 
	if (have_posys()) :
	while (have_posts()) :
		the_posts():
	?>
		<article>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>
	<?php
		endWhile;
	endif;
	?>
	
	<?php wp_footer(); ?>

</body>
</html>

