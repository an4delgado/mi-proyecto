<?php
// Incluir el archivo de conexión
include('conexion.php');



// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Función para sanitizar entradas
    function sanitizeInput($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // Recopilar y sanitizar todos los datos del formulario
    $frenos = sanitizeInput($_POST['frenos'] ?? '');
    $suspension = sanitizeInput($_POST['suspencion'] ?? '');
    $neumaticos = sanitizeInput($_POST['neumaticos'] ?? '');
    $luces_intermitentes = sanitizeInput($_POST['luces_intermitentes'] ?? '');
    $luces_traseras = sanitizeInput($_POST['luces_traseras'] ?? '');
    $luces_freno = sanitizeInput($_POST['luces_frenos'] ?? '');
    $luces_laterales = sanitizeInput($_POST['luces_laterales'] ?? '');
    $conector_aire = sanitizeInput($_POST['conector_aire'] ?? '');
    $cinta_reflejante = sanitizeInput($_POST['cinta_reflejante'] ?? '');
    $presion_neumaticos = sanitizeInput($_POST['presion_neumaticos'] ?? '');
    $medida_rueda = sanitizeInput($_POST['medida_rueda'] ?? '');
    $medida_tipo_rin = sanitizeInput($_POST['medida_tipo_rin'] ?? '');
    $birlos_tuercas = sanitizeInput($_POST['birlos_tuercas'] ?? '');
    $nivel_lubricante_baleros = sanitizeInput($_POST['nivel_lubricante_baleros'] ?? '');
    $piso = sanitizeInput($_POST['piso'] ?? '');
    $balatas_frenos_matracas = sanitizeInput($_POST['balatas_frenos_matracas'] ?? '');
    $rotachamber_tortuga = sanitizeInput($_POST['rotachamber_tortugas'] ?? '');
    $baleros_maza_tambores = sanitizeInput($_POST['baleros_maza_tambores'] ?? '');
    $chasis = sanitizeInput($_POST['chasis'] ?? '');
    $engrasado = sanitizeInput($_POST['engrasado'] ?? '');
    $bolsas_aire = sanitizeInput($_POST['bolsas_aire'] ?? '');
    $fugas_aire = sanitizeInput($_POST['fugas_aire'] ?? '');
    $perno_rey = sanitizeInput($_POST['perno_rey'] ?? '');
    $quinta_rueda = sanitizeInput($_POST['quinta_rueda'] ?? '');
    $patines = sanitizeInput($_POST['patines'] ?? '');
    $placa_identificacion_niv = sanitizeInput($_POST['placa_identificacion_niv'] ?? '');

    $stmt = $conn->prepare("
        INSERT INTO cama_baja (
            frenos, suspension, neumaticos, luces_intermitentes, luces_traseras, 
            luces_freno, luces_laterales, conector_aire, cinta_reflejante, presion_neumaticos, 
            medida_rueda, medida_tipo_rin, birlos_tuercas, nivel_lubricante_baleros, piso, 
            balatas_frenos_matracas, rotachamber_tortuga, baleros_maza_tambores, chasis, engrasado, 
            bolsas_aire, fugas_aire, perno_rey, quinta_rueda, patines, placa_identificacion_niv
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->bind_param(
        "ssssssssssssssssssssssssss",
        $frenos, $suspension, $neumaticos, $luces_intermitentes, $luces_traseras,
        $luces_freno, $luces_laterales, $conector_aire, $cinta_reflejante, $presion_neumaticos,
        $medida_rueda, $medida_tipo_rin, $birlos_tuercas, $nivel_lubricante_baleros, $piso,
        $balatas_frenos_matracas, $rotachamber_tortuga, $baleros_maza_tambores, $chasis, $engrasado,
        $bolsas_aire, $fugas_aire, $perno_rey, $quinta_rueda, $patines, $placa_identificacion_niv
    );
    if (!$stmt->execute()) {
        die("Error en la consulta caja_seca: " . $stmt->error);
    }

    $unidad = sanitizeInput($_POST['unidad'] ?? '');
    $placas = sanitizeInput($_POST['placas'] ?? '');
    $fecha = sanitizeInput($_POST['fecha'] ?? '');

    $stmt = $conn->prepare("INSERT INTO datos_cajaseca (unidad, placas, fecha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $unidad, $placas, $fecha);
    if (!$stmt->execute()) {
        die("Error en la consulta datos_cajaseca: " . $stmt->error);
    }

    $eje = isset($_POST['ejes']) ? (int) $_POST['ejes'] : 0; // Convertir a entero
    $a1 = isset($_POST['a1']) ? $_POST['a1'] : '';
    $a2 = isset($_POST['a2']) ? $_POST['a2'] : '';
    $a3 = isset($_POST['a3']) ? $_POST['a3'] : '';
    $a4 = isset($_POST['a4']) ? $_POST['a4'] : '';
    $b1 = isset($_POST['b1']) ? $_POST['b1'] : '';
    $b2 = isset($_POST['b2']) ? $_POST['b2'] : '';
    $b3 = isset($_POST['b3']) ? $_POST['b3'] : '';
    $b4 = isset($_POST['b4']) ? $_POST['b4'] : '';

    // Validar el valor del eje
    if ($eje < 1 || $eje > 5) {
        die("Valor de eje inválido. Seleccione un eje entre 1 y 5.");
    }

    // Preparar la consulta SQL para insertar los datos
    $stmt = $conn->prepare("INSERT INTO caja_secaporcentaje (ejes, a1, a2, a3, a4, b1, b2, b3, b4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssssss", $ejes, $a1, $a2, $a3, $a4, $b1, $b2, $b3, $b4);

    // Insertar observaciones
    $observaciones = sanitizeInput($_POST['observaciones'] ?? '');

    $stmt = $conn->prepare("INSERT INTO observaciones_cajaseca (observaciones) VALUES (?)");
    $stmt->bind_param("s", $observaciones);
    if (!$stmt->execute()) {
        die("Error en la consulta observaciones_cajasea: " . $stmt->error);
    }

    // Insertar firmas
    $mantenimiento = sanitizeInput($_POST['mantenimiento'] ?? '');
    $operador = sanitizeInput($_POST['operador'] ?? '');
    $vigilancia = sanitizeInput($_POST['vigilancia'] ?? '');

    $stmt = $conn->prepare("INSERT INTO firmas_cajaseca (mantenimiento, operador, vigilancia) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $mantenimiento, $operador, $vigilancia);
   
    if (!$stmt->execute()) {
        error_log("Error en la consulta: " . $stmt->error);
        die("Hubo un problema al guardar los datos. Por favor, intente nuevamente.");
    }
    
   
    echo "Datos guardados correctamente.";
    $stmt->close();
    $conn->close();
}
?>
