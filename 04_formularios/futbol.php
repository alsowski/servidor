<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fútbol</title>
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
<!-- 
Equipos de la liga
- Nombre (letras con tilde, ñ, espacios en blanco y punto, entre 3 y 20 caracteres)
- Inicial (3 letras)
- Liga (select con las opciones: Liga EA Sports, Liga Hypermotion, Liga Primera RFEF)
- Ciudad (letras con tilde, ñ, ç y espacios en blanco)
- Tiene titulo liga (select con si o no)
- Fecha de fundación (entre hoy y el 18 de diciembre de 1889)
- Número de jugadores (entre 19 y 32)
http://info.cern.ch/hypertext/WWW/TheProject.html
-->

<div class="container">
    <h1>Formulario de Fútbol</h1>
    <form class="col-4" action="" method="post">
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input class="form-control" type="text" name="nombre">
        </div>
        <div class="mb-3">
            <label class="form-label">Inicial</label>
            <input class="form-control" type="text" name="nombre">
        </div>
        <div class="mb-3">
            <select name="liga">
                <option value="ea" class="form-select-option">Liga EA Sports</option>
                <option value="hyp" class="form-select-option">Liga Hypermotion</option>
                <option value="rfef" class="form-select-option">Liga Primera RFEF</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Ciudad</label>
            <input class="form-control" type="text" name="nombre">
        </div>
        <div class="mb-3">
            <select name="titulo">
                <option value="si" class="form-select-option">Si</option>
                <option value="no" class="form-select-option">No</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de fundación</label>
            <input class="form-control" type="date" name="nombre">
        </div>
        <div class="mb-3">
            <label class="form-label">Número de jugadores</label>
            <input class="form-control" type="text" name="nombre">
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>