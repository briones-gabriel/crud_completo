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
            $("#addStudent").modal("hide");
        }
    });
};

$(document).ready(() => {
    $("#addStudentButton").on("click", addNewStudent);
});
