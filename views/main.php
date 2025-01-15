<?php
require_once(PLACEHANGARDDAO);
require_once(PLACEHANGARD);
$placeHangard = PlaceHangardDAO::getInstance()->findAll();
$placeHangard1 = $placeHangard[0]->getPlaceHangard1();
$placeHangard2 = $placeHangard[0]->getPlaceHangard2();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hivernage Crossac pour vos camping/caravane dans nos hangars.">
    <meta name="author" content="yamakajump">
    <title>Hivernage Crossac</title>
   
    <!-- Favicon -->
    <link href="Images/icon.ico" rel="icon">
    
    <!-- font icons -->
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="vendors/animate/animate.css">

    <!-- Bootstrap + main styles -->
	<link rel="stylesheet" href="Styles/style_main_site.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tarifs">Tarifs</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="Images/logo.png" class="brand-img" alt="">
                <span class="brand-txt">Hivernage Crossac</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">Disponibilité</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Hivernage Crossac</h1>
            <h2 class="display-5 mb-5">Caravanes/Camping-cars/remorques/bâteaux/...</h2>
            <!-- <a class="btn btn-lg btn-primary" href="#gallary">View Our gallary</a> -->
        </div>
    </header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">À propos</h2>
                        <p>Nous vous proposons des solutions de stockage sécurisé pour vos véhicules de loisirs. </br> 
                        Deux possibilités s'offrent à vous : </br>
                        - hangar ouvert avec vidéos surveillance </br>
                        - hangar fermé avec vidéos surveillance </p>

                        <p>Nous sommes situés sur la commune de Crossac, à seulement 15 minutes de Saint-Nazaire et 10 minutes de Pontchâteau</p>

                        <p>Explorez notre site internet pour en apprendre davantage sur nos emplacements d'hivernage, nos tarifs et les mesures de sécurité que nous mettons en place pour assurer la tranquillité d'esprit de nos clients.</p>
                        <p>N'hésitez pas à nous contacter pour toute question ou pour réserver votre place dès maintenant.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  gallary Section  -->
    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">Photos</h2>
    </div>
    <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-1.jpg" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-2.jpg" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-3.jpg" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-4.jpg" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-5.jpg" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-6.jpg" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-7.jpg" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-8.jpg" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-9.jpg" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-10.jpg" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-11.jpg" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="Images/gallary-12.jpg" class="gallary-img">
        </div>
    </div>

    <!-- BLOG Section  -->
    <div id="tarifs" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">Tarifs</h2>
        <div class="row justify-content-center">
            <div class="col-sm-7 col-md-5 mb-5">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#close" role="tab" aria-controls="pills-home" aria-selected="true">Fermé & Vidéo-surveillance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#open" role="tab" aria-controls="pills-profile" aria-selected="false">Couvert & Vidéo-surveillance</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="close" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="Images/tarifs-1.jpg" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a class="badge badge-primary">50€</a></h1>
                                <h4 class="pt20 pb20">- de 6 mètres </h4>
                                <p class="text-white" style="display: inline;">Mensuel : 50€</br>Annuel : 480€ </p>
                                <p class="text-muted" style="display: inline;">(soit 40€/mois)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="Images/tarifs-2.jpg" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a class="badge badge-primary">60€</a></h1>
                                <h4 class="pt20 pb20">entre 6 et 7 mètres</h4>
                                <p class="text-white" style="display: inline;">Mensuel : 60€</br>Annuel : 600€ </p>
                                <p class="text-muted" style="display: inline;">(soit 50€/mois)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="Images/tarifs-3.jpg" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a class="badge badge-primary">65€</a></h1>
                                <h4 class="pt20 pb20">Plus de 7 mètres</h4>
                                <p class="text-white" style="display: inline;">Mensuel : 65€</br>Annuel : 660€ </p>
                                <p class="text-muted" style="display: inline;">(soit 55€/mois)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="open" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="Images/tarifs-1.jpg" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a class="badge badge-primary">40€</a></h1>
                                <h4 class="pt20 pb20">- de 6 mètres</h4>
                                <p class="text-white" style="display: inline;">Mensuel : 40€</br>Annuel : 360€ </p>
                                <p class="text-muted" style="display: inline;">(soit 30€/mois)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="Images/tarifs-2.jpg" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a class="badge badge-primary">45€</a></h1>
                                <h4 class="pt20 pb20">entre 6 et 7 mètres</h4>
                                <p class="text-white" style="display: inline;">Mensuel : 45€</br>Annuel : 420€ </p>
                                <p class="text-muted" style="display: inline;">(soit 35€/mois)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-transparent border">
                            <img src="Images/tarifs-3.jpg" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a class="badge badge-primary">50€</a></h1>
                                <h4 class="pt20 pb20">Plus de 7 mètres</h4>
                                <p class="text-white" style="display: inline;">Mensuel : 50€</br>Annuel : 480€ </p>
                                <p class="text-muted" style="display: inline;">(soit 40€/mois)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- REVIEWS Section  -->
    <div id="testmonial" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
        <h2 class="section-title my-5 text-center">Places disponibles</h2>
        <div class="row mt-3 mb-5">
            <div class="col-md-6 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title"><?php echo $placeHangard1 ?></h3>
                    <h6 class="testmonial-subtitle">Hangar fermé & Vidéo-surveillance</h6>
                </div>
            </div>
            <div class="col-md-6 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title"><?php echo $placeHangard2 ?></h3>
                    <h6 class="testmonial-subtitle">Hangar couvert & Vidéo-surveillance</h6>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT Section  -->
    <div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">
            <div class="col-md-6 px-0">
                <div id="map" style="width: 100%; height: 100%; min-height: 400px"></div>
            </div>
            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>NOUS TROUVER</h3>
                <div class="text-muted">
                    <p><span class="ti-location-pin pr-3"></span>44160 Crossac</p>
                    <p><span class="ti-support pr-3"></span> 06 95 15 42 42</p>
                    <p><span class="ti-email pr-3"></span>adresseADefinir@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>EMAIL</h3>
                <P class="text-muted">adresseADefinir@gmail.com</P>
            </div>
            <div class="col-sm-4">
                <h3>TÉLÉPHONE</h3>
                <P class="text-muted">06 95 15 42 42</P>
            </div>
            <div class="col-sm-4">
                <h3>ADRESSE</h3>
                <P class="text-muted">44160 Crossac</P>
            </div>
        </div>
    </div>  
    <!-- end of page footer -->

	<!-- core  -->
    <script src="vendors/jquery/jquery-3.4.1.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="vendors/wow/wow.js"></script>
    
    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8EoB1gBCiNMOrXK3hNNkk-FEgn7kamVY&callback=initMap"></script>

    <!-- js -->
    <script src="Script/main.js"></script>

</body>
</html>
