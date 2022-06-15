<html lang ="fr">
<head>
    <title>📄 CV MakerPro : connexion</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body> <!-- cette page est l'interface qui sert à rajouter une école -->
<form method="post" action="ajout_ecole_val.php">
<div style="margin-left: 300px">
<br/><br/>
<h4>Ajouter les écoles que vous voulez utiliser :</h4><br/><br/><br/>
    <h5>
        <label>
            Ville de l'établissement : <input type="text" name ="adresse" required><br/><br/>
            Niveau d'étude : <input type="text" name="niveau_etude" required> (Collège, Lycée, etc...)<br/><br/>
            Nom de l'etablissement : <input type="text" name="etablissement" required> (par ex "Lycée Pierre D'ailly" le nom est "Pierre D'Ailly")<br/><br/>
            <input type="submit" value="Ajouter ✅" required="required">
        </label>
        <br/><br/><br/>
        Lorsque vous aurez fini, fermez cet onglet et rechargez la page "Expériences scolaires" !
    </h5>
</div>
</form>
</body>
</html>
