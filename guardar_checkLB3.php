<?php
// Incluir el archivo de conexión
include('conexion.php');

// Función para sanitizar entradas
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener y sanitizar los datos
    $unidad = sanitizeInput($_POST['unidad'] ?? '');
    $placas = sanitizeInput($_POST['placas'] ?? '');
    $fecha = sanitizeInput($_POST['fecha'] ?? '');

    // Insertar datos en la tabla datos_lowboy
    $sql = "INSERT INTO datos_lowboy (unidad, placas, fecha) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $unidad, $placas, $fecha);
    $stmt->execute();

    // Insertar datos en la tabla lowboy
    $frenos = sanitizeInput($_POST['frenos'] ?? '');
    $suspencion = sanitizeInput($_POST['suspencion'] ?? '');
    $neumaticos = sanitizeInput($_POST['neumaticos'] ?? '');
    $luces_intermitentes = sanitizeInput($_POST['luces_intermitentes'] ?? '');
    $luces_traseras = sanitizeInput($_POST['luces_traseras'] ?? '');
    $luces_freno = sanitizeInput($_POST['luces_freno'] ?? '');
    $luces_laterales = sanitizeInput($_POST['luces_laterales'] ?? '');
    $conector_aire = sanitizeInput($_POST['conector_aire'] ?? '');
    $cinta_reflejante = sanitizeInput($_POST['cinta_reflejante'] ?? '');
    $presion_neumaticos = sanitizeInput($_POST['presion_neumaticos'] ?? '');
    $medida_rueda = sanitizeInput($_POST['medida_rueda'] ?? '');
    $medida_tipo_rin = sanitizeInput($_POST['medida_tipo_rin'] ?? '');
    $birlos_tuercas = sanitizeInput($_POST['birlos_tuercas'] ?? '');
    $nivel_tipo_lubricante_baleros = sanitizeInput($_POST['nivel_tipo_lubricante_baleros'] ?? '');
    $piso = sanitizeInput($_POST['piso'] ?? '');
    $balatas_frenos_matracas = sanitizeInput($_POST['balatas_frenos_matracas'] ?? '');
    $rotachamber_tortuga = sanitizeInput($_POST['rotachamber_tortuga'] ?? '');
    $baleros_maza_tambores = sanitizeInput($_POST['baleros_maza_tambores'] ?? '');
    $chasis = sanitizeInput($_POST['chasis'] ?? '');
    $engrasado = sanitizeInput($_POST['engrasado'] ?? '');
    $bolsas_aire = sanitizeInput($_POST['bolsas_aire'] ?? '');
    $fugas_aire = sanitizeInput($_POST['fugas_aire'] ?? '');
    $perno_rey = sanitizeInput($_POST['perno_rey'] ?? '');
    $quinta_rueda = sanitizeInput($_POST['quinta_rueda'] ?? '');
    $patines = sanitizeInput($_POST['patines'] ?? '');
    $placa_identificacion_niv = sanitizeInput($_POST['placa_identificacion_niv'] ?? '');

    $sql = "INSERT INTO lowboy (frenos, suspension, neumaticos, luces_intermitentes, luces_traseras,
                                luces_freno, luces_laterales, conector_aire, cinta_reflejante,
                                presion_neumaticos, medida_rueda, medida_tipo_rin, birlos_tuercas,
                                nivel_tipo_lubricante_baleros, piso, balatas_frenos_matracas, 
                                rotachamber_tortuga, baleros_maza_tambores, chasis, engrasado,
                                bolsas_aire, fugas_aire, perno_rey, quinta_rueda, patines, placa_identificacion_niv)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssssssssssssssss", $frenos, $suspencion, $neumaticos, $luces_intermitentes, $luces_traseras,
        $luces_freno, $luces_laterales, $conector_aire, $cinta_reflejante, $presion_neumaticos, $medida_rueda, 
        $medida_tipo_rin, $birlos_tuercas, $nivel_tipo_lubricante_baleros, $piso, $balatas_frenos_matracas, 
        $rotachamber_tortuga, $baleros_maza_tambores, $chasis, $engrasado, $bolsas_aire, $fugas_aire, $perno_rey, 
        $quinta_rueda, $patines, $placa_identificacion_niv);
    $stmt->execute();

    // Insertar datos en porcentaje_lowboy
    $ejes = sanitizeInput($_POST['ejes'] ?? '');
    $a1 = sanitizeInput($_POST['a1'] ?? '');
    $a2 = sanitizeInput($_POST['a2'] ?? '');
    $a3 = sanitizeInput($_POST['a3'] ?? '');
    $a4 = sanitizeInput($_POST['a4'] ?? '');
    $b1 = sanitizeInput($_POST['b1'] ?? '');
    $b2 = sanitizeInput($_POST['b2'] ?? '');
    $b3 = sanitizeInput($_POST['b3'] ?? '');
    $b4 = sanitizeInput($_POST['b4'] ?? '');
    $c1 = sanitizeInput($_POST['c1'] ?? '');
    $c2 = sanitizeInput($_POST['c2'] ?? '');
    $c3 = sanitizeInput($_POST['c3'] ?? '');
    $c4 = sanitizeInput($_POST['c4'] ?? '');
   

    $sql = "INSERT INTO porcentaje_lowboy (ejes,a1, a2, a3, a4, b1, b2, b3, b4, c1, c2, c3, c4)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss",$ejes, $a1, $a2, $a3, $a4, $b1, $b2, $b3, $b4, $c1, $c2, $c3, $c4);
    $stmt->execute();

    // Insertar observaciones
    $observaciones = sanitizeInput($_POST['observaciones'] ?? '');
    $sql = "INSERT INTO observaciones_lowboy (observaciones) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $observaciones);
    $stmt->execute();

    // Insertar firmas
    $mantenimiento = sanitizeInput($_POST['mantenimiento'] ?? '');
    $operador = sanitizeInput($_POST['operador'] ?? '');
    $vigilancia = sanitizeInput($_POST['vigilancia'] ?? '');

    $sql = "INSERT INTO firmas_lowboy (mantenimiento, operador, vigilancia) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $mantenimiento, $operador, $vigilancia);
    $stmt->execute();

    // Confirmar que los datos fueron guardados correctamente
    echo "Datos guardados correctamente.";

    // Cerrar la conexión
    $conn->close();
}
?>
