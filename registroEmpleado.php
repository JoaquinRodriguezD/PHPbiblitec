<?php
include_once 'conn.php';
if (isset($_POST['nombre'], $_POST['apellido_p'], $_POST['apellido_m'], $_POST['correo'], $_POST['contra'])) {

     $nombre = $_POST["nombre"];
     $apellido_p = $_POST["apellido_p"];
     $apellido_m = $_POST["apellido_m"];
     $correo = $_POST["correo"];
     $contra = $_POST["contra"];

     $query = "INSERT INTO empleado(id_empleado, empleado_nombre, empleado_apellido_p, empleado_apellido_m, empleado_correo, empleado_password) 
VALUES ('NULL','$nombre', '$apellido_p', '$apellido_m', '$correo', '$contra')";

     $result = mysqli_query($conn, $query);
     if ($result) {
          echo "exito";
     } else {
          echo "error";
     }
     mysqli_close($conn);
}
