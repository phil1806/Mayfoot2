{{--
    Chemin :/resources/views/pages/Blog.blade.php
    Description: Affiche le contenu du blog
    Données disponible: $news[ $new[id, titre, content, created_at, updated_at]]
--}}

@extends('templates.master')

@section('title')
Nos-Réalisations
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12  my-5 fw-bold font-sketchflow text-uppercase h1 animate__animated animate__fadeInDown ">
            <div class="my-4">Nos réalisations</div>
        </div>
    </div>
    {{-- <div class="row">
        @foreach ($realisations as $item)
        <div class="col-md-4 p-0">
            <div class="card shadow-lg position-relative ">
                <h5 class="card-title position-absolute top-0 start-3 text-white fw-bold h3 p-2 text-capitalize">
                    {{ $item->titre }}</h5>
    <img src="{{ asset($item->image) }}" class="card-img-top" alt="image des realisations" width="236px" height="236px">
</div>
</div>
@endforeach
</div> --}}
<div class="row">
    @foreach ($realisations as $item)
    <div class="col-sm-6 col-lg-4 p-0">
        <div class="card shadow-lg position-relative ">
            <h5 class="card-title position-absolute top-0 start-3 text-white fw-bold h3 p-2 text-capitalize">
                {{ $item->titre }}</h5>
            <a href="" class="fw-bold text-capitalize fs-4 text-decoration-none " title="plus infos"
                data-bs-toggle="modal" data-bs-target="#detailsRealisation-{{ $item->id }}">
                <img src="{{ asset($item->image) }}" class="card-img-top" alt="image des realisations" width="236px"
                    height="236px">
            </a>
        </div>
        <div class="modal fade" id="detailsRealisation-{{ $item->id }}" data-bs-backdrop="static" aria-hidden="true" tabindex="-1" >
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- Header -->
                    <div class="modal-header">
                        <div class="d-flex justify-content-around w-100">
                            <div class="h5 fw-bold">Avant</div>
                            <div class="h5 fw-bold">Après</div>
                        </div>

                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Body -->
                    <div class="modal-body">
                        <div class="d-flex">
                              <img src="{{ asset($item->image) }}" alt="orthoplastie" class="w-50 d-inline mx-1">
                        <img src="{{ $item->image1 }}" alt="orthoplastie" class="w-50 d-inline">
                        </div>

                        <h5 class="modal-title fw-bold fs-4 my-1">{{ $item->titre }}</h5>

                        <div class="my-2 text-start">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
                            accusamus autem iure nihil placeat rerum nulla quasi sint, eius, pariatur, earum
                            omnis libero reiciendis ratione tempore impedit. Facere, repellat fugiat.Lorem ipsum,
                            dolor sit amet consectetur adipisicing elit. Itaque accusamus autem
                            iure nihil placeat rerum nulla quasi sint, eius, pariatur, earum
                        </div>
                    </div>
                    <!-- Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-ColorPrivBlue" data-bs-dismiss="modal">Fermer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
<div class="my-6"></div>
@stop
