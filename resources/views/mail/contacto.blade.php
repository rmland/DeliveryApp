<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #333;
            margin: 0;
        }
        .content {
            margin-bottom: 20px;
        }
        .content p {
            margin: 8px 0;
        }
        .footer {
            text-align: center;
            font-size: 0.8em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nuevo Mensaje de Contacto</h1>
        </div>
        <div class="content">
            <p><strong>Nombre:</strong> {{ $nombre }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Teléfono:</strong> {{ $telefono }}</p>
            <p><strong>Mensaje:</strong></p>
            <p>{{ $mensaje }}</p>
        </div>
        <div class="footer">
            <p>Este correo fue enviado desde el formulario de contacto de tu sitio web.</p>
        </div>
    </div>
</body>
</html>
