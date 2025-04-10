<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Paciente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .paciente-info {
            margin: 20px 0;
        }
        .paciente-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Datos del Paciente</h1>
        
        <div class="paciente-info">
            <p><strong>Nombre:</strong> {{ $paciente->nombre }}</p>
            <p><strong>Edad:</strong> {{ $paciente->edad }}</p>
            <p><strong>Sexo:</strong> {{ $paciente->sexo }}</p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $paciente->fecha_nacimiento }}</p>
            <p><strong>Ciudad de Origen:</strong> {{ $paciente->ciudad_origen }}</p>
            <p><strong>Fecha de Inscripción:</strong> {{ \Carbon\Carbon::parse($paciente->fecha_inscripcion)->format('d/m/Y H:i') }}</p>
            <p><strong>Hospital de Origen:</strong> {{ $paciente->hospital->nombre }}</p>
        </div>
    </div>

</body>
</html>
