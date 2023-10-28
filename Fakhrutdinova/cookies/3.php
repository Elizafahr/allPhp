<!-- 3.	Написать программу, которая применяет функции управления сессией для запоминания того, какие страницы уже посещались пользователем. 
Вывести список ссылок на все посещенные страницы.-->

<?php



    session_start();
    $visit_count = 1;
    
    if (isset($_SESSION["visit_count"])) {
        $visit_count = $_SESSION["visit_count"] + 1;
    }
    
    $_SESSION["visit_count"] = $visit_count;
    
    echo("Количество посещений: " . $visit_count);
    
?>
