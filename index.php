<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Projets</title>
    <link rel="stylesheet" href="style.css"/>
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
        <form action="" method="POST" class="formulaire">
            <h1>Connexion</h1>
            <label><b>Nom d'utilisateur :</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="txtlogin" required class="zonetext">
            <label><b>Mot de Pass :</b></label>
            <input type="password" placeholder="Entrer le Mot de Pass" name="txtpw" required class="zonetext">
            <input type="submit" name="btlogin" value="LOGIN" id="submit" class="submit">
             <?php
             if(isset($_POST['btlogin']))
             {
                 $req="select * from utilisateurs where username='".$_POST['txtlogin']."' and password='".$_POST['txtpw']."'"; 
                if($resultat=mysqli_query($cnpstock,$req))
                {
                   $ligne = mysqli_fetch_assoc($resultat);
                   if($ligne!=0){
                       session_start();
                       $_SESSION['monlogin']=$_POST['txtlogin'];
                       header("location:list.php");    
              
                 }
                    } else{
                        echo "<font color='#F0001D'>Login ou mot de passe est invalid</font>";
                    } 
                }       
        
             
             ?>
    </div>
     
</body>
</html>