<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../modelo/datos-usuarios.php';

// Instancias
$mis_usuarios = new misUsuarios();

// Coonsulta todos los proyectos
$resUsuarios = $mis_usuarios->viewUsuarios();
$cantUsuarios = $mis_usuarios->countUsuarios();

?>

<!-- Inicio del Contenido de la Página -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="page-title">
            <br>
            <h1>Usuarios
                <small>LABMAC - SENA</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->
    </div>

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <th>
                    <div class="text-center">Identificación</div>
                </th>
                <th>
                    <div class="text-center">Nombres</div>
                </th>
                <th>
                    <div class="text-center">Usuario</div>
                </th>
                <th>
                    <div class="text-center">Email</div>
                </th>
                <th>
                    <div class="text-center">Telefono</div>
                </th>
                <th>
                    <div class="text-center"></div>
                </th>
            </thead>
            <tbody>
                <?php
                $cant = 1;
                foreach ($resUsuarios as $data) {
                    // Datos para cargar en el formulario de modificar
                    $datos = $data['id_usuario'] . "||" .
                            $data['identificacion'] . "||" .
                            $data["nombres"] . "||" .
                            $data['usuario'] . "||" .
                            $data['contrasena'] . "||" .
                            $data['email'] . "||" .
                            $data['telefono'] . "||" .
                            $data['rol_id'];
                ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $data['identificacion']; ?>
                        </td>
                        <td>
                            <?php echo $data['nombres']; ?>
                        </td>
                        <td>
                            <?php echo $data['usuario']; ?>
                        </td>
                        <td>
                            <?php echo $data['email']; ?>
                        </td>
                        <td>
                            <?php echo $data['telefono']; ?>
                        </td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEdicionUsuario" onclick="agregarformUsuario('<?php echo $datos; ?>')">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </td>
                    <?php
                }
                    ?>
                    </tr>
            </tbody>
        </table>
    </div>
    <br />

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNuevoUsuario" onclick="agregarFormNuevo()">Crear Usuario
    </button>
    <br />

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Inicialización de DataTables -->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>