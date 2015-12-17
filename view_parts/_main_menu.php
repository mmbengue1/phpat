<?php
$menu = array(
    "1" => array (
        "nom" => 'Home',//le nom de la page
        "page"  => 'index',// la page
        "url"   => "../index.php" // le chemin pour acceder au fichier
    ),
    "2" => array (
        "nom" => "Dashboard",
        "page"  => 'dashboard',
        "url"   => "/dashboard.php"
    ),
    "3" => array (
        "nom" => 'Contact',
        "page"  => 'contact',
        "url"   => "contact.php"
    ),
    "4" => array (
        "nom" => 'Inscription',
        "page"  => 'inscription',
        "url"   => "../inscription.php"
    ),

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


