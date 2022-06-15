<html lang ="fr">
<head>
    <title>📄 CV MakerPro : connexion</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body> <!-- cette page sert a récuperer les informations de connexion de l'utilisateur -->
<form method="post" action ="verif_connexion.php">
<br/><br/>
<h1 style="text-align: center;"><u><strong>Bienvenue sur CV Maker Pro</strong></u></h1>
<h2 style="text-align: center;">Tout d'abord veuillez vous connecter :</h2>
<br/><br/><br/>
    <h5 style ="text-align: center"><u> Pseudo :</u><br/><br/><input type = "text" name = "pseudo" required/></h5><br/><br/><br/>
    <h5 style ="text-align: center"><u> Mot de passe :</u><br/><br/><input type = "password" name = "mdp" required/></h5>
    <br/>
    <h6 style ="text-align: center;"> <input type = "submit" value = "Se connecter ✅" required="required"/> </h6> <br/>
<h6 style="text-align: center">Vous n'avez pas de compte ? Cliquez <a href = "inscription.php"/><u><span style="color: cornflowerblue;"/>ici</u></span></a></h6> <!-- ici l'utilisateur pourra cliquer s'il n'a pas encore de compte -->
</form>
</body>
</html>
