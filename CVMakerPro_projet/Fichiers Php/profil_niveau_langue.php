<html lang ="fr">
<head>
    <title>📄 CV MakerPro : connexion</title>
    <link rel="icon" type="text/png" href="Logo.png" />
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<form method="post" action ="niveau_langue_valid.php">
<br/> <!-- cette page permet de demander à l'utilisateur quelles langues il parle et à quel niveau il les parle -->
    <h5 style = "text-align: center"><strong>👉 Niveau en langue 👈</strong></h5><br/><br/>
<div style="margin-left: 500px">
    <h6><label><?php
    session_start();
    $ID = $_SESSION["ID"];
    $nb_langue = 0;
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req1 = $bdd->prepare("SELECT ID FROM `niveau langue` WHERE id_inscription = $ID;");
    $req1->execute();
    $ligne1 = $req1->fetch();
    while ($ligne1)
    {
        $nb_langue++;
        $ligne1 = $req1->fetch();
    }
    $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
    $req2 = $bdd->prepare("SELECT langue,niveau FROM `niveau langue` WHERE id_inscription = $ID ORDER BY niveau DESC;");
    $req2->execute();
    $ligne2 = $req2->fetch();

    if($nb_langue>0)
    {
        echo "• 🌍 Langue : <input type='text' name='langue1' value='" . $ligne2["langue"] . "'/> <select name = 'niveau1'>
                 <option value = '".$ligne2["niveau"]."'>".$ligne2["niveau"]." / 5 </option>
                 <option value = '-1'> -------</option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select><br/><br/><br/>";

        if($nb_langue>1)
        {
            $ligne2 = $req2->fetch();
            echo "• 🌍 Langue : <input type='text' name='langue2' value='" . $ligne2["langue"] . "'/> <select name = 'niveau2'>
                 <option value = '".$ligne2["niveau"]."'>".$ligne2["niveau"]." / 5 </option>
                 <option value = '-1'> -------</option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select><br/><br/><br/>";
        }else{
            echo "• 🌍 Langue : <input type='text' name='langue2'/>  <select name = 'niveau2'>
                 <option value = '-1'> -----</option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select><br/><br/><br/>";
        }

        if($nb_langue>2)
        {
            $ligne2 = $req2->fetch();
            echo "• 🌍 Langue : <input type='text' name='langue3' value='" . $ligne2["langue"] . "'/> <select name = 'niveau3'>
                 <option value = '".$ligne2["niveau"]."'>".$ligne2["niveau"]." / 5 </option>
                 <option value = '-1'> -------</option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select><br/><br/><br/>";
        }else{
            echo "• 🌍 Langue : <input type='text' name='langue3'/>  <select name = 'niveau3'>
                 <option value = '-1'> -----</option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select><br/><br/><br/>";
        }

        if($nb_langue>3)
        {
            $ligne2 = $req2->fetch();
            echo "• 🌍 Langue : <input type='text' name='langue4' value='" . $ligne2["langue"] . "'/> <select name = 'niveau4'>
                 <option value = '".$ligne2["niveau"]."'>".$ligne2["niveau"]." / 5 </option>
                 <option value = '-1'> -------</option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select><br/><br/><br/>";
        }else{
            echo "• 🌍 Langue : <input type='text' name='langue4'/>  <select name = 'niveau4'>
                 <option value = '-1'> -----</option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select><br/><br/><br/>";
        }

        if($nb_langue>4)
        {
            $ligne2 = $req2->fetch();
            echo "• 🌍 Langue : <input type='text' name='langue5' value='" . $ligne2["langue"] . "'/> <select name = 'niveau5'>
                 <option value = '".$ligne2["niveau"]."'>".$ligne2["niveau"]." / 5 </option>
                 <option value = '-1'> -------</option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select><br/><br/>";
        }else{
            echo "• 🌍 Langue : <input type='text' name='langue5'/> <select name = 'niveau5'>
                 <option value = -1> ----- </option>
                 <option value = 1> 1 / 5 </option>
                 <option value = 2> 2 / 5 </option>
                 <option value = 3> 3 / 5 </option>
                 <option value = 4> 4 / 5 </option>
                 <option value = 5> 5 / 5 </option>
                 </select> <br/><br/>";
        }

    }else{
        echo "• 🌍 Langue : <input type='text' name='langue1'/> <select name = 'niveau1'>
                 <option value = '-1'> ----- </option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select> <br/><br/><br/>
              • 🌍 Langue : <input type='text' name='langue2'/> <select name = 'niveau2'>
                 <option value = '-1'> ----- </option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select> <br/><br/><br/>
              • 🌍 Langue : <input type='text' name='langue3'/> <select name = 'niveau3'>
                 <option value = '-1'> ----- </option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select>  <br/><br/><br/>
              • 🌍 Langue : <input type='text' name='langue4'/> <select name = 'niveau4'>
                 <option value = '-1'> ----- </option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select> <br/><br/><br/>
              • 🌍 Langue : <input type='text' name='langue5'/> <select name = 'niveau5'>
                 <option value = '-1'> ----- </option>
                 <option value = '1'> 1 / 5 </option>
                 <option value = '2'> 2 / 5 </option>
                 <option value = '3'> 3 / 5 </option>
                 <option value = '4'> 4 / 5 </option>
                 <option value = '5'> 5 / 5 </option>
                 </select> <br/><br/>";
    } ?></div>
<br/><br/><h6 style="text-align: center"><input type="submit" value="Continuer ▶️" required="required"></label></h6>

</body>
</html>
