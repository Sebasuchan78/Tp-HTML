<?php
$connexion=new mysqli("localhost","root","","sitetp");

$requete="SELECT * FROM `produit`";
$result=$connexion->query($requete);
session_start();

if(isset($_SESSION['user'])){

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pproduit</title>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>

<?php
    include("navbar.php");
?>
 <div class="container">
        <div class="row mt-4">
<?php
foreach($result as $UnResult){
 ?>
   
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="<?=$UnResult['img']?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"><?= $UnResult['taille_produit']?> taille EU</h5>
                      <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted"><?=$UnResult['prix_produit']?> €</small>
                    </div>
                </div>
            </div>
     
 <?php
}
?>
   </div>
    </div>

</body>
</html>

<?php
  
}
else{
  echo "va te faire enculer t'es pas co";
}
?>