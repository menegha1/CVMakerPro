<?php // cette page sert à valider l'ajout d'une entreprise
$adresse = $_POST["adresse"];
$secteur = $_POST["secteur"];
$nom = $_POST["nom"];
$test = 0;
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req1 = $bdd->prepare("SELECT adresse, nom FROM `entreprise`");
$req1->execute();
$ligne_entreprise = $req1->fetch();
while($ligne_entreprise)
{
    if($adresse == $ligne_entreprise["adresse"] && $nom == $ligne_entreprise["nom"])
    {
        $test++; // on test si cette enttreprise est déjà existante
    }
    $ligne_entreprise = $req1->fetch();
}
if($test==0) // si elle ne l'est pas on l'ajoute à la base de données
{
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req2 = $bdd->prepare("INSERT INTO `entreprise` (`ID`, `adresse`, `secteur`, `nom`) VALUES (NULL, '$adresse', '$secteur', '$nom');");
    $req2->execute();
}

header("Location:nouvelle_entreprise.php");
?>