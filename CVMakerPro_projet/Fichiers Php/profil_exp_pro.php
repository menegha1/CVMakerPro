<html lang ="fr">
<head>
    <title>📄 CV MakerPro : connexion</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body> <!-- cette page est l'interface pour ajouter les expériences professionnelles -->
<form method="post" action="exp_pro_valid.php">
    <br/>
    <h5 style = "text-align: center"><strong>👉 Expériences professionnelles (laisser "VIDE" si inexistant) 👈</strong></h5><br/><br/>
    <?php
    session_start();
    $ID = $_SESSION["ID"];
    $nb_exp_pro = 0;
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req = $bdd->prepare("SELECT ID FROM `expériences professionnelle` WHERE id_inscription = ?");
    $req->execute([$ID]);
    $ligne_test = $req->fetch();
    while($ligne_test)
    {
        $nb_exp_pro++; // ici on teste combien d'expériences professionnelles l'utilisateur a déjà rentré
        $ligne_test = $req->fetch();
    }
    if($nb_exp_pro>0) // ici on fait l'interface d'une expérience scolaire qui a déjà été rentrée
    {
        $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
        $req1 = $bdd->prepare("SELECT * FROM `expériences professionnelle` INNER JOIN `entreprise` ON `expériences professionnelle`.`id_entreprise` = `entreprise`.ID WHERE id_inscription = ? ORDER BY date_fin DESC");
        $req1->execute([$ID]); // on récupère les informations de la premiere expériences professionnelle
        $ligne_exp_pro = $req1->fetch();
        echo"<div style='margin-left: 500px'>
     <h6><strong>• 👷‍ Expérience professionnelle 1 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Date de début : <input type = 'date' name = 'date_debut1' value='".$ligne_exp_pro["date_debut"]."'/><br/><br/><br/>
     • Date de fin : <input type = 'date' name = 'date_fin1' value='".$ligne_exp_pro["date_fin"]."'/><br/><br/><br/>
     • Entreprise fréquentée :
             <select name = 'entreprise1'>
                 <option value = '".$ligne_exp_pro["id_entreprise"]."'>".$ligne_exp_pro["adresse"]." - ".$ligne_exp_pro["nom"]." (".$ligne_exp_pro["secteur"].")</option> <!-- ici on affiche l'entreprise que l'utilisateur avait déjà choisi lors de sa derniere visite -->
                 <option value = '-1'>---------------- VIDE ----------------</option>"; // l'option vide qui sert à l'utilisateur de ne rien séléctionner
        $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
        $req3 = $bdd->prepare('SELECT ID,adresse,secteur,nom FROM `entreprise`;');
        $req3->execute();
        $ligne = $req3->fetch();
        while($ligne)
        {
            echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["nom"]." (".$ligne["secteur"].")</option>"; // ici nous sommes dans une boucle qui rajouter un choix dans la séléction pour chaque entreprise présente dans la base de données
            $ligne = $req3->fetch();
        }
        echo"</select > <a href='nouvelle_entreprise.php' target='_blank'>ajouter une entreprise</a><br/><br/><br/>• Poste pendant l'expérience : <input type='text' name = 'poste1' value='".$ligne_exp_pro["poste"]."'></label><br/><br/>
 • Tache pendant l'exprérience :<br/><textarea name='tache1' rows='4' cols='60' maxlength='100'>".$ligne_exp_pro["taches"]."</textarea></div></h6>
 <br/><br/><br/>";
        if($nb_exp_pro>1) // puis on repete cela pour les autres expériences scolaires
        {
            $ligne_exp_pro = $req1->fetch();
            echo"<div style='margin-left: 500px'>
     <h6><strong>• 👷‍ Expérience professionnelle 2 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Date de début : <input type = 'date' name = 'date_debut2' value='".$ligne_exp_pro["date_debut"]."'/><br/><br/><br/>
     • Date de fin : <input type = 'date' name = 'date_fin2' value='".$ligne_exp_pro["date_fin"]."'/><br/><br/><br/>
     • Entreprise fréquentée :
             <select name = 'entreprise2'>
                 <option value = '".$ligne_exp_pro["id_entreprise"]."'>".$ligne_exp_pro["adresse"]." - ".$ligne_exp_pro["nom"]." (".$ligne_exp_pro["secteur"].")</option>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
            $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
            $req3 = $bdd->prepare('SELECT ID,adresse,secteur,nom FROM `entreprise`;');
            $req3->execute();
            $ligne = $req3->fetch();
            while($ligne)
            {
                echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["nom"]." (".$ligne["secteur"].")</option>";
                $ligne = $req3->fetch();
            }
            echo"</select > <a href='nouvelle_entreprise.php' target='_blank'>ajouter une entreprise</a><br/><br/><br/>• Poste pendant l'expérience : <input type='text' name = 'poste2'  value='".$ligne_exp_pro["poste"]."'></label><br/><br/>
 • Tache pendant l'exprérience :<br/><textarea name='tache2' rows='4' cols='60' maxlength='100'>".$ligne_exp_pro["taches"]."</textarea></div></h6>
 <br/><br/><br/>";
        }else{ // ici cela affiche une expériences scolaire vide si l'utilisateur n'a pas 2 ou + expériences scolaires
            echo"<div style='margin-left: 500px'>
     <h6><strong>• 👷‍ Expérience professionnelle 2 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Date de début : <input type = 'date' name = 'date_debut2'/><br/><br/><br/>
     • Date de fin : <input type = 'date' name = 'date_fin2'/><br/><br/><br/>
     • Entreprise fréquentée :
             <select name = 'entreprise2'>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
            $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
            $req = $bdd->prepare('SELECT ID,adresse,secteur,nom FROM `entreprise`;');
            $req->execute();
            $ligne = $req->fetch();
            while($ligne)
            {
                echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["nom"]." (".$ligne["secteur"].")</option>";
                $ligne = $req->fetch();
            }
            echo"</select > <a href='nouvelle_entreprise.php' target='_blank'>ajouter une entreprise</a><br/><br/><br/>• Poste pendant l'expérience : <input type='text' name = 'poste2'/></label><br/><br/>
 • Tache pendant l'exprérience :<br/><textarea name='tache2' rows='4' cols='60' maxlength='100'></textarea></div></h6>
 <br/><br/><br/>";
        }
        if($nb_exp_pro>2)
        {
            $ligne_exp_pro = $req1->fetch();
            echo"<div style='margin-left: 500px'>
     <h6><strong>• 👷‍ Expérience professionnelle 3 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Date de début : <input type = 'date' name = 'date_debut3' value='".$ligne_exp_pro["date_debut"]."'/><br/><br/><br/>
     • Date de fin : <input type = 'date' name = 'date_fin3' value='".$ligne_exp_pro["date_fin"]."'/><br/><br/><br/>
     • Entreprise fréquentée :
             <select name = 'entreprise3'>
                 <option value = '".$ligne_exp_pro["id_entreprise"]."'>".$ligne_exp_pro["adresse"]." - ".$ligne_exp_pro["nom"]." (".$ligne_exp_pro["secteur"].")</option>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
            $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
            $req3 = $bdd->prepare('SELECT ID,adresse,secteur,nom FROM `entreprise`;');
            $req3->execute();
            $ligne = $req3->fetch();
            while($ligne)
            {
                echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["nom"]." (".$ligne["secteur"].")</option>";
                $ligne = $req3->fetch();
            }
            echo"</select > <a href='nouvelle_entreprise.php' target='_blank'>ajouter une entreprise</a><br/><br/><br/>• Poste pendant l'expérience : <input type='text' name = 'poste3' value='".$ligne_exp_pro["poste"]."'></label><br/><br/>
 • Tache pendant l'exprérience :<br/><textarea name='tache3' rows='4' cols='60' maxlength='100'>".$ligne_exp_pro["taches"]."</textarea></div></h6>
 <br/><br/><br/>";
        }else{
            echo"<div style='margin-left: 500px'>
     <h6><strong>• 👷‍ Expérience professionnelle 3 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Date de début : <input type = 'date' name = 'date_debut3'/><br/><br/><br/>
     • Date de fin : <input type = 'date' name = 'date_fin3'/><br/><br/><br/>
     • Entreprise fréquentée :
             <select name = 'entreprise3'>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
            $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
            $req = $bdd->prepare('SELECT ID,adresse,secteur,nom FROM `entreprise`;');
            $req->execute();
            $ligne = $req->fetch();
            while($ligne)
            {
                echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["nom"]." (".$ligne["secteur"].")</option>";
                $ligne = $req->fetch();
            }
            echo"</select > <a href='nouvelle_entreprise.php' target='_blank'>ajouter une entreprise</a><br/><br/><br/>• Poste pendant l'expérience : <input type='text' name = 'poste3'/></label><br/><br/>
 • Tache pendant l'exprérience :<br/><textarea name='tache3' rows='4' cols='60' maxlength='100'></textarea></div></h6>
 <br/><br/><br/>";
        }
    }else{ // ici on affiche 3 expériences soclaires vide car l'utilisateur n'en a jamais rentré
        echo"<div style='margin-left: 500px'>
     <h6><strong>• 👷‍ Expérience professionnelle 1 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Date de début : <input type = 'date' name = 'date_debut1'/><br/><br/><br/>
     • Date de fin : <input type = 'date' name = 'date_fin1'/><br/><br/><br/>
     • Entreprise fréquentée :
             <select name = 'entreprise1'>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
        $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
        $req = $bdd->prepare('SELECT ID,adresse,secteur,nom FROM `entreprise`;');
        $req->execute();
        $ligne = $req->fetch();
        while($ligne)
        {
            echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["nom"]." (".$ligne["secteur"].")</option>";
            $ligne = $req->fetch();
        }
        echo"</select > <a href='nouvelle_entreprise.php' target='_blank'>ajouter une entreprise</a><br/><br/><br/>• Poste pendant l'expérience : <input type='text' name = 'poste1'/></label><br/><br/>
 • Tache pendant l'exprérience :<br/><textarea name='tache1' rows='4' cols='60' maxlength='100'></textarea></div></h6>
 <br/><br/><br/>
 <div style='margin-left: 500px'>
     <h6><strong>• 👷‍ Expérience professionnelle 2 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Date de début : <input type = 'date' name = 'date_debut2'/><br/><br/><br/>
     • Date de fin : <input type = 'date' name = 'date_fin2'/><br/><br/><br/>
     • Entreprise fréquentée :
             <select name = 'entreprise2'>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
        $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
        $req = $bdd->prepare('SELECT ID,adresse,secteur,nom FROM `entreprise`;');
        $req->execute();
        $ligne = $req->fetch();
        while($ligne)
        {
            echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["nom"]." (".$ligne["secteur"].")</option>";
            $ligne = $req->fetch();
        }
        echo"</select > <a href='nouvelle_entreprise.php' target='_blank'>ajouter une entreprise</a><br/><br/><br/>• Poste pendant l'expérience : <input type='text' name = 'poste2'/></label><br/><br/>
 • Tache pendant l'exprérience :<br/><textarea name='tache2' rows='4' cols='60' maxlength='150'></textarea></div></h6>
 <br/><br/><br/>
  <div style='margin-left: 500px'>
     <h6><strong>• 👷‍ Expérience professionnelle 3 (laisser vide si non-existant) :</strong><br/><br/><br/>
     <label>• Date de début : <input type = 'date' name = 'date_debut3'/><br/><br/><br/>
     • Date de fin : <input type = 'date' name = 'date_fin3'/><br/><br/><br/>
     • Entreprise fréquentée :
             <select name = 'entreprise3'>
                 <option value = '-1'>---------------- VIDE ----------------</option>";
        $bdd = new PDO('mysql:host=localhost;dbname=cv_makerpro;charset=utf8', 'root', '');
        $req = $bdd->prepare('SELECT ID,adresse,secteur,nom FROM `entreprise`;');
        $req->execute();
        $ligne = $req->fetch();
        while($ligne)
        {
            echo"<option value=".$ligne["ID"].">".$ligne["adresse"]." - ".$ligne["nom"]." (".$ligne["secteur"].")</option>";
            $ligne = $req->fetch();
        }
        echo"</select > <a href='nouvelle_entreprise.php' target='_blank'>ajouter une entreprise</a><br/><br/><br/>• Poste pendant l'expérience : <input type='text' name = 'poste3'/></label><br/><br/>
 • Tache pendant l'exprérience :<br/><textarea name='tache3' rows='4' cols='60' maxlength='150'></textarea></div></h6>
 <br/>";
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
