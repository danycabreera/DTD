<?php
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - DTDESK</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Tipografía coherente */
            margin: 0;
            padding: 0;
            background-color: #f4f4f4; /* Color de fondo */
        }
        header {
            background-color: #1a1a1a; /* Color oscuro para el header */
            color: #fff; /* Color del texto */
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: #000; /* Color oscuro para el nav */
            overflow: hidden;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            float: left;
        }
        nav ul li a {
            display: block;
            color: #fff; /* Color del texto del nav */
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #333; /* Color en hover */
        }
        .register-container {
            max-width: 400px; /* Ancho máximo del formulario */
            margin: 50px auto; /* Centrado */
            padding: 20px; /* Relleno interno */
            background-color: #fff; /* Fondo blanco */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
            border-radius: 10px; /* Bordes redondeados */
        }
        .register-container h2 {
            text-align: center; /* Texto centrado */
            margin-bottom: 20px; /* Espaciado inferior */
            color: #333; /* Color del texto */
        }
        .register-container input[type="text"],
        .register-container input[type="password"] {
            width: 100%; /* Ancho completo */
            padding: 10px; /* Relleno */
            margin: 10px 0; /* Margen vertical */
            border: 1px solid #ccc; /* Borde */
            border-radius: 5px; /* Bordes redondeados */
        }
        .register-container input[type="submit"] {
            width: 100%; /* Ancho completo */
            padding: 10px; /* Relleno */
            background-color: #1a1a1a; /* Fondo oscuro para el botón */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            color: #fff; /* Color del texto */
            font-size: 16px; /* Tamaño de fuente */
            cursor: pointer; /* Cursor en forma de puntero */
            transition: background-color 0.3s; /* Transición en hover */
        }
        .register-container input[type="submit"]:hover {
            background-color: #333; /* Color más claro en hover */
        }
        .error-message {
            color: red; /* Color para mensajes de error */
            text-align: center; /* Texto centrado */
            margin-bottom: 10px; /* Margen inferior */
        }
        .success-message {
            color: green; /* Color para mensajes de éxito */
            text-align: center; /* Texto centrado */
            margin-bottom: 10px; /* Margen inferior */
        }
        footer {
            text-align: center; /* Texto centrado */
            padding: 10px 0; /* Relleno */
            background-color: #1a1a1a; /* Fondo oscuro */
            color: #fff; /* Color del texto */
        }
    </style>
</head>
<body>

<main>
    <div class="register-container">
        <h2>Registro</h2>

        <!-- Mostrar mensaje de error o éxito -->
        <?php
        if (!empty($error_message)) {
            echo '<p class="error-message">' . $error_message . '</p>';
        }
        if (!empty($success_message)) {
            echo '<p class="success-message">' . $success_message . '</p>';
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="password" name="confirm_password" placeholder="Confirmar contraseña" required>
            <input type="submit" value="Registrarse">
        </form>
    </div>
</main>

<footer>
    <p>&copy; 2024 DTDESK. Todos los derechos reservados.</p>
</footer>
</body>
</html>
