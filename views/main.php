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
                    <a class="nav-link" href="#tarifs">Tarifs</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">Disponibilités</a>
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
        <img src="Images/logo.png" class="brand-img mb-3" alt="">
        <h1 class="display-2 font-weight-bold my-3">Hivernage Crossac</h1>
        <h2 class="display-4 mb-5">Emma &amp; Antoine</h2>
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
                        <p>Nous sommes Emma et Antoine et nous vous proposons de mettre en hivernage votre camping/caravane/bateaux/remorques/voitures dans nos hangars.<br>Nous vous proposons des <b>hangars fermé avec vidéos surveillance.</b></p>
                        <p>Vous pourez retrouver les tarifs dans <b>l'onglet tarifs</b> du site internet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BLOG Section  -->
    <div id="tarifs" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title">Tarifs</h2>
        <h3 class="py-5">Caravanes / bateaux / remorques / voitures</h3>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="close" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="Images/tarifs-1.jpg" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h4 class="pt20 pb20">moins de 6,5 mètres (flèche inclus)</h4>
                                <p class="text-white" style="display: inline;">Mensuel : 50€</br>Annuel : 480€ </p>
                                <p class="text-muted" style="display: inline;">(soit 40€/mois)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="py-5">Camping-car</h3>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="close" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row justify-content-center">
                    <!-- <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="Images/tarifs-1.jpg" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a class="badge badge-primary">disponible en été 2025</a></h1>
                                <h4 class="pt20 pb20">moins de 6 mètres </h4>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="Images/tarifs-2.jpg" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a class="badge badge-primary">disponible en été 2025</a></h1>
                                <h4 class="pt20 pb20">entre 6 et 7 mètres</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="Images/tarifs-3.jpg" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a class="badge badge-primary">disponible en été 2025</a></h1>
                                <h4 class="pt20 pb20">plus de 7 mètres</h4>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="Images/tarifs-2.png" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a class="badge badge-primary">disponible en été 2025</a></h1>
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
                    <h6 class="testmonial-subtitle">Caravanes / bateaux / remorques / voitures</h6>
                </div>
            </div>
            <div class="col-md-6 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title"><?php echo $placeHangard2 ?></h3>
                    <h6 class="testmonial-subtitle">Camping-cars</h6>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT Section -->
<div id="contact" class="container-fluid bg-dark text-light wow fadeIn">
    <div class="row d-flex justify-content-center align-items-center" style="min-height: 60vh;">
        <div class="col-md-4 px-0 d-flex justify-content-center align-items-center"> 
            <!-- <img src="Images/logo.png" class="brand-img mb-3" alt=""> -->
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-center align-items-center text-center">
            <h3>NOUS TROUVER</h3>
            <div class="text-muted">
                <p><span class="ti-location-pin pr-3"></span>Crossac</p>
                <p><span class="ti-support pr-3"></span> 06 95 15 42 42</p>
                <p><span class="ti-email pr-3"></span>hivernage.crossac@gmail.com</p>
            </div>
        </div>
        <div class="col-md-4 px-0 d-flex justify-content-center align-items-center">
            <div id="map" style="width: 80%; height: 80%; min-height: 400px;"></div>
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
