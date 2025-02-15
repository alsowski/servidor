<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricky Martin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
        $apiUrl = "https://rickandmortyapi.com/api/character";
        $cant = isset($_GET["cant"]) && $_GET["cant"] !="" ? (int)$_GET["cant"]: 20;
        $gen = isset($_GET["gen"]) ? $_GET["gen"] : "";
        $esp = isset($_GET["esp"]) ? $_GET["esp"] : "";

        if(isset($_GET["cant"]) && isset($_GET["gen"]) && isset($_GET["esp"])) {
            $apiUrl = "https://rickandmortyapi.com/api/character?gender=$gen&species=$esp";
        }

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        curl_close($curl);

        $datos = json_decode($respuesta, true);
        $personajes = isset($datos["results"]) ? array_slice($datos["results"], 0, $cant) : [];
    ?>
    <h1>Filtros de Personajes</h1><br>
    <form action="" method="get">
        <label for="cant">Cantidad de personajes</label>
        <input type="text" name="cant"><br><br>
        <label for="gen">Género</label>
        <select name="gen">
            <option value="female">Mujer</option>
            <option value="male">Hombre</option>
        </select><br><br>
        <label for="esp">Especie</label>
        <select name="esp">
            <option value="human">Humano</option>
            <option value="alien">Alien</option>
        </select><br><br>
        <input type="submit" value="Filtrar">
    </form><br><br>
    <h1>Tabla de personajes</h1><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Género</th>
                <th scope="col">Especie</th>
                <th scope="col">Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($personajes as $personaje) { ?>
                    <tr>
                        <td scope="row"><?php echo $personaje["name"]?></td>
                        <td scope="row"><?php echo $personaje["gender"]?></td>
                        <td scope="row"><?php echo $personaje["species"]?></td>
                        <td scope="row">
                            <img width="100px" src="<?php echo $personaje["image"]?>">
                        </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>