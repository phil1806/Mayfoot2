{{--
    Chemin :/resources/views/pages/soins.blade.php
    Description: Affiche le contenu de la page Nos soins
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
Nos Soins
@stop

@section('content')
<div class="position-relative">
    <img src="{{asset('images/mains-pieds.jpg') }}" alt="image de header" class="w-100">
    <div class=" text-white display-4 font-Reey text-capitalize slogan-nonSoins animate__animated animate__fadeInDown">Les
        soins Des Pieds, soins pour tous
    </div>
    <div class="row w-100 PositionCardSoins">
        <div class=" col-12 offset-md-2 col-md-8 offset-lg-3 col-lg-6">
            <div class="card text-center text-white CardSoins ">
                <div class="card-body">
                    <div class="card-title fw-bold h3">Mayfoot partout, mayFoot chez vous!!</div>
                    <p class="card-text fs-5 d-none d-sm-block">Nous faisons aussi des soins à domicile sur rendez-vous</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="marginUse"></div>
<div class="bodyPageSoins">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0 ">
                <div class="flash text-end h-100">
                    <img src="{{asset('images/baseTraitement.jpg')}}" alt="traitement de base" class="imageTraitementDeBase">
                </div>
            </div>
            <div class="col-lg-6 col-xxl-5">
                <div class="h-100 descTraitementDeBase">
                    <div class="fw-bold h6 text-uppercase pt-3 m-0">Traitement de base</div>
                    <div class="mt-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam accusantium illum quae maxime
                        pariatur perferendis eligendi neque corporis odit rem et, animi, quasi ab porro veniam ea.
                        Eveniet,
                        voluptatem! Exercitationem earum vitae voluptatum, excepturi, fuga sit aperiam in dolorum vel
                        soluta laborum dolorem repellendus qui similique laboriosam beatae. Soluta adipisci voluptatem
                    </div>
                    <div class="fw-bold h6 pt-3 text-uppercase m-0">Liste des patologies</div>
                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none text-dark mx-0 animate__animated animate__fadeInDown animate__delay-1s" title="plus infos"
                        data-bs-toggle="modal" data-bs-target="#infection">infection des pieds
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="infection" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">infection des pieds</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/infection.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">C'est quoi une infection des pieds ?
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
                                        omnis libero reiciendi
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
                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none text-dark mx-2 animate__animated animate__fadeInDown
animate__delay-2s" title="plus infos"
                        data-bs-toggle="modal" data-bs-target="#callosite">callosités
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="callosite" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize" >callosités</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/Callosite.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">C'est quoi une callosité ?
                                    </div>
                                    <div class="my-2 text-start">
                                       Les callosités correspondent à un épaississement localisé de la peau qui apparaît au niveau du pied,
		                                de la main ou du coude principalement, en réponse à des agressions répétées.
		                                Il s'agit d'un mécanisme de défense, visant à protéger les tissus. Elles sont appelées « corne » dans le langage populaire. <br>
		                                Elle peuvent apparaître en cas de port de chaussures mal adaptées, ou à haut talon, qui vont provoquer des pressions importantes sur les pieds.
		                                <br>Lors de certaines déformations du pied (pieds plats ou trop voûtés) ou de problème de posture, qui vont sur-solliciter certaines zones du pied,enfin en cas de problème de peau très sèche.
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
                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none text-dark mx-2 animate__animated animate__fadeInDown
animate__delay-3s" title="plus infos"
                        data-bs-toggle="modal" data-bs-target="#verrues">verrues
                    </a>
                    <div class="modal fade" id="verrues" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">verrues</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/verrue.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">C'est quoi une verrue ?
                                    </div>
                                    <div class="my-2 text-start">
                                       	Il s'agit de lésions cutanées ou muqueuses causées par des virus du groupe papillomavirus HPV.
			                            C'est une prolifération des cellules de l'épiderme (couche cutanée superficielle) contagieuse et auto-inoculable due à différents papillomavirus.
			                            elles sont fréquentes, notamment chez l’enfant et l’adulte jeune. Mais attention il existe plusieurs types et différents traitements.
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
                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none text-dark mx-2 animate__animated animate__fadeInDown
animate__delay-4s" title="plus infos"
                        data-bs-toggle="modal" data-bs-target="#mycoses">mycoses
                    </a>
                    <div class="modal fade" id="mycoses" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">les mycoses</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/mycose.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">C'est quoi une mycose ?
                                    </div>
                                    <div class="my-2 text-start">
                                       		Une mycose est une infection engendrée par des champignons microscopiques que l'on retrouve partout.
		                                    Leur développement est favorisé par la chaleur et l'humidité. Ainsi,
		                                    ils affectent volontiers les plis de la peau, les pieds, les ongles et les organes génitaux.
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
                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none text-dark mx-2 animate__animated animate__fadeInDown
animate__delay-5s" title="plus infos"
                        data-bs-toggle="modal" data-bs-target="#hyperkératoses">hyperkératose
                    </a>
                    <div class="modal fade" id="hyperkératoses" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">hyperkératose</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/Hyperkeratose.jpeg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">C'est quoi une hyperkératose ?
                                    </div>
                                    <div class="my-2 text-start">
                                     		L’hyperkératose, parfois appelé kératose, est un épaississement anormal de la couche la plus en surface de la peau (épiderme).
		                                    Une hyperkératose peut apparaître en cas de cors, de durillons, de verrues, d’eczéma ou de psoriasis par exemple. <br>
		                                    Elle peut être causé par les mouvements répétés qui provoquent des frottements et des pressions responsables
		                                    de l’épaississement de la peau, notamment sur les mains ou les pieds <br>
		                                    On note aussi comme cause un problème dans le renouvellement des cellules de la peau. En effet,
		                                    un déséquilibre entre fabrication de nouvelles cellules et éliminations des cellules mortes peut entraîner une accumulation,
		                                    d’où l’apparition d’un épaississement de la peau.
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
                </div>
            </div>
            <div class="col-xxl-1"></div>

        </div>
        <div class="row">
            <div class="col-xxl-1"></div>
            <div class="col-lg-6 col-xxl-5 order-2 order-lg-1">
                <div class="h-100 descTraitementSpecialise pb-2">
                    <div class="fw-bold h6 text-uppercase pt-3 m-0">traitements spécialisés</div>
                    <div class="mt-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam accusantium illum quae maxime
                        pariatur perferendis eligendi neque corporis odit rem et, animi, quasi ab porro veniam ea.
                        Eveniet,
                        voluptatem! Exercitationem earum vitae voluptatum, excepturi, fuga sit aperiam in dolorum vel
                        soluta laborum dolorem repellendus qui similique laboriosam beatae. Soluta adipisci voluptatem
                    </div>
                    <div class="fw-bold h6 pt-3 text-uppercase m-0">Liste des patologies</div>
                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none animate__animated animate__fadeInDown
animate__delay-3s" title="plus infos"
                        data-bs-toggle="modal" data-bs-target="#orthoplastie">Orthoplastie</a>
                    <!-- Modal-->
                    <div class="modal fade" id="orthoplastie" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">Orthoplastie</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/orthoplastie1.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">C'est quoi l'orthoplastie ?
                                    </div>
                                    <div class="my-2 text-start">
                                      Une techique qui consiste à mettre en place un appareillage d'un ou plusieurs orteils, sur mesure,
                                      dont le but peut-être soit de corriger une déformation ( Hallux valgus, orteil en griffe, cor interdigital, etc)
			                          soit de protéger cette déformation ou les zones qui en subissent des conséquences directes (cor dû aux frottement, ongle incarné à répétition,...).
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
                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none mx-2 animate__animated animate__fadeInDown
animate__delay-4s" title="plus infos"
                        data-bs-toggle="modal" data-bs-target="#orthonyxie">orthonyxie
                    </a>
                    <!-- Modal-->
                    <div class="modal fade" id="orthonyxie" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">orthonyxie</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/orthonyxie.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">C'est quoi l'orthonyxie ?
                                    </div>
                                    <div class="my-2 text-start">
                                        Cette technique vise à traiter les ongles incarnés ou les ongles qui lors de la marche
			                            ou même en position statique,avec ou sans chaussures, sont à l’origine de certaines douleurs.
			                            pour se faire la pose d'un appareillages pour les ongles incarnes,les  sillons douloureux est indispensable
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
                      <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none mx-2 animate__animated animate__fadeInDown
animate__delay-5s" title="plus infos"
                        data-bs-toggle="modal" data-bs-target="#onychoplastie">l'onychoplastie
                    </a>
                     <!-- Modal-->
                    <div class="modal fade" id="onychoplastie" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4">l'onychoplastie</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/onychoplastie.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">C'est quoi l'onychoplastie ?
                                    </div>
                                    <div class="my-2 text-start">
                             			  L'onychoplastie est une technique en podologie qui vise à réparer partiellement un ongle abîmé ou absent suite à un hématome.
			                              Des pansements de protection et décharge de pression, fait sur mesure en feutre ou en silicone,
			                              pour les déformations et les orteils en marteau douloureux.
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

                </div>
            </div>
            <div class="col-lg-6 p-0 order-1 order-lg-2">
                <div class="flash text-start mt-4 mt-lg-0">
                    <img src="{{asset('images/speImage.jpg')}}" alt="traitement de base" class="imageTraitementDeBase">
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<div class="text-center">
    <div class="fs-4 my-6 font-Reey" style="color:black">" Nous restons à votre disposition
        pour toutes autres questions "</div>
</div>
@stop
