<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
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
        function depurar(string $entrada) : string {
            $salida = htmlspecialchars($entrada);
            $salida = trim($salida);
            $salida = stripslashes($salida);
            $salida = preg_replace('!\s+!', ' ', $salida);
            return $salida;
        }

    ?>
    <div class="container">
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $tmp_titulo = depurar($_POST["titulo"]);
            $tmp_paginas = depurar($_POST["paginas"]);
            /*$tmp_genero = ($_POST["genero"]);*/
            $tmp_secuela = depurar($_POST["secuela"]);
            $tmp_fecha_publicacion = depurar($_POST["fecha_publicacion"]);
            $tmp_sinopsis = depurar($_POST["sinopsis"]);
        

            if($tmp_titulo == '') {
                $err_titulo = "El titulo es obligatorio";
            } else {
                $patron = "/^[a-zA-Z0-9.,; áéióúÁÉÍÓÚñÑüÜ]{1,40}$/";
                if(!preg_match($patron, $tmp_titulo)) {
                    $err_titulo = "El titulo debe contener entre 1 y 40 carácteres";
                } else {
                    $titulo = $tmp_titulo;
                }
            }

            if($tmp_paginas == ""){
                $err_paginas = "El número de páginas es obligatorio";
            } else {
                if ($tmp_paginas > 9999 || $tmp_paginas < 10) {
                    $err_paginas = "El número de páginas tiene que ser entre 10 y 9999";
                } else {
                    $paginas = $tmp_paginas;
                }
            }

            /*if($tmp_genero == '') {
                $err_genero = "El género es obligatorio";
            } else {
                $genero = $tmp_genero;
            }*/

            /*$fecha_actual = date("Y-m-d");
            if($tmp_fecha_publicacion > $fecha_actual) {
                $err_fecha_publicacion = "La fecha de publicacion no puede ser anterior al 1 de enero de 1800";
            } elseif($tmp_fecha_publicacion == $fecha_actual) {
                $fecha_publicacion = $tmp_fecha_publicacion;
            } else {
                $fecha_publicacion = $tmp_fecha_publicacion;
            }*/
            $fecha_publicacion = $tmp_fecha_publicacion;

            $patron = "/^[a-zA-Z áéióúÁÉÍÓÚñÑüÜ]{1,200}$/";
            if(!preg_match($patron, $tmp_sinopsis)) {
                $err_sinopsis = "La sinopsis debe contener menos de 200 letras";
            } else {
                $sinopsis = $tmp_sinopsis;
            }

        }
        ?>

    <h1>Formulario Libros</h1>

        <form class="col-4" action="" method="post">
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input class="form-control" type="text" name="titulo">
                <?php if(isset($err_titulo)) echo "<span class='error'>$err_titulo</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Páginas</label>
                <input class="form-control" type="text" name="paginas">
                <?php if(isset($err_paginas)) echo "<span class='error'>$err_paginas</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Género</label>
                <br>
                <label name="genero">Fantasía</label>
                <input type="radio" name="genero">
                <br>
                <label name="genero">Ciencia Ficción</label>
                <input type="radio" name="genero">
                <br>
                <label name="genero">Romance</label>
                <input type="radio" name="genero">
                <br>
                <label name="genero">Drama</label>
                <input type="radio" name="genero">
                <?php if(isset($err_genero)) echo "<span class='error'>$err_genero</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">¿Tiene Secuela?</label>
                <select name="secuela">
                    <option value=""></option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
                <?php if(isset($err_secuela)) echo "<span class='error'>$err_secuela</span>"; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de publicación</label>
                <input class="form-control" type="date" name="fecha_publicacion">
                <?php if(isset($err_fecha_publicacion)) echo "<span class='error'>$err_fecha_publicacion</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Sinopsis</label>
                <textarea class="form-control" type="text" name="sinopsis"> </textarea>
                <?php if(isset($err_sinopsis)) echo "<span class='error'>$err_sinopsis</span>" ?>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
        <?php
            if(isset($titulo) && isset($paginas) && isset($genero) && isset($secuela) && isset($fecha_publicacion) && isset($sinopsis)){ ?>
                <p><?php echo "Titulo: " . $titulo ?></p>
                <p><?php echo "Páginas: " . $paginas ?></p>
                <p><?php echo "Género: " . $genero ?></p>
                <p><?php echo "¿Tiene secuela?: " . $secuela ?></p>
                <p><?php echo "Fecha de publicación: " . $fecha_publicacion ?></p>
                <p><?php echo "Sinopsis: " . $sinopsis ?></p>
            <?php } ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>