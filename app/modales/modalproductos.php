<!-- Modal registro de un nuevo Producto-->
<div class="modal fade" id="modalNuevoProducto" role="dialog" tabindex="-1" aria-labelledby="modalNuevoProductoLabel">
    <div class="modal-dialog">
        <form id="registrarProducto" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoProductoLabel">Registrar nuevo Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <label for="codigo">Codigo:</label>
                        <input type="text" class="form-control" id="codigo" name="codigo">
                    </div>
                    <div class="col-sm-12">
                        <label for="Nombre">Nombre:</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre">
                    </div>
                    <div class="col-sm-12">
                        <label for="precio_minimo">Precio_minimo:</label>
                        <input type="text" class="form-control" id="precio_minimo" name="precio_minimo">
                    </div>
                    <div class="col-sm-12">
                        <label for="precio_maximo">Precio_maximo:</label>
                        <input type="text" class="form-control" id="precio_maximo" name="precio_maximo">
                    </div>
                    <div class="col-sm-12">
                        <label for="medida">Medida:</label>
                        <input type="text" class="form-control" id="medida" name="medida">
                    </div>
                    <div class="col-sm-12">
                        <label for="clase">Clase:</label>
                        <input type="text" class="form-control" id="clase" name="clase">
                    </div>
                    <div class="col-sm-12">
                        <label for="codigo_familiar">Codigo_familiar:</label>
                        <input type="text" class="form-control" id="codigo_familiar" name="codigo_familiar">
                    </div>
                    <div class="col-sm-12">
                        <label for="nombre_familia">nombre_familia:</label>
                        <input type="text" class="form-control" id="nombre_familia" name="nombre_familia">
                    </div>
                </div>
                <div class="modal-footer">
                    <div>
                        <button type="submit" class="btn btn-primary" id="registrarProducto">
                            Agregar
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal ACTUALIZAR información de un Producto -->
<div class="modal fade" id="modalEdicionProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form id="formularioActualizar" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoProductoLabel">Actualizar Informacion del Prodructo </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <label for="codigou">Codigo:</label>
                        <input type="text" class="form-control" id="codigou" name="codigou" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="nombreu">Nombre:</label>
                        <input type="text" class="form-control" id="nombreu" name="nombreu" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="precio_minimou">Precio_minimo:</label>
                        <input type="text" class="form-control" id="precio_minimou" name="precio_minimou" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="precio_maximou">Precio_maximo:</label>
                        <input type="email" class="form-control" id="precio_maximou" name="precio_maximou" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="medidau">Medida:</label>
                        <input type="text" class="form-control" id="medidau" name="medidau" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="claseu">Clase:</label>
                        <input type="text" class="form-control" id="claseu" name="claseu" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="codigo_familiaru">Codigo_familiar:</label>
                        <input type="text" class="form-control" id="codigo_familiaru" name="codigo_familiaru" required>
                    </div>
                    <div class="col-sm-12">
                        <label for="nombre_familiau">Nombre_familia:</label>
                        <input type="text" class="form-control" id="nombre_familiau" name="nombre_familiau" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="eliminarInformacionProducto">
                            Eliminar
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizaInformacionProducto">
                            Actualizar
                        </button>
                    </div>
                </div>
        </form>
    </div>
</div>