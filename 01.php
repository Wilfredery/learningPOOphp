<?php include 'includes/header.php';

//Primer paso: Definir una clase.
class Producto {
    //Segundo paso: Definir algunos atributos o clases.
    public $nombre; //Atributo o propiedades.
    public $precio;
    public $disponible;

}

//Tercer paso: Instanciar.
$producto = new Producto();
$producto -> nombre = 'PC gamer';
$producto -> precio = 200;
$producto-> disponible = true;

$producto1 = new Producto();
$producto1 -> nombre = 'Play 5';
$producto1 -> precio = 400;
$producto1-> disponible = false;
echo "<pre>";
var_dump($producto);
echo "</pre>";

echo "<pre>";
var_dump($producto1);
echo "</pre>";
include 'includes/footer.php';