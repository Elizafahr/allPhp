<!-- Задача 1 Как добавить или отнять дату?
Cоздадим объект с датой за 2025 год, 12 месяц, 31 день,
затем прибавим к ней 1 день и выведем в формате 'день.месяц.год' -->
<?php
echo "<b>Результат работы Задачи 1</b> <br>";
echo 'Задача 1 Как добавить или отнять дату?
Cоздадим объект с датой за 2025 год, 12 месяц, 31 день,
затем прибавим к ней 1 день и выведем в формате "день.месяц.год"' . '<br>';
$date = date_create('2025-12-31');
date_modify($date, '+1 day');
echo date_format($date, 'd.m.Y')."<br><br>";
// задача 2 Напишите сценарий PHP для увеличения даты на один
//месяц. -->

echo "<b>Результат работы Задачи 2</b> <br> задача 2 Напишите сценарий PHP для увеличения даты на один
месяц. <br>";
echo 'Изначальная дата = ' .date('d.m.Y')."<br>";
echo date('d.m.Y', strtotime("+1 month"))."<br><br><br>";
// Задача 3 Напишите сценарий PHP для расчета текущего возраста
//человека. 
echo "<b>Результат работы Задачи 3</b> <br> 
Задача 3 Напишите сценарий PHP для расчета текущего возраста
человека. <br>";
echo 'Дата рождения = ' .date('d.m.Y', strtotime('2005-05-03'))."<br>";
echo date("Y")-date('Y', strtotime('2005-05-03'))
?>