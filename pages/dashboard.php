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
    <!-------------------------Navbar-------------------------------->
    <?php include("../include/header.php") ?>
    <!-------------------------Navbar-------------------------------->
    <div class="myContainer">
      <h2>Table De Renseignement</h2>
      <a href="ajout.php">
        <div class="input-box button">
              <input type="Submit" value="Ajouter d'une nouvelle reservation" />
        </div>
      </a>
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">Id Patient(e)</div>
          <div class="col col-1">Jour de Rdv</div>
          <div class="col col-1">Nom patient(e)</div>
          <div class="col col-1">Montant consultation</div>
          <div class="col col-1">Médecin</div>
          <div class="col col-1">Action</div>
        </li>
        <?php 
            require('traitement/_connexion_bd.php');
            $query = $bdd->query("SELECT * FROM rendez_vous");
            while($res=$query->fetch()){
              $query2 = $bdd->prepare("SELECT * FROM medecin WHERE id_medecin =?");
              $query2->execute(array($res['id_medecin']));
              $res2=$query2->fetch();
              echo '
              <li class="table-row">
                <div class="col col-1" data-label="Id Patient(e)">'.$res['id_rdv'].'</div>
                <div class="col col-1" data-label="Jour de Rdv">'.$res['date'].'</div>
                <div class="col col-1" data-label="Nom patient(e)">'.$res['nom_patient'].'</div>
                <div class="col col-1" data-label="Montant consultation">1'.$res['montant_consultation'].'</div>
                <div class="col col-1" data-label="Médecin">'.$res2['nom_medecin'].'</div>
                <div class="col col-1" data-label="Action">
                  <div>
                    <a href="modifier.php?id='.$res['id_rdv'].'"><i class="fa fa-pen" style="margin-right: 20px"></i></a>
                    <a href="traitement/_supprimer.php?id='.$res['id_rdv'].'"><i class="fa fa-trash" style="color: red"></i></a>
                  </div>
                </div>
              </li>
              ';
            };
          ?>
      </ul>
    </div>
  </body>
  <script src="../lib/js/bootstrap/bootstarp.min.js"></script>
  <script src="../style/js/navbar.js"></script>
</html>


