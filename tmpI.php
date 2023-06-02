<?php
session_start();
$msg='';
$visible='';
try {
    require("connect.php");
    $mat = trim(htmlspecialchars($_POST["matricule"]));
    $pass = trim(htmlspecialchars($_POST["mot_de_passe"]));
    $requete = "SELECT matricule,motdepasse FROM CompteAgent WHERE matricule=:MAT";
    $st = $pdo->prepare($requete);
    $st->bindParam(":MAT",$mat);
    $st->execute();
    $agent = $st->fetch();
    if($agent)
    {
        if(password_verify($pass,$agent["motdepasse"]))
        {
            $_SESSION["matricule"] = $mat;
            header("Location: index.php");
            exit();
        }
        else
        {
            $msg="Mot de passe incorrect";
            $visible="oui";
        }
    }
    else
    {
        $msg = "Matricule incorrect";
        $visible = "oui";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>