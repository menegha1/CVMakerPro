<?php
session_start();
$ID = $_SESSION["ID"];
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req = $bdd->prepare("SELECT pseudo FROM `inscription` WHERE ID = '$ID';");
$req->execute();
$ligne = $req->fetch();
$pseudo = $ligne["pseudo"];
?>
<html lang ="fr">
<head>
    <title>📄 CV MakerPro : connexion</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<form method="post" action ="info_perso_valid.php">
<br/>
<h2 style = "text-align: center"><strong>• Bienvenue sur votre profil <?php echo"$pseudo 😀 •"?></strong></h2><br/><br/>
<h4 style = "text-align: center"><u>Voici les informations à saisir pour former votre CV :</u></h4><br/>

<h5 style = "text-align: center"><strong>👉 Informations personnelles 👈</strong></h5><br/><br/>
<div style="margin-left: 500px">
<h6><label><?php
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req2 = $bdd->prepare("SELECT nom,prenom,date_naissance,num_tel,adresse,description1,description2,description3,poste FROM `informations personnelle` WHERE id_inscription = $ID;");
$req2->execute(); // ici on récupère les informations personnelles de l'utilisateur et on vérifie si elles existent déjà ou non
$ligne2 = $req2->fetch();
if($ligne2) { // ici sont les entrées avec les informations personnelles de l'utilisateurs déjà enregistrées
    echo "• Nom : <input type='text' name='nom' value='" . $ligne2["nom"] . "'/> <br/><br/><br/>
• Prénom : <input type='text' name='prenom' value='" . $ligne2["prenom"] . "'/> <br/><br/><br/>   
• Adresse : <input type='text' name='adresse' value='" . $ligne2["adresse"] . "'/> <br/><br/><br/>
• Numéro de Téléphone : <input type='number' name='num_tel' value='" . $ligne2["num_tel"] . "'/> <br/><br/><br/>
• Date de naissance : <input type='date' name='date_naissance' value='" . $ligne2["date_naissance"] . "'/> <br/><br/><br/>
• Poste recherché : <input type='text' name='poste' value='" . $ligne2["poste"] . "'/> <br/><br/><br/>
• Décrivez en quelques mots votre parcours : <br/><br/><textarea name='desc1' maxlength='65' cols='70' rows='4' required>" . $ligne2["description1"] . "</textarea> <br/><br/><br/>
• Continuez ici : <br/><br/><textarea name='desc2' maxlength='65' cols='70' rows='4' >" . $ligne2["description2"] . "</textarea> <br/><br/><br/>
• Continuez encore ici : <br/><br/><textarea name='desc3' maxlength='65' cols='70' rows='4' >" . $ligne2["description3"] . "</textarea> <br/><br/><br/>";

}else{ // ici sont les entrées vides
    echo "• Nom : <input type='text' name='nom'/> <br/><br/><br/>
• Prénom : <input type='text' name='prenom'/> <br/><br/><br/>   
• Adresse : <input type='text' name='adresse'/> <br/><br/><br/>
• Numéro de Téléphone : <input type='number' name='num_tel'/> <br/><br/><br/>
• Date de naissance : <input type='date' name='date_naissance'/> <br/><br/><br/>
• Poste recherché : <input type='text' name='poste'/> <br/><br/><br/>
• Décrivez en quelques mots votre parcours : <br/><br/><textarea name='desc1' maxlength='65' cols='70' rows='4' required></textarea> <br/><br/><br/><br/>
• Continuez ici : <br/><br/><textarea name='desc2' maxlength='65' cols='70' rows='4'></textarea> <br/><br/><br/><br/>
• Continuez encore ici : <br/><br/><textarea name='desc3' maxlength='65' cols='70' rows='4'></textarea> <br/><br/><br/><br/>
";
} ?>
    <h6 style="text-align: center"><input type="submit" value="Continuer ▶️" required="required"></label></h6> <!-- ici le required sert à obligé l'ulitilisateur à remplir les champs necessaires -->
</div>
</body>
</html>