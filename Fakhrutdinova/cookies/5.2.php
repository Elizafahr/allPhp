<?php
// Начинаем или возобновляем сессию
session_start();

// Получаем личные данные из сессии
$_SESSION['person'] = $_POST['to'];;
$_SESSION['message'] = $_POST['message'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>document</title>
</head>
<body>
    
    <p><?php 
    echo 
    'Сообщение для ' .$_SESSION['person'] .' отправлено, его контент = ' .$_SESSION['message']; ?></p>
   
</body>
</html>