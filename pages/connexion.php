<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connexion</title>
<link rel="stylesheet" href="../style/css/connexion.css">
<link rel="stylesheet" href="../lib/css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="../lib/css/fontawesome/css/all.css">
</head>
<?php 
    if(isset($_GET["etat"])){
      if($_GET["etat"] == 1){
        echo "<script>alert('Ce login existe deja !');</script>";
      }else if($_GET["etat"] == 2){
          echo "<script>alert('Login ou mot de passe incorrect !');</script>";
      }
    }
?>
<body>

    <!-------------------------Navbar-------------------------------->
    <?php include("../include/header.php") ?>
    <!-------------------------Navbar-------------------------------->   

<div class="screen-1">
    <img src="../res/images/Tr Hospital.png" class="logo">
    <form action="traitement/_connexion.php" method="POST">
        <div class="email">
            <label for="email">Email Address</label>
            <div class="sec-2">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="login" id="email" placeholder="Username@gmail.com">
            </div>
        </div>
        <div class="password">
            <label for="password">Mot de passe</label>
            <div class="sec-2">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="mdp" id="password" placeholder="············">
                <ion-icon class="show-hide" name="eye-outline"></ion-icon>
            </div>
        </div>
    
        <button class="login">Login</button>
    </form>

    <div class="footer">
        <span>Sign up</span>
        <span>Forgot Password?</span>
    </div>
</div>

</body>
<script src="../style/js/navbar.js"></script>
</html>
