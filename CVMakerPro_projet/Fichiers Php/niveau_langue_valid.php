<?php
session_start();
$ID = $_SESSION["ID"];
$niveau1 = $_POST["niveau1"];
$niveau2 = $_POST["niveau2"];
$niveau3 = $_POST["niveau3"];
$niveau4 = $_POST["niveau4"];
$niveau5 = $_POST["niveau5"];
echo "niveau : $niveau1 $niveau2 $niveau3 $niveau4 $niveau5";

for($i=0;$i<5;$i++)
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req = $bdd->prepare("DELETE FROM `niveau langue` WHERE `niveau langue`.`id_inscription` = ?");
    $req->execute([$ID]);
}

if($niveau1!=-1)
{
    $langue1 = $_POST["langue1"];
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req1 = $bdd->prepare("INSERT INTO `niveau langue` (`ID`, `langue`, `niveau`, `id_inscription`) VALUES (?, ?, ?, ?);");
    $req1->execute([NULL, $langue1, $niveau1, $ID]);
}

if($niveau2!=-1)
{
    $langue2 = $_POST["langue2"];
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req2 = $bdd->prepare("INSERT INTO `niveau langue` (`ID`, `langue`, `niveau`, `id_inscription`) VALUES (?, ?, ?, ?);");
    $req2->execute([NULL, $langue2, $niveau2, $ID]);
}

if($niveau3!=-1)
{
    $langue3 = $_POST["langue3"];
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req3 = $bdd->prepare("INSERT INTO `niveau langue` (`ID`, `langue`, `niveau`, `id_inscription`) VALUES (?, ?, ?, ?);");
    $req3->execute([NULL, $langue3, $niveau3, $ID]);
}

if($niveau4!=-1)
{
    $langue4 = $_POST["langue4"];
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req4 = $bdd->prepare("INSERT INTO `niveau langue` (`ID`, `langue`, `niveau`, `id_inscription`) VALUES (?, ?, ?, ?);");
    $req4->execute([NULL, $langue4, $niveau4, $ID]);
}

if($niveau5!=-1)
{
    $langue5 = $_POST["langue5"];
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req5 = $bdd->prepare("INSERT INTO `niveau langue` (`ID`, `langue`, `niveau`, `id_inscription`) VALUES (?, ?, ?, ?);");
    $req5->execute([NULL, $langue5, $niveau5, $ID]);
}
header("Location:profil_loisirs.php");
?>