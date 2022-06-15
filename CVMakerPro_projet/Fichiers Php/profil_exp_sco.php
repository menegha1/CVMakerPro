<html lang ="fr">
<head>
    <title>📄 CV MakerPro : connexion</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body> <!-- cette page est l'interface pour ajouter les expériences scolaires -->
<form method="post" action="exp_sco_valid.php">
<br/>
<h5 style = "text-align: center"><strong>👉 Expériences scolaires (laisser "VIDE" si inexistant) 👈</strong></h5><br/><br/>
<?php // le fonctionnement est exactement le meme que dans la page profil_exp_pro.php (voir cette page pour les explications)
session_start();
$ID = $_SESSION["ID"];
$nb_exp_sco = 0;
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req = $bdd->prepare("SELECT ID FROM `expériences scolaire` WHERE id_inscription = $ID");
$req->execute();
$ligne_test = $req->fetch();
while($ligne_test)
{
    $nb_exp_sco++;
    $ligne_test = $req->fetch();
}
if($nb_exp_sco>0)
{
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req1 = $bdd->prepare("SELECT * FROM `expériences scolaire` INNER JOIN `ecole` ON `expériences scolaire`.`id_ecole` = `ecole`.ID WHERE id_inscription = ? ORDER BY annee_sortie DESC;");
$req1->execute([$ID]);
$ligne_exp_sco = $req1->fetch();
        echo"<div style='margin-left: 500px'>
     <h6><strong>• 👨‍🎓 Diplome obtenu 1 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Année de rentrée : <input type = 'text' name = 'annee_entree1' value='".$ligne_exp_sco["annee_entree"]."'/><br/><br/><br/>
     • Année de sortie : <input type = 'text' name = 'annee_sortie1' value='".$ligne_exp_sco["annee_sortie"]."'/><br/><br/><br/>
     • Etablissement fréquenté :
             <select name = 'ecole1'>
                 <option value = '".$ligne_exp_sco["id_ecole"]."'>".$ligne_exp_sco["adresse"]." - ".$ligne_exp_sco["niveau_etude"]." ".$ligne_exp_sco["etablissement"]."</option>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
        $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
        $req3 = $bdd->prepare('SELECT ID,adresse,niveau_etude,etablissement FROM ecole');
        $req3->execute();
        $ligne = $req3->fetch();
        while($ligne)
        {
            echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["niveau_etude"]." ".$ligne["etablissement"]."</option>";
            $ligne = $req3->fetch();
        }
        echo"</select > <a href='nouvelle_ecole.php' target='_blank'>ajouter une école</a><br/><br/><br/>• Diplome obtenu : <input type = 'text' name = 'diplome1' value='".$ligne_exp_sco["diplome"]."'/> (brevet des collèges, baccalauréat, etc...)</label></h6><br/><br/>
 </div>
 <br/><br/><br/>";
    if($nb_exp_sco>1)
    {
        $ligne_exp_sco = $req1->fetch();
        echo"<div style='margin-left: 500px'>
     <h6><strong>• 👨‍🎓 Diplome obtenu 2 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Année de rentrée : <input type = 'text' name = 'annee_entree2' value='".$ligne_exp_sco["annee_entree"]."'/><br/><br/><br/>
     • Année de sortie : <input type = 'text' name = 'annee_sortie2' value='".$ligne_exp_sco["annee_sortie"]."'/><br/><br/><br/>
     • Etablissement fréquenté :
             <select name = 'ecole2'>
                 <option value = '".$ligne_exp_sco["id_ecole"]."'>".$ligne_exp_sco["adresse"]." - ".$ligne_exp_sco["niveau_etude"]." ".$ligne_exp_sco["etablissement"]."</option>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
        $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
        $req3 = $bdd->prepare('SELECT ID,adresse,niveau_etude,etablissement FROM ecole');
        $req3->execute();
        $ligne = $req3->fetch();
        while($ligne)
        {
            echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["niveau_etude"]." ".$ligne["etablissement"]."</option>";
            $ligne = $req3->fetch();
        }
        echo"</select > <a href='nouvelle_ecole.php' target='_blank'>ajouter une école</a><br/><br/><br/>• Diplome obtenu : <input type = 'text' name = 'diplome2' value='".$ligne_exp_sco["diplome"]."'/> (brevet des collèges, baccalauréat, etc...)</label></h6><br/><br/>
 </div>
 <br/><br/><br/>";
    }else{
      echo"<div style='margin-left: 500px'>
     <h6><strong>• 👨‍🎓 Diplome obtenu 2 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Année de rentrée : <input type = 'text' name = 'annee_entree2'/><br/><br/><br/>
     • Année de sortie : <input type = 'text' name = 'annee_sortie2'/><br/><br/><br/>
     • Etablissement fréquenté :
             <select name = 'ecole2'>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
                 $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
                 $req = $bdd->prepare('SELECT ID,adresse,niveau_etude,etablissement FROM ecole');
                 $req->execute();
                 $ligne = $req->fetch();
                 while($ligne)
                 {
                     echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["niveau_etude"]." ".$ligne["etablissement"]."</option>";
                     $ligne = $req->fetch();
                 }
             echo"</select ><a href='nouvelle_ecole.php' target='_blank'>ajouter une école</a><br/><br/><br/>• Diplome obtenu : <input type = 'text' name = 'diplome2'/> (brevet des collèges, baccalauréat, etc...)</label></h6><br/><br/>
 </div>
 <br/><br/><br/>";
    }
    if($nb_exp_sco>2)
    {
        {
            $ligne_exp_sco = $req1->fetch();
            echo"<div style='margin-left: 500px'>
     <h6><strong>• 👨‍🎓 Diplome obtenu 3 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Année de rentrée : <input type = 'text' name = 'annee_entree3' value='".$ligne_exp_sco["annee_entree"]."'/><br/><br/><br/>
     • Année de sortie : <input type = 'text' name = 'annee_sortie3' value='".$ligne_exp_sco["annee_sortie"]."'/><br/><br/><br/>
     • Etablissement fréquenté :
             <select name = 'ecole3'>
                 <option value = '".$ligne_exp_sco["id_ecole"]."'>".$ligne_exp_sco["adresse"]." - ".$ligne_exp_sco["niveau_etude"]." ".$ligne_exp_sco["etablissement"]."</option>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
            $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
            $req3 = $bdd->prepare('SELECT ID,adresse,niveau_etude,etablissement FROM ecole');
            $req3->execute();
            $ligne = $req3->fetch();
            while($ligne)
            {
                echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["niveau_etude"]." ".$ligne["etablissement"]."</option>";
                $ligne = $req3->fetch();
            }
            echo"</select > <a href='nouvelle_ecole.php' target='_blank'>ajouter une école</a><br/><br/><br/>• Diplome obtenu : <input type = 'text' name = 'diplome3' value='".$ligne_exp_sco["diplome"]."'/> (brevet des collèges, baccalauréat, etc...)</label></h6><br/><br/>
 </div>
 <br/>";
        }
    }else{
        echo"<div style='margin-left: 500px'>
     <h6><strong>• 👨‍🎓 Diplome obtenu 3 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Année de rentrée : <input type = 'text' name = 'annee_entree3'/><br/><br/><br/>
     • Année de sortie : <input type = 'text' name = 'annee_sortie3'/><br/><br/><br/>
     • Etablissement fréquenté :
             <select name = 'ecole3'>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
                 $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
                 $req = $bdd->prepare('SELECT ID,adresse,niveau_etude,etablissement FROM ecole');
                 $req->execute();
                 $ligne = $req->fetch();
                 while($ligne)
                 {
                     echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["niveau_etude"]." ".$ligne["etablissement"]."</option>";
                     $ligne = $req->fetch();
                 }
             echo"</select ><a href='nouvelle_ecole.php' target='_blank'>ajouter une école</a> <br/><br/><br/>• Diplome obtenu : <input type = 'text' name = 'diplome3'/> (brevet des collèges, baccalauréat, etc...)</label></h6><br/><br/>
 </div>
 <br/> ";
    }
}else{
 echo"<div style='margin-left: 500px'>
     <h6><strong>• 👨‍🎓 Diplome obtenu 1 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Année de rentrée : <input type = 'text' name = 'annee_entree1'/><br/><br/><br/>
     • Année de sortie : <input type = 'text' name = 'annee_sortie1'/><br/><br/><br/>
     • Etablissement fréquenté :
             <select name = 'ecole1'>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
                 $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
                 $req = $bdd->prepare('SELECT ID,adresse,niveau_etude,etablissement FROM ecole');
                 $req->execute();
                 $ligne = $req->fetch();
                 while($ligne)
                 {
                     echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["niveau_etude"]." ".$ligne["etablissement"]."</option>";
                     $ligne = $req->fetch();
                 }
            echo"</select > <a href='nouvelle_ecole.php' target='_blank'> ajouter une école</a><br/><br/><br/>• Diplome obtenu : <input type = 'text' name = 'diplome1'/> (brevet des collèges, baccalauréat, etc...)</label></h6><br/><br/>
 </div>
 <br/><br/><br/>
 <div style='margin-left: 500px'>
     <h6><strong>• 👨‍🎓 Diplome obtenu 2 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Année de rentrée : <input type = 'text' name = 'annee_entree2'/><br/><br/><br/>
     • Année de sortie : <input type = 'text' name = 'annee_sortie2'/><br/><br/><br/>
     • Etablissement fréquenté :
             <select name = 'ecole2'>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
                 $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
                 $req = $bdd->prepare('SELECT ID,adresse,niveau_etude,etablissement FROM ecole');
                 $req->execute();
                 $ligne = $req->fetch();
                 while($ligne)
                 {
                     echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["niveau_etude"]." ".$ligne["etablissement"]."</option>";
                     $ligne = $req->fetch();
                 }
             echo"</select ><a href='nouvelle_ecole.php' target='_blank'> ajouter une école</a><br/><br/><br/>• Diplome obtenu : <input type = 'text' name = 'diplome2'/> (brevet des collèges, baccalauréat, etc...)</label></h6><br/><br/>
 </div>
 <br/><br/><br/>
 <div style='margin-left: 500px'>
     <h6><strong>• 👨‍🎓 Diplome obtenu 3 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Année de rentrée : <input type = 'text' name = 'annee_entree3'/><br/><br/><br/>
     • Année de sortie : <input type = 'text' name = 'annee_sortie3'/><br/><br/><br/>
     • Etablissement fréquenté :
             <select name = 'ecole3'>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
                 $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
                 $req = $bdd->prepare('SELECT ID,adresse,niveau_etude,etablissement FROM ecole');
                 $req->execute();
                 $ligne = $req->fetch();
                 while($ligne)
                 {
                     echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["niveau_etude"]." ".$ligne["etablissement"]."</option>";
                     $ligne = $req->fetch();
                 }
             echo"</select ><a href='nouvelle_ecole.php' target='_blank'> ajouter une école</a><br/><br/><br/>• Diplome obtenu : <input type = 'text' name = 'diplome3'/> (brevet des collèges, baccalauréat, etc...)</label></h6><br/><br/>
 </div>
 <br/> ";
}
?>
    <div style="margin-left: 1000px">
    <label>
        <h5 style="text-align: center"><input type="submit" value="Continuer ▶️"></label></h5>
    </label>
    </div>
</form>
</body>
</html>