<?php
include_once 'conn.php';
if (isset($_POST['nombre'], $_POST['apellido_p'], $_POST['apellido_m'], $_POST['telefono'], $_POST['direccion'], $_POST['correo'], $_POST['contra'])) {

     $nombre = $_POST["nombre"];
     $apellido_p = $_POST["apellido_p"];
     $apellido_m = $_POST["apellido_m"];
     $telefono = $_POST["telefono"];
     $direccion = $_POST["direccion"];
     $correo = $_POST["correo"];
     $contra = $_POST["contra"];

     $query = "INSERT INTO usuario(id_usuario, usuario_nombre, usuario_apellido_p, usuario_apellido_m, telefono, direccion, usuario_correo, usuario_password) 
VALUES ('NULL','$nombre', '$apellido_p', '$apellido_m', '$telefono', '$direccion', '$correo', '$contra')";

     $result = mysqli_query($conn, $query);
     if ($result) {
          echo "exito";
     } else {
          echo "error";
     }
     mysqli_close($conn);
}
