<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../modelo/datos-productos.php';
// Instancias
$misProductos = new MisProductos();
// Coonsulta todos los proyectos
$resProductos = $misProductos->viewProductos();

?>

<!-- Inicio del Contenido de la Página -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="page-title">
            <br>
            <h1>Catalogo -
            <small>LABMAC</small>
        </h1>
        </div>
        <!-- END PAGE TITLE -->
    </div>

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <td class="text-center">id_producto</td>
                <td>codigo</td>
                <td>Nombre</td>
                <td>precio_minimo</td>
                <td>precio_maximo</td>
                <td>medida</td>
                <td>clase</td>
                <td>codigo_familiar</td>
                <td>nombre_familia</td>
                <td></td>
            </thead>
            <tbody class="w-100">
                <?php
                foreach ($resProductos as $data) {
                    // Datos para cargar en el formulario de modificar
                    $datos = $data['id_producto'] . "||" .
                            $data['codigo'] . "||" .
                            $data['Nombre'] . "||" .
                            $data['precio_minimo'] . "||" .
                            $data['precio_maximo'] . "||" .
                            $data['medida'] . "||" .
                            $data['clase'] . "||" .
                            $data['codigo_familiar'] . "||" .
                            $data['nombre_familia'];
                ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $data['id_producto']; ?>
                        </td>
                        <td>
                            <?php echo $data['codigo']; ?>
                        </td>
                        <td>
                            <?php echo $data['Nombre']; ?>
                        </td>
                        <td>
                            <?php echo $data['precio_minimo']; ?>
                        </td>
                        <td>
                            <?php echo $data['precio_maximo']; ?>
                        </td>
                        <td>
                            <?php echo $data['medida']; ?>
                        </td>
                        <td>
                            <?php echo $data['clase']; ?>
                        </td>
                        <td>
                            <?php echo $data['codigo_familiar']; ?>
                        </td>
                        <td>
                            <?php echo $data['nombre_familia']; ?>
                        </td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEdicionProducto" onclick="agregarformProducto('<?php echo $datos; ?>')">
                                <i>Edit</i>
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

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNuevoProducto" onclick="agregarFormNuevo()">Crear Producto
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