<?php
function sum($str){
  echo 'Строка = ' .$str .'<br>';
  $mas = explode(' ', $str);
  foreach($mas as $key => $value){
    echo mb_strtoupper(mb_substr($value, 0, 1)) . mb_substr($value, 1) . " ";
  }
  
};
echo "3. Заменить все строчные первые символы в словах предложения на заглавные." . "<br>";
sum("привет мир");

?>

