<?php
require_once(UTILISATEUR);
require_once(PLACEHANGARDDAO);
require_once(PLACEHANGARD);
if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
    $addressMail = $user->getAdresseMail();

    $placeHangard = PlaceHangardDAO::getInstance()->findAll();
    $placeHangard1 = $placeHangard[0]->getPlaceHangard1();
    $placeHangard2 = $placeHangard[0]->getPlaceHangard2();
} else {
    header('Location: /connect');
    exit();
}
?>
<head>
    <meta charset="utf-8">
    <title>Tableau de bord</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="Images/icon.ico" rel="icon">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="Styles/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="Styles/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start  " chargement netflix style " -->
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
    
        </div>
    </div>
    <!-- Spinner End -->
    
    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <!-- Creation de la bar de gauche -->
        <nav class="navbar bg-secondary navbar-dark">
            <!-- Style Bar de nav de gauche -->
            <a class="navbar-brand mx-4 mb-3">
                <!-- Lien du logo -->
                <img src="Images/logo.png" alt="logo" width="200">
            </a>
            <div class="navbar-nav w-100">
                <!-- Bar Item lien boutton -->
                <a href="/dashboard" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Tableau
                    De Bord</a>
                <a href="/user_gestion" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Gestion Utilisateur</a>

                <a href="/user_update" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Modifier
                    Profil</a>

                <a href="/disconnect" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Se Déconnecter</a>

            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <!-- Creation de la bar du haut -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-2 py-2">
            <a href="/upload" class="navbar-brand d-flex d-lg-none me-4">
                <img src="Images/bar.png" alt="logo bar" width="100">
                <!--Image logo -->
            </a>
            <a href="" class="sidebar-toggler">
                <i class="fa fa-bars"></i>
                <!--Nav bar deroulement  -->
            </a>
        </nav>
        <!-- Navbar End -->


        <!-- Content Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6">  
                    <div class="bg-secondary rounded h-100 p-4">  
                        <h6 class="mb-4">Hangar caravane</h6>
                        <div class="scroll-wrapper text-center">
                            <button id="scrollUpBtn1" class="btn btn-primary" onclick="scrollContentHangard1(1)">↑</button>

                            <div id="numberPlaceHangard1" class="my-sm-3"><?php echo $placeHangard1 ?></div>

                            <button id="scrollDownBtn1" class="btn btn-primary" onclick="scrollContentHangard1(-1)">↓</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Hangar camping-car</h6>
                        <div class="scroll-wrapper text-center">
                            <button id="scrollUpBtn2" class="btn btn-primary" onclick="scrollContentHangard2(1)">↑</button>

                            <div id="numberPlaceHangard2" class="my-sm-3"><?php echo $placeHangard2 ?></div>

                            <button id="scrollDownBtn2" class="btn btn-primary" onclick="scrollContentHangard2(-1)">↓</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-12"> <!--MOT DE PASSE modifier -->
                    <div class="bg-secondary rounded h-100 p-4 text-center">
                        <h1 class="mb-4">Valider la modification</h1>
                        <form method="post" action="/dashboard" enctype='multipart/form-data'>
                            <input type="hidden" id="place_hangard_1" name="place_hangard_1" value= <?php echo $placeHangard1 ?>>
                            <input type="hidden" id="place_hangard_2" name="place_hangard_2" value= <?php echo $placeHangard2 ?>>
                            <button type="submit" class="btn btn-lg btn-primary m-2">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->
        <?php
            require_once(VIEWS_DIR.'/footer.php');
        ?>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Javascript -->
    <script src="Script/main.js"></script>
    <script src="Script/dashboard.js"></script>
</body>

</html>
