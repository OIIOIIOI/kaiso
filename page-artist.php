<?php
/*
 * Template Name: Artiste
 * Description: Artiste
 */
?>

<?php while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>

	<?php the_post_thumbnail('large'); ?>

	<p><?php the_content(); ?></p>

	<a href="<?php the_field('website'); ?>"><?php the_field('website') ?></a>

<?php endwhile; ?>
