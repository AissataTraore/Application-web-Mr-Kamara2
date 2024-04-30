<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="lib/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="lib/css/owl.carousel.min.css">
    <link rel="stylesheet" href="style/css/index.css">
    <script src="lib/js/jquery-3.6.0.min.js"></script>
    <script src="lib/js/popper/popper.min.js"></script>
    <script src="lib/js/bootstrap/bootstarp.min.js"></script>
    <script src="lib/js/owl.carousel.min.js"></script>
    <script src="style/js/index.js"></script>
    <title>Accueil</title>
</head>

<body>
    <!------------------------- NavBar ------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container-md">
            <a class="navbar-brand" href="#page-top"><img src="res/images/Tr Hospital.png" alt="Logo" /><span>Tr Hospital</span></a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-lg-0">
                    <li class="nav-item text-center"><a class="nav-link" href="#">Accueil</a></li>
                    <li class="nav-item text-center"><a class="nav-link" href="pages/connexion.php">Connexion</a></li>
                    <li class="nav-item text-center"><a class="nav-link" href="pages/dashboard.php">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!------------------------- Presentation ------------------------->
    <header class="masthead">
        <div class="container containerPres js-slidein align-middle">
            <div class="masthead-subheading">Bienvenue chez <span>Tr Hospital</span></div>
            <div class="masthead-heading text-uppercase">Nous vous souhaitons prompt rétablisement!</div>
            <a class="btn btnCustom btn-primary btn-lg text-uppercase" href="pages/connexion.php">Connexion</a>
        </div>
    </header>


    <!------------------------- Services ------------------------->
    <section class="page-section js-slidein" id="services">
      <div class="container2">
          <div class="text-center titre-section">
              <h2 class="section-heading text-uppercase">Services</h2>
              <h3 class="section-subheading text-muted">Nous avons les services suivants</h3>
          </div>
          <div class="row text-center">
            <div class="services_col col-sm-6 col-md-4 mx-auto">
                <span class="fa-stack fa-3x">
                    <i class="fas fasCustom fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fasCustom fa-solid fa-passport fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Prendre rendez-vous</h4>
                <p class="text-muted">Nous simplifions vos prises de rendez-vous</p>
                <a class="btn btnCustom btn-primary btn-xl text-uppercase" href="pages/services.php">Voir plus</a>
            </div>
            <div class="services_col col-sm-6 col-md-4 mx-auto">
                <span class="fa-stack fa-3x">
                    <i class="fas fasCustom fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fasCustom fa-ticket-simple fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Modifier votre rendez-vous</h4>
                <p class="text-muted">Nous vous proposons également de modifier votre rendez-vous ou le choix du médecin.</p>
                <a class="btn btnCustom btn-primary btn-xl text-uppercase" href="pages/services.php">Voir plus</a>
            </div>
            <div class="services_col col-sm-6 col-md-4 mx-auto">
                <span class="fa-stack fa-3x">
                    <i class="fas fasCustom fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fasCustom fa-sharp fa-solid fa-map fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Annuler votre rendez-vous</h4>
                <p class="text-muted">Nous vous proposons de modifier vos rendez-vous sans vous déplacer.</p>
                <a class="btn btnCustom btn-primary btn-xl text-uppercase" href="pages/services.php">Voir plus</a>
            </div>
          </div>
          <div class="d-grid gap-2 col-lg-4 col-sm-5 mx-auto mb-4">
            <a class="btn btnCustom btn-primary btn-xl text-uppercase" href="pages/services.php">Voir tous les services</a>
          </div>
        </div>
    </section>


    <!------------------------- TEAM ------------------------->
    <section class="page-section bg-light js-slidein" id="team">
        <div class="container">
            <div class="text-center titre-section">
                <h2 class="section-heading text-uppercase">L'équipe</h2>
                <h3 class="section-subheading text-muted">Les membres principaux de notre équipe</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="res/images/Tr Hospital.png" alt="..." />
                        <h4>Aïssata Traoré</h4>
                        <p class="text-muted">Directrice</p>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Instagram Profile"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="res/images/Tr Hospital.png" alt="..." />
                        <h4>Mohamed Amadou Diop</h4>
                        <p class="text-muted">Directeur adjoint</p>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btnCustom btn-dark btn-social mx-2" href="#!" aria-label="Instagram Profile"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------- FOOTER -------------------------->
    
    <footer class="ben-footer">
      <div class="footer-row">
          <div class="footer-col">
              <img src="res/images/Tr Hospital.png" class="logo" >
          </div>
          <div class="footer-col">
              <h3>Office <div class="footer-underline"><span></span></div></h3>
              <p><b>Siège:</b></p>
              <p>Niarela, immeuble Kouma</p>
              <p>Rue 15, porte 133</p>
              <p>Bamako, Mali</p>
              <p class="email-id">Trhospital21@gmail.com</p>
              <h4>+223-20-21-21-08</h4>
          </div>
          <div class="footer-col">
              <h3>Links <div class="footer-underline"><span></span></div></h3>
              <ul>
                  <li><a href="#">Accueil</a></li>
                  <li><a href="pages/connexion.php">Connexion</a></li>
                  <li><a href="pages/dashboardtest.php">A-propos</a></li>
                  <!-- <li><a href="">Contact</a></li> -->
              </ul>
          </div>
      </div>
      <hr>
      <p class="copyright">MLSCRIPT 2022 ALL RIGHT RESERVED</p>
    </footer>

</body>

</html>