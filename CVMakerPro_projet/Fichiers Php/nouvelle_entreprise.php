<html lang ="fr">
<head>
    <title>📄 CV MakerPro : connexion</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body> <!-- cette page est l'interface qui sert à rajouter une entreprise -->
<form method="post" action="ajout_entreprise_val.php">
    <div style="margin-left: 300px">
        <br/><br/>
        <h4>Ajouter les entreprises que vous voulez utiliser :</h4><br/><br/><br/>
        <h5>
            <label>
                Ville de l'entreprise : <input type="text" name ="adresse" required><br/><br/>
                Secteur : <input type="text" name="secteur" required><br/><br/>
                Nom de l'entreprise : <input type="text" name="nom" required><br/><br/>
                <input type="submit" value="Ajouter ✅" required="required">
            </label>
            <br/><br/><br/>
            Lorsque vous aurez fini, fermez cet onglet et rechargez la page "Expériences professionnelles" !
        </h5>
    </div>
</form>
</body>
</html>
