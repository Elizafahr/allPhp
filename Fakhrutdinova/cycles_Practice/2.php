<?php
    $count = $_GET['num'];
    $i =1;
    $changed = 1;
    while ($i <= $count) 
    {

        echo $changed .'<br>';
        $changed+=3;
        $i++;
    }

?>
