<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logoUrl = wp_get_attachment_image_src($custom_logo_id, 'full');
?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="preloader">
        <img src="<?= $logoUrl[0]; ?>" alt="<?= get_bloginfo(); ?>">
    </div>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <a href="#!" class="menu-trigger">
                <span class="screen-reader-text">Menu Trigger</span>
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <a href="<?= get_home_url(); ?>" class="logo-wrapper"><img src="<?= $logoUrl[0]; ?>" alt="<?= get_bloginfo(); ?>" class="full-size-img full-size-img-cover"></a>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                )
            );
            ?>
        </header><!-- #masthead -->