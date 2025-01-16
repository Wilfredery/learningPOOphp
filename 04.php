<?php include 'includes/header.php';

//Primer paso: Definir una clase.
class Producto {
    
    public function __construct(public string $nombre, public int $precio,public bool $disponible)
    {
    }

    public function showProduct() {
        echo "El producto es: " . $this -> nombre . " y su precio es de: $" . $this -> precio . " y su estado es: " . $this -> disponible;
    }
}

//Tercer paso: Instanciar.
$producto = new Producto('Pc Gamer', 200, true);
$producto -> showProduct();
echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto1 = new Producto('Play 5', 400, false);
$producto1 -> showProduct();
echo "<pre>";
var_dump($producto1);
echo "</pre>";
include 'includes/footer.php';