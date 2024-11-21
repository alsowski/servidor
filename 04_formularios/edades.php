<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <br><br>
    <label for="edad">Edad</label>
    <input type="number" name="edad">
    <br><br>
    <input type="submit" value="Enviar">
    <br><br><hr>
    </form>

    <!--
        CREAR UN FORMULARIO QUE RECIBA EL NOMBRE Y LA EDAD DE UNA PERSONA

        SI LA EDAD ES MENOR QUE 18, SE MOSTRARÁ EL NOMBRE Y QUE ES MENOR DE EDAD

        SI LA EDAD ESTÁ ENTRE 18 Y 65, SE MOSTRARÁ EL NOMBRE Y QUE ES MAYOR DE EDAD

        SI LA EDAD ES MAS DE 65, SE MOSTRARÁ EL NOMBRE Y QUE SE HA JUBILADO
    -->

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $edad = $_POST["edad"];

            if($edad<18){
                echo "<h2>$nombre es menor de edad</h2>";
            } elseif ($edad>=18 && $edad<=65){
                echo "<h2>$nombre es mayor de edad</h2>";
            } elseif ($edad>65){
                echo "<h2>$$nombre está jubilado</h2>";
            }
        }
    ?>
    <!--
        CREAR UN FORMULARIO QUE RECIBA UN NÚMERO

        SE MOSTRARÁ LA TABLA DE MULTIPLICAR DE ESE NÚMERO EN UNA TABLA HTML

        2 x 1 = 2
        2 x 2 = 4
        ...
    -->
</body>
</html>