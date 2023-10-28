<!--4.	Создать класс Point с закрытыми свойствами x, y, конструктором класса, получающим на вход значения координат и 
методами, позволяющими вывести значения координат на экран. Создать объект данного класса и вывести значения координат 
на экран.-->

<?php
class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function displayCoordinates()
    {
        echo "Координаты точки: ({$this->x}, {$this->y})";
    }
}

$point = new Point(3, 5);

$point->displayCoordinates();
?>