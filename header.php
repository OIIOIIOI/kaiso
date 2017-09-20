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

<div class="wrapper">

	<header class="site-header">

        <p>HEADER</p>

		<nav>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'menu_id' => 'main-menu',
				) );
			?>
		</nav>

	</header>

	<div class="content">
