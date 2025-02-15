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
    <title>Hivernage de véhicules à Crossac | Stockage sécurisé en Pays de la Loire</title>
    <meta name="description" content="Hivernage sécurisé pour votre véhicule à Crossac Loire-Atlantique. Hangars fermés, vidéosurveillance et accès par badge. Réservez votre emplacement !">
   
    <!-- Favicon -->
    <link href="Images/icon.ico" rel="icon">
    
    <!-- font icons -->
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="vendors/animate/animate.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">

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
                    <a class="nav-link" href="#testmonial">Disponibilités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tarifs">Tarifs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav">
            </ul>
        </div>
    </nav>
    <!-- header -->
    <header id="home" class="header">
    <div class="overlay text-white text-center">
        <img src="Images/logo.png" class="brand-img mb-3" alt="logo caravane hangar fermé">
        <h1 class="display-2 font-weight-bold my-3">AED Hivernage</h1>
        <h1 class="display-3 font-weight-bold my-3">Crossac</h1>
        <!-- <a class="btn btn-lg btn-primary" href="#gallary">View Our gallary</a> -->
    </div>
</header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="/Images/about-section1.jpg" alt="bateau et caravane dans un hangar fermé avec vidéosurveillance et extincteur pour la protection incendie">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="/Images/about-section2.jpg" alt="Hangar d'hivernage fermé avec une porte d'accès à serrure connectée et badge">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="/Images/about-section3.jpg" alt="Hangar d'hivernage éclairé avec des places de disponibles pour louer un emplacement">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>



            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">À propos</h2>
                        <p>Nous sommes Emma et Antoine et nous vous proposons de mettre en hivernage votre camping-car, caravane, bateau, remorque ou voiture dans nos hangars.<br>Nous vous proposons des <b>hangars fermés avec vidéosurveillance.</b></p>
                        <p>Vous pourrez retrouver les tarifs dans <b> <a class="nav-link-bis" href="#tarifs">l'onglet tarifs</a></b> du site internet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AVAILABILITY Section  -->
    <div id="testmonial" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
        <h2 class="section-title my-5 text-center">Places disponibles</h2>
        <div class="row mt-3 mb-5">
            <div class="col-md-6 my-3 my-md-0">
                <div class="testmonial-card">
                <h6 class="testmonial-subtitle">Hangar 1</h6>
                <h6 class="testmonial-little-subtitle">Caravanes / bateaux / remorques / voitures</h6>
                    <h3 class="testmonial-title"><?php echo $placeHangard1  . " places disponibles";?></h3>
                </div>
            </div>
            <div class="col-md-6 my-3 my-md-0">
                <div class="testmonial-card">
                <h6 class="testmonial-subtitle">Hangar 2</h6>
                <h6 class="testmonial-little-subtitle">Camping-cars</h6>
                <h6 class="testmonial-middle-subtitle">Disponible à partir de l'été 2025</h6>
                <a href="mailto:hivernage.crossac@gmail.com" class="custom-link">Je m'inscris sur la liste d'attente par mail</a>
                    <!--<h3 class="testmonial-title"><//?php echo $placeHangard2 ?></h3>-->
                </div>
            </div>
        </div>
    </div>

    <!-- TARIF Section  -->     
    <div id="tarifs" class="div-space-tarif"></div>
    <div id="tarifs" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title">Tarifs</h2>
        <div class="image-container">
        <img id="clickableImageHangar1" src="Images/1.png" alt="Tarifs pour véhicules de moins de 6 mètres de long" style="cursor: pointer;">
        <img id="clickableImageHangar2" src="Images/4.png" alt="Tarifs pour véhicules de max 8 mètre de long et 3 mètre 50 de haut" style="cursor: pointer;">
    </div>        
    </div>

    <script>
        /*HANGAR 1*/
    // Fonction qui change l'image au clic
    document.getElementById("clickableImageHangar1").onclick = function() {
        console.log("L'image a été cliquée !" + this.src.split('/').pop());
        const currentImage = this.src.split('/').pop();
        if(currentImage === "2.png"){
        this.src = "Images/3.png"
        }
        else this.src = "Images/2.png"
    };
    // Fonction qui change l'image quand on passe dessus
    document.getElementById("clickableImageHangar1").onmouseover = function() {
        const currentImage = this.src.split('/').pop();
        if(currentImage === "1.png"){
        this.src = "Images/2.png"
        }
    };    
    // Fonction qui change l'image quand on part d'elle
    document.getElementById("clickableImageHangar1").onmouseout = function() {
        const currentImage = this.src.split('/').pop();
        if(currentImage === "2.png"){
        this.src = "Images/1.png"
        }
    };
        /*HANGAR 2*/
    // Fonction qui change l'image au clic
    document.getElementById("clickableImageHangar2").onclick = function() {
        console.log("L'image a été cliquée !" + this.src.split('/').pop());
        const currentImage = this.src.split('/').pop();
        if(currentImage === "5.png"){
        this.src = "Images/6.png"
        }
        else this.src = "Images/5.png"
    };
    // Fonction qui change l'image quand on passe dessus
    document.getElementById("clickableImageHangar2").onmouseover = function() {
        const currentImage = this.src.split('/').pop();
        if(currentImage === "4.png"){
        this.src = "Images/5.png"
        }
    };    
    // Fonction qui change l'image quand on part d'elle
    document.getElementById("clickableImageHangar2").onmouseout = function() {
        const currentImage = this.src.split('/').pop();
        if(currentImage === "5.png"){
        this.src = "Images/4.png"
        }
    };
    </script>


    <!-- CONTACT Section -->
     
<div id="contact" class="div-space"></div>
<div class="footer">
    <div class="footer-content">
        <div class="footer-text">
            <h3 class="footer-title">NOUS TROUVER</h3>
            <div class="contact-info">
                <p><span class="icon">&#x1F4CD;</span><a href="https://maps.app.goo.gl/btdjFF3yzk5dA1QY9" target="_blank">Crossac</a></p>
                <p><span class="icon">&#x260E;</span> 06 95 15 42 42</p>
                <p><span class="icon">&#x2709;</span><a href="mailto:hivernage.crossac@gmail.com">hivernage.crossac@gmail.com</a></p>
            </div>
            <div class="location-info">
                <p>-------------------------------------------</p>
                <p><span class="icon">&#128337;</span>  A <b>12 minutes </b>de Pontchâteau</p>
                <p><span class="icon">&#128337;</span>  A <b>18 minutes </b>de Savenay</p>
                <p><span class="icon">&#128337;</span>  A <b>20 minutes </b>de Saint-Nazaire</p>
            </div>
        </div>
        <div id="map"></div>
    </div>
</div>


<div class="footer-space"></div>

    <!-- end of page footer -->

	<!-- core  -->
    <script src="vendors/jquery/jquery-3.4.1.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="vendors/wow/wow.js"></script>
    
    <!-- google maps 
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8EoB1gBCiNMOrXK3hNNkk-FEgn7kamVY&callback=initMap"></script>
    -->
    <!-- js -->
    <script src="Script/main.js"></script>


    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
    // Initialiser la carte et définir les coordonnées du centre (+ zoom)
    var map = L.map('map').setView([47.3821263, -2.1311559], 11); // Coordonnées de la Tour Eiffel (exemple)

    // Ajouter une couche de tuiles (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Ajouter un marqueur avec un popup
    /*L.marker([47.4132975, -2.1703916]).addTo(map)
        .bindPopup("Crossac")
        .openPopup();*/

    // Création d'un cercle avec un rayon de 500 mètres autour de Crossac
    L.circle([47.3821263, -2.1311559], {
        color: 'blue', // Couleur de la bordure
        fillColor: '#30a2d1', // Couleur du fond
        fillOpacity: 0.3, // Opacité du fond
        radius: 2500 // Rayon en mètres
    }).addTo(map)
    .bindPopup("Zone autour de Crossac");
    </script>

</body>
</html>
