<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
    
    <div id="entete">
    <a href="accueil.php" class="login">tableau de bord</a>
<img  class="video_entete" src="Pstock/vegetable.jpeg" />

<p class="nomsite">Gestion des Produits</p>
<div id="formauto">
 <form name="formauto" method="post" action="">
 <input id="motcle" type="text" name="motcle" placeholder="Recherche par Nom..."/>
 <input class="btfind" type="submit" name="btsubmit" value="recherche"/>
</form>
</div>
</div>
 <a href="pagecatg.php" class="deco">page catégory</a> 

<div id="articles">
<?php
if(isset($_POST['btsubmit'])){
    $mc=$_POST['motcle'];
    $reqSelect="select * from myproduct where nom like '%$mc%'";
}
else{
    $reqSelect="select * from myproduct";
}
$resultat= mysqli_query($cnpstock,$reqSelect);
$nbr=mysqli_num_rows($resultat);
echo "<p><b>".$nbr. " </b> Resultats de votre Recherche...</p>";

while($ligne=mysqli_fetch_assoc($resultat))
{
?>
<div id="auto">
<img src="<?php echo $ligne['photo']?>"/><br/>
<?php echo $ligne['nom'];?><br/>
<?php echo "<p>".$ligne['prix']. "<b>  Dh</b></p>";?>
<?php echo $ligne['category'];?>

</div>
<?php } ?>


</div>
</body>
</html>