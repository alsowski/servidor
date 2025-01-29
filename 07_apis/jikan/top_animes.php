<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Anime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
        $apiUrl = "https://api.jikan.moe/v4/top/anime";

        if(isset($_GET["type"])) {
            $type = $_GET["type"];
        } else {
            $type = "";
        }

        $apiUrl = "https://api.jikan.moe/v4/top/anime?type=" . $type;

        if(isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }

        $apiUrl = "https://api.jikan.moe/v4/top/anime?page=" . $page;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        curl_close($curl);

        $datos = json_decode($respuesta, true);
        $animes = $datos["data"];
    ?>

    <table class="table">
        <thead class="thead-dark">
            <form action="" method="get">
                <h3>Filtrar por Tipo</h3>
                <label>
                    <input type="radio" name="type" value="">Todos
                </label>
                <label>
                    <input type="radio" name="type" value="tv"> Serie
                </label>
                <label>
                    <input type="radio" name="type" value="movie"> Película
                </label>
                <button type="submit">Filtrar</button>
            </form>
            <tr>
                <th scope="col">Posición</th>
                <th scope="col">Título</th>
                <th scope="col">Nota</th>
                <th scope="col">Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($animes as $anime) { ?>
                    <tr>
                        <td scope="row"><?php echo $anime["rank"]?></td>
                        <td>
                            <a href="anime.php?id=<?php echo $anime["mal_id"]?>">
                                <?php echo $anime["title"]?>
                            </a>
                        </td scope="row">
                        <td scope="row"><?php echo $anime["score"]?></td>
                        <td scope="row">
                            <img width="100px" src="<?php echo $anime["images"]["jpg"]["image_url"]?>">
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td>
                        <a href="top_animes.php?page=" class="btn btn-primary">Anterior</a>
                    </td>
                    <td>
                        <a href="top_animes.php?page=" class="btn btn-primary">Siguiente</a>
                    </td>
                </tr>
        </tbody>
    </table>
</body>
</html>