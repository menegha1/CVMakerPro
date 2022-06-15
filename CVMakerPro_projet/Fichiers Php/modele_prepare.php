<?php // dans cette page on récupère toutes les informations de l'utilisateur que l'on met dans des $_SESSION afin qu'elles soient accéssible dans toutes les prochaines pages de site
session_start();
$ID = $_SESSION["ID"];
echo"L'ID est $ID";
// On récupère les informations personnelles de l'utilisateur
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req1 = $bdd->prepare("SELECT nom,prenom,adresse,num_tel,date_naissance,description1,description2,description3,poste FROM `informations personnelle` WHERE id_inscription = ?");
$req1->execute([$ID]);
$info_perso = $req1->fetch();
$_SESSION["nom"] = $info_perso["nom"];
$_SESSION["prenom"] = $info_perso["prenom"];
$_SESSION["adresse"] = $info_perso["adresse"];
$_SESSION["num_tel"] = $info_perso["num_tel"];
$_SESSION["date_naissance"] = $info_perso["date_naissance"];
$_SESSION["desc1"] = $info_perso["description1"];
$_SESSION["desc2"] = $info_perso["description2"];
$_SESSION["desc3"] = $info_perso["description3"];
$_SESSION["poste"] = $info_perso["poste"];

$req7 = $bdd->prepare("SELECT email FROM `inscription` WHERE ID = ?");
$req7->execute([$ID]); // ici on récupere seulement l'email
$insc = $req7->fetch();
$_SESSION["email"] = $insc["email"];

// On récupère les expériences scolaires de l'utilisateur
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$test = $bdd->prepare("SELECT ID FROM `expériences scolaire` WHERE `id_inscription` = ?");
$test->execute([$ID]);
$exp_sco_test = $test->fetch();
$nb_exp_sco = 0;
while($exp_sco_test)
{
    $nb_exp_sco++; // ici on teste combien d'expériences scolaires l'utilisateur a
    $exp_sco_test = $test->fetch();
}
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req2 = $bdd->prepare("SELECT * FROM `expériences scolaire` INNER JOIN `ecole` ON `expériences scolaire`.`id_ecole` = `ecole`.ID WHERE id_inscription = ? ORDER BY annee_sortie DESC;");
$req2->execute([$ID]);
$exp_sco = $req2->fetch();
if($nb_exp_sco>0) // maitenant on rajoute de nouvelles variables en fonctions du nombre d'expériences scolaire que l'utilisateur a
{
    $_SESSION["annee_sortie1"] = $exp_sco["annee_sortie"];
    $_SESSION["annee_entree1"] = $exp_sco["annee_entree"];
    $_SESSION["diplome1"] = $exp_sco["diplome"];
    $_SESSION["etablissement1"] = $exp_sco["etablissement"];
    $_SESSION["niveau_etude1"] = $exp_sco["niveau_etude"];
    $_SESSION["adresse_ecole1"] = $exp_sco["adresse"];
}
if($nb_exp_sco>1)
{
    $exp_sco = $req2->fetch();
    $_SESSION["annee_sortie2"] = $exp_sco["annee_sortie"];
    $_SESSION["annee_entree2"] = $exp_sco["annee_entree"];
    $_SESSION["diplome2"] = $exp_sco["diplome"];
    $_SESSION["etablissement2"] = $exp_sco["etablissement"];
    $_SESSION["niveau_etude2"] = $exp_sco["niveau_etude"];
    $_SESSION["adresse_ecole2"] = $exp_sco["adresse"];
}else{
    $_SESSION["annee_sortie2"] = "";
    $_SESSION["annee_entree2"] = "";
    $_SESSION["diplome2"] = "";
    $_SESSION["etablissement2"] = "";
    $_SESSION["niveau_etude2"] = "";
    $_SESSION["adresse_ecole2"] = "";
}
if($nb_exp_sco>2)
{
    $exp_sco = $req2->fetch();
    $_SESSION["annee_sortie3"] = $exp_sco["annee_sortie"];
    $_SESSION["annee_entree3"] = $exp_sco["annee_entree"];
    $_SESSION["diplome3"] = $exp_sco["diplome"];
    $_SESSION["etablissement3"] = $exp_sco["etablissement"];
    $_SESSION["niveau_etude3"] = $exp_sco["niveau_etude"];
    $_SESSION["adresse_ecole3"] = $exp_sco["adresse"];
}else{
    $_SESSION["annee_sortie3"] = "";
    $_SESSION["annee_entree3"] = "";
    $_SESSION["diplome3"] = "";
    $_SESSION["etablissement3"] = "";
    $_SESSION["niveau_etude3"] = "";
    $_SESSION["adresse_ecole3"] = "";
}

// On recupère les expériences professionnelles de l'utilisateur
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$test = $bdd->prepare("SELECT ID FROM `expériences professionnelle` WHERE id_inscription = ? ORDER BY date_fin DESC");
$test->execute([$ID]);
$exp_pro_test = $test->fetch();
$nb_exp_pro = 0;
while($exp_pro_test)
{
    $nb_exp_pro++; // on repete exactement le meme processus pour les expériences professionnelles
    $exp_pro_test = $test->fetch();
}
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req3 = $bdd->prepare("SELECT * FROM `expériences professionnelle` INNER JOIN `entreprise` ON `expériences professionnelle`.`id_entreprise` = `entreprise`.ID WHERE id_inscription = ? ORDER BY date_fin DESC");
$req3->execute([$ID]);
$exp_pro = $req3->fetch();
if($nb_exp_pro>0)
{
    $_SESSION["date_debut1"] = $exp_pro["date_debut"];
    $_SESSION["date_fin1"] = $exp_pro["date_fin"];
    $_SESSION["tache1"] = $exp_pro["taches"];
    $_SESSION["poste1"] = $exp_pro["poste"];
    $_SESSION["adresse_entreprise1"] = $exp_pro["adresse"];
    $_SESSION["nom_entreprise1"] = $exp_pro["nom"];
    $_SESSION["secteur1"] = $exp_pro["secteur"];
}
if($nb_exp_pro>1)
{
    $exp_pro = $req3->fetch();
    $_SESSION["date_debut2"] = $exp_pro["date_debut"];
    $_SESSION["date_fin2"] = $exp_pro["date_fin"];
    $_SESSION["tache2"] = $exp_pro["taches"];
    $_SESSION["poste2"] = $exp_pro["poste"];
    $_SESSION["adresse_entreprise2"] = $exp_pro["adresse"];
    $_SESSION["nom_entreprise2"] = $exp_pro["nom"];
    $_SESSION["secteur2"] = $exp_pro["secteur"];
}else{
    $_SESSION["date_debut2"] = "";
    $_SESSION["date_fin2"] = "";
    $_SESSION["tache2"] = "";
    $_SESSION["poste2"] = "";
    $_SESSION["adresse_entreprise2"] = "";
    $_SESSION["nom_entreprise2"] = "";
    $_SESSION["secteur2"] = "";
}
if($nb_exp_pro>2)
{
    $exp_pro = $req3->fetch();
    $_SESSION["date_debut3"] = $exp_pro["date_debut"];
    $_SESSION["date_fin3"] = $exp_pro["date_fin"];
    $_SESSION["tache3"] = $exp_pro["taches"];
    $_SESSION["poste3"] = $exp_pro["poste"];
    $_SESSION["adresse_entreprise3"] = $exp_pro["adresse"];
    $_SESSION["nom_entreprise3"] = $exp_pro["nom"];
    $_SESSION["secteur3"] = $exp_pro["secteur"];
}else{
    $_SESSION["date_debut3"] = "";
    $_SESSION["date_fin3"] = "";
    $_SESSION["tache3"] = "";
    $_SESSION["poste3"] = "";
    $_SESSION["adresse_entreprise3"] = "";
    $_SESSION["nom_entreprise3"] = "";
    $_SESSION["secteur3"] = "";
}

// On récupère les qualifications de l'utilisateur
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$test = $bdd->prepare("SELECT ID FROM `qualifications` WHERE `id_inscription` = ?;");
$test->execute([$ID]);
$qualif_test = $test->fetch();
$nb_qualif = 0;
while($qualif_test)
{
    $nb_qualif++; // exactement pareil pour les qualifications
    $qualif_test = $test->fetch();
}
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req4 = $bdd->prepare("SELECT qualif FROM `qualifications` WHERE `id_inscription` = ?;");
$req4->execute([$ID]);
$qualif = $req4->fetch();
if($nb_qualif>0)
{
    $_SESSION["qualif1"] = $qualif["qualif"];
}
if($nb_qualif>1)
{
    $qualif = $req4->fetch();
    $_SESSION["qualif2"] = $qualif["qualif"];
}else{
    $_SESSION["qualif2"] = "";
}
if($nb_qualif>2)
{
    $qualif = $req4->fetch();
    $_SESSION["qualif3"] = $qualif["qualif"];
}else{
    $_SESSION["qualif3"] = "";
}
if($nb_qualif>3)
{
    $qualif = $req4->fetch();
    $_SESSION["qualif4"] = $qualif["qualif"];
}else{
    $_SESSION["qualif4"] = "";
}
if($nb_qualif>4)
{
    $qualif = $req4->fetch();
    $_SESSION["qualif5"] = $qualif["qualif"];
}else{
    $_SESSION["qualif5"] = "";
}

// On récupère les niveaux en langue de l'utilisateur
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$test = $bdd->prepare("SELECT ID FROM `niveau langue` WHERE `id_inscription` = ?");
$test->execute([$ID]);
$langue_test = $test->fetch();
$nb_langue = 0;
while($langue_test)
{
    $nb_langue++; // exactement pareil pour les langues
    $langue_test = $test->fetch();
}
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req5 = $bdd->prepare("SELECT langue,niveau FROM `niveau langue` WHERE `id_inscription` = ?");
$req5->execute([$ID]);
$langue = $req5->fetch();
if($nb_langue>0)
{
    $_SESSION["langue1"] = $langue["langue"];
    $_SESSION["niveau_langue1"] = $langue["niveau"];
}
if($nb_langue>1)
{
    $langue = $req5->fetch();
    $_SESSION["langue2"] = $langue["langue"];
    $_SESSION["niveau_langue2"] = $langue["niveau"];
}else{
    $_SESSION["langue2"] = "";
    $_SESSION["niveau_langue2"] = 0;
}
if($nb_langue>2)
{
    $langue = $req5->fetch();
    $_SESSION["langue3"] = $langue["langue"];
    $_SESSION["niveau_langue3"] = $langue["niveau"];
}else{
    $_SESSION["langue3"] = "";
    $_SESSION["niveau_langue3"] = 0;
}
if($nb_langue>3)
{
    $langue = $req5->fetch();
    $_SESSION["langue4"] = $langue["langue"];
    $_SESSION["niveau_langue4"] = $langue["niveau"];
}else{
    $_SESSION["langue4"] = "";
    $_SESSION["niveau_langue4"] = 0;
}
if($nb_langue>4)
{
    $langue = $req5->fetch();
    $_SESSION["langue5"] = $langue["langue"];
    $_SESSION["niveau_langue5"] = $langue["niveau"];
}else{
    $_SESSION["langue5"] = "";
    $_SESSION["niveau_langue5"] = 0;
}

// On récupère les niveaux en langue de l'utilisateur
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$test = $bdd->prepare("SELECT ID FROM `loisirs` WHERE `id_inscription` = ?");
$test->execute([$ID]);
$loisirs_test = $test->fetch();
$nb_loisirs = 0;
while($loisirs_test)
{
    $nb_loisirs++; // exactement pareil pour les loisirs
    $loisirs_test = $test->fetch();
}
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req6 = $bdd->prepare("SELECT loisir FROM `loisirs` WHERE `id_inscription` = ?");
$req6->execute([$ID]);
$loisirs = $req6->fetch();
if($nb_qualif>0)
{
    $_SESSION["loisir1"] = $loisirs["loisir"];
}
if($nb_qualif>1)
{
    $loisirs = $req6->fetch();
    $_SESSION["loisir2"] = $loisirs["loisir"];
}else{
    $_SESSION["loisir2"] = "";
}
if($nb_qualif>2)
{
    $loisirs = $req6->fetch();
    $_SESSION["loisir3"] = $loisirs["loisir"];
}else{
    $_SESSION["loisir3"] = "";
}
if($nb_qualif>3)
{
    $loisirs = $req6->fetch();
    $_SESSION["loisir4"] = $loisirs["loisir"];
}else{
    $_SESSION["loisir4"] = "";
}
if($nb_qualif>4)
{
    $loisirs = $req6->fetch();
    $_SESSION["loisir5"] = $loisirs["loisir"];
}else{
    $_SESSION["loisir5"] = "";
}

// On regarde quel modele a été choisi par l'utilisateur
$modele = $_POST["modele"];
echo"$modele";
// ici on vérifie quel modèle l'utilisateur a choisi
if($modele == 1)
{
    header("Location:Modele1.php");
}

if($modele == 2)
{
    header("Location:Modele2.php");
}

if($modele == 3)
{
    header("Location:Modele3.php");
}
?>