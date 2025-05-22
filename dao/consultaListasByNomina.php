<?php

include_once('db/db_RH.php');

$nomina = $_GET['nomina'];

ContadorApu($nomina);

function ContadorApu($nomina)
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Listas_Asistencias` WHERE `Creador` = '$nomina'");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>