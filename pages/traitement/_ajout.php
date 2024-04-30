<?php
    //Recuperer les informations du formulaire
    $nom_patient = $_POST["nom_patient"];
    $date = $_POST["date"];
    $id_medecin = $_POST["id_medecin"];
    $montant_consultation = $_POST["montant_consultation"];

    require("_connexion_bd.php");
    $sql = "INSERT INTO rendez_vous (nom_patient, `date`, id_medecin, montant_consultation) VALUES (?, ?, ?, ?)";
    $query = $bdd->prepare($sql);
    $query->execute(array($nom_patient, $date, $id_medecin, $montant_consultation));
    header('Location: ../dashboard.php');
?>
