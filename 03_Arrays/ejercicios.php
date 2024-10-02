<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <!--    RECORDATORIO!!! EL VIERNES VEMOS CÓMO ORDENAR TABLAS -->

    <!--    EJERCICIO 1

            Desarrollo web en entorno servidor => Alejandra
            Desarrollo web en entorno cliente => José Miguel
            Diseño de interfaces web => José Miguel
            Despliegue de aplicaciones => Jaime
            Empresa e iniciativa emprendedora => Andrea
            Inglés => Virginia

            MOSTRARLO TODO EN UNA TABLA
    -->

    <?php
    $instituto = [
    "Desarrollo web en entorno servidor" => "Alejandra",
    "Desarrollo web en entorno cliente" => "José Miguel",
    "Diseño de interfaces web" => "José Miguel",
    "Despliegue de aplicaciones" => "Jaime",
    "Empresa e iniciativa emprendedora" => "Andrea",
    "Inglés" => "Virginia",
    ];
    ?>

    <table>
        <caption>Instituto</caption>
        <thead>
            <tr>
                <th>Asignatura</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($instituto as $asignatura => $profesor) {
                echo "<tr>";
                echo "<td>$asignatura</td>";
                echo "<td>$profesor</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    echo "<br>"
    ?>

    <!--    EJERCICIO 2

            Francisco => 3
            Daniel => 5
            Aurora => 10
            Luis => 7
            Sanuel => 9

            MOSTRAR EN UNA TABLA CON 3 COLUMNAS
            - COLUMNA 1: ALUMNO
            - COLUMNA 2: NOTA
            - COLUMNA 3: SI NOTA < 5, SUSPENSO, ELSE, APROBADO
    -->

    <?php
    $notas = [
    "Francisco" => "3",
    "Daniel" => "5",
    "Aurora" => "10",
    "Luis" => "7",
    "Samuel" => "9",
    ];
    ?>

<table>
        <caption>Instituto</caption>
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Nota</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($notas as $alumno => $nota) {
                echo "<tr>";
                echo "<td>$alumno</td>";
                echo "<td>$nota</td>";
                    if($nota < 5) echo '<td class="suspenso">Suspenso</td>';
                    else {
                    if ($nota == 5) echo '<td class="suficiente">Suficiente</td>';
                    if ($nota == 6) echo '<td class="aprobado">Bien</td>';
                    if ($nota > 6 && $nota < 9) echo '<td class="aprobado">Notable</td>';
                    if ($nota > 8) echo '<td class="aprobado">Sobresaliente</td>';
                    }
                }
                echo "</tr>";
            ?>
        </tbody>
    </table>
</body>
</html>