<?php
/*
 * Template Name: Artiste
 * Description: Artiste
 */

get_header();

?>

<?php while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>

	<?php the_post_thumbnail('large'); ?>

	<p><?php the_content(); ?></p>

	<p><?php the_field('music_player'); ?></p>

	<a href="<?php the_field('website'); ?>"><?php the_field('website') ?></a>

<?php endwhile; ?>

<?php

get_footer();
