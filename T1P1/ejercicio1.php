<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <?php
        $anime = [
            ["Kimetsu no Yaiba", "Pelea"],
            ["Dr. Stone", "Ciencia"],
            ["Shingeki no Kyojin", "Pelea"],
            ["Death Note", "Misterio"],
            ["Assasination Classroom", "Escolar"]
        ];

        // 1.1
        array_push($anime, ["Jujutsu Kaisen", "Hechiceria"]);
        array_push($anime, ["Evangelion", "Robots"]);

        // 1.2
        unset($anime[6]);

        // 1.3
        for($i = 0; $i < count($anime); $i++) {
            $anime[$i][2] = rand(1990,2030);
        }

        // 1.4
        for($i = 0; $i < count($anime); $i++) {
            $anime[$i][3] = rand(1,99);
        }

        // 1.5
        for($i = 0; $i < count($anime); $i++) {
            if ($anime[$i][2] <= 2024) $anime[$i][4] = "Ya disponible";
            else $anime[$i][4] = "Próximamente";
        }

        // 1.6
        $_genero = array_column($anime, 1);
        $_anio = array_column($anime, 2);
        $_titulo = array_column($anime, 0);
        array_multisort($_genero, SORT_ASC, 
                        $_anio, SORT_ASC, 
                        $_titulo, SORT_ASC,
                        $anime);
    ?>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Género</th>
                <th>Año Lanzamiento</th>
                <th>Episodios</th>
                <th>Estreno</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // 1.7
            foreach($anime as $anime) {
                list($titulo, $genero, $anio, $episodios, $estreno) = $anime;
                echo "<tr>";
                echo "<td>$titulo</td>";
                echo "<td>$genero</td>";
                echo "<td>$anio</td>";
                echo "<td>$episodios</td>";
                echo "<td>$estreno</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>