$(document).ready(() => {
    $.ajax({
        url: "/crud_completo/PHP/getStudents.php",
        type: "GET",
        dataType: "json",
        success: (data) => {
            data.forEach((student) => {
                $("#tableBody").append(`
                <tr class="student-row">
                    <th scope="row" class="align-middle">${student.ID}</th>
                    <td class="align-middle">${student.nombre}</td>
                    <td class="align-middle">${student.apellido}</td>
                    <td class="align-middle">${student.edad}</td>
                    <td class="align-middle">${student.email}</td>
                    <td class="align-middle">${student.escuela}</td>
                    <td>
                        <button data-id="${student.ID}" class="btn align-middle editButton">
                            <i class="fa fa-pencil-square-o"></i>
                        </button>
                    </td>
                    <td>
                        <button data-id="${student.ID}" class="btn align-middle deleteButton">
                            <i class="fa fa-trash-o"></i>
                        </button>
                    </td>
                </tr>
                `);
            });
        }
    })
});
