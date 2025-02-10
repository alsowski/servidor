<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de coches</h1>
    <table>
        <thead>
            <tr>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
        @foreach($marcas as $marca)
            <tr>
            <td>{{ $marca[0] }}</td>
            <td>{{ $marca[1] }}</td>
            <td>{{ $marca[2] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <ol>

    </ol>
</body>
</html>