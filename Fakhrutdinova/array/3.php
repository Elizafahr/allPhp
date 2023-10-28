<?php
$arr = [1, 2, 3, 4, 5];
$sum = array_sum($arr);
$count = count($arr);
$average = $sum / $count;
print_r($arr) ."<br>";
echo  "<br>" ."Среднее арифметическое: " . $average;
?>