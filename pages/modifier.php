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
  <?php 
        require('traitement/_connexion_bd.php');
        if(!isset($_GET['id'])){
            header("Location: dashboard.php");
        }
        $id_rdv = $_GET['id'];
        $query = $bdd->prepare('SELECT * FROM rendez_vous NATURAL JOIN medecin WHERE rendez_vous.id_rdv = ? AND rendez_vous.id_medecin = medecin.id_medecin');
        $query->execute(array($id_rdv));
        $row = $query->fetch(PDO::FETCH_ASSOC);
    ?>
  <div class="wrapper">
    <h2>Modification d'une reservation</h2>
    <form action="traitement/_modifier.php?id=<?php echo $_GET['id'] ?>&id_med=<?php echo $row['id_medecin'] ?>" method='POST'>
      <div class="input-box">
        <input type="text" placeholder="Entrez le nom de la patiente" name="nom_patient" value="<?php echo $row["nom_patient"] ?>" required/>
      </div>
      <div class="input-box">
        <input type="date" placeholder="Entrez la date" name="date" value="<?php echo $row["date"] ?>" required/>
      </div>
      <div class="input-field">
        <label>Medecin en charge</label>
        <select name="id_medecin" value="<?php echo $row['medecin.id_medecin'] ?>">
            <option value="<?php echo $row['medecin.id_medecin'] ?>" selected><?php echo $row['nom_medecin'] ?></option>
          <?php 
            $query2 = $bdd->prepare("SELECT * FROM medecin WHERE id_medecin != ? ");
            $query2->execute(array($row["id_medecin"]));
            while($res2=$query2->fetch()){
              echo '<option value="'.$res2['id_medecin'].'">'.$res2['nom_medecin'].'</option>';
            }
          ?>
        </select>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Entrer le montant de la consultation" name="montant_consultation" value="<?php echo $row["montant_consultation"] ?>" required/>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Enregistrer" />
      </div>
    </form>
  </div>
</body>

</html>