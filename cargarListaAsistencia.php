<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Grammer Learning</title>

    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="assets/img/icons/Grammer_Logo.ico" />
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
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>
  </head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Menu -->
          <?php include 'estandar/nav.php'; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar -->
            <?php include 'estandar/navProfile.php'; ?>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">

                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Bienvenido Hadbet Ayari Altamirano Martinez 🎉</h5>
                          <p class="mb-4">
                            Tenemos muchos cursos <span class="fw-bold">interesantes para ti</span> puedes ver mas detalles en la seccion de "Mis cursos"
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">Ir a la seccion</a>

                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Cumplidos</span>
                          <h3 class="card-title mb-2">12</h3>
                          <small class="text-success fw-semibold">cursos</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="assets/img/icons/unicons/wallet-info.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span>Pendientes</span>
                          <h3 class="card-title text-nowrap mb-1">20</h3>
                          <small class="text-danger fw-semibold"> cursos</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">

                <!-- Transactions -->
                <div class="col-md-6 col-lg-6 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Cursos pendientes</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0" id="cursosPendientes">



                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-6 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Cursos concluidos</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0" id="cursosConcluidos">

                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/verde.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Obligatorio</small>
                              <h6 class="mb-0">Primeros Auxilios</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <a href="javascript:;" class="btn btn-sm btn-outline-primary">Ver Curso</a>
                            </div>
                          </div>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , Grammer Automotive Puebla S.A de C.V
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="#"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Salir de la sesion</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboards-analytics.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script>

      calificacionCurso();

      function calificacionCurso() {
          const nomina = "00001606";
          const cursosContainer = document.getElementById("cursosPendientes");
          const cursosConcluidos = document.getElementById("cursosConcluidos");

          $.getJSON('https://grammermx.com/RH/GrammerLearning/dao/consultaListasByNomina.php?nomina=' + nomina)
              .done(function(data) {
                  if (data?.data?.length > 0) {
                      // Limpiar contenedor primero
                      cursosContainer.innerHTML = '';
                      cursosConcluidos.innerHTML = '';
                      data.data.forEach(curso => {
                          if (!curso.Tema || !curso.IdLista) return;

                          if (curso.Estatus==1){
                              const listItem = document.createElement('li');
                              listItem.className = 'd-flex mb-4 pb-1';

                              listItem.innerHTML = `
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/rojo.png" alt="User" class="rounded"/>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">${curso.TipoInstructor == 1 ? 'Interno' : curso.TipoInstructor == 2 ? 'Externo' : 'Sin tipo'}</small>
                                <h6 class="mb-0">${curso.Tema}</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <a href="https://grammermx.com/RH/GrammerLearning/toma_asistencia.php?idLista=${curso.IdLista}" class="btn btn-sm btn-outline-primary">Tomar Asistencia</a>
                                <a href="https://grammermx.com/RH/GrammerLearning/lista_asistencia.php?idLista=${curso.IdLista}" class="btn btn-sm btn-outline-primary">Ver curso</a>
                            </div>
                        </div>
                    `;
                              cursosContainer.appendChild(listItem);
                          }else {

                              const listItemConcluido = document.createElement('li');
                              listItemConcluido.className = 'd-flex mb-4 pb-1';

                              listItemConcluido.innerHTML = `
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/verde.png" alt="User" class="rounded"/>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">${curso.TipoInstructor == 1 ? 'Interno' : curso.TipoInstructor == 2 ? 'Externo' : 'Sin tipo'}</small>
                                <h6 class="mb-0">${curso.Tema}</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <a href="https://grammermx.com/RH/GrammerLearning/lista_asistencia.php?idLista=${curso.IdLista}" class="btn btn-sm btn-outline-primary">Ver curso</a>
                            </div>
                        </div>
                    `;

                              cursosConcluidos.appendChild(listItemConcluido);
                          }
                          // Crear elementos DOM de forma segura
                      });
                  } else {
                      cursosContainer.innerHTML = '<li class="text-muted">No hay cursos pendientes</li>';
                      cursosConcluidos.innerHTML = '<li class="text-muted">No hay cursos pendientes</li>';
                  }
              })
              .fail(function(jqXHR, textStatus, error) {
                  console.error("Error al obtener cursos:", textStatus, error);
                  cursosContainer.innerHTML = '<li class="text-danger">Error al cargar cursos</li>';
                  cursosConcluidos.innerHTML = '<li class="text-danger">Error al cargar cursos</li>';
              });
      }

  </script>
  </body>
</html>
