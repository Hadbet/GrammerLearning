<?php

include_once('db/db_RH.php');

$idLista = $_GET['idLista'];

ContadorApu($idLista);

function ContadorApu($idLista)
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Asistencias` WHERE `FolioLista` = '$idLista'");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>