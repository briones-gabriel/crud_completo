<!--Add student modal-->
<div class="modal fade" id="addStudent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar un alumno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="col-form-label">Nombre</label>
                    <input type="text" class="form-control" id="studentName">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Apellido</label>
                    <input type="text" class="form-control" id="studentSurname">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Edad</label>
                    <input type="number" class="form-control" id="studentAge">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Email</label>
                    <input type="email" class="form-control" id="studentEmail">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Escuela</label>
                    <input type="text" class="form-control" id="studentSchool">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button id="addStudentButton" type="button" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </div>
</div>
<!--Edit student modal-->
<div class="modal fade" id="editStudent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar alumno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="col-form-label">Nombre</label>
                    <input type="text" class="form-control" id="editStudentName">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Apellido</label>
                    <input type="text" class="form-control" id="editStudentSurname">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Edad</label>
                    <input type="number" class="form-control" id="editStudentAge">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Email</label>
                    <input type="email" class="form-control" id="editStudentEmail">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Escuela</label>
                    <input type="text" class="form-control" id="editStudentSchool">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button id="editStudentButton" type="button" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </div>
</div>
<!--Delete student modal-->
<div class="modal fade" id="deleteStudent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar alumno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p id="deleteMessage"></p> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button id="deleteStudentButton" type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>
<script type="module" src="/crud_completo/JavaScript/addStudent.js"></script>
