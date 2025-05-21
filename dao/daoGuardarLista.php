<?php
require_once 'db/db_RH.php';

// Habilita errores para depuración (quitar en producción)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit(json_encode(['success' => false, 'message' => 'Método no permitido. Se requiere POST.']));
}

// Obtener datos
$tema = filter_input(INPUT_POST, 'tema', FILTER_SANITIZE_STRING);
$objetivo = filter_input(INPUT_POST, 'objetivo', FILTER_SANITIZE_STRING);
$temarioCompleto = filter_input(INPUT_POST, 'temarioCompleto', FILTER_SANITIZE_STRING);
$instructor = filter_input(INPUT_POST, 'instructor', FILTER_SANITIZE_STRING);
$tipoInstructor = filter_input(INPUT_POST, 'tipoInstructor', FILTER_SANITIZE_NUMBER_INT); // Cambiado a INT
$area = filter_input(INPUT_POST, 'area', FILTER_SANITIZE_STRING);
$fecha = filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);

// Validar campos
if (empty($tema) || empty($objetivo) || empty($temarioCompleto) || empty($instructor) ||
    empty($tipoInstructor) || empty($area) || empty($fecha)) {
    http_response_code(400);
    exit(json_encode(['success' => false, 'message' => 'Todos los campos son obligatorios.']));
}

$con = new LocalConector();
$conex = $con->conectar();

if (!$conex) {
    http_response_code(500);
    exit(json_encode(['success' => false, 'message' => 'Error de conexión a la base de datos']));
}

try {
    //echo "INSERT INTO `Listas_Asistencias`(`Tema`, `Objetivo`, `Temario`, `Instructor`, `TipoInstructor`, `Area`, `FechaInicio`, `FechaCreacion`, `FechaCierre`, `Estatus`)
     //                       VALUES ('$tema','$objetivo','$temarioCompleto','$instructor','$tipoInstructor','$area','$fecha','$fecha','',1)";

    $registroExitoso = registrarAsistencia($conex, $tema, $objetivo, $temarioCompleto, $instructor, $tipoInstructor, $area, $fecha);

    if ($registroExitoso) {
        $idGenerado = $conex->insert_id;
        echo json_encode([
            'success' => true,
            'message' => 'Registro exitoso',
            'folio' => $idGenerado
        ]);
    } else {
        throw new Exception("Error al ejecutar la consulta");
    }
} catch (Exception $e) {
    http_response_code(500);
    error_log("Error en registro: " . $e->getMessage());
    echo json_encode([
        'success' => false,
        'message' => 'Error en el servidor: ' . $e->getMessage()
    ]);
}

function registrarAsistencia($conex, $tema, $objetivo, $temarioCompleto, $instructor, $tipoInstructor, $area, $fecha) {
    $Object = new DateTime();
    $Object->setTimezone(new DateTimeZone('America/Denver'));
    $DateAndTime = $Object->format("Y-m-d H:i:s"); // Formato corregido
    $fecha_mysql = date("Y-m-d H:i:s", strtotime($fecha));

    $stmt = $conex->prepare("INSERT INTO `Listas_Asistencias`(`Tema`, `Objetivo`, `Temario`, `Instructor`, `TipoInstructor`, `Area`, `FechaInicio`, `FechaCreacion`, `FechaCierre`, `Estatus`) 
                            VALUES (?,?,?,?,?,?,?,?,'',1)");

    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $conex->error);
    }

    // TipoInstructor ahora es integer (i)
    $stmt->bind_param("ssssisss", $tema, $objetivo, $temarioCompleto, $instructor, $tipoInstructor, $area, $fecha_mysql, $DateAndTime);
    $resultado = $stmt->execute();
    $stmt->close();

    return $resultado;
}
?>