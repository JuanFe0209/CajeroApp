<?php
require_once "conection.php";

$nombre = filter_input(INPUT_POST, 'nombre');
$correo = filter_input(INPUT_POST, 'correo');
$password = filter_input(INPUT_POST, 'password');

$sqlt = "INSERT INTO usuario (nombre,correo,password) VALUES ('$nombre','$correo','$password')";
$stmt = conection::conectar()->prepare($sqlt);
$stmt -> execute();