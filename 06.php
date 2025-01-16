<?php include 'includes/header.php';

//mETODOS ESTATICOS
//Primer paso: Definir una clase.
class Producto {
    //Public - Se puede acceder y modificar en cualquier lugar (clase y objeto).

    //Protected - Se puede acceder/modificar unicamente en la clase.

    //Private - solo miembros de la misma clase pueden acceder a el.
    public $imagen;
    public static $imagenPlaceholder = 'imagen.jpg';

    public function __construct(protected string $nombre, public int $precio,public bool $disponible, string $imagen)
    {
        if($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerimagenProducto() {
        return self::$imagenPlaceholder;
    }
    
    public static function gettingProduct() {
        echo 'Obteniendo producto';
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
echo Producto::obtenerimagenProducto();

//Tercer paso: Instanciar.
$producto = new Producto('Pc Gamer', 200, true, '');
// $producto -> showProduct();
echo $producto-> obtenerimagenProducto();
echo $producto ->getNombre();
$producto -> setNombre('Waos');
// echo "<pre>";
// var_dump($producto);
// echo "</pre>";

$producto1 = new Producto('Play 5', 400, false, 'monitorCurvo.jpg');
// $producto1 -> showProduct();
echo $producto1 -> getNombre();
echo $producto1 -> obtenerimagenProducto();
// echo "<pre>";
// var_dump($producto1);
// echo "</pre>";