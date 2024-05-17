
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link rel="stylesheet" href="links.css">
</head>
<body>
<div class="linkss">
<a href="consulta.php">consulta BD</a>
    <a href="alfabetico.php">alfabetico</a>
    <a href="nuevos_viejos.php">nuevos_viejos</a>
    <a href="reporte_cumple.php">reporte_cumpleaños</a>
    <a href="agregar_usuarios.php">CRUD</a>
    <a href="correo.php">correo</a>
    </div>
    <?php
 $conn  = mysqli_connect("localhost", "root","", "tienda");
$email= "%@gmail.com"; 

$sql = "SELECT * FROM cliente WHERE correo LIKE '$email'";
$result = mysqli_query($conn, $sql);

if ($result) {
  echo "<div class = 'contenedor-tablas'>";
  echo "<h2>Clientes con Correo " . $email . "</h2>";
  echo "<table>";
    echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>Nombre</th>";
      echo "<th>Apellido</th>";
      echo "<th>Dirección</th>";
      echo "<th>Teléfono</th>";
      echo "<th>Correo</th>";
      echo "<th>Fecha de Cumpleaños</th>";
      echo "<th>Fecha de Registro</th>";
    echo "</tr>";

    while ($fila = mysqli_fetch_assoc($result)) {
      echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellido'] . "</td>";
        echo "<td>" . $fila['direccion'] . "</td>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "<td>" . $fila['correo'] . "</td>";
        echo "<td>" . $fila['fecha_cumple'] . "</td>";
        echo "<td>" . $fila['fecha_registro'] . "</td>";
      echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
  echo "No hay clientes con correo " . $email . ".";
}

$hotmail = "%@hotmail.com";
$sql = "SELECT * FROM cliente WHERE correo LIKE '$hotmail'";
$result = mysqli_query($conn, $sql);

if ($result) {
  echo "<div class = 'contenedor-tablas'>";
  echo "<h2>Clientes con Correo " . $hotmail . "</h2>";
  echo "<table>";
    echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>Nombre</th>";
      echo "<th>Apellido</th>";
      echo "<th>Dirección</th>";
      echo "<th>Teléfono</th>";
      echo "<th>Correo</th>";
      echo "<th>Fecha de Cumpleaños</th>";
      echo "<th>Fecha de Registro</th>";
    echo "</tr>";

    while ($fila = mysqli_fetch_assoc($result)) {
      echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellido'] . "</td>";
        echo "<td>" . $fila['direccion'] . "</td>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "<td>" . $fila['correo'] . "</td>";
        echo "<td>" . $fila['fecha_cumple'] . "</td>";
        echo "<td>" . $fila['fecha_registro'] . "</td>";
      echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
  echo "No hay clientes con correo " . $hotmail . ".";
}
mysqli_close($conn);
?>
</body>
</html>