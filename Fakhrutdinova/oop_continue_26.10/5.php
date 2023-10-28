<!--Задача 5. Реализуйте абстрактный класс User, а также классы Employee и Student, наследующие от него.-->
<?php

abstract class User {
    protected $name;
    protected $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    abstract public function getInfo();
}

class Employee extends User {
    private $position;

    public function __construct($name, $email, $position) {
        parent::__construct($name, $email);
        $this->position = $position;
    }

    public function getInfo() {
        return "Сотрудник: {$this->name}, Email: {$this->email}, Должность: {$this->position} <br>";
    }
}

class Student extends User {
    private $university;

    public function __construct($name, $email, $university) {
        parent::__construct($name, $email);
        $this->university = $university;
    }

    public function getInfo() {
        return "Студент: {$this->name}, Email: {$this->email}, Университет: {$this->university} <br>";
    }
}

$employee = new Employee("Анна Иванова", "ann@mail.com", "Копирайтер");
$student = new student("Юлия Августовская", "julia@mail.com", "МГУ");

echo $employee->getInfo(); 
echo "\n";
echo $student->getInfo();

?>