<?php
require_once(UTILISATEUR);
require_once(UTILISATEURDAO);
if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
    $addressMail = $user->getAdresseMail();

    $allUsers = UtilisateurDAO::getInstance()->findAll();
}
else {
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
            <div class="col-sm-12 bg-secondary text-center rounded py-sm-6 justify-content-center row mx-0">
                <div class="col-md-10">
                    <h1 class="display-5 fw-bold text-white">Gestion Utilisateur</h1>
                    <hr class="bg-light">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <ul class="list-group text-start">
                                <?php foreach ($allUsers as $user) : ?>
                                    <li class="list-group-item bg-transparent svg">
                                        <?php echo $user->getAdresseMail() ?>
                                        <a href="/user_update?email=<?php echo $user->getAdresseMail() ?>" class="btn btn-primary float-end mx-1">Supprimer</a>
                                        <a href="/user_delete?email=<?php echo $user->getAdresseMail() ?>" class="btn btn-warning float-end mx-1">reset psw</a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
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
</body>

</html>