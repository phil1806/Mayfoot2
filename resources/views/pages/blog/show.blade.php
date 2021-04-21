{{--
    Chemin :/resources/views/pages/blog/show.blade.php
    Description: Affiche le contenu du details d'un blog
    Données disponible: $new[id, titre, content, created_at, updated_at]
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
                <img src="{{ asset($new->image) }}" alt="image de blog" class="w-100 margin-image-details">
           </div>
        </div>
        <div class="col-6">
            <div class="h-100 card ">
                <div class="card-body margin-text-details ">
                        <div class="card-title fw-bold h1 text-capitalize">{{ $new->titre }}</div>
                         <div class="my-1 colorBlue">Date de publication : <span
                                    class="fw-bold colorDark">{{\Carbon\Carbon::parse($new->created_at)->format('d-m-Y') }}</span>
                        </div>
                        <div class="card-text">{!! $new->content!!} </div>
                         <a type="button" href="{{ URL::route('blog.index') }}" class="btn btn-outline-ColorPrivBlue text-uppercase fw-bold  mt-3">Retour</a>
                </div>              
            </div>
        </div>
    </div>
</div> 
</div>
<div class="m-7"></div>
@stop
