@extends('base')

@section('title')
    cours
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
    <div class="container  my-3">
        <h2> Les cours chez Romario-Lewis</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="card col mx-3">
                <div class="card-body">
                  <h4 class="card-title">Le cour sur l'analyse biomédicale</h4>
                  <p class="card-text">Ce cour concerne le domaine de la santé.</p>
                  <a href="#" class="card-link">S'inscrire</a>
                  <a href="video1" class="card-link">Suivre la video</a>
                </div>
            </div>
            
            <div class="card col mx-3">
                <div class="card-body mx-3">
                  <h4 class="card-title">Le cours sur la programmation Web</h4>
                  <p class="card-text">Ce cour concerne le domaine de l'informatique.</p>
                  <a href="#" class="card-link">S'inscrire</a>
                  <a href="video2" class="card-link">Suivre la video</a>
                </div>
            </div>

            <div class="card mx-3 col">
                <div class="card-body ">
                  <h4 class="card-title">La danse Salsa</h4>
                  <p class="card-text">Ce cour est dans le domaine des arts et 
                    n'importe qui peut le suivre.</p>
                  <a href="#" class="card-link">S'inscrire</a>
                  <a href="video3" class="card-link">Suivre la video</a>
                </div>
            </div>
        </div>
    </div>
@endsection