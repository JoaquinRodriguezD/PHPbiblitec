<?php
include_once 'conn.php';

$id_libro = $_POST["libro"];
$fecha_prestamo = $_POST["fechap"];
$fecha_devolucion = $_POST["fechad"];

$query = "INSERT INTO
prestamo (id_prestamo, id_libro, fecha_prestamo, fecha_devolucion, id_empleado, id_usuario)
VALUES ('NULL', '$id_libro','$fecha_prestamo','$fecha_devolucion','18','2');";

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {

     $row = mysqli_fetch_assoc($result);
     echo "exito";
} else {

     echo "Fallo";
}

mysqli_close($conn);
