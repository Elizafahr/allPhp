<!-- 4.	Создайте куки с логином посетителя и временем последнего захода. Куки должны хранится максимум 1 час. 
Примечание: возможно понадобится форма для ввода логина.-->
<?php 

if(isset($_COOKIE['last_login_time'])==false){
    echo "Вы впервые здесь"; 
} 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    setcookie('user_login', $login, time() + 3600);
}

if (isset($_COOKIE['user_login'])) {
    setcookie('last_login_time', date('Y-m-d H:i:s'), time() + 3600);
    echo "<h2> Привет, " .$_COOKIE['user_login'] .'!</h2>';;
    echo "<p> Последнее время посещения: " .$_COOKIE['last_login_time'] .'</p>';;
} 


?>
