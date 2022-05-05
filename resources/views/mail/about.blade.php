<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
    {{-- <p>Hola, {{ $about["name"] }}! </p> --}}
    {{-- <p>Tu mensaje fue recibido: {{ $about["message"]}}. Estaremos en contacto pronto..</p> --}}
    <h1>Hola, Emmanuel! </h1>
    <p>Name: {{ $about["name"] }}</p>
    <p>Email: {{ $about["email"] }}</p>
    <p>Phone: {{ $about["phone"] }}</p>
    <p>Tu mensaje fue recibido: {{ $about["message"]}}.</p>
</body>
</html>

