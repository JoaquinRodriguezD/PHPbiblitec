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

$stmt = $conn->prepare("SELECT titulo, autor, editorial, descripcion, foto
FROM libro
WHERE reserva > 1");

//executing the query 
$stmt->execute();

//binding results to the query 
$stmt->bind_result($titulo, $autor, $editorial, $descripcion, $foto);

$prestamos = array();

//traversing through all the result 
while ($stmt->fetch()) {
     $temp = array();
     $temp['titulo'] = $titulo;
     $temp['autor'] = $autor;
     $temp['editorial'] = $editorial;
     $temp['descripcion'] = $descripcion;
     $temp['foto'] = $foto;
     array_push($prestamos, $temp);
}

//displaying the result in json format 
echo json_encode($prestamos);
