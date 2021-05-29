<?php
include_once "./connection.php";

$idToDelete = $_POST["ID"];

// Sentencia SQL para obtener los datos de la tabla.
$query = "DELETE FROM alumnos WHERE ID = (?)";
$sql = $pdo->prepare($query);
$sql->execute([$idToDelete]);

echo json_encode("Query executed succesfully!");
?>
