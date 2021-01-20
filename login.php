<?php
include_once 'conn.php';

$usuario = $_POST["user"];
$contra = $_POST["pass"];

$query = "SELECT usuario_nombre FROM usuario WHERE usuario_correo = '$usuario' AND usuario_password = '$contra'";

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {

     $row = mysqli_fetch_assoc($result);
     //echo "Bienvenido " . $row['usuario_nombre'] . "";
     echo "exito";
} else {

     echo "Fallo";
}

mysqli_close($conn);
