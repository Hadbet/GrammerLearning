<?php

require_once 'db_RH.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Método no permitido. Se requiere POST.');
}

$tema = filter_input(INPUT_POST, 'tema', FILTER_SANITIZE_STRING);
$objetivo = filter_input(INPUT_POST, 'objetivo', FILTER_SANITIZE_STRING);
$temarioCompleto = filter_input(INPUT_POST, 'temarioCompleto', FILTER_SANITIZE_STRING);
$instructor = filter_input(INPUT_POST, 'instructor', FILTER_SANITIZE_STRING);
$tipoInstructor = filter_input(INPUT_POST, 'tipoInstructor', FILTER_SANITIZE_STRING);
$area = filter_input(INPUT_POST, 'area', FILTER_SANITIZE_STRING);
$fecha = filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);

$con = new LocalConector();
$conex = $con->conectar();

if (empty($tema) || empty($objetivo) || empty($temarioCompleto) || empty($instructor) || empty($tipoInstructor) || empty($area) || empty($fecha)) {
    http_response_code(400);
    exit('Todos los campos son obligatorios.');
}

try {
    $registroExitoso = registrarAsistencia($tema,$objetivo,$temarioCompleto,$instructor,$tipoInstructor,$area,$fecha);

    if ($registroExitoso) {
        $idGenerado = $conex->insert_id; // Obtiene el ID del último registro insertado
        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'message' => 'Registro exitoso',
            'folio' => $idGenerado
        ]);
    } else {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Error al registrar']);
    }
} catch (Exception $e) {
    http_response_code(500);
    error_log("Error en registro: " . $e->getMessage());
    exit('Ocurrió un error al procesar la solicitud.');

}

function registrarAsistencia($tema,$objetivo,$temarioCompleto,$instructor,$tipoInstructor,$area,$fecha) {

    if (!$conex) {
        throw new Exception("Error de conexión a la base de datos");
    }

    $Object = new DateTime();
    $Object->setTimezone(new DateTimeZone('America/Denver'));
    $DateAndTime = $Object->format("Y/m/d h:i:s");

    $stmt = $conex->prepare("INSERT INTO `Listas_Asistencias`(`Tema`, `Objetivo`, `Temario`, `Instructor`, `TipoInstructor`, `Area`, `FechaInicio`, `FechaCreacion`, `FechaCierre`, `Estatus`) 
                                    VALUES (?,?,?,?,?,?,?,?,'',1)");

    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $conex->error);
    }

    $stmt->bind_param("ssssisss", $tema, $objetivo, $temarioCompleto, $instructor,$tipoInstructor,$area,$fecha,$DateAndTime);
    $resultado = $stmt->execute();

    $stmt->close();
    $conex->close();

    return $resultado;
}

?>