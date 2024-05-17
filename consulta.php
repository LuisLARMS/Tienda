<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Data Table</title>
    
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
          echo "Error no se pudo conectar a la BD "; 
       }
       else {
           echo "Conexion exitosa";
           echo "<br><br>";
           $query = "SELECT * FROM cliente";
           if ($resultado = mysqli_query($conn, $query)) {
            echo "<div class = 'contenedor-tablas'>";
             echo "<table>"; 
             echo "<tr>"; 
             echo "<th>ID</th>";
             echo "<th>Nombre</th>";
             echo "<th>Apellido</th>";
             echo "<th>Dirección</th>";
             echo "<th>Correo</th>";
             echo "<th>Fecha de cumpleaños</th>";
             echo "<th>Fecha de registro</th>";
             echo "</tr>";
       
             while ($fila = mysqli_fetch_array($resultado)) {
                 echo "<tr>"; 
                 echo "<td>" . $fila['id'] . "</td>";
                 echo "<td>" . $fila['nombre'] . "</td>";
                 echo "<td>" . $fila['apellido'] . "</td>";
                 echo "<td>" . $fila['direccion'] . "</td>";
                 echo "<td>" . $fila['correo'] . "</td>";
                 echo "<td>" . $fila['fecha_cumple'] . "</td>";
                 echo "<td>" . $fila['fecha_registro'] . "</td>";
                 echo "</tr>"; 
             }
       
             echo "</table>"; 
       
             echo "</div>";
         }
           mysqli_close($conn);
       }
       ?>
   
</body>
</html>
<?php

