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

	<header class="site-header wrapper">
        <h1><?php echo bloginfo('name'); ?></h1>
	</header>

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
