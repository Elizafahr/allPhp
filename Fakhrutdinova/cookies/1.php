<!-- 1.	Создать форму, с помощью которой пользователь может задать свой ник и выбрать цвет фона страниц сайта. Использовать cookie для того, 
чтобы приветствовать пользователя по имени на следующих страницах с заданным фоном. -->

<?php
    $name = $_POST['name'];
    $color = $_POST['color'];
    setcookie("name",  $name, time() +60);
    setcookie("color",  $color,  time() +60);
    echo '<body style="background-color:' .$color .' "> ';

    if (isset($_COOKIE["name"])) echo  "<h2> Привет,  " . $_COOKIE["name"] .'!</h2>';
    if (isset($_COOKIE["color"])) echo "<h4> Сolor: " . $_COOKIE["color"] .'</h4>' . "<br>";
    echo '</body>';

?>
