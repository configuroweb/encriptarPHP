<?php

$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$nombreBD = 'contrasena';

$conn = new mysqli($host, $usuario, $contrasena, $nombreBD);

if (!$conn) {

    die('Falló la conexión compadre/comadre');
}
