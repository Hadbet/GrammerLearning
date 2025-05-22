<?php
require_once 'db/db_RH.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit(json_encode(['success' => false, 'message' => 'Método no permitido. Se requiere POST.']));
}

// Obtener datos
$estatus = filter_input(INPUT_POST, 'estatus', FILTER_SANITIZE_STRING);
$folioLista = filter_input(INPUT_POST, 'folioLista', FILTER_SANITIZE_STRING);

// Validar campos
if (empty($estatus) || empty($folioLista)) {
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

    $registroExitoso = actualizarEstatus($conex, $estatus, $folioLista);

    if ($registroExitoso) {
        echo json_encode([
            'success' => true,
            'message' => 'Registro exitoso'
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

function actualizarEstatus($conex, $estatus, $folioLista) {

    $stmt = $conex->prepare("UPDATE `Listas_Asistencias` SET `Estatus`=? WHERE `IdLista` = ?");

    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $conex->error);
    }

    $stmt->bind_param("ii", $estatus, $folioLista);
    $resultado = $stmt->execute();
    $stmt->close();

    return $resultado;
}
?>