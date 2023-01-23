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
  <link rel="stylesheet" href="produit.css">
 
</head>


<body>

<?php
    include("navbar.php");
?>
    <div class='row'>
<?php
foreach($result as $UnResult){
 ?>
   
   <div class='product--blue'>
    <div class='product_inner'>
      <img src='<?=$UnResult['img']?>' width='300'>
      <p><?=$UnResult['nom_produit']?></p>
      <p>taille <?=$UnResult['taille_produit']?></p>
      <p>Prix <?=$UnResult['prix_produit']?>€</p>
      <a href="formTraitement.php?traitement=supp&id=<?=$UnResult['id']?>">suppression de ta race</a>
    </div>
  </div>
     
 <?php
}
?>
    </div>

</body>
</html>



<Script>
  $(function () {
    "use strict";
  
    var init = "No items yet!";
    var counter = 0;
  
    // Initial Cart
    $(".counter").html(init);
  
    // Add Items To Basket
    function addToBasket() {
      counter++;
      $(".counter")
        .html(counter)
        .animate(
          {
            opacity: "0"
          },
          300,
          function () {
            $(".counter").delay(300).animate({
              opacity: "1"
            });
          }
        );
    }
  
    // Add To Basket Animation
    $("button").on("click", function () {
      addToBasket();
      $(this)
        .parent()
        .parent()
        .find(".product_overlay")
        .css({
          transform: " translateY(0px)",
          opacity: "1",
          transition: "all ease-in-out .45s"
        })
        .delay(1500)
        .queue(function () {
          $(this)
            .css({
              transform: "translateY(-500px)",
              opacity: "0",
              transition: "all ease-in-out .45s"
            })
            .dequeue();
        });
    });
  });

</Script>

<?php
}
else{
  echo "va te faire enculer t'es pas co";
}
?>