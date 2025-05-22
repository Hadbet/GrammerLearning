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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Lista de asistencia</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>
    <style>
        .fr {
            animation: fade-slide-in 0.6s ease-out;
            padding: 0 1.5em;
        }

        .fr__face {
            --face-hue1: 60;
            --face-hue2: 30;
            background-image:
                    linear-gradient(135deg,
                    hsl(var(--face-hue1), 90%, 55%),
                    hsl(var(--face-hue2), 90%, 45%));
            border-radius: 50%;
            box-shadow: 0 0.5em 0.75em hsla(var(--face-hue2), 90%, 55%, 0.3);
            margin: 0 auto 2em;
            position: relative;
            width: 3em;
            height: 3em;
        }

        .fr__face-right-eye,
        .fr__face-left-eye,
        .fr__face-mouth-lower,
        .fr__face-mouth-upper {
            position: absolute;
            transition:
                    background-color var(--trans-dur),
                    box-shadow var(--trans-dur),
                    color var(--trans-dur);
        }

        .fr__face-right-eye,
        .fr__face-left-eye {
            background-color: var(--white);
            border-radius: 50%;
            top: 0.75em;
            width: 0.6em;
            height: 0.6em;
        }

        .fr__face-right-eye {
            --delay-right: 0s;
            animation: right-eye 1s var(--delay-right) linear paused;
            clip-path: polygon(0 75%, 100% 0, 100% 100%, 0 100%);
            left: 0.6em;
        }

        .fr__face-left-eye {
            --delay-left: 0s;
            animation: left-eye 1s var(--delay-left) linear paused;
            clip-path: polygon(0 0, 100% 75%, 100% 100%, 0 100%);
            right: 0.6em;
        }

        .fr__face-mouth-lower,
        .fr__face-mouth-upper {
            color: var(--white);
            top: 1.75em;
            left: 0.75em;
            width: 1.5em;
            height: 0.75em;
        }

        .fr__face-mouth-lower {
            --delay-mouth-lower: 0s;
            animation: mouth-lower 1s var(--delay-mouth-lower) linear paused;
            border-radius: 50% 50% 0 0 / 100% 100% 0 0;
            box-shadow: 0 0.125em 0 inset;
        }

        .fr__face-mouth-upper {
            --delay-mouth-upper: 0s;
            animation: mouth-upper 1s var(--delay-mouth-upper) linear paused;
            border-radius: 0 0 50% 50% / 0 0 100% 100%;
            box-shadow: 0 -0.125em 0 inset;
        }

        .fr__label {
            display: block;
            margin-bottom: 1.5em;
            text-align: center;
        }

        .fr__input {
            --input-hue: 60;
            --percent: 50%;
            background-color: var(--gray1);
            background-image: linear-gradient(hsl(var(--input-hue), 90%, 45%), hsl(var(--input-hue), 90%, 45%));
            background-size: var(--percent) 100%;
            background-repeat: no-repeat;
            border-radius: 0.25em;
            display: block;
            margin: 0.5em auto;
            width: 100%;
            max-width: 10em;
            height: 0.5em;
            transition: background-color var(--trans-dur);
            -webkit-appearance: none;
            appearance: none;
            -webkit-tap-highlight-color: transparent;
        }

        .fr__input:focus {
            outline: transparent;
        }

        .fr__input::-webkit-slider-thumb {
            background-color: var(--white);
            border: 0;
            border-radius: 50%;
            box-shadow: 0 0.125em 0.5em hsl(0, 0%, 0%, 0.3);
            width: 1.5em;
            height: 1.5em;
            transition: background-color 0.15s linear;
            -webkit-appearance: none;
            appearance: none;
        }

        .fr__input:focus::-webkit-slider-thumb,
        .fr__input::-webkit-slider-thumb:hover {
            background-color: var(--lt-gray);
        }

        .fr__input::-moz-range-thumb {
            background-color: var(--white);
            border: 0;
            border-radius: 50%;
            box-shadow: 0 0.125em 0.5em hsl(0, 0%, 0%, 0.3);
            width: 1.5em;
            height: 1.5em;
            transition: background-color 0.15s linear;
        }

        .fr__input:focus::-moz-range-thumb,
        .fr__input::-moz-range-thumb:hover {
            background-color: var(--lt-gray);
        }

        @supports selector(:focus-visible) {
            .fr__input:focus::-webkit-slider-thumb {
                background-color: var(--white);
            }

            .fr__input:focus-visible::-webkit-slider-thumb,
            .fr__input::-webkit-slider-thumb:hover {
                background-color: var(--lt-gray);
            }

            .fr__input:focus::-moz-range-thumb {
                background-color: var(--white);
            }

            .fr__input:focus-visible::-moz-range-thumb,
            .fr__input::-moz-range-thumb:hover {
                background-color: var(--lt-gray);
            }
        }

        @media (prefers-color-scheme: dark) {
            body {
                color: var(--gray1);
            }

            .fr__face-right-eye,
            .fr__face-left-eye {
            }

            .fr__face-mouth-lower,
            .fr__face-mouth-upper {
            }

            .fr__input {
            }
        }

        @keyframes fade-slide-in {

            from,
            16.67% {
                opacity: 0;
                transform: translateY(25%);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes right-eye {
            from {
                clip-path: polygon(0 75%, 100% 0, 100% 100%, 0 100%);
            }

            50%,
            to {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }
        }

        @keyframes left-eye {
            from {
                clip-path: polygon(0 0, 100% 75%, 100% 100%, 0 100%);
            }

            50%,
            to {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }
        }

        @keyframes mouth-lower {
            from {
                border-radius: 50% 50% 0 0 / 100% 100% 0 0;
                top: 1.75em;
                height: 0.75em;
                visibility: visible;
            }

            40% {
                border-radius: 50% 50% 0 0 / 100% 100% 0 0;
                top: 1.95em;
                height: 0.25em;
                visibility: visible;
            }

            50%,
            to {
                border-radius: 0;
                top: 2em;
                height: 0.125em;
                visibility: hidden;
            }
        }

        @keyframes mouth-upper {
            from,
            50% {
                border-radius: 0;
                box-shadow: 0 -0.125em 0 inset;
                top: 2em;
                height: 0.125em;
                visibility: hidden;
            }

            62.5% {
                border-radius: 0 0 50% 50% / 0 0 100% 100%;
                box-shadow: 0 -0.125em 0 inset;
                top: 1.95em;
                height: 0.25em;
                visibility: visible;
            }

            75% {
                border-radius: 0 0 50% 50% / 0 0 100% 100%;
                box-shadow: 0 -0.125em 0 inset;
                top: 1.825em;
                height: 0.5em;
                visibility: visible;
            }

            to {
                border-radius: 0 0 50% 50% / 0 0 100% 100%;
                box-shadow: 0 -0.8em 0 inset;
                top: 1.75em;
                height: 0.75em;
                visibility: visible;
            }
        }
    </style>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar layout-without-menu">
    <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y" id="espera">
                    <div class="row">
                        <div class="col-lg-8 mb-4 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-12">
                                        <div class="card-body">
                                            <h5 class="display-4 mb-0 text-primary">Bienvenido al curso "<strong id="lblTema">tema</strong>" 🎉</h5>
                                            <p class="mb-4 display-5">
                                                Detalles del curso
                                            </p>
                                            <dl class="row mt-2">
                                                <dt class="col-sm-3">Objetivo</dt>
                                                <dd class="col-sm-9" id="lblObjetivo"></dd>

                                                <dt class="col-sm-3">Temario</dt>
                                                <dd class="col-sm-9" id="lblTemario">
                                                </dd>

                                                <dt class="col-sm-3">Instructor</dt>
                                                <dd class="col-sm-9" id="lblInstructor"></dd>

                                                <dt class="col-sm-3 text-truncate">Tipo de instructor</dt>
                                                <dd class="col-sm-9" id="lblTipoInstructor"></dd>

                                                <dt class="col-sm-3 text-truncate">Area</dt>
                                                <dd class="col-sm-9" id="lblArea"></dd>

                                                <dt class="col-sm-3 text-truncate">Fecha</dt>
                                                <dd class="col-sm-9" id="lblFecha"></dd>
                                            </dl>


                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                                Anotarme al curso
                                            </button>

                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                                Descargar lista
                                            </button>

                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCalificacion">
                                                Calificar Curso
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="modalCalificacion" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalCenterTitle">Calificar Curso</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row g-2">
                                                                <div class="col mb-0">
                                                                    <label for="emailWithTitle" class="form-label">Nomina</label>
                                                                    <input type="text" id="txtNominaCalificacion" class="form-control"/>
                                                                </div>
                                                                <div class="col mb-0">
                                                                    <label for="dobWithTitle" class="form-label">Tag</label>
                                                                    <input type="text" id="txtTagCalificacion" class="form-control"/>
                                                                </div>
                                                                <div class="col-12 mb-0">

                                                                    <br>
                                                                <label class="fr__label" for="face-rating" style='color: dimgray;'>¿Que tan agradable ah sido tu experiencia?</label>
                                                                <div class="fr__face" role="img" aria-label="Straight face">
                                                                    <div class="fr__face-right-eye" style="background: white;" data-right></div>
                                                                    <div class="fr__face-left-eye" style="background: white;" data-left></div>
                                                                    <div class="fr__face-mouth-lower" style="background: white;" data-mouth-lower></div>
                                                                    <div class="fr__face-mouth-upper" style="background: white;" data-mouth-upper></div>
                                                                </div>
                                                                <input onchange="rangosEstatus();" class="fr__input" id="face-rating" type="range" value="2.5" min="0" max="5"
                                                                       step="0.1">
                                                                </div>

                                                                <div class="col-12 mb-0">
                                                                    <label for="dobWithTitle" class="form-label">Comentarios</label>
                                                                    <input type="text" id="txtComentariosCalificacion" class="form-control"/>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" id="closeModalCalificacion" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                                Cerrar
                                                            </button>
                                                            <button type="button" onclick="range()" class="btn btn-primary">Calificar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

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
                                                                    <input type="text" id="txtNomina" class="form-control"/>
                                                                    <button type="button" onclick="verificarUsuario()" class="btn btn-primary mt-2">Verificar Numero de Nomina</button>
                                                                </div>

                                                                <div class="col-12 mb-3">
                                                                    <label for="nameWithTitle" class="form-label">Nombre</label>
                                                                    <input type="text" id="txtNombre" class="form-control" readonly/>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" id="closeModal">
                                                                Cancelar
                                                            </button>
                                                            <button type="button" id="btnAnotarme" onclick="guardarAsistencia()" class="btn btn-primary" disabled>Anotarme</button>
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
                                    <p class="bg-success display-4 text-center text-white" style="border-radius: 0.5rem;">ABIERTO</p>
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
                        <div class="col-md-12 col-lg-12 order-2 mb-4 mt-2">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title m-0 me-2">Inscritos en el curso</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive text-nowrap mt-2">
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
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12 order-2 mb-4">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title m-0 me-2">Personas que asistieron</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive text-nowrap mt-2">
                                        <table class="table table-bordered" id="asistencia-table">
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
                    </div>
                </div>

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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    window.addEventListener("DOMContentLoaded", () => {
        const fr = new FaceRating("#face-rating");
    });

    class FaceRating {
        constructor(qs) {
            this.input = document.querySelector(qs);
            this.input?.addEventListener("input", this.update.bind(this));
            this.face = this.input?.previousElementSibling;
            this.update();
        }
        update(e) {
            let value = this.input.defaultValue;

            if (e) value = e.target?.value;
            else this.input.value = value;

            const min = this.input.min || 0;
            const max = this.input.max || 100;
            const percentRaw = (value - min) / (max - min) * 100;
            const percent = +percentRaw.toFixed(2);

            this.input?.style.setProperty("--percent", `${percent}%`);

            const maxHue = 120;
            const hueExtend = 30;
            const hue = Math.round(maxHue * percent / 100);

            let hue2 = hue - hueExtend;
            if (hue2 < 0) hue2 += 360;

            const hues = [hue, hue2];
            hues.forEach((h, i) => {
                this.face?.style.setProperty(`--face-hue${i + 1}`, h);
            });

            this.input?.style.setProperty("--input-hue", hue);

            const duration = 1;
            const delay = -(duration * 0.99) * percent / 100;
            const parts = ["right", "left", "mouth-lower", "mouth-upper"];

            parts.forEach(p => {
                const el = this.face?.querySelector(`[data-${p}]`);
                el?.style.setProperty(`--delay-${p}`, `${delay}s`);
            });

            const faces = [
                "Sad face",
                "Slightly sad face",
                "Straight face",
                "Slightly happy face",
                "Happy face"
            ];
            let faceIndex = Math.floor(faces.length * percent / 100);
            if (faceIndex === faces.length) --faceIndex;

            this.face?.setAttribute("aria-label", faces[faceIndex]);
        }
    }

    var id;

    $.getJSON('https://grammermx.com/RH/GrammerLearning/dao/consultaLista.php?idLista='+getParameterByName("idLista"), function (data) {

        if (data && data.data && data.data.length > 0) {
            for (var i = 0; i < data.data.length; i++) {

                id = data.data[i].IdLista;
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
                llenadoTabla();
                llenadoTablaAsistencias();
            }
        }else{

        }
    });

    function llenadoTabla() {
        const tabla = document.getElementById('temario-table').getElementsByTagName('tbody')[0];
        tabla.innerHTML = '';

        $.getJSON('https://grammermx.com/RH/GrammerLearning/dao/consultaAsistentes.php?idLista='+getParameterByName("idLista"), function(data) {
            if (data && data.data && data.data.length > 0) {
                for (var i = 0; i < data.data.length; i++) {
                    const fila = tabla.insertRow();

                    const celdaNomina = fila.insertCell(0);
                    const celdaNombre = fila.insertCell(1);

                    celdaNomina.textContent = data.data[i].Nomina;
                    celdaNombre.textContent = data.data[i].Nombre;

                    fila.classList.add('fila-asistente');
                    celdaNomina.classList.add('text-center');
                }
            } else {
                const fila = tabla.insertRow();
                const celda = fila.insertCell(0);
                celda.colSpan = 2;
                celda.textContent = 'No hay asistentes registrados';
                celda.classList.add('text-center', 'text-muted');
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.error("Error al obtener datos:", textStatus, errorThrown);
            const fila = tabla.insertRow();
            const celda = fila.insertCell(0);
            celda.colSpan = 2;
            celda.textContent = 'Error al cargar los datos';
            celda.classList.add('text-center', 'text-danger');
        });
    }

    function llenadoTablaAsistencias() {
        const tabla = document.getElementById('asistencia-table').getElementsByTagName('tbody')[0];
        tabla.innerHTML = '';

        $.getJSON('https://grammermx.com/RH/GrammerLearning/dao/consultaAsistentesBien.php?idLista='+getParameterByName("idLista"), function(data) {
            if (data && data.data && data.data.length > 0) {
                for (var i = 0; i < data.data.length; i++) {
                    const fila = tabla.insertRow();

                    const celdaNomina = fila.insertCell(0);
                    const celdaNombre = fila.insertCell(1);

                    celdaNomina.textContent = data.data[i].Nomina;
                    celdaNombre.textContent = data.data[i].Nombre;

                    fila.classList.add('fila-asistente');
                    celdaNomina.classList.add('text-center');
                }
            } else {
                const fila = tabla.insertRow();
                const celda = fila.insertCell(0);
                celda.colSpan = 2;
                celda.textContent = 'No hay asistentes registrados';
                celda.classList.add('text-center', 'text-muted');
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.error("Error al obtener datos:", textStatus, errorThrown);
            const fila = tabla.insertRow();
            const celda = fila.insertCell(0);
            celda.colSpan = 2;
            celda.textContent = 'Error al cargar los datos';
            celda.classList.add('text-center', 'text-danger');
        });
    }

    function verificarUsuario(){

        var nomina = verificarNomina(document.getElementById("txtNomina").value);

        $.getJSON('https://grammermx.com/RH/GrammovilApp/inicio/dao/DaoUsuario.php?usuario=' + nomina, function (data) {
            if (data && data.data && data.data.length > 0) {
                text = data.data[0].NomUser;
                document.getElementById("txtNombre").value = text;
                document.getElementById("txtNomina").value = nomina;
                document.getElementById("btnAnotarme").disabled = false;
            }else{
                document.getElementById("btnAnotarme").disabled = true;
            }
        });

    }

    function guardarAsistencia() {

        var nomina = document.getElementById("txtNomina").value;
        var nombre = document.getElementById("txtNombre").value;

        var formData = new FormData();
        formData.append('nomina', nomina);
        formData.append('nombre', nombre);
        formData.append('folioLista', id);

        fetch('https://grammermx.com/RH/GrammerLearning/dao/daoGuardarAsistencia.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                document.getElementById("closeModal").click();
                llenadoTabla();
                if (data.ya_registrado) {
                    Swal.fire({
                        icon: "success",
                        title: "Ya estabas registrado",
                        showConfirmButton: false,
                        timer: 1000
                    });
                } else if (data.success) {
                    Swal.fire({
                        icon: "success",
                        title: "Registrado",
                        showConfirmButton: false,
                        timer: 1000
                    });
                } else {
                    // Otros errores
                    alert('Error: ' + data.message);
                }
            });
    }


    function verificarNomina(nomina){
        if (nomina.length===1){return "0000000"+nomina}
        if (nomina.length===2){return "000000"+nomina}
        if (nomina.length===3){return "00000"+nomina}
        if (nomina.length===4){return "0000"+nomina}
        if (nomina.length===5){return "000"+nomina}
        if (nomina.length===6){return "00"+nomina}
        if (nomina.length===7){return "0"+nomina}
    }

    function verificarTag(tag){
        if (tag.length===1){return "000000000"+nomina}
        if (tag.length===2){return "00000000"+nomina}
        if (tag.length===3){return "0000000"+nomina}
        if (tag.length===4){return "000000"+nomina}
        if (tag.length===5){return "00000"+nomina}
        if (tag.length===6){return "0000"+nomina}
        if (tag.length===7){return "000"+nomina}
        if (tag.length===8){return "00"+nomina}
        if (tag.length===9){return "0"+nomina}
    }

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);


        var cadena = results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));

        var arrTerminos = cadena.split(',');


        return arrTerminos[0];
    }

    function obtenerTag(nomina) {
        return new Promise((resolve, reject) => {
            $.getJSON('https://grammermx.com/RH/GrammovilApp/inicio/dao/DaoUsuario.php?usuario=' + verificarNomina(nomina))
                .done(data => {
                    if (data?.data?.length > 0) {
                        resolve(data.data[0].IdTag);
                    } else {
                        resolve("");
                    }
                })
                .fail(() => resolve(""));
        });
    }


    async function range() {
        var rango = document.getElementById("face-rating").value;
        var nomina = verificarNomina(document.getElementById("txtNominaCalificacion").value);
        var tag = verificarTag(document.getElementById("txtTagCalificacion").value);
        var comentarios = document.getElementById("txtComentariosCalificacion").value;

        var tagReal = await obtenerTag(nomina);

        if (tagReal===tag){

            var formData = new FormData();
            formData.append('nomina', rango);
            formData.append('calificacion', nomina);
            formData.append('folioLista', id);
            formData.append('comentarios', comentarios);

            fetch('https://grammermx.com/RH/GrammerLearning/dao/daoGuardarCalificacion.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    document.getElementById("closeModalCalificacion").click();
                    if (data.ya_registrado) {
                        Swal.fire({
                            icon: "success",
                            title: "Ya calificaste el curso",
                            showConfirmButton: false,
                            timer: 1000
                        });
                    } else if (data.success) {
                        Swal.fire({
                            icon: "success",
                            title: "Registrado",
                            showConfirmButton: false,
                            timer: 1000
                        });
                    } else {
                        // Otros errores
                        alert('Error: ' + data.message);
                    }
                });

        }else{
            Swal.fire({
                icon: "danger",
                title: "Tag incorrecto, verificalo por favor",
                showConfirmButton: false,
                timer: 1000
            });
        }



    }



</script>
</body>
</html>
