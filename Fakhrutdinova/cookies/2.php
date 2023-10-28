
<!--2.	Реализовать задачу 1 с использованием функций управления сессией.-->
<?php
session_start();
$name = $_POST['name'];
$color = $_POST['color'];

$_SESSION["name"] = $_POST['name'];
$_SESSION["color"] = $_POST['color'];

echo '<body style="background-color:' . $color . ' "> ';
if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    echo "<h2> Привет," .$_SESSION["name"] .'!</h2>';;
}
if (isset($_SESSION["color"])) {
    $color = $_SESSION["color"];
    echo "Color:" .$_SESSION["color"];
}
echo '</body>';
?>