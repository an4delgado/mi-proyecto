<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTA CONT</title>
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
        .checklist-table{
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .observaciones{
        padding: 10px;
        text-align: center; /* Centra el contenido horizontalmente */
        vertical-align: middle;
     }
 
    </style>
</head>
<body>
<form action="guardar_checklist1.php" method="POST"> 

<div class="container">
    <!-- Título -->
    <div class="title">PORTA CONT </div>


    <table class="info-table">
        <tr>
            <th>Unidad</th>
            <td><input type="text" name="Unidad" required></td>
            <th>Fecha</th>
            <td><input type="date" name= "fecha"  required></td>
        </tr>
        <tr>
            <th>Placas</th>
            <td><input text="date" name="placas"required></td>
        </tr>
    </table>


    <table class="checklist-table">
    <th colspan="5" style="text-align: center;">INSPECCION DE REMOLQUE</th>
    
        <tr>
            <th colspan="2" class="section-title">DESCRIPCION </th>
            <th class="section-title">BUENO</th>
            <th class="section-title">MALO</th>
            <th class="section-title">N/A</th>
        </tr>
        <tr>
            <td colspan="2">Frenos</td>
            <td class="checkbox-cell"><input type="radio" name="frenos" id="frenos" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="frenos" id="frenos" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="frenos" id="frenos" value="NA"></td>
        </tr>
        <tr>
            <td colspan="2">Suspencion</td>
            <td class="checkbox-cell"><input type="radio" name="Suspencion" id="Suspencion" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Suspencion" id="Suspencion" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Suspencion" id="Suspencion" value="NA"></td>
        </tr>
        <tr>
        <td colspan="2">Neumaticos</td>
            <td class="checkbox-cell"><input type="radio" name="neumaticos" id="neumaticos" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="neumaticos" id="neumaticos" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="neumaticos" id="neumaticos" value="NA"></td>
        </tr>
        <tr>
        <td colspan="2">Luces intermitentes</td>
            <td class="checkbox-cell"><input type="radio" name="luces_intermitentes" id="luces_intermitentes" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_intermitentes" id="luces_intermitentes" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_intermitentes" id="luces_intermitentes" value="NA"></td>
 
        <tr>
        <td colspan="2">Luces traseras</td>
            <td class="checkbox-cell"><input type="radio" name="luces_traseras" id="luces_traseras" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_traseras" id="luces_traseras" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_traseras" id="luces_traseras" value="NA"></td>
        </tr>
        <tr>
        <td colspan="2">Luces de freno</td>
            <td class="checkbox-cell"><input type="radio" name="luces_freno" id="luces_freno" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_freno" id="luces_freno" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_freno" id="luces_freno" value="NA"></td>
        <tr>
        <td colspan="2">Luces laterales</td>
            <td class="checkbox-cell"><input type="radio" name="luces_laterales" id="luces_laterales" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_laterales" id="luces_laterales" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="luces_laterales" id="luces_laterales" value="NA"></td>
        <tr>
        <tr>
        <td colspan="2">Conector de aire</td>
            <td class="checkbox-cell"><input type="radio" name="conector_aire" id="conector_aire" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="conector_aire" id="conector_aire" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="conector_aire" id="conector_aire" value="NA"></td>
        <tr>
        <td colspan="2">Cinta reflejante</td>
            <td class="checkbox-cell"><input type="radio" name="cinta_reflejante" id="cinta_reflejante" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="cinta_reflejante" id="cinta_reflejante" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="cinta_reflejante" id="cinta_reflejante" value="NA"></td>
        <tr>
        <td colspan="2">Presion de neumaticos </td>
            <td class="checkbox-cell"><input type="radio" name="presion_neumaticos" id="presion_neumaticos" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="presion_neumaticos" id="presion_neumaticos" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="presion_neumaticos" id="presion_neumaticos" value="NA"></td>
        <tr>
        <td colspan="2">Medida de rueda</td>
            <td class="checkbox-cell"><input type="radio" name="medida_rueda" id="medida_rueda" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="medida_rueda" id="medida_rueda" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="medida_rueda" id="medida_rueda" value="NA"></td>
        <tr>
        <td colspan="2">Medida y tipo de rin  </td>
            <td class="checkbox-cell"><input type="radio" name="medida_tipo_rin" id="medida_tipo_rin" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="medida_tipo_rin" id="medida_tipo_rin" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="medida_tipo_rin" id="medida_tipo_rin" value="NA"></td>
        <tr>
        <td colspan="2">Birlos y tuercas</td>
            <td class="checkbox-cell"><input type="radio" name="birlos_tuercas" id="birlos_tuercas" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="birlos_tuercas" id="birlos_tuercas" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="birlos_tuercas" id="birlos_tuercas" value="NA"></td>
        <tr>
        <td colspan="2">Nivel y tipo de lubricante de baleros</td>
            <td class="checkbox-cell"><input type="radio" name="nivel_lubricante_baleros" id="nivel_lubricante_baleros" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="nivel_lubricante_baleros" id="nivel_lubricante_baleros" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="nivel_lubricante_baleros" id="nivel_lubricante_baleros" value="NA"></td>
        
        <tr>
            <td colspan="2">Piso</td>
            <td class="checkbox-cell"><input type="radio" name="Piso" id="Piso" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Piso" id="Piso" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Piso" id="Piso" value="NA"></td>
        </tr>
        <tr>
            <td colspan="2">Balatas/Frenos/Matracas</td>
            <td class="checkbox-cell"><input type="radio" name="Balatas_Frenos_Matracas" id="Balatas_Frenos_Matracas" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Balatas_Frenos_Matracas" id="Balatas_Frenos_Matracas" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Balatas_Frenos_Matracas" id="Balatas_Frenos_Matracas" value="NA"></td>
        </tr>
        <tr>
        <td colspan="2">Rotachamber/Tortuga</td>
            <td class="checkbox-cell"><input type="radio" name="Rotachamber_Tortuga" id="Rotachamber_Tortuga" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="Rotachamber_Tortuga" id="Rotachamber_Tortuga" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="Rotachamber_Tortuga" id="Rotachamber_Tortuga" value="NA"></td>
        </tr>
        <tr>
        <td colspan="2">Baleros/Maza/Tambores</td>
            <td class="checkbox-cell"><input type="radio" name="baleros_maza_tambores" id="baleros_maza_tambores" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="baleros_maza_tambores" id="baleros_maza_tambores" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="baleros_maza_tambores" id="baleros_maza_tambores" value="NA"></td>
 
        <tr>
        <td colspan="2">Chasis</td>
            <td class="checkbox-cell"><input type="radio" name="chasis" id="chasis" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="chasis" id="chasis" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="chasis" id="chasis" value="NA"></td>
        </tr>
        <tr>
        <td colspan="2">Engrasado</td>
            <td class="checkbox-cell"><input type="radio" name="engrasado" id="engrasado" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="engrasado" id="engrasado" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="engrasaod" id="engrasado" value="NA"></td>
        <tr>
        <td colspan="2">Bolsas de aire</td>
            <td class="checkbox-cell"><input type="radio" name="bolsas_aire" id="bolsas_aire" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="bolsas_aire" id="bolsas_aire" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="bolsas_aire" id="bolsas_aire" value="NA"></td>
        <tr>
        <tr>
        <td colspan="2">Fugas de aire</td>
            <td class="checkbox-cell"><input type="radio" name="fugas_aire" id="fugas_aire" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="fugas_aire" id="fugas_aire" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="fugas_aire" id="fugas_aire" value="NA"></td>
        <tr>
        <td colspan="2">Perno rey</td>
            <td class="checkbox-cell"><input type="radio" name="perno_rey" id="perno_rey" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="perno_rey" id="perno_rey" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="perno_rey" id="perno_rey" value="NA"></td>
        <tr>
        <td colspan="2">Quinta rueda </td>
            <td class="checkbox-cell"><input type="radio" name="quinta_rueda" id="quinta_rueda" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="quinta_rueda" id="quinta_rueda" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="quinta_rueda" id="quinta_rueda" value="NA"></td>
        <tr>
        <td colspan="2">Patines</td>
            <td class="checkbox-cell"><input type="radio" name="patines" id="patines" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="patines" id="patines" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="patines" id="patines" value="NA"></td>
        <tr>
        <td colspan="2">Placa de identificacion (NIV)  </td>
            <td class="checkbox-cell"><input type="radio" name="placa_identificacion" id="placa_identificacion" value="Bueno"></td>
            <td class="checkbox-cell"><input type="radio" name="placa_identificacion" id="placa_identificacion" value="Malo"></td>
            <td class="checkbox-cell"><input type="radio" name="placa_identificacion" id="placa_identificacion" value="NA"></td>
        <tr>
       
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
            <label for="a3">A3:</label>
            <input type="range" id="a3" name="a3" min="0" max="100" value="50" oninput="updateValue('a3Value', this.value)">
            <span class="value" id="a3Value">50%</span>
        </div>

        <div class="slider-container">
            <label for="a4">A4:</label>
            <input type="range" id="a4" name="a4" min="0" max="100" value="50" oninput="updateValue('a4Value', this.value)">
            <span class="value" id="a4Value">50%</span>
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
    

    </form>

    <script>
        // Función para actualizar el valor mostrado al mover el deslizador
        function updateValue(spanId, value) {
            document.getElementById(spanId).textContent = value + '%';
        }
    </script>

        <table class="observaciones">
        <tr>
        <table class="checklist-table">
        <tr>
            <th colspan="2" class="section-title">OBSERVACIONES</th>
        </tr>
        <td style="padding: 8px;">
                <textarea id="observaciones" name="observaciones" rows="5" cols="50" style="width: 100%; resize: none;"></textarea>
            </td>
    </tr>

    </table>

    <table class="checklist-table">
        <tr>
            <th colspan="2" class="section-title"> FIRMAS</th>
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

</script>
    <div class="submit-button-container">
        <button class="submit-button" type="submit">Enviar</button>
    </div>