<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
