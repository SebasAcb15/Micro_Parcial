<?php
require_once('../../config/config.php');

$conexion = mysqli_connect($servidor, $username, $password, $db);

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}
?>
