<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
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
    <input type="submit" value="Enviar">
    <br><br><hr>
    </form>

    <!--EJERCICIO 3: Realiza un formulario que reciba dos números y devuelva todos los números primos dentro de ese rango (incluidos los extremos).-->

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

        $res = "";

        for($i = $num1; $i <= $num2; $i++){
            for($j=2; $j<=$i; $j++){
                if($i % $j == 0){break;}
            }
            if($i==$j){
                $res.=$i.",";
            }
        }

        echo "<h1>Los números primos entre $num1 y $num2 son: $res</h1>";

        }
    ?>

</body>
</html>