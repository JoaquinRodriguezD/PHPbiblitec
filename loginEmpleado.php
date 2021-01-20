<?php
include_once 'conn.php';

$usuario = $_POST["user"];
$contra = $_POST["pass"];

$query = "SELECT empleado_nombre FROM empleado WHERE empleado_correo = '$usuario' AND empleado_password = '$contra'";

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {

     $row = mysqli_fetch_assoc($result);
     //echo "Bienvenido " . $row['usuario_nombre'] . "";
     echo "exito";
} else {

     echo "Fallo";
}

mysqli_close($conn);
