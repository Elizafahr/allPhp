<!-- 1.	Создать класс Cat с открытыми свойствами имя, цвет, вес и методом, выводящим на экран  «Привет! Меня зовут …». 
Создать два объекта данного класса и вывести для каждого приветствия. -->

<?php
class cats {
    public string $name;
    public string $color;
    public string $weigth;
    public function __construct(string $name, string $color,string $weigth) {
        $this->name= $name;
        $this->color= $color;
        $this->weigth= $weigth;
    }
    public function getName(){
        return $this->name .'<br>';
    }
}

$cat = new cats('Barsik', 'black', '4500');
$cat1 = new cats('Murzik', 'blond', '3000');

echo 'Меня зовут '. $cat->getName();
echo 'Меня зовут '. $cat1->getName();

?>