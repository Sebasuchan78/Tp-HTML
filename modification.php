<?php
session_start();

if (isset($_SESSION['user'])) {
    $connexion=new mysqli("localhost","root","","sitetp");
    $id = $_GET['id'];
    $req = "SELECT * FROM utilisateur WHERE id=$id";
    $res = $connexion->query($req);
    $ligne = mysqli_fetch_assoc($res);

  ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .text-center{
      height: 1000px;
      display: flex;
  justify-content: center;
  align-items: center;
    }
    </style>
  <title>Modification</title>



</head>
<body>

<?php
    include("navbar.php");
?>

<div class="text-center">
  <form class="d-inline-block" action="formTraitement.php?traitement=modif&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data">
  <div class="form-outline mb-4">
    <input type="text" name="Nname" id="form1Example1" class="form-control" value="<?=$ligne['nom']?>" />
    <label class="form-label" for="form1Example1">changer de nom</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" name="Nmail" id="form1Example1" class="form-control" value="<?=$ligne['email']?>"/>
    <label class="form-label" for="form1Example1">changer de mail</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" name="Nmdp" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Nouveau Mot de passe</label>
  <button type="submit" class="btn btn-primary btn-block">envoyer</button>
  </form>
</div>
  
</body>
</html>


<?php

}
else{
  echo "va te faire enculer t'es pas co";
}
?>