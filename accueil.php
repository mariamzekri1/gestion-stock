<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page accueil</title>
    <link rel="stylesheet" href="style.css" />
<style>
    .myphoto{
    width: 50px;height: 50px;border-radius: 50%;border: 1px solid;
}
</style>
</head>
<body>
    <div id="global">
        <div id="tableaubord">
        <div id="profil">
            <?php
            session_start();
            echo "Bonjour et Bienvenue"." ".$_SESSION['monlogin']."<br>";
            $req="select * from utilisateurs where username='".$_SESSION['monlogin']."'";
            $resultat=mysqli_query($cnpstock,$req);
            $ligne=mysqli_fetch_assoc($resultat);
            ?>
            <img src="<?php echo $ligne['picture'];?>" class="myphoto"> 
            <br>
            <a href="deconnecter.php" class="deco">Déconnexion</a>
        </div>
            <?php include("tableaubord.php")?>
        </div>
    </div>
    
</body>
</html>