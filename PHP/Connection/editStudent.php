<?php
include_once "./connection.php";

$ID = $_POST["ID"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$email = $_POST["email"];
$escuela = $_POST["escuela"];

// Sentencia SQL para obtener los datos de la tabla.
$query = "UPDATE alumnos
SET nombre = ?, apellido = ?, edad = ?, email = ?, escuela = ?
WHERE id = ?";

$sql = $pdo->prepare($query);
$sql->execute([$nombre, $apellido, $edad, $email, $escuela, $ID]);

echo json_encode("Update executed successfully!");
?>
