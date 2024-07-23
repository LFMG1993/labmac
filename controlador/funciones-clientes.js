
function initClientes() {
    // Función para agregar un nuevo clientes
    $('#formularioRegistrarCliente').submit(function (evt) {
        evt.preventDefault();
        // Función para validar la información del clientes
        const formData = new FormData(this);
        agregardatosClientes(formData);
    });
    // Función para modificar un clientes
    $('#actualizaDatosClientes').click(function () {
        modificarClientes();
    });
    // Función para modificar un cliente
    $('#eliminarDatosCliente').click(function () {
        preguntarSiNo();
    })
}

// Limpiar campos para del frormulario
function agregarFormNuevo() {
    $('#tipo_doc').val("");
    $('#identificacion').val("");
    $('#nombre_empresa').val("");
    $('#nombre_contacto').val("");
    $('#direccion').val("");
    $('#municipio').val("");
    $('#telefono').val("");
    $('#correo').val("");
}

// Registra nuevo clientes
function agregardatosClientes(formData) {
    $.ajax({
        type: "POST",
        url: "../modelo/accionesClientes.php?accion=registrar",
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
                    text: 'Cliente ya registrado.',
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
                    text: 'Cliente creado con éxito.',
                }).then(() => {
                    cargarTablaCliente();
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
// Cargar información al formulario de modificar
function agregarformCliente(datos) {
    let d = datos.split('||');
    $('#tipo_docu').val(d[0]);
    $('#identificacionu').val(d[1]);
    $('#nombre_empresau').val(d[2]);
    $('#nombre_contactou').val(d[3]);
    $('#direccionu').val(d[4]);
    $('#municipiou').val(d[5]);
    $('#telefonou').val(d[6]);
    $('#correou').val(d[7]);
}

// Función modificar clientes
function modificarUsuario() {
        let tipo_doc = $('#tipo_docu').val();
        let identificacion = $('#identificacionu').val();
        let nombre_empresa = $('#nombre_empresau').val();
        let nombre_contacto = $('#nombre_contactou').val();
        let direccion = $('# direccion u').val();
        let municipio = $('#municipiou').val();
        let telefono= $('#telefonou').val();
        let correo = $('#correou').val();
    

        /*
$('#identificacion').val("");
$('#nombre_empresa').val("");
$('#nombre_contacto').val("");
$('#direccion').val("");
$('#municipio').val("");
$('#telefono').val("");
$('#correo').val("");*/


    // Concatena la información para enviarla
    let cadena =        "id_usuariou=" + id_usuario +
                        "&identificacionu=" + identificacion +
                        "&usuariou=" + usuario +
                        "&contrasenau=" + contrasena +
                        "&emailu=" + email +
                        "&telefonou=" + telefono +
                        "&rol_idu=" + rol_id;

    let mensaje_si = "Usuario modificado con éxito";
    let mensaje_no = "Error, no se pudo modificar la información";
    $.ajax({
        type: "POST",
        url: "../modelo/accionesUsuarios.php?accion=modificar",
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
                    cargarTablaUsuario();
                });
            }
            // Validar que la cédula no esté registrada. Echo2
        }
    });
}

function modificarUsuario() {
    
    let id_usuario = $('#id_usuariou').val();
    let identificacion = $('#identificacionu').val();
    let usuario = $('#usuariou').val();
    let contrasena = $('#contrasenau').val();
    let email = $('#emailu').val();
    let telefono = $('#telefonou').val();
    let rol_id = $('#rol_idu').val();

// Concatena la información para enviarla
let cadena = "id_usuariou=" + id_usuario +
                    "&identificacionu=" + identificacion +
                    "&usuariou=" + usuario +
                    "&contrasenau=" + contrasena +
                    "&emailu=" + email +
                    "&telefonou=" + telefono +
                    "&rol_idu=" + rol_id;

let mensaje_si = "Usuario modificado con éxito";
let mensaje_no = "Error, no se pudo modificar la información";
$.ajax({
    type: "POST",
    url: "../modelo/accionesUsuarios.php?accion=modificar",
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
                cargarTablaUsuario();
            });
        }
        // Validar que la cédula no esté registrada. Echo2
    }
});
}

// Función para cargar información de la vista
function cargarTablaCliente() {
    $.ajax({
        type: "POST",
        url: "../app/usuarios.php",
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

// Función apra confirmar la eliminación de un registro
function preguntarSiNo() {
    let codigo = $('#codigou').val();
    let identificacion = $('#identificacionu').val();
    Swal.fire({
        title: 'Eliminar Cliente',
        text: '¿Está seguro de eliminar el cliente ' + identificacion + '?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            eliminarDatos(codigo, identificacion);
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se ha eliminado el cliente ' + identificacion,
            });
        }
    });
}

// Función eliinar datos
function eliminarDatos(codigo, identificacion) {
    let cadena = "codigo=" + codigo +
        "&identificacion=" + identificacion;
    let mensaje_si = "Cliente borrado correctamente.";
    let mensaje_no = "Error.. NO se eliminó el cliente.";
    $.ajax({
        type: "POST",
        url: "../modelo/accionesUsuarios.php?accion=eliminar",
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
                        cargarTablaUsuario();
                    }
                });
            }
        }
    });
};
