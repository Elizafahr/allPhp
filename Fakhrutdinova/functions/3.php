<?php
function maxElem($array) {
    $maximum = 0;
    $maxIndex = 0;

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $maximum) {
            $maximum = $array[$i];
            $maxIndex = $i;
        }
    }
    echo "Максимальный элемент: " . $maximum . ", его индекс: " . $maxIndex;
}

$num = rand(2, 15);  //рандомлю массив
$array = array();
for ($i=0; $i < $num; $i++) {
$array[$i] = rand(1,99);
}
echo 'Задача 3. Написать функцию, которая ищет максимальный элемент массива и его индекс.' .'<br>';
echo 'Массив  заполненный случайными числами: ' .implode(' ',$array ) ."<br>";
maxElem($array);

?>