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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 order-1">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 mb-4">
                                    <p class="bg-success text-white display-5 text-center" style="border-radius: 0.5rem" id="lblEstatusCurso">Curso Activo</p>
                                    <p class="display-5 text-center">Acciones</p>
                                    <button class="btn btn-success" onclick="actualizarEstatusCurso(1)">Activar curso</button>
                                    <button class="btn btn-warning" onclick="actualizarEstatusCurso(2)">Cerrar curso</button>
                                    <button class="btn btn-danger" onclick="actualizarEstatusCurso(3)">Cancelar curso</button>
                                    <br><br>
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

                        <div class="col-md-12 col-lg-12 order-2 mb-4">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title m-0 me-2">Tomar asistencia</h5>
                                </div>
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Escanea o escribe tu nomina</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txtNominaAsistencia" />
                                        </div>
                                        <button type="button" id="btnAsistencia" onclick="actualizarAsistencia()" class="btn btn-primary col-sm-1">Registrar</button>
                                    </div>

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

                if (estatus == 1){document.getElementById("lblEstatusCurso").innerHTML="Curso Activo"}
                if (estatus == 2){document.getElementById("lblEstatusCurso").innerHTML="Curso Cerrado"}
                if (estatus == 3){document.getElementById("lblEstatusCurso").innerHTML="Curso Cancelado"}

                document.getElementById("lblTema").innerHTML = tema;
                document.getElementById("lblObjetivo").innerHTML = objetivo;
                document.getElementById("lblInstructor").innerHTML = instructor;
                if (tipoInstructor==1){tipoInstructor="Interno"}else{tipoInstructor="Externo"}
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

    function obtenerNombre(nomina) {
        return new Promise((resolve, reject) => {
            $.getJSON('https://grammermx.com/RH/GrammovilApp/inicio/dao/DaoUsuario.php?usuario=' + verificarNomina(nomina))
                .done(data => {
                    if (data?.data?.length > 0) {
                        resolve(data.data[0].NomUser);
                    } else {
                        resolve("");
                    }
                })
                .fail(() => resolve(""));
        });
    }

    async function actualizarAsistencia() {

        var nomina = document.getElementById("txtNominaAsistencia").value;
        var nombre = await obtenerNombre(nomina);

        if (nombre ===""){
            alert("No se encontro un numero de nomina valido");
        }else{
            var formData = new FormData();
            formData.append('nomina', verificarNomina(nomina));
            formData.append('nombre', nombre);
            formData.append('folioLista', id);

            fetch('https://grammermx.com/RH/GrammerLearning/dao/daoActualizarAsistencia.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    llenadoTablaAsistencias();
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
                        alert('Error: ' + data.message);
                    }
                });
        }
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

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        var cadena = results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        var arrTerminos = cadena.split(',');
        return arrTerminos[0];
    }

    function actualizarEstatusCurso(estatus) {

            var formData = new FormData();
            formData.append('estatus', estatus);
            formData.append('folioLista', id);

            fetch('https://grammermx.com/RH/GrammerLearning/dao/daoActualizarEstatus.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
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

</script>
</body>
</html>
