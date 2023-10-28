<?php
$temperatures = [23.5, 22.8, 25.2, 20.3, 21.7, 24.0, 19.5, 26.1, 18.8, 27.4];
$average_temperature = array_sum($temperatures) / count($temperatures); //средн
sort($temperatures); //сортирую
$lowest_temperatures = array_slice($temperatures, 0, 5); //низкая
$highest_temperatures = array_slice($temperatures, -5); //высокая
print_r($temperatures) ."<br>";
echo  "<br>" ."Средняя температура: " . $average_temperature . " градусов Цельсия<br>";
echo "Пять самых низких температур: " . implode(", ", $lowest_temperatures) . " градусов Цельсия<br>";
echo "Пять самых высоких температур: " . implode(", ", $highest_temperatures) . " градусов Цельсия";
?>