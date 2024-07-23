
function initProductos() {
    // Función para agregar un nuevo producto
    $('#registrarProducto').submit(function (evt) {
        evt.preventDefault();
        // Función para validar la información del producto
        const formData = new FormData(this);
        agregardatosProducto(formData);
    });
    // Función para modificar un producto
    $('#actualizaInformacionProducto').click(function () {
        modificarProducto();
    });
    // Función para modificar un producto
    $('#eliminarInformacionProducto').click(function () {
        preguntarSiNo();
    })
}

// Limpiar campos para del frormulario del producto
function agregarFormNuevo() {
    $('#codigo').val("");
    $('#nombre').val("");
    $('#precio_minimo').val("");
    $('#precio_maximo').val("");
    $('#medida').val("");
    $('#clase').val("");
    $('#codigo_familiar').val("");
    $('#nombre_familia').val("");
}

// Registra nuevo producto
function agregardatosProducto(formData) {
    $.ajax({
        type: "POST",
        url: "../modelo/accionesProductos.php?accion=registrar",
        data: formData,
        processData: false,
        contentType: false,
        success: function (r) { 
            console.log(r);
            if (r === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Error, no se pudo modificar la información',
                });
            } else if (r == 4) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Advertencia',
                    text: 'Producto ya registrado.',
                });
            } else if (r == 5) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Advertencia',
                    text: 'Los campos no están definidos.',
                });
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'Producto creado con éxito.',
                }).then(() => {
                    location.reload();
                    cargarTablaProductos();
                });
            }
        },
        error: function (textStatus, errorThrown) {
            console.error(textStatus, errorThrown);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Hubo un error en la solicitud. Por favor, intente de nuevo más tarde.',
            });
        }
    });
}

// Cargar información al formulario de modificar producto
function agregarformProducto(datos) {
    let d = datos.split('||');
    $('#id_productou').val(d[0]);
    $('#codigou').val(d[1]);
    $('#nombreu').val(d[2]);
    $('#precio_minimou').val(d[3]);
    $('#precio_maximou').val(d[4]);
    $('#medidau').val(d[5]);
    $('#claseu').val(d[6]);
    $('#codigo_familiaru').val(d[7]);
    $('#nombre_familiau').val(d[8]);
}

// Función modificar productos
function modificarProducto() {
        let id_producto = $('#id_productou').val();
        let codigo = $('#codigou').val();
        let nombre = $('#nombreu').val();
        let precio_minimo = $('#precio_minimou').val();
        let precio_maximo = $('#precio_maximou').val();
        let medida = $('#medidau').val();
        let clase = $('#claseu').val();
        let codigo_familiar = $('#codigo_familiaru').val();
        let nombre_familia = $('#nombre_familiau').val();
    

    // Concatena la información para enviarla
    let cadena = "id_productou=" + id_producto +
                        "&codigou=" + codigo +
                        "&nombreu=" + nombre +
                        "&precio_minimou=" + precio_minimo +
                        "&precio_maximou=" + precio_maximo +
                        "&medidau=" + medida +
                        "&claseu=" + clase; 
                        "&codigo_familiaru=" + codigo_familiar; 
                        "&nombre_familiau=" + nombre_familia;

    let mensaje_si = "Usuario modificado con éxito";
    let mensaje_no = "Error, no se pudo modificar la información";
    $.ajax({
        type: "POST",
        url: "../modelo/accionesProductos.php?accion=modificar",
        data: cadena,
        success: function (r) {
            console.log(r);
            if (r === '0') {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: mensaje_no
                });
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: mensaje_si
                }).then(() => {
                    location.reload();
                    cargarTablaProductos();
                });
            }
            // Validar que la cédula no esté registrada. Echo2
        }
    });
}


// Función para cargar información de la vista
function cargarTablaProductos() {
    $.ajax({
        type: "POST",
        url: "../app/vista_administrador/vista_productos.php",
        async: true,
        success: function (respuesta) {
            $("#tabla").html("");
            $("#tabla").html(respuesta);
        },
        error: function (request, error) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Se produjo un error: ' + error
            });
        }
    });
}

// Función para confirmar la eliminación de un registro
function preguntarSiNo() {
    let codigo = $('#codigou').val();
    Swal.fire({
        title: 'Eliminar Cliente',
        text: '¿Está seguro de eliminar el cliente ' + codigo + '?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            eliminarDatos(codigo);
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se ha eliminado el cliente ' + codigo,
            });
        }
    });
}

// Función eliminar datos
function eliminarDatos(codigo) {
    let cadena = "codigo=" + codigo;
    let mensaje_si = "Producto borrado correctamente.";
    let mensaje_no = "Error.. NO se eliminó el producto.";
    $.ajax({
        type: "POST",
        url: "../modelo/accionesProductos.php?accion=eliminar",
        data: cadena,
        success: function (r) {
            console.log(r);
            if (r == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: mensaje_no,
                });
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: mensaje_si,
                }).then((result) => {
                    if (result.isConfirmed) {
                        cargarTablaProductos();
                    }
                });
            }
        }
    });
};
