<!--Задача 4. Описать класс «комната», содержащий сведения о метраже, высоте потолков и количестве окон. 
Предусмотреть инициализацию с проверкой допустимости значений полей. В случае недопустимых значений полей выбрасываются исключения.
Описать методы вычисления площади и объема комнаты и свойства для получения состояния объекта.
Написать программу, демонстрирующую все разработанные элементы класса.
Создать дочерний класс «комната». Предусмотреть метод для расчета необходимого количества обоев при ремонте.
-->

<?php
class Room
{
    public $metres;
    public $height;
    public $wind;

    public function __construct($metres, $height, $wind)
    {
        if ($metres <= 0 || $height <= 0 || $wind < 0) {
            throw new InvalidArgumentException("Неверные параетры, числа должны быть больше 0");
        }
        $this->metres = $metres;
        $this->height = $height;
        $this->wind = $wind;
    }

    public function getArea()
    {return $this->metres * $this->metres;}

    public function getVolume()
    {return $this->metres * $this->metres * $this->height;}

    public function getInfo()
    {return 'Метров: ' . $this->metres . ' <br> Высота: ' . $this->height . '<br> Количество окон: ' . $this->wind;}
}

try {
    $room = new Room(5, 3, 2);
    echo "Площадь комнаты: " . $room->getArea() . "м. кв <br>";
    echo "Обьем комнаты: " . $room->getVolume() . " м. куб <br>";
    echo $room->getInfo() . " <br>";
} 
catch (InvalidArgumentException $e) {
    echo "Ошибка! <br>" . $e->getMessage() . "\n";
}

class calkWallpaper extends Room
{
    public function calkWallpaper($wallpaperWidth)
    {
        $wallpaperArea = ($this->metres * $this->height) * 4 - ($this->wind * $wallpaperWidth);
        echo "Обои: " . $wallpaperArea . "м. кв <br>" ;
    }
}
    $wallpaper = new calkWallpaper(5, 3, 2);    
    echo $wallpaper->calkWallpaper(1.5) ;
?>