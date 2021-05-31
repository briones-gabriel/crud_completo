let idToDelete = 0;
$(document).on("click", "button.deleteButton", function() {
    idToDelete = $(this).data("id");
    const nombre = $(this).data("nombre");
    $("#deleteMessage").text(`Esta seguro que desea eliminar a ${nombre}?`);
});
$(document).on("click", "button#deleteStudentButton", () => {
    $.ajax({
        url: "/crud_completo/PHP/Connection/deleteStudent.php",
        type: "POST",
        dataType: "json",
        data: { ID: idToDelete },
        cache: false,
        success: () => {
            $("#deleteStudent").modal("hide");
            $(`#${idToDelete}`).remove();
        },
        error: (xhr, status, text) => {
            alert("Ocurrio un error inseperado al intentar eliminar un alumno.\r\n" + text + `(${xhr})`);
        }
    });
});

