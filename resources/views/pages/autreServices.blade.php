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
                class="text-white slogan-autreService display-4 font-Reey position-absolute top-50 start-50 text-capitalize">
                Votre
                confort, notre priorité</div>
            <img src="{{asset('images/paliatif.jpg')}}" class="d-block w-100" alt="image paliatif">
        </div>
        <div class="carousel-item">
            <div
                class="text-white slogan-autreService display-4 font-Reey position-absolute top-50 start-50 text-capitalize">
                Votre
                Bien <span class="text-lowercase">être,<span> notre priorité</div>
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
<div class="container-lg">
    <div class="row">
        <div class="col-sm-4 p-0 p-md-3">
            <div class="h-100">
                <img src="{{ asset("images/Avis-réflexologie-plantaire.jpeg") }}" alt="image reflexiologie" class="img-fluid d-block sizeImageReflex">
            </div>
        </div>
        <div class="col-sm-8">
            <article class="h-100 mt-3 mt-sm-0 mt-md-3 mt-xxl-0">
                <div class="h5 text-uppercase fw-bold">Reflexiologie Plantaire</div>
                <p class="sizeDescAutreSoins  animate__animated animate__fadeInDown">
                    <span class="fw-bold">La réflexologie</span> est une pratique se présentant comme thérapeutique
                    et utilisant le massage. Elle repose sur le précepte pseudo-scientifique
                    que chaque organe, partie du corps ou fonction physiologique correspondrait
                    à une zone ou un point sur les mains, les pieds ou les oreilles. Selon ses
                    praticiens, un toucher spécifique sur ces zones permettrait ainsi de localiser
                    et dissiper les tensions afin de rétablir l'équilibre du corps. Néanmoins,
                    l'idée qu'il existerait des voies réflexes entre une aire donnée du pied,
                    de la main ou de l'oreille, et un organe particulier est une croyance sans fondement biologique.
                    À ce jour, les essais cliniques ne démontrent d'ailleurs aucune efficacité propre de la réflexologie,
                    tant sur le plan diagnostique que thérapeutique1. Elle est aussi efficace que le simple repos.
                </p>
            </article>
        </div>
    </div>
    <div class="row descSoinPaliatif">
        <div class="col-sm-7 col-xl-4 offset-xl-4 order-2 order-md-1">
            <article class="h-100 mt-3 mt-xxl-0">
                <div class="h5 text-uppercase fw-bold">Soins paliatif</div>
                <p class=" animate__animated animate__fadeInDown animate__delay-1s">
                   <span class="fw-bold">Les soins palliatifs </span>sont des soins qui ne visent qu'au confort du malade,
                    souvent en phase de fin de vie. L'objectif des soins palliatifs est de prévenir
                     et de soulager les douleurs physiques, les symptômes inconfortables (nausées, constipation, anxiété...)
                    ou encore la souffrance psychologique. Un soin palliatif est une mesure visant à endiguer les conséquences
                     d'un grave problème médical, en ne se préoccupant plus de sa cause.
                </p>
            </article>
        </div>
        <div class="col-sm-5 col-xl-4 order-1 order-sm-2 p-0 p-md-3">
            <div class="h-100 mt-4 mt-md-0">
                <img src="{{ asset("images/contentPaliatif.jpg") }}" alt="image sons paliatif" class="w-100 img-fluid d-block sizeImagePaliatif">
            </div>
        </div>
    </div>
</div>
<div class="mt-4 mt-xl-7"></div>
 <div class="cercle">
  <div class="cercle-soins-1"></div>
</div>
@stop
