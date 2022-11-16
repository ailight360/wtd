/*1//   Used inside HTML tag for Dynamic Language*/
<?php language_attributes();?>

/*2/  Used inside Meta tag for Dynamic charset*/
<meta charset="<?php bloginfo('charset') ?>">

/*3/   Used inside title tag for Dynamic title */
<?php bloginfo('name'); ?>

/*4/   Used inside body tag for Dynamic wp  body class*/
<?php body_class(); ?>

/*5/   Used for site title and tag and site link*/
<?php bloginfo('name'); ?>
<?php bloginfo('descrition'); ?>
<?php bloginfo('wpurl'); ?>

/*6/ if else stamtent first formate */
<?php
    if(have_posts()){
        echo 'Yes Have Posts';
    }else{
        echo 'No Posts';
    }
?>

/*7/ if else stamtent with endif formate */
<?php 
    if(have_posts( )):
        echo 'Yes Have Posts';
    else:
        echo 'No Posts';
    endif;
?>

/*8/ infinite loop */
<?php 
    if(have_posts()):
        while(have_posts()):
            echo 'In my While Loop';
        endwhile;
    endif;
?>

/*9/ Post Loop Start section and end section center html content*/
<?php 
	if(have_posts()):
		while(have_posts()): the_post();
?>

<h2> <?php the_title(); ?></h2>
<p><?php the_content(); ?></p>

<?php endwhile;
	else:
		echo 'Sorry No Post Found';
	endif;
?>

/*10/  Link Main Stylesheet*/

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">


/*11.1//   Register Default Wordpress Header  */
<?php wp_head(); ?> //after closeing head tag & before start body tag  

/*11.2//  Register Default Wordpress Footer  */
<?php wp_footer(); ?> //before closeing  html  tag  

/*11.3/  Register Default Wordpress Script in functions.php  */
<?php
    function calling_resources(){
        wp_enqueue_style('style', get_stylesheet_uri(), ' ', '1.0.5');
    }
    add_action('wp_enqueue_scripts', 'calling_resources');
?>

/*12/ divied deader and footer section and calling them in index.php*/
<?php get_header(); ?>
<?php get_footer(); ?>

/*13/ divied any section and calling them in index.php*/
<?php get_template_part('sub'); ?> // same name as section php file

/*14/ Call insdie ul tag and Rcived default dynamic mene item list */
<?php wp_nav_menu(); ?>

/*14/ Add this in fucntions.php to have menu option in wp deshborad */
<?php register_nav_menus(); ?>