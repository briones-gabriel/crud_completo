<?php
try {
    // Credenciales para la conexion con la BDD.
    $username = "root";
    $passwd = "";

    // Conexion PDO con la BDD (MySQL).
    $pdo = new PDO("mysql:host=localhost;dbname=briones_crud_completo", $username, $passwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Sentencia SQL para obtener los datos de la tabla.
    $sql = $pdo->prepare("SELECT * FROM alumnos");
    $sql->execute();
    $students = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($students);
} catch (PDOException $e) {
    // Caso de error, se muestra un mensaje destacando lo ocurrido.
    print "[Error]: " . $e->getMessage() . "<br/>";
    die();
}
?>
