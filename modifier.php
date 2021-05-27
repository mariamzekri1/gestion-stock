<?php
require_once('connexion.php'); 
           if(isset($_GET['modifproduct'])){
            $modifier=$_GET['modifproduct'];
            $reqModslc="SELECT * FROM myproduct WHERE id='$modifier'";
            $resul=mysqli_query($cnpstock,$reqModslc);
            $lignmod=mysqli_fetch_assoc($resul);


           }
           ?>

           <?php
              if(isset($_POST['btmodifier']))
              {
                $nom=$_POST['txtnom'];
                $prix=$_POST['txtprix'];
                $min=$_POST['txtqmin'];
                $max=$_POST['txtqmax'];
                $ctg=$_POST['txtcatg'];
                $modifier=$_GET['modifproduct'];

                $image=$_FILES['txtphoto']['tmp_name'];

                $target="Pstock/".$_FILES['txtphoto']['name'];

                move_uploaded_file($image,$target);

                $reqUpd="UPDATE myproduct SET nom='$nom',prix='$prix'
                ,qmin='$min',qmax='$max',category='$ctg',photo='$target'
                 WHERE id='$modifier'";
                 $resultat=mysqli_query($cnpstock,$reqUpd);
                 if($resultat)
                 {
                     echo "Mis a jour des données Validés";
                 }else{
                     echo "Echec de modification des Données";
                 }
              }
           ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Modifier</title>
    <link rel="stylesheet" href="style.css" />

</head>
<style>
 #container{
    width:400px;margin: 0 auto;
    margin-top: 10%;
}
#container h1{
    width: 38%;margin:0 auto;
    padding-bottom: 10px;
}
    .formulaire{
    width: 100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0,0.2),0 5px 5px 0 rgba(0, 0, 0, 0.25);
}
.zonetext{
    background-color: #008B8B
;
    color: white;
    padding: 14px 20px ;margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 90%;
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
   <div id="container">
   <form name="formUpdate" method="POST" action="" class="formulaire" enctype="multipart/form-data">
     <h2 align="center">Mettre a jour une produit</h2>

           <label><b>Id :</b></label>
           <input type="text" name="txtId" class="zonetext" value="<?php echo $_GET['modifproduct'];?>" required>

           <label><b>Nom :</b></label>
           <input type="text" name="txtnom" class="zonetext" value="<?php echo $lignmod['nom'];?>" required>

           <label><b>Prix :</b></label>
           <input type="number" name="txtprix" class="zonetext" value="<?php echo $lignmod['prix'];?>" required>

           <label><b>Quantité minimale :</b></label>
           <input type="number" name="txtqmin" class="zonetext" value="<?php echo $lignmod['qmin'];?>" required>

           <label><b>Quantité maximale :</b></label>
           <input type="number" name="txtqmax" class="zonetext" value="<?php echo $lignmod['qmax'];?>" required>

           <label><b>Catégory :</b></label>
           <input type="text" name="txtcatg" class="zonetext" value="<?php echo $lignmod['category'];?>" required>

           <label><b>Photo :</b></label>
           <input type="file" name="txtphoto" class="zonetext" value="<?php echo $lignmod['photo'];?>" required>

           <input type="submit" name="btmodifier" value="Mettre a jour" class="submit">

           <p><a href="accueil.php" class="submit">Tableau de bord</a></p>

           <label style="text-align:center;color:#960406">
          


   </form>

   </div> 
</body>
</html>  