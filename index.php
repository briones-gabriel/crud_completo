<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
    <title>CRUD Completo</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tabla de alumnos</a>
            <form class="d-flex">
                <input type="search" style="width: 30rem;" class="form-control" id="search-bar" placeholder="Buscar alumnos">
            </form>
            <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#addStudent">
                <i class="fa fa-plus me-2 align-middle"></i>
                <span>Agregar alumno</span>
            </button>
        </div>
    </nav>

    <div class="py-2">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-light"><tr id="headerRow">
                    <!--getStudents.js-->
                </tr></thead>
                <tbody id="tableBody">
                    <!--getStudents.js-->
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script type="module" src="./JavaScript/index.js"></script>
</html>
<!--Modals-->
<?php include_once "./PHP/Views/modals.php"; ?>
