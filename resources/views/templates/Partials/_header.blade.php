{{--
    Chemin :/resources/views/templates/partials/_header.blade.php
    Description: Templates par default
    Données disponible: -- // --
--}}
{{--  <div class="d-flex justify-content-start"style="background-color:#6b6b6b" >
    <div >
      <a class="navbar-brand text-white fw-bold font-Reey d-block p-0 m-0" href="{{ URL::route('page.accueil') }}" style="width:133px; heigth:60px">
       <img src="{{ asset('images/logo1.png') }}" alt="" class="img-fluid">
      </a>
    </div>
</div>  --}}
<nav class="navbar navbar-expand-md Private-bg-nav navbar-dark p-1 sticky-top">
  <div class="container">
    <a class="navbar-brand text-white fw-bold font-Reey d-block p-0 m-0" href="{{ URL::route('page.accueil') }}" style="width:133px; heigth:60px">
       <img src="{{ asset('images/logo1.png') }}" alt="" class="img-fluid">
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
          <a class="nav-link text-capitalize fs-5" href="{{ URL::route('page.blog.index') }}">blog</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-capitalize fs-5" href="{{ URL::route('page.contact') }}">contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

