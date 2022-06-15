<html lang ="fr">
<head>
    <title>📄 CV MakerPro : connexion</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body> <!-- c'est la meme page que inscription.php mais avec un message d'erreur sur le pseudo -->
<form method="post" action ="validation_inscription.php">
<br/><br/>
<h1 style="text-align: center;"><u><strong>CV Maker Pro</strong></u></h1>
<h2 style="text-align: center;">Tapez vos informations pour vous inscrire :</h2>
<br/><br/>
<h5 style ="text-align: center"><u> Pseudo :</u><br/><br/><label><input type = "text" name = "pseudo" required/></label></h5>
<h6 style="color: red; text-align: center">Le pseudo est déjà utilisé</h6><br/>
<h5 style ="text-align: center"><u> Email :</u><br/><br/><label><input type = "email" name = "email" required/></label><br/><br/>
    <u> Mot de passe :</u><br/><br/><label><input type = "password" name = "mdp" required/></label></h5>
<br/>
<h6 style ="text-align: center;"> <input type = "submit" value = "S'inscrire ✅"/> </h6><br/>
<br/><br/>
</body>
</html>
