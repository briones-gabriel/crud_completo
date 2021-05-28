export function appendStudentToTable(student) {
    $("#tableBody").append(`
    <tr class="student-row">
        <td class="align-middle">${student.nombre}</td>
        <td class="align-middle">${student.apellido}</td>
        <td class="align-middle">${student.edad}</td>
        <td class="align-middle">${student.email}</td>
        <td class="align-middle">${student.escuela}</td>
        <td>
            <button data-id="${student.ID}" class="btn align-middle editButton"
                data-bs-toggle="modal" data-bs-target="#editStudent">
                <i class="fa fa-pencil-square-o"></i>
            </button>
        </td>
        <td>
            <button data-id="${student.ID}" class="btn align-middle deleteButton"
                data-bs-toggle="modal" data-bs-target="#deleteStudent">
                <i class="fa fa-trash-o"></i>
            </button>
        </td>
    </tr>
    `);
};
