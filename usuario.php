<?php

//importar la conexion
require 'includes/config/database.php';
$db = conectarDB();
//Crear un Email y Password
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//Query para crear el Usuario
$query = " INSERT INTO usuarios (email, password) VALUES ( '${email}', '${passwordHash}'); ";

//Agregar a la base de datos
mysqli_query($db, $query);