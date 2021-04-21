{{--
    Chemin :/resources/views/pages/Blog.blade.php
    Description: Affiche le contenu du blog
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
Blog
@stop
@section('content')
 <div class="cercle">
  <div class="cercle-blog-2"></div>
</div> 

<div class="container">
  <div class="row">
      <div class=" col-12  my-5 fw-bold font-sketchflow text-uppercase h1">
         mon blog
      </div>
       <div class="offset-md-1 col-md-10">
         <div class="card shadow-lg my-2">
            <div class="row">
              <div class="col-12 col-lg-8">
                 <img src=" {{ asset('images/2.png') }}" class="card-img imd-fluid w-100" alt="">
              </div>
              <div class="col-12 col-lg-4">
                  <div class="card-body h-100">
                    <div class="card-title fw-bold h1">Tire 1</div>
                    <div class="card-text">je suis le titre texteSome quick example text to build on the card title 
                        and make up the bulk of the card's content.Some quick example text to build on the card title
                         and make up the bulk of the card's content.
                    </div>
                        <a type="button" href="{{ URL::route('page.blog.show') }}" class="btn btn-outline-ColorPrivBlue text-uppercase fw-bold text-bottom mt-3">lire details</a>
                  </div>
              </div>
            </div>
         </div>
       </div>
        <div class="offset-md-1 col-md-10">
         <div class="card shadow-lg my-2">
            <div class="row"> 
              <div class="col-12 col-lg-4 order-2 order-lg-1">
                  <div class="card-body h-100">
                    <div class="card-title fw-bold h1">Tire 1</div>
                    <div class="card-text">je suis le titre texteSome quick example text to build on the card title 
                        and make up the bulk of the card's content.Some quick example text to build on the card title
                         and make up the bulk of the card's content.
                    </div>
                        <a type="button" href="{{ URL::route('page.blog.show') }}" class="btn btn-outline-ColorPrivBlue text-uppercase fw-bold text-bottom mt-3">lire details</a>
                  </div>
              </div>
              <div class="col-12 col-lg-8 order-1 order-lg-2">
                 <img src=" {{ asset('images/7.png') }}" class="card-img imd-fluid w-100" alt="">
              </div>
            </div>
         </div>
       </div>
  </div>
</div>
<div class="my-6"></div>
@stop
