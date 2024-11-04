<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <?php
    $peliculas = [
        ["Kárate a muerte en Torremolinos", "Acción", 1975],
        ["Sharknado 1-5", "Acción", 2015],
        ["Princesa por sorpresa 2", "Comedia", 1975],
        ["Temblores 4", "Terror", 2018],
        ["Cariño, he encogido a los niños", "Aventuras", 2001],
        ["Stuart Little", "Infatil", 2000]
    ];

    /**
     * 1.   AÑADIR CON UN RAND, LA DURACIÓN DE CADA PELÍCULA COMO UNA NUEVA COLUMNA.
     *      LA DURACIÓN SERÁ UN NÚMERO ALEATORIO ENTRE 30 Y 240
     * 
     * 2.   AÑADIR COMO UNA NUEVA COLUMNA, EL TIPO DE PELÍCULA. EL TIPO SERÁ:
     *      - CORTOMETRAJE, SI LA DURACIÓN ES MENOR QUE 60
     *      - LARGOMETRAJE, SI LA DURACIÓN ES MAYOR O IGUAL QUE 60
     * 
     * 3.   MOSTRAR EN OTRA TABLA, TODAS LAS COLUMNAS, Y ORDENAR ADEMÁS EN ESTE ORDEN:
     *      1. GÉNERO
     *      2. AÑO
     *      3. TÍTULO (TODO ALFABÉTICAMENTE, Y EL AÑO DE MÁS RECIENTE A MÁS ANTIGUO)
     */

     for($i = 0; $i < count($peliculas); $i++){
        $peliculas[$i][3] = rand (30, 240);
    
        if($peliculas[$i][3] < 60) $peliculas[$i][4] = "CORTOMETRAJE";
        else $peliculas[$i][4] = "LARGOMETRAJE";
    }

    $_titulo = array_column($peliculas, 0);
    $_genero = array_column($peliculas, 1);
    $_anio = array_column($peliculas, 2);

    array_multisort($_genero, SORT_ASC, $_anio, SORT_DESC, $_titulo, SORT_ASC, $peliculas);

    ?>

    <table>
        <thead>
            <tr>
                <th>Película</th>
                <th>Género</th>
                <th>Año Lanzamiento</th>
                <th>Duración</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($peliculas as $peliculas) {
                //echo $videojuego[0];  también podemos sacar así las columnas
                list($pelicula, $genero, $anio, $duracion, $tipo) = $peliculas;
                echo "<tr>";
                echo "<td>$pelicula</td>";
                echo "<td>$genero</td>";
                echo "<td>$anio</td>";
                echo "<td>$duracion</td>";
                echo "<td>$tipo</td>";
                echo "</tr>";
                /*<td> */
                /*<td><?php echo $titulo ?></td>*/
                /*<td><?php echo $titulo ?></td>*/
                /*<td><?php echo $genero ?></td>*/
                /*<td><?php echo $anio ?></td>*/
                /*<td><?php echo $duracion ?></td>*/
                /*</td> */
            }
            ?>
        </tbody>
    </table>
</body>
</html>