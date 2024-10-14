<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>LIBRERIA ULEAM</title>
</head>
<body>

<h1>Libros dados de alta en la librería</h1>


<table>
    <tr>
        <th>TÍTULO</th>
        <th>PRECIO</th>
    </tr>
    @foreach ($libros as $libro)
        <tr>
            <td>{{ $libro->titulo }}</td>
            <td>{{ number_format($libro->precio, 2) }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
