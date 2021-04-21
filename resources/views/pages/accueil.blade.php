{{--
    Chemin :/resources/views/pages/accueil.blade.php
    Description: Affichage du contenu de la page d'accueil
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
Accueil
@stop

@section('content')
<!-- Section Image d'accueil et slogan-->
<div class="position-relative d-block w-100">
  <img src="{{asset('images/firstImage.jpeg')}}" alt="image d'accueil" class="img-fluid w-100 d-block">
  <div class="text-white slogan-accueil display-4 font-Reey position-absolute top-50 start-50 text-capitalize">Votre satisfaction est notre priorité</div>
</div>
<!-- Body-->
<div class="container p-7">
  <div class="row">
    <div class="col-md-6">
      <div class="h-100 d-flex justify-content-center">
        <div class="font-Reey display-5 align-self-center rotate_N20dreg">MayFoot</div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="ml-5">
        Il traite les affections de l'épiderme et des ongles des   pieds.Le pédicure spécialisé réalise une anamnèse du patient et de ses antécédents,je suis entrain de travailler sur le site de Mavisil examine le pied de façon à pouvoir déterminer les soins à 
        pporter au patient. tout est possible dans la vie  Toute intervention commence par la désinfection du pied.4 sept. 2018Il traite les affections de l'épiderme et des ongles des  pieds.
         Le pédicure spécialisé réalise une anamnèse du patient et de ses antécédents, il examine le pied de façon à pouvoir déterminer les soins à 
        apporter au patient. Toute intervention commence par la désinfection du pied.4 sept.2018
          Il traite les affections de l'épiderme et des ongles des   pieds.Le pédicure spécialisé réalise une anamnèse du patient et de ses antécédents,je suis entrain de travailler sur le site de Mavisil examine le pied de façon à pouvoir déterminer les soins à 
        pporter au patient. tout est possible dans la vie  Toute intervention commence par la désinfection du pied.4 sept. 2018Il traite les affections de l'épiderme et des ongles des  pieds.
         Le pédicure spécialisé réalise une anamnèse du patient et de ses antécédents, il examine le pied de façon à pouvoir déterminer les soins à 
        apporter au patient. Toute intervention commence par la désinfection du pied.4 sept.2018
        
      </div>
    </div>
  </div>
</div>
{{-- <div class="cercle">
  <div class="cercle-index-7"></div>
</div> --}}
<!-- Footer-->
@stop
