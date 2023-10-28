<?php
function sum($a, $b)
{     
    echo 'Start.   a = ' .$a .' and ' .' b = ' .$b .'<br>';

     $a=$a*2;
     $b=$b*2;
     echo 'a * 2 = ' .$a .', b * 2 = ' .$b;

}

echo  sum(5,3);
?>