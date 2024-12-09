<?php
// Incluir el archivo de conexión
include('conexion.php');
echo "<pre>";
var_dump($_POST);
echo "</pre>";



// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $unidad_placas = isset($_POST['Unidad_placas']) ? $_POST['Unidad_placas'] : '';
    $lectura_odometro = isset($_POST['lectura_de_odometro']) ? $_POST['lectura_de_odometro'] : '';
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : ''; // Formato YYYY-MM-DD
    $fecha_ultimo_servicio = isset($_POST['fecha_de_ultimo_servicio']) ? $_POST['fecha_de_ultimo_servicio'] : ''; // Asegúrate de que el nombre coincida

    // Verificar que los datos no estén vacíos
    if (!empty($unidad_placas) && !empty($lectura_odometro) && !empty($fecha) && !empty($fecha_ultimo_servicio)) {
        // Preparar la consulta SQL para insertar los datos
        $sql = "INSERT INTO datos_equipo (unidad_placas, fecha, lectura_odometro, fecha_ultimo_servicio)
                VALUES ('$unidad_placas', '$fecha', '$lectura_odometro', '$fecha_ultimo_servicio')";
mysqli_query($conn, $sql);

//TABLA CONDICIONES DEL MOTOR
$Nivel_aceite_motor = isset($_POST['nivelAceiteMotor']) ? $_POST['nivelAceiteMotor'] : '';
$Nivel_aceite_Hidraulico = isset($_POST['nivelaceiteHidraulico']) ? $_POST['nivelaceiteHidraulico'] : '';
$Nivel_refrigerante = isset($_POST['Nivel_refrigerante']) ? $_POST['Nivel_refrigerante'] : '';
$Diferencial_Inter = isset($_POST['diferencialInter']) ? $_POST['diferencialInter'] : ''; 
$diferencial_Motriz = isset($_POST['diferencialmotriz']) ? $_POST['diferencialmotriz'] : ''; 
$Filtro_aceite = isset($_POST['filtroAceite']) ? $_POST['filtroAceite'] : '';
$Filtro_aire = isset($_POST['filtro_de_aire']) ? $_POST['filtro_de_aire'] : '';
$Filtro_combustible = isset($_POST['filtroCombustible']) ? $_POST['filtroCombustible'] : '';
$Filtro_refrigerante = isset($_POST['filtroRefrigerante']) ? $_POST['filtroRefrigerante'] : '';
$sopleteado_filtro_aire = isset($_POST['sopleteadoFiltro']) ? $_POST['sopleteadoFiltro'] : '';
$revision_fugas_general = isset($_POST['revisionFugas']) ? $_POST['revisionFugas'] : '';
$revision_bandas_poleas = isset($_POST['revisionBandasPoleas']) ? $_POST['revisionBandasPoleas'] : '';
$engrasado_general = isset($_POST['engrasadoGeneral']) ? $_POST['engrasadoGeneral'] : '';
$cofre = isset($_POST['cofre']) ? $_POST['cofre'] : '';
$Bandas_motor = isset($_POST['bandasMotor']) ? $_POST['bandasMotor'] : '';
$Tapon_radiador = isset($_POST['tapon_radiador']) ? $_POST['tapon_radiador'] : '';
$Tapon_deposito_aceite = isset($_POST['taponDepositoAceite']) ? $_POST['taponDepositoAceite'] : '';

        $sql = "INSERT INTO condiciones_del_motor (nivel_aceite_motor,nivel_aceite_Hidraulico,Nivel_refrigerante,diferencial_Inter,diferencial_motriz,filtro_Aceite,Filtro_aire,filtro_Combustible,Filtro_Refrigerante,sopleteado_filtro_aire,revision_fugas_general,revision_bandas_poleas,engrasado_general,cofre,Bandas_motor,tapon_radiador,Tapon_deposito_aceite )
                VALUES ('$Nivel_aceite_motor','$Nivel_aceite_Hidraulico','$Nivel_refrigerante','$Diferencial_Inter','$diferencial_Motriz','$Filtro_aceite','$Filtro_aire','$Filtro_combustible','$Filtro_refrigerante','$sopleteado_filtro_aire','$revision_fugas_general','$revision_bandas_poleas','$engrasado_general','$cofre','$Bandas_motor','$Tapon_radiador','$Tapon_deposito_aceite')";
(mysqli_query($conn, $sql));


//TABLA INTERIOR CABINA
$condicion_asientos_cinturon= isset($_POST['Condicion_asientos_cinturon']) ? $_POST['Condicion_asientos_cinturon']: '';
$manometros_oil_temp_volts_aire = isset($_POST['manometros_oil_temp_volts_aire']) ? $_POST['manometros_oil_temp_volts_aire'] : '';
$limpieza_interior_cabina = isset($_POST['limpieza_interior_cabina']) ? $_POST['limpieza_interior_cabina'] : '';
$tablero_velocidad= isset($_POST['Tablero_velocidad']) ? $_POST['Tablero_velocidad'] : '';
$aire_acondicionado= isset($_POST['Aire_acondicionado']) ? $_POST['Aire_acondicionado'] : '';
$estereo= isset($_POST['Estereo']) ? $_POST['Estereo'] : '';
$manija_seguro_izquierda = isset($_POST['Manija_seguro_izquierda']) ? $_POST['Manija_seguro_izquierda'] : '';
$manija_seguro_derecha = isset($_POST['Manija_seguro_derecha']) ? $_POST['Manija_seguro_derecha'] : '';
$Corneta_Claxon = isset($_POST['Corneta_Claxon']) ? $_POST['Corneta_Claxon'] : '';

$sql = "INSERT INTO interior_cabina (
    Condicion_asientos_cinturon,
    manometros_oil_temp_volts_aire,
    limpieza_interior_cabina,
    Tablero_velocidad,
    Aire_acondicionado,
    Estereo,
    Manija_seguro_izquierda,
    Manija_seguro_derecha,
    Corneta_Claxon
) VALUES (
    '$condicion_asientos_cinturon',
    '$manometros_oil_temp_volts_aire',
    '$limpieza_interior_cabina',
    '$tablero_velocidad',
    '$aire_acondicionado',
    '$estereo',
    '$manija_seguro_izquierda',
    '$manija_seguro_derecha',
    '$Corneta_Claxon'
)"; 
mysqli_query($conn, $sql);

// SISTEMA D FRENOS

$fugas_aire = isset($_POST['Fugas_de_aire']) ? $_POST['Fugas_de_aire'] : '';
$condicion_balatas= isset($_POST['Condicion_de_balatas']) ? $_POST['Condicion_de_balatas'] : '';
$Rotachambers= isset($_POST['Rotachambers']) ? $_POST['Rotachambers'] : '';
$Gavilanes_bujes= isset($_POST['Gavilanes_y_bujes']) ? $_POST['Gavilanes_y_bujes'] : '';
$Tambores= isset($_POST['Tambores']) ? $_POST['Tambores'] : '';

$sql = "INSERT INTO sistema_de_frenos (
    Fugas_aire,
    Condicion_balatas,
    Rotachambers,
    Gavilanes_bujes,
    Tambores
) VALUES (
    '$fugas_aire',
    '$condicion_balatas',
    '$Rotachambers',
    '$Gavilanes_bujes',
    '$Tambores'
)";
mysqli_query($conn, $sql);
//EXTERIOR D VEHICULOS


$espejo_lateral_derecho = isset($_POST['espejo_lateral_derecho']) ? $_POST['espejo_lateral_derecho'] : '';
$espejo_lateral_izquierdo = isset($_POST['espejo_lateral_izquierdo']) ? $_POST['espejo_lateral_izquierdo'] : '';
$Limpiadores_plumillas = isset($_POST['Limpiadores_Plumillas']) ? $_POST['Limpiadores_Plumillas'] : '';
$Parabrisas_cristal_frontal= isset($_POST['Parabrisas_cristal_frontal']) ? $_POST['Parabrisas_cristal_frontal'] : '';
$Matachispas = isset($_POST['Matachispas']) ? $_POST['Matachispas'] : '';
$Escape = isset($_POST['Escape']) ? $_POST['Escape'] : '';
$Defensa = isset($_POST['Defensa']) ? $_POST['Defensa'] : '';
$Tanque_diesel_1 = isset($_POST['Tanque_diesel_1']) ? $_POST['Tanque_diesel_1'] : '';
$Tanque_diesel_2 = isset($_POST['Tanque_diesel_2']) ? $_POST['Tanque_diesel_2'] : '';
$Tapon_combustible = isset($_POST['Tapon_combustible']) ? $_POST['Tapon_combustible'] : '';
$Manguera_aire = isset($_POST['Manguera_aire']) ? $_POST['Manguera_aire'] : '';
$Portaloderas_derecho = isset($_POST['Portaloderas_derecho']) ? $_POST['Portaloderas_derecho'] : '';
$lodera_derecha = isset($_POST['Lodera_derecha']) ? $_POST['Lodera_derecha'] : '';
$Portaloderas_izquierda = isset($_POST['Portaloderas_izquierda']) ? $_POST['Portaloderas_izquierda'] : '';
$lodera_izquierda = isset($_POST['Lodera_izquierda']) ? $_POST['Lodera_izquierda'] : '';
$Estribos = isset($_POST['Estribos']) ? $_POST['Estribos'] : '';
$Tapa_baterias = isset($_POST['Tapa_baterias']) ? $_POST['Tapa_baterias'] : '';
$Condicion_baterias = isset($_POST['Condicion_baterias']) ? $_POST['Condicion_baterias'] : '';
$Purgadores_tanque_aire = isset($_POST['Purgadores_tanque_aire']) ? $_POST['Purgadores_tanque_aire'] : '';
$manitas_aire = isset($_POST['Manitas_aire']) ? $_POST['Manitas_aire'] : '';
$Quinta_rueda = isset($_POST['Quinta_rueda']) ? $_POST['Quinta_rueda'] : '';
$Placas_delantera_trasera = isset($_POST['Placa_delantera_Trasera']) ? $_POST['Placa_delantera_Trasera'] : '';

$sql = "INSERT INTO exterior_vehiculos_detalles (
    espejo_lateral_derecho,
    espejo_lateral_izquierdo,
    Limpiadores_Plumillas,
    Parabrisas_cristal_frontal,
    Matachispas,
    Escape,
    Defensa,
    Tanque_diesel_1,
    Tanque_diesel_2,
    Tapon_combustible,
    Manguera_aire,
    Portaloderas_derecho,
    Lodera_derecha,
    Portaloderas_izquierda,
    Lodera_izquierda,
    Estribos,
    Tapa_baterias,
    Condicion_baterias,
    Purgadores_tanque_aire,
    Manitas_aire,
    Quinta_rueda,
    Placas_delantera_trasera
) VALUES (
    '$espejo_lateral_derecho',
    '$espejo_lateral_izquierdo',
    '$Limpiadores_plumillas',
    '$Parabrisas_cristal_frontal',
    '$Matachispas',
    '$Escape',
    '$Defensa',
    '$Tanque_diesel_1',
    '$Tanque_diesel_2',
    '$Tapon_combustible',
    '$Manguera_aire',
    '$Portaloderas_derecho',
    '$lodera_derecha',
    '$Portaloderas_izquierda',
    '$lodera_izquierda',
    '$Estribos',
    '$Tapa_baterias',
    '$Condicion_baterias',
    '$Purgadores_tanque_aire',
    '$manitas_aire',
    '$Quinta_rueda',
    '$Placas_delantera_trasera'
)";
mysqli_query($conn, $sql);

// LLANTAS Y RINES

$insp_neumaticos_calibracion = isset($_POST['insp_neumaticos_calibracion']) ? $_POST['insp_neumaticos_calibracion'] : '';
$medida_rueda = isset($_POST['Medida_rueda']) ? $_POST['Medida_rueda'] : '';
$tipo_rin = isset($_POST['Tipo_rin']) ? $_POST['Tipo_rin'] : '';
$birlos_tuercas_tapones = isset($_POST['Birlos_tuercas_tapones']) ? $_POST['Birlos_tuercas_tapones'] : '';
$nivel_lubricante_baleros = isset($_POST['Nivel_lubricante_baleros']) ? $_POST['Nivel_lubricante_baleros'] : '';

$sql = "INSERT INTO llantas_rines (
    insp_neumaticos_calibracion,
    Medida_rueda,
    Tipo_rin,
    Birlos_tuercas_tapones,
    Nivel_lubricante_baleros
) VALUES (
    '$insp_neumaticos_calibracion',
    '$medida_rueda',
    '$tipo_rin',
    '$birlos_tuercas_tapones',
    '$nivel_lubricante_baleros'
)";
mysqli_query($conn, $sql);


//LUCES

$luces_interiores = isset($_POST['Luces_Interiores']) ? $_POST['Luces_Interiores'] : '';
$Luces_Exteriores_Alta_Baja = isset($_POST['luces_Exteriores_Alta_Baja']) ? $_POST['luces_Exteriores_Alta_Baja'] : '';
$luces_direccionals = isset($_POST['luces_direccionales']) ? $_POST['luces_direccionales'] : '';
$stop = isset($_POST['stop']) ? $_POST['stop'] : '';
$Torreta = isset($_POST['torreta']) ? $_POST['torreta'] : '';
$alarma_reversa = isset($_POST['alarma_reversa']) ? $_POST['alarma_reversa'] : '';
$faros_reverseros = isset($_POST['faros_reverseros']) ? $_POST['faros_reverseros'] : '';


$sql = "INSERT INTO luces (
    Luces_Interiores,
    Luces_Exteriores_Alta_Baja,
    luces_direccionals,
    stop,
    torreta,
    alarma_reversa,
    faros_reverseros
) VALUES (
    '$luces_interiores',
    '$Luces_Exteriores_Alta_Baja',
    '$luces_direccionals',
    '$stop',
    '$Torreta',
    '$alarma_reversa',
    '$faros_reverseros'
)";
mysqli_query($conn, $sql);
//VARIOS Y EQUIPO DE SEG


$Extintor = isset($_POST['extintor']) ? $_POST['extintor'] : '';
$Conos = isset($_POST['conos']) ? $_POST['conos'] : '';
$Botiquin_primeros_auxilios = isset($_POST['Botiquin_primeros_auxilios']) ? $_POST['Botiquin_primeros_auxilios'] : '';
$Kit_antiderrames = isset($_POST['Kit_antiderrames']) ? $_POST['Kit_antiderrames'] : '';
$Pala = isset($_POST['pala']) ? $_POST['pala'] : '';
$Carpeta_documentos = isset($_POST['carpeta_documentos']) ? $_POST['carpeta_documentos'] : '';

$sql = "INSERT INTO varios_equipo_seguridad (
    Extintor,
    Conos,
    Botiquin_primeros_auxilios,
    Kit_antiderrames,
    Pala,
    Carpeta_documentos
) VALUES (
    '$Extintor',
    '$Conos',
    '$Botiquin_primeros_auxilios',
    '$Kit_antiderrames',
    '$Pala',
    '$Carpeta_documentos'
)";
mysqli_query($conn, $sql);

// EQUIPO DE AMARRE
$Cadenas = isset($_POST['Cadenas']) ? $_POST['Cadenas'] : '';
$Bandas_2_4 = isset($_POST['Bandas_2_4']) ? $_POST['Bandas_2_4'] : '';
$Barra_ajuste = isset($_POST['Barra_ajuste']) ? $_POST['Barra_ajuste'] : '';
$Gatas = isset($_POST['Gatas']) ? $_POST['Gatas'] : '';



$sql = "INSERT INTO equipo_amarre (
    Cadenas,
    Bandas_2_4,
    Barra_ajuste,
    Gatas
) VALUES (
    '$Cadenas',
    '$Bandas_2_4',
    '$Barra_ajuste',
    '$Gatas'
)";
mysqli_query($conn, $sql);


//PORCENTAJE DE VIDA UTIL DE LLANTAS
$a1 = isset($_POST['a1']) ? $_POST['a1'] : '';
$a2 = isset($_POST['a2']) ? $_POST['a2'] : '';
$b1 = isset($_POST['b1']) ? $_POST['b1'] : '';
$b2 = isset($_POST['b2']) ? $_POST['b2'] : '';
$b3 = isset($_POST['b3']) ? $_POST['b3'] : '';
$b4 = isset($_POST['b4']) ? $_POST['b4'] : '';
$c1 = isset($_POST['c1']) ? $_POST['c1'] : '';
$c2 = isset($_POST['c2']) ? $_POST['c2'] : '';
$c3 = isset($_POST['c3']) ? $_POST['c3'] : '';
$c4 = isset($_POST['c4']) ? $_POST['c4'] : '';

if ($eje < 1 || $eje > 5) {
    die("Valor de eje inválido. Seleccione un eje entre 1 y 5.");
}

// Preparar la consulta SQL para insertar los datos
$stmt = $conn->prepare("INSERT INTO porcentaje_tractoint (eje, a1, a2, a3, a4, b1, b2, b3, b4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssssss", $eje, $a1, $a2, $a3, $a4, $b1, $b2, $b3, $b4);


//OBSERVACIONES


$observacion = isset($_POST['observaciones']) ? $_POST['observaciones'] : '';

$sql = "INSERT INTO observaciones (
observaciones
) VALUES (
    '$observacion'
)";
mysqli_query($conn, $sql);

//FIRMAS


        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            echo "Datos guardados correctamente.";
        } else {
            echo "Error al guardar los datos: " . $conn->error;
        }
    } else {
        echo "Por favor complete todos los campos obligatorios.";
    }

    // Cerrar la conexión
    $conn->close();
}
?>


