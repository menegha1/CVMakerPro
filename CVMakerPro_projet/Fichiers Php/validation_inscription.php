<?php
session_start();
$test_pseudo = 0;
$test_email = 0;
$pseudo = $_POST["pseudo"];
$mdp = $_POST["mdp"];
$email = $_POST["email"];
$bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
$req = $bdd->prepare("SELECT pseudo,email FROM inscription");
$req->execute();
$ligne = $req->fetch();
while($ligne)
{
    if($ligne["pseudo"] == $pseudo)
    {
        $test_pseudo++;
    }

    if($ligne["email"] == $email)
    {
        $test_email++;
    }
    $ligne = $req->fetch();
}

if($test_pseudo != 0)
{
    header("Location:insc_fail_pseudo.php");
}else{
    if($test_email != 0)
    {
        header("Location:insc_fail_email.php");
    }else{
        if($test_pseudo == 0 && $test_email == 0)
        {
            $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
            $req2 = $bdd->prepare("INSERT INTO `inscription` (`ID`, `pseudo`, `mdp`, `email`) VALUES (?, ?, ?, ?);");
            $req2->execute([NULL, $pseudo, $mdp, $email]);
            $bdd = new PDO("mysql:host=localhost;dbname=cv_makerpro;charset=utf8", "root", "");
            $req3 = $bdd->prepare("SELECT ID FROM `inscription` WHERE pseudo = ?;");
            $req3->execute([$pseudo]);
            $ligne2 = $req3->fetch();
            $_SESSION["ID"] = $ligne2["ID"];
            header("Location:profil_info_perso.php");
        }
    }
}
?>
