import { appendStudentToTable } from "./appendStudent.js";

$(document).ready(() => {
    $.ajax({
        url: "/crud_completo/PHP/Connection/getStudents.php",
        type: "GET",
        dataType: "json",
        success: (data) => {
            const columns = ["NOMBRE", "APELLIDO", "EDAD", "EMAIL", "ESCUELA", "EDITAR", "ELIMINAR"];
            columns.forEach((column) => {
                $("#headerRow").append(`<th scope='col'>${column}</th>`);
            });
            data.forEach((student) => {
                appendStudentToTable(student);
            });
        }
    });
});
