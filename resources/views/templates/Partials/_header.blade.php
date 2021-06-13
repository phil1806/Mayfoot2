{{--
    Chemin :/resources/views/templates/partials/_header.blade.php
    Description: Templates par default
    Données disponible: -- // --
--}}

<nav class="navbar navbar-expand-md Private-bg-nav navbar-dark p-1 sticky-top">
  <div class="container">
    <a class="navbar-brand text-white fw-bold font-Reey d-block p-0 m-0" href="{{ URL::route('page.accueil') }}" >
       <img src="{{ asset('images/logo1.png') }}" alt="logo mayfoot"  width="133" heigth="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active mt-1 mt-md-0 fs-5" aria-current="page" href="{{ URL::route('page.accueil') }}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-capitalize fs-5" href="{{ URL::route('page.soins') }}">nos soins</a>
        </li>
            <li class="nav-item">
          <a class="nav-link text-capitalize fs-5" href="{{ URL::route('page.services') }}"> autre services</a>
        </li>
          <li class="nav-item">
          <a class="nav-link text-capitalize fs-5" href="{{ URL::route('realisations.index') }}">Nos Réalisations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-capitalize fs-5" href="{{ URL::route('blog.index') }}">blog</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-capitalize fs-5" href="{{ URL::route('page.contact') }}">contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

