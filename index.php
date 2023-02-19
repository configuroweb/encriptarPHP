<?php


include_once('conexion.php');


// este es con md5 $pass = md5('1234abcd..');

// este es con hash $pass = hash('adler32', '1234abcd..');

$pass = password_hash('1234abcd..', PASSWORD_ARGON2I);
$sql = "INSERT INTO usuario (

    nombre,correo,password
) 

VALUES 
(
    'Juan','jmail@correo.com','$pass'
)";

if ($conn->query($sql) === TRUE) {

    echo "Nuevo Registro Ingresado Correctamente";
} else {

    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
