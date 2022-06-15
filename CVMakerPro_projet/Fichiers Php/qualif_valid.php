<?php
session_start();
$ID = $_SESSION["ID"];
$qualif1 = $_POST["qualif1"];
$qualif2 = $_POST["qualif2"];
$qualif3 = $_POST["qualif3"];
$qualif4 = $_POST["qualif4"];
$qualif5 = $_POST["qualif5"];

for($i=0;$i<5;$i++) // on supprime toutes les informations concernant les qualifications de l'utilisateur pour éviter les doublons
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req = $bdd->prepare("DELETE FROM `qualifications` WHERE `qualifications`.`id_inscription` = ?");
    $req->execute([$ID]);
}

if($qualif1!="") // ici on teste si l'utilisateur a bien entrée une qualification
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req1 = $bdd->prepare("INSERT INTO `qualifications` (`ID`, `qualif`, `id_inscription`) VALUES (?, ?, ?);");
    $req1->execute([NULL, $qualif1, $ID]); // si elle a bien été entrée on l'insere dans la base de données
}

if($qualif2!="")
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req2 = $bdd->prepare("INSERT INTO `qualifications` (`ID`, `qualif`, `id_inscription`) VALUES (?, ?, ?);");
    $req2->execute([NULL, $qualif2, $ID]);
}

if($qualif3!="")
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req3 = $bdd->prepare("INSERT INTO `qualifications` (`ID`, `qualif`, `id_inscription`) VALUES (?, ?, ?);");
    $req3->execute([NULL, $qualif3, $ID]);
}

if($qualif4!="")
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req4 = $bdd->prepare("INSERT INTO `qualifications` (`ID`, `qualif`, `id_inscription`) VALUES (?, ?, ?);");
    $req4->execute([NULL, $qualif4, $ID]);
}

if($qualif5!="")
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req5 = $bdd->prepare("INSERT INTO `qualifications` (`ID`, `qualif`, `id_inscription`) VALUES (?, ?, ?);");
    $req5->execute([NULL, $qualif5, $ID]);
}

header("Location:profil_niveau_langue.php");
?>