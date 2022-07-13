@extends('site.layouts.index')
@section('title')
    Contact
@endsection
@section('content')


    <div class="appie-page-title-area" style="height: 200px;margin-top: 18px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appie-page-title-item">
                        <h3 class="title" style="color:black">Contacts</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" ><a href="#" style="color: black">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color:black">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== APPIE PAGE TITLE PART ENDS ======-->

    <!-- Contact Start -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact--info-area">
                        <h3>Nous contacter</h3>
                        <p>
                            Nous disponible à repondre à toutes vos requêtes.
                        </p>
                        <div class="single-info">
                            <h5>Headquaters</h5>
                            <p>
                                <i class="fal fa-home"></i>
                                30 RUE 235, AGBALEPEDOGAN-GTA, IMMEUBLE CONFORTIS INTERNATION, <br> 05 BP 76 LOME- (TOGO).
                            </p>
                        </div>
                        <div class="single-info">
                            <h5>Contacts</h5>
                            <p>
                                <i class="fal fa-phone"></i>
                                (+228) XX XX XX XX<br>
                                (+420) XX XX XX XX
                            </p>
                        </div>
                        <div class="single-info">
                            <h5>Adresse électronique</h5>
                            <p>
                                <i class="fal fa-envelope"></i>
                                contact@kingoo.africa<br>
                                info@kingoo.africa
                            </p>
                        </div>
                        <div class="ab-social">
                            <h5>Suivez-nous sur</h5>
                            <a class="fac" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="twi" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="you" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="lin" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <h4>Nous écrire</h4>
                        <p>Remplissez le formulaire pour nous écrire</p>
                        <form action="#" method="post" class="row">
                            <div class="col-md-6">
                                <input type="text" name="f-name" placeholder="Nom Complet">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" placeholder="Contact téléphonique">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="suject" placeholder="Sujet">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" placeholder="En quoi pouvons-nous vous venir en aide ?"></textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="condition-check">
                                    <input id="terms-conditions" type="checkbox">
                                    <label for="terms-conditions">
                                       J'accepte toutes <a href="#">termes et conditions</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <input type="submit" name="submit" value="Envoyez message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- Contact End -->
    <h2 style="text-align: center">Localisation maps</h2>
    <br>
    <!-- Gamps Start -->
    <div class="bisylms-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5603885657038!2d1.2042660147689723!3d6.189531995519127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x820cc6e4d0882651!2zNsKwMTEnMjIuMyJOIDHCsDEyJzIzLjIiRQ!5e0!3m2!1sfr!2stg!4v1657557053837!5m2!1sfr!2stg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection