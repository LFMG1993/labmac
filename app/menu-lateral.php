
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">

        <button class="btn btn-success" id="sidebarToggle">☰</button>
        <a class="navbar-brand" href="./index.php">LABMAC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav me-auto">
                <!-- Otros elementos del menú -->
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-3" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"> <span></span> <strong></i>  <?php echo $user_nombres; ?></strong>                       
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" href="../modelo/salir.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div id="sidebar">
    <br>
    <br>
    <ul class="list-unstyled my-5" id="menu">
        <li><a href="./usuarios.php" class="text-white"><i class="bi bi-person-fill-lock"></i>Usuarios Administradores</a></li>
        <li><a href="./productos.php" class="text-white"><i class="bi bi-journal-text "></i>Catalogo</a></li>
        <li><a href="./clientes.php" class="text-white"><i class="bi bi-people-fill"></i>Clientes</a></li>
        <li><a href="./servicios_ensayos.php" class="text-white"><i class="bi bi-clipboard-fill"></i>Servicios Ensayos</a></li>
        <li><a href="./servicios_detalles.php" class="text-white"><i class="bi bi-clipboard-check-fill"></i>Servicios Detalles</a></li>
        <li><a href="./servicios_detalle_informe.php" class="text-white"><i class="bi bi-clipboard-data-fill"></i>Servicios Detalles Informe</a></li>
    </ul>
</div>