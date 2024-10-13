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
    
    <h2><i>EJERCICIO 1</i></h2>
    <p>Mostrar la fecha actual con el formato</p>

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
    -->

    <h2><i>EJERCICIO 2</i></h2>
    <p>Mostrar lista de los múltiplos de 3</p>

    <ul>
    <?php
        $i = 1;
        while($i <= 100):
            if($i % 3 == 0):
                echo "<li>$i</li>";
            endif;
            $i++;
        endwhile;
    ?>
    </ul>

    <!--
        EJERICICIO 3: CALCULAR LA SUMA DE LOS NÚMEROS PARES ENTRE 1 Y 20
    -->

    <h2><i>EJERCICIO 3</h2></i>
    <p>Calcular la suma de los números pares entre 1 y 20</p>

    <?php
        $i = 1;
        $suma = 0;
        while($i<=20) {
            if($i %2 == 0) {
                $suma += $i;    # $suma = $suma + $i
            }
            $i++;
        }
        echo "<p>SOLUCIÓN: La suma es $suma</p>"
    ?>

    <!--
        EJERCICIO 4: CALCULAR EL FACTORIAL DE 6 CON WHILE
    -->

    <h2><i>EJERCICIO 4</h2></i>
    <p>Calcular el factorial de 6 con while</p>

    <?php
    //  3! = 1x2x3 = 6
    //  4! = 1x2x3x4 = 24
    
    $factorial = 3;
    $resultado = 1;
    $i = 1;
    while($i <= $factorial) {
        $resultado *= $i;   # $resultado = $resultado * $i
        $i++;
    }
        echo "<p>SOLUCIÓN: El factorial es $resultado</p>"
    ?>

    <!--
        EJERCICIO 5: MUESTRA POR PANTALLA LOS 50 PRIMEROS NÚMEROS PRIMOS
    
     * 4 % 2 = 0    4 NO ES PRIMO
     * 4 % 3 = 1
     * 
     * 5 % 2 = 1    5 SI ES PRIMO
     * 5 % 3 = 2
     * 5 % 4 = 1
     * 
     * BUCLE DE 2 A N-1
     * 
     * $n = 7
     * DESDE 2 HASTA $n-1
     *      COMPROBAR SI $n TIENE DIVISORES QUE DEN DE RESTO 0
     *          SI EXISTE ENTONCES DEVOLVER FALSO
     *          ELSE DEVOLVER TRUE
     * FIN

        BUCLE DESDE 2 HASTA EL INFINITO Y MÁS ALLÁ
        -->

    <h2><i>EJERCICIO 5</h2></i>
    <p>Muestra por pantalla los 50 primeros números primos</p>

    <ol>
    <?php
    $cont = 0;
    $primo = true;
    for($num = 2; $cont < 50; $num++){
        for($i = 2; $i < $num; $i++){
            if($num % $i == 0){break;}
        }
        if ($i == $num) {
            echo "<li>$num<br></li>";
            $cont++;
        }
    }
    ?>
    </ol>

</body>
</html>