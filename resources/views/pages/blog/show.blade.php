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
                <div
                    class="fw-bold font-sketchflow text-uppercase h1 text-start h-100 animate__animated animate__fadeInDown ">
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
            <div class="col-12">
                <div class="h-100 card shadow-lg">
                    <div class="row">
                    <div class="col-md-4">
                        <div class="h-100 p-3 ">
                             <img src="{{ asset($new->image) }}" alt="image details blog" class="w-100 rounded-3" >
                        </div>
                    </div>
                    </div>
                    <div class="card-body ">
                        <div class="card-title fw-bold h1 text-capitalize">{{ $new->titre }}</div>
                        <div class="my-1 colorBlue">Date de publication :
                            <span
                                class="fw-bold colorDark">{{\Carbon\Carbon::parse($new->created_at)->format('d-m-Y') }}</span>
                        </div>
                        <div class="card-text">{!! $new->content!!} </div>
                        <a type="button" href="{{ URL::route('blog.index') }}"
                            class="btn btn-outline-ColorPrivBlue text-uppercase fw-bold  mt-3">Retour</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<div class="m-7"></div>
@stop
