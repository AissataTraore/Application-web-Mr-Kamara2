<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page d'enregistrement d'un nouveau produit</title>
  <link rel="stylesheet" href="../style/css/sign.css" />
  
</head>

<body>
  <!-------------------------Navbar-------------------------------->
  <?php include("../include/header.php") ?>
  <!-------------------------Navbar-------------------------------->
  <div class="wrapper">
    <h2>Ajout d'une reservation</h2>
    <form action="traitement/_ajout.php" method='POST'>
      <div class="input-box">
        <input type="text" placeholder="Entrez le nom de la patiente" name="nom_patient" required/>
      </div>
      <div class="input-box">
        <input type="date" placeholder="Entrez la date" name="date" required/>
      </div>
      <div class="input-field">
        <label>Medecin en charge</label>
        <select name="id_medecin" required>
          <?php 
            require('traitement/_connexion_bd.php');
            $query = $bdd->query("SELECT * FROM medecin");
            while($res=$query->fetch()){
              echo '<option value="'.$res['id_medecin'].'">'.$res['nom_medecin'].'</option>';
            }
          ?>
        </select>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Entrer le montant de la consultation" name="montant_consultation" required/>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Enregistrer" />
      </div>
    </form>
  </div>
</body>

</html>