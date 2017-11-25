<?php
/*
 * Template Name: Accueil
 * Description: Accueil
 */

get_header();

?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php $news_posts = get_field('news'); ?>
	<?php $date_posts = get_field('dates'); ?>
	<?php $artist_posts = get_field('artists'); ?>

    <!-- NEWS & DATES ============================================ -->

    <?php if ($news_posts || $date_posts): ?>
        <section id="news" class="wrapper grid-2">

            <!-- NEWS -->
	        <?php if ($news_posts): ?>
                <div class="news two-thirds">
                    <h2>News</h2>
                    <div class="grid-2 has-gutter-xl">
	                    <?php foreach ($news_posts as $post): ?>
		                    <?php setup_postdata($post); ?>
                            <div>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
	                    <?php endforeach; ?>
	                    <?php wp_reset_postdata(); ?>
                    </div>
                </div>
	        <?php endif; ?>

            <!-- DATES -->
	        <?php if ($date_posts): ?>
                <div class="dates one-third">
                    <h2>Dates</h2>
                    <ul>
	                    <?php foreach ($date_posts as $post): ?>
		                    <?php setup_postdata($post); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
	                    <?php endforeach; ?>
	                    <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
	        <?php endif; ?>

        </section>
	<?php endif; ?>

    <!-- LABEL ============================================ -->

    <section id="label" class="dark">
        <div class="wrapper">
            <div class="grid-2 has-gutter-xl">
                <div class="image-cell one-third">
		            <?php the_post_thumbnail(); ?>
                </div>
                <div class="content-cell two-thirds">
                    <h1><?php the_title(); ?></h1>
		            <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ARTISTS ============================================ -->

	<?php if ($artist_posts): ?>
        <section id="artists">
            <div class="wrapper">
	            <?php foreach ($artist_posts as $post): ?>
		            <?php setup_postdata($post); ?>
                    <div class="artist-row grid-2 has-gutter-xl">
                        <div class="player-cell one-third">
                            <div class="ratio-1-1">
                                <div class="inner">
                                    <iframe style="border: 0; width: 350px; height: 350px;" src="https://bandcamp.com/EmbeddedPlayer/album=485307074/size=large/bgcol=333333/linkcol=e99708/minimal=true/transparent=true/" seamless><a href="http://kaisorecords.bandcamp.com/album/tropical-invasion">TROPICAL INVASION by KING PEPE &amp; HIS CALYPSO COMBO</a></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="content-cell two-thirds">
                            <h2><?php the_title(); ?></h2>
	                        <?php the_content(); ?>
                        </div>
                    </div>
	            <?php endforeach; ?>
	            <?php wp_reset_postdata(); ?>
            </div>
        </section>
	<?php endif; ?>

<?php endwhile; ?>

<?php

get_footer();
