@extends('layouts.app')
@section('css')
    
    <link rel="stylesheet" href="{{asset('css/style3.css')}}">  
  
@endsection
@section('content')
    <div class="container1">
    <div class="product-image">
      <img src="https://picsum.photos/600/600?random=31" alt="Producto destacado">
    </div>
    <div class="product-details">
      <h1>Producto Premium</h1>
      <p class="description">
        Este producto combina la mejor tecnología con un diseño elegante y moderno. 
        Es ideal para quienes buscan estilo y funcionalidad, ofreciendo un rendimiento superior 
        y materiales de la más alta calidad.
      </p>
      <div class="price">$250.00</div>

      <h3>Características principales:</h3>
      <ul class="features">
        <li>Marca: PremiumX</li>
        <li>Material: Aluminio anodizado y vidrio templado</li>
        <li>Dimensiones: 30cm x 20cm x 12cm</li>
        <li>Peso: 1.5 kg</li>
        <li>Garantía: 3 años</li>
      </ul>

      <div class="actions">
        <a href="#" class="btn">Agregar al carrito</a>
        <a href="#" class="btn btn-secondary">Volver al listado</a>
      </div>
    </div>
  </div>
@endsection

