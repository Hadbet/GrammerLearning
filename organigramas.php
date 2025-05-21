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

                      <div class="col-xl-12">

                          <!-- Modal -->
                          <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="modalCenterTitle">Registro exitoso</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body text-center">
                                          <p>El folio generado es: <strong id="folioNumber"></strong></p>
                                          <div class="input-group mb-3">
                                              <input type="text" class="form-control" id="folioLink" readonly>
                                              <button class="btn btn-outline-secondary" type="button" id="copyButton">
                                                  <i class="bx bx-copy"></i>
                                              </button>
                                          </div>
                                          <div id="qrCode" class="my-3" style="justify-self: center;"></div>
                                          <small class="text-muted">Escanea este código QR para acceder al registro</small>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="card mb-4">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                  <h5 class="mb-0">Crear lista de asistencia</h5>
                                  <small class="text-muted float-end">Llene los datos de manera correcta</small>
                              </div>
                              <div class="card-body">
                                      <div class="mb-3">
                                          <label class="form-label" for="basic-default-fullname">Tema</label>
                                          <input type="text" class="form-control" id="txtTema"/>
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label" for="basic-default-company">Objetivo</label>
                                          <input type="text" class="form-control" id="txtObjetivo"/>
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label" for="temario-input">Temario</label>
                                          <input type="text" class="form-control" id="temario-input" placeholder="Ingrese un tema y presione Enter"/>

                                          <div class="table-responsive text-nowrap mt-4">
                                              <table class="table table-bordered" id="temario-table">
                                                  <thead>
                                                  <tr>
                                                      <th>Num</th>
                                                      <th>Descripcion</th>
                                                      <th>Acciones</th>
                                                  </tr>
                                                  </thead>
                                                  <tbody>

                                                  </tbody>
                                              </table>
                                          </div>

                                          <button id="exportar-temario" class="btn btn-primary mt-3">Generar Variable Temario</button>
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label" for="basic-default-phone">Intructor</label>
                                          <input type="text" class="form-control" id="txtInstructor"/>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label" for="basic-default-phone">Tipo Instructor</label>
                                          <div class="form-check mt-3">
                                              <input
                                                      name="default-radio-1"
                                                      class="form-check-input"
                                                      type="radio"
                                                      value="1"
                                                      id="defaultRadio1"
                                              />
                                              <label class="form-check-label" for="defaultRadio1"> Interno </label>
                                          </div>
                                          <div class="form-check">
                                              <input
                                                      name="default-radio-1"
                                                      class="form-check-input"
                                                      type="radio"
                                                      value="2"
                                                      id="defaultRadio2"
                                                      checked
                                              />
                                              <label class="form-check-label" for="defaultRadio2"> Externo </label>
                                          </div>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label" for="basic-default-phone">Area / Empresa</label>
                                          <input type="text" class="form-control" id="txtArea"/>
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label" for="basic-default-message">Fecha y hora</label>
                                          <input type="datetime-local" class="form-control" id="txtFecha"/>
                                      </div>
                                      <button id="btnCrearLista" onclick="guardarLista()" class="btn btn-primary">Crear lista</button>
                              </div>
                          </div>
                      </div>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
  <script>

      document.addEventListener('DOMContentLoaded', function() {
          const temarioInput = document.getElementById('temario-input');
          const temarioTable = document.getElementById('temario-table').getElementsByTagName('tbody')[0];

          // Agregar tema al presionar Enter
          temarioInput.addEventListener('keypress', function(e) {
              if (e.key === 'Enter' && this.value.trim() !== '') {
                  e.preventDefault();

                  // Crear nueva fila
                  const newRow = temarioTable.insertRow();

                  // Número de fila (contador)
                  const cellNum = newRow.insertCell(0);
                  cellNum.textContent = temarioTable.rows.length;

                  // Descripción del tema
                  const cellDesc = newRow.insertCell(1);
                  cellDesc.textContent = this.value.trim();

                  // Celda de acciones
                  const cellActions = newRow.insertCell(2);
                  cellActions.innerHTML = `
        <button class="btn btn-sm btn-warning me-2 editar-btn">Editar</button>
        <button class="btn btn-sm btn-danger eliminar-btn">Eliminar</button>
      `;
                  // Limpiar input
                  this.value = '';
                  // Asignar eventos a los nuevos botones
                  asignarEventosBotones(newRow);
              }
          });

          // Función para asignar eventos a los botones
          function asignarEventosBotones(row) {
              // Botón Editar
              row.querySelector('.editar-btn').addEventListener('click', function() {
                  const descCell = row.cells[1];
                  const currentText = descCell.textContent;

                  // Crear input para edición
                  const input = document.createElement('input');
                  input.type = 'text';
                  input.value = currentText;
                  input.className = 'form-control form-control-sm';

                  // Reemplazar texto con input
                  descCell.textContent = '';
                  descCell.appendChild(input);
                  input.focus();

                  // Guardar al perder foco o presionar Enter
                  input.addEventListener('blur', guardarEdicion);
                  input.addEventListener('keypress', function(e) {
                      if (e.key === 'Enter') guardarEdicion();
                  });

                  function guardarEdicion() {
                      descCell.textContent = input.value.trim() || currentText;
                  }
              });

              // Botón Eliminar
              row.querySelector('.eliminar-btn').addEventListener('click', function() {
                      Swal.fire({
                          title: "¿Estas seguro de eliminar ese elemento?",
                          showDenyButton: true,
                          showCancelButton: true,
                          confirmButtonText: "Si!",
                          denyButtonText: `No!`
                      }).then((result) => {
                          /* Read more about isConfirmed, isDenied below */
                          if (result.isConfirmed) {
                              Swal.fire("Eliminado!", "", "success");
                              row.remove();
                              actualizarNumeros();
                          } else if (result.isDenied) {
                              Swal.fire("Se anulo", "", "info");
                          }
                      });
              });
          }

          // Función para reordenar números después de eliminar
          function actualizarNumeros() {
              const rows = temarioTable.rows;
              for (let i = 0; i < rows.length; i++) {
                  rows[i].cells[0].textContent = i + 1;
              }
          }
      });

      function guardarLista() {

          const temarioTable = document.getElementById('temario-table').getElementsByTagName('tbody')[0];

          var tema = document.getElementById("txtTema").value;
          var objetivo = document.getElementById("txtObjetivo").value;

          const rows = temarioTable.rows;
          let temarioCompleto = "";

          for (let i = 0; i < rows.length; i++) {
              const num = rows[i].cells[0].textContent;
              const desc = rows[i].cells[1].textContent;

              if (i > 0) temarioCompleto += ", ";
              temarioCompleto += `${num} ${desc}`;
          }

          var instructor = document.getElementById("txtInstructor").value;
          var tipoInstructor = document.querySelector('input[name="default-radio-1"]:checked').value;
          var area = document.getElementById("txtArea").value;
          var fecha = document.getElementById("txtFecha").value;
          const fechaMySQL = fecha.replace('T', ' ') + ':00';

          console.log("Datos a enviar:", {
              tema: tema,
              objetivo: objetivo,
              temarioCompleto: temarioCompleto,
              instructor: instructor,
              tipoInstructor: tipoInstructor,
              area: area,
              fecha: fechaMySQL
          });

          var formData = new FormData();
          formData.append('tema', tema);
          formData.append('objetivo', objetivo);
          formData.append('temarioCompleto', temarioCompleto);
          formData.append('instructor', instructor);
          formData.append('tipoInstructor', 1);
          formData.append('area', area);
          formData.append('fecha', fechaMySQL);

          fetch('https://grammermx.com/RH/GrammerLearning/dao/daoGuardarLista.php', {
              method: 'POST',
              body: formData
          })
              .then(response => response.json())
              .then(data => {
                  if (data.success) {
                      const folio = data.folio;
                      const baseUrl = 'https://grammermx.com/RH/GrammerLearning/dao/daoGuardarLista.php?Folio=';
                      const fullUrl = baseUrl + folio;

                      // Configurar el modal
                      document.getElementById('folioNumber').textContent = folio;
                      document.getElementById('folioLink').value = fullUrl;

                      // Generar QR
                      document.getElementById('qrCode').innerHTML = '';
                      new QRCode(document.getElementById('qrCode'), {
                          text: fullUrl,
                          width: 150,
                          height: 150
                      });

                      // Mostrar modal
                      var modal = new bootstrap.Modal(document.getElementById('successModal'));
                      modal.show();

                      // Configurar botón de copiar
                      document.getElementById('copyButton').addEventListener('click', function() {
                          const copyText = document.getElementById('folioLink');
                          copyText.select();
                          document.execCommand('copy');
                          // Puedes agregar una notificación de que se copió
                          alert('Enlace copiado al portapapeles');
                      });
                  } else {
                      alert('Error al guardar: ' + (data.message || 'Error desconocido'));
                  }
              });
      }

  </script>
  </body>
</html>
