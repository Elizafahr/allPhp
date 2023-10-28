<?php

function countSinCos(){
    for ($a = -M_PI; $a <= M_PI; $a += M_PI/4) {
        $x = sin($a) ** 2;
        $y = cos($a) ** 2;
        echo "<tr>";
        echo "<td>" . number_format($a, 2) . "</td>";
        echo "<td>" . number_format($x, 2) . "</td>";
        echo "<td>" . number_format($y, 2) . "</td>";
        echo "</tr>";
    }
}

echo 'Задача 6. Написать функцию, которая вычисляет значения x=sin2(a) и y=cos2(a). Напечатать таблицу значений от –π до π с шагом π/4.';
echo '<table border="1"; cellpadding = "3px"; cellspacing = "0px" >';
    echo '<tr>';
    echo ' <th>p</th>';
    echo ' <th>x</th>';
    echo ' <th>y</th>';
    echo '</tr>';

    countSinCos(); 
    echo '</table>';
?>

