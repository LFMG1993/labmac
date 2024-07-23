<!-- Modal registro de un Servicio de Ensayo-->
<div class="modal fade" id="modalNuevoServicioEnsayo" role="dialog" tabindex="-1" aria-labelledby="modalNuevoServicioEnsayoLabel">
    <div class="modal-dialog">
        <form id="formularioRegistrarServicioEnsayo" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoServicioEnsayoLabel">Registrar nuevo Servicio de Ensayo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="col-sm-10">
                        <label for="tipo_doc">Tipo_doc:</label>
                        <input type="text" class="form-control" id="tipo_doc" name="tipo_doc" required>
                    </div>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <label for="cotizacion">Cotizacion:</label>
                            <input type="text" class="form-control" id="cotizacion" name="cotizacion" required>
                        </div>
                        <div class="col-sm-10">
                            <label for="prefactura">Prefactura:</label>
                            <input type="text" class="form-control" id="prefactura" name="prefactura" required>
                        </div>
                        <div class="col-sm-10">
                            <label for="cliente_id">cliente_id:</label>
                            <input type="text" class="form-control" id="cliente_id" name="cliente_id" required>
                        </div>
                        <div class="col-sm-10">
                            <label for="fecha_solicitud">Fecha_solicitud:</label>
                            <input type="text" class="form-control" id="fecha_solicitud" name="fecha_solicitud" required>
                        </div>
                        <div class="col-sm-10">
                            <label for="fecha_pago">Fecha_pago:</label>
                            <input type="text" class="form-control" id="fecha_pago" name="fecha_pago" required>
                        </div>
                        <div class="col-sm-10">
                            <label for="Fecha_entrega">Fecha_entrega:</label>
                            <input type="text" class="form-control" id="Fecha_entrega" name="Fecha_entrega" required>
                        </div>
                        <div class="col-sm-10">
                            <label for="Observaciones">Observaciones:</label>
                            <input type="text" class="form-control" id="Observaciones" name="Observaciones" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary" id="agregarNuevoServicioEnsayo">
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

<!-- Modal ACTUALIZAR información de servicio Ensayo -->
<div class="modal fade" id="modalNuevoServicioEnsayo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form id="formularioRegistrarServicioEnsayo" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoServicioEnsayoLabel">Actualizar informacion del Servicio de Ensayo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-10">
                        <label for="tipo_docu">Tipo_doc:</label>
                        <input type="text" class="form-control" id="tipo_docu" name="tipo_docu" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="identificacionu">Identificación:</label>
                        <input type="text" class="form-control" id="identificacionu" name="identificacionu" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="nombre_empresau">Nombre_empresa:</label>
                        <input type="text" class="form-control" id="nombre_empresau" name="nombre_empresau" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="nombre_contactou">Nombre_contacto:</label>
                        <input type="text" class="form-control" id="nombre_contactou" name="nombre_contactou" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="direccionu">Dirección:</label>
                        <input type="number" class="form-control" id="direccionu" name="direccionu" required>
                    </div>
                    <div class="col-sm-10">
                        <label for="municipiou">Municipio:</label>
                        <input type="number" class="form-control" id="municipiou" name="municipiou" required>
                    </div>
                </div>
                <div class="col-sm-10">
                    <label for="telefonou">Telefono:</label>
                    <input type="number" class="form-control" id="telefonou" name="telefonou" required>
                </div>
            </div>
            <div class="col-sm-10">
                <label for="correou">Correo:</label>
                <input type="email" class="form-control" id="correou" name="correou" required>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="eliminarDatosServicioensayo">
            Eliminar
        </button>
        <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizaDatosServicioEnsayo">
            Actualizar
        </button>
    </div>
</div>
</form>
</div>
</div>