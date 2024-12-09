<?php
// Incluir el archivo de conexión
include('conexion.php');

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validar y sanitizar los datos del formulario
    function limpiarDato($dato) {
        global $conn;
        return mysqli_real_escape_string($conn, trim($dato));
    }

    $dano_evidente_piezas_sueltas = limpiarDato($_POST['dano_evidente_piezas_sueltas'] ?? '');
    $proteccion_superior = limpiarDato($_POST['proteccion_superior'] ?? '');
    $horquillas_pasadores_seguridad = limpiarDato($_POST['horquillas_pasadores_seguridad'] ?? '');
    $cadenas = limpiarDato($_POST['cadenas'] ?? '');
    $llantas = limpiarDato($_POST['llantas'] ?? '');
    $combustible = limpiarDato($_POST['combustible'] ?? '');
    $mangueras_cables_correas = limpiarDato($_POST['mangueras_cables_correas'] ?? '');
    $extintor_incendios = limpiarDato($_POST['extintor_incendios'] ?? '');
    $espejo = limpiarDato($_POST['espejo'] ?? '');
    $placa_datos_limitaciones_carga = limpiarDato($_POST['placa_datos_limitaciones_carga'] ?? '');
    $rotulos_advertencias = limpiarDato($_POST['rotulos_advertencias'] ?? '');
    $niveles_agua_aceite = limpiarDato($_POST['niveles_agua_aceite'] ?? '');
    $agarraderas_escalones = limpiarDato($_POST['agarraderas_escalones'] ?? '');
    $cinturon_seguridad = limpiarDato($_POST['cinturon_seguridad'] ?? '');
    $direccion_hidraulica = limpiarDato($_POST['direccion_hidraulica'] ?? '');
    $estado_torreta = limpiarDato($_POST['estado_torreta'] ?? '');
    $manual_operacion = limpiarDato($_POST['manual_operacion'] ?? '');
    $controles_pedales_palancas = limpiarDato($_POST['controles_pedales_palancas'] ?? '');
    $bateria_carga = limpiarDato($_POST['bateria_carga'] ?? '');
    $subir_bajar_horquillas = limpiarDato($_POST['subir_bajar_horquillas'] ?? '');
    $frenos = limpiarDato($_POST['frenos'] ?? '');
    $claxon = limpiarDato($_POST['claxon'] ?? '');
    $luces = limpiarDato($_POST['luces'] ?? '');
    $alarma_reversa = limpiarDato($_POST['alarma_reversa'] ?? '');
    $presencia_fluidos_debajo_vehiculo = limpiarDato($_POST['presencia_fluidos_debajo_vehiculo'] ?? '');
    $ruidos_inusuales = limpiarDato($_POST['ruidos_inusuales'] ?? '');

    $marca = limpiarDato($_POST['marca'] ?? '');
    $capacidad = limpiarDato($_POST['capacidad'] ?? '');
    $identificacion = limpiarDato($_POST['identificacion'] ?? '');
    $horometro = limpiarDato($_POST['horometro'] ?? '');
    $fecha = limpiarDato($_POST['fecha'] ?? '');
    $hora = limpiarDato($_POST['hora'] ?? '');

    $comentarios = limpiarDato($_POST['comentarios'] ?? '');

    // Primera consulta
    $sql1 = "INSERT INTO inspeccion_vehicular (
        dano_evidente_piezas_sueltas, proteccion_superior, horquillas_pasadores_seguridad, cadenas, llantas,
        combustible, mangueras_cables_correas, extintor_incendios, espejo, placa_datos_limitaciones_carga, rotulos_advertencias,
        niveles_agua_aceite, agarraderas_escalones, cinturon_seguridad, direccion_hidraulica, estado_torreta,
        manual_operacion, controles_pedales_palancas, bateria_carga, subir_bajar_horquillas, frenos, claxon, luces,
        alarma_reversa, presencia_fluidos_debajo_vehiculo, ruidos_inusuales
    ) VALUES (
        '$dano_evidente_piezas_sueltas', '$proteccion_superior', '$horquillas_pasadores_seguridad', '$cadenas', '$llantas',
        '$combustible', '$mangueras_cables_correas', '$extintor_incendios', '$espejo', '$placa_datos_limitaciones_carga', '$rotulos_advertencias',
        '$niveles_agua_aceite', '$agarraderas_escalones', '$cinturon_seguridad', '$direccion_hidraulica', '$estado_torreta',
        '$manual_operacion', '$controles_pedales_palancas', '$bateria_carga', '$subir_bajar_horquillas', '$frenos', '$claxon',
        '$luces', '$alarma_reversa', '$presencia_fluidos_debajo_vehiculo', '$ruidos_inusuales'
    )";

    // Segunda consulta
    $sql2 = "INSERT INTO datos_inspeccion (
        marca, capacidad, identificacion, horometro, fecha, hora
    ) VALUES (
        '$marca', '$capacidad', '$identificacion', '$horometro', '$fecha', '$hora'
    )";

    // Tercera consulta
    $sql3 = "INSERT INTO comentarios (comentarios) VALUES ('$comentarios')";

    // Ejecutar las consultas
    if ($conn->query($sql1) && $conn->query($sql2) && $conn->query($sql3)) {
        echo "Datos guardados correctamente.";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>

