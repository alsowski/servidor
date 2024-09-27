<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
</head>
<body>
    <?php
    $numero = 0;

    // Forma 1
    if ($numero > 0){
        echo "<p>1 El número $numero es mayor que cero</p>";
    } elseif ($numero == 0) {
        echo "<p>1 El número $numero es cero</p>";
    } else {
        echo "<p>1 El número $numero es menor que cero</p>";
    }

    // Forma 2
    if($numero > 0) echo "<p>2 El número $numero es mayor que cero</p>";
    elseif ($numero == 0) echo "<p>2 El número $numero es cero</p>";
    else echo "<p>2 El número $numero es menor que cero</p>";
    
    // Forma 3
    if ($numero > 0):
        echo "<p>3 El número $numero es mayor que cero</p>";
    elseif ($numero == 0):
        echo "<p>3 El número $numero es cero</p>";
    else:
        echo "<p>3 El número $numero es menor que cero</p>";
    endif;
    ?>

    <?php
    #   Rangos [-10,0), [0,10],(10,20]

    $num = -7;

    #   and o && para la conjunción

    // Forma 1
    if($num >=-10 and $num < 0){
        echo "<p>1 El número $num está en el rango [-10,0)";
    } elseif ($num >= 0 && $num <= 10) {
        echo "<p>1 El número $num está en el rango [0,10]";
    } elseif ($num > 10 and $num <= 20) {
        echo "<p>1 El número $num está en el rango (10,20]";
    } else {
        echo "<p>1 El número $num está fuera del rango";
    }

    // Forma 2
    if($num >=-10 and $num < 0) echo "<p>2 El número $num está en el rango [-10,0)";
    elseif ($num >= 0 && $num <= 10) echo "<p>2 El número $num está en el rango [0,10]";
    elseif ($num > 10 and $num <= 20) echo "<p>2 El número $num está en el rango (10,20]";
    else echo "<p>2 El número $num está fuera del rango";
    
    // Forma 3
    if ($num >=-10 and $num < 0):
        echo "<p>3 El número $num está en el rango [-10,0)";
    elseif ($num >= 0 && $num <= 10):
        echo "<p>3 El número $num está en el rango [0,10]";
    elseif ($num > 10 and $num <= 20):
        echo "<p>3 El número $num está en el rango (10,20]";
    else:
        echo "<p>3 El número $num está fuera del rango";
    endif;

    /*
        COMPROBAR DE TRES FORMAS DIFERENTES, 
        CON LA ESTRUCTURA IF, SI EL NÚMERO ALEATORIO
        TIENE 1, 2, Ó 3 DÍGITOS
    */

    //Forma 1
    $numero_aleatorio = rand(1,999);
    $digitos = null;

    if ($numero_aleatorio >= 1 and $numero_aleatorio < 10) {
        $digitos = 1;
    } elseif ($numero_aleatorio >= 10 and $numero_aleatorio < 100) {
        $digitos = 2;
    } elseif ($numero_aleatorio >= 100 and $numero_aleatorio < 1000) {
        $digitos = 3;
    } else {
        $digitos = "ERROR";
    }
    $digitos_texto = "dígitos";
    if ($digitos == 1) $digitos_texto = "dígito";

    echo "<p>1 El número $numero_aleatorio tiene $digitos $digitos_texto</p>";

    //Forma 2
    if($numero_aleatorio >= 1 and $numero_aleatorio < 10) $digitos = 1;
    elseif ($numero_aleatorio >= 10 and $numero_aleatorio < 100) $digitos = 2;
    else $digitos = 3;
    echo "<p>1 El número tiene $digitos dígitos</p>";

    //Forma 3
    if ($numero_aleatorio >= 1 and $numero_aleatorio < 10):
        $digitos = 1;
    elseif ($numero_aleatorio >= 10 and $numero_aleatorio < 100):
        $digitos = 2;
    else:
        $digitos = 3;
    endif;
    echo "<p>1 El número tiene $digitos dígitos</p>";

    //  VERSION CON MATCH
    $digitos = match(true) {
        $numero_aleatorio >= 1 && $numero_aleatorio <= 9 => 1,
        $numero_aleatorio >= 10 && $numero_aleatorio <= 99 => 2,
        $numero_aleatorio >= 100 && $numero_aleatorio <= 999 => 3,
        default => "ERROR"
    };

    echo "<p>El número tiene $digitos dígitos</p>";

    //$numero_aleatorio_decimales = rand(10,100)/10;

    $n = rand(1,3);

    switch($n) {
        case 1:
            echo "El número es 1";
            break;
        case 2:
            echo "El número es 2";
            break;
        default:
            echo "El número es 3";
    }

    $resultado = match($n) {
        1 => "El número es 1",
        2 => "El número es 2",
        3 => "El número es 3"
    };
    echo "<h3>$resultado</h3>";
    ?>
</body>
</html>