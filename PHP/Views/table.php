<?php
session_start();
include_once "../Connections/PDO.php";

$students = $_SESSION["students"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>CRUD Completo</title>
</head>
<body class="container py-5">
    <h1>Tabla de alumnos</h1>
    <table class="table">
        <!-- Table Header -->
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
            <td>Email</td>
            <td>Escuela</td>
        </tr>
        <!-- Table Body -->
            <?php $students[0]["ID"]; ?>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>