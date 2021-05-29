$(document).on("show.bs.modal", "#editStudent", function(event) { 
    var button = event.relatedTarget;

    var ID = button.getAttribute("data-id");
    var nombre = button.getAttribute("data-nombre");
    var apellido = button.getAttribute("data-apellido");
    var edad = button.getAttribute("data-edad");
    var email = button.getAttribute("data-email");
    var escuela = button.getAttribute("data-escuela");

    $("#editStudentName").val(nombre);
    $("#editStudentSurname").val(apellido);
    $("#editStudentAge").val(edad);
    $("#editStudentEmail").val(email);
    $("#editStudentSchool").val(escuela);

    $("#editStudentButton").on("click", function() {
        console.log("hello");
        $.ajax({
            url: "/crud_completo/PHP/Connection/editStudent.php",
            type: "POST",
            dataType: "json",
            data: {
                ID: ID,
                nombre: $("#editStudentName").val(),
                apellido: $("#editStudentSurname").val(),
                edad: $("#editStudentAge").val(),
                email: $("#editStudentEmail").val(),
                escuela: $("#editStudentSchool").val(),
            },
            cache: false,
            success: () => {
                $("#editStudent").modal("hide");
                location.reload();
            }
        });
    });
});