<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>
    
	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <ul id="primary-menu" class="menu">
                <img class="menu__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
                <img class="menu__whiteFlower" src="<?php echo get_template_directory_uri() . '/assets/images/menu-burger/fleur-blanche.png'; ?> " alt="Fleur blanche qui tourne">
                <img class="menu__hibiscus" src="<?php echo get_template_directory_uri() . '/assets/images/menu-burger/hibiscus.png'; ?> " alt="Fleur blanche qui tourne">
                <img class="menu__jaakuna" src="<?php echo get_template_directory_uri() . '/assets/images/menu-burger/jaakuna.png'; ?> " alt="Fleur blanche qui tourne">
                <img class="menu__kawaneko" src="<?php echo get_template_directory_uri() . '/assets/images/menu-burger/kawaneko.png'; ?> " alt="Fleur blanche qui tourne">
                <img class="menu__orenjiiro" src="<?php echo get_template_directory_uri() . '/assets/images/menu-burger/orenjiiro.png'; ?> " alt="Fleur blanche qui tourne">
                <img class="menu__orangeFlower" src="<?php echo get_template_directory_uri() . '/assets/images/menu-burger/fleur-orange.png'; ?> " alt="Fleur blanche qui tourne">
                <img class="menu__orchid" src="<?php echo get_template_directory_uri() . '/assets/images/menu-burger/orchid.png'; ?> " alt="Fleur blanche qui tourne">
            </ul>

		</nav><!-- #site-navigation -->
        
	</header><!-- #masthead -->
