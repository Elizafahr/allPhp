<?php
function sum($str){
    echo 'Строка = ' .$str .'<br>';
  $str = $str??'@';
  $str  = mb_strtolower($str);
  echo 'Количество букв o и O = ' .substr_count($str, 'o');
  
};
echo "2. Подсчитать общее количество встречающихся в тексте букв “о” и “О”.". "<br>";
sum('kkkolllokkkolO');
?>