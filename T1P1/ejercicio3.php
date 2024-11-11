<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num">
        <br><br>
        <select name="opcion">
            <option value="sumatorio">Sumatorio</option>
            <option value="factorial">Factorial</option>
        </select>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["num"];
            $opcion = $_POST["opcion"];
            
            echo "<ul>";
            switch ($opcion) {
                case "sumatorio":
                    $sumatorio = 0;
                    for ($i = 1; $i < $num+1; $i++) {
                        $suma = $i;
                        $sumatorio += $suma;
                    }
                    echo "<li>El sumatorio es $sumatorio</li>";
                    break;
                case "factorial":
                    $factorial = 0;
                    $factorial = $num * ($num - 1);
                    echo "<li>El factorial es $factorial</li>";
                    break;
            }
            echo "<ul>";
        }
    ?>
</body>
</html>