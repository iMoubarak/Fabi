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
                        <div class="nom_profil"><h6>Admin</h6><span>Ali Boubacar</span></div>
                    </div>
                </div>
            </div>
            <div class="corps">
                <div class="corps-bloc1">
                    <div class="info_g">
                        <div class="info_entete"><img src="icone/document.png" alt=""><strong>100</strong><span>Docs au total</span></div>
                        <div class="info_corps">
                          
                                <div><button><p class="color_red"></p></button><strong>Nouveaux</strong><span>100</span></div>
                                <div><button><p class="color_green"></p></button><strong>Disponibles</strong><span>255</span></div>
                                <div><button><p class="color_blue"></p></button><strong>En attentes</strong><span>20</span></div>
                            
                        </div>
                    </div>
                    
                    <div class="utilisateur">
                    <div class="util_entete"><img src="icone/document.png" alt=""><strong>100</strong><span>Etudiant connecté</span></div>
                        <div class="util_corps">
                          
                                <div><button># Emprunt </button><span>100</span></div>
                                <div><button># Remis </button><span>100</span></div>
                                <div><button># Restant </button><span>255</span></div>
                            
                        </div>
                    </div>
                    <div class="docs_ajouter">
                        
                    </div>
                </div>
                <div class="corps-bloc2">
                    <div class="graphe"></div>
                    <div class="raccourci">
                        <div class="rac_entete"><h4>Accès rapide</h4></div>
                        <div class="rac_corps">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>