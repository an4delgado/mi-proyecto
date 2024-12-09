<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist de Vehículos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d0ebe4;/* fondo */
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 900px;
            background-color: #91d2e656; /fondo del checklist/
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            background-color: #7ea9bd; /recuadro de chekclist/
            padding: 10px;
            margin-bottom: 20px;
        }
        .info-table, .checklist-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .info-table th, .info-table td, .checklist-table th, .checklist-table td {
            border: 1px solid #ffffff; /lineas de los recuadros/
            padding: 8px;
        }
        .info-table th, .checklist-table th {
            background-color: #5d7b8d73; /recuadro de los titulos/
            text-align: left;
            font-weight: bold;
            font-size: 14px;
        }

        .section-title {
            background-color: #c0c0c0;
            font-weight: bold;
            text-align: center;
        }
        .checkbox-cell {
            text-align: center;
        }
        .footer-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .footer-table th, .footer-table td {
            border: 1px solid #ffffff; /lineas de observaciones/
            padding: 8px;
            vertical-align: top;
        }
        .footer-table th {
            background-color: #5d7b8d73;/cuadro de observacion/
            font-weight: bold;
            width: 20%;
        }
        .footer-table td {
            width: 80%;
        }
        .observaciones {
            height: 60px;
        }

        /* Estilos para el botón */
        .submit-button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .submit-button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #7ea9bd;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-button:hover {
            background-color: #5d7b8d;
        }
        .firmas {
            padding: 10px;
            text-align: center; /* Centra el contenido horizontalmente */
            vertical-align: middle; /* Centra el contenido verticalmente */
        }
        .firmas {
            width: 100%; /* Ajusta el ancho del desplegable */
            padding: 5px;
            border-radius: 5px;
        }
     .observaciones{
        padding: 10px;
            text-align: center; /* Centra el contenido horizontalmente */
            vertical-align: middle;
     }
         .boton-container {
            display: flex; /* Flexbox para alinear horizontalmente */
            justify-content: center; /* Centra horizontalmente los botones */
            gap: 10px; /* Espaciado entre botones */
            margin-top: 20px; /* Margen superior opcional */
        } 
        .camera-icon {
            font-size: 50px;
            cursor: pointer;
            color: #007BFF;
        }
        .camera-icon:hover {
            color: #0056b3;
        }
        #video, #canvas {
            display: none;
            margin: 20px auto;
            border: 2px solid #000;
        }
        #capture-button {
            display: none;
            margin: 10px auto;
        }
        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <form action="guardar_checklist1.php" method="POST"> 

<div class="container">
    <!-- Título -->
    <div class="title">CHECKLIST Y ENTREGA DE VEHICULOS </div>


    <table class="info-table">
        <tr>
            <th>Unidad</th>
            <td><input type="text" name="Unidad_placas" required></td>
            <th>Lectura Km / Odometro</th>
            <td><input type="text" name="lectura_odometro" required></td>
            <th>Placas</th>
            <td><input type="text" name="placas"required></td>
        </tr>
        <tr>
            <th>Fecha de último servicio:</th>
            <td><input type="date" name= "fecha_de_ultimo_servicio"  required></td>
            <th>Fecha:</th>
            <td><input type="date" name="fecha"required></td>
        </tr>
    </table>

    <table class="checklist-table">
    <th colspan="5" style="text-align: center;">INSPECCION DE UNIDAD</th>
    
        <tr>
            <th colspan="2" class="section-title"> 1.1 CONDICIONES DEL MOTOR</th>
            <th class="section-title">BUENO</th>
            <th class="section-title">MALO</th>
            <th class="section-title">N/A</th>
        </tr>
        <tr>
            <td colspan="2">Nivel de aceite de motor</td>
            <td class="checkbox-cell"><input type="radio" name="nivelAceiteMotor" id="nivelAceiteMotor" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="nivelAceiteMotor" id="nivelAceiteMotor" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="nivelAceiteMotor" id="nivelAceiteMotor" value="NA"></td>
        </tr>
        <tr>
            <td colspan="2">Nivel de aceite Hidraulico</td>
            <td class="checkbox-cell"><input type="radio" name="nivelaceiteHidraulico" id="nivelaceiteHidraulico" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="nivelaceiteHidraulico" id="nivelaceiteHidraulico" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="nivelaceiteHidraulico" id="nivelaceiteHidraulico" value="NA"></td>
        </tr>
        <tr>
        <td colspan="2">Nivel de refrigerante</td>
            <td class="checkbox-cell"><input type="radio" name="Nivel_refrigerante" id="Nivel_refrigerante" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Nivel_refrigerante" id="Nivel_refrigerante" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Nivel_refrigerante" id="Nivel_refrigerante" value="NA"></td>
        </tr>
        <tr>
        <td colspan="2">Diferencial Inter</td>
            <td class="checkbox-cell"><input type="radio" name="diferencialInter" id="diferencialInter" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="diferencialInter" id="diferencialInter" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="diferencialInter" id="diferencialInter" value="NA"></td>
 
        <tr>
        <td colspan="2">Diferencial Motriz</td>
            <td class="checkbox-cell"><input type="radio" name="diferencialmotriz" id="diferencialmotriz" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="diferencialmotriz" id="diferencialmotriz" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="diferencialmotriz" id="diferencialmotriz" value="NA"></td>
        </tr>
        <tr>
        <td colspan="2">Filtro de aceite</td>
            <td class="checkbox-cell"><input type="radio" name="filtroAceite" id="filtroAceite" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="filtroAceite" id="filtroAceite" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="filtroAceite" id="filtroAceite" value="NA"></td>
        <tr>
        <td colspan="2">filtro de aire</td>
            <td class="checkbox-cell"><input type="radio" name="filtro_de_aire" id="filtro_de_aire" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="filtro_de_aire" id="filtro_de_aire" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="filtro_de_aire" id="filtro_de_aire" value="NA"></td>
        <tr>
        <tr>
        <td colspan="2">filtro de combustible</td>
            <td class="checkbox-cell"><input type="radio" name="filtroCombustible" id="filtroCombustible" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="filtroCombustible" id="filtroCombustible" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="filtroCombustible" id="filtroCombustible" value="NA"></td>
        <tr>
        <td colspan="2">filtro de refrigerante</td>
            <td class="checkbox-cell"><input type="radio" name="filtroRefrigerante" id="filtroRefrigerante" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="filtroRefrigerante" id="filtroRefrigerante" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="filtroRefrigerante" id="filtroRefrigerante" value="NA"></td>
        <tr>
        <td colspan="2">sopleteado de filtro de aire </td>
            <td class="checkbox-cell"><input type="radio" name="sopleteadoFiltro" id="sopleteadoFiltro" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="sopleteadoFiltro" id="sopleteadoFiltro" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="sopleteadoFiltro" id="sopleteadoFiltro" value="NA"></td>
        <tr>
        <td colspan="2">revision de fugas general</td>
            <td class="checkbox-cell"><input type="radio" name="revisionFugas" id="revisionFugas" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="revisionFugas" id="revisionFugas" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="revisionFugas" id="revisionFugas" value="NA"></td>
        <tr>
        <td colspan="2">revision de bandas y poleas </td>
            <td class="checkbox-cell"><input type="radio" name="revisonBandasPoleas" id="revisonBandasPoleas" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="revisonBandasPoleas" id="revisonBandasPoleas" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="revisonBandasPoleas" id="revisonBandasPoleas" value="NA"></td>
        <tr>
        <td colspan="2">engrasado general</td>
            <td class="checkbox-cell"><input type="radio" name="engrasadoGeneral" id="engrasadoGeneral" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="engrasadoGeneral" id="engrasadoGeneral" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="engrasadoGeneral" id="engrasadoGeneral" value="NA"></td>
        <tr>
        <td colspan="2">cofre</td>
            <td class="checkbox-cell"><input type="radio" name="cofre" id="cofre" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="cofre" id="cofre" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="cofre" id="cofre" value="NA"></td>
        
        <tr>
        <td colspan="2">Bandas de motor</td>
            <td class="checkbox-cell"><input type="radio" name="BandasMotor" id="BandasMotor" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="BandasMotor" id="BandasMotor" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="BandasMotor" id="BandasMotor" value="NA"></td>
        <tr>
        <td colspan="2">Tapon de radiador</td>
            <td class="checkbox-cell"><input type="radio" name="tapon_radiador" id="tapon_radiador" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="tapon_radiador" id="tapon_radiador" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="tapon_radiador" id="tapon_radiador" value="NA"></td>
        <tr>
        <td colspan="2">Tapon de deposito de aceite</td>
            <td class="checkbox-cell"><input type="radio" name="taponDepositoAceite" id="taponDepositoAceite" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="taponDepositoAceite" id="taponDepositoAceite" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="taponDepositoAceite" id="taponDepositoAceite" value="NA"></td>
        <tr>
    </table>

    </table>
    <table class="checklist-table">
        <tr>
            <th colspan="2" class="section-title"> 1.2 INTERIOR DE CABINA</th>
            <th class="section-title">BUENO</th>
            <th class="section-title">MALO</th>
            <th class="section-title">N/A</th>
        </tr>
        <td colspan="2">Condicion de asientos y cinturon</td>
            <td class="checkbox-cell"><input type="radio" name="Condicion_asientos_cinturon" id="Condicion_asientos_cinturon" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Condicion_asientos_cinturon" id="Condicion_asientos_cinturon" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Condicion_asientos_cinturon" id="Condicion_asientos_cinturon" value="NA"></td>
        <tr>
        <td colspan="2">Manometros: Oil, Temp,Volts, Aire</td>
            <td class="checkbox-cell"><input type="radio" name="manometros_oil_temp_volts_aire" id="manometros_oil_temp_volts_aire" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="manometros_oil_temp_volts_aire" id="manometros_oil_temp_volts_aire" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="manometros_oil_temp_volts_aire" id="manometros_oil_temp_volts_aire" value="NA"></td>
        <tr>
        <td colspan="2">Interior de cabina/ Limpieza</td>
            <td class="checkbox-cell"><input type="radio" name="limpieza_interior_cabina" id="limpieza_interior_cabina" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="limpieza_interior_cabina" id="limpieza_interior_cabina" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="limpieza_interior_cabina" id="limpieza_interior_cabina" value="NA"></td>
        <tr>
        <td colspan="2">Tablero de velocidad</td>
            <td class="checkbox-cell"><input type="radio" name="Tablero_velocidad" id="Tablero_velocidad" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Tablero_velocidad" id="Tablero_velocidad" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Tablero_velocidad" id="Tablero_velocidad" value="NA"></td>
        <tr>
        <td colspan="2">Aire acondicionado</td>
            <td class="checkbox-cell"><input type="radio" name="Aire_acondicionado" id="Aire_acondicionado" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Aire_acondicionado" id="Aire_acondicionado" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Aire_acondicionado" id="Aire_acondicionado" value="NA"></td>
        <tr>
        <td colspan="2">Estereo</td>
            <td class="checkbox-cell"><input type="radio" name="Estereo" id="Estereo" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Estereo" id="Estereo" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Estereo" id="Estereo" value="NA"></td>
        <tr>
        <td colspan="2">Manija y seguro izquierdo</td>
            <td class="checkbox-cell"><input type="radio" name="Manija_seguro_izquierda" id="Manija_seguro_izquierda" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Manija_seguro_izquierda" id="Manija_seguro_izquierda" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Manija_seguro_izquierda" id="Manija_seguro_izquierda" value="NA"></td>
        <tr>
        <td colspan="2">Manija y seguro derecho</td>
            <td class="checkbox-cell"><input type="radio" name="Manija_seguro_derecha" id="Manija_seguro_derecha" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Manija_seguro_derecha" id="Manija_seguro_derecha" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Manija_seguro_derecha" id="Manija_seguro_derecha" value="NA"></td>
        <tr>
        <td colspan="2">Corneta/Claxon</td>
            <td class="checkbox-cell"><input type="radio" name="Corneta_Claxon" id="Corneta_Claxon" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Corneta_Claxon" id="Corneta_Claxon" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Corneta_Claxon" id="Corneta_Claxon" value="NA"></td>
        <tr>

        </table>
    <table class="checklist-table">
        <tr>
            <th colspan="2" class="section-title"> 1.3 Sistema de frenos</th>
            <th class="section-title">BUENO</th>
            <th class="section-title">MALO</th>
            <th class="section-title">N/A</th>
        </tr>
        <td colspan="2">Fugas de aire</td>
            <td class="checkbox-cell"><input type="radio" name="Fugas_de_aire" id="Fugas_de_aire" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Fugas_de_aire" id="Fugas_de_aire" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Fugas_de_aire" id="Fugas_de_aire" value="NA"></td>
        <tr>
        <td colspan="2">Condicion de balatas</td>
            <td class="checkbox-cell"><input type="radio" name="Condicion_de_balatas" id="Condicion_de_balatas" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Condicion_de_balatas" id="Condicion_de_balatas" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Condicion_de_balatas" id="Condicion_de_balatas" value="NA"></td>
        <tr>
        <td colspan="2">Rotachambers</td>
            <td class="checkbox-cell"><input type="radio" name="Rotachambers" id="Rotachambers" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Rotachambers" id="Rotachambers" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Rotachambers" id="Rotachambers" value="NA"></td>
        <tr>
        <td colspan="2">Gavilanes y bujes</td>
            <td class="checkbox-cell"><input type="radio" name="Gavilanes_y_bujes" id="Gavilanes_y_bujes" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Gavilanes_y_bujes" id="Gavilanes_y_bujes" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Gavilanes_y_bujes" id="Gavilanes_y_bujes" value="NA"></td>
        <tr>
        <td colspan="2">Tambores</td>
            <td class="checkbox-cell"><input type="radio" name="Tambores" id="Tambores" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Tambores" id="Tambores" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Tambores" id="Tambores" value="NA"></td>
        <tr>
        </table>
       
        </table>
    <table class="checklist-table">
        <tr>
            <th colspan="2" class="section-title"> 1.4 Exterior de VEHICULOS</th>
            <th class="section-title">BUENO</th>
            <th class="section-title">MALO</th>
            <th class="section-title">N/A</th>
        </tr>
        <td colspan="2">Espejo lateral y concavo derecho</td>
            <td class="checkbox-cell"><input type="radio" name="espejo_lateral_derecho" id="espejo_lateral_derecho" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="espejo_lateral_derecho" id="espejo_lateral_derecho" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="espejo_lateral_derecho" id="espejo_lateral_derecho" value="NA"></td>
        <tr>
        <td colspan="2">Espejo lateral y concavo izquierdo</td>
            <td class="checkbox-cell"><input type="radio" name="espejo_lateral_izquierdo" id="espejo_lateral_izquierdo" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="espejo_lateral_izquierdo" id="espejo_lateral_izquierdo" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="espejo_lateral_izquierdo" id="espejo_lateraL_izquierdo" value="NA"></td>
        <tr>
        <td colspan="2">Limpiadores/Plumillas</td>
            <td class="checkbox-cell"><input type="radio" name="Limpiadores_Plumillas" id="Limpiadores_Plumillas" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Limpiadores_Plumillas" id="Limpiadores_Plumillas" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Limpiadores_Plumillas" id="Limpiadores_Plumillas" value="NA"></td>
        <tr>
        <td colspan="2">Parabrisas o cristal frontal</td>
            <td class="checkbox-cell"><input type="radio" name="Parabrisas_cristal_frontal" id="Parabrisas_cristal_frontal" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Parabrisas_cristal_frontal" id="Parabrisas_cristal_frontal" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Parabrisas_cristal_frontal" id="Parabrisas_cristal_frontal" value="NA"></td>
        <tr>
        <td colspan="2">Matachispas</td>
            <td class="checkbox-cell"><input type="radio" name="Matachispas" id="Matachispas" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Matachispas" id="Matachispas" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Matachispas" id="Matachispas" value="NA"></td>
        <tr>
        <td colspan="2">Escape</td>
            <td class="checkbox-cell"><input type="radio" name="Escape" id="Escape" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Escape" id="Escape" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Escape" id="Escape" value="NA"></td>
        <tr>
        <td colspan="2">Defensa</td>
            <td class="checkbox-cell"><input type="radio" name="Defensa" id="Defensa" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Defensa" id="Defensa" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Defensa" id="Defensa" value="NA"></td>
        <tr>
        <td colspan="2">Tanque de diesel 1</td>
            <td class="checkbox-cell"><input type="radio" name="Tanque_diesel_1" id="Tanque_diesel_1" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Tanque_diesel_1" id="Tanque_diesel_1" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Tanque_diesel_1" id="Tanque_diesel_1" value="NA"></td>
        <tr>
        <td colspan="2">Tanque de diesel 2</td>
            <td class="checkbox-cell"><input type="radio" name="Tanque_diesel_2" id="Tanque_diesel_2" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Tanque_diesel_2" id="Tanque_diesel_2" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Tanque_diesel_2" id="Tanque_diesel_2" value="NA"></td>
        <tr>
        <td colspan="2">Tapon de combustible</td>
            <td class="checkbox-cell"><input type="radio" name="Tapon_combustible" id="Tapon_combustible" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Tapon_combustible" id="Tapon_combustible" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Tapon_combustible" id="Tapon_combustible" value="NA"></td>
        <tr>
        <td colspan="2">Manguera de aire</td>
            <td class="checkbox-cell"><input type="radio" name="Manguera_aire" id="Manguera_aire" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Manguera_aire" id="Manguera_aire" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Manguera_aire" id="Manguera_aire" value="NA"></td>
        <tr>
        <td colspan="2">Portaloderas derecho</td>
            <td class="checkbox-cell"><input type="radio" name="Portaloderas_derecho" id="Portaloderas_derecho" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Portaloderas_derecho" id="Portaloderas_derecho" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Portaloderas_derecho" id="Portaloderas_derecho" value="NA"></td>
        <tr>
        <td colspan="2">Lodera derecho</td>
            <td class="checkbox-cell"><input type="radio" name="Lodera_derecha" id="Lodera_derecha" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Lodera_derecha" id="Lodera_derecha" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Lodera_derecha" id="Lodera_derecha" value="NA"></td>
        <tr>
        <td colspan="2">Portaloderas izquierda</td>
            <td class="checkbox-cell"><input type="radio" name="Portaloderas_izquierda" id="Portaloderas_izquierda" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Portaloderas_izquierda" id="Portaloderas_izquierda" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Portaloderas_izquierda" id="Portaloderas_izquierda" value="NA"></td>
        <tr>
        <td colspan="2">Lodera izquierda</td>
            <td class="checkbox-cell"><input type="radio" name="Lodera_izquierda" id="Lodera_izquierda" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Lodera_izquierda" id="Lodera_izquierda" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Lodera_izquierda" id="Lodera_izquierda" value="NA"></td>
        <tr>
        <td colspan="2">Estribos</td>
            <td class="checkbox-cell"><input type="radio" name="Estribos" id="Estribos" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Estribos" id="Estribos" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Estribos" id="Estribos" value="NA"></td>
        <tr>
        <td colspan="2">Tapa de baterias</td>
            <td class="checkbox-cell"><input type="radio" name="Tapa_baterias" id="Tapa_baterias" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Tapa_baterias" id="Tapa_baterias" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Tapa_baterias" id="Tapa_baterias" value="NA"></td>
        <tr>
        <td colspan="2">Condicion de baterias</td>
            <td class="checkbox-cell"><input type="radio" name="Condicion_baterias" id="Condicion_baterias" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Condicion_baterias" id="Condicion_baterias" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Condicion_baterias" id="Condicion_baterias" value="NA"></td>
        <tr>
        <td colspan="2">Purgadores de tanque de aire</td>
            <td class="checkbox-cell"><input type="radio" name="Purgadores_tanque_aire" id="Purgadores_tanque_aire" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Purgadores_tanque_aire" id="Purgadores_tanque_aire" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Purgadores_tanque_aire" id="Purgadores_tanque_aire" value="NA"></td>
        <tr>
        <td colspan="2">Manijas de aire</td>
            <td class="checkbox-cell"><input type="radio" name="Manitas_aire" id="Manitas_aire" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Manitas_aire" id="Manitas_aire" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Manitas_aire" id="Manitas_aire" value="NA"></td>
        <tr>
        <td colspan="2">Quinta rueda</td>
            <td class="checkbox-cell"><input type="radio" name="Quinta_rueda" id="Quinta_rueda" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Quinta_rueda" id="Quinta_rueda" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Quinta_rueda" id="Quinta_rueda" value="NA"></td>
        <tr>
        <td colspan="2">Placa delantera/ Trasera</td>
            <td class="checkbox-cell"><input type="radio" name="Placa_delantera_Trasera" id= "Placa_delantera_Trasera" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Placa_delantera_Trasera" id="Placa_delantera_Trasera" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Placa_delantera_Trasera" id="Placa_delantera_Trasera" value="NA"></td>
        <tr>
        </table>

        </table>
    <table class="checklist-table">
        <tr>
            <th colspan="2" class="section-title"> 1.5 Llantas y rines</th>
            <th class="section-title">BUENO</th>
            <th class="section-title">MALO</th>
            <th class="section-title">N/A</th>
        </tr>
        <td colspan="2">Inps de neumaticos (Calibracion)</td>
            <td class="checkbox-cell"><input type="radio" name="insp_neumaticos_calibracion" id="insp_neumaticos_calibracion" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="insp_neumaticos_calibracion" id="insp_neumaticos_calibracion" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="insp_neumaticos_calibracion" id="insp_neumaticos_calibracion" value="NA"></td>
        <tr>
        <td colspan="2">Medida de rueda</td>
            <td class="checkbox-cell"><input type="radio" name="Medida_rueda" id="Medida_rueda" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Medida_de_rueda" id="Medida_de_rueda" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Medida_de_rueda" id="Medida_de_rueda" value="NA"></td>
        <tr>
        <td colspan="2">Tipo de rin</td>
            <td class="checkbox-cell"><input type="radio" name="Tipo_rin" id="Tipo_rin" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Tipo_rin" id="Tipo_rin" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Tipo_rin" id="Tipo_rin" value="NA"></td>
        <tr>
        <td colspan="2">Birlos, tuercas, tapones</td>
            <td class="checkbox-cell"><input type="radio" name="Birlos_tuercas_tapones" id="Birlos_tuercas_tapones" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Birlos_tuercas_tapones" id="Birlos_tuercas_tapones" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Birlos_tuercas_tapones" id="Birlos_tuercas_tapones" value="NA"></td>
        <tr>
        <td colspan="2">Nivel del lubricante baleros</td>
            <td class="checkbox-cell"><input type="radio" name="Nivel_lubricante_baleros" id="Nivel_lubricante_baleros" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Nivel_lubricante_baleros" id="Nivel_lubricante_baleros" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Nivel_lubricante_baleros" id="Nivel_lubricante_baleros" value="NA"></td>
        <tr>
        </table>

        
        </table>
    <table class="checklist-table">
        <tr>
            <th colspan="2" class="section-title"> 1.6 Luces</th>
            <th class="section-title">BUENO</th>
            <th class="section-title">MALO</th>
            <th class="section-title">N/A</th>
        </tr>
        <td colspan="2">Luces Interiores</td>
            <td class="checkbox-cell"><input type="radio" name="Luces_Interiores" id="Luces_Interiores" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Luces_Interiores" id="Luces_Interiores" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Luces_Interiores" id="Luces_Interiores" value="NA"></td>
        <tr>
        <td colspan="2">Luces Exteriores ALTA / BAJA </td>
            <td class="checkbox-cell"><input type="radio" name="luces_Exteriores_Alta_Baja" id="luces_Exteriores_Alta_Baja" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_Exteriores_Alta_Baja" id="luces_Exteriores_Alta_Baja" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_Exteriores_Alta_Baja" id="luces_Exteriores_Alta_Baja" value="NA"></td>
        <tr>
        <td colspan="2"> Luces direccionales</td>
            <td class="checkbox-cell"><input type="radio" name="luces_direccionales" id="luces_direccionales" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_direccionales" id="luces_direccionales" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_direccionales" id="luces_direccionales" value="NA"></td>
        <tr>
        <td colspan="2">STOP </td>
            <td class="checkbox-cell"><input type="radio" name="stop" id="stop" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="stop" id="stop" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="stop" id="stop" value="NA"></td>
        <tr>
        <td colspan="2"> Torreta</td>
            <td class="checkbox-cell"><input type="radio" name="torreta" id="torreta" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="torreta" id="torreta" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="torreta" id="torreta" value="NA"></td>
        <tr>
        <td colspan="2"> Alarma de rervesa</td>
            <td class="checkbox-cell"><input type="radio" name="alarma_reversa" id="alarma_reversa" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="alarma_reversa" id="alarma_reversa" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="alarma_reversa" id="alarma_reversa" value="NA"></td>
        <tr>
        <td colspan="2">Faros Reverseros </td>
            <td class="checkbox-cell"><input type="radio" name="faros_reverseros" id="faros_reverseros" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="faros_reverseros" id="faros_reverseros" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="faros_reverseros" id="faros_reverseros" value="NA"></td>
        <tr>
        </table>   
            

            
        </table>
    <table class="checklist-table">
        <tr>
            <th colspan="2" class="section-title"> 1.7 Varios y equipos de seg</th>
            <th class="section-title">BUENO</th>
            <th class="section-title">MALO</th>
            <th class="section-title">N/A</th>
        </tr>
        <td colspan="2">Extintor </td>
            <td class="checkbox-cell"><input type="radio" name="extintor" id="extintor" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="extintor" id="extintor" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="extintor" id="extintor" value="NA"></td>
        <tr>
        <td colspan="2"> Conos</td>
            <td class="checkbox-cell"><input type="radio" name="conos"id="conos" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="conos" id="conos" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="conos" id="conos" value="NA"></td>
        <tr>
        <td colspan="2"> Botiquin de primeros auxilios</td>
            <td class="checkbox-cell"><input type="radio" name="Botiquin_primeros_auxilios" id="Botiquin_primeros_auxilios" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Botiquin_primeros_auxilios" id="Botiquin_primeros_auxilios" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Botiquin_primeros_auxilios" id="Botiquin_primeros_auxilios" value="NA"></td>
        <tr>
        <td colspan="2">Kit antiderrames </td>
            <td class="checkbox-cell"><input type="radio" name="Kit_antiderrames" id="Kit_antiderrames" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Kit_antiderrames" id="Kit_antiderrames" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Kit_antiderrames" id="Kit_antiderrames" value="NA"></td>
        <tr>
        <td colspan="2"> Pala</td>
            <td class="checkbox-cell"><input type="radio" name="pala" id="pala" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="pala" id="pala" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="pala" id="pala" value="NA"></td>
        <tr>
        <td colspan="2">Carpeta de documentos </td>
            <td class="checkbox-cell"><input type="radio" name="carpeta_documentos" id="carpeta_documentos" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="carpeta_documentos" id="carpeta_documentos" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="carpeta_documentos" id="carpeta_documentos" value="NA"></td>
        <tr>
        </table>    
            
         
        </table>
    <table class="checklist-table">
        <tr>
            <th colspan="2" class="section-title"> 1.8 Equipo de amarre</th>
            <th class="section-title">BUENO</th>
            <th class="section-title">MALO</th>
            <th class="section-title">N/A</th>
        </tr>
        <td colspan="2">Cadenas </td>
            <td class="checkbox-cell"><input type="radio" name="Cadenas "id="Cadenas" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Cadenas" id="Cadenas" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Cadenas" id="Cadenas" value="NA"></td>
        <tr>
        <td colspan="2">Bandas de 2" y 4" </td>
            <td class="checkbox-cell"><input type="radio" name="Bandas_2_4"  id="Bandas_2_4" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Bandas_2_4" id="Bandas_2_4" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Bandas_2_4" id="Bandas_2_4" value="NA"></td>
        <tr>
        <td colspan="2">Barras de ajustes </td>
            <td class="checkbox-cell"><input type="radio" name="Barra_ajuste"id="Barra_ajuste" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Barra_ajuste" id="Barra_ajuste" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Barra_ajuste" id="Barra_ajuste" value="NA"></td>
        <tr>
        <td colspan="2"> Gatas</td>
            <td class="checkbox-cell"><input type="radio" name="Gatas"  id="Gatas" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Gatas" id="Gatas" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Gatas" id="Gatas" value="NA"></td>
        <tr>
        </table>
        </table>

    <table class="checklist-table">
        <tr>
            <th colspan="2" class="section-title"> PORCENTAJE DE VIDA UTIL DE LLANTAS</th>
        </tr>
<table class="tablas">
<td>
    <select id="ejes" name="ejes" required>
    <option value="">EJES</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
 </td>

<div class="slider-container">
            <label for="a1">A1:</label>
            <input type="range" id="a1" name="a1" min="0" max="100" value="50" oninput="updateValue('a1Value', this.value)">
            <span class="value" id="a1Value">50%</span>
        </div>

        <div class="slider-container">
            <label for="a2">A2:</label>
            <input type="range" id="a2" name="a2" min="0" max="100" value="50" oninput="updateValue('a2Value', this.value)">
            <span class="value" id="a2Value">50%</span>
        </div>

        <div class="slider-container">
            <label for="b1">B1:</label>
            <input type="range" id="b1" name="b1" min="0" max="100" value="50" oninput="updateValue('b1Value', this.value)">
            <span class="value" id="b1Value">50%</span>
        </div>

        <div class="slider-container">
            <label for="b2">B2:</label>
            <input type="range" id="b2" name="b2" min="0" max="100" value="50" oninput="updateValue('b2Value', this.value)">
            <span class="value" id="b2Value">50%</span>
        </div>

        <div class="slider-container">
            <label for="b2">B3:</label>
            <input type="range" id="b3" name="b3" min="0" max="100" value="50" oninput="updateValue('b3Value', this.value)">
            <span class="value" id="b3Value">50%</span>
        </div>
        <div class="slider-container">
            <label for="b4">B4:</label>
            <input type="range" id="b4" name="b4" min="0" max="100" value="50" oninput="updateValue('b4Value', this.value)">
            <span class="value" id="b4Value">50%</span>
        </div>
        <div class="slider-container">
            <label for="c1">C1:</label>
            <input type="range" id="c1" name="c1" min="0" max="100" value="50" oninput="updateValue('c1Value', this.value)">
            <span class="value" id="c1Value">50%</span>
        </div>
        <div class="slider-container">
            <label for="c2">C2:</label>
            <input type="range" id="c2" name="c2" min="0" max="100" value="50" oninput="updateValue('c2Value', this.value)">
            <span class="value" id="c2Value">50%</span>
        </div>
        <div class="slider-container">
            <label for="c3">C3:</label>
            <input type="range" id="c3" name="c3" min="0" max="100" value="50" oninput="updateValue('c3Value', this.value)">
            <span class="value" id="c3Value">50%</span>
        </div>
        <div class="slider-container">
            <label for="c4">C4:</label>
            <input type="range" id="c4" name="c4" min="0" max="100" value="50" oninput="updateValue('c4Value', this.value)">
            <span class="value" id="c4Value">50%</span>
        </div>

    </form>

    <script>
        // Función para actualizar el valor mostrado al mover el deslizador
        function updateValue(spanId, value) {
            document.getElementById(spanId).textContent = value + '%';
        }
    </script>

    <table class="checklist-table">
    <tr>
            <th colspan="2" class="section-title">OBSERVACIONES</th>
        </tr>
        <td style="padding: 8px;">
                <textarea id="observaciones" name="observaciones" rows="5" cols="50" style="width: 100%; resize: none;"></textarea>
            </td>
    </tr>

    <table class="checklist-table">
    <tr>
            <th colspan="2" class="section-title">FIRMAS</th>
        </tr>
        <table>
            
        <td>
                        <select id="encargado1" name="encargado1" required>
                            <option value="">MANTENIMIENTO</option>
                            <option value="Juan Pérez">Juan Pérez</option>
                            <option value="Ana López">Ana López</option>
                            <option value="Carlos Gómez">Carlos Gómez</option>
                            <option value="María Rodríguez">María Rodríguez</option>
                        </select>
                    </td>
                
                    <td>
                        <select id="encargado2" name="encargado2" required>
                            <option value="">OPERADOR</option>
                            <option value="Juan Pérez">Juan Pérez</option>
                            <option value="Ana López">Ana López</option>
                            <option value="Carlos Gómez">Carlos Gómez</option>
                            <option value="María Rodríguez">María Rodríguez</option>
                        </select>
                    </td>
                    <select id="encargado3" name="encargado3" required>
                            <option value="">VIGILANCIA</option>
                            <option value="Juan Pérez">Juan Pérez</option>
                            <option value="Ana López">Ana López</option>
                            <option value="Carlos Gómez">Carlos Gómez</option>
                            <option value="María Rodríguez">María Rodríguez</option>
                        </select>

    </table>


    <!-- Botón de Enviar -->
    <div class="submit-button-container">
        <button class="submit-button" type="submit">Enviar</button>
    </div>

</form>

</body>
</html>