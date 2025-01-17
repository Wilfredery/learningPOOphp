<?php include 'includes/header.php';

//Incluir las clases de la carpeta clases

function mi_autoload($clase) {
    
    require __DIR__ . '/clases/' . $clase .".php";
}
spl_autoload_register('mi_autoload');

$detalles = new App\Detalles();
$clientes = new App\Clientes();

include 'includes/footer.php';