Hacer una sencilla app web que realice las operaciones CRUD
El sistema debe solucionar la necesidad de una tienda que necesita tener ordenados a sus clientes.
Los datos de cada cliente serán: 
	-Nombre
	-Apellido
	-Dirección
	-Teléfono
	-Correo electrónico
	-Fecha de cumpleaños
	-Fecha de registro
El dueño de la tienda necesita tener listado ordenado alfabéticamente por apellido
Necesita también un listado de clientes por servicio de correo (todos los clientes con correo de hotmail, todos los clientes con correo de google, etc)
Necesita poder consultar cuáles clientes tienen mayor antigüedad de registrados y cuáles son los clientes más nuevos
Necesita también un listado que muestre a los clientes que cumplen años en mes que está vigente cuando se saque el reporte.
 
Es evidente que la app debe permitir agregar registros, actualizar por lo menos un dato, borrar un cliente y obtener todos los reportes que se mencionan.
 
La fecha límite de entrega es el próximo jueves 16 de mayo de 2024
La presentación de su sistema se hará en una sesión en línea.
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";
$conexion = mysqli_connect($servername, $username, $password, $dbname) or die("conexion fallida debido al error : ".mysqli_connect_error());

if ($conexion) {
    echo "conexion exitosa";
    echo "informacion del host: ".mysqli_get_host_info($conexion);
    echo "<br>" ;

}

?>