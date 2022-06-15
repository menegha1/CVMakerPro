<?php // cette page sert à valider l'ajout d'une école
$adresse = $_POST["adresse"];
$niveau_etude = $_POST["niveau_etude"];
$etablissement = $_POST["etablissement"];
$test = 0;
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req1 = $bdd->prepare("SELECT adresse,etablissement FROM `ecole`");
$req1->execute();

while($ligne_ecole)
{
    if($adresse == $ligne_ecole["adresse"] && $etablissement == $ligne_ecole["etablissement"])
    {
        $test++; // ici on test si l'école est déjà existante
    }
    $ligne_ecole = $req1->fetch();
}
if($test==0) // si elle ne l'est pas on ajouter l'école dans la base de données
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req2 = $bdd->prepare("INSERT INTO `ecole` (`ID`, `adresse`, `niveau_etude`, `etablissement`) VALUES (NULL, '$adresse', '$niveau_etude', '$etablissement');");
    $req2->execute();
}
header("Location:nouvelle_ecole.php");
?>