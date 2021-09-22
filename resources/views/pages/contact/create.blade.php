{{--
    Chemin :/resources/views/pages/contact/create.blade.php
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
            <div class="text-uppercase fw-bold h4  animate__animated animate__fadeInDown">Contact us</div>
            <div class="fw-bold text-uppercase  animate__animated animate__fadeInDown">Accueil > contact</div>
        </div>
    </div>
</div>
<!-- bande iframme-->
<div class="mb-5 CarteDeLocolisation">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2528.9334811780004!2d5.594978115929157!3d50.66549557972712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f0868be22635%3A0xf0d9265a0954676d!2sLavaniste-Voie%20213%2C%204041%20Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1628365455718!5m2!1sfr!2sbe"
      class="w-100 h-100 imageAccueil " style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</div>

<!-- Formulaire de Contact-->
<div class="container">
    <div class="row">
        <div class="col-12 offset-xxl-1 col-md-6">
            <div class="text-uppercase fw-bold h4">Formulaire de contact</div>
            <form action="contact" method="POST" class="mb-5">
                @csrf
                <!-- Nom du client -->
                <div class="form-group">
                    <label class="form-label mt-2 fw-bold">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Nom" name="name" value="{{ old('name') }}">
                     @error('name')
                         <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                     @enderror
                </div>
                <!-- Email du client -->
                <div class="form-group">
                    <label class="form-label mt-2 fw-bold">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Name@example.com" value="{{ old('email') }}" name="email">
                     @error('email')
                         <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                     @enderror
                </div>
                <!-- Message du client -->
                <div class="form-group">
                     <label  class="form-label mt-2 fw-bold">Message</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" rows="5" placeholder="Entrez votre message..." value="{{ old('message') }}" name="message"></textarea>
                     @error('message')
                         <div class="invalid-feedback">{{ $errors->first('message') }}</div>
                     @enderror
                </div>
                <div class="my-4">
                    <button class="btn btn-outline-ColorPrivBlue w-100 text-uppercase fw-bold fs-5" type="submit">envoyer message</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-5 coordoneeContact">
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
                                    <span class="text-ColorPrivBlue">+32 492 10 55 45   /  +32 465 65 18 50 </span>
                                </span>
                            </li>
                            <li>
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                                        class="bi bi-envelope-fill mb-1" viewBox="0 0 16 16">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                    </svg>
                                    <span class="text-ColorPrivBlue">mayfoots@gmail.com</span>
                                </span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-geo-alt-fill mb-1 mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                                <a href="https://goo.gl/maps/SEoQdkxSzn1BNRGZ9" target="_blank" class="text-decoration-none text-ColorPrivBlue LinkHover">
                                  Rue Lavaniste - Voie 213/B, 4000 Liège</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
