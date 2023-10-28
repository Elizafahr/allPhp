<?php
$sum = 0;
$num = 1;
while ($num <= 100) 
{
	if($num%7==0){
        $sum+=$num;
    }
	$num++;
}

    echo "Сумма = " .$sum;

?>