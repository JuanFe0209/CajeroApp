<?php

require_once "conexion.php";

$nombre = filter_input(INPUT_POST,'nombre');
$correo = filter_input(INPUT_POST, 'correo');
$password = filter_input(INPUT_POST,'password');

$sqlt = "INSERT INTO usuario (nombre,correo,password)
        VALUES ('$nombre','$correo','$password');";

$sqlt = Conexion::conectar()->prepare($sqlt);
$sqlt -> execute();