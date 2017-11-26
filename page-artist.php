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

<?php endwhile; ?>

<?php

get_footer();
