<?php
session_start();
if(!isset($_SESSION["test"]))
{
    header("location:connexion.php");
    exit();
}
?>