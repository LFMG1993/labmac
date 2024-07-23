<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto LABMAC</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" id="favicon">
    <link href="./librerias/css/bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="./librerias/css/custom.css" rel="stylesheet" type="text/css" />
</head>

<body class="d-flex flex-column h-100">
    <div class="container">

        <div class="row mt-3">
            <div class="col-sm-2 text-center">
                <img src="./assets/logo-sena.png" class="img-fluid" alt="Logo Sena" />
            </div>
            <div class="col-sm-7 text-center">
                <strong>SERVICIO NACIONAL DE APRENDIZAJE - SENA<br />
                    REGIONAL NORTE DE SANTANDER
                    <br /> CENTRO DE FORMACION DE LA INDUSTRIA, <br />LA EMPRESA Y LOS SERVICIOS - CIES</strong>
            </div>
            <div class="col-sm-3 text-center">
                <img src="./assets/logo-tecnoparque.png" class="img-fluid" alt="Logo Tecnoparque" />
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-sm-8">
                <!--                <img src="./assets/foto-laboratorio.jpeg" alt="Foto laboratorio" class="img-fluid">-->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./carrousel/2.jpeg" alt="Los Angeles" class="img-fluid d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="./carrousel/1.png" alt="Chicago" class="img-fluid d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="./carrousel/3.png" alt="New York" class="img-fluid d-block" >
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <div class="col-sm-4 justify-content-center d-flex align-content-center">
                <div class="card shadow-lg mx-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header pt-5">
                                    <h4 class="sesion text-center">Laboratorio de materiales
                                        <br />Bienvenido
                                    </h4>
                                </div>
                                <div class="sep"></div>
                                <div class="form-container">
                                    <form id="signup" action="modelo/login.php" method="POST" class="row g-3">
                                        <div class="col-12">
                                            <label for="usu" class="form-label">ID Usuario</label>
                                            <input id="usu" type="text" name="usu" class="form-control" placeholder="ID Usuario" required />
                                        </div>
                                        <div class="col-12">
                                            <label for="pass" class="form-label">Contraseña</label>
                                            <input id="pass" type="password" name="pass" class="form-control" placeholder="Contraseña" required />
                                            <!--                                            <a style="font-size: 12px;">¿Has olvidado tu contraseña?</a>-->
                                        </div>
                                        <div class="col-12 mt-3 text-center">
                                            <button type="submit" title="iniciar" class="btn btn-success">Iniciar sesión</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 text-center">
            <footer>
                <p>SISTEMA Version 1.0 &copy; LABMAC 2024 - SENA CIES Norte de Santander - Colombia<br />
                    Desarrollado por: Tecnoparque Nodo Cúcuta - Aprendiz PASN Emily Rodriguez</p>
                <p>Nota: Se encuentra en este dominio de pruebas, para su desarrollo e implementación</p>
            </footer>
        </div>

    </div>

    <script src="./librerias/js/jquery-3.6.4.min.js" type="text/javascript"></script>
    <script src="./librerias/js/bootstrap5.min.js" type="text/javascript"></script>

    <script>
        $(document).ready(function() {
                    $('#myModal').modal('toggle')
                })
    </script>

</body>

</html>