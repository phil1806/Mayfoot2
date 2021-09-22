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
    <div class=" text-white display-4 font-Reey text-capitalize slogan-nonSoins animate__animated animate__fadeInDown">
        Les
        soins Des Pieds, soins pour tous
    </div>
    <div class="row w-100 PositionCardSoins">
        <div class=" col-12 offset-md-2 col-md-8 offset-lg-3 col-lg-6">
            <div class="card text-center text-white CardSoins ">
                <div class="card-body">
                    <div class="card-title fw-bold h3">Mayfoot partout, mayFoot chez vous!!</div>
                    <p class="card-text fs-5 d-none d-sm-block">Nous faisons aussi des soins à domicile sur rendez-vous
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="marginUse"></div>
<div class="bodyPageSoins container">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-6 p-0 ">
                <div class="flash text-end h-100">
                    <img src="{{asset('images/baseTraitement.jpg')}}" alt="traitement de base"
                        class="imageTraitementDeBase">
                </div>
            </div>
            <div class="col-lg-6 col-xxl-5">
                <div class="h-100 descTraitementDeBase">
                    <div class="fw-bold h6 text-uppercase pt-3 m-0">Traitement de base</div>
                    <div class="mt-1">
                        La plupart des pathologies au pied sont bénignes et passagères, mais d’autres peuvent être le
                        signe d’une maladie du pied qu’il faudrait traiter le plus tôt possible.
                        Chez Mayfoot, nous vous permettons de retrouver le bonheur de marcher et la sensation agréable
                        de vos pieds en traitant ces pathologies :

                    </div>
                    <div class="fw-bold h6 pt-3 text-uppercase m-0">Liste des patologies</div>

                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none text-dark  animate__animated animate__fadeInDown
animate__delay-2s" title="plus infos" data-bs-toggle="modal" data-bs-target="#callosite">callosités
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="callosite" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">callosités (définition et
                                        symtômes)</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/Callosite.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">Définition</div>
                                    <div class="my-2 text-start">
                                        Les callosités correspondent à un épaississement localisé de la peau qui
                                        apparaît au niveau du pied,
                                        de la main ou du coude principalement, en réponse à des agressions répétées.
                                        Il s'agit d'un mécanisme de défense, visant à protéger les tissus. Elles sont
                                        appelées « corne » dans le langage populaire. <br>
                                        Elle peuvent apparaître en cas de port de chaussures mal adaptées, ou à haut
                                        talon, qui vont provoquer des pressions importantes sur les pieds.
                                        <br>Lors de certaines déformations du pied (pieds plats ou trop voûtés) ou de
                                        problème de posture, qui vont sur-solliciter certaines zones du pied,enfin en
                                        cas de problème de peau très sèche.
                                    </div>
                                    <div class="h4 text-start my-2 fw-bold">Symtôtmes</div>
                                    <div>Les symptômes des callosités apparaissent :</div>
                                    <div>
                                        <ul>
                                            <li>sous la forme de large zone épaisse et dure de la peau </li>
                                            <li>sous la forme de couleur jaunâtre</li>
                                        </ul>
                                    </div>
                                    <div>Les douleurs sont vives quand on s’appuie sur la plante des pieds pouvant aller
                                        de la douleur aigue à une inflammation.</div>
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

                    <!-- Modal -->
                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none text-dark mx-2 animate__animated animate__fadeInDown
animate__delay-3s" title="plus infos" data-bs-toggle="modal" data-bs-target="#verrues">verrues plantaires
                    </a>
                    <div class="modal fade" id="verrues" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">verrues plantaires (définition
                                        et symtômes)</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/verrue.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">Définition</div>

                                    <div class="my-2 text-start">
                                        Les verrues plantaires sont de petites bosses rugueuses sous forme ronde ou
                                        plate qui se forment dans les couches externes de la peau.
                                        Elles peuvent entraîner des douleurs quand elles déforment un ongle des pieds,
                                        ou si elles sont situées sur la plante des pieds et gênent la marche.
                                    </div>
                                    <div class="h4 text-start my-2 fw-bold">Symtômes</div>
                                    <div>Les symptômes des verrues plantaires sont reconnaissables :</div>
                                    <div>
                                        <ul>
                                            <li>Par la douleur : Elles sont souvent douloureuses quand on effectue une pression sur la plante des pieds et elles empêchent de se tenir debout et droit.</li>
                                            <li>Par l’apparence : Ce sont de petites bosses à la couleur jaunâtre ou brunâtre avec également de petits points noirs.</li>
                                        </ul>
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

                    <!-- Modal -->
                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none text-dark mx-2 animate__animated animate__fadeInDown
                    animate__delay-4s" title="plus infos" data-bs-toggle="modal" data-bs-target="#mycoses">mycoses
                    </a>
                    <div class="modal fade" id="mycoses" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">les mycoses (Définition et symtômes)</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/mycose.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">Définition </div>
                                    <div class="my-2 text-start">
                                        Une mycose est une infection engendrée par un champignon microscopique appelé <span class="fw-bold">le dermatophyte.</span> que
                                        l'on retrouve partout.
                                        Leur développement est favorisé par la chaleur et l'humidité. Ainsi,
                                        ils affectent volontiers les plis de la peau, les pieds, les ongles et les
                                        organes génitaux.
                                    </div>
                                    <div class="h4 text-start my-2 fw-bold">Symtômes</div>
                                    <div>Les symptômes des mycoses sont variés :</div>
                                    <div>
                                        <ul>
                                            <li>Changement de la couleur des ongles et la peau devenant sèche</li>
                                            <li>Démangeaison pouvant être légère ou persistante</li>
                                            <li>Diffusion d’odeurs désagréables</li>
                                            <li>Coupures douloureuses entre les orteils</li>
                                        </ul>
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

                    <!-- Modal -->
                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none text-dark mx-2 animate__animated animate__fadeInDown
                        animate__delay-5s" title="plus infos" data-bs-toggle="modal" data-bs-target="#hyperkératoses">hyperkératose
                    </a>
                    <div class="modal fade" id="hyperkératoses" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">hyperkératose (Définition et Symtômes)</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/Hyperkeratose.jpeg') }}" alt="orthoplastie"
                                        class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">Définition</div>
                                    <div class="my-2 text-start">
                                        L’hyperkératose, parfois appelé kératose, est un épaississement anormal de la
                                        couche la plus en surface de la peau (épiderme).
                                        Une hyperkératose peut apparaître en cas de cors, de durillons, de verrues,
                                        d’eczéma ou de psoriasis par exemple. <br>
                                        Elle peut être causé par les mouvements répétés qui provoquent des frottements
                                        et des pressions responsables
                                        de l’épaississement de la peau, notamment sur les mains ou les pieds <br>
                                        On note aussi comme cause un problème dans le renouvellement des cellules de la
                                        peau. En effet,
                                        un déséquilibre entre fabrication de nouvelles cellules et éliminations des
                                        cellules mortes peut entraîner une accumulation,
                                        d’où l’apparition d’un épaississement de la peau.
                                    </div>
                                    <div class="h4 text-start my-2 fw-bold">Symtômes</div>
                                    <div>Les symptômes se manifestent par :</div>
                                    <div>
                                        <ul>
                                            <li>Un épaississement important de la peau</li>
                                            <li>Une perte de sensibilité de la zone touchée</li>
                                            <li>Une apparence dure et sèche de la peau</li>
                                            <li>Une coloration de la peau variant du gris au jaune</li>
                                            <li>Une fissuration de la peau</li>
                                        </ul>
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
                         Vous avez des déformations d’un ou plusieurs orteils ? Vous souffrez des ongles incarnés ?
                        Vous avez un ou des ongles abîmés et qui ne repoussent  plus ? Ne vous angoissez plus car MAYFOOT offre
                        des traitements spécialisés pour que <span class="fw-bold">vos pieds redeviennent beaux comme celui d’un bébé</span>.
                        Dans son institut de soin, MAYFOOT procure comme traitements spécialisés :
                    </div>
                    <div class="fw-bold h6 pt-3 text-uppercase m-0">Liste des patologies</div>
                    <a href="" class="fw-bold text-capitalize fs-5 text-decoration-none animate__animated animate__fadeInDown
animate__delay-3s" title="plus infos" data-bs-toggle="modal" data-bs-target="#orthoplastie">L'orthoplastie</a>
                    <!-- Modal-->
                    <div class="modal fade" id="orthoplastie" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">L'orthoplastie</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/orthoplastie1.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">C'est quoi l'Orthoplastie ?
                                    </div>
                                    <div class="my-2 text-start">
                                       L’orthoplastie est un moulage ou appareillage permettant de corriger une fonction déficiente ou une déformation d’un ou plusieurs orteils. L’appareillage est amovible et faite sur mesure pour  soigner le patient  tout en lui offrant un certain confort.
                                        L’orthoplastie est une solution aux problèmes de frottements entre les orteils, les chevauchements entre eux ou encore leurs malformations.

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
animate__delay-4s" title="plus infos" data-bs-toggle="modal" data-bs-target="#orthonyxie">l'orthonyxie
                    </a>
                    <!-- Modal-->
                    <div class="modal fade" id="orthonyxie" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold fs-4 text-capitalize">l'orthonyxie </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Body -->
                                <div class="modal-body">
                                    <img src="{{ asset('images/orthonyxie.jpg') }}" alt="orthoplastie" class="w-100">
                                    <div class="h4 text-start my-2 fw-bold">C'est quoi l'orthonyxie ?
                                    </div>
                                    <div class="my-2 text-start">
                                  L’orthoplastie est un appareillage de l’ongle qui a pour objectif de corriger les courbures excessives de l’ongle et ainsi traiter ou prévenir la formation de l’ongle incarné.
                                  Ce traitement spécialisé peut être mis en place pour les patients présentant une déformation ou une mauvaise repousse des ongles créant des douleurs extrêmes.

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
animate__delay-5s" title="plus infos" data-bs-toggle="modal" data-bs-target="#onychoplastie">l'onychoplastie
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
                                    L’onychoplastie est une technique qui a pour but de réparer partiellement un ongle abîmé ou totalement un ongle absent suite à un choc. Elle permet la reconstitution de l’ongle à son origine.
                                    L’onychoplastie est faite à base de gel dentaire ou résine dentaire photo-polymérisable. Esthétiquement, elle se présente comme un ongle naturel.

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
    <div class="h3 my-6 fw-bold text-capitalize " style="color:black">"Avec mayfoot, N'ayez plus honte, prenez votre
        pied ! "</div>
</div>
@stop
