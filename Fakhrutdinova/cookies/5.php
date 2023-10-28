<?php
session_start();
$_SESSION['full_name'] = 'Фахрутдинова Елизавета Рустановна';
$_SESSION['email'] = 'email@example.com';
?>

<!DOCTYPE html>
<html>
<head>
    <title>document</title>
</head>
<body>
    <p>Ваши личные данные:</p>
    <p>ФИО: <?php echo $_SESSION['full_name']; ?></p>
    <p>E-mail: <?php echo $_SESSION['email']; ?></p>
    <a href="5.1.php">Перейти к отправке письма</a>
</body>
</html>