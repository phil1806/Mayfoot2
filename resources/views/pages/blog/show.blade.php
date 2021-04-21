{{--
    Chemin :/resources/views/pages/blog/show.blade.php
    Description: Affiche le contenu du details d'un blog
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
Details
@stop
@section('content')
 <div class="cercle">
  <div class="cercle-blog-3"></div>
</div> 
<div class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
            <div class="fw-bold font-sketchflow text-uppercase h1 text-start h-100">
                details
            </div>
        </div>
        </div>
    </div>
</div>
<div class="m-7"></div>
<div class="">
    <div class="container "> 
    <div class="row">
        <div class="offset-1 col-5">
           <div class="h-100 position-relative">
                <img src="{{ asset('images/2.png') }}" alt="" class="img-fluid w-100 margin-image-details">
           </div>
        </div>
        <div class="col-5">
            <div class="h-100 card ">
                <div class="card-body margin-text-details ">
                        <div class="card-title fw-bold h1">Tire 1</div>
                        <div class="card-text">je suis le titre texteSome quick example text to build on the card title 
                            and make up the bulk of the card's content.Some quick example text to build on the card title
                            and make up the bulk of the card's content.je suis le titre texteSome quick example text to build on the card title 
                            and make up the bulk of the card's content.Some quick example text to build on the card title
                            and make up the bulk of the card's contentje suis le titre texteSome quick example text to build on the card title 
                            and make up the bulk of the card's content.Some quick example text to build on the card title
                            and make up the bulk of the card's content
                            e suis le titre texteSome quick example text to build on the card title 
                            and make up the bulk of the card's content.Some quick example text to build on the card title
                            and make up the bulk of the card's content.je suis le titre texteSome quick example text to build on the card title 
                            and make up the bulk of the card's content.Some quick example text to build on the card title
                            and make up the bulk of the card's contentje suis le titre texteSome quick example text to build on the card title 
                            and make up the bulk of the card's content.Some quick example text to build on the card title
                            and make up the bulk of the card's content
                        </div>
                         <a type="button" href="{{ URL::route('page.blog.index') }}" class="btn btn-outline-ColorPrivBlue text-uppercase fw-bold  mt-3">Retour</a>
                </div>              
            </div>
        </div>
    </div>
</div> 
</div>
<div class="m-7"></div>
@stop
