<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <?php
    $numero = "2";
    
    if($numero == 2) {
        echo "EXITO";
    } else {
        echo "NO EXITO";
    }

    /*
        "2" == 2    "2" es igual a 2
        "2" !== 2   "2" no es idéntico a 2
        2 === 2     2 sí es idéntico a 2
        2 !== 2.0   2 no es idéntico a 2.0
    */

    $hora = (int)date("G");
    //var_dump($hora);

    /*
        SI $hora ENTRE 6 Y 11, es MAÑANA
        SI $hora ENTRE 12 Y 14, es MEDIODÍA
        SI $hora ENTRE 15 Y 20, es TARDE
        SI $hora ENTRE 20 Y 24, es NOCHE
        SI $hora ENTRE 1 Y 5, es MADRUGADA
    */

    $hora_exacta = date("H:i:s");

    echo "<h1>$hora_exacta</h1>";

    $dia = date("l");
    echo "<h2>Hoy es $dia</h2>";

    /*
        TENEMOS CLASE LUNES, MIERCOLES Y VIERNES
        NO TENEMOS CLASE EL RESTO

        HACER SWITCH QUE DIGA SI HOY TENEMOS CLASE
    */

    switch($dia) {
        case "Monday":
        case "Wednesday":
        case "Friday":
            echo "<p>Hoy tenemos clase</p>";
            break;
        default:
            echo "<p>Hoy no tenemos clase</p>";
    }
    ?>
</body>
</html>