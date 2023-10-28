<?php

$menu = array(
    "Home" => "pages/index.php",
    "About" => "pages/about.php",
    "Contact" => "pages/contact.php",
    "Services" => "pages/services.php",
    "Price" => "pages/price.php"
);
menuDraw($menu);
getMenu($menu, false);

function menuDraw($menu)
{
    echo '1. Отрисовка меню вертикально' . '<br>';
    foreach ($menu as $menuItem) {
        echo "<a href=' .$menuItem" . "'>" . $menuItem . "</a>" . '<br> ';
    }
}

function getMenu($menu, $vertical)
{
    echo '2. getMenu с параметром "$vertical=false"' . '<br>';

    if ($vertical == true) {
        menuDraw($menu);
    } else {
        foreach ($menu as $menuItem) {
            echo "<a href=' .$menuItem" . "'>" . $menuItem . "</a>";
        }
    }
}

?>