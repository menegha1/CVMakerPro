<html lang ="fr">
<head>
    <title>📄 CV MakerPro : connexion</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body> <!-- cette page permet de demander à l'utilisateur de rentrer ses loisirs -->
<form method="post" action ="loisirs_valid.php">
<br/>
    <h5 style = "text-align: center"><strong>👉 Vos loisirs 👈</strong></h5><br/><br/>
<div style="margin-left: 500px">
    <h6><label><?php
    session_start();
    $ID = $_SESSION["ID"];
    $nb_loisirs = 0;
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req1 = $bdd->prepare("SELECT ID FROM `loisirs` WHERE id_inscription = $ID;");
    $req1->execute();
    $ligne1 = $req1->fetch();
    while ($ligne1)
    {
        $nb_loisirs++;
        $ligne1 = $req1->fetch();
    }
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req2 = $bdd->prepare("SELECT loisir FROM `loisirs` WHERE id_inscription = $ID;");
    $req2->execute(); // ici on vient chercher les loisirs déjà existant de l'utilisateur
    $ligne2 = $req2->fetch();

    if($nb_loisirs>0)
    {
        echo "• 🚴 Loisirs : <input type='text' name='loisirs1' value='" . $ligne2["loisir"] . "'/> <br/><br/><br/>";

        if($nb_loisirs>1)
        {
            $ligne2 = $req2->fetch();
            echo "• 🚴 Loisirs : <input type='text' name='loisirs2' value='" . $ligne2["loisir"] . "'/> <br/><br/><br/>";
        }else{
            echo "• 🚴 Loisirs : <input type='text' name='loisirs2'/> <br/><br/><br/>";
        }

        if($nb_loisirs>2)
        {
            $ligne2 = $req2->fetch();
            echo "• 🚴 Loisirs : <input type='text' name='loisirs3' value='" . $ligne2["loisir"] . "'/> <br/><br/><br/>";
        }else{
            echo "• 🚴 Loisirs : <input type='text' name='loisirs3'/> <br/><br/><br/>";
        }

        if($nb_loisirs>3)
        {
            $ligne2 = $req2->fetch();
            echo "• 🚴 Loisirs : <input type='text' name='loisirs4' value='" . $ligne2["loisir"] . "'/> <br/><br/><br/>";
        }else{
            echo "• 🚴 Loisirs : <input type='text' name='loisirs4'/> <br/><br/><br/>";
        }

        if($nb_loisirs>4)
        {
            $ligne2 = $req2->fetch();
            echo "• 🚴 Loisirs : <input type='text' name='loisirs5' value='" . $ligne2["loisir"] . "'/> <br/><br/>";
        }else{
            echo "• 🚴 Loisirs : <input type='text' name='loisirs5'/> <br/><br/>";
        }

    }else{
        echo "• 🚴 Loisirs : <input type='text' name='loisirs1'/> <br/><br/><br/>
                      • 🚴 Loisirs : <input type='text' name='loisirs2'/> <br/><br/><br/>
                      • 🚴 Loisirs : <input type='text' name='loisirs3'/> <br/><br/><br/>
                      • 🚴 Loisirs : <input type='text' name='loisirs4'/> <br/><br/><br/>
                      • 🚴 Loisirs : <input type='text' name='loisirs5'/> <br/><br/>";
    } ?></div>
<br/><br/><h6 style="text-align: center"><input type="submit" value="Continuer ▶️" required="required"></label></h6>

</body>
</html>