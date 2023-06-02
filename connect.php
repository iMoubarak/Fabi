<?php

    require_once("/home/Admin/configFab.php");
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"
    ];
    try {
        $pdo = new PDO("mysql:host=".Host.";dbname=".NomDB,NomUtilisateur,MotDePasse);
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : ".$e->getMessage());
    }
?>