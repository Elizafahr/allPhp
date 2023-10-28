<!DOCTYPE html>
<html>
<head>
    <title>Warehouse</title>
</head>
<style>
    body{
        padding:0 40px;
    }
    input, label{
        margin-top: 5px
    }
    h3{
        
        margin-bottom: 5px
    }
</style>
<body>
    <h1>Список товаров на складе</h1>
        <?php 

        class Product {
            private $name;
            private $price;
            private $quantity;
        
            public function __construct($name, $price, $quantity) {
                $this->name = $name;
                $this->price = $price;
                $this->quantity = $quantity;
            }
        
            public function getName() {
                return $this->name;
            }
        
            public function getPrice() {
                return $this->price;
            }
        
            public function getQuantity() {
                return $this->quantity;
            }
        }
        
        class Warehouse {
            private $products = [];
        
            public function addProduct(Product $product) {
                $name = $product->getName();
                if (isset($this->products[$name])) {
                    $this->products[$name]->quantity += $product->getQuantity();
                } 
                else {
                    $this->products[$name] = $product;
                }
            }
        
            public function removeProduct($productName) {
                if (isset($this->products[$productName])) {
                    unset($this->products[$productName]);
                }
            }
        
            public function listProducts() {
                foreach ($this->products as $product) {
                    echo "<br>  Товар: " . $product->getName() . ', Цена: '. $product->getPrice() . ", Количество: " . $product->getQuantity() . "\n";
                }
            }
        
            public function getQuantityByName($productName) {
                if (isset($this->products[$productName])) {
                    return $this->products[$productName]->getQuantity();
                } else {
                    return 0;
                }
            }
        }
        
        $product1 = new Product("Телевизор", 30000, 100);
        $product2 = new Product("Кофемашина", 45000, 50);
        $product3 = new Product("Термопот", 10000, 75);
        
        $warehouse = new Warehouse();
        
        $warehouse->addProduct($product1);
        $warehouse->addProduct($product2);
        $warehouse->addProduct($product3);
        
        echo "Список товаров на складе: ";
        $warehouse->listProducts();
        
        $productName = "Товар 2 ";
        echo "<br> Количество товара '$productName' на складе: " . $warehouse->getQuantityByName($productName) . "\n";
        
        $productNameToRemove = "Телевизор";
        $warehouse->removeProduct($productNameToRemove);
        
        echo "<br><br>Список товаров на складе после удаления '$productNameToRemove':\n";
        $warehouse->listProducts();

        if (!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['quantity'])) 
        {
            $product = new Product($_POST['name'], $_POST['price'], $_POST['quantity']);
            $warehouse->addProduct($product);
            echo "<br> Товар: " . $product->getName() . ', Цена: '. $product->getPrice() . ", Количество: " . $product->getQuantity();
        }

        if (!empty($_POST['remove'])) {
            $productNameToRemove = $_POST['remove'];
            $warehouse->removeProduct($productNameToRemove);
        }
        ?>

    <h3>Добавить товар</h3>
    <form method="POST" >
        <label for="name">Название товара:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="price">Цена:</label>
        <input type="number" id="price" name="price" required><br>

        <label for="quantity">Количество:</label>
        <input type="number" id="quantity" name="quantity" required><br>

        <input type="submit" value="Добавить">
    </form>

    <h3>Удалить товар</h3>
    <form method="POST" >
        <label for="remove">Название товара:</label>
        <input type="text" id="remove" name="remove" required><br>
        <input type="submit" value="Удалить">
    </form>
</body>
</html>

