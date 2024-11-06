<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );  
    ?>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    if($_REQUEST["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["consola"])) {
            $tmp_consola = $_POST["consola"];
        } else {
            $tmp_consola = "";
        }

        if($tmp_consola == '') {
            $err_consola = "La consola es obligatoria";
        } else {
            $consolas_validas = ["ps4", "ps5", "switch", "xboxsx"];
            if(!in_array($tmp_consola, $consolas_validas)) {
                $err_consola = "La consola no es válida";
            } else {
                $consola = $tmp_consola;
            }
        }
    }
    ?>
    <div class="container">
        <h1>Formulario de videojuegos</h1>
        <form class="col-4" action="" method="post">
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="ps4">
                    <label for="" class="form-check-label">Playstation 4</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="ps5">
                    <label for="" class="form-check-label">Playstation 5</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="switch">
                    <label for="" class="form-check-label">Nintendo Switch</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="xboxsx">
                    <label for="" class="form-check-label">Xbox Series X/S</label>
                </div>
            </div>
            <div class="">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
            <?php if(isset($err_consola)) echo "<span class='error'>$err_consola</span>" ?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>