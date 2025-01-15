<?php
require_once(UTILISATEUR);
if (!isset($_SESSION['user'])) {
    header('Location: /connect');
    exit();
}
?>

<head>
    <meta charset="utf-8">
    <title>Déconnexion</title>
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
    <div class="container-fluid position-relative d-flex p-0">
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="text-center align-items-center justify-content-between mb-3">
                            <h1>Déconnexion du compte réussi</h1>
                            <p>Vous allez être redirigé...</p>
        
                            <script>
                                setTimeout(function(){ window.location.href = "/connect"; }, 2000);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>