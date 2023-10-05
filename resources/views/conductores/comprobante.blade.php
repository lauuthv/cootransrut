<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
        }

        .logo {
            max-width: 110px;
        }

        .title {
            font-weight: bold;
        }

        .info1 {
            text-align: center;
            font-size: 12px;
            margin-top: 10px;
            text-align:right;
        }

        .info {
            text-align: center;
            font-size: 12px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<p class="info1" >Fecha de Creación: {{ \Carbon\Carbon::now()->format('d/m/Y H:i:s') }} - Generado por: {{ Auth::user()->name }}</p>
<br>
<div class="header">
    <img src="{{ asset('img/brand/logocootranascol.jpeg')}}" alt="Logo de la Empresa" class="logo">
    <h1 class="title">Comprobante de Mantenimiento</h1>
</div>

<div class="info">
    <p>ID del Mantenimiento: {{ $mantenimiento->id }}</p>
    <img src="data:image/jpeg;base64,{{ base64_encode($mantenimiento->fotoFactura) }}">
</div>
</body>
</html>
