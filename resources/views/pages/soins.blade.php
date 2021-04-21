{{--
    Chemin :/resources/views/pages/soins.blade.php
    Description: Affiche le contenu de la page Nos soins
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
contact
@stop

@section('content')
<div class="position-relative">
    <img src="{{ asset('images/mains-pieds.jpg') }}" alt="image de header " class="w-100">
    <div class=" text-white display-4 font-Reey text-capitalize slogan-nonSoins">Les
        soins Des Pieds, soins pour tous
    </div>
    <div class="row w-100 PositionCardSoins">
        <div class="offset-4 col-md-5">
            <div class="card text-center text-white CardSoins ">
                <div class="card-body">
                    <div class="card-title fw-bold h3">Mayfoot partout, mayFoot chez vous!!</div>
                    <p class="card-text fs-5">Nous faisons aussi des soins à domicile sur rendez-vous</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="marginUse"></div>
<div class="bodyPageSoins">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-0 ">
                <div class="flash">
                    <img src="{{asset('images/baseTraitement.jpg')}}" alt="traitement de base" class="w-100">
                </div>
            </div>
            <div class="col-md-5">
                <div class="h-100">
                    <div class="fw-bold h3 m-4 text-uppercase ">Traitement de base</div>
                    <div class="m-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam accusantium illum quae maxime
                        pariatur perferendis eligendi neque corporis odit rem et, animi, quasi ab porro veniam ea.
                        Eveniet,
                        voluptatem! Exercitationem earum vitae voluptatum, excepturi, fuga sit aperiam in dolorum vel
                        soluta laborum dolorem repellendus qui similique laboriosam beatae. Soluta adipisci voluptatem
                        in. Qui omnis hic repudiandae eos impedit in eaque reprehenderit blanditiis pariatur. Reiciendis
                        ullam, ab magni enim sed doloremque officiis tempora iste tenetur repellat at optio. Aliquid
                        animi ipsum possimus sed provident deserunt, veniam debitis, qui neque incidunt laboriosam
                        consequatur repudiandae in odio odit aperiam, perferendis explicabo pariatur! Temporibus
                    </div>
                    <div class="fw-bold h3 m-4 text-uppercase ">Liste des patologies</div>
                    <a href="" class="fw-bold text-capitalize fs-4 text-decoration-none text-dark mx-4">infection des
                        pieds</a>
                    <a href="" class="fw-bold text-capitalize fs-4 text-decoration-none text-dark mx-2">callosités</a>
                    <a href="" class="fw-bold text-capitalize fs-4 text-decoration-none text-dark mx-2">verrues</a>
                    <a href="" class="fw-bold text-capitalize fs-4 text-decoration-none text-dark mx-2">mycoses</a>
                    <a href=""
                        class="fw-bold text-capitalize fs-4 text-decoration-none text-dark mx-2">hyperkératoses</a>

                </div>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-md-5">
                <div class="h-100">
                    <div class="fw-bold h3 m-4 text-uppercase ">Traitement de base</div>
                    <div class="m-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam accusantium illum quae maxime
                        pariatur perferendis eligendi neque corporis odit rem et, animi, quasi ab porro veniam ea.
                        Eveniet,
                        voluptatem! Exercitationem earum vitae voluptatum, excepturi, fuga sit aperiam in dolorum vel
                        soluta laborum dolorem repellendus qui similique laboriosam beatae. Soluta adipisci voluptatem
                        in. Qui omnis hic repudiandae eos impedit in eaque reprehenderit blanditiis pariatur. Reiciendis
                        ullam, ab magni enim sed doloremque officiis tempora iste tenetur repellat at optio. Aliquid
                        animi ipsum possimus sed provident deserunt, veniam debitis, qui neque incidunt laboriosam
                        consequatur repudiandae in odio odit aperiam, perferendis explicabo pariatur! Temporibus
                    </div>
                    <div class="fw-bold h3 m-4 text-uppercase ">Liste des patologies</div>
                    <a href="" class="fw-bold text-capitalize fs-4 text-decoration-none mx-4" title="plus infos"
                        data-bs-toggle="modal" data-bs-target="#orthoplastie">Orthoplastie</a>
                    <!-- Modal-->
                    <div class="modal fade" id="orthoplastie" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4">Orthoplastie</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/orthoplastie1.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">C'est quoi l'orthoplastie ?
                                    </div>
                                    <div class="my-2 text-start">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
                                        accusamus autem
                                        iure nihil placeat rerum nulla quasi sint, eius, pariatur, earum
                                        omnis libero reiciendis
                                        ratione tempore impedit. Facere, repellat fugiat.Lorem ipsum,
                                        dolor sit amet consectetur adipisicing elit. Itaque accusamus
                                        autem
                                        iure nihil placeat rerum nulla quasi sint, eius, pariatur, earum
                                        omnis libero reiciendis
                                        ratione tempore impedit. Facere, repellat fugiat.
                                        ratione tempore impedit. Facere, repellat fugiat.
                                        ratione tempore impedit. Facere, repellat fugiat.
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
                                        accusamus autem
                                        iure nihil placeat rerum nulla quasi sint, eius, pariatur, earum
                                        omnis libero reiciendis
                                        ratione tempore impedit. Facere, repellat fugiat.Lorem ipsum,
                                        dolor sit amet consectetur adipisicing elit. Itaque accusamus
                                        autem
                                        iure nihil placeat rerum nulla quasi sint, eius, pariatur, earum
                                        omnis libero reiciendis
                                        ratione tempore impedit. Facere, repellat fugiat.
                                        ratione tempore impedit. Facere, repellat fugiat.
                                        ratione tempore impedit. Facere, repellat fugiat.
                                    </div>
                                </div>
                                <!-- Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-ColorPrivBlue"
                                        data-bs-dismiss="modal">Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="fw-bold text-capitalize fs-4 text-decoration-none text-dark mx-2">orthonyxie</a>
                    <a href="" class="fw-bold text-capitalize fs-4 text-decoration-none text-dark mx-2">l'oxychloplastie</a>
                    <a href="" class="fw-bold text-capitalize fs-4 text-decoration-none text-dark mx-2">mycoses</a>
                    <a href=""class="fw-bold text-capitalize fs-4 text-decoration-none text-dark mx-2">hyperkératoses</a>
                </div>
            </div>
            <div class="col-md-6 p-0 ">
                <div class="flash">
                    <img src="{{asset('images/speImage.jpg')}}" alt="traitement de base" class="w-100 img-fluid">
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<div class="text-center">
    <div class="fw-bold text-capitalize fs-4 my-6 font-Reey" style="color:black">" Nous Restons à votre disposition
        pour toutes autres questions "</div>
</div>
@stop
