<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('-', true, 'right'); ?><?php bloginfo(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<?php
$menu_id = get_nav_menu_locations()['ortointelligente-navbar'];

?>

<nav class="navbar navbar-desktop">
    <div class="container navbar-head">
        <div class="navbar-logo">
            <a href="https://gobettivolta.edu.it/" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/imgs/logo-gv.png" alt="Logo Gobetti Volta"/>
            </a>
            <span class="navbar-site-logo"><a href="/"><span>Orto</span><br /><span>Intelligente</span></a></span>
        </div>
        <a href="https://www.sapereconsumare.it/osservatorio-progetti/dallorto-intelligente-alla-comunita/" target="_blank">
            <img class="navbar-sc" src="<?php echo get_template_directory_uri() ?>/imgs/sapereconsumare.png" alt="Logo Sapere e Consumare" />
        </a>
    </div>
    <div class="navbar-content">
        <div class="navbar-links container">
            <?php foreach (wp_get_nav_menu_items($menu_id) as $a) : ?>
                <a href="<?php echo $a->url ?>"><?php echo $a->title ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>

<nav class="navbar navbar-mobile">
    <div class="navbar-m-content">
        <a href="/">
            <span class="navbar-mobile-logo">Orto<br />Intelligente</span>
        </a>
        <a id="navbar-m-menu-btn" href="#">
            <img class="navbar-m-menu-btn" src="<?php echo get_template_directory_uri() ?>/imgs/menu.svg" alt="menu"/>
        </a>
    </div>
    <div class="navbar-m-links">
        <?php foreach (wp_get_nav_menu_items($menu_id) as $a) : ?>
            <a href="<?php echo $a->url ?>"><?php echo $a->title ?></a>
        <?php endforeach; ?>
    </div>
</nav>