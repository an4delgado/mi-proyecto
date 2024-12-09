<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist Remolques</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d4e1f1;
            margin: 0;
            padding: 0;
            text-align: center; 
        }
        .header {
            text-align: center;
            padding: 20px;
        }
        .header h1 {
            font-size: 36px;
            margin: 0;
        }
        .header img {
            width: 20%;
            height: auto;
            margin-top: 10px;
        }
        .content {
            padding: 10px;
        }
        .content ul {
            list-style-type: none;
            padding: 0;
        }
        .content li {
            margin: 10px 0;
            font-size: 20px;
        }
        .content a {
            text-decoration: none;
            color: #000;
        }
        .content a:hover {
            color: #007BFF;
        }
        .content {
            text-align: center; /* Centra horizontalmente el contenido dentro */
            margin-bottom: 20px; /* Espacio entre bloques */
        }

        /* Centrar el selector de tipo de remolque */
        .selector-container {
            display: flex;         /* Activa el modelo flexbox */
            justify-content: center; /* Centra horizontalmente */
            align-items: center;    /* Centra verticalmente */
            margin-top: 10px;       /* Espacio superior */
        }

        #tiporemolque {
            display: block;   /* Bloque para que respete el margen */
            margin: 0 auto;  /* Centrar horizontalmente */
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>BIENVENIDO</h1>
        <h2>Checklist De Remolques</h2>
        <img src="ejemplo.png" alt="ejemplo Logo">
    </div>

    <div class="content">
        <ul>
            <li><a href="tractoint.php">Tractocamion</a></li>
        </ul>
    </div>

    <div class="content">
        <ul>
            <li><a href="checkmontacarga.php">Checklist de Montacarga</a></li>
        </ul>
    </div>

    <!-- Aquí está el nuevo contenedor para el selector de remolques -->
    <div class="selector-container">
    <select id="tiporemolque" onchange="redirigirPorRemolque()">
        <option value="">TIPO DE REMOLQUES</option>
        <option value="PLATAFORMA_EJES">PLA</option>
        <option value="CAMA_BAJA">CB</option>
        <option value="PLA_EX_3">PLA EX 3</option>
        <option value="PLA_EX_4">PLA EX 4</option>
        <option value="LB_3">LB 3</option>
        <option value="Lb_4">LB 4</option>
        <option value="CS">CS</option>
        <option value="PORT_CONT">PORT CONT</option>
    </select>
</div>

<script>
    function redirigirPorRemolque() {
        // Obtén el valor seleccionado
        const tiporemolque = document.getElementById("tiporemolque").value;

        // Redirige solo si hay un valor seleccionado
        if (tiporemolque) {
            // Crea la URL basada en el valor
            const url = `http://localhost/proyecto/${tiporemolque}.php`;
            window.location.href = url;
        }
    }
</script>

</body>
</html>

