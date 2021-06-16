import { appendStudentToTable } from "./appendStudent.js";

$(document).ready(() => {
    $.ajax({
        url: document.location.pathname + "PHP/Connection/getStudents.php",
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
        },
        error: (xhr, status, text) => document.write(`
            <h4>Ocurrio un error inesperado al intentar obtener la lista de alumnos. \
            Por favor, intente recargar la pagina haciendo click <a href=".">aqui</a>.</h4>
            <p style="color: red">Mensaje de error "${text} (${status})"</p>`
        ),
    });
});
