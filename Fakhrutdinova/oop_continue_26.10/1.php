<!--	Задача 1. Напишите скрипт с классом, в котором есть закрытое статическое
целочисленное поле с начальным нулевым значением. В классе должен
быть описан статический метод, при вызове которого отображается текущее значение статического поля, после чего значение поля увеличивается на единицу.
 -->

<?php
class ststicClass {
    private static $num = 0;

    public static function plus() {
        echo "Текущее значение: " . self::$num . "<br>";
        self::$num++;
    }
}
ststicClass::plus(); 
ststicClass::plus(); 
ststicClass::plus(); 

?>