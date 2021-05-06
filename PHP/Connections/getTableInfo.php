<?php
session_start();
include_once "./PDO.php";

$sql = $pdo->prepare("SELECT * FROM alumnos");
$sql->execute();
$students = $sql->fetchAll();

$_SESSION["students"] = $students;

header("Location: ../Views/table.php");