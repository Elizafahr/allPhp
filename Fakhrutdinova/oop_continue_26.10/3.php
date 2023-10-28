<!--Задача 3. Создать класс студент, имеющий имя, курс и идентификационный номер. Определить конструкторы и метод вывода на экран 
информации об объекте. Создать public-производный класс - студент-дипломник, имеющий тему диплома. Определить конструктор по умолчанию 
и метод печати. Определить методы переназначения названия диплома и идентификационного номера.-->

<?php
class student
{
    public string $name;
    public string $kurs;
    public string $id;

    public function __construct(string $name, string $kurs, string $id)
    
    {
        $this->name = $name;
        $this->kurs = $kurs;
        $this->id = $id;
    }
    public function getName(): string{
        return $this->name;
    }
    public function getKurs(): string{
        return $this->kurs;
    }
    public function getId(): string{
        return $this->id;
    }
   public function getInfo(){
    echo 'Name: ' .$this->name .', Kurs: '.$this->kurs . ', Id: ' .$this->id;
   }
   
}
class DiplomaStudent extends Student
{
    private $theme;
    
    public function __construct(int $id, string $name, int $kurs, string $theme)
    {
        $this->theme = $theme;
        parent::__construct($name, $kurs, $id);
    }
 
    public function setTheme(string $theme)
    {
        $this->theme = $theme;
    }
 
    public function setId(int $id)
    {
        $this->id = $id;
    }
 
    public function getInfo()
    {
        echo  'Id:'. $this->id .', Name:'. $this->name.', kurs:' . $this->kurs.', Theme: '.$this->theme .'<br>' ;
    }
}

$student = new DiplomaStudent(2, 'Анна', 3, 'Программирование');
$student1 = new DiplomaStudent(1, 'Иван', 4, 'Журналистика');
$student2 = new DiplomaStudent(3, 'Ольга', 4, 'Филология');

$student->getInfo();
$student->setTheme('Новая тема');
$student->getInfo();

$student1->getInfo();
$student2->getInfo();



?>