<?php include 'includes/header.php';
require 'vendor/autoload.php';

// Incluir las clases de la carpeta clases
use App\Clientes;
use App\Detalles;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'example_key';
$payload = [
    'iss' => 'http://example.org',
    'aud' => 'http://example.com',
    'iat' => 1356999524,
    'nbf' => 1357000000
];

// Codificar el JWT
$jwt = JWT::encode($payload, $key, 'HS256');

// Decodificar el JWT
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));
print_r($decoded);

// Crear un objeto stdClass para los encabezados
$headers = new stdClass();
$decoded = JWT::decode($jwt, new Key($key, 'HS256'), $headers);
print_r($headers);

// Convertir a array asociativo
$decoded_array = (array) $decoded;

// Configurar leeway
JWT::$leeway = 60; // $leeway en segundos
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));

// Crear instancias de las clases
echo "<br>";
echo "<br>";
$detalles = new Detalles();
echo "<br>";
$clientes = new Clientes();
echo "<br>";

include 'includes/footer.php';