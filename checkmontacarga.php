<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Verificación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 20px;
            background-color: #d0ebe4;/* fondo */
        }
        .container {
            display: flex; /* Flexbox para colocar las tablas una al lado de la otra */
            gap: 20px; /* Espaciado entre las tablas */
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #d0ebe4;/* fondo */

        }
        .header {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-section {
            margin-top: 10px;
        }
        .instructions {
            font-size: 12px;
            margin-top: 20px;
        }
        .slider-container {
            margin-bottom: 10;
            justify-content: left;
             display: flex;
        }
        label {
            display: block;
            margin-bottom: 1px;
            font-weight: bold;
        }
        .value {
            font-size: 11px;
            font-weight: flex;
            color: #333;
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
    </style>
</head>
<body>
    <form action="guardar_checklist1.php" method="post">
        <div class="header">
            LISTA DE VERIFICACIÓN PARA LA INSPECCIÓN DE SEGURIDAD ANTES DEL TURNO
        </div>
        <div class="container">
            <!-- Primera tabla -->
            <table>
                <thead>
                    <tr>
                        <th>INSPECCIÓN VISUAL</th>
                        <th>SAT</th>
                        <th>INS</th>
                        <th>N/A</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. Daño evidente o piezas sueltas</td>
                        <td><input type="radio" name="danoevidente" value="SAT"></td>
                        <td><input type="radio" name="danoevidente" value="INS"></td>
                        <td><input type="radio" name="danoevidente" value="NA"></td>
                    </tr>
                    <tr>
                        <td>2. Protección superior</td>
                        <td><input type="radio" name="proteccion_superior" value="SAT"></td>
                        <td><input type="radio" name="proteccion_superior" value="INS"></td>
                        <td><input type="radio" name="proteccion_superior" value="NA"></td>
                    </tr>
                    <tr>
                        <td>3. Horquillas y pasadores de seguridad</td>
                        <td><input type="radio" name="horquillas_pasadores_seguridad" value="SAT"></td>
                        <td><input type="radio" name="horquillas_pasadores_seguridad" value="INS"></td>
                        <td><input type="radio" name="horquillas_pasadores_seguridad" value="NA"></td>
                    </tr>
                    <tr>
                        <td>4. Cadenas</td>
                        <td><input type="radio" name="cadenas" value="SAT"></td>
                        <td><input type="radio" name="cadenas" value="INS"></td>
                        <td><input type="radio" name="cadenas" value="NA"></td>
                    </tr>
                    <tr>
                        <td>5. Llantas</td>
                        <td><input type="radio" name="llantas" value="SAT"></td>
                        <td><input type="radio" name="llantas" value="INS"></td>
                        <td><input type="radio" name="llantas" value="NA"></td>
                    </tr>
                    <tr>
                        <td>6. Combustible (Gas LP o Diesel)</td>
                        <td><input type="radio" name="combustible" value="SAT"></td>
                        <td><input type="radio" name="combustible" value="INS"></td>
                        <td><input type="radio" name="combustible" value="NA"></td>
                    </tr>
                    <tr>
                        <td>7. Mangueras, cables y correas</td>
                        <td><input type="radio" name="mangueras_cables" value="SAT"></td>
                        <td><input type="radio" name="mangueras_cables" value="INS"></td>
                        <td><input type="radio" name="mangueras_cables" value="NA"></td>
                    </tr>
                    <tr>
                        <td>8. Extintor de incendios</td>
                        <td><input type="radio" name="extintor_incendios" value="SAT"></td>
                        <td><input type="radio" name="extintor_incendios" value="INS"></td>
                        <td><input type="radio" name="extintor_incendios" value="NA"></td>
                    </tr>
                    <tr>
                        <td>9. Espejos</td>
                        <td><input type="radio" name="espejos" value="SAT"></td>
                        <td><input type="radio" name="espejos" value="INS"></td>
                        <td><input type="radio" name="espejos" value="NA"></td>
                    </tr>
                    <tr>
                        <td>10. Placa de datos y limitaciones de carga</td>
                        <td><input type="radio" name="placa_datos" value="SAT"></td>
                        <td><input type="radio" name="placa_datos" value="INS"></td>
                        <td><input type="radio" name="placa_datos" value="NA"></td>
                    </tr>
                    <tr>
                        <td>11. Rótulos o advertencias</td>
                        <td><input type="radio" name="rotulos" value="SAT"></td>
                        <td><input type="radio" name="rotulos" value="INS"></td>
                        <td><input type="radio" name="rotulos" value="NA"></td>
                    </tr>
                    <tr>
                        <td>12. Niveles (agua, aceite)</td>
                        <td><input type="radio" name="niveles" value="SAT"></td>
                        <td><input type="radio" name="niveles" value="INS"></td>
                        <td><input type="radio" name="niveles" value="NA"></td>
                    </tr>
                    <tr>
                        <td>13. Agarraderas y escalones</td>
                        <td><input type="radio" name="agarraderas" value="SAT"></td>
                        <td><input type="radio" name="agarraderas" value="INS"></td>
                        <td><input type="radio" name="agarraderas" value="NA"></td>
                    </tr>
                </tbody>
            </table>

            <!-- Segunda tabla -->
            <table>
                <thead>
                    <tr>
                        <th>INSPECCIÓN FUNCIONAL</th>
                        <th>SAT</th>
                        <th>INS</th>
                        <th>N/A</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>14. Cinturón de seguridad</td>
                        <td><input type="radio" name="cinturon" value="SAT"></td>
                        <td><input type="radio" name="cinturon" value="INS"></td>
                        <td><input type="radio" name="cinturon" value="NA"></td>
                    </tr>
                    <tr>
                        <td>15. Dirección hidráulica</td>
                        <td><input type="radio" name="direccion_hidraulico" value="SAT"></td>
                        <td><input type="radio" name="direccion_hidraulico" value="INS"></td>
                        <td><input type="radio" name="direccion_hidraulico" value="NA"></td>
                    </tr>
                    <tr>
                        <td>16. Estado de la torreta</td>
                       <td><input type="radio" name="estado_torreta" value="SAT"></td>
                       <td><input type="radio" name="estado_torreta" value="INS"></td>
                       <td><input type="radio" name="estado_torreta" value="NA"></td>
                    <tr>
                        <td>17.Manual de operacion </td>
                        <td><input type="radio" name="manual_operacion" value="SAT"></td>
                        <td><input type="radio" name="manual_operacion" value="INS"></td>
                        <td><input type="radio" name="manual_operacion" value="NA"></td>
                    </tr>
<tr>
                        <td>18. Controles (pedales y palancas)</td>
                        <td><input type="radio" name="controles" value="SAT"></td>
                        <td><input type="radio" name="controles" value="INS"></td>
                        <td><input type="radio" name="controles" value="NA"></td>
                    </tr>
<tr>
                        <td>19. Bateria con carga. Cadenas</td>
                        <td><input type="radio" name="bateria_carga" value="SAT"></td>
                        <td><input type="radio" name="bateria_carga" value="INS"></td>
                        <td><input type="radio" name="bateria_carga" value="NA"></td>
                    </tr>

<tr>
                        <td>20.Subir y bajar horquillas</td>
                        <td><input type="radio" name="subir_bajar_horquillas" value="SAT"></td>
                        <td><input type="radio" name="subir_bajar_horquillas" value="INS"></td>
                        <td><input type="radio" name="subir_bajar_horquillas" value="NA"></td>
                    </tr>

<tr>
                        <td>21. Frenos</td>
                        <td><input type="radio" name="frenos" value="SAT"></td>
                        <td><input type="radio" name="frenos" value="INS"></td>
                        <td><input type="radio" name="frenos" value="NA"></td>
                    </tr>
<tr>
                        <td>22. Claxon</td>
                        <td><input type="radio" name="claxon" value="SAT"></td>
                        <td><input type="radio" name="claxon" value="INS"></td>
                        <td><input type="radio" name="claxon" value="NA"></td>
                    </tr>
<tr>
                        <td>23.Luces </td>
                        <td><input type="radio" name="luces" value="SAT"></td>
                        <td><input type="radio" name="luces" value="INS"></td>
                        <td><input type="radio" name="luces" value="NA"></td>
                    </tr>
<tr>
                        <td>24. Alarma de reversa</td>
                        <td><input type="radio" name="alarmareversa" value="SAT"></td>
                        <td><input type="radio" name="alarmareversa" value="INS"></td>
                        <td><input type="radio" name="alarmareversa" value="NA"></td>
                    </tr>

<tr>
                        <td>25. Presencia de fluidos debajo del vehiculo</td>
                        <td><input type="radio" name="presenciafluidos" value="SAT"></td>
                        <td><input type="radio" name="presenciafluidos" value="INS"></td>
                        <td><input type="radio" name="presenciafluidos" value="NA"></td>
                    </tr>
                    <tr>
                        <td>26. Ruidos inusuales</td>
                        <td><input type="radio" name="ruidos_inusuales" value="SAT"></td>
                        <td><input type="radio" name="ruidos_inusuales" value="INS"></td>
                        <td><input type="radio" name="ruidos_inusuales" value="NA"></td>
                    </tr>

 
        </table>

                </tbody>
            </table>
        </div>

        <table>
            <tr>
                <td>Marca:</td>
                <td><input type="text" name="marca"></td>
                <td>Capacidad:</td>
                <td><input type="text" name="capacidad"></td>
                <td>Identificación:</td>
                <td><input type="text" name="identificacion"></td>
            </tr>
            <tr>
                <td>Horómetro:</td>
                <td><input type="text" name="horometro"></td>
                <td>Fecha:</td>
                <td><input type="date" name="fecha"></td>
                <td>Hora:</td>
                <td><input type="time" name="hora"></td>
            </tr>
            
        </table>
        
    </form>
    <table class="checklist-table">
            <tr>
                <th colspan="2" class="section-title">COMENTARIOS</th>
            </tr>
            <tr>
                <td style="padding: 8px;">
                    <textarea id="comentarios" name="comentarios" rows="5" cols="50" style="width: 100%; resize: none;"></textarea>
                </td>
            </tr>
        </table>
    <!-- Botón de Enviar -->
    <div class="submit-button-container">
        <button class="submit-button" type="submit">Enviar</button>
    </div>
</body>
</html>
