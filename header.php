<!DOCTYPE html>
<html <?php language_attributes(); ?> 

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?var=1.0.6">
	<title><?php bloginfo('name'); ?></title>
</head>

<?php wp_head(); ?>

<body <?php body_class(); ?>>

	<div id="wrap">

	<header class="clearfix">
		<div id="header">
				<h1><?php bloginfo('name'); ?></h1>
				<h2><?php bloginfo('description'); ?></h2>
		</div>

		<div id="menu">
			<ul>
				<?php wp_nav_menu(); ?>
			</ul>
		</div>

	</header>