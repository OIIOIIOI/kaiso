<?php
/*
 * Template Name: Artiste
 * Description: Artiste
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

		<?php endwhile; ?>
    </article>

<?php
get_footer();
