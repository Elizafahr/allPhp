<?php
$array = [1, 2, 3, 4, 5];
$position = 3; // Например, вставим в третью позицию
$new_element = '$';
echo "Исходный массив: " . implode(' ', $array)  .'<br>';
array_splice($array, $position, 0, $new_element);
echo "Готовый массив: " . implode(' ', $array);
?>