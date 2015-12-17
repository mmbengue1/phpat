<?php
$menu = array(
    "1" => array (
        "nom" => 'Home',//le nom de la page
        "page"  => 'home',// la page
        "url"   => "../chemin/home.php" // le chemin pour acceder au fichier
    ),
    "2" => array (
        "nom" => "Our Services",
        "page"  => 'services',
        "url"   => "../chemin/services.php"
    ),
    "3" => array (
        "nom" => 'Mohamed',
        "page"  => 'mohamed',
        "url"   => "../chemin/mohamed.php"
    ),
    "4" => array (
        "nom" => 'About',
        "page"  => 'about',
        "url"   => "../chemin/about.php"
    ),
    "5" => array (
        "nom" => 'Contact',
        "page"  => 'contact',
        "url"   => "../chemin/contact.php"
    )
);
?>

<ul>
    <?php
    for ($i = 1; $i <= count($menu); $i++)
    {
        echo '<li><a href="index.php?page=' . $menu[$i]['page'] . '">' . $menu[$i]['nom'] . '</a></li>';
    }
    ?>
</ul>