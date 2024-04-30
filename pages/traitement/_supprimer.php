<?php
try {
    if (!isset($_GET['id'])){
        echo "manque id";
    }else{
        $id = $_GET['id'];
        require("_connexion_bd.php");
        $query = $bdd->prepare('DELETE FROM rendez_vous WHERE id_rdv =?');
        if($query->execute(array($id))){
            header('Location: ../dashboard.php');
        }else {
            echo "Erreur lors de l'exécution de la requête : " . $query->errorInfo()[2];
        }
    }
}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}
?>