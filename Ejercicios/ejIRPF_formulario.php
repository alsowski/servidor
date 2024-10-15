<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio IRPF</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>    
    <form action="" method="post">
    <label for="temp">Temperatura</label>
    <input type="text" name="temp">
    <br><br>
    <select name="unidad1">
        <option value="celsius">Celsius</option>
        <option value="kelvin">Kelvin</option>
        <option value="fahrenheit">Fahrenheit</option>
    </select>
    <select name="unidad2">
        <option value="celsius">Celsius</option>
        <option value="kelvin">Kelvin</option>
        <option value="fahrenheit">Fahrenheit</option>
    </select>
    <br><br>
    <input type="submit" value="Transformar">
    <br><br><hr>
    </form>

    <!--EJERCICIO IRPF 
    Hacer un transformador de divisas con la foto del ejercicio.
    Como el ejercicio 4 de los formularios-->