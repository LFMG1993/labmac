<!-- Modal registro de un usuario -->
<div class="modal fade" id="modalNuevoUsuario" role="dialog" tabindex="-1" aria-labelledby="modalNuevoUsuarioLabel">
    <div class="modal-dialog">
        <form id="formularioRegistrarUsuario" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoUsuarioLabel">Registrar nuevo usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <label for="identificacion">Identificación:</label>
                        <input type="text" class="form-control" id="identificacion" name="identificacion" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="nombres">Nombres:</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="email">Correo:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <div>
                        <button type="submit" class="btn btn-primary" id="agregarNuevoUsuario">
                            Agregar
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal ACTUALIZAR información de un usuario -->
<div class="modal fade" id="modalEdicionUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form id="formularioActualizar" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoUsuarioLabel">Información del Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <label for="identificacionu">Identificación:</label>
                        <div class="form-group">
                            <input type="text" class="form-control bg-light" id="identificacionu" readonly>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label for="nombresu">Nombres:</label>
                        <input type="text" class="form-control" id="nombresu" name="nombresu" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="usuariou">Usuario:</label>
                        <input type="text" class="form-control bg-light" id="usuariou" name="usuariou" readonly>
                    </div>
                    <div class="col-sm-12">
                        <label for="contrasenau">Contraseña:</label>
                        <input type="password" class="form-control" id="contrasenau" name="contrasenau" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="emailu">Correo:</label>
                        <input type="email" class="form-control" id="emailu" name="emailu" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="telefonou">Telefono:</label>
                        <input type="tel" class="form-control" id="telefonou" name="telefonou" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="eliminarDatosUsuario">
                        Eliminar
                    </button>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal" id="actualizaDatosUsuario">
                        Actualizar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>