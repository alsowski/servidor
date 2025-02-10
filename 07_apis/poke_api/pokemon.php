<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poke Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
        /* if (isset($_GET["limit"])) {
            $limit = $_GET["limit"];
            $apiUrl = "https://pokeapi.co/api/v2/pokemon?limit=$limit";
        } */

        $apiUrl = "https://pokeapi.co/api/v2/pokemon?limit=5";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        curl_close($curl);

        $datos = json_decode($respuesta, true);
        $pokemons = $datos["results"];

        $apiUrlPokemon = "https://pokeapi.co/api/v2/pokemon/1";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrlPokemon);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuestaPokemon = curl_exec($curl);
        curl_close($curl);

        $datosPokemon = json_decode($respuestaPokemon, true);
        $foto = $datosPokemon["sprites"]["other"]["dream_world"]["front_default"];
        $tipo = $datosPokemon["types"]["0"]["type"]["name"];
        $tipo2 = $datosPokemon["types"]["1"]["type"]["name"];
    ?>
    <h1>Filtros de Personajes</h1><br>
    <form action="" method="get">
        <label for="limit">¿Cuántos pokemons quieres mostrar?</label>
        <input type="number" name="limit">
        <input type="submit" value="Mostrar"><br><br>
    </form><br><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Pokémon</th>
                <th scope="col">Imagen</th>
                <th scope="col">Tipos</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($pokemons as $pokemon) { ?>
                    <tr>
                        <td scope="row"><?php echo ucwords($pokemon["name"]) ?></td>
                        <td scope="row">
                            <img width="200px" src="<?php echo $foto?>" class="img-fluid">
                        </td>
                        <td scope="row"> <?php echo ucwords($tipo . " " . $tipo2) ?> </td>
                        </tr>
            <?php } ?>
                <!-- <tr>
                    <td>
                        <a href="pokemon.php?page=" class="btn btn-primary">Anterior</a>
                    </td>
                    <td>
                        <a href="pokemon.php?page=" class="btn btn-primary">Siguiente</a>
                    </td>
                </tr> -->
        </tbody>
    </table>
</body>
</html>