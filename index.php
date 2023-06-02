<?php
session_start();
if(empty($_SESSION["matricule"]))
{
    header("location:connexion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Document</title>
</head>
<body>
    <div class="parent">
        <div class="fils1">
            <div class="logo">
                <img src="" alt="logo fabi">
                <h2>FABI</h2>
            </div>
            <div class="option">
                <ul>
                   <li><a href=""><img src="icone/dash.png" alt="truc">Dashbord</a></li>
                   <li><a href=""><img src="icone/doc.png" alt="truc">Documents</a></li>
                   <li><a href=""><img src="icone/pc.png" alt="truc">Cybers</a></li>
                   <li><a href=""><img src="icone/setting (1).png" alt="truc">Réglages</a></li>
                </ul>
            </div>
        </div>
        <div class="fils2">
            <div class="entete">
                <div class="entete1">
                    <div class="retour"><a href=""><img src="icone/left.png" alt=""></a></div>
                    <div class="titre_page"><h2>Dashbord</h2></div>
                    <div class="search"><input type="search" name="" id="" placeholder="Recherche"></div>
                </div>
                <div class="entete2">
                    <div class="notification">
                        <div class="noti_icone"><img src="icone/not.png" alt="notification"></div>
                        <div class="noti_nombre"><span>0</span></div>
                    </div>
                    <div class="profil">
                        <div class="image_profil"><img src="icone/man.png" alt="icone profile"></div>
                        <div class="nom_profil"><span>Admin<br>Ali Boubacar</span></div>
                    </div>
                </div>
            </div>
            <div class="corps"></div>
        </div>
    </div>
</body>
</html>