<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="post">
    <label for="num1">Número 1</label>
    <input type="number" name="num1">
    <br><br>
    <label for="num2">Número 2</label>
    <input type="number" name="num2">
    <br><br>
    <label for="num3">Número 3</label>
    <input type="number" name="num3">
    <br><br>
    <input type="submit" value="Enviar">
    <br><br><hr>
    </form>

    <!--EJERCICIO 1: Realiza un formulario que reciba 3 números y devuelva el mayor de ellos.-->

    
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];

            if ($num1>$num2 && $num1>$num3){
                echo "<h2>El número 1 ($num1) es el mayor</h2>";
            } elseif ($num2>$num1 && $num2>$num3){
                echo "<h2>El número 2 ($num2) es el mayor</h2>";
            } elseif ($num3>$num1 && $num3>$num2){
                echo "<h2>El número 3 ($num3) es el mayor</h2>";
            } elseif ($num1==$num2 || $num2==$num3 || $num3==$num1){
                echo "<h2>Los números que son iguales</h2>";
            }
        }
    ?>

</body>
</html>