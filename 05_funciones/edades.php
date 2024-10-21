<?php

    function calcularEdades ($nombre,  $edad) {

    if($edad<18){
        echo "<h2>$nombre es menor de edad</h2>";
    } elseif ($edad>=18 && $edad<=65){
        echo "<h2>$nombre es mayor de edad</h2>";
    } elseif ($edad>65){
        echo "<h2>$nombre está jubilado</h2>";
    }
    }
?>