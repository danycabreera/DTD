<?php
// nav.php
?>

<header>
    <h1>DTDESK - Productos</h1>
    <nav>
        <ul>
            <li><a href="index.php" class="active">Inicio</a></li>
            <li><a href="produ.php">Productos</a></li>
            <li><a href="carrito.php">Carrito</a></li>
            <li><a href="https://www.instagram.com/duki/">Contacto</a></li>
            <li><a href="login.php">Iniciar Sesión</a></li>
            <li><a href="registro.php">Registro</a></li>
        </ul>
    </nav>
</header>

<style>
    /* Estilos generales del encabezado */
    header {
        background-color: #1a1a1a; /* Fondo más oscuro */
        padding: 70px 0 20px; /* Aumentar espacio arriba a 70px */
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Sombra */
        position: relative;
    }

    /* Estilo del título */
    header h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        color: #FFFFFF; /* Título en color blanco */
        margin: 0;
        letter-spacing: 2px; /* Más espaciado en letras */
        text-transform: uppercase;
        font-weight: bold;
    }

    /* Estilo del menú de navegación */
    header nav ul {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin: 40px 0 0; /* Más espacio entre título y menú */
        background-color: #000000; /* Fondo completamente negro */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Sombra del menú */
        border-radius: 50px; /* Bordes redondeados */
        padding: 15px 30px; /* Espaciado alrededor del menú */
    }

    /* Estilo de los elementos de la lista */
    header nav ul li {
        margin: 0 20px;
    }

    /* Estilo de los enlaces */
    header nav ul li a {
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
        color: #FFFFFF; /* Color de texto blanco */
        font-size: 18px;
        padding: 10px 20px;
        border-radius: 30px;
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    /* Efecto hover con estilo de fondo */
    header nav ul li a:hover {
        background-color: #333333; /* Color de hover gris oscuro */
        color: #FFFFFF; /* Texto blanco en hover */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada */
        transform: scale(1.05); /* Leve aumento de tamaño */
    }

    /* Efecto para el enlace activo */
    header nav ul li a.active {
        background-color: #E5E5E5; /* Color del enlace activo gris claro */
        color: #000000; /* Texto negro en enlace activo */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);
    }

    /* Efecto de borde inferior animado en hover */
    header nav ul li a:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 4px;
        background-color: #FFFFFF; /* Borde blanco */
        bottom: -10px;
        left: 0;
        transform: scaleX(0);
        transition: transform 0.3s ease;
        z-index: -1;
    }

    header nav ul li a:hover:before {
        transform: scaleX(1);
    }

    /* Para pantallas pequeñas (responsive) */
    @media (max-width: 768px) {
        header nav ul {
            flex-direction: column;
            padding: 10px;
        }

        header nav ul li {
            margin: 10px 0;
        }

        header nav ul li a {
            padding: 10px;
            font-size: 16px;
        }
    }
</style>
