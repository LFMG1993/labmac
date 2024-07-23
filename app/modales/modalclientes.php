<!-- Modal registro de un cliente-->
<div class="modal fade" id="modalNuevoCliente" role="dialog" tabindex="-1" aria-labelledby="modalNuevoClienteLabel">
    <div class="modal-dialog">
        <form id="formularioRegistrarCliente" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoClienteLabel">Registrar nuevo Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--
                `id_clientes, 
                tipo_doc, 
                identificacion, 
                nombre_empresa,	
                nombre_contacto, 
                direccion,	
                municipio, 
                telefono,	
                correo`
                -->
                <div class="modal-body">
                    <div class="col-sm-10">
                        <label for="tipo_doc">Tipo doc:</label>
                        <input type="text" class="form-control" id="tipo_doc" name="tipo_doc" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="identificacion">Identificación:</label>
                        <input type="text" class="form-control" id="identificacion" name="identificacion" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="nombre_empresa">Nombre empresa:</label>
                        <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="nombre_contacto">Nombre contacto:</label>
                        <input type="text" class="form-control" id="nombre_contacto" name="nombre_contacto" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="municipio">Municipio:</label>
                        <input type="text" class="form-control" id="municipio" name="municipio" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <div>
                        <button type="submit" class="btn btn-primary" id="agregarNuevoCliente">
                            Agregar
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>





                <!-- tipo_doc, 
                identificacion, 
                nombre_empresa,	
                nombre_contacto, 
                direccion,	
                municipio, 
                telefono,	
                correo` -->

<!-- Modal ACTUALIZAR información de un cliente -->
<div class="modal fade" id="modalEdicionCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form id="formularioActualizar" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoClienteLabel">Actualizar informacion del cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-10">
                        <label for="nombre_empresau">Nombre_empresa:</label>
                        <input type="text" class="form-control" id="nombre_empresau" name="nombre_empresau" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="nombre_contactou">Nombre_contacto:</label>
                        <input type="text" class="form-control" id="nombre_contactou" name="nombre_contactou" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="direccionu">Direccion:</label>
                        <input type="text" class="form-control" id="direccionu" name="direccionu" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="municipiou">Municipio:</label>
                        <input type="text" class="form-control" id="municipiou" name="municipiou" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="telefonou">Telefono:</label>
                        <input type="number" class="form-control" id="telefonou" name="telefonou" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="rol_idu">Rol_id:</label>
                        <input type="number" class="form-control" id="rol_idu" name="rol_idu" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="eliminarDatosUsuario">
                        Eliminar
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizaDatosUsuario">
                        Actualizar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>