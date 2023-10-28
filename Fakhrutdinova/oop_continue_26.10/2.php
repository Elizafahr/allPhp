<!--Задача 2. Разработайте приложение с классом Person с полями Name и Age. Создать список не менее 
5 персон и вывести этот список на экран. Реализуйте добавление нового экземпляра класса в список.-->

<?php
class Person  {
    private $Name;
    private $Age;
    public function __construct($name, $price,) {
        $this->Name = $name;
        $this->Age = $price;
    }
    public function getName() {
        return $this->Name;
    }
    public function getAge() {
        return $this->Age;
    }
}

class listPerson {
    private $persons = [];

    public function addPerson(Person $person) {
        $name = $person->getName();
        $this->persons[$name] = $person;
        
    }
    public function listPerson() {
        echo"<ul>";
        foreach ($this->persons as $person) {
            echo "<br>  <li> Имя: " . $person->getName() . ", Вораст: " . $person->getAge() . "</li> \n";
        }
        echo"</ul>";

    }
}

$person1 = new Person("Анна",16);
$person2 = new Person("Олег",23);
$person3 = new Person("Мария",20);
$person4 = new Person("Иван",16);
$person5 = new Person("Михаил",23);
$person6 = new Person("Валерия",20);

$listPerson = new listPerson();

$listPerson->addPerson($person1);
$listPerson->addPerson($person2);
$listPerson->addPerson($person3);
$listPerson->addPerson($person4);
$listPerson->addPerson($person5);
$listPerson->addPerson($person6);

echo "<h3>Список персон: </h3>";
$listPerson->listPerson();

?>