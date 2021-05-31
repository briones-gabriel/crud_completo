import { appendStudentToTable } from "./appendStudent.js";

const addNewStudent = () => {
    var newStudent = {
        nombre: $("#studentName").val(),
        apellido: $("#studentSurname").val(),
        edad: $("#studentAge").val(),
        email: $("#studentEmail").val(),
        escuela: $("#studentSchool").val()
    };
    $.ajax({
        url: "/crud_completo/PHP/Connection/addStudent.php",
        type: "POST",
        dataType: "json",
        data: newStudent,
        cache: false,
        success: () => {
            appendStudentToTable(newStudent);
            $("#studentName").val("");
            $("#studentSurname").val("");
            $("#studentAge").val("");
            $("#studentEmail").val("");
            $("#studentSchool").val("");
            $("#addStudent").modal("hide");
        },
        error: (xhr, status, text) => {
            alert("Ocurrio un error inseperado al intentar agregar un alumno.\r\n" + text + `(${xhr})`);
        }
    });
};

$(document).on("click", "button#addStudentButton", addNewStudent);
