<?php
/*
 * Template Name: Accueil
 * Description: Accueil
 */
?>

<?php while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>

    <!-- NEWS -------------------------------------------- -->

    <h2>Actualités</h2>

	<?php $post_objects = get_field('news'); ?>
	<?php if ($post_objects): ?>

	<ul>
		<?php foreach ($post_objects as $post): ?>
			<?php setup_postdata($post); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>
		<?php endforeach; ?>
	</ul>

	<?php wp_reset_postdata(); ?>
	<?php endif; ?>

    <!-- ARTISTES -------------------------------------------- -->

    <h2>Artistes</h2>

	<?php $post_objects = get_field('artists'); ?>
	<?php if ($post_objects): ?>

	<ul>
		<?php foreach ($post_objects as $post): ?>
			<?php setup_postdata($post); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                </a>
			</li>
		<?php endforeach; ?>
	</ul>

	<?php wp_reset_postdata(); ?>
	<?php endif; ?>

<?php endwhile; ?>
