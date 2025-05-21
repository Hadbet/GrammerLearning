<!DOCTYPE html>
<html
        lang="en"
        class="light-style layout-menu-fixed"
        dir="ltr"
        data-theme="theme-default"
        data-assets-path="../assets/"
        data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Lista de asistencia</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar layout-without-menu">
    <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">

                        <div class="col-lg-8 mb-4 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-12">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">Bienvenido al curso "<strong id="lblTema">tema</strong>" 🎉</h5>
                                            <p class="mb-4">
                                                Detalles del curso
                                            </p>

                                            <dl class="row mt-2">
                                                <dt class="col-sm-3">Objetivo</dt>
                                                <dd class="col-sm-9" id="lblObjetivo">Objetivo aqui</dd>

                                                <dt class="col-sm-3">Temario</dt>
                                                <dd class="col-sm-9" id="lblTemario">
                                                    <ul class="list-unstyled mt-2">
                                                        <li>Lorem ipsum dolor sit amet</li>
                                                        <li>Facilisis in pretium nisl aliquet</li>
                                                        <li>Faucibus porta lacus fringilla vel</li>
                                                    </ul>
                                                </dd>

                                                <dt class="col-sm-3">Instructor</dt>
                                                <dd class="col-sm-9" id="lblInstructor">Intructor aqui</dd>

                                                <dt class="col-sm-3 text-truncate">Tipo de instructor</dt>
                                                <dd class="col-sm-9" id="lblTipoInstructor">Aqui tipo Instructor</dd>


                                                <dt class="col-sm-3 text-truncate">Area</dt>
                                                <dd class="col-sm-9" id="lblArea">Aqui area</dd>


                                                <dt class="col-sm-3 text-truncate">Fecha</dt>
                                                <dd class="col-sm-9" id="lblFecha">Aqui fecha</dd>
                                            </dl>


                                            <button
                                                    type="button"
                                                    class="btn btn-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalCenter"
                                            >
                                                Anotarme al curso
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalCenterTitle">Primero verifica tu nomina</h5>
                                                            <button
                                                                    type="button"
                                                                    class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"
                                                            ></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="row">
                                                                <div class="col-12 mb-3">
                                                                    <label for="nameWithTitle" class="form-label">Nomina</label>
                                                                    <input type="text" id="nameWithTitle" class="form-control"/>
                                                                    <button type="button" class="btn btn-primary mt-2">Verificar Numero de Nomina</button>
                                                                </div>

                                                                <div class="col-12 mb-3">
                                                                    <label for="nameWithTitle" class="form-label">Nombre</label>
                                                                    <input type="text" id="nameWithTitle" class="form-control" readonly/>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                                Cancelar
                                                            </button>
                                                            <button type="button" class="btn btn-primary">Anotarme</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 order-1">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 mb-4">
                                    <img
                                            src="assets/img/illustrations/man-with-laptop-light.png"
                                            style="height: 100%"
                                            alt="View Badge User"
                                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                            data-app-light-img="illustrations/man-with-laptop-light.png"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Transactions -->
                        <div class="col-md-12 col-lg-12 order-2 mb-4">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title m-0 me-2">Inscritos en el curso</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive text-nowrap mt-4">
                                        <table class="table table-bordered" id="temario-table">
                                            <thead>
                                            <tr>
                                                <th>Nomina</th>
                                                <th>Nombre</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--/ Transactions -->

                        <!-- Transactions -->

                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->

                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
</div>

<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="assets/vendor/js/menu.js"></script>
<script src="assets/js/main.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script>

    $.getJSON('https://grammermx.com/RH/GrammerLearning/dao/daoGuardarLista.php?idLista='+getParameterByName("idLista"), function (data) {

        if (data && data.data && data.data.length > 0) {
            for (var i = 0; i < data.data.length; i++) {

                var tema = data.data[i].Tema;
                var objetivo = data.data[i].Objetivo;
                var temario = data.data[i].Temario;
                var instructor = data.data[i].Instructor;
                var tipoInstructor = data.data[i].TipoInstructor;
                var area = data.data[i].Area;
                var fechaInicio = data.data[i].FechaInicio;
                var fechaCreacion = data.data[i].FechaCreacion;
                var fechaCierre = data.data[i].FechaCierre;
                var estatus = data.data[i].Estatus;

                document.getElementById("lblTema").innerHTML = tema;
                document.getElementById("lblObjetivo").innerHTML = objetivo;
                document.getElementById("lblInstructor").innerHTML = instructor;
                document.getElementById("lblTipoInstructor").innerHTML = tipoInstructor;
                document.getElementById("lblArea").innerHTML = area;
                document.getElementById("lblFecha").innerHTML = fechaInicio;

                var itemsTemario = temario.split(', ');
                var htmlLista = '<ul class="list-unstyled mt-2">';

                itemsTemario.forEach(function(item) {
                    htmlLista += '<li>' + item.trim() + '</li>';
                });

                htmlLista += '</ul>';

                document.getElementById("lblTemario").innerHTML = htmlLista;
            }
        }else{

        }
    });

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);


        var cadena = results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));

        var arrTerminos = cadena.split(',');


        return arrTerminos[0];
    }


</script>
</body>
</html>
