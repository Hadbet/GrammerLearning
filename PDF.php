<?php

include_once('dao/db/db_RH.php');

$css=file_get_contents("assets/css/pdf.css");

$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_parts = parse_url($actual_link);// Obtener las partes de la URL
parse_str($url_parts['query'], $query_params);// Obtener los parámetros de consulta
$id = $query_params['id'];// Extraer el ID de la prueba


$con = new LocalConector();
$conex = $con->conectar();

$datos = mysqli_query($conex, "SELECT `IdAsistencia`, `Nomina`, `Nombre`, `FolioLista`, `FechaRegistro`, `Estatus`, `EvaluacionCurso`, `EvaluacionInstructor`, `Comentarios`, `FechaAsistencia` FROM `Asistencias` WHERE `FolioLista` = '$id' and  `Estatus` = 1");
$resultados = mysqli_fetch_all($datos, MYSQLI_ASSOC);

$selectQuery = "SELECT `IdLista`, `Tema`, `Objetivo`, `Temario`, `Instructor`, `TipoInstructor`, `Area`, `FechaInicio`, `FechaCreacion`, `FechaCierre`, `Estatus`, `Creador` FROM `Listas_Asistencias` WHERE `IdLista` = '$id'";
$rsSelect = mysqli_query($conex, $selectQuery);

$row = mysqli_fetch_assoc($rsSelect);
$Curso = $row['Tema'];
$Fecha = $row['FechaInicio'];
$Objetivo = $row['Objetivo'];
$Instructor = $row['Instructor'];
$Tipo = $row['TipoInstructor'];
$Area = $row['Area'];
$Capacidad = 'No aplica';
$Temario = $row['Temario'];
$Temario = str_replace(', ', "\n", $Temario);
$Temario = nl2br($Temario);

ob_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GRAMMER RH</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="page-header row headerLogo">
        <table id="tableTitle">
            <tr class="">
                <th class="">
                    <div class="col divTitle" id="divRespdf">
                        <h1>Lista de asistencia</h1>
                        <h6>Grammer Querétaro</h6>
                    </div>
                </th>
                <td>
                    <div class="col">
                        <img class="logoGrammer2-img logoR" alt="LogoGrammer" src="https://grammermx.com/Controlling/BonoSalida/images/GrammerLogo.png"><br>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container-fluid" id="containerPruebaPDF" >
        <div class="row">
            <div class="table-responsive">
                <h5 id="titleTablaPDFg" style="color:whitesmoke;">DATOS GENERALES</h5>
                <table class="table table-bordered table-hover table-sm  table-responsive" id="datosGeneralesTablePDF">
                    <tbody>
                    <tr class="bg-primary">
                        <th class="">Nombre del curso: </th>
                        <td  colspan="3"><?php echo $Curso;?></td>
                    </tr>
                    <tr class="bg-primary">
                        <th class="" >Objetivo del curso:</th>
                        <td  colspan="3"><?php echo $Objetivo;?></td>
                    </tr>
                    <tr>
                        <th class="">Fecha del curso: </th>
                        <td><?php echo $Fecha;?></td>
                        <th class=""> Capacidad:</th>
                        <td><?php echo $Capacidad;?> personas</td>
                    </tr>
                    <tr>
                        <th class="">Tipo: </th>
                        <td><?php echo $Tipo;?></td>
                        <th class="">Instructor: </th>
                        <td><a href=""><?php echo $Instructor;?></a></td>
                    </tr>
                    <tr>
                        <th class="">Área: </th>
                        <td><?php echo $Area;?></td>
                        <th class="">Firma del instructor: </th>
                        <td></td>
                    </tr>
                    <tr class="bg-primary">
                        <th class="">Temario :</th>
                        <td  colspan="3" style="padding-left:20px; text-align: left;"><?php echo $Temario;?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="" class="table-responsive">
                <h5 id="materialPDF" style="color:whitesmoke;">Asistencia</h5>
                <table class="table table-striped" id="materialesResumenPDF">
                    <thead>
                    <tr>
                        <th>Nómina</th>
                        <th>Nombre</th>
                        <th>Firma</th>
                        <th>Turno</th>
                    </tr>
                    </thead>
                    <tbody>
                            <?php foreach ($resultados as $resultado){?>
                        <tr>
                            <td><?php echo $resultado['Nomina'];?> </td>
                            <td><?php echo $resultado['Nombre'];?></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <div id="" class="table-responsive">
                <table class="table table-bordered table-hover table-sm table-responsive" id="resultadosTablePDF">
                    <tbody>
                    <tr>
                        <th class="">Observaciones:</th>
                        <td id=""  colspan="3"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </main>
    <footer class="footer_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <small> <a href="https://arketipo.mx/Produccion/ML/PW_MetrologyLaboratory/modules/sesion/indexSesion.php">Entrenamientos de Grammer Querétaro </a></small><br>
                    <strong><small>GRAMMER AUTOMOTIVE PUEBLA S. A. DE C. V.</small></strong>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php

$html=ob_get_clean();
$html = "<style>" . $css . "</style>" . $html;

require_once 'libs/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$dompdf = new Dompdf($options);

// Carga el HTML en Dompdfu8
$dompdf->loadHtml($html);

// Renderiza el documento
$dompdf->render();

// Envía el PDF al navegador
$dompdf->stream("Lista_de_Asistencia.pdf", array("Attachment" => false));
?>