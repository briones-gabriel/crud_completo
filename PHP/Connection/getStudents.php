<?php
include_once "./connection.php";

// Sentencia SQL para obtener los datos de la tabla.
$sql = $pdo->prepare("SELECT ID, nombre, apellido, edad, email, escuela FROM alumnos");
$sql->execute();
$students = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($students);
?>
