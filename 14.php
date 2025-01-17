<?php include 'includes/header.php';

//Consultar a la base de datos con MYSQLi
$db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud', '3306');
// echo "<pre>";
// var_dump($db);
// echo "</pre>";

//Creamos el query.
$query = "SELECT titulo, imagen FROM propiedades ";
//Lo preparamos.
$stmt = $db-> prepare($query);
//Lo ejecutamos.
$stmt->execute();
//Creamos la variable
$stmt->bind_result($titulo, $imagen);



while ($stmt->fetch()):
    var_dump($titulo);

endwhile;
include 'includes/footer.php';