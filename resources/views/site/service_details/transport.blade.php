@extends('site.layouts.index')
@section('title')
    Transport
@endsection
@section('content')


    <div class="appie-page-title-area" style="height: 200px;margin-top: 18px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appie-page-title-item">
                        <h3 class="title" style="color:black">Transport</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" ><a href="#" style="color: black">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color:black">Transport</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="shop-details-area pt-100 pb-100">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="shop-details-thumb">
                        <div class="shop-details-thumb-slider-active">
                            <div class="item">
                                <img src="site/assets/images/voiture.jpg" alt="">
                                <img src="site/assets/images/zem.jpg" alt="" style="margin-top: 5px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="shop-product-details-content">
                                <h2 class="title">Transport</h2>
                                <p>
                                    Notre service de transport grâce à l'innovation technologique permet au client et au conducteur
                                    d'estimé le cout sur chaque course.
                                    Le client en étant connecté à l'application mobile peut commander une course en étant
                                    prévenu du cout avant validation selon le type de transport (Voiture climée ou simple, Taxi, tricycle et moto à deux roux)au choix.
                                    Le conducteur ayant fait une inscription et souscris chez kingoo pourra
                                    donc recevoir des notifications s'il est dans le rayon du client
                                    pour accepter une course.
                                    <br>
                                    Le service de transport de KINGOO sécurisée et fiable, vous permet de :
                                <div class="row">
                                    <div class="col-md-4">
                                        <center>
                                            <img src="{{asset('site/assets/icone/money.png')}}" class="img-fluid" style="height: 80px"><br>
                                            Gagner et économisé de l'argent
                                        </center>
                                    </div>
                                    <div class="col-md-4">
                                        <center>
                                            <img src="{{asset('site/assets/icone/help.png')}}" class="img-fluid" style="height: 80px"><br>
                                            Créer une solidarité commune
                                        </center>
                                    </div>
                                    <div class="col-md-4">
                                        <center>
                                            <img src="{{asset('site/assets/icone/securite.png')}}" class="img-fluid" style="height: 80px"><br>
                                            Sécurité et transparence
                                        </center>
                                    </div>
                                </div>
                            </div>
                            </p>
                            <hr>
                            <div class="details-info">
                                Si vous voulez devenir client ou conducteur, veillez télécharger l'application
                                mobile et enregistrer les informations nécéssaires.
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
