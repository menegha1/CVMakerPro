<html lang ="fr">
<head>
    <title>📄 A IMPRIMER</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<?php
session_start();
$texte_langue1 = "";
$reste1 = 5 - $_SESSION["niveau_langue1"];
$texte_langue2 = "";
$reste2 = 5 - $_SESSION["niveau_langue2"];
$texte_langue3 = "";
$reste3 = 5 - $_SESSION["niveau_langue3"];
$texte_langue4 = "";
$reste4 = 5 - $_SESSION["niveau_langue4"];
$texte_langue5 = "";
$reste5 = 5 - $_SESSION["niveau_langue5"];

if($_SESSION["niveau_langue1"]!=0)
{
    while($_SESSION["niveau_langue1"])
    {
        $texte_langue1 = "$texte_langue1 🟢";
        $_SESSION["niveau_langue1"] = $_SESSION["niveau_langue1"] - 1;
    }
    while($reste1)
    {
        $texte_langue1 = "$texte_langue1 ⚪";
        $reste1 = $reste1 - 1;
    }
}
if($_SESSION["niveau_langue2"]!=0)
{
    while ($_SESSION["niveau_langue2"]) {
        $texte_langue2 = "$texte_langue2 🟢";
        $_SESSION["niveau_langue2"] = $_SESSION["niveau_langue2"] - 1;
    }
    while ($reste2) {
        $texte_langue2 = "$texte_langue2 ⚪";
        $reste2 = $reste2 - 1;
    }
}
if($_SESSION["niveau_langue3"]!=0)
{
    while ($_SESSION["niveau_langue3"]) {
        $texte_langue3 = "$texte_langue3 🟢";
        $_SESSION["niveau_langue3"] = $_SESSION["niveau_langue3"] - 1;
    }
    while ($reste3) {
        $texte_langue3 = "$texte_langue3 ⚪";
        $reste3 = $reste3 - 1;
    }
}
if($_SESSION["niveau_langue4"]!=0)
{
    while ($_SESSION["niveau_langue4"]) {
        $texte_langue4 = "$texte_langue4 🟢";
        $_SESSION["niveau_langue4"] = $_SESSION["niveau_langue4"] - 1;
    }
    while ($reste4) {
        $texte_langue4 = "$texte_langue4 ⚪";
        $reste4 = $reste4 - 1;
    }
}
if($_SESSION["niveau_langue4"]!=0)
{
    while ($_SESSION["niveau_langue5"]) {
        $texte_langue5 = "$texte_langue5 🟢";
        $_SESSION["niveau_langue5"] = $_SESSION["niveau_langue5"] - 1;
    }
    while ($reste5) {
        $texte_langue5 = "$texte_langue5 ⚪";
        $reste5 = $reste5 - 1;
    }
}

echo"<div style='position: relative; text-align: center'>
        <img src='modele3vide.png' width='1653' height='2250'>
        <h1 style='font-size: 140px'><strong><div style='position: absolute; top: 5%; left: 50%;transform: translate(-50%, -50%);'>".$_SESSION["prenom"]."</div></strong></h1>
        <h1 style='font-size: 85px'><strong><div style='position: absolute; top: 11%; left: 50%;transform: translate(-50%, -50%);'>".$_SESSION["nom"]."</div></strong></h1>
        <h1 style='font-size: 40px'><strong><div style='position: absolute; top: 19%; left: 50%;transform: translate(-50%, -50%); color: cornflowerblue'>".$_SESSION["poste"]."</div></strong></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 16%; left: 50%;transform: translate(-50%, -50%);'>+33 0".$_SESSION["num_tel"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 16%; left: 25%;transform: translate(-50%, -50%);'>".$_SESSION["adresse"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 16%; left: 80%;transform: translate(-50%, -50%);'>".$_SESSION["email"]."</div></h1>

        <h1 style='font-size: 30px'><div style='position: absolute; top: 34%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["qualif1"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 36%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["qualif2"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 38%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["qualif3"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 40%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["qualif4"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 42%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["qualif5"]."</div></h1>
        
        <h1 style='font-size: 20px'><div style='position: absolute; top: 50%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["langue1"]." $texte_langue1</div></h1>
        <h1 style='font-size: 20px'><div style='position: absolute; top: 51.5%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["langue2"]." $texte_langue2</div></h1>
        <h1 style='font-size: 20px'><div style='position: absolute; top: 53%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["langue3"]." $texte_langue3</div></h1>
        <h1 style='font-size: 20px'><div style='position: absolute; top: 54.5%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["langue4"]." $texte_langue4</div></h1>
        
        <h1 style='font-size: 20px'><div style='position: absolute; top: 63%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["loisir1"]."</div></h1>
        <h1 style='font-size: 20px'><div style='position: absolute; top: 65%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["loisir2"]."</div></h1>
        <h1 style='font-size: 20px'><div style='position: absolute; top: 67%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["loisir3"]."</div></h1>  
        <h1 style='font-size: 20px'><div style='position: absolute; top: 69%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["loisir4"]."</div></h1>  
        
        <h1 style='font-size: 35px'><div style='position: absolute; top: 30%; left: 33%;transform: translate(-50%, -50%);'>".$_SESSION["nom_entreprise1"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 32%; left: 33%;transform: translate(-50%, -50%);'>".$_SESSION["poste1"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 30%; left: 12%;transform: translate(-50%, -50%); color: cornflowerblue'>".$_SESSION["date_debut1"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 32%; left: 12%;transform: translate(-50%, -50%); color: cornflowerblue'>".$_SESSION["date_fin1"]."</div></h1>
        <h1 style='font-size: 20px'><div style='position: absolute; top: 34%; left: 12%;transform: translate(-50%, -50%);'>".$_SESSION["adresse_entreprise1"]."</div></h1>
        <h1 style='font-size: 15px'><div style='position: absolute; top: 37%; left: 40%;transform: translate(-50%, -50%);'>".$_SESSION["tache1"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 46%; left: 33%;transform: translate(-50%, -50%);'>".$_SESSION["nom_entreprise2"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 48%; left: 33%;transform: translate(-50%, -50%);'>".$_SESSION["poste2"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 46%; left: 12%;transform: translate(-50%, -50%); color: cornflowerblue'>".$_SESSION["date_debut2"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 48%; left: 12%;transform: translate(-50%, -50%); color: cornflowerblue'>".$_SESSION["date_fin2"]."</div></h1>
        <h1 style='font-size: 20px'><div style='position: absolute; top: 50%; left: 12%;transform: translate(-50%, -50%);'>".$_SESSION["adresse_entreprise2"]."</div></h1>
        <h1 style='font-size: 15px'><div style='position: absolute; top: 53%; left: 40%;transform: translate(-50%, -50%);'>".$_SESSION["tache2"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 62%; left: 33%;transform: translate(-50%, -50%);'>".$_SESSION["nom_entreprise3"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 64%; left: 33%;transform: translate(-50%, -50%);'>".$_SESSION["poste3"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 62%; left: 12%;transform: translate(-50%, -50%); color: cornflowerblue'>".$_SESSION["date_debut3"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 64%; left: 12%;transform: translate(-50%, -50%); color: cornflowerblue'>".$_SESSION["date_fin3"]."</div></h1>
        <h1 style='font-size: 20px'><div style='position: absolute; top: 66%; left: 12%;transform: translate(-50%, -50%);'>".$_SESSION["adresse_entreprise3"]."</div></h1>
        <h1 style='font-size: 15px'><div style='position: absolute; top: 69%; left: 40%;transform: translate(-50%, -50%);'>".$_SESSION["tache3"]."</div></h1>


        <h1 style='font-size: 35px'><div style='position: absolute; top: 77%; left: 40%;transform: translate(-50%, -50%);'>".$_SESSION["diplome1"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 79%; left: 40%;transform: translate(-50%, -50%);'>".$_SESSION["niveau_etude1"]." ".$_SESSION["etablissement1"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 79%; left: 12%;transform: translate(-50%, -50%);color: cornflowerblue'>".$_SESSION["adresse_ecole1"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 77.5%; left: 12%;transform: translate(-50%, -50%); color: cornflowerblue'>".$_SESSION["annee_entree1"]." - ".$_SESSION["annee_sortie1"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 82%; left: 40%;transform: translate(-50%, -50%);'>".$_SESSION["diplome2"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 84%; left: 40%;transform: translate(-50%, -50%);'>".$_SESSION["niveau_etude2"]." ".$_SESSION["etablissement2"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 84%; left: 12%;transform: translate(-50%, -50%);color: cornflowerblue'>".$_SESSION["adresse_ecole2"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 82.5%; left: 12%;transform: translate(-50%, -50%); color: cornflowerblue'>".$_SESSION["annee_entree2"]." - ".$_SESSION["annee_sortie2"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 87%; left: 40%;transform: translate(-50%, -50%);'>".$_SESSION["diplome3"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 89%; left: 40%;transform: translate(-50%, -50%);'>".$_SESSION["niveau_etude3"]." ".$_SESSION["etablissement3"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 89%; left: 12%;transform: translate(-50%, -50%);color: cornflowerblue'>".$_SESSION["adresse_ecole3"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 87.5%; left: 12%;transform: translate(-50%, -50%); color: cornflowerblue'>".$_SESSION["annee_entree3"]." - ".$_SESSION["annee_sortie3"]."</div></h1>

 
</div>"; ?>
</body>
</html>