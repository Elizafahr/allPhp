<?php
// Начинаем или возобновляем сессию
session_start();

// Получаем личные данные из сессии
$full_name = isset($_SESSION['full_name']) ? $_SESSION['full_name'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>document</title>
</head>
<body>
    <form method="post" action="5.2.php">
        <label for="to">Кому:</label>
        <input type="text" name="to" id="to" value="">
        <br>
        <label for="from">От кого:</label>
        <input type="text" name="from" id="from" value="<?php echo $email; ?>">
        <br>
        <label for="message">Сообщение:</label>
        <textarea name="message" id="message"></textarea>
        <br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>