<?php
$gift = 1;
$age = 1; 

while ($gift <= 100) {
    $gift *= 2; 
    $gift += $age;
    $age++; 
}

echo "Подарок превысит 100$ на " . ($age - 1) . "-й день рождения.";
?>
