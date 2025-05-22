<?php

include_once('db/db_RH.php');

$idLista = $_GET['idLista'];

ContadorApu($idLista);

function ContadorApu($idLista)
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT AVG(EvaluacionCurso) AS Promedio, COUNT(EvaluacionCurso) AS TotalEvaluaciones, MIN(EvaluacionCurso) AS CalificacionMinima, MAX(EvaluacionCurso) AS CalificacionMaxima, ROUND(AVG(EvaluacionCurso), 2) AS PromedioRedondeado FROM Asistencias WHERE FolioLista = '$idLista' AND EvaluacionCurso IS NOT NULL AND Comentarios <> 'NA';");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>