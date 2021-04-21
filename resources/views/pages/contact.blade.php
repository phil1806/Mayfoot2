{{--
    Chemin :/resources/views/pages/contact.blade.php
    Description: Affiche le contenu de la page  Autre services
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
Contact
@stop

@section('content')
<!--Bande de contact -->
<div class="p-2 bande-contact">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="text-uppercase fw-bold h4 ">Contact us</div>
            <div class="fw-bold text-uppercase">Accueil > contact</div>
        </div>
    </div>
</div>
<!-- bande iframme-->
<div class="mb-5 CarteDeLocolisation">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.385586506546!2d5.521277916102491!3d50.61995347949915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f977156b26fd%3A0x390eb45dae1a540c!2sRue%20de%20l&#39;Industrie%2039%2C%204420%20Saint-Nicolas!5e0!3m2!1sfr!2sbe!4v1618050548429!5m2!1sfr!2sbe"
        class="w-100 h-100 " style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</div>

<!-- Formulaire-->
<div class="container">
    <div class="row">
        <div class="offset-1 col-md-6">
            <div class="text-uppercase fw-bold h4">Formulaire de contact</div>
            <form action="" class="mb-5">
                <label for="exampleFormControlTextarea1" class="form-label mt-2 fw-bold">Name</label>
                <input class="form-control " type="text" placeholder="Nom" aria-label="default input example">

                <label for="exampleFormControlTextarea1" class="form-label mt-2 fw-bold">Email</label>
                <input class="form-control" type="text" placeholder="Name@example.com"
                    aria-label="default input example">

                <label for="exampleFormControlTextarea1" class="form-label mt-2 fw-bold">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                    placeholder="Entrez votre message..."></textarea>
                <div class="my-4">

                    <button class="btn btn-outline-ColorPrivBlue w-100 text-uppercase fw-bold fs-5" type="button">envoyer</button>
                </div>
            </form>
        </div>
        <div class="col-md-5">
            <div class="h-100 d-flex justify-content-end">
                <div class="h-100 d-flex">
                    <div class="align-self-center">
                        <div class="text-uppercase fw-bold h4">coordonnees</div>
                        <ul class="list-unstyled positionCoordonne">
                            <li>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                        class="bi bi-phone-fill mb-1 mr-2" viewBox="0 0 16 16">
                                        <path
                                            d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                                    </svg>
                                    <span class="text-ColorPrivBlue">04 88 89 13 62 </span>
                                </span>
                            </li>
                            <li>
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                                        class="bi bi-envelope-fill mb-1" viewBox="0 0 16 16">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                    </svg>
                                    <span class="text-ColorPrivBlue">mavis.frimpong@hotmail.be</span>
                                </span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-geo-alt-fill mb-1 mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                                <a href="https://goo.gl/maps/yfGXmZWc29B3GsjT8 " target="_blank" class="text-decoration-none text-ColorPrivBlue LinkHover"> Rue de
                                    l'industrie 39
                                    4420 Saint-Nicolas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="cercle">
  <div class="cercle-index-7"></div>
</div>  --}}
@stop
