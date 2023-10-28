<?php
    $x = $_GET['x'];
    $y = $_GET['y'];
    $z = $_GET['z'];
    $max = max($x, $y, $z);
   echo 'Максимальное число = ' .$max;

?>