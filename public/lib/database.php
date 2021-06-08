<?php

$dbUser = 'root';
$dbPassword = '1234';
$dbHost = 'localhost';
$dbDatabase = 'employees';

try {
    $dbConnexion = new PDO("mysql:host=${dbHost};dbname=${dbDatabase}", $dbUser, $dbPassword);
    $dbConnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) { //catch siempre recibe una excepción, $e se refiere al lenguage tipado
    echo 'Error en la conexión a la base de datos: ' . $e->getmessage();
}

?>