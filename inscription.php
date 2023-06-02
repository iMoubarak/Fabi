<?php
session_start();
try {
    $msg='';
    $visible='hidden';
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        require("connect.php");
        $mat = trim(htmlspecialchars($_POST["matricule"]));
        $pass = trim(htmlspecialchars($_POST["mot_de_passe"]));
        $confirm = trim(htmlspecialchars($_POST["confirmation"]));
        $requete = "SELECT matriculeAg FROM Agent WHERE matriculeAg=:MAT";
        $st = $pdo->prepare($requete);
        $st->bindParam(":MAT",$mat);
        $st->execute();
        $agent = $st->fetch();
        if($agent)
        {
            $requete = "SELECT COUNT(*) matricule FROM CompteAgent WHERE matricule=:MAT";
            $st = $pdo->prepare($requete);
            $st->bindParam(":MAT",$mat);
            $st->execute();
            $existe = $st->fetch();
            if($existe['matricule']===0)
            {
                $sal = random_bytes(16);
                if($pass===$confirm)
                {
                    $requete = "INSERT INTO CompteAgent VALUES(:MAT,:PASS,0)";
                    $pass = password_hash($pass,PASSWORD_ARGON2ID,['salt'=>$sal]);
                    $st = $pdo->prepare($requete);
                    $st->bindParam(":MAT",$mat);
                    $st->bindParam(":PASS",$pass);
                    if($st->execute())
                    {
                        $_SESSION["matricule"] = $mat;
                        header("Location:index.php");
                        exit();
                    }

                }
                else
                {
                    $msg = "Confirmation incorrect";
                    $visible = "visible"; 
                }

            }
            else
            {
                $msg = "Ce compte existe déjà";
                $visible = "visible";
            }
        }
        else
        {
            $msg = "Matricule incorrect";
            $visible = "visible";
        }
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
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
                <form action="" id="formC" method="post">
                    <div class="div_input">
                        <div id="status" style="visibility:<?=$visible?>;"><?=$msg?></div>
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
</body>
</html>