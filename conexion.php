<?php

// Datos de conexión para XAMPP.
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDatos = "tienda_db";
$puerto = 3306;

// Activar excepciones cuando ocurre un error de MySQL.
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Crear la conexión.
$conexion = new mysqli(
    $servidor,
    $usuario,
    $clave,
    $baseDatos,
    $puerto
);

// Permitir tildes, ñ y emojis.
$conexion->set_charset("utf8mb4");

