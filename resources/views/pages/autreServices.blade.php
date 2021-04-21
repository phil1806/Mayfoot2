{{--
    Chemin :/resources/views/pages/autreServices.blade.php
    Description: Affiche le contenu de la page  Autre services
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
Autre Services
@stop

@section('content')
<!-- slider -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div
                class="text-white slogan-accueil display-4 font-Reey position-absolute top-50 start-50 text-capitalize">
                Votre
                satisfaction est notre priorité</div>
            <img src="{{asset('images/paliatif.jpg')}}" class="d-block w-100" alt="image paliatif">
        </div>
        <div class="carousel-item">
            <div
                class="text-white slogan-accueil display-4 font-Reey position-absolute top-50 start-50 text-capitalize">
                Votre
                satisfaction est notre priorité</div>
            <img src="{{asset('images/R2.jpg')}}" class="d-block w-100" alt="reflexiogie">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{--  <div class="position-relative d-block w-100">
    <img src="{{asset('images/paliatif.jpeg')}}" alt="paliatif" class="img-fluid w-100 d-block">
<div class="text-white slogan-accueil display-4 font-Reey position-absolute top-50 start-50 text-capitalize">Votre
    satisfaction est notre priorité</div>
</div> --}}
<!-- Main -->
<div class="mt-7"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4 ">
            <div class="h-100">
                <img src="{{ asset("images/Avis-réflexologie-plantaire.jpeg") }}" alt="image reflexiologie" class="w-75 img-fluid d-block sizeImageReflex">
            </div>
        </div>
        <div class="col-md-4">
            <article class="h-100">
                <div class="h1">Reflexiologie Plantaire</div>
                <p class=" fs-6">            
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                    . Corporis, ipsa? Delectus quae maiores, nemo, magnam,
                    iusto ipsam corrupti dolor facere impedit optio nesciunt
                    eque dicta voluptatem explicabo modi ratione eius.
                     Lorem ipsum dolor sit amet consectetur adipisicing elit
                    . Corporis, ipsa? Delectus quae maiores, nemo, magnam,
                    iusto ipsam corrupti dolor facere impedit optio nesciunt
                    eque dicta voluptatem explicabo modi ratione eius.
                </p>
            </article>
        </div>
    </div>
    <div class="row descSoinPaliatif">
        <div class="col-md-4 offset-4">
            <article class="h-100">
                <div class="h1">Soins paliatif</div>
                <p class=" fs-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                    . Corporis, ipsa? Delectus quae maiores, nemo, magnam,
                    iusto ipsam corrupti dolor facere impedit optio nesciunt
                    eque dicta voluptatem explicabo modi ratione eius.
                     Lorem ipsum dolor sit amet consectetur adipisicing elit
                    . Corporis, ipsa? Delectus quae maiores, nemo, magnam,
                    iusto ipsam corrupti dolor facere impedit optio nesciunt
                    eque dicta voluptatem explicabo modi ratione eius.
                </p>
            </article>
        </div>
        <div class="col-md-4">
            <div class="h-100 ">
                <img src="{{ asset("images/contentPaliatif.jpg") }}" alt="image sons paliatif" class="w-100 img-fluid d-block">
            </div>
        </div>
    </div>
</div>
<div class="mt-7"></div>
 <div class="cercle">
  <div class="cercle-soins-1"></div>
</div>
@stop
