<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Supprimer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<style>
 #container{
    width:400px;margin: 0 auto;
    margin-top: 10%;
}
.submit{
    background-color: #008B8B;
    color: white;
    padding: 14px 20px ;margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
</style>
<body>
<div class="container">
<div class="d-flex justify-content-center mb-5">
<p><a href="accueil.php" class="submit" class="deco">Tableau de bord</a></p>
</div>
</div>
<table width="100%" border="1" style="text-align:center;">
      <tr>
          <th>Id</th>
          <th>Nom</th>
          <th>Prix</th>
          <th>Catégory</th>
          <th>Q min</th>
          <th>Q max</th>
          <th>Photo</th>
      </tr>
<?php
if(isset($_GET['nomcat']))
{
    $cat=$_GET['nomcat'];
    $reqCat="SELECT * FROM myproduct WHERE category='$cat'";
    $resultat=mysqli_query($cnpstock,$reqCat);
}
    
while($ligne=mysqli_fetch_assoc($resultat))
      {
      ?>
      <tr>
          <td><?php echo $ligne['id'];?></td>
          <td><?php echo $ligne['nom'];?></td>
          <td><?php echo $ligne['prix'];?></td>
          <td><?php echo $ligne['category'];?></td>
          <td><?php echo $ligne['qmin'];?></td>
          <td><?php echo $ligne['qmax'];?></td>
          <td><img src='<?php echo $ligne['photo'];?>' class="photopro"></td>
      </tr>
      <?php
      }
      ?>
</form>

</body>
</html>