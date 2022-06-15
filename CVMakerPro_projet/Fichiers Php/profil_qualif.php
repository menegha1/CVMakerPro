<html lang ="fr">
<head>
    <title>📄 CV MakerPro : connexion</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body> <!-- cette page permet de demander à l'utilisateur quelles sont ses qualifications (informatique ou non) -->
<form method="post" action ="qualif_valid.php">
<br/>
    <h5 style = "text-align: center"><strong>👉 Qualifications et Compétences (Word, Excel, Facilité en Mathématiques, Permis, Etc...) 👈</strong></h5><br/><br/>
<div style="margin-left: 500px">
    <h6><label><?php
            session_start();
            $ID = $_SESSION["ID"];
            $nb_qualif = 0;
            $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
            $req1 = $bdd->prepare("SELECT ID FROM `qualifications` WHERE id_inscription = $ID;");
            $req1->execute();
            $ligne1 = $req1->fetch();
            while ($ligne1)
            {
                $nb_qualif++;
                $ligne1 = $req1->fetch();
            }
            $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
            $req2 = $bdd->prepare("SELECT qualif FROM `qualifications` WHERE id_inscription = $ID;");
            $req2->execute();
            $ligne2 = $req2->fetch();

           if($nb_qualif>0)
           {
               echo "• 💻 Qualification : <input type='text' name='qualif1' value='" . $ligne2["qualif"] . "'/> <br/><br/><br/>";

               if($nb_qualif>1)
               {
                   $ligne2 = $req2->fetch();
                   echo "• 💻 Qualification : <input type='text' name='qualif2' value='" . $ligne2["qualif"] . "'/> <br/><br/><br/>";
               }else{
                   echo "• 💻 Qualification : <input type='text' name='qualif2'/> <br/><br/><br/>";
               }

               if($nb_qualif>2)
               {
                   $ligne2 = $req2->fetch();
                   echo "• 💻 Qualification : <input type='text' name='qualif3' value='" . $ligne2["qualif"] . "'/> <br/><br/><br/>";
               }else{
                   echo "• 💻 Qualification : <input type='text' name='qualif3'/> <br/><br/><br/>";
               }

               if($nb_qualif>3)
               {
                   $ligne2 = $req2->fetch();
                   echo "• 💻 Qualification : <input type='text' name='qualif4' value='" . $ligne2["qualif"] . "'/> <br/><br/><br/>";
               }else{
                   echo "• 💻 Qualification : <input type='text' name='qualif4'/> <br/><br/><br/>";
               }

               if($nb_qualif>4)
               {
                   $ligne2 = $req2->fetch();
                   echo "• 💻 Qualification : <input type='text' name='qualif5' value='" . $ligne2["qualif"] . "'/> <br/><br/>";
               }else{
                   echo "• 💻 Qualification : <input type='text' name='qualif5'/> <br/><br/>";
               }

           }else{
                echo "• 💻 Qualification : <input type='text' name='qualif1'/> <br/><br/><br/>
                      • 💻 Qualification : <input type='text' name='qualif2'/> <br/><br/><br/>
                      • 💻 Qualification : <input type='text' name='qualif3'/> <br/><br/><br/>
                      • 💻 Qualification : <input type='text' name='qualif4'/> <br/><br/><br/>
                      • 💻 Qualification : <input type='text' name='qualif5'/> <br/><br/>";
            } ?></div>
            <br/><br/><h6 style="text-align: center"><input type="submit" value="Continuer ▶️" required="required"></label></h6>

</body>
</html>