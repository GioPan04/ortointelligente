<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<?php
$menu_id = get_nav_menu_locations()['ortointelligente-navbar'];

?>

<nav class="navbar">
    <div class="container navbar-head">
        <div className="flex items-center divide-x">
            <a href="https://gobettivolta.edu.it/" target="_blank" className="">
                <img src="/logo-gv.png" alt="Logo Gobetti Volta" className="w-16 object-contain" />
            </a>
            <span className="ml-4 pl-4 text-2xl font-bold leading-6"><span className="text-primary">Ort</span><span className="text-[#b959a3]">o</span><br /><span className="text-[#f27931]">Intelligente</span></span>
        </div>
        <a href="https://www.sapereconsumare.it/" target="_blank">
            <img className="w-32" src="/Logo-Sapere-Consumare.png" alt="Logo Sapere e Consumare" />
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