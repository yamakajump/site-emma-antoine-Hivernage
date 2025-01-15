<?php
require_once(UTILISATEUR);
if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
    $addressMail = $user->getAdresseMail();
}
else {
    header('Location: /connect');
    exit();
}
?>

<head>
    <meta charset="utf-8">
    <title>Modifier le profil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- icon du site -->
    <link href="Images/icon.ico" rel="icon">


    <!-- Icon Font Stylesheet " icon de la bar de tache " -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet " lien Admin bootstrapp " -->
    <link href="Styles/bootstrap.min.css" rel="stylesheet">

    <!-- CSS " css personnel avec nos animations " -->
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


    <!-- Content Start " centre de la page " -->
    <div class="content">
        <!-- Navbar Start -->
        <!-- Creation de la bar du haut -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-2 py-2">
            <a href="/upload" class="navbar-brand d-flex d-lg-none me-4">
                <img src="Images/bar.png" alt="logo Bar" width="100">
                <!--Image logo -->
            </a>
            <a href="" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
                <!--Nav bar deroulement  -->
            </a>
        </nav>
        <!-- Navbar End -->


        <!-- Modifier Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6">  <!-- Emain modifier -->
                    <div class="bg-secondary rounded h-100 p-4">  
                        <h6 class="mb-4">Mail</h6>
                            <?php
                                if (isset($success_mail) && $success_mail) {
                                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="fa fa-exclamation-circle me-2"></i>';
                                    echo $message; 
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                }
                                else if (isset($erreur_mail) && $erreur_mail) {
                                    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <i class="fa fa-exclamation-circle me-2"></i>';
                                    echo $message; 
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                }
                            ?>
                        <form method="post" action="/user_update" enctype='multipart/form-data'>
                            <div>
                                <label for="Modification_Mail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="Modification_Mail" name="Modification_Mail" value=<?php echo $addressMail ?> required>
                                <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec
                                    quelqu'un d'autre.
                                </div>
                            </div>
                            <div class="mb-4 form-check">
                            </div>
                            <div class="mb-5 form-check">
                            </div>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6"> <!--MOT DE PASSE modifier -->
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Mot de passe</h6>
                            <?php
                                if (isset($success_password) && $success_password) {
                                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="fa fa-exclamation-circle me-2"></i>';
                                    echo $message; 
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                }
                                else if (isset($erreur_password) && $erreur_password) {
                                    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <i class="fa fa-exclamation-circle me-2"></i>';
                                    echo $message; 
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                }
                            ?>
                        <form method="post" action="/user_update" enctype='multipart/form-data'>
                            <div class="mb-1 form-check">
                            </div>
                            <div>
                                <label for="Modification_Mdp" class="form-label">Nouveau mot de passe</label>
                                <input type="password" class="form-control" name="password1" id="Modification_Mdp"
                                    required minlength="6">
                            </div>
                            <div class="mb-1 form-check">
                            </div>
                            <div>
                                <label for="Modification_Mdp_Confirmation" class="form-label">Confirmation nouveau mot
                                    de passe</label>
                                <input type="password" class="form-control" name="password2"
                                    id="Modification_Mdp_Confirmation" required minlength="6">
                            </div>
                            <div class="form-check">
                            </div>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modifier End -->
        <?php
            require_once(VIEWS_DIR.'/footer.php');
        ?>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Javascript -->
    <script src="Script/main.js"></script>
    <script src="Script/mdpModification.js"></script>
</body>

</html>