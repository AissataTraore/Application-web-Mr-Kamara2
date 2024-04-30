<?php
try {
    if (!isset($_GET['id']) && !isset($_POST['nom_patient']) && !isset($_POST['date']) && !isset($_POST['id_medecin']) && !isset($_POST['montant_consultation'])){
        echo "Un manque";
    }else{
        $id_rdv = $_GET['id'];
        extract($_POST);
        if($_POST['id_medecin']==''){
            $id_medecin = $_GET['id_med'];
        }
        require("_connexion_bd.php");
        $query = $bdd->prepare('UPDATE rendez_vous SET nom_patient=?, `date`=?, id_medecin=?, montant_consultation=? WHERE id_rdv =?');
        if($query->execute(array($nom_patient, $date, $id_medecin, $montant_consultation, $id_rdv))){
            header('Location: ../dashboard.php');
            echo "ok";
        }else {
            echo "Erreur lors de l'exécution de la requête : " . $query->errorInfo()[2];
        }
    }
}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}
?>