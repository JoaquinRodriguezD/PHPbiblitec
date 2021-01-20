<?php

$db = "bibliotec";
$user = "root";
$passwd = "";
$host = "localhost";

$conn = mysqli_connect($host, $user, $passwd, $db);

if ($conn->connect_error) {
     die("Error de conexion: " . $conn->connect_error);
}
