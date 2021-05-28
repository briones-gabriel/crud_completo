<!--TODO: implement AJAX-->
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
                <tbody id="tableBody">
                </tbody>
            </table>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
<script src="./JavaScript/getStudents.js"></script>
<script>
    let searchBar = document.getElementById("search-bar");
    let tableRows = document.getElementsByClassName("student-row");
    function handleKeyPress() {
        const searchBarText = searchBar.value;

        for (const row of tableRows) {
            let fullName = row.children[1].innerText + " " + row.children[2].innerText;

            if (!fullName.toLowerCase().includes(searchBarText.toLowerCase())) {
                row.style.display = "none";
            } else {
                row.style.display = "";
            }
        }
    }
    searchBar.addEventListener("keyup", handleKeyPress, false)
</script>
</html>
