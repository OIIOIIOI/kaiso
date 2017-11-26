<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kaiso_Records
 */

get_header(); ?>

    <nav id="main-navigation">
        <ul id="main-menu" class="wrapper">
            <li>
                <a href="<?php echo site_url(); ?>">Retour</a>
            </li>
        </ul>
    </nav>

	<article class="wrapper padded-lr">
		<?php while ( have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

            <p class="published-date">Publié le <?php the_date(); ?></p>

		<?php endwhile; ?>
	</article>

<?php
get_footer();
