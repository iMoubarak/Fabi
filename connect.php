<?php
    require("/home/Admin/configFab.php");
    try {
        $pdo = new PDO("mysql:host=".Host.";dbname=".NomDB,NomUtilisateur,MotDePasse);
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : ".$e->getMessage());
    }
?>