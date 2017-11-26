<?php ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="main-wrapper">

	<?php
    $header_img_url = '';
    // TODO get home page ID from page template to use in getfield random image
    // TODO is single OR is page and not home
    if (is_single() && has_post_thumbnail(get_queried_object_id())) :
	    $header_img_url = get_the_post_thumbnail_url();
	else :
		$images = array();
		for ($i = 1; $i < 4; $i++)
		{
			$url = get_field('random_image_'.$i, get_queried_object_id());
			if ($url)
				$images[] = $url;
		}
		if (count($images))
		    $header_img_url = $images[random_int(0, count($images)-1)];
    endif
    ?>
	<header id="top" class="site-header padded-lr" style="background-image: url('<?php echo $header_img_url; ?>');">
        <div class="wrapper">
            <?php if (is_single()) : ?>
                <h1><?php echo get_the_title(get_queried_object_id()); ?></h1>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri().'/img/logo_white_shadow.png'; ?>" alt="<?php bloginfo('name') ?>">
            <?php endif; ?>
        </div>
	</header>
