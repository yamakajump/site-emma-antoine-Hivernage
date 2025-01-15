<head>
    <meta charset="utf-8">
    <title>Connexion</title>
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
    <link href="Styles/style_main_site.css" rel="stylesheet">
</head>

<body>
    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 form-width">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a>
                            <!-- Lien du logo -->
                            <img src="Images/logo.png" alt="logo" width="200">
                        </a>
                        <h3>Se connecter</h3>   <!--texte coté du logo-->
                    </div>
                    <form method="post" action="/connect" enctype='multipart/form-data'>
                        <div class="form-floating mb-3">                           <!--mail-->     
                            <input type="email" class="form-control" id="singUp_Email" placeholder="name@example.com"
                                name="email" required>
                            <label class="color-gray-dark">Adresse Email</label>
                        </div>
                        <div class="form-floating mb-4">                             <!--mot de passe -->
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                name="passwd" required minlength="6">
                            <label class="color-gray-dark">Mot de passe</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">    <!--Check non fonctionnel-->
                                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Se connecter</button>             <!-- bouton de connexion envoi du formulaire-->
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>



    <!-- Javascript -->
    <script src="Script/main.js"></script>
</body>

</html>