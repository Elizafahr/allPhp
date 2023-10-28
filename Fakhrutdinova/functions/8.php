<?php
echo "Задача 8. Задайте двумерный массив, содержащий сведения о студентах группы (№пп, ФИО, возраст, пол). Создайте скрипт, выводящий все элементы массива в виде HTML–таблицы (используйте для этого цикл foreach):
    № пп
    ФИО
    возраст пол
    
    а) Создайте функцию поиска в массиве студентов самого молодого студента.
    б) Реализуйте функцию поиска в массиве информации о студенте с заданной фамилией.
    " . "<br>";


$students = [
    ["1", "Сибагатов", 20, "Мужской"],
    ["2", "Петрова", 22, "Женский"],
    ["3", "Сидоров", 21, "Мужской"],
    ["4", "Гаврилина", 26, "Женский"],
];


//Заполнение таблицы
function output($students) {
    echo '<table border="1" cellpadding="3px" cellspacing="0px">';
    echo '<tr>';
    echo '<th>П\П</th>';
    echo '<th>Фамилия</th>';
    echo '<th>Возраст</th>';
    echo '<th>Пол</th>';
    echo '</tr>';

    foreach ($students as $student) {
        echo '<tr>';
        echo '<td>' . $student[0] . '</td>';
        echo '<td>' . $student[1] . '</td>';
        echo '<td>' . $student[2] . '</td>';
        echo '<td>' . $student[3] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}

//Поиск молодого студента
function young($students) {
    $studentInfo = $students[0]; //ставим первого студента как основу 
    foreach ($students as $student) {
        if ($student[2] < $studentInfo[2]) { 
            $studentInfo = $student;
        }
    }
    echo "<b> Самый молодой студент: </b> " . $studentInfo[1] ." Возраст: " . $studentInfo[2] .'<br>'; 
}

//Поиск необхоимого студента
function surname($students, $surname) {
    $studentInfo = $students[0];
    foreach ($students as $student) {
        if ($student[1] == $surname) { 
            $studentInfo = $student;
        }
    }
    echo "<b> Информация о необходимом студенте: </b>" ."<br> Фамилия: " . $studentInfo[1] ."<br> Возраст: " . $studentInfo[2] ."<br> Пол: " . $studentInfo[3] .'<br>'; 
}

output($students);
young($students);
surname($students, 'Петрова')
?>