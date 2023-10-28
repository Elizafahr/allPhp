<?php
function email($num, $search ='@'){
    $position = strpos($num, $search);
    if($position!==false)
    {
        echo "Содержит. Позиция подстроки '$search' в строке '$num': $position";
    }
    else{
        echo "Не содержит";
    }
};
echo "1. Проверить, содержит ли адрес электронной почты символ @, и выведите предупреждающее сообщение, если такого символа нет.". "<br>";
email('email@gmail.com');
?>