<?php include 'includes/header.php';

//ENCAPSULACION
//Primer paso: Definir una clase.
class Producto {
    //Public - Se puede acceder y modificar en cualquier lugar (clase y objeto).

    //Protected - Se puede acceder/modificar unicamente en la clase.

    //Private - solo miembros de la misma clase pueden acceder a el.

    public function __construct(protected string $nombre, public int $precio,public bool $disponible)
    {
    }

    public function showProduct() : void {
        echo "El producto es: " . $this -> nombre . " y su precio es de: $" . $this -> precio . " y su estado es: " . $this -> disponible;
    }

    public function getNombre() : string {
        return $this -> nombre;
    }

    public function setNombre(string $nombre) {
        $this -> nombre = $nombre;
    }
}

//Tercer paso: Instanciar.
$producto = new Producto('Pc Gamer', 200, true);
// $producto -> showProduct();
$producto -> setNombre('Nuevo nombre');
echo $producto ->getNombre();
// echo "<pre>";
// var_dump($producto);
// echo "</pre>";

$producto1 = new Producto('Play 5', 400, false);
// $producto1 -> showProduct();

// echo "<pre>";
// var_dump($producto1);
// echo "</pre>";
include 'includes/footer.php';