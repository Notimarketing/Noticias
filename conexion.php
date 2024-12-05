<?php
// Datos de conexión
$servidor = "localhost"; // Host de la base de datos (en local, usualmente es localhost)
$usuario = "root"; // Nombre de usuario de MySQL (por defecto en XAMPP es root)
$contraseña = ""; // Contraseña de MySQL (por defecto en XAMPP es vacío)
$base_de_datos = "notimarketing2"; // Nombre de tu base de datos en phpMyAdmin

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

// Comprobar si hay error en la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
