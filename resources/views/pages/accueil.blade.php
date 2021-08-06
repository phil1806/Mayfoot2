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
    <img src="{{asset('images/firstImage.jpeg')}}" alt="image d'accueil" class="w-100 d-block imageAccueil">
    <div class="text-white slogan-accueil display-4 font-Reey position-absolute top-50 start-50 text-capitalize animate__animated animate__flipInY  animate__delay-1s animate__slower 500ms">Votre satisfaction est notre priorité</div>
</div>
<!-- Body-->
<div class="container-md py-5 py-xxl-6">
    <div class="row">
        <div class="col-12 col-md-4 col-xxl-6">
            <div class="h-100 d-flex justify-content-center">
                <div class="font-Reey display-5 align-self-center rotate_N20dreg " >MayFoot</div>
            </div>
        </div>
        <div class="col-12 col-md-8 col-xxl-6">
            <div class="ml-5 mt-6 mt-md-0">
                MayFoot crée en Mai 2021, et dirigée par la modeste <span class="fw-bolder">Mavis Frimpong</span> de santé paramédical.
                Nous exerçons dans <span class="fw-bolder">la province de Liège et ses environs (Saint-Nicolas, Montegnée, Grâce-Hollogne,
                Jemeppe, Seraing, Ans, Alleur, Awans, Crisnee, Grivegnée, Lantin…)</span>.Nos interventions se font à domicile
                ou dans notre Cabinet.
                Mayfoot proposons un panel de services tel que: <span class="fw-bold">les soins de pédicure</span> également connu sous le nom de
                soins des pieds qui se traduit tout simplement par le traitement des affections de la peau et des ongles.
                Vous souffrez d’une gêne lors de la marche, d’une présence d’un œil de perdrix ou des ongles incarnés,
                adressez-vous à MayFoot.
                En tant que spécialiste des pieds autrement dit <span class="fw-bold">pédicure-podologue</span> nous intervenons pour tout ce qui est
                traitement des maladies de la peau ou des ongles, soins hygiène, sans oublier la correction des troubles
                de la marche.
                En ce qui concerne la dynamisation de l’organise, harmonisation les fonctions vitales, soulagement des
                tensions du dos, et nerveuses, chez Mayfoot nous pratiquons une technique de massage appelée
                <span class="fw-bold">réflexologie plantaire </span> les biens faits sont parlent d’eux.
                Enfin nous proposons aussi des <span class="fw-bold">soins Palliatifs</span>, pour une prise du patient, pour une fin de vie digne,
                dans les soins et le confort.
                Comme vous pouvez pu le constater une somme une entreprise à taille humaine dévouer au besoin du client,
                établir une relation de confiance avec nos patients, occupe une grande place dans notre façon de
                travailler, alors votre satisfaction est notre priorité.
            </div>
        </div>
    </div>
</div>
{{-- <div class="cercle">
  <div class="cercle-index-7"></div>
</div> --}}
<!-- Footer-->
@stop
