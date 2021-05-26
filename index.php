<?php
try {
    // Credenciales para la conexion con la BDD.
    $username = "root";
    $passwd = "";

    // Conexion PDO con la BDD (MySQL).
    $pdo = new PDO("mysql:host=localhost;dbname=briones_crud_completo", $username, $passwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Sentencia SQL para obtener los datos de la tabla.
    $sql = $pdo->query("SELECT * FROM alumnos");
    $students = $sql->fetchAll();

} catch (PDOException $e) {
    // Caso de error, se muestra un mensaje destacando lo ocurrido.
    print "[Error]: " . $e->getMessage() . "<br/>";
    die();
}
?>

<!--TODO: implement AJAX-->
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CRUD Completo</title>
</head>
<body class="container py-5">
        <h1 class="d-inline-flex">Tabla de alumnos</h1>
        <button class="btn btn-primary float-end">
            <i class="fa fa-plus me-2 align-middle"></i>
            <span>Agregar alumno</span>
        </button>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="search-bar" placeholder="Escriba para buscar">
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Email</th>
                        <th scope="col">Escuela</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $studentsRow) : ?>
                        <tr class="student-row">
                            <th scope="row" class="align-middle"><?php echo $studentsRow[0]; $i++; ?></th>
                            <?php $i = 1; while ($i < 6) : ?>
                                <td class="align-middle"><?php echo $studentsRow[$i]; $i++; ?></td>
                            <?php endwhile; ?>
                            <td>
                                <button class="btn align-middle"><i class="fa fa-pencil-square-o"></i></button>
                            </td>
                            <td>
                                <button class="btn align-middle"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
<script src="./JavaScript/script.js"></script>
</html>
