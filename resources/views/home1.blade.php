@extends('base')

@section('title')
    Accueil
@endsection

@section('banner')
<div class="container">

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('image/formations1.avif') }}" class="d-block w-100" alt="formations1">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('image/formations2.avif') }}" class="d-block w-100" alt="formations2">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('image/formations3.avif') }}" class="d-block w-100" alt="formations3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
</div>
@endsection

@section('content')
  <div class="container mt-2">
    <h2 class="text-center my-3" > Les Formations chez Romario-Lewis </h2>
  </div>

  {{-- <video width="320" height="240" controls>
    <source src="{{ asset('video/video1.mp4')}}" type="video/mp4">
    Your browser does not support the video tag.
  </video> --}}
  
  <div class="container">
    <div class="row me-auto my-2 text- center">
      <div class="card col-lg-3 me-auto my-3" style="width: 18rem;">
        <img src="{{ asset('image/card1.jpg') }}" class="card-img-top" alt="card1">
        <div class="card-body">
          <h5 class="card-title">La santé</h5>
          <p class="card-text">Chez Romario-Lewis nous vous offrons une formation en aide soignant.</p>
          <a href="cours" class="btn btn-primary">Voir plus</a>
        </div>
      </div>
  
      <div class="card col-lg-3 me-auto my-3" style="width: 18rem;">
        <img src="{{ asset('image/card2.jpg') }}" class="card-img-top" alt="card2">
        <div class="card-body">
          <h5 class="card-title">L'informatique</h5>
          <p class="card-text">Chez Romario-Lewis vous pouvez avoir la base en informatique.</p>
          <a href="cours" class="btn btn-primary">Voir plus</a>
        </div>
      </div>
  
      <div class="card col-lg-3 me-auto my-3" style="width: 18rem;">
        <img src="{{ asset('image/card3.jpg') }}" class="card-img-top" alt="card3">
        <div class="card-body">
          <h5 class="card-title">Les arts</h5>
          <p class="card-text">Offrez vous une formation en dessin, peinture chez Romario-Lewis.</p>
          <a href="cours" class="btn btn-primary">Voir plus</a>
        </div>
      </div>
    </div>
  </div>
  
@endsection