<!--3.	Создать класс Book с закрытыми свойствами название и автор и методами, 
позволяющими установить и считать значения этих свойств. Создать два объекта данного класса 
и вывести на экран названия и авторов данных книг.-->

<?php
class Book
{
    public string $name;
    public string $autor;
    public function __construct(string $name, string $autor)
    {
        $this->name = $name;
        $this->autor = $autor;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getAutor(): string
    {
        return $this->autor;
    }
}

$book = new Book('name', 'autor');
echo ' Название книги - ' . $book->getName() . ' Автор книги - ' .  $book->getAutor();
?>


<?php
// <!-- class Book {
//     private string $name;
//     private string $autor;
//     // public function __construct(string $name, string $autor) {
//     //     $this->name = $name;
//     //     $this->autor = $autor;
//     // }d

//    public function getName(): string {  
//     return $this->name;

//    }
//    public function setName($name){  
//     return $this->name = $name;
//    }
//    public function getAutor(): string {
//     return $this->autor;}
//     public function setAutor($Autor){  
//         return $this->autor = $Autor;
//        }

// }

// $book = new Book('name', 'autor');
// // $book->setName('Name');
// // $book->setAutor('Autor');
// echo ' Название книги - '. $book-> getName() .', Автор книги - '.  $book->getAutor();


?>