<?php
require_once 'db_RH.php';

// Configuración para PHP 8
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 0); // Desactivar en producción

try {
    // Validación de método HTTP
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Método no permitido", 405);
    }

    // Recepción y validación de datos (forma segura para PHP 8)
    $data = filter_input_array(INPUT_POST, [
        'tema' => FILTER_UNSAFE_RAW,
        'objetivo' => FILTER_UNSAFE_RAW,
        'temarioCompleto' => FILTER_UNSAFE_RAW,
        'instructor' => FILTER_UNSAFE_RAW,
        'tipoInstructor' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => ['min_range' => 1, 'max_range' => 2]
        ],
        'area' => FILTER_UNSAFE_RAW,
        'fecha' => FILTER_UNSAFE_RAW
    ]);

    // Validar campos obligatorios
    foreach ($data as $key => $value) {
        if (empty($value)) {
            throw new Exception("El campo $key es requerido", 400);
        }
    }

    // Conexión a BD
    $con = new LocalConector();
    $conex = $con->conectar();
    if (!$conex) throw new Exception("Error de conexión a BD", 500);

    // Formateo de fechas
    $fecha_mysql = date("Y-m-d H:i:s", strtotime($data['fecha']));
    $fecha_creacion = (new DateTime('now', new DateTimeZone('America/Denver')))->format('Y-m-d H:i:s');

    // Prepared statement
    $stmt = $conex->prepare("INSERT INTO `Listas_Asistencias` 
                            (`Tema`, `Objetivo`, `Temario`, `Instructor`, `TipoInstructor`, `Area`, `FechaInicio`, `FechaCreacion`, `FechaCierre`, `Estatus`) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, '', 1)");

    if (!$stmt) throw new Exception("Error al preparar consulta: " . $conex->error, 500);

    $stmt->bind_param(
        "ssssisss",
        $data['tema'],
        $data['objetivo'],
        $data['temarioCompleto'],
        $data['instructor'],
        $data['tipoInstructor'], // Ya validado como INT
        $data['area'],
        $fecha_mysql,
        $fecha_creacion
    );

    if (!$stmt->execute()) {
        throw new Exception("Error al ejecutar: " . $stmt->error, 500);
    }

    // Respuesta exitosa
    echo json_encode([
        'success' => true,
        'folio' => $conex->insert_id,
        'message' => 'Registro exitoso'
    ]);

} catch (Exception $e) {
    http_response_code($e->getCode() ?: 500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage(),
        'error_code' => $e->getCode()
    ]);
    exit;
}
?>