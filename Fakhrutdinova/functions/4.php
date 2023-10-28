<?php
function maximum($a, $b) {
        if ($a > $b) {
            return $a;
        }
        else{
            return $b;
        }
}

$a = rand(2, 15);  //рандомлю a
$b = rand(2, 15);  //рандомлю b
$c = rand(2, 15);  //рандомлю c
$d = rand(2, 15);  //рандомлю d


$first  = maximum($a, $b);
$second  = maximum($c, $d);
$third  = maximum($first, $second);
echo "Задача 4. Написать функцию max(x, y), находящую максимальное значение из двух чисел. С ее помощью найти максимальное значение из четырёх чисел a, b, c, d.". "<br>";
echo  ' a =' .$a .' b =' .$b .' c =' . $c .' d =' .$d .'<br>';
echo 'Максимальное число = ' .$third .'<br>';
?>