
function initUsuario() {
    // Función para agregar un nuevo usuario
    $('#formularioRegistrarUsuario').submit(function (evt) {
        evt.preventDefault();
        // Función para validar la información del usuario
        const formData = new FormData(this);
        agregardatosUsuario(formData);
    });
    // Función para modificar un usuario
    $('#actualizaDatosUsuario').click(function () {
        modificarUsuario();
    });
    // Función para modificar un usuario
    $('#eliminarDatosUsuario').click(function () {
        preguntarSiNo();
    })
}

// Limpiar campos para del frormulario
function agregarFormNuevo() {
    $('#identificacion').val("");
    $('#nombres').val("");
    $('#usuario').val("");
    $('#contrasena').val("");
    $('#email').val("");
    $('#telefono').val("");
    $('#rol').val("1");
}

// Registra nuevo usuario
function agregardatosUsuario(formData) {
    console.log("Registrado");
    $.ajax({
        type: "POST",
        url: "../modelo/accionesUsuarios.php?accion=registrar",
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
                    text: 'Usuario ya registrado.',
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
                    text: 'Usuario creado con éxito.',
                }).then(() => {
                    location.reload();
                    cargarTablaUsuario();
                    
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
function agregarformUsuario(datos) {
    let d = datos.split('||');
    $('#id_usuariou').val(d[0]);
    $('#identificacionu').val(d[1]);
    $('#nombresu').val(d[2]);
    $('#usuariou').val(d[3]);
    $('#contrasenau').val(d[4]);
    $('#emailu').val(d[5]);
    $('#telefonou').val(d[6]);
    $('#rol_idu').val(d[7]);
}

// Función modificar usuario
function modificarUsuario() {
    
        let id_usuario = $('#id_usuariou').val();
        let identificacion = $('#identificacionu').val();
        let nombres = $('#nombresu').val();
        let email = $('#emailu').val();
        let usuario = $('#emailu').val();
        let contrasena = $('#contrasenau').val();
        let telefono = $('#telefonou').val();
        let rol_id = $('#rol_idu').val();
    
    // Concatena la información para enviarla
    let cadena = "id_usuariou=" + id_usuario +
                        "&identificacionu=" + identificacion +
                        "&nombresu=" + nombres +
                        "&usuariou=" + email +
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
                    location.reload();
                    cargarTablaUsuario();
                });
            }
            // Validar que la cédula no esté registrada. Echo2
        }
    });
}

// Función para cargar información de la vista
function cargarTablaUsuario() {
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

// Función para confirmar la eliminación de un registro
function preguntarSiNo() {
    let codigo = $('#codigou').val();
    let identificacion = $('#identificacionu').val();
    Swal.fire({
        title: 'Eliminar Usuario',
        text: '¿Está seguro de eliminar el usuario ' + identificacion + '?',
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
                text: 'No se ha eliminado el usuario ' + identificacion,
            });
        }
    });
}

// Función eliminar datos
function eliminarDatos(codigo, identificacion) {
    let cadena = "codigo=" + codigo +
        "&identificacion=" + identificacion;
    let mensaje_si = "Usuario borrado correctamente.";
    let mensaje_no = "Error.. NO se eliminó el usuario.";
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
                        location.reload();
                        cargarTablaUsuario();
                    }
                });
            }
        }
    });
};
