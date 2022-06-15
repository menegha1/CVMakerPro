<html lang ="fr"> <!-- cette page sert simplement à demander à l'utilisateur de choisir le modele qu'il veut -->
    <head>
    <title>📄 CV MakerPro : connexion</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>

    <body>
        <form method="post" action ="modele_prepare.php">
    <br/><br/><br/><br/><br/>
        <div style="margin-left: 150px">
            <img src="modele1.png" height="389" width="275">
            <img src="modele2.png" height="389" width="275" style="margin-left: 200px">
            <img src="modele3.png" height="389" width="275" style="margin-left: 200px">
        </div>

            <br/><br/>
            <label>
                <input type= "radio" name="modele" value=1 style="margin-left: 230px" required> Modele 1
                <input type= "radio" name="modele" value=2 style="margin-left: 410px"> Modele 2
                <input type= "radio" name="modele" value=3 style="margin-left: 410px"> Modele 3
            <br/><br/>
                <input type="submit" value="Valider" style="margin-left: 700px" required="required">
            </label>
        </form>
    </body>
</html>
