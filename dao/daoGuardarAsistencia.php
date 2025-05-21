<?php
require_once 'db/db_RH.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit(json_encode(['success' => false, 'message' => 'Método no permitido. Se requiere POST.']));
}

$nomina = filter_input(INPUT_POST, 'nomina', FILTER_SANITIZE_STRING);
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
$folioLista = filter_input(INPUT_POST, 'folioLista', FILTER_SANITIZE_STRING);

// Validar campos
if (empty($nomina) || empty($nombre) || empty($folioLista)) {
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

    $registroExitoso = registrarAsistencia($conex, $nomina, $nombre, $folioLista);

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

function registrarAsistencia($conex, $nomina, $nombre, $folioLista) {
    $Object = new DateTime();
    $Object->setTimezone(new DateTimeZone('America/Denver'));
    $DateAndTime = $Object->format("Y-m-d H:i:s");

    $stmt = $conex->prepare("INSERT INTO `Asistencias`(`Nomina`, `Nombre`, `FolioLista`, `FechaRegistro`) 
                            VALUES (?,?,?,?)");

    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $conex->error);
    }

    // TipoInstructor ahora es integer (i)
    $stmt->bind_param("ssis", $nomina, $nombre, $folioLista, $DateAndTime);
    $resultado = $stmt->execute();
    $stmt->close();

    return $resultado;
}
?>