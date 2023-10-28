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