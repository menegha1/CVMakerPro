<?php // cette page sert à ajouter les expériences professionnelles de l'utilisateur dans la base de données
session_start();
$ID = $_SESSION["ID"];
$id_entreprise1 = $_POST["entreprise1"];
$id_entreprise2 = $_POST["entreprise2"];
$id_entreprise3 = $_POST["entreprise3"];
echo"$id_entreprise1 $id_entreprise2 $id_entreprise3";
for($i=0;$i<3;$i++) // ici on supprime toutes les expériences professionnelles déjà existante de l'utilisateur afin qu'aucun doublons ne soit possible dans la base de données
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req = $bdd->prepare("DELETE FROM `expériences professionnelle` WHERE `expériences professionnelle`.`id_inscription` = ?");
    $req->execute([$ID]);
}

if($id_entreprise1!=-1) // le "-1" sert à savoir si le choix de l'utilisateur est différent de ----VIDE---- dans le choix des entreprises
{ // s'il ne l'est pas, on ajoute les informations qui concernent cette entreprise dans la base de données
    $poste1 = $_POST["poste1"];
    $date_debut1 = $_POST["date_debut1"];
    $date_fin1 = $_POST["date_fin1"];
    $tache1 = $_POST["tache1"];
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req1 = $bdd->prepare("INSERT INTO `expériences professionnelle` (`ID`, `date_fin`, `date_debut`, `taches`, `poste`, `id_entreprise`, `id_inscription`) VALUES (?, ?, ?, ?, ?, ?, ?);");
    $req1->execute([NULL, $date_fin1, $date_debut1, $tache1, $poste1, $id_entreprise1, $ID]);
}
if($id_entreprise2!=-1) {
    $poste2 = $_POST["poste2"];
    $date_debut2 = $_POST["date_debut2"];
    $date_fin2 = $_POST["date_fin2"];
    $tache2 = $_POST["tache2"];
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req2 = $bdd->prepare("INSERT INTO `expériences professionnelle` (`ID`, `date_fin`, `date_debut`, `taches`, `poste`, `id_entreprise`, `id_inscription`) VALUES (?, ?, ?, ?, ?, ?, ?);");
    $req2->execute([NULL, $date_fin2, $date_debut2, $tache2, $poste2, $id_entreprise2, $ID]);
}
if($id_entreprise3!=-1)
{
    $poste3 = $_POST["poste3"];
    $date_debut3 = $_POST["date_debut3"];
    $date_fin3 = $_POST["date_fin3"];
    $tache3 = $_POST["tache3"];
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req3 = $bdd->prepare("INSERT INTO `expériences professionnelle` (`ID`, `date_fin`, `date_debut`, `taches`, `poste`, `id_entreprise`, `id_inscription`) VALUES (?, ?, ?, ?, ?, ?, ?);");
    $req3->execute([NULL, $date_fin3, $date_debut3, $tache3, $poste3, $id_entreprise3, $ID]);
}
header("Location:profil_qualif.php");
?>
