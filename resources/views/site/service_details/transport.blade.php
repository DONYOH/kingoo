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
                                    Kingoo grâce au service de transport vous permet de faire vos courses en toute liberté et sécurité.
                                    Estimé votre la distance de vos courses pour savoir à l'avance le prix pour commander un conducteur.
                                    Le système de localisation retrâce votre conducteur pour ainsi commencer vos courses.
                                    Vous disposez de plusieurs type de conducteurs à savoir: nos chauffeurs professionnels, les taxi-man,
                                    les conducteurs à deux ou trois roues.
                                <br>
                                    Le service de transport de KINGOO sécurisée et fiable, vous permet de :
                                <div class="row">
                                    <div class="col-md-4">
                                        <center>
                                            <img src="{{asset('site/assets/icone/money.png')}}" class="img-fluid" style="height: 80px"><br>
                                            D'économiser
                                        </center>
                                    </div>
                                    <div class="col-md-4">
                                        <center>
                                            <img src="{{asset('site/assets/icone/help.png')}}" class="img-fluid" style="height: 80px"><br>
                                            Renforcer la confiance
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
                                <a class="btn btn-primary" href="#"> Devenir client</a>
                                <a class="btn btn-success" href="#"> Devenir conducteur</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
