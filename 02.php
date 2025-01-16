<?php include 'includes/header.php';

//Primer paso: Definir una clase.
class Producto {
    //Segundo paso: Definir algunos atributos o clases.
    public $nombre; //Atributo o propiedades.
    public $precio;
    public $disponible;
    
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> disponible = $disponible;
    }
}

//Tercer paso: Instanciar.
$producto = new Producto('Pc Gamer', 200, true);

$producto1 = new Producto('Play 5', 400, false);

echo "<pre>";
var_dump($producto);
echo "</pre>";

echo "<pre>";
var_dump($producto1);
echo "</pre>";
include 'includes/footer.php';