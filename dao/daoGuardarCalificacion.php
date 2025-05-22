<?php
require_once 'db/db_RH.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit(json_encode(['success' => false, 'message' => 'Método no permitido. Se requiere POST.']));
}

$nomina = filter_input(INPUT_POST, 'nomina', FILTER_SANITIZE_STRING);
$calificacion = filter_input(INPUT_POST, 'calificacion', FILTER_SANITIZE_STRING);
$folioLista = filter_input(INPUT_POST, 'folioLista', FILTER_SANITIZE_STRING);
$comentarios = filter_input(INPUT_POST, 'comentarios', FILTER_SANITIZE_STRING);

if (empty($nomina) || empty($calificacion) || empty($folioLista) || empty($comentarios)) {
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
    $stmtVerificar = $conex->prepare("SELECT COUNT(*) AS existe FROM `Asistencias` 
                                     WHERE `Nomina` = ? AND `FolioLista` = ? and `EvaluacionCurso` is not null");
    $stmtVerificar->bind_param("si", $nomina, $folioLista);
    $stmtVerificar->execute();
    $resultado = $stmtVerificar->get_result();
    $fila = $resultado->fetch_assoc();
    $stmtVerificar->close();

    if ($fila['existe'] > 0) {
        echo json_encode([
            'success' => false,
            'message' => 'Ya calificaste el curso',
            'ya_registrado' => true
        ]);
        exit;
    }

    $registroExitoso = registrarAsistencia($conex, $nomina, $calificacion, $folioLista,$comentarios);

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

function registrarAsistencia($conex, $nomina, $calificacion, $folioLista,$comentarios) {

    $stmt = $conex->prepare("UPDATE `Asistencias` SET `EvaluacionCurso`=?,`Comentarios`=? 
                     where `FolioLista` = ? and `Nomina` = ?");

    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $conex->error);
    }

    $stmt->bind_param("ssis", $calificacion, $comentarios, $folioLista, $nomina);
    $resultado = $stmt->execute();
    $stmt->close();

    return $resultado;
}
?>