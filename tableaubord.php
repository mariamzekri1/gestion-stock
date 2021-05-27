<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
  <p><h1><b>Listes des produit</b></h1>
  <?php
    $reqselect="select * from myproduct";
    $resultat=mysqli_query($cnpstock,$reqselect);

    $nbr=mysqli_num_rows($resultat);
    echo "<p> Total <b> ".$nbr."</b> Produits</p>";
  ?>  
  <p><a href="Ajouter.php"><img src="Pstock/Ajoutericone.png" width="50px" height="50px"></a></p>
  <table width="100%" border="1"  style="text-align:center;">
      <tr>
          <th>Id</th>
          <th>Nom</th>
          <th>Prix</th>
          <th>Catégory</th>
          <th>Q min</th>
          <th>Q max</th>
          <th>Photo</th>
          <th>Supprimer</th>
          <th>Modifier</th>
      </tr>
      <?php
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
          <td><a href="supprimer.php?supproduct=<?php echo $ligne['id'];?>"><img src="Pstock/supprimer.png" width="50px" height="50px"></a></td>
          <td><a href="modifier.php?modifproduct=<?php echo $ligne['id'];?>"><img src="Pstock/modifier.png" width="50px" height="50px"></a></td>

      </tr>
      <?php
      }
      ?>
</table>
</body>
</html>