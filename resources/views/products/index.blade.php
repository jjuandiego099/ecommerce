<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listado de Productos</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding-top: 80px; /* espacio para la topbar */
      background: #f2f2f2; /* Fondo yeso */
    }

    /* 🔹 Topbar reutilizada */
    .topbar {
      width: 100%;
      background: #007bff;
      color: white;
      padding: 15px 25px;
      font-size: 18px;
      font-weight: bold;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      box-shadow: 0 3px 8px rgba(0,0,0,0.2);
      text-align: left;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 28px rgba(0, 123, 255, 0.5);
    }

    .card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }

    .card-content {
      padding: 1rem;
    }

    .card h3 {
      margin: 0 0 10px;
      font-size: 18px;
      color: #333;
    }

    .card p {
      font-size: 14px;
      color: #555;
      margin-bottom: 10px;
    }

    .price {
      font-size: 16px;
      font-weight: bold;
      color: #007bff;
      margin-bottom: 10px;
    }

    .btn {
      display: inline-block;
      padding: 8px 12px;
      background: #007bff;
      color: #fff;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .btn:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <!-- 🔹 Topbar -->
  <div class="topbar">
    Gestión de Productos
  </div>

  <!-- 🔹 Listado de productos -->
  <div class="container">
    <!-- Generamos 20 productos -->
    <!-- Puedes cambiar las imágenes por tus URLs -->
    <div class="card">
      <img src="https://picsum.photos/300?random=1" alt="Producto 1">
      <div class="card-content">
        <h3>Producto 1</h3>
        <p>Descripción breve del producto.</p>
        <div class="price">$25.00</div>
        <a href="#" class="btn">Ver más</a>
      </div>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300?random=2" alt="Producto 2">
      <div class="card-content">
        <h3>Producto 2</h3>
        <p>Otro producto con detalles interesantes.</p>
        <div class="price">$45.00</div>
        <a href="#" class="btn">Ver más</a>
      </div>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300?random=3" alt="Producto 3">
      <div class="card-content">
        <h3>Producto 3</h3>
        <p>Descripción rápida y atractiva.</p>
        <div class="price">$30.00</div>
        <a href="#" class="btn">Ver más</a>
      </div>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300?random=4" alt="Producto 4">
      <div class="card-content">
        <h3>Producto 4</h3>
        <p>Un producto adicional con características especiales.</p>
        <div class="price">$60.00</div>
        <a href="#" class="btn">Ver más</a>
      </div>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300?random=5" alt="Producto 5">
      <div class="card-content">
        <h3>Producto 5</h3>
        <p>Ideal para quienes buscan calidad y estilo.</p>
        <div class="price">$75.00</div>
        <a href="#" class="btn">Ver más</a>
      </div>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300?random=6" alt="Producto 6">
      <div class="card-content">
        <h3>Producto 6</h3>
        <p>Un producto económico pero funcional.</p>
        <div class="price">$15.00</div>
        <a href="#" class="btn">Ver más</a>
      </div>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300?random=7" alt="Producto 7">
      <div class="card-content">
        <h3>Producto 7</h3>
        <p>Perfecto para el uso diario.</p>
        <div class="price">$20.00</div>
        <a href="#" class="btn">Ver más</a>
      </div>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300?random=8" alt="Producto 8">
      <div class="card-content">
        <h3>Producto 8</h3>
        <p>Un producto innovador y moderno.</p>
        <div class="price">$99.00</div>
        <a href="#" class="btn">Ver más</a>
      </div>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300?random=9" alt="Producto 9">
      <div class="card-content">
        <h3>Producto 9</h3>
        <p>Calidad garantizada y buena relación precio.</p>
        <div class="price">$55.00</div>
        <a href="#" class="btn">Ver más</a>
      </div>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300?random=10" alt="Producto 10">
      <div class="card-content">
        <h3>Producto 10</h3>
        <p>Producto pensado para los exigentes.</p>
        <div class="price">$120.00</div>
        <a href="#" class="btn">Ver más</a>
      </div>
    </div>

    <!-- Productos 11 a 20 -->
    <div class="card"><img src="https://picsum.photos/300?random=11"><div class="card-content"><h3>Producto 11</h3><p>Descripción breve.</p><div class="price">$28.00</div><a href="#" class="btn">Ver más</a></div></div>
    <div class="card"><img src="https://picsum.photos/300?random=12"><div class="card-content"><h3>Producto 12</h3><p>Descripción breve.</p><div class="price">$38.00</div><a href="#" class="btn">Ver más</a></div></div>
    <div class="card"><img src="https://picsum.photos/300?random=13"><div class="card-content"><h3>Producto 13</h3><p>Descripción breve.</p><div class="price">$48.00</div><a href="#" class="btn">Ver más</a></div></div>
    <div class="card"><img src="https://picsum.photos/300?random=14"><div class="card-content"><h3>Producto 14</h3><p>Descripción breve.</p><div class="price">$58.00</div><a href="#" class="btn">Ver más</a></div></div>
    <div class="card"><img src="https://picsum.photos/300?random=15"><div class="card-content"><h3>Producto 15</h3><p>Descripción breve.</p><div class="price">$68.00</div><a href="#" class="btn">Ver más</a></div></div>
    <div class="card"><img src="https://picsum.photos/300?random=16"><div class="card-content"><h3>Producto 16</h3><p>Descripción breve.</p><div class="price">$78.00</div><a href="#" class="btn">Ver más</a></div></div>
    <div class="card"><img src="https://picsum.photos/300?random=17"><div class="card-content"><h3>Producto 17</h3><p>Descripción breve.</p><div class="price">$88.00</div><a href="#" class="btn">Ver más</a></div></div>
    <div class="card"><img src="https://picsum.photos/300?random=18"><div class="card-content"><h3>Producto 18</h3><p>Descripción breve.</p><div class="price">$98.00</div><a href="#" class="btn">Ver más</a></div></div>
    <div class="card"><img src="https://picsum.photos/300?random=19"><div class="card-content"><h3>Producto 19</h3><p>Descripción breve.</p><div class="price">$108.00</div><a href="#" class="btn">Ver más</a></div></div>
    <div class="card"><img src="https://picsum.photos/300?random=20"><div class="card-content"><h3>Producto 20</h3><p>Descripción breve.</p><div class="price">$118.00</div><a href="#" class="btn">Ver más</a></div></div>
  </div>
</body>
</html>
