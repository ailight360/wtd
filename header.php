<!DOCTYPE html>
<html <?php language_attributes(); ?> 

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
	<title><?php bloginfo('name'); ?></title>
</head>

<?php wp_head(); ?>

<body <?php body_class(); ?>>

	<div id="wrap">

	<header>
		<div id="header">
				<h1><?php bloginfo(name); ?></h1>
				<h2><?php bloginfo(discription); ?></h2>
		</div>

		<div id="menu">
				<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Sites</a></li>
						<li><a href="#">Resume</a></li>
						<li><a href="#">References</a></li>
						<li><a href="#">Contact Me</a></li>
				</ul>
		</div>
	</header>