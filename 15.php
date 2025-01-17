<?php include 'includes/header.php';

//Conectar a la base de datos con PDO.
$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'root');

$query = "SELECT titulo, imagen FROM propiedades";

//Lo preparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

//Obtener los resultados
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC );

//Iterar.
foreach($resultado as $propiedad):
    echo $propiedad["titulo"];
    echo '<br>';
    echo $propiedad['imagen'];
    echo '<br>';
endforeach;
// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";
include 'includes/footer.php';