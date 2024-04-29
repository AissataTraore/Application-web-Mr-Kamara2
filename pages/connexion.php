<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SVG Logo</title>
<link rel="stylesheet" href="../style/css/connexion.css">
</head>
<body>

    <!------------------------- NavBar ------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container-md">
            <a class="navbar-brand" href="#page-top"><img src="res/images/Tr Hospital.png" alt="Logo" /><span>Tr Hospital</span></a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button><div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-lg-0">
                    <li class="nav-item text-center"><a class="nav-link" href="#">Accueil</a></li>
                    <li class="nav-item text-center"><a class="nav-link" href="pages/services.php">Services</a></li>
                    <!-- <li class="nav-item text-center"><a class="nav-link" href="">Offres</a></li> -->
                    <li class="nav-item text-center"><a class="nav-link" href="pages/about.php">A-propos</a></li>
                    <!-- <li class="nav-item text-center"><a class="nav-link" href="connexion.php">Connexion</a></li> -->
                </ul>
            </div>
        </div>
    </nav>

<div class="screen-1">
    
        <img src="../res/images/Tr Hospital.png" class="logo">
    

    <div class="email">
        <label for="email">Email Address</label>
        <div class="sec-2">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" name="email" id="email" placeholder="Username@gmail.com">
        </div>
    </div>

    <div class="password">
        <label for="password">Mot de passe</label>
        <div class="sec-2">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="password" id="password" placeholder="············">
            <ion-icon class="show-hide" name="eye-outline"></ion-icon>
        </div>
    </div>

    <button class="login">Login</button>

    <div class="footer">
        <span>Sign up</span>
        <span>Forgot Password?</span>
    </div>
</div>

</body>
<script src=""></script>
</html>
