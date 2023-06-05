@extends('base')

@section('title')
    Contact
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
    <h2 class="text-center my-2">A propos de Romario-Lewis</h2>
    <p class="container text-center">
    
        Siège social : <br>
        Romario-Lewis Inc. <br>
        123, Rue de l'Innovation <br>
        Cotonou, Code postal <br>
        Bénin <br>

        Téléphone : +00229 66 57 10 52 <br>
        Email : romario-benisto@gmail.com <br> <br>

        Bureau régional : <br>
        Romario-Lewis Regional Office <br>
        456, Avenue de la Technologie <br>
        Calavi, Code postal <br>
        Benin <br>
    </p>
@endsection