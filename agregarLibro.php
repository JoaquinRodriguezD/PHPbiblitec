<?php
include_once 'conn.php';
//if (isset($_POST['titulo'], $_POST['autor'], $_POST['editorial'], $_POST['edicion'], $_POST['isbn'], $_POST['fechapub'], $_POST['descripcion'], $_POST['estado'], $_POST['reserva'])) {

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$edicion = $_POST["edicion"];
$isbn = $_POST["isbn"];
$fechapu = $_POST["fechapu"];
$descripcion = $_POST["descripcion"];
$estado = $_POST["estado"];
$reserva = $_POST["reserva"];

$query = "INSERT INTO libro(id_libro, titulo, autor, editorial, edicion, isbn, fecha_publicacion, descripcion, estado, reserva) 
VALUES ('NULL','$titulo', '$autor', '$editorial', '$edicion', '$isbn', '$fechapu','$descripcion','$estado','$reserva')";

$result = mysqli_query($conn, $query);
if ($result) {
     echo "exito";
} else {
     echo "error";
}

mysqli_close($conn);
