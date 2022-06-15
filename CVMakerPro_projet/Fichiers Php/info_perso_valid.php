<?php
session_start();
$ID = $_SESSION["ID"];
$nom = $_POST["nom"];
$poste = $_POST["poste"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$num_tel = $_POST["num_tel"];
$desc1 = $_POST["desc1"];
$desc2 = $_POST["desc2"];
$desc3 = $_POST["desc3"];
$date_naissance = $_POST["date_naissance"];
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req = $bdd->prepare("DELETE FROM `informations personnelle` WHERE `informations personnelle`.`id_inscription` = ?");
$req->execute([$ID]); // ici on suppprime toutes les informations personnelles de l'utilisateur pour éviter les doublons

$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req1 = $bdd->prepare("INSERT INTO `informations personnelle` (`ID`, `adresse`, `num_tel`, `date_naissance`, `Nom`, `Prenom`, `description1`, `description2`, `description3`, `poste`, `id_inscription`) VALUES (?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?);");
$req1->execute([NULL, $adresse, $num_tel, $date_naissance, $nom, $prenom,$desc1, $desc2, $desc3, $poste, $ID]); // ici on insere toutes les inforamtions personnelles rentrées par l'utilisateur dans la base de données sauf les descritpion

header("Location:profil_exp_sco.php");
?>
