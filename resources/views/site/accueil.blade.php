@extends('site.layouts.index')
@section('title')
   Accueil
@endsection
@section('content')

    <section class="appie-hero-area" style="height: 700px">
        <div class="container" style="margin-top: -12%">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="appie-hero-content" style="margin-top: -10%">
                        <span style="font-size: 20px">Bienvenu sur</span>
                        <h1 class="appie-title">KINGOO</h1>
                        <p>La plateforme qui vous permet de voyager, partager et discuter.</p><br>
                        <a href="#"><img src="site/assets/images/playstore.png" alt="" style="height: 50px"></a>
                        <a href="#"><img src="site/assets/images/appstore.png" alt="" style="height: 50px"></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="appie-hero-thumb appie-hero-thumb-4">
                        <img src="site/assets/images/hero-thumb-5.png" alt="">
                        <div class="hero-dot">
                            <img src="site/assets/images/hero-dot.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-shape-1">
            <img src="site/assets/images/shape/shape-2.png" alt="">
        </div>
        <div class="hero-shape-2">
            <img src="site/assets/images/shape/shape-3.png" alt="">
        </div>
        <div class="hero-shape-3">
            <img src="site/assets/images/shape/shape-4.png" alt="">
        </div>
    </section>


    <section class="appie-service-area pt-90 pb-100" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="appie-section-title">
                        <h3 class="appie-title text-center">Qui sommes - nous ?</h3>
                        <p><b>Kingoo</b> est une plateforme électronique basée à Lomé (Togo) ayant pour ambitionne d’apporter un plus à l’évolution de
                            la technologie appliquée dans les secteurs d’activités économiques.
                            <br>Lancée en 2022, elle a pour objectifs d'amélioré le service du transport, promouvoir marketing digital et de mêttre
                            en relation plusieurs personnes dans le monde pour un max de partage sur divers plans.
                            <br>
                            De nos jours, il eu égard à la forte croissance urbaine et l’accrus des activités économiques,
                            il est nécessaire de créer un écosystème qui répond aux enjeux du
                            siècle présent par le TIC.
                            <br>
                            Nous vous proposons donc des services tels que:
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="appie-single-service text-center mt-30 wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="200ms">
                        <div class="icon">
                            <img src="{{asset('site/assets/images/icon/transport.png')}}" alt="">
                            <span>1</span>
                        </div>
                        <h4 class="appie-title">Transport</h4>
                        <p>Commander une course ou transporter des clients.
                          <a class="btn btn-outline-primary btn-sm" href="{{route('Transports')}}" target="_blank">En savoir +</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="appie-single-service text-center mt-30 item-2 wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="400ms">
                        <div class="icon">
                            <img src="{{asset('site/assets/images/icon/doveenam.png')}}" alt="">
                            <span>2</span>
                        </div>
                        <h4 class="appie-title">Doveenam</h4>
                        <p>Fait de nouvelle rencontre et discuter.<br>
                            <a class="btn btn-outline-primary btn-sm" href="{{route('Doveenam')}}" target="_blank">En savoir +</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="appie-single-service text-center mt-30 item-3 wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="600ms">
                        <div class="icon">
                            <img src="{{asset('site/assets/images/icon/kifekoi.png')}}" alt="">
                            <span>3</span>
                        </div>
                        <h4 class="appie-title">Kifekoi</h4>
                        <p>Publier vos annonces pour votre visibilité.<br>
                            <a class="btn btn-outline-primary btn-sm" href="{{route('KifeKoi')}}">En savoir +</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="appie-single-service text-center mt-30 wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="200ms">
                        <div class="icon">
                            <img src="{{asset('site/assets/images/icon/aide.png')}}" alt="">
                            <span>1</span>
                        </div>
                        <h4 class="appie-title">Solidarus</h4>
                        <p>Aide participative aux démunies et aux projets sociaux.
                            <a class="btn btn-outline-primary btn-sm" href="#" target="_blank">En savoir +</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="appie-single-service text-center mt-30 item-3 wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="600ms">
                        <div class="icon">
                            <img src="{{asset('site/assets/images/icon/eglise.png')}}" alt="">
                            <span>5</span>
                        </div>
                        <h4 class="appie-title">Cultes, Concerts et prières</h4>
                        <p>Toutes les programmes réligieuses.
                            <a class="btn btn-outline-primary btn-sm" href="{{route('KifeKoi')}}">En savoir +</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="appie-single-service text-center mt-30 wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="200ms">
                        <div class="icon">
                            <img src="{{asset('site/assets/images/icon/radio.png')}}" alt="">
                            <span>6</span>
                        </div>
                        <h4 class="appie-title">Radio</h4>
                        <p>Emissions instructives, musiques et débats.
                            <a class="btn btn-outline-primary btn-sm" href="{{route('Transports')}}" target="_blank">En savoir +</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="appie-single-service text-center mt-30 item-4 wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="800ms">
                        <div class="icon">
                            <img src="site/assets/images/icon/4.png" alt="">
                            <span>7</span>
                        </div>
                        <h4 class="appie-title">Autres</h4>
                        <p>D'autres services seront disponibles bientôt.<br>
                            <a class="btn btn-outline-primary btn-sm" href="#">En savoir +</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <br>
    <section class="appie-pricing-2-area pb-100" id="transporteur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appie-section-title text-center">
                        <h3 class="appie-title">Rejoingnez-nous</h3>
                        <div class="appie-pricing-tab-btn">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a style="background-color: #ffc107" class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Superdriver ?</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a style="background-color: #ffffff;color:black" class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Passager ?</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="pricing-one__single pricing-one__single_2 wow animated fadeInLeft">
                                        <div class="pricig-heading">
                                           <img src="{{asset('site/assets/images/m12.jpg')}}" class="img-fluid" style="height: 300px">
                                        </div>
                                        <div class="pricig-body">
                                            <img src="{{asset('site/assets/images/m1.png')}}" class="img-fluid" style="height: 275px">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="pricing-one__single pricing-one__single_2 item-2 wow animated fadeInRight">
                                        <div class="pricig-heading">
                                            <h6>Pour être un conducteur</h6>
                                            <p>Vous avez une moto, une tricycle ou une voiture en bonne état capable
                                                de mener dans un confort duc lient, veillez suivre ces recommandations ci-dessous.
                                            </p>
                                        </div>
                                        <div class="pricig-body">
                                            <h6>Comment postuler pour conduire avec Kingoo ?  </h6><br>
                                            <ul>
                                                <li><i class="fal fa-check"></i> Télécharger l'application sur playstore/AppStore.</li>
                                                <li><i class="fal fa-check"></i> Faite votre pré-inscription sur l'application ou <a href="#" onclick="alert('Bientot disponible')" >cliquez ici.</a></li>
                                                <li><i class="fal fa-check"></i> Un contrôle sera organisé pour l'activation de votre compte</li>
                                                <li><i class="fal fa-check"></i> Signez votre contrat de partenariat avec kingoo</li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="pricig-body">
                                            <h6>Avantage de conduire avec Kingoo ?  </h6><br>
                                            <ul>
                                                <li><i class="fal fa-check"></i> Rentabiliser facilement avec vos clients</li>
                                                <li><i class="fal fa-check"></i> Fidélisez avec Kingoo sur des projets à venir</li>
                                                <li><i class="fal fa-check"></i> Les paiements sont négociables avec votre propre client</li>
                                                <li><i class="fal fa-check"></i> Obtenez des bonus sur des courses</li>
                                            </ul>
                                            <div class="pricing-btn mt-35">
                                                <a class="main-btn" href="#">M'inscrire maintenant</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="pricing-one__single pricing-one__single_2 animated fadeInLeft">
                                       <img src="{{asset('site/assets/images/com.jpg')}}" class="img-fluid">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="pricing-one__single pricing-one__single_2 item-2 animated fadeInRight">
                                        <div class="pricig-body">
                                            <h6>Pour commander une courses</h6><hr>
                                            <ul>
                                                <li><i class="fal fa-check"></i> Télécharger l'application depuis playstore</li>
                                                <li><i class="fal fa-check"></i> Ou connectez-vous à votre compte web</li>
                                                <li><i class="fal fa-check"></i> Paramétrer votre courses pour avoir le montant avant la commande</li>
                                                <li><i class="fal fa-check"></i> Payer en espèce ou par mobile money</li>
                                            </ul>
                                            <div class="pricing-btn mt-35">
                                                <a class="main-btn" href="#">Commander ma course maintenant</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br> <br>
            <center >
                <img src="{{asset('site/assets/images/paiement/paiment.PNG')}}" class="img-fluid" style="height: 230px">
            </center >
        </div>
    </section>
      <hr>
    <section class="appie-download-3-area pt-90 pb-90" id="download" style="margin-top: -5%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appie-section-title text-center">
                        <h3 class="appie-title">Kingoo application mobile</h3>
                        <p>Téléchargement libre et gratuit disponible pour</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="appie-download-3-box appie-download-5-box mt-30 mr-20 wow animated fadeInLeft" data-wow-duration="2000ms" data-wow-delay="200ms">
                        <div class="content">
                            <!--<h4 class="title">Android</h4>-->
                            <a href="#"><img src="site/assets/images/playstore.png" alt="" style="height: 50px"></a>
                        </div>
                        <div class="thumb text-center">
                            <img src="site/assets/images/download-thumb-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appie-download-3-box appie-download-5-box mt-30 ml-20 wow animated fadeInRight" data-wow-duration="2000ms" data-wow-delay="400ms">
                        <div class="content">
                            <!--<h4 class="title">iOS & iPadOS</h4>-->
                            <a href="#"><img src="site/assets/images/appstore.png" alt="" style="height: 50px"></a>
                        </div>
                        <div class="thumb text-right">
                            <img src="site/assets/images/download-thumb-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="appie-traffic-area pt-1 pb-180" >
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="appie-traffic-title">
                        <h3 class="title">Version web </h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="appie-traffic-service mb-30">
                                <div class="icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <h5 class="title">Transport</h5>
                                <p>
                                    <ul>
                                        <li>Commande une course</li>
                                        <li>Souscris-toi pour gagner des clients</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="appie-traffic-service item-2 mb-30">
                                <div class="icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <h5 class="title">Doveenam</h5>
                                <p>Mini réseau social pour partager des connaissances.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="appie-traffic-service item-3">
                                <div class="icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <h5 class="title">Kifekoi</h5>
                                <p>Réseau d'affaire et de publications évènementiels</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="traffic-btn mt-50">
                                <a class="main-btn" href="#">Se connecter pour commencer<i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="traffic-thumb " style="margin-top: -5%">
            <img class="wow animated fadeInRight" data-wow-duration="2000ms" data-wow-delay="200ms" src="site/assets/images/traffic-thumb.png" alt="">
        </div>
    </section>

    <section class="appie-project-area pb-100" style="margin-top: -8%;">
        <div class="container">
            <div class="row">
                <div class="appie-signup-box" >
                    <h3 class="title">Newsletters.</h3>
                    <form action="#" >
                        <div class="input-box">
                            <input type="text" placeholder="Nom complet..." required>
                        </div>
                        <div class="input-box">
                            <input type="email" placeholder="E-mail" required>
                        </div>
                        <div class="input-box">
                            <input type="email" placeholder="Contact téléphonique" required>
                        </div>
                        <div class="appie_checkbox_common checkbox_style2">
                            <div>
                                <input type="checkbox" name="checkbox2" id="checkbox4" required>
                                <label for="checkbox4"><span></span>J'accèpte <a href="#" style="color:black"> les termes et conditions.</a></label>
                            </div>
                        </div>
                        <div class="input-box" style="margin-left: -25%">
                            <br><br>
                            <button type="submit">S'abonnez</button>
                        </div>
                    </form>
                    <div class="thumb">
                        <img src="assets/images/signup-thumb.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<br><br><br>
@endsection
