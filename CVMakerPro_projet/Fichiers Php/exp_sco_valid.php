<?php // cette page sert à ajouter les expériences scolaires de l'utilisateur dans la base de données
session_start();
$ID = $_SESSION["ID"];
$id_ecole1 = $_POST["ecole1"];
$id_ecole2 = $_POST["ecole2"];
$id_ecole3 = $_POST["ecole3"];
for($i=0;$i<3;$i++) // ici on supprime toutes les expériences scolaires déjà existante de l'utilisateur afin qu'aucun doublons ne soit possible dans la base de données
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req = $bdd->prepare("DELETE FROM `expériences scolaire` WHERE `expériences scolaire`.`id_inscription` = ?");
    $req->execute([$ID]);
}
if($id_ecole1!=-1) // le "-1" sert à savoir si le choix de l'utilisateur est différent de ----VIDE---- dans le choix des écoles
{ // s'il ne l'est pas, on ajoute les informations qui concernent cette école dans la base de données
    $diplome1 = $_POST["diplome1"];
    $annee_sortie1 = $_POST["annee_sortie1"];
    $annee_entree1 = $_POST["annee_entree1"];
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req1 = $bdd->prepare("INSERT INTO `expériences scolaire` (`ID`, `annee_sortie`, `annee_entree`, `diplome`, `id_ecole`, `id_inscription`) VALUES (?, ?, ?, ?, ?, ?);");
    $req1->execute([NULL, $annee_sortie1, $annee_entree1, $diplome1, $id_ecole1, $ID]);
}

if($id_ecole2!=-1) {
    $diplome2 = $_POST["diplome2"];
    $annee_sortie2 = $_POST["annee_sortie2"];
    $annee_entree2 = $_POST["annee_entree2"];
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req2 = $bdd->prepare("INSERT INTO `expériences scolaire` (`ID`, `annee_sortie`, `annee_entree`, `diplome`, `id_ecole`, `id_inscription`) VALUES (?, ?, ?, ?, ?, ?);");
    $req2->execute([NULL, $annee_sortie2, $annee_entree2, $diplome2, $id_ecole2, $ID]);
}
if($id_ecole3!=-1) {
    $diplome3 = $_POST["diplome3"];
    $annee_sortie3 = $_POST["annee_sortie3"];
    $annee_entree3 = $_POST["annee_entree3"];
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req3 = $bdd->prepare("INSERT INTO `expériences scolaire` (`ID`, `annee_sortie`, `annee_entree`, `diplome`, `id_ecole`, `id_inscription`) VALUES (?, ?, ?, ?, ?, ?);");
    $req3->execute([NULL, $annee_sortie3, $annee_entree3, $diplome3, $id_ecole3, $ID]);
}
header("Location:profil_exp_pro.php");
?>
