<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos - DTDESK</title>
  <link rel="stylesheet" href="css/productos.css">
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
    .featured-products {
      text-align: center; /* Centrar el título */
      margin: 20px; /* Margen */
    }
    .featured-products h2 {
      margin-bottom: 20px; /* Margen inferior */
      color: #333; /* Color del texto */
    }
    .product-list {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center; /* Centrar los productos */
    }
    .product-card {
      border: 1px solid #ccc; /* Borde del card */
      border-radius: 5px; /* Bordes redondeados */
      padding: 15px; /* Relleno */
      width: 250px; /* Ancho de cada card */
      text-align: center; /* Texto centrado */
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Sombra */
      transition: transform 0.3s; /* Transición para efecto hover */
    }
    .product-card:hover {
      transform: translateY(-5px); /* Efecto de elevación al pasar el mouse */
    }
    .product-card img {
      max-width: 100%; /* Ancho máximo de la imagen */
      height: auto; /* Altura automática */
      border-bottom: 1px solid #ccc; /* Borde inferior de la imagen */
      padding-bottom: 10px; /* Espacio inferior de la imagen */
      margin-bottom: 10px; /* Margen inferior */
    }
    .product-card h3 {
      font-size: 20px; /* Tamaño del texto del título */
      margin-bottom: 10px; /* Margen inferior */
      color: #333; /* Color del texto */
    }
    .product-card p {
      font-size: 18px; /* Tamaño del texto del precio */
      color: #333; /* Color del texto */
      margin-bottom: 10px; /* Margen inferior */
    }
    .product-card button {
      background-color: #28a745; /* Color del botón */
      color: white; /* Color del texto */
      border: none; /* Sin borde */
      padding: 10px 20px; /* Relleno */
      border-radius: 5px; /* Bordes redondeados */
      cursor: pointer; /* Cursor puntero */
      transition: background-color 0.3s; /* Transición en hover */
    }
    .product-card button:hover {
      background-color: #218838; /* Color más oscuro en hover */
    }
    footer {
      text-align: center; /* Texto centrado */
      padding: 10px 0; /* Relleno */
      background-color: #1a1a1a; /* Fondo oscuro */
      color: #fff; /* Color del texto */
      margin-top: 20px; /* Margen superior */
    }
  </style>
</head>
<body>
  <?php include 'nav.php'; ?>
  <main>
    <section class="featured-products">
      <h2>Productos Destacados</h2>
      <div class="product-list">
        <div class="product-card">
          <a href="descripcion.php">
            <img src="img/escritorio1.jpg" alt="Escritorio Moderno">
            <h3>Escritorio Moderno</h3>
            <p>$100.000</p>
          </a>
          <button onclick="addToCart(1)">Añadir al Carrito</button>
        </div>
        <div class="product-card">
          <img src="ruta/a/imagen2.jpg" alt="Producto 2">
          <h3>Producto 2</h3>
          <p>$200</p>
          <button onclick="addToCart(2)">Añadir al Carrito</button>
        </div>
        <div class="product-card">
          <img src="ruta/a/imagen3.jpg" alt="Producto 3">
          <h3>Producto 3</h3>
          <p>$300</p>
          <button onclick="addToCart(3)">Añadir al Carrito</button>
        </div>
        <div class="product-card">
          <img src="ruta/a/imagen4.jpg" alt="Producto 4">
          <h3>Producto 4</h3>
          <p>$400</p>
          <button onclick="addToCart(4)">Añadir al Carrito</button>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 DTDESK. Todos los derechos reservados.</p>
  </footer>

  <script>
    // Función para agregar producto al carrito
    function addToCart(producto) {
      let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

      // Verificar si el producto ya está en el carrito
      const productoExistente = carrito.find(item => item.id === producto);

      if (productoExistente) {
        // Si ya está, incrementar la cantidad
        productoExistente.cantidad += 1;
      } else {
        // Si no está, agregarlo con cantidad 1
        carrito.push({ id: producto, cantidad: 1 });
      }

      // Guardar el carrito actualizado en localStorage
      localStorage.setItem('carrito', JSON.stringify(carrito));
      alert('Producto añadido al carrito.');
    }

    // Función para abrir la página de descripción
    function openDescriptionPage(productId) {
      window.location.href = `descripcion.php?id=${productId}`;
    }

    // Cargar productos desde el archivo JSON
    fetch('productos.json')
      .then(response => response.json())
      .then(data => {
        const productList = document.getElementById('product-list');
        data.productos.forEach(producto => {
          const productCard = document.createElement('div');
          productCard.classList.add('product-card');

          productCard.innerHTML = `
            <a href="javascript:void(0)" onclick="openDescriptionPage(${producto.id})">
              <img src="${producto.imagen}" alt="${producto.nombre}">
              <h3>${producto.nombre}</h3>
            </a>
            <p>${producto.descripcion}</p>
            <p><strong>$${producto.precio}</strong></p>
            <button onclick="addToCart(${producto.id})">Añadir al Carrito</button>
          `;

          productList.appendChild(productCard);
        });
      })
      .catch(error => console.error('Error al cargar los productos:', error));
  </script>
</body>
</html>