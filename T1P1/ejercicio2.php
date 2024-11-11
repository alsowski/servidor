<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <?php
        // 2
        $array = [];
        $arrayuni1 = [];
        $arrayuni2 = [] ;

        for($i = 0; $i < 5; $i++) {
            $arrayuni1[$i] = rand(1,10);
        }

        for($i = 0; $i < 5; $i++) {
            $arrayuni2[$i] = rand(10,100);
        }

        array_push($array, $arrayuni1);
        array_push($array, $arrayuni2);

        // 2.1
    ?>
        <p>
            <?php
                for($i = 0; $i < count($arrayuni1); $i++) {
                    echo "$arrayuni1[$i], ";
                }
            ?>
        </p>
        <p>
            <?php
                for($i = 0; $i < count($arrayuni2); $i++) {
                    echo "$arrayuni2[$i], ";
                }
            ?>
        </p>
    <?php
        // 2.2
        $media1 = 0;
        $media2 = 0;
        for($i = 0; $i < count($arrayuni1); $i++) {
            if ($i < 1){
                $mayor1 = $arrayuni1[$i];
            }
            if ($arrayuni1[$i]>$mayor1){
                $mayor1 = $arrayuni1[$i];
            }
            if ($i < 1){
                $menor1 = $arrayuni1[$i];
            }
            if ($arrayuni1[$i]<$menor1){
                $menor1 = $arrayuni1[$i];
            }
            $media1 = $media1 + $arrayuni1[$i];
            if ($i == 4) {
                $media1 = $media1 / 5;
            }
        }

        echo "<ul>";
        echo "<li>El mayor es: $mayor1</li>";
        echo "<li>El menor es: $menor1</li>";
        echo "<li>La media es: $media1</li>";
        echo "</ul>";

        for($i = 0; $i < count($arrayuni2); $i++) {
            if ($i < 1){
                $mayor2 = $arrayuni2[$i];
            }
            if ($arrayuni2[$i]>$mayor2){
                $mayor2 = $arrayuni2[$i];
            }
            if ($i < 1){
                $menor2 = $arrayuni2[$i];
            }
            if ($arrayuni2[$i]<$menor2){
                $menor2 = $arrayuni2[$i];
            }
            $media2 = $media2 + $arrayuni2[$i];
            if ($i == 4) {
                $media2 = $media2 / 5;
            }
        }

        echo "<ul>";
        echo "<li>El mayor es: $mayor2</li>";
        echo "<li>El menor es: $menor2</li>";
        echo "<li>La media es: $media2</li>";
        echo "</ul>";
    ?>

</body>
</html>