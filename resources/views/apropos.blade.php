@extends('base')

@section('title')
    A propos
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
    <p class="container">
        Chez Romario-Lewis, nous sommes passionnés par l'innovation technologique, l'avenir des jeunes et son 
        impact positif sur la société. Notre entreprise a été fondée avec la vision de repousser les limites de
        la technologie et de créer des solutions novatrices qui changent la façon dont le monde fonctionne.
        Depuis notre création, nous nous sommes engagés à être à l'avant-garde de la révolution technologique.
        Nous investissons continuellement dans la recherche et le développement pour concevoir des produits et 
        des services qui répondent aux besoins émergents de nos clients et anticipent les tendances du marché.
        Notre équipe talentueuse est composée d'ingénieurs, de concepteurs, de développeurs et de spécialistes 
        de l'expérience utilisateur, qui collaborent étroitement pour créer des expériences technologiques 
        exceptionnelles. Nous croyons en la puissance de la collaboration et de la diversité des idées pour 
        stimuler l'innovation. Chaque membre de notre équipe apporte une expertise unique, ce qui nous permet 
        d'aborder les défis les plus complexes avec créativité et perspicacité.
        La qualité est au cœur de tout ce que nous faisons. Nous nous engageons à offrir des produits et des 
        services de la plus haute qualité, en suivant des normes rigoureuses de contrôle de la qualité à chaque 
        étape du processus de développement. Notre objectif est de surpasser les attentes de nos clients et de 
        leur fournir des solutions technologiques fiables, performantes et sécurisées.
        En tant qu'entreprise socialement responsable, nous nous efforçons également d'avoir un impact positif 
        sur notre communauté et notre environnement. Nous cherchons constamment des moyens de réduire notre 
        empreinte carbone et de promouvoir le développement durable à travers nos activités.
        Chez InnovateTech, nous croyons que l'innovation ne connaît pas de limites. Nous sommes déterminés à 
        façonner un avenir meilleur en repoussant les frontières de la technologie. Rejoignez-nous dans cette aventure passionnante et ensemble, construisons un monde plus intelligent, plus connecté et plus durable."
        N'hésitez pas à personnaliser ce contenu en fonction de l'entreprise réelle pour laquelle vous souhaitez créer une section "À propos".
            
    </p>
@endsection