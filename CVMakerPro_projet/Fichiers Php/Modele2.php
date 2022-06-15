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
        <img src='modele2vide.png' width='1653' height='2250'>

        <h1 style='font-size: 85px'><strong><div style='position: absolute; top: 7%; left: 43%;transform: translate(-50%, -50%);'>".$_SESSION["prenom"]." <br/> ".$_SESSION["nom"]."</div></strong></h1>
        <h1 style='font-size: 50px'><div style='position: absolute; top: 15%; left: 43%;transform: translate(-50%, -50%);'>".$_SESSION["poste"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 6%; left: 85%;transform: translate(-50%, -50%);'>+33 0".$_SESSION["num_tel"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 8.5%; left: 82%;transform: translate(-50%, -50%);'>".$_SESSION["adresse"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 11%; left: 80%;transform: translate(-50%, -50%);'>".$_SESSION["email"]."</div></h1>
        
        
        <h1 style='font-size: 30px'><div style='position: absolute; top: 20%; left: 42%;transform: translate(-50%, -50%);'>".$_SESSION["desc1"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 21.5%; left: 42%;transform: translate(-50%, -50%);'>".$_SESSION["desc2"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 23%; left: 42%;transform: translate(-50%, -50%);'>".$_SESSION["desc3"]."</div></h1>

        <h1 style='font-size: 30px'><div style='position: absolute; top: 32%; left: 55%;transform: translate(-50%, -50%);'>".$_SESSION["qualif1"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 32%; left: 75%;transform: translate(-50%, -50%);'>".$_SESSION["qualif2"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 35%; left: 55%;transform: translate(-50%, -50%);'>".$_SESSION["qualif3"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 35%; left: 75%;transform: translate(-50%, -50%);'>".$_SESSION["qualif4"]."</div></h1>
        
        <h1 style='font-size: 30px'><div style='position: absolute; top: 32%; left: 22%;transform: translate(-50%, -50%);'>".$_SESSION["langue1"]." $texte_langue1</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 34%; left: 22%;transform: translate(-50%, -50%);'>".$_SESSION["langue2"]." $texte_langue2</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 36%; left: 22%;transform: translate(-50%, -50%);'>".$_SESSION["langue3"]." $texte_langue3</div></h1>
        
        
        <h1 style='font-size: 35px'><div style='position: absolute; top: 43%; left: 55%;transform: translate(-50%, -50%);'>".$_SESSION["diplome1"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 45%; left: 55%;transform: translate(-50%, -50%);'>".$_SESSION["niveau_etude1"]." ".$_SESSION["etablissement1"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 46%; left: 13%;transform: translate(-50%, -50%);'>".$_SESSION["adresse_ecole1"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 44%; left: 12%;transform: translate(-50%, -50%);'>".$_SESSION["annee_entree1"]." - ".$_SESSION["annee_sortie1"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 48%; left: 55%;transform: translate(-50%, -50%);'>".$_SESSION["diplome2"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 50%; left: 55%;transform: translate(-50%, -50%);'>".$_SESSION["niveau_etude2"]." ".$_SESSION["etablissement2"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 51%; left: 13%;transform: translate(-50%, -50%);'>".$_SESSION["adresse_ecole2"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 49%; left: 12%;transform: translate(-50%, -50%);'>".$_SESSION["annee_entree2"]." - ".$_SESSION["annee_sortie2"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 53%; left: 55%;transform: translate(-50%, -50%);'>".$_SESSION["diplome3"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 55%; left: 55%;transform: translate(-50%, -50%);'>".$_SESSION["niveau_etude3"]." ".$_SESSION["etablissement3"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 56%; left: 13%;transform: translate(-50%, -50%);'>".$_SESSION["adresse_ecole3"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 54%; left: 12%;transform: translate(-50%, -50%);'>".$_SESSION["annee_entree3"]." - ".$_SESSION["annee_sortie3"]."</div></h1>


        <h1 style='font-size: 35px'><div style='position: absolute; top: 63%; left: 45%;transform: translate(-50%, -50%);'>".$_SESSION["nom_entreprise1"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 65%; left: 47%;transform: translate(-50%, -50%);'>".$_SESSION["poste1"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 65%; left: 15%;transform: translate(-50%, -50%);'>".$_SESSION["adresse_entreprise1"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 63.5%; left: 11%;transform: translate(-50%, -50%);'>".$_SESSION["date_debut1"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 63.5%; left: 21%;transform: translate(-50%, -50%);'>".$_SESSION["date_fin1"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 68.5%; left: 54%;transform: translate(-50%, -50%);'>".$_SESSION["tache1"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 74.5%; left: 45%;transform: translate(-50%, -50%);'>".$_SESSION["nom_entreprise2"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 76.5%; left: 47%;transform: translate(-50%, -50%);'>".$_SESSION["poste2"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 76.5%; left: 15%;transform: translate(-50%, -50%);'>".$_SESSION["adresse_entreprise2"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 75%; left: 11%;transform: translate(-50%, -50%);'>".$_SESSION["date_debut2"]."</div></h1>
        <h1 style='font-size: 25px'><div style='position: absolute; top: 75%; left: 21%;transform: translate(-50%, -50%);'>".$_SESSION["date_fin2"]."</div></h1>
        <h1 style='font-size: 30px'><div style='position: absolute; top: 80%; left: 54%;transform: translate(-50%, -50%);'>".$_SESSION["tache2"]."</div></h1>

        <h1 style='font-size: 35px'><div style='position: absolute; top: 90.5%; left: 30%;transform: translate(-50%, -50%);'>".$_SESSION["loisir1"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 92.5%; left: 30%;transform: translate(-50%, -50%);'>".$_SESSION["loisir2"]."</div></h1>
        <h1 style='font-size: 35px'><div style='position: absolute; top: 94.5%; left: 30%;transform: translate(-50%, -50%);'>".$_SESSION["loisir3"]."</div></h1>   
</div>"; ?>
</body>
</html>