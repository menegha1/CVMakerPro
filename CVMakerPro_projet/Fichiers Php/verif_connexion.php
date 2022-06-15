<?php
$pseudo = $_POST["pseudo"];
$mdp = $_POST["mdp"];
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req = $bdd->prepare("SELECT ID FROM `inscription` WHERE pseudo = '$pseudo' && mdp = '$mdp';");
$req->execute();
$ligne = $req->fetch();
session_start();
$ID = $_SESSION["ID"] = $ligne["ID"];
if($ligne)
{
    header("Location:profil_info_perso.php");
}else{
    header("Location:connexion_fail.php");
}
?>