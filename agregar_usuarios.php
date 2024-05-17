

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insert.css">
    <title>CRUD</title>
</head>
<body>
    <div class="imgs"><img src="https://i.gifer.com/origin/9d/9d39e5b316c598c42b301300c6ea1ae4_w200.webp" alt=""> </div>
    <div class="acces">
<a href="consulta.php">consulta BD</a>
    <a href="alfabetico.php">alfabetico</a>
    <a href="nuevos_viejos.php">nuevos_viejos</a>
    <a href="reporte_cumple.php">reporte_cumpleaños</a>
    <a href="agregar_usuarios.php">CRUD</a>
    <a href="correo.php">correo</a>
    </div>
    
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("La conexión falló debido a: " . mysqli_connect_error());
}


if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $fecha_cumple = $_POST['fecha_cumple'];
    $fecha_registro = $_POST['fecha_registro'];

    $sql = "INSERT INTO `cliente` (`nombre`, `apellido`, `direccion`, `telefono`, `correo`, `fecha_cumple`, `fecha_registro`) VALUES ('$nombre', '$apellido', '$direccion', '$telefono', '$correo', '$fecha_cumple', '$fecha_registro')";

    if (mysqli_query($conn, $sql)) {
        echo "Registro exitoso<br>";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conn);
    }
}

if (isset($_POST['modificar'])) {
    $id_cliente = $_POST['id_cliente'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $fecha_cumple = $_POST['fecha_cumple'];
    $fecha_registro = $_POST['fecha_registro'];

    $sql = "UPDATE `cliente` 
            SET `nombre` = '$nombre', 
                `apellido` = '$apellido', 
                `direccion` = '$direccion', 
                `telefono` = '$telefono', 
                `correo` = '$correo', 
                `fecha_cumple` = '$fecha_cumple', 
                `fecha_registro` = '$fecha_registro' 
            WHERE `id` = '$id_cliente';";

    if (mysqli_query($conn, $sql)) {
        echo "Modificación exitosa<br>";
    } else {
        echo "Error al modificar datos: " . mysqli_error($conn);
    }
}
if (isset($_POST['eliminar'])) {
    $id_cliente = $_POST['id_cliente']; 
    $sql = "DELETE FROM `cliente` WHERE `id` = $id_cliente;";
    if (mysqli_query($conn, $sql)) {
         echo "Eliminación exitosa<br>";
        } else {
         echo "Error al eliminar datos: " . mysqli_error($conn);
         }
}

mysqli_close($conn);
?>
<div class="ins">
    <div class="insert">
<form method="POST" class="insertar">
    <h4>Agregar nuevo usuario</h4>
    <h4>Digite su Nombre</h4>
    <input type="text" name="nombre">
    <h4>Digite su apellido</h4>
    <input type="text" name="apellido">
    <h4>Digite su Direccion</h4>
    <input type="text" name="direccion">
    <h4>Digite su telefono</h4>
    <input type="text" name="telefono">
    <h4>Digite su Correo</h4>
    <input type="text" name="correo">
    <h4>Digite su Fecha de Cumpleaños</h4>
    <input type="date" name="fecha_cumple">
    <h4>Digite su fecha de registro</h4>
    <input type="date" name="fecha_registro">
    <input type="submit" name="submit" value="Enviar">
</form></div><div class="modific">
<form method="POST" class="modificar">
    <h4>Digite ID del cliente que desea modificar</h4>
    <input type="number" name="id_cliente">
    <h4>Digite su Nombre</h4>
    <input type="text" name="nombre">
    <h4>Digite su apellido</h4>
    <input type="text" name="apellido">
    <h4>Digite su Direccion</h4>
    <input type="text" name="direccion">
    <h4>Digite su telefono</h4>
    <input type="text" name="telefono">
    <h4>Digite su Correo</h4>
    <input type="text" name="correo">
    <h4>Digite su Fecha de Cumpleaños</h4>
    <input type="date" name="fecha_cumple">
    <h4>Digite su fecha de registro</h4>
    <input type="date" name="fecha_registro">
    <input type="submit" name="modificar" value="Modificar">
</form>
</div><div class="delete">
<form method="POST" class="eliminar">
    <h4>Digite ID del cliente que desea eliminar de la base de datos </h4>
    <input type="number" name="id_cliente">
    <input type="submit" name="eliminar" value="eliminar">
</form></div>


</div>
</body>
</html>
