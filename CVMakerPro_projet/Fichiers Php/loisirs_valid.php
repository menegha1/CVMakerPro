<?php // cette page sert à entrer les loisirs de l'utilisateur dans la base de données
session_start();
$ID = $_SESSION["ID"];
$loisirs1 = $_POST["loisirs1"];
$loisirs2 = $_POST["loisirs2"];
$loisirs3 = $_POST["loisirs3"];
$loisirs4 = $_POST["loisirs4"];
$loisirs5 = $_POST["loisirs5"];

for($i=0;$i<5;$i++) // ici on supprime tous les loisirs de l'utilisateur pour éviter les doublons
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req = $bdd->prepare("DELETE FROM `loisirs` WHERE `loisirs`.`id_inscription` = ?");
    $req->execute([$ID]);
}

if($loisirs1!="") // ici on verifie si un loisir a bien été rentré par l'utilisateur
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req1 = $bdd->prepare("INSERT INTO `loisirs` (`ID`, `loisir`, `id_inscription`) VALUES (?, ?, ?);");
    $req1->execute([NULL, $loisirs1, $ID]); // ici on l'ajoute à la base de données
}

if($loisirs2!="")
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req2 = $bdd->prepare("INSERT INTO `loisirs` (`ID`, `loisir`, `id_inscription`) VALUES (?, ?, ?);");
    $req2->execute([NULL, $loisirs2, $ID]);
}

if($loisirs3!="")
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req3 = $bdd->prepare("INSERT INTO `loisirs` (`ID`, `loisir`, `id_inscription`) VALUES (?, ?, ?);");
    $req3->execute([NULL, $loisirs3, $ID]);
}

if($loisirs4!="")
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req4 = $bdd->prepare("INSERT INTO `loisirs` (`ID`, `loisir`, `id_inscription`) VALUES (?, ?, ?);");
    $req4->execute([NULL, $loisirs4, $ID]);
}

if($loisirs5!="")
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req5 = $bdd->prepare("INSERT INTO `loisirs` (`ID`, `loisir`, `id_inscription`) VALUES (?, ?, ?);");
    $req5->execute([NULL, $loisirs5, $ID]);
}
header("Location:choix_modele.php");
?>