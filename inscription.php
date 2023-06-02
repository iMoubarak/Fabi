<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="parent">
        <div class="fils1">
            <div class="logo">
                <h1>FABI</h1>
                <h6>FAST BIBLIOTHEQUE</h6>
            </div>
            <div class="titre-accueil">
                <h1>Content de vous revoir</h1>
                <h5>Merci de votre retour,veuillez vous inscrire<br>afin de créer votre compte en remplissant ce formulaire :</h5>
            </div>
            <div class="formulaire">
                <form action="" id="formC">
                    <div class="div_input">
                        <input type="text" name="matricule" placeholder="Matricule" required>
                        <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
                        <input type="password" name="confirmation" placeholder="Confirmez" required>
                    </div>
                    <div class="div_remember">
                        <input type="checkbox" name="remember" >
                        <span>Mot de passe oublié ?</span> 
                    </div>
                    <div class="div_button">
                        <button type="submit">S'inscrire</button>
                        <a href="connexion.php">Connexion</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="fils2"></div>
    </div>
    <script src="js/log.js"></script>
</body>
</html>