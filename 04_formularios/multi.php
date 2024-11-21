<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicaciones</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="post">
    <label for="number">Número</label>
    <input type="text" name="num">
    <br><br>
    <input type="submit" value="Enviar">
    <br><br><hr>
    </form>

    <!--
        CREAR UN FORMULARIO QUE RECIBA UN NÚMERO

        SE MOSTRARÁ LA TABLA DE MULTIPLICAR DE ESE NÚMERO EN UNA TABLA HTML

        2 x 1 = 2
        2 x 2 = 4
        ...
    -->

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["num"];
            echo "<h1>Tabla de Multiplicar del $num</h1>";
    ?>

    <table>
        <thead>
            <tr>
                    <th>Multiplicación</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
            <?php
                for($i = 0; $i<=10; $i++) {
                    echo "<tr>";
                    $resultado = $num * $i;
                    echo "<td>$num x $i</td>";
                    echo "<td>$resultado</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    <?php
        }
    ?>
</body>
</html>