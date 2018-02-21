<?php
/*
 * Template Name: Accueil
 * Description: Accueil
 */

get_header();

?>

    <nav id="main-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'main-menu',
			'menu_id' => 'main-menu',
			'menu_class' => 'wrapper',
			'container' => '',
		) );
		?>
    </nav>

<?php while ( have_posts() ) : the_post(); ?>

	<?php $news_posts = get_field('news'); ?>
	<?php $artist_posts = get_field('artists'); ?>

    <!-- NEWS & DATES ============================================ -->

    <?php if ($news_posts || $date_posts): ?>
        <section id="news" class="wrapper padded-lr">
            <div class="grid-2 has-gutter-xl">
                <!-- NEWS -->
	            <?php if ($news_posts): ?>
                    <div class="news two-thirds">
                        <h2>News</h2>
                        <div class="grid-2 has-gutter-xl">
				            <?php foreach ($news_posts as $post): ?>
					            <?php setup_postdata($post); ?>
                                <div class="news-cell">
                                    <!--                                <a href="--><?php //the_permalink(); ?><!--">--><?php //the_post_thumbnail('medium'); ?><!--</a>-->
                                    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <div class="content">
							            <?php the_excerpt(); ?>
                                    </div>
                                </div>
				            <?php endforeach; ?>
				            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
	            <?php endif; ?>

                <!-- DATES -->
	            <?php
	            $date_posts = get_posts(array(
		            'post_type'	=> 'post',
		            'meta_key'	=> 'date',
		            'orderby'	=> 'meta_value_num',
		            'order'		=> 'DESC'
	            ));
	            if ($date_posts) : ?>
                    <div class="dates one-third">
                        <h2>Dates</h2>
                        <ul>
				            <?php foreach ($date_posts as $post) :
					            setup_postdata($post);
					            ?>
                                <li>
                                    <span class="date"><?php echo date_i18n(get_option('date_format'), strtotime(get_field('date'))); ?></span>
                                    <?php if (get_field('link')) : ?><a href="<?php the_field('link'); ?>" target="_blank"><?php endif; ?>
                                        <?php the_title(); ?>
	                                <?php if (get_field('link')) : ?></a><?php endif; ?>
                                    <?php if (get_field('place')) : ?>
                                        <span class="place">@ <?php the_field('place'); ?></span>
                                    <?php endif; ?>
                                </li>
					            <?php
				            endforeach;
				            wp_reset_postdata(); ?>
                        </ul>
                    </div>
	            <?php endif; ?>
            </div>
        </section>
	<?php endif; ?>

    <!-- LABEL ============================================ -->

    <section id="label" class="dark padded-lr">
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
        <section id="artists" class="padded-lr">
            <div class="wrapper">
	            <?php foreach ($artist_posts as $post): ?>
		            <?php setup_postdata($post); ?>
                    <div class="artist-row grid-2 has-gutter-xl">
                        <div class="player-cell one-third">
                            <div class="ratio-1-1">
                                <div class="inner">
                                    <?php
                                    if (get_field('music_player'))
	                                    the_field('music_player');
                                    else
                                        the_post_thumbnail();
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="content-cell two-thirds">
                            <h2><?php the_title(); ?></h2>
	                        <?php the_content(); ?>
<!--                            TODO the excerpt so that we can add photos and stuff in the content without it showing on home-->
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

