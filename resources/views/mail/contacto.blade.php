<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje de Contacto</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
            color: #333;
            line-height: 1.6;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            color: #555;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            color: #ffffff;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>¡Hemos Recibido Tu Mensaje!</h1>
        </div>
        <div class="content">
            <p>Estimado/a <strong>{{ $nombre }}</strong>,</p>
            <p>Gracias por contactarnos. Hemos recibido tu mensaje y te responderemos lo antes posible. A continuación, te confirmamos los detalles enviados:</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Teléfono:</strong> {{ $telefono }}</p>
            <p><strong>Mensaje:</strong></p>
            <blockquote>{{ $mensaje }}</blockquote>
            <p>Si necesitas más información, no dudes en responder a este correo.</p>
            <a href="{{ url('/') }}" class="button">Visita nuestro sitio web</a>
        </div>
        <div class="footer">
            <p>Este correo fue generado automáticamente desde el formulario de contacto de nuestro sitio web.</p>
            <p>&copy; {{ date('Y') }} Tu Empresa. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>
