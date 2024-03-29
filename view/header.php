<!DOCTYPE html>
<html>
<head>
    <!--    <meta charset="utf-8" />-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./assets/css/estilos1.css"><!-- para estilos del contador -->

    <!--    estilos de cada integrante-->
    <!--    <link href="./estilos/EstilosHome.css" rel="stylesheet" />-->
    <!--    <link rel="stylesheet" href="./estilos/EstilosAuspiciadores.css">-->
    <!--    <link href="./estilos/EstilosLosJuegos.css" rel="stylesheet" />-->
    <!--    <link href="./estilos/EstilosInsti.css" rel="stylesheet" />-->

    <!--    Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <!--    <link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!--    Bootstrap Select-->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>

<!--    gallery CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <link href="./assets/css/styles.css" rel="stylesheet"/>
    <link href="./assets/css/style.css" rel="stylesheet"/>
    <link href="./assets/css/login.css" rel="stylesheet"/>
    <link href="./assets/css/login1.css" rel="stylesheet"/>
    <link rel="icon" type="" href="./assets/images/icon_inicio.png"/>

    <title>Weplay-Lima2019</title>
    <script type="text/javascript" src='./assets/js/facebook.js'></script>
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"-->
<!--            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"-->
<!--            crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>


    <!--    Bootstrap Select-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>

<!--    gallery script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

</head>

<body>
<?php
if (!isset($_SESSION['username'])){
?>
<div class="">
    <div class="row">
        <div class="col-md-12">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="http://www.tecnoweplay.com/">Weplay</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Los Panamericanos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?c=losjuegos&a=index">Los Juegos</a>
                                <a class="dropdown-item" href="?c=medallero&a=index">Historial Medallero</a>
                                <a class="dropdown-item" href="?c=ceremonias&a=index">Ceremonias</a>
                                <a class="dropdown-item" href="?c=deportista&a=index">Participantes</a>
                                <a class="dropdown-item" href="?c=fixture&a=index">Calendario</a>
                                <a class="dropdown-item" href="?c=sedes&a=index">Comprar Entradas</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Organización
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?c=comiteorganizador&a=index">Comite Organizador</a>
                                <a class="dropdown-item" href="?c=organigrama&a=index">Organigrama</a>
                                <a class="dropdown-item" href="?c=reglamento&a=index">Reglamento</a>
                                <a class="dropdown-item" href="?c=preguntas&a=index">Preguntas Frecuentes</a>
                                <a class="dropdown-item" href="?c=decreto&a=index">Marco legal</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=auspiciadores&a=index">Auspiciadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=institucional&a=index">Institucional</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Galería
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?c=foto&a=index">Fotos</a>
                                <a class="dropdown-item" href="?c=video&a=index">Video</a>
                                <a class="dropdown-item" href="?c=documentos&a=index">Documentos</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Eventos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="?c=evento&a=index">Resultados</a>

                            </div>
                        </li>


                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="nav-item">
                            <a class="nav-link" href="?c=login&a=acceso"><i class="fas fa-user"></i> Iniciar Sesion</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="?c=usuario&a=Index"><i class="fas fa-sign-out-alt"></i>
                                Registrarse</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <?php
            }
            ?>
        </div>
    </div>
</div>


<?php
if (isset($_SESSION['username'])){

?>

<div class="">
    <div class="row">
        <div class="col-md-12">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="http://www.tecnoweplay.com/">Weplay</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Los Panamericanos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?c=losjuegos&a=index">Los Juegos</a>
                                <a class="dropdown-item" href="?c=medallero&a=index">Historial Medallero</a>
                                <a class="dropdown-item" href="?c=ceremonias&a=index">Ceremonias</a>
                                <a class="dropdown-item" href="?c=deportista&a=index">Participantes</a>
                                <a class="dropdown-item" href="?c=fixture&a=index">Calendario</a>
                                <a class="dropdown-item" href="?c=sedes&a=index">Comprar Entradas</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Organización
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?c=comiteorganizador&a=index">Comite Organizador</a>
                                <a class="dropdown-item" href="?c=organigrama&a=index">Organigrama</a>
                                <a class="dropdown-item" href="?c=reglamento&a=index">Reglamento</a>
                                <a class="dropdown-item" href="?c=preguntasFrecuentes&a=index">Preguntas Frecuentes</a>
                                <a class="dropdown-item" href="?c=decreto&a=index">Marco legal</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=auspiciadores&a=index">Auspiciadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=institucional&a=index">Institucional</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Galería
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?c=foto&a=index">Fotos</a>
                                <a class="dropdown-item" href="?c=video&a=index">Video</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Eventos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="?c=evento&a=index">Resultados</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=CompraEntrada&a=index">Mis Entradas</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell"></i> <span class="badge badge-warning" id="contador">-</span>
                            </a>
                            <div id="notificaciones" class="dropdown-menu" aria-labelledby="navbarDropdown">

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="?c=usuario&a=perfil"><i class="fas fa-user"></i> Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#exampleModal"><i
                                        class="fas fa-sign-out-alt"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <?php
            }
            ?>


        </div>
    </div>
</div>


<!-- Modal Cerrar sesion -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cerrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Salir de la aplicación?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="?c=Login&a=CerrarSession" class="btn btn-danger">Cerrar Sesión</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        //console.log('HOLA JQUERY');
        $.ajax({
            type: 'POST',
            dataType: "json",
            url: "?c=index&a=cargarMenu",
            //data: datos,
            success: function (response) {
                // console.log(response.length);
                $("#contador").text(response.length);
                for (var k in response) {
                    // console.log(k, response[k]);
                    // $("#notificaciones").text(response[k].descripcion);
                    $("#notificaciones").append("<a class='dropdown-item' href='?c=notificacion&a=index' id='notificaciones'>" + response[k].icono + " " + response[k].descripcion + "</a>");
                }
            }
        });
    });
</script>
