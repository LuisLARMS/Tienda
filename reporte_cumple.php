
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>reporteCumple</title>
  
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
if (!$conn) {
  die("La conexión falló debido a: " . mysqli_connect_error());
}

$sql = "SELECT * FROM cliente WHERE MONTH(fecha_cumple) = MONTH(CURRENT_DATE()) AND DAY(fecha_cumple) = DAY(CURRENT_DATE())";


$result = mysqli_query($conn, $sql);

if ($result) {
  echo "<div class = 'contenedor-tablas'>";
  echo "<h2>Clientes que cumplen en el mes de : ".date('M')." y dia : ".date('D')." </h2>";
  echo "<hr>";
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
    while($fila = mysqli_fetch_assoc($result)) {
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
  echo "<hr>";
  echo "</div>";
} else {
  echo "No hay clientes registrados.";
}

mysqli_close($conn);
?>
</body>
</html>
