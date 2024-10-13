<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="post">
    <label for="base">Base</label>
    <input type="number" name="base">
    <br><br>
    <label for="expo">Exponente</label>
    <input type="number" name="expo">
    <br><br>
    <input type="submit" value="Enviar">
    <br><br><hr>
    </form>

    <?php
    /**
     * CREAR UN FORMULARIO QUE RECIBA DOS PARÁMETROS: BASE Y EXPONENTE
     * 
     * CUANDO SE ENVIÉ EL FORMULARIO, SE CALCULARÁ EL RESULTADO DE ELEVAR
     * LA BASE AL EXPONENTE
     * 
     * EJEMPLOS:
     * 
     * 2 ELEVADO A 3 = 8 => 2x2x2 = 8
     * 3 ELEVADO A 2 = 9 => 3x3 = 9
     * 2 ELEVADO A 1 = 2
     * 3 ELEVADO A 0 = 1
     */

     if($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST["base"];
        $expo = $_POST["expo"];
        $resultado = 1;

        //$potencia = $base**$expo;
        //$potencia = pow($base, $expo);
        //echo "<h2>$base elevado a $expo es $potencia</h2>";
    
        for($i = 0; $i < $expo; $i++){
            $resultado = $resultado * $base;
            /**
             * 2 elevado a 3
             * 
             * resultado = 1x2 = 2
             * resultado = 2x2 = 4
             * resultado = 4x4 = 8
             */
        }
        echo "<h1>El resultado de $base elevado a $expo es $resultado</h1>";
    }
    ?>
</body>
</html>