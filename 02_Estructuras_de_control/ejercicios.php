<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <!--
        EJERCICIO 1: MOSTRAR LA FECHA ACTUAL CON EL SIGUIENTE FORMATO:
            Viernes 27 de Septiembre de 2024
        UTILIZAR LAS ESTRUCTURAS DE CONTROL NECESARIAS
    -->
    
    <?php
    $dia_num = date("j");
    $anio = date("Y");

    $dia = date("l");
    $dia_espanol = null;

    $dia_espanol = match($dia) {
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miércoles",
        "Thrusday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sábado",
        "Sunday" => "Domingo",
    };

    $mes = date("F");
    $mes_espanol = null;

    $mes_espanol = match($mes) {
        "January" => "Enero",
        "February" => "Febrero",
        "March" => "Marzo",
        "April" => "Abril",
        "May" => "Mayo",
        "June" => "Junio",
        "July" => "Julio",
        "August" => "Agosto",
        "September" => "Septiembre",
        "October" => "Octubre",
        "November" => "Noviembre",
        "December" => "Diciembre",
    };

    echo "<h3>$dia_espanol $dia_num de $mes_espanol de $anio</h3>";
    ?>

    <!--
        EJERCICIO 2: MOSTRAR EN UNA LISTA LOS NÚMEROS MÚLTIPLOS DE 3 USANDO
        WHILE E IF

        EJERICICIO 3: CALCULAR LA SUMA DE LOS NÚMEROS PARES ENTRE 1 Y 20

        EJERCICIO 4: CALCULAR EL FACTORIAL DE 6 CON WHILE

        HACER EN EL ARCHIVO EJERCICIOS.PHP
    -->

</body>
</html>