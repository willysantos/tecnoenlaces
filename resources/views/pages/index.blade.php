<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('componentes.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>


@include('pages.iniciar')
</body>
</html>