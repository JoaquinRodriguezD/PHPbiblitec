<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'bibliotec');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     die();
}
$usuario = $_GET["correo"];

$stmt = $conn->prepare("SELECT b.titulo, c.fecha_prestamo, c.fecha_devolucion, b.foto
FROM usuario a, libro b, prestamo c
WHERE a.usuario_correo = '$usuario' AND a.id_usuario=c.id_usuario AND b.id_libro=c.id_libro;");

//executing the query 
$stmt->execute();

//binding results to the query 
$stmt->bind_result($titulo, $fecha_prestamo, $fecha_devolucion, $foto);

$prestamos = array();

//traversing through all the result 
while ($stmt->fetch()) {
     $temp = array();
     $temp['titulo'] = $titulo;
     $temp['fecha_prestamo'] = $fecha_prestamo;
     $temp['fecha_devolucion'] = $fecha_devolucion;
     $temp['foto'] = $foto;
     array_push($prestamos, $temp);
}

//displaying the result in json format 
echo json_encode($prestamos);
