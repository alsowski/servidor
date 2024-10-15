<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="post">
    <label for="numa">Número A</label>
    <input type="number" name="numa">
    <br><br>
    <label for="numb">Número B</label>
    <input type="number" name="numb">
    <br><br>
    <label for="numc">Número C</label>
    <input type="number" name="numc">
    <br><br>
    <input type="submit" value="Calcular">
    <br><br><hr>
    </form>

    <!--EJERCICIO 2: Realiza un formulario que reciba 3 números: a, b y c. Se mostrarán en una lista los múltiplos de c que se encuentren entre a y b.

    Por ejemplo, si a = 3, b = 10, c = 2

    Los múltiplos de 2 entre 3 y 10 son: 4, 6, 8 y 10-->

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $numa = $_POST["numa"];
            $numb = $_POST["numb"];
            $numc = $_POST["numc"];

        $multiplos = $numc;
        $nums = $numb-$numa;
        $resultado = "";

        for($i = 0; $i <= $nums; $i++){
            if($multiplos >= $numa && $multiplos <= $numb){
                $resultado = $resultado.$multiplos.", ";
                $multiplos+=$numc;
            } else{
                $multiplos+=$multiplos;
            }
        }

        echo "<h1>Los múltiplos de $numc entre $numa y $numb son: $resultado</h1>";

        }
    ?>

</body>
</html>