<?php
//1
$num = rand(3, 20);
//2
$array1 = array();
for ($i=0; $i < $num; $i++) {
$array1[$i] = rand(1,99);
}
//3
$result1 = implode(' ',$array1 );
print_r($array1) ."<br>";
echo "<br>" .'Массив из ' .$num .' элементов, заполненный случайными числами: ' .$result1 ."<br>";
//4
sort( $array1 );
echo 'Отсортированный массив из ' .$num .' элементов  ' .implode(' ',$array1 ) ."<br>";
//5
echo 'Реверсивный массив из ' .$num .' элементов ' .implode(' ', array_reverse(($array1)) ) ."<br>";
//6
array_pop($array1);
echo 'Массив из ' .$num .' элементов, с array_pop: '  .implode(' ',$array1 ) ."<br>";
//7
$arrSum = array_sum($array1);
$number = count($array1);
echo 'Сумма элементов = '  .$arrSum .'. Количество элементов = ' .$number ."<br>";
//8
$sum = array_sum($array1);
$count = count($array1);
$average = $sum / $count;
echo 'Среднее арифметическое элементов = '  .$average ."<br>";
//9
if (in_array(50, $array1)) {
    echo "Число 50 найдено в массиве." ."<br>";
} else {
    echo "Число 50 не найдено в массиве." ."<br>";
}
//10
$uniqueNumbers = array_unique($array1);
echo 'Уникальные значения = '   .implode(' ',$uniqueNumbers ) ."<br>";



?>