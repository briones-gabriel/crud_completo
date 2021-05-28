<?php
include_once "./connection.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$email = $_POST["email"];
$escuela = $_POST["escuela"];

// Sentencia SQL para obtener los datos de la tabla.
$query = "INSERT INTO alumnos (nombre, apellido, edad, email, escuela) VALUES (?, ?, ?, ?, ?)";
$sql = $pdo->prepare($query);
$sql->execute([$nombre, $apellido, $edad, $email, $escuela]);

echo json_encode("Query executed succesfully!");
?>
