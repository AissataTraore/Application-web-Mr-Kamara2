<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../style/css/dashboardtest.css" />
    <link rel="stylesheet" href="../style/css/navbar.css">
    <link rel="stylesheet" href="../lib/css/bootstrap/bootstrap.css">
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
                    <li class="nav-item text-center"><a class="nav-link" href="pages/services.php">Services</a></li>
                    <!-- <li class="nav-item text-center"><a class="nav-link" href="">Offres</a></li> -->
                    <li class="nav-item text-center"><a class="nav-link" href="pages/about.php">A-propos</a></li>
                    <!-- <li class="nav-item text-center"><a class="nav-link" href="connexion.php">Connexion</a></li> -->
                </ul>
            </div>
        </div>
    </nav>


    <div class="myContainer">
      <h2>Table De Renseignement <small></h2>
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">Id Patient(e)</div>
          <div class="col col-1">Jour de Rdv</div>
          <div class="col col-1">Nom patient(e)</div>
          <div class="col col-1">Montant consultation</div>
          <div class="col col-1">Médecin</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Id Patient(e)">42235</div>
          <div class="col col-1" data-label="Jour de Rdv">26/04/2024</div>
          <div class="col col-1" data-label="Nom patient(e)">Mariam Sidibé</div>
          <div class="col col-1" data-label="Montant consultation">1500</div>
          <div class="col col-1" data-label="Médecin">Mariam Sylla</div>
        </li>
      </ul>
    </div>
  </body>
  <script src="../lib/js/bootstrap/bootstarp.min.js"></script>
  <script src="../style/js/navbar.js"></script>
</html>


