<?php
// Incluir el archivo de conexión
include 'conexion.php'; // Asegúrate de que el archivo conexion.php está en la misma carpeta

// Consulta para obtener los datos
$sql = "SELECT idusuario, usuario, contraseña FROM usuario"; // Ajusta el nombre de la tabla y los campos si es necesario
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Si hay datos, mostramos una tabla HTML
    echo "<h2>Usuarios</h2>";
    echo "<table border='1'>

            <tr>
                <th>idusuario</th>
                <th>usuario</th>
                <th>contraseña</th>
            </tr>";
    
    // Recorrer los resultados y mostrar los datos en la tabla
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $fila["idusuario"] . "</td>
                <td>" . $fila["usuario"] . "</td>
                <td>" . $fila["contraseña"] . "</td>
              </tr>";
    }
    
    echo "</table>";
} else {
    echo "No hay datos para mostrar.";
}

// Cerrar la conexión
$conn->close();
?>


<?php
include 'conexion.php';  // Incluir el archivo de conexión

// Consulta para obtener los registros de usuarios
$sql = "SELECT * FROM registrarse";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>registrarse</h2>";
    echo "<table border='1'>
            <tr>
                <th>idregistrarse</th>
                <th>nombrecompleto</th>
                <th>email</th>
                <th>usuario</th>
                <th>contraseña</th>
            </tr>";
    // Mostrar los datos en una tabla HTML
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["idregistrarse"]."</td>
                <td>".$row["nombre completo"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["usuario"]."</td>
                <td>".$row["contraseña"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay datos para mostrar.";
}

$conn->close(); // Cerrar la conexión
?>

<?php
include 'conexion.php';  // Incluir el archivo de conexión

// Consulta para obtener los comentarios
$sql = "SELECT idcomentarios, idusuario,comentario,calificacion, fecha  FROM comentarios";
       
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>comentarios</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID Comentario</th>
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Calificación</th>
                <th>Fecha</th>
            </tr>";
    // Mostrar los datos en una tabla HTML
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["idcomentarios"]."</td>
                <td>".$row["idusuario"]."</td>
                <td>".$row["comentario"]."</td>
                <td>".$row["calificacion"]."</td>
                <td>".$row["fecha"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay comentarios para mostrar.";
}

$conn->close(); // Cerrar la conexión
?>

<?php
include 'conexion.php';  // Incluir el archivo de conexión

// Consulta para obtener los registros de suscriptores
$sql = "SELECT * FROM suscribirse";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Suscritos</h2>";
    echo "<table border='1'>
            <tr>
                <th>idsuscribirse</th>
                <th>email</th>
                <th>fecha</th>
            </tr>";
    // Mostrar los datos en una tabla HTML
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["idsuscribirse"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["fecha"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay suscripciones para mostrar.";
}

$conn->close(); // Cerrar la conexión
?>
